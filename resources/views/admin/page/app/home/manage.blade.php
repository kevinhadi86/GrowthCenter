@extends('admin.layout.admin')

@section('content-header')
    Manage Home Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">3 Featured Question Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-home-featured-question')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <table class="table table-bordered table-striped" id="question-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Question</th>
                                <th>Category</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                @if(in_array($question->id,$homeConfigs['homeQuestion']))
                                    <td><input type="checkbox" name="questionList[]" value="{{$question->id}}" checked/></td>
                                @else
                                    <td><input type="checkbox" name="questionList[]" value="{{$question->id}}" /></td>
                                @endif
                                    <td>{{$question->question}}</td>
                                    <td>{{$question->category->name}}</td>
                                    <td>{{$question->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">5 Featured Testimony Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-home-featured-testimony')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <table class="table table-bordered table-striped" id="testimony-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Company</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Quote</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testimonies as $testimony)
                                <tr>
                                @if(in_array($testimony->id,$homeConfigs['homeTestimony']))
                                    <td><input type="checkbox" name="testimonyList[]" value="{{$testimony->id}}" checked/></td>
                                @else
                                    <td><input type="checkbox" name="testimonyList[]" value="{{$testimony->id}}" /></td>
                                @endif
                                    <td>{{$testimony->company}}</td>
                                    <td>{{$testimony->name}}</td>
                                    <td>{{$testimony->position}}</td>
                                    <td>{{$testimony->quote}}</td>
                                    <td><img src="{{asset('/img/'.$testimony->image)}}" style="width: 100px;"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Featured Article for each Category Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-select-category-home')}}">
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

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Diagram Section</h3>
        </div>
        <div class="box-body">
            <a href="{{route('admin-update-diagram',['id' => 'UnderstandProblem'])}}"><button class="btn btn-success">Understanding The Problem</button></a>
            <a href="{{route('admin-update-diagram',['id' => 'DefineProblem'])}}"><button class="btn btn-success">Define The Problem</button></a>
            <a href="{{route('admin-update-diagram',['id' => 'Solution'])}}"><button class="btn btn-success">Propose Tailor Made Solution</button></a>
            <a href="{{route('admin-update-diagram',['id' => 'Implementation'])}}"><button class="btn btn-success">Implementation & Agile Iteration</button></a>
            <a href="{{route('admin-update-diagram',['id' => 'Feedback'])}}"><button class="btn btn-success">Feedback & Review</button></a>
        </div>
    </div>
@endsection

@section('add-style')
<link rel="stylesheet" href="{asset('/lib/admin/data-table/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('add-script')
<script src="{{asset('/lib/admin/data-table/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/lib/admin/data-table/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function() {
            $('#question-table').DataTable({
                'paging'      : true,
                'searching'   : true,
                "order": [[ 0, "desc" ]]
            });
            $('#testimony-table').DataTable({
                'paging'      : true,
                'searching'   : true,
                "order": [[ 0, "desc" ]]
            });
            
        })
        
    </script>
@endsection