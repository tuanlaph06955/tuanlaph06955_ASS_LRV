@extends('layouts')

@section('contents')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('categories.store') }}" enctype= 'multipart/form-data'>
                @csrf

                <!-- @if($errors->count())
                  <div class="btn btn-danger">
                    @foreach($errors->all() as $error)
                      <p>{{ $error }}</p>
                    @endforeach
                  </div>
                @endif -->
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="{{ Auth::User()->id }}" name="user_id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name Category</label>
                    <input type="text" class="form-control" name="name" placeholder="Name Category">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection