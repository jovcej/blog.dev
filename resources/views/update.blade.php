


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">





    <title>Article</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>


</head>

<style>


    body {
        font-family: 'Lato';
        background-color: whitesmoke;

    }

    .top{
        background-color: teal;
        left: 30px;
    }

    .fa-btn {
        margin-right: 6px;
    }
    .glyphicon {
        color: indianred;

    }
    #picture{
        color: red;
    }
    .container{
        margin-top: -5px;
        margin-left: 110px;
    }
    #sidebar {
        width: 90px;
        height: 557px;
        background-color: teal;
        float: left;
    }
    #submit{
        margin-left: 280px;
        margin-top: -45px;;
    }

</style>

<body>
<div id="sidebar">
<br>


    {{Form::model($provider, array('method'=>'PUT','enctype'=>'multipart/form-data','route' => array('update.update', $provider->id)))}}
        {{ csrf_field() }}

        <div class="container  @if($errors->has('title' )) has-error   @endif" >
            <label for="title">Title</label>
            <label> @if( $errors->has('title'))  @endif</label>
            <span  @if( $errors->has('title'))   class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
            <input type="text"  class="form-control" id="title" name="title" value="{{ (old('title')) ? old('title') : $provider->title }}"  placeholder="input title"><br>
        </div>

        <div class="container @if($errors->has('text' )) has-error @endif">
            <label for="text">Text</label>
            <span>@if( $errors->has('text'))  @endif</span>
            <span  @if( $errors->has('text')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
            <textarea class="form-control"  id="text" name="text"   placeholder="input text">{{ (old('text')) ? old('text') : $provider->text }}</textarea><br>
        </div>

        <div class="container @if($errors->has('name' )) has-error @endif">
            <label for="name">Name</label>
            <span>@if( $errors->has('name'))  @endif</span>
            <span  @if( $errors->has('name')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
            <input type="text" class="form-control" id="name" name="name" value="{{ (old('name')) ? old('name') : $provider->name }}" placeholder="input name"><br>
        </div>

        <div class="container @if($errors->has('email' )) has-error @endif">
            <label for="email">Email</label>
            <span>@if( $errors->has('email'))  @endif</span>
            <span  @if( $errors->has('email')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
            <input type="text" class="form-control" id="email" name="email" value="{{ (old('email')) ? old('email') : $provider->email }}" placeholder="input email"><br>
        </div>

        <div class="container @if($errors->has('number')) has-error @endif">
            <label for="number">Phone number</label>
            <span>@if( $errors->has('number'))  @endif</span>
            <span  @if( $errors->has('number')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
            <input type="text" class="form-control" id="number" name="number" value="{{ (old('number')) ? old('number') : $provider->number }}"  placeholder="07XXXXXXX"><br>
        </div>

        <div class="container @if($errors->has('published_at' )) has-error @endif">
            <div class="row">
                <div class='col-sm-4'>
                    <div class="form-group">
                        <label for="published">Published_at</label>
                        <span>@if( $errors->has('published_at'))  @endif</span>
                        <span  @if( $errors->has('published_at')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
                        <div class='input-group date' id='datetimepicker2'>
                            <input type='datetime'   class="form-control" id="published" name="published_at" value="{{ (old('published_at')) ? old('published_at') : $provider->published_at }}"  placeholder="published" />
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker2').datetimepicker({

                        });
                    });
                </script>
            </div>
        </div>

        <div class="container @if($errors->has('picture' )) has-error @endif"><br>
            <label>Picture</label>
            <span>@if( $errors->has('picture'))  @endif</span>
            <span  @if( $errors->has('picture')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
            <input type="file" id="picture" name="picture">
        </div>

        <div class="container">
            <button type="submit" id="submit" class="btn btn-info">SUBMIT</button>
        </div>


    {{Form::close()}}
</div>

</body>
</html>





<style>
    .btn-info{
        margin-top: 507px;
        margin-left: 300px;
    }
</style>
