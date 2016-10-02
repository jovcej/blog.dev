<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Articles</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<style>
    body {
        font-family: 'Lato';
        background-color: whitesmoke;
    }
    .top{
        background-color: teal;
    }
    .fa-btn {
        margin-right: 6px;
    }
    .published{

        float:right;

    }
    .title{
        margin-top: -105px;
        margin-left: 230px;
    }
   .btn-default{
       margin-left: 986px;
       margin-top: -25px;
   }
    .btn-danger{
        margin-left: 1045px;
        margin-top: 2px;
        margin-bottom: -15px;
    }
    .bottom{
        margin-left: 630px;
        color: teal;
    }

</style>


<body>

<div class="top">

  <div class="container">
    <table>
        <tr>
            <td width="3%"><h1 class="text">Bazaar</h1> </td>
            <td width="4%"><a href="http://blog.dev/public/article/create" ><h1 class="glyphicon glyphicon-plus btn btn-info" id="char"> ADD ARTICLE</h1></a></td>
        </tr>
    </table>

  </div>

</div>
<br>
@yield('content')
<hr style="width: 95%; color: whitesmoke; height: 1px; background-color:darkgrey;" />
<div class="bottom"><label>DESIGNED BY:<br><i>Jovan Jaulevski</i></label></div>
</body>
</html>

