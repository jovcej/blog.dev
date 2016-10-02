@extends('layouts.layout1')

@section('content')
    <div class="container">

        @if(count($tables) > 0)
            <ul class="list-group">
                @foreach($tables as $table)
                    <li class="list-group-item">
                        <a href={{URL::to( "article/edit/" . $table->id . '/' . $table->title = str_slug($table->title,'-')) }}>
                            <img src={{ URL::to ('/uploads/'. $table->picture ) }} width="200" height="165"  class="img-thumbnail"></a>

                        <div class="published"> {{ $table->published_at }}</div>

                        <a  href={{URL::to("article/edit/" . $table->id . '/' . $table->title = str_slug($table->title,'-')) }}>
                            <div class="title"><h1>{{ $table->title = str_slug($table->title,' ')}}</h1></div></a>



                        <form action="{{ url('article/task/'. $table->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </div>
                        </form>

                        <form action="{{ url('edit/'. $table->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-trash"></i> Edit
                                </button>
                            </div>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif

    </div>
@endsection

