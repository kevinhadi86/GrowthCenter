@extends('admin.layout.admin')

@section('content-header')
    Edit Success Story
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Success Story</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control" value="{{$successStory->title}}">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input name="author" type="text" class="form-control" value="{{$successStory->author}}">
                </div>
                <div class="form-group">
                    <label>Question</label><br>
                    <select name="question" selected="{{$successStory->question->id}}"> 
                        <option>Select Question</option>
                        @foreach($questions as $question)
                            @if($question == $successStory->question)
                            <option value="{{$question->id}}" name="question" selected>{{$question->question}}</option>
                            @else
                            <option value="{{$question->id}}" name="question">{{$question->question}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" class="form-control ckeditor" cols="100">{{$successStory->content}}</textarea>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" id="upload">
                </div>
                <div class="form-group">
                    <img id="img" src="{{asset('/img/'.$successStory->image)}}" style="width: 200px;">
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Edit</button>
    </form>
@endsection

@section('add-script')
    <script src="{{asset('/lib/admin/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/lib/admin/ckfinder/ckfinder.js')}}"></script>
    <script>
        $(function() {
            var editor = CKEDITOR.replace( 'content' );
            CKFinder.setupCKEditor( editor );
            $('#upload').change(function(){
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0]&& (ext == "png" || ext == "jpeg" || ext == "jpg")) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#img').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
    </script>
@endsection