@extends('layouts.layout2')

@section('content')

<div class="container">

   <div class="list-group-item">
       <div class="image"> <img src= {{URL::to('/uploads/' . $picture  )}} width="500" height="200" class="img-thumbnail"></div>


           <div class="description"><label>DESCRIPTION:</label>
               <div class="hr"><hr></div>
               <div class="text">{{$text}}</div>
           </div>

            <div class="information">
                <div class="name"><b>Name: </b>{{$name}}</div>
                <div class="email"><b>Email: </b> <i>{{$email}}</i></div>
                <div class="number"><b>Phone: </b> <b>{{$number}}</b></div>
            </div>
   </div>

</div>

@endsection