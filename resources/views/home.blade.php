@extends('layout.master')

@section('title', 'Home')

@section('content')
        <h1>Content</h1>
        @foreach($products as $product)
        {{--***************1 Product start*****************--}}
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h3 style=" text-align: center">$ {{$product->price}}</h3>
                {{--@foreach(unserialize($product->imgs) as $img)
                    <img src="{{asset('img/uploads/'.$img)}}" alt="..." style="width: 200px;height: auto;">
                @endforeach--}}
                <img src="{{asset('img/uploads/'.unserialize($product->imgs)[0])}}" alt="..." style="width: 200px;height: auto;">
                <div class="caption">
                    <h3 style="text-align: center" class="burmese">{{$product->title}}</h3>
                    <p class="burmese">{{substr($product->description, 0, 150)}} ...</p>
                    <p>
                        <a href="#" class="btn btn-info" role="button">View Detail</a>
                        <a href="{{action('PageController@addCart', $product->id)}}" class="btn btn-warning pull-right" role="button">Add To Cart</a>
                    </p>
                </div>
            </div>
        </div>
        {{--***************1 Product end*****************--}}
    @endforeach
@endsection