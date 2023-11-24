<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index',compact('roles'));
    }

    public function getCreate()
    {
        return view('admin.role.create');
    }

    public function postCreate(Request $request)
    {
        $role = new Role();
        $role->title = $request->get('title');
        $role->permission = serialize($request['access']);
        $role->save();

        if($role->save())
        {
            return redirect()->route('admin.role.index')->with('success', 'سطح دسترسی جدید ساخته شد');

        }
    }

    public function getEdit($id)
    {
        $data = Role::find($id);
        return view('admin.role.edit')->with(compact('data'));
    }

    public function postEdit($id, Request $request)
    {
        $role = Role::find($id);


        $role->title = $request->get('title');

        $role->permission = serialize($request['access']);

        $role->save();

        if ($role->save()) {

            return redirect()->route('admin.role.index')->with('success', 'سطح دسترسی مورد نظر با موفقیت ویرایش شد.');
        }


    }

    public function delete($id)
    {
        $role = Role::find($id)->delete();
        return redirect()->route('admin.role.index')->with('success', 'سطح دسترسی مورد نظر با موفقیت حذف شد');
    }
}
