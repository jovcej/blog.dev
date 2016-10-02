<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">





     <title>Create articles</title>

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
        .picture{
            margin-left: 370px;
            margin-top: -80px;
        }
        .container{
            margin-top: -5px;
            margin-left: 110px;
        }
        #sidebar {
            width: 90px;
            height: 580px;
            background-color: teal;
            float: left;
        }
        #submit{
            margin-left: -273px;
            margin-top: 10px;;
        }
        .row{
            margin-left: -1px;
        }
        .bazaar{
            margin-left: 750px;
            margin-top: -530px;
        }
        .text{
            margin-top: -380px;
        }
        .bottom{
            margin-left: 510px;
            color: teal;
        }
        .btn-info{
            margin-top: 507px;
            margin-left: 300px;
        }
</style>

<body>

    <div id="sidebar"><br>
        <form method="POST"  enctype="multipart/form-data" action="">

            {{ csrf_field() }}
            <div class="container  @if($errors->has('title' )) has-error   @endif" >
                <div class='col-sm-6'>
                    <label for="title">Title</label>
                    <label> @if( $errors->has('title'))  @endif</label>
                    <span  @if( $errors->has('title'))   class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
                    <input type="text"  class="form-control input-sm" id="title" name="title"  value="{{old('title')}}"   placeholder="input title" >
                </div>
            </div><br>

            <div class="container @if($errors->has('text' )) has-error @endif">
                <div class='col-sm-6'>
                    <label for="text">Description</label>
                    <span>@if( $errors->has('text'))  @endif</span>
                    <span  @if( $errors->has('text')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
                    <textarea class="form-control input-sm"  id="text" name="text"  placeholder="input description">{{old('text')}}</textarea>
                </div>
            </div><br>

            <div class="container @if($errors->has('name' )) has-error @endif">
                <div class='col-sm-6'>
                    <label for="name">Name</label>
                    <span>@if( $errors->has('name'))  @endif</span>
                    <span  @if( $errors->has('name')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
                    <input type="text" class="form-control input-sm" id="name" name="name" value="{{old('name')}}" placeholder="input name">
                </div>
            </div><br>

            <div class="container @if($errors->has('email' )) has-error @endif">
                <div class='col-sm-6'>
                    <label for="email">Email</label>
                    <span>@if( $errors->has('email'))  @endif</span>
                    <span  @if( $errors->has('email')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
                    <input type="text" class="form-control input-sm" id="email" name="email" value="{{old('email')}}" placeholder="input email">
                </div>
            </div><br>

            <div class="container @if($errors->has('number')) has-error @endif">
                <div class='col-sm-6'>
                    <label for="number">Phone number</label>
                    <span>@if( $errors->has('number'))  @endif</span>
                    <span  @if( $errors->has('number')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
                    <input type="text" class="form-control input-sm" id="number" name="number" value="{{old('number')}}"  placeholder="07XXXXXXX">
                </div>
            </div><br>

            <div class="container @if($errors->has('published_at' )) has-error @endif">
                <div class="row">
                    <div class='col-sm-3'>
                        <div class="form-group">
                            <label for="published">Published_at</label>
                            <span>@if( $errors->has('published_at'))  @endif</span>
                            <span  @if( $errors->has('published_at')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='datetime'   class="form-control input-sm" id="published" name="published_at" value="{{old('published_at')}}"  placeholder="published" />
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
                <div class="picture">
                    <label>Picture</label>
                    <span>@if( $errors->has('picture'))  @endif</span>
                    <span  @if( $errors->has('picture')) class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"  @endif></span>
                    <input type="file"  name="picture">
                </div>
            </div>

            <div class="container">
                <button type="submit" id="submit" class="btn btn-info">SUBMIT</button>
                <hr style="width: 105%; color: whitesmoke; height: 1px; background-color:darkgrey;" />
                <div class="bottom"><label>DESIGNED BY:<br><i>Jovan Jaulevski</i></label></div>
            </div>

            <div class="bazaar">
                <img src={{ URL::to ('/uploads/bazaar.jpg' ) }}>
            </div>
        </form>

        <div class="text">
            <h2>Bazaar</h2>
        </div>
    </div>

</body>
</html>

