@extends('layouts.app')

@section('content')
<div class="container">
    <!-- First row -->
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ asset('logo/freeCodeCamp.jpg') }}" class="rounded-circle " style="    height: 100px; width: 120px;" alt="FreeCodeCamp">
        </div>
        <div class="col-9 pt-5">
            <div><h1> {{$user->username}} </h1></div>
            <div class="d-flex">
                <div class="pr-5"> <strong>153</strong> Posts </div>
                <div class="pr-5"> <strong>23K</strong> Followers </div>
                <div class="pr-5"> <strong>212</strong> Following </div>
            </div>
            <div class="pt-4 font-weight-bold">FreeCodeCamp</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste at facere quos delectus veniam, quod voluptatem, quis quo nihil cum dignissimos voluptate amet enim nobis.</div>
            <div><a href="#">WWW.FreeCodeCamp.org</a> </div>
        </div>
    </div>
    <!-- First Row End -->
    <!-- Scound Row Start -->
    <div class="row pt-5">
        <div class="col-4 w-100" style="height: 100px; width: 100px;" ><img class="img-fluid"  src="{{asset('image/flower_1.jpeg')}}" alt="Flower"> </div>
        <div class="col-4 w-100" style="height: 100px; width: 100px;" ><img class="img-fluid"  src="{{asset('image/flower_2.jpeg')}}" alt="Flower"> </div>
        <div class="col-4 w-100" style="height: 100px; width: 100px;" ><img class="img-fluid"  src="{{asset('image/flower_3.jpeg')}}" alt="Flower"> </div>
    </div>
    
</div>
@endsection
