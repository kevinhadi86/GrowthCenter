@extends('admin.layout.admin')

@section('content-header')
    Manage Home Page
@endsection

@section('content')
<form method="post">
    {{csrf_field()}}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Diagram: {{$diagram->text_image}}</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" value="{{$diagram->title}}">
            </div>
            
            <div class="form-group">
                <label>Description</label>
                <input name="description" type="text" class="form-control" value="{{$diagram->description}}">
            </div>
        </div>
    </div>
    <button class="btn btn-primary">Edit</button>
</form>

@endsection

@section('add-style')

@endsection

@section('add-script')

@endsection