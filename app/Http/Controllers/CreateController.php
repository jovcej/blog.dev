<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Article;

class CreateController extends Controller
{
    public function home()
    {
        return view('create');
    }


    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
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

            return redirect('article/create')->withErrors($message)->withInput();
        } else {

            if ($validator->passes()) {


                $table = new Article;

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
        return ($request);


    }

}








