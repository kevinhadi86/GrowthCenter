@extends('admin.layout.admin')

@section('content-header')
    Manage About Us Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Main Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-about-main-section')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label>Main Section Content</label>
                        <textarea name="mainSectionText" class="form-control" cols="100">{{$aboutConfigs['aboutMain']}}</textarea>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Our Belief Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-about-our-belief')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label>Our Belief Content</label>
                        <textarea name="ourBeliefText" class="form-control" cols="100">{{$aboutConfigs['aboutOur']}}</textarea>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">We Believe Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-about-we-believe')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label>We Believe Content</label>
                        <textarea name="weBelieveText" class="form-control" cols="100">{{$aboutConfigs['aboutWe']}}</textarea>
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