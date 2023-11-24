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
            if ($request->hasFile('image')) {

                $pathMain = "assets/uploads";
                $extensionf = $request->file('image')->getClientOriginalName();
                $extension = $request->file('image')->getClientOriginalExtension();
                $w = str_replace($extension, "webp", $extensionf);
                $fileName = md5(microtime()). "$w";
                $request->file('image')->move($pathMain, $fileName);
                $input['image'] = $fileName;
            }
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
                if ($request->hasFile('image')) {

                    $pathMain = "assets/uploads";
                    $extensionf = $request->file('image')->getClientOriginalName();
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $w = str_replace($extension, "webp", $extensionf);
                    $fileName = md5(microtime()). "$w";
                    $request->file('image')->move($pathMain, $fileName);
                    $image= $fileName;
                }else
                {
                    $image = $user->image;
                }

                $user->update([
                    'name' => $input['fullname'],
                    'email' => $input['email'],
                    'image' => $image,
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
            if ($request->hasFile('image')) {

                $pathMain = "assets/uploads";
                $extensionf = $request->file('image')->getClientOriginalName();
                $extension = $request->file('image')->getClientOriginalExtension();
                $w = str_replace($extension, "webp", $extensionf);
                $fileName = md5(microtime()). "$w";
                $request->file('image')->move($pathMain, $fileName);
                $image = $fileName;
            }else
            {
                $image = $user->image;
            }
            $user->update([
                'name' => $input['fullname'],
                'emial' => $input['email'],
                'image' => $image,
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
