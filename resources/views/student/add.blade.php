@extends('layout.master')

@section('title')
Student Add New
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Student Add Page</h1>
                </div><!-- /.col -->

                

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">


                    <div class="card card-primary card-outline">
                        <div class="card-body">

                            <form action="{{ route('student.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">First Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lname" placeholder="Enter Last Name">
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

