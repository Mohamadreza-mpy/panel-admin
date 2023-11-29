<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index')->with(compact('users'));
    }

    public function getCreate()
    {
        $roles = Role::all();
        return view('admin.user.create')->with(compact('roles'));
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();

        if($input['conpassword'] == $input['password'])
        {

            $password = bcrypt($input['password']);


            $user = User::firstOrCreate([
                'name' => $input['fullname'],
                'email' => $input['email'],
                'password' => $password,
                'admin' => 1,
            ]);
            if ($request->has('group')) {
                $user->assignRole($input['group']);
            }
            return redirect()->route('admin.users.index');
        }
        else
        {
            return redirect()->back()->with('error', 'تکرار رمز عبور اشتباه است');
        }
    }


    public function getEdit($id)
    {
        $data = User::find($id);
        $roles = Role::all();

        return view('admin.user.edit')->with(compact('data', 'roles'));
    }


    public function postEdit(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);

        if($input['password'] != null)
        {
            $password = bcrypt($input['password']);
            if($input['password'] == $input['conpassword'])
            {

                $user->update([
                    'name' => $input['fullname'],
                    'email' => $input['email'],

                    'password' => $password,
                ]);
                if ($request->has('group')) {
                    $user->assignRole($input['group']);
                }
            }else
            {
                return redirect()->back()->with('error', 'تکرار رمز عبور اشتباه است');
            }

        }else
        {

            $user->update([
                'name' => $input['fullname'],
                'emial' => $input['email'],

                'password' => $user->password,
                ]);
                if ($request->has('group')) {
                    $user->assignRole($input['group']);
                }
            }
            return redirect()->route('admin.users.index')->with('success', 'کاربر شما با موفقیت ویرایش شد');

        }

        public function delete($id)
        {
            $user = User::find($id)->delete();
            return redirect()->route('admin.users.index');
        }


    public function createUserVue(Request $request)
    {
        $input = $request->all();
        $user = User::where('mobile', $input['mobile'])->first();
        if(!$user)
        {
            $user = User::firstOrCreate([
                'name'=>$input['name'],
                'mobile'=>Helper::persian2LatinDigit($input['mobile']),
                'admin' => 0,
                'action' => 'admin'
            ]);
        }

        return response()->json([
            'user_id' => $user->id,
        ]);
    }
}
