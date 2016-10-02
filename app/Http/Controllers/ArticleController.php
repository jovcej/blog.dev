<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Article;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function create(){
        $tables = Article::orderBy('id', 'desc')->get();

        return view('article', compact('tables'));
    }

    public function task(Article $task){
        $task->delete();

        return redirect('article');
    }

    public function edit($id) {
        $provider = Article::find($id);

        return view('update',compact('provider'));

    }

    public function update($id,Request $request){


        $validator = Validator::make($request->all(),[
            "title" => "required|max:20",
            "text" => "required|max:255",
            "name" => "required|max:20",
            "email" => "required|email|max:25",
            "number" => "required|regex:/^[0-9\-\+]{9}$/",
            "published_at" => "required|date",
            "picture" => "required|image|mimes:jpg,png,jpeg,gif|max:10000"
        ]);

        if ($validator->fails()) {
            $message = $validator->messages();

            return redirect('edit/'. $id)
                ->withErrors($message)
                ->withInput();

        }else {

            $table =  Article::find($id);

            $table->title = Input::get('title');
            $table->text = Input::get('text');
            $table->name = Input::get('name');
            $table->email = Input::get('email');
            $table->number = Input::get('number');
            $table->published_at = Input::get('published_at');
            $table->picture = Input::file('picture')->getClientOriginalName();

            $table->save();

            return redirect('article');
        }
    }
}






