@extends('top')

@section('title','introduction')

@section('container')

    <div class="in-box">
        <form action="edit-in" method="post" enctype="multipart/form-data">
        <div class="in-item"></div>
            <textarea name="content">{{$content}}</textarea>
        </div>
        <div class="in-item">
            {{$img}}
            <input type="file" name="img" value="">
        </div>
        <div class="in-item">
            @csrf
            <input type="submit">
        </div>
        </form>
    </div>

@endsection