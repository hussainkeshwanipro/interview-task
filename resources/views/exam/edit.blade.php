@extends('layout.master')

@section('title')
Exam Add New
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Queestion Page</h1>
                </div><!-- /.col -->

                

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">


                    <div class="card card-primary card-outline">
                        <div class="card-body">

                            <form action="{{ route('exam.update', $exam) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                  <label>Question:</label>
                                  <input type="text" class="form-control" name="question" value="{{ $exam->question }}">
                                </div>

                                <div class="form-group">
                                    <label>Option A:</label>
                                    <input type="text" class="form-control" name="a" value="{{ $exam->a }}">
                                </div>

                                <div class="form-group">
                                    <label>Option B:</label>
                                    <input type="text" class="form-control" name="b" value="{{ $exam->b }}">
                                </div>

                                <div class="form-group">
                                    <label>Option C:</label>
                                    <input type="text" class="form-control" name="c" value="{{ $exam->c }}">
                                </div>

                                <div class="form-group">
                                    <label>Option D:</label>
                                    <input type="text" class="form-control" name="d" value="{{ $exam->d }}">
                                </div>

                                <div class="form-group">
                                    <label>Answer Of the question:</label>
                                    <select class="form-control" name="answer">
                                        <option value="{{ $exam->answer }}" selected>{{ $exam->answer }}</option>
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                        <option value="d">D</option>
                                      </select>
                                  
                                </div>


                                <button type="submit" class="btn btn-primary">Add</button>
                              </form>
                           

                        </div>
                        <!-- /.card-body -->
                    </div>
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

