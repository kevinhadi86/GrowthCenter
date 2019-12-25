@extends('admin.layout.admin')

@section('content-header')
    Manage Our Solution Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">5 Featured Question Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-solution-featured-question')}}">
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
                                @if(in_array($question->id,$solutionConfigs['solutionQuestion']))
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
        })
        
    </script>
@endsection