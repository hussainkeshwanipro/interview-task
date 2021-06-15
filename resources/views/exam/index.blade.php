@extends('layout.master')

@section('title')
    Exam System
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Exam Page</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <a href="{{ route('exam.create') }}" class="m-0 float-right btn btn-info">Add Question</a>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th width="30%" class="text-center">Question</th>
                                <th>Option A</th>
                                <th>OPtion B</th>
                                <th>OPtion C</th>
                                <th>OPtion D</th>
                                <th>Answer</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->question }}</td>
                                <td>{{ $item->a }}</td>
                                <td>{{ $item->b }}</td>
                                <td>{{ $item->c }}</td>
                                <td>{{ $item->d }}</td>
                                <td>{{ $item->answer }}</td>
                                <td><a href="{{ route('exam.edit', $item) }}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('exam.destroy', $item) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                                
                            @endforeach
                            
                        </tbody>
                    </table>
                    <!-- /.card -->


                </div>

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection