@extends('layouts.app')
@section('content')
    <div class="card card-default">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">
                            @if($error == "The name has already been taken.")
                                ชื่อนี้ถูกนำไปใช้แล้ว
                            @elseif($error = " ")
                                กรุณาใส่ชื่อหัวข้อ
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-header">
            {{isset($posts)? "Edit Post":"Create Post"}}
        </div>
        <div class="card-body">
            <form action="{{isset($posts)?"/categories/update/$posts->id":"/posts/store"}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(@isset($posts))
                    {{-- @method('PUT') --}}
                @endif
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" value="{{isset($posts)?"$posts->title":''}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" value="{{isset($posts)?"$posts->description":''}}" rows="4" cols="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea type="text" name="content" value="{{isset($posts)?"$posts->content":''}}" rows="8" cols="8" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" value="{{isset($posts)?"$posts->image":''}}" class="form-control">
                </div>
           
                <div class="form-group">
                    <input type="submit" name="" value="{{isset($posts)? "Update Post":"Create Post"}}" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection