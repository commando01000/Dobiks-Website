<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\PermissionsDataTable;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:manage-permission|create-permission|edit-permission|delete-permission', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:create-permission', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:edit-permission', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:delete-permission', ['only' => ['destroy']]);
    // }

    public function index()
    {
        $permissions = Permission::paginate(10);
        return view('back.permission.index', compact('permissions'));
    }

    public function create()
    {

        return view('back.permission.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        ]);
        Permission::create($request->all());
        return redirect()->route('permission.index')
            ->with('success',  __('Permission created successfully.'));
    }

    public function edit($id)
    {
        $permission = Permission::find($id);

        return view('back.permission.edit', compact('permission'));
    }
    public function update(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->update($request->except('_token'));
        return redirect()->route('permission.index')
            ->with('success',  __('Permission updated successfully.'));
    }

    public function destroy($id)
    {
        DB::table("role_has_permissions")->where('permission_id', $id)->delete();
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->route('permission.index')
            ->with('success',  __('Permission deleted successfully.'));
    }
}
