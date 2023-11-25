<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $categories = ArticleCategory::all();
        return view('admin.category-article.index')->with(compact('categories'));
    }

    public function getCreate ()
    {
        return view('admin.category-article.create');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();

//        if ($request->hasFile('image')) {
//
//            $pathMain = "assets/uploads";
//            $extensionf = $request->file('image')->getClientOriginalName();
//            $extension = $request->file('image')->getClientOriginalExtension();
//            $w = str_replace($extension, "webp", $extensionf);
//            $fileName = md5(microtime()). "$w";
//            $request->file('image')->move($pathMain, $fileName);
//            $input['image'] = $fileName;
//        }
        $cat = ArticleCategory::create([
            'title' => $input['title'],
            'description' => $input['description'],

        ]);
        return redirect()->route('admin.articleCategory.index')->with('success', 'آیتم شما با موفیقت ذخیره شد');
    }

    public function getEdit($id)
    {
        $data = ArticleCategory::find($id);

        return view('admin.category-article.edit')->with(compact('data'));
    }

    public function postEdit($id, Request $request)
    {
        $input = $request->all();
        $cat = ArticleCategory::find($id);
//
//        if ($request->has('image')) {
//            $pathMain = "assets/uploads";
//            $extensionf = $request->file('image')->getClientOriginalName();
//            $extension = $request->file('image')->getClientOriginalExtension();
//            $w = str_replace($extension, "webp", $extensionf);
//            $fileName = md5(microtime()). "$w";
//            $request->file('image')->move($pathMain, $fileName);
//            $input['image'] = $fileName;
//        }else{
//            $image = $cat->image;
//        }

        $cat->update($input);
        return redirect()->route('admin.articleCategory.index')->with('success', 'آیتم شما با موفیقت ویرایش شد');
    }

    public function delete($id)
    {
        $cat = ArticleCategory::find($id)->delete();
        return redirect()->back()->with('success', 'آیتم شما با موفیقت حذف شد');
    }

}
