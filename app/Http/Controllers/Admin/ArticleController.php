<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index')->with(compact('articles'));
    }

    public function getCreate()
    {
        $categoryArticles = ArticleCategory::all();
        return view('admin.article.create')->with(compact('categoryArticles'));
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();

        $input['index_page'] = $request->get('index_page') ? 1 : 0;
//        if ($request->hasFile('image')) {
//
//            $pathMain = "assets/uploads";
//            $extensionf = $request->file('image')->getClientOriginalName();
//            $extension = $request->file('image')->getClientOriginalExtension();
//            $w = str_replace($extension, "webp", $extensionf);
//            $fileName = md5(microtime()) .'.'."$extension";
//            $request->file('image')->move($pathMain, $fileName);
//            $input['image'] = $fileName;
//        }
        $article = Article::create([

            'category_id' => $input['category_id'],
            'title' => $input['title'],
            'description' => $input['description'],

        ]);

        return redirect()->route('admin.article.index')->with('success', 'مقاله شما با  موفقیت اضافه شد');
    }

    public function getEdit($id)
    {
        $data = Article::find($id);
        $categoryArticles = ArticleCategory::all();
        return view('admin.article.edit')->with(compact('data', 'categoryArticles'));
    }

    public function postEdit($id,Request $request)
    {
        $input = $request->all();

        $article = Article::find($id);


//        if ($request->has('image')) {
//            $pathMain = "assets/uploads";
//            $extensionf = $request->file('image')->getClientOriginalName();
//            $extension = $request->file('image')->getClientOriginalExtension();
//            $w = str_replace($extension, "webp", $extensionf);
//            $fileName = md5(microtime()) .'.'."$extension";
//            $request->file('image')->move($pathMain, $fileName);
//            $input['image'] = $fileName;
//        }else{
//            $image = $article->image;
//        }

        $article->update($input);
        return redirect()->route('admin.article.index')->with('success', 'مقاله شما یا موفقیت ویرایش شد');
    }

    public function delete($id)
    {
        $article = Article::find($id)->delete();
        return redirect()->back()->with('success', 'مقاله شما با موفقیت حذف شد');
    }
}
