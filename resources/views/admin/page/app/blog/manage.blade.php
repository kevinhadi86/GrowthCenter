@extends('admin.layout.admin')

@section('content-header')
    Manage Home Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Featured Article for each Category Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-select-category-blog')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <select class="form-control" name="selectedCategory" id="selectedCategory">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" name="selectedCategory">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('add-style')
@endsection

@section('add-script')
@endsection