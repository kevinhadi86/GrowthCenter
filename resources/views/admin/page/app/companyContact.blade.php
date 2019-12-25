@extends('admin.layout.admin')

@section('content-header')
    Manage Company Contact
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Company Contact</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-company-contact')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" value="{{$contact->name}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" value="{{$contact->email}}">
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input name="website" type="text" class="form-control" value="{{$contact->website}}">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control" cols="100">{{$contact->address}}</textarea>
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