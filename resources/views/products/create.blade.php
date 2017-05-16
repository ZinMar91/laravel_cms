@extends('layout.master')

@section('title', 'Products|Create')

@section('content')
    <h1>Insert Product Here!</h1>
    <div class="container-fluid">
        <div class="well">
            {{--**************************Form Start***************************--}}
            <form method="post" enctype="multipart/form-data">
                @if(session('status'))
                        <p class="alert alert-success">{{session('status')}}</p>
                    @endif
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                {{csrf_field()}}
                <legend>Insert a new product...</legend>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image[]" id="image" style="color: #fff;" multiple>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            {{--**************************Form End***************************--}}
        </div>
    </div>
@endsection