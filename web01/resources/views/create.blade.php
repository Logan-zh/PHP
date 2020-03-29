@extends('top')

@section('title','create')

@section('container')
    <div class="create-box">
    <form action="create" method="post" enctype="multipart/form-data">
        <div class="c-item">
                <label for="title">標題:</label>
                <input id="title" type="text" name="title" placeholder="title" required>
        </div>
        <div class="c-item">
        <label for="content">內容:</label>
        <input id="content" type="text" name="content" placeholder="content" required>
        </div>
        <div class="c-item">
        <label for="img">圖片:</label>
        <input id="img" type="file" name="img" placeholder="img" required>
        </div>
        <div class="c-item">
        <label for="site">網檔:</label>
        <input id="site" type="file" name="site" placeholder="site" required>
        </div>
        @csrf
        <input type="submit"value="送出">
    </form>
    </div>
@endsection