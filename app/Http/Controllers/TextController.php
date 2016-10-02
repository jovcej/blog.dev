<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
class TextController extends Controller
{
    public function edit($id,$title){

        $table = DB::table('articles')->where("id", $id)->value('text');
        $tables = DB::table('articles')->where("id", $id)->value('picture');
        $name = DB::table('articles')->where("id", $id)->value('name');
        $number = DB::table('articles')->where("id", $id)->value('number');
        $email = DB::table('articles')->where("id", $id)->value('email');
        $title = DB::table('articles')->where("title", $title)->value('title');
        $title = str_slug( $title , '-');

       return view('edit')->with(['text'=>$table, 'picture'=>$tables, 'title'=>$title, 'name'=>$name,
                                'number'=>$number, 'email'=>$email]);


    }


}
