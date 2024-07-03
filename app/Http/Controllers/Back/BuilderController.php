<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use App\Models\Project;

use Illuminate\Http\Request;
use Storage;
class BuilderController extends Controller
{
    public function index($id,$db)
    {
        if ($db == 'pages') {
            $data = PageSetting::findOrFail($id);
        }elseif($db == 'projects'){
            $data = Project::findOrFail($id);
        }

//        $lang = UtilityFacades::getActiveLanguage();
//        $data['lang'] =\App::setLocale($lang);
        $data['lang'] ='en';
        $data['type'] =$db;
        $components = !empty($data['components']) ? json_decode($data['components'], true) : [];
        $components = str_replace("{base_url}", url('/'), json_encode($components));
        $data['components'] = json_decode($components, true);

        $styles = !empty($data['styles']) ? json_decode($data['styles'], true) : [];
        $styles = str_replace("{base_url}", url('/'), json_encode($styles));
        $data['styles'] = json_decode($styles, true);
        return view('back/builder.index', $data);
    }
    public function upload(Request $request)
    {

        foreach ($request->file('files') as $file) {
//        $image = $file;  // your base64 encoded
//        $image = str_replace('data:image/png;base64,', '', $image);
//        $image = str_replace(' ', '+', $image);
        $imageName = uniqid().'.'.'png';
        $directory = 'www';
        Storage::putFileAs($directory, $file,$imageName);
        $imageUrl = Storage::url($directory.'/'.$imageName);

        $assets[] = [
            'name' => $imageName,
            'type' => 'image',
            'src' =>  $imageUrl,
            'height' => 350,
            'width' => 250
        ];

        return response()->json(['data' => $assets]);


        }
//        foreach ($request->file('files') as $file) {
//            $fileName = $file->store('www');
//            $CKEditorFuncNum    = $request->input('CKEditorFuncNum');
//            $url                = Storage::url($fileName);
//
//            $msg                = 'Image uploaded successfully';
//            $response           = "<script>window.parent.CKEDITOR.tools.callFunction('$url', '$msg')</script>";
//
//          //  @header('Content-type: text/html; charset=utf-8');
//            echo $response;
//        }

    }
    public function save(Request $request)
    {
        if ($request->type == 'pages') {
            $data = PageSetting::findOrFail($request->id);
        }
//        return $request;

        $data->html = $request->html;

        $css = str_replace(url('/'), "{base_url}", $request->css);
        $data->css = $css;
        $components = str_replace(url('/'), "{base_url}", $request->components);
        $data->components = $components;
        $styles = str_replace(url('/'), "{base_url}", $request->styles);
        $data->styles = $styles;
        $data->save();

        return "success";



//
//        // replace HTML with 'service category' short code
//        $html = $this->replace_content_inside_delimiters("<service-category-section>", "</service-category-section>", '[pagebuilder-service-category][/pagebuilder-service-category]', $html);
//        // replace HTML with 'Services' short code
//        $html = $this->replace_content_inside_delimiters("<services-section>", "</services-section>", '[pagebuilder-services][/pagebuilder-services]', $html);
//        // replace HTML with 'Portfolios' short code
//        $html = $this->replace_content_inside_delimiters("<portfolios-section>", "</portfolios-section>", '[pagebuilder-portfolios][/pagebuilder-portfolios]', $html);
//        // replace HTML with 'FAQ' short code
//        $html = $this->replace_content_inside_delimiters("<faq-section>", "</faq-section>", '[pagebuilder-faq][/pagebuilder-faq]', $html);
//        // replace HTML with 'Team' short code
//        $html = $this->replace_content_inside_delimiters("<team-section>", "</team-section>", '[pagebuilder-team][/pagebuilder-team]', $html);
//        // replace HTML with 'Statistics' short code
//        $html = $this->replace_content_inside_delimiters("<statistics-section>", "</statistics-section>", '[pagebuilder-statistics][/pagebuilder-statistics]', $html);
//        // replace HTML with 'Testimonial' short code
//        $html = $this->replace_content_inside_delimiters("<testimonial-section>", "</testimonial-section>", '[pagebuilder-testimonial][/pagebuilder-testimonial]', $html);
//        // replace HTML with 'Packages' short code
//        $html = $this->replace_content_inside_delimiters("<packages-section>", "</packages-section>", '[pagebuilder-packages][/pagebuilder-packages]', $html);
//        // replace HTML with 'Blogs' short code
//        $html = $this->replace_content_inside_delimiters("<blogs-section>", "</blogs-section>", '[pagebuilder-blogs][/pagebuilder-blogs]', $html);
//        // replace HTML with 'Approach' short code
//        $html = $this->replace_content_inside_delimiters("<approach-section>", "</approach-section>", '[pagebuilder-approach][/pagebuilder-approach]', $html);
//        // replace HTML with 'Partners' short code
//        $html = $this->replace_content_inside_delimiters("<partner-section>", "</partner-section>", '[pagebuilder-partner][/pagebuilder-partner]', $html);
//        // replace HTML with 'Featured Products' short code
//        $html = $this->replace_content_inside_delimiters("<fprod-section>", "</fprod-section>", '[pagebuilder-featured-product][/pagebuilder-featured-product]', $html);
//        // replace HTML with 'Newsletter' short code
//        $html = $this->replace_content_inside_delimiters("<newsletter-section>", "</newsletter-section>", '[pagebuilder-newsletter-section][/pagebuilder-newsletter-section]', $html);
//        // replace HTML with 'Featured Product Category' short code
//        $html = $this->replace_content_inside_delimiters("<fpcat-section>", "</fpcat-section>", '[pagebuilder-fproduct-category-section][/pagebuilder-fproduct-category-section]', $html);
//        // replace HTML with 'Home Product Category' short code
//        $html = $this->replace_content_inside_delimiters("<hcat-section>", "</hcat-section>", '[pagebuilder-hproduct-category-section][/pagebuilder-hproduct-category-section]', $html);


    }
    public function replace_content_inside_delimiters($start, $end, $new, $html) {
        $startDelimiterLength = strlen($start);
        $endDelimiterLength = strlen($end);
        $startFrom = $contentStart = $contentEnd = 0;
        $contents = [];
        while (false !== ($contentStart = strpos($html, $start, $startFrom))) {
            $contentStart += $startDelimiterLength;
            $contentEnd = strpos($html, $end, $contentStart);
            if (false === $contentEnd) {
                break;
            }
            $content = substr($html,$contentStart, $contentEnd - $contentStart);
            $contents[] =  $content;
            $startFrom = $contentEnd + $endDelimiterLength;
        }

        if(!empty($contents)) {
            foreach($contents as $content) {
                if(!empty($content)) {
                    $html = str_replace($content,$new,$html);
                }
            }
        }

        return $html;
    }
    public function remove(Request $request)
    {}
}