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

                            <form action="{{ route('exam.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Question:</label>
                                  <input type="text" class="form-control" name="question" placeholder="Enter Question">
                                </div>

                                <div class="form-group">
                                    <label>Option A:</label>
                                    <input type="text" class="form-control" name="a" placeholder="Enter Option A">
                                </div>

                                <div class="form-group">
                                    <label>Option B:</label>
                                    <input type="text" class="form-control" name="b"  placeholder="Enter Option B">
                                </div>

                                <div class="form-group">
                                    <label>Option C:</label>
                                    <input type="text" class="form-control" name="c" placeholder="Enter Option C">
                                </div>

                                <div class="form-group">
                                    <label>Option D:</label>
                                    <input type="text" class="form-control" name="d" placeholder="Enter Option D">
                                </div>

                                <div class="form-group">
                                    <label>Answer Of the question:</label>
                                    <select class="form-control" name="answer">
                                        <option value="" selected>Select Option</option>
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

