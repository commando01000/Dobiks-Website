<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuSetting;
use App\Models\PageSetting;

class MenuController extends Controller
{
    public function index()
    {

        $MainMenus = MenuSetting::where('parent_id', 0)->orderby('sort','desc')->get();
        foreach ($MainMenus as $key=>$record){
            $MainMenus[$key]['SubMenus'] = MenuSetting::where('parent_id', '=', $record['id'])->orderby('sort','desc')->get();
        }
        $pages = PageSetting::pluck('title', 'id');
        $system = $this->system();
        return view('back.menu.index', compact('MainMenus','pages','system'));
    }
    public function MenuStore(Request $request)
    {
        if($request->type == 'system'){
            request()->validate([
                'slug' => 'required',
            ]);
            $system = $this->system();
foreach ($system as $k=>$record){
    if($k == $request->slug){
        $title = $record;
    }
}

            $Menu               = new MenuSetting();
            $Menu->type         = $request->type;
            $Menu->title        = $title;
            $Menu->sort         = 0;
            $Menu->slug         = $request->slug;
            $Menu->parent_id    = $request->parent_id;
            $Menu->save();
        }
        if($request->type == 'link'){
            request()->validate([
                'slug' => 'required',
                'title' => 'required',
            ]);
            $Menu               = new MenuSetting();
            $Menu->type         = $request->type;
            $Menu->title        = $request->title;
            $Menu->sort         = 0;
            $Menu->slug         = $request->slug;
            $Menu->parent_id    = $request->parent_id;
            $Menu->save();
        }
        if($request->type == 'page'){
            request()->validate([
                'page_id' => 'required',
            ]);
            $page = PageSetting::select('title','slug')->find($request->page_id);
            $title = $page['title'];
            $slug = 'pages'.$page['slug'];
            $Menu               = new MenuSetting();
            $Menu->type         = $request->type;
            $Menu->title        = $title;
            $Menu->sort         = 0;
            $Menu->slug         = str_replace('pages','/pages/',$slug);
            $Menu->page_id      = $request->page_id;
            $Menu->parent_id    = $request->parent_id;
            $Menu->save();
        }
        return redirect()->back()->with('success', 'Menu created successfully');
    }
    public function system(){
        $system['/contact'] = __('Contact Us');
        $system['/blogs'] = __('Blogs');
        $system['/projects'] = __('Projects');
        $system['/faqs'] = __('Faq');
        return $system;
    }
    public function MenuEdit($id)
    {
        $Menu = MenuSetting::where('id', $id)->first();
        $MainMenus = MenuSetting::where('parent_id', 0)->orderby('sort','desc')->get();
        foreach ($MainMenus as $key=>$record){
            $MainMenus[$key]['SubMenus'] = MenuSetting::where('parent_id', '=', $record['id'])->orderby('sort','desc')->get();
        }
        $system = $this->system();
        $pages = PageSetting::get();
        return view('back.menu.edit', compact('MainMenus','pages','system','Menu'));

    }
    public function MenuUpdate(Request $request)
    {
        request()->validate([
            'id' => 'required',
        ]);

        $Menu = MenuSetting::where('id', $request->id)->first();

        if($Menu->type == 'system'){
            request()->validate([
                'title' => 'required',
            ]);
            $Menu->title        = $request->title;
            $Menu->parent_id    = $request->parent_id;
            $Menu->save();
        }
        if($Menu->type == 'link'){
            request()->validate([
                'slug' => 'required',
                'title' => 'required',
            ]);
            $Menu->title        = $request->title;
            $Menu->slug         = $request->slug;
            $Menu->parent_id    = $request->parent_id;
            $Menu->save();
        }
        if($Menu->type == 'page'){
            request()->validate([
                'parent_id' => 'required',
            ]);
            $Menu->parent_id    = $request->parent_id;
            $Menu->save();
        }





        return redirect()->back()->with('success', 'Menu updated successfully');
    }
    public function MenuDelete($id)
    {
        $MainMenu = MenuSetting::find($id);
        if ($MainMenu->parent_id == 0) {
            MenuSetting::where('parent_id', $id)->delete();
        }
        $MainMenu ->delete();
        return redirect()->back()->with('success', 'Menu Updated Successfully');
    }
    public function MenuSort($id,$next_id){
        $record1 = MenuSetting::find($id);
        $record2 = MenuSetting::find($next_id);
        if($record1->sort > $record2->sort ){
            $record1->sort = $record2->sort - 1;
        }else{
            $record1->sort = $record2->sort + 1;
        }
        $record1->save();
        return redirect()->back()->with('success', 'Menu Updated Successfully');

    }
}
