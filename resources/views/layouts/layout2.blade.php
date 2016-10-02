<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Description</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<style>
    .list-group-item {
        float: left;
        width: 100%;
        height: auto;
        margin-top: 20px;
    }
    .image {
        float: left;
        width: 46%;
    }
    .description {
        float: right;
        margin-top: 20px;
        width: 50%;
    }
    .text {
        height: 180%;
        word-wrap: break-word;
        white-space: pre-wrap;
    }
    .information {
        float: left;
        margin-top: 380px;
        margin-left: -500px;
    }
    body {
        font-family: 'Lato';
        background-color: whitesmoke;
    }
    .top{
        background-color: teal;
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
                <td width="3%"><h1 ><a class="text-danger" href="http://blog.dev/public/article">Bazaar</a></h1> </td>
            </tr>
        </table>
    </div>

</div>

@yield('content')
<hr style="width: 95%; color: whitesmoke; height: 1px; background-color:darkgrey;" />
<div class="bottom"><label>DESIGNED BY:<br><i>Jovan Jaulevski</i></label></div>




</body>
</html>

