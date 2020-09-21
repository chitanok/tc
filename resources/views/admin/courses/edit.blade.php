@extends('admin.layouts.layout')
@section('pageContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course Manage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Course</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="{!! url('course', $course->id) !!}">
                @method('PUT')
                @csrf
                <div class="card-body">
                <div class="form-group">
                  <label for="courseTitle">Course Title</label>
                  <input type="text" name="title" value="{!! $course->title !!}" class="form-control" id="courseTitle" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="courseDescription">Description</label>
                    <input type="text" class="form-control" value="{!! $course->description !!}" name="description" id="courseDescription" placeholder="Enter Description">
                </div>

                <div class="form-group">
                    <label for="coursePrice">Price</label>
                    <input type="number" class="form-control" name="price" value="{!! $course->price !!}" id="coursePrice" placeholder="Enter Price">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Upload Cover</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="cover" accept="image/*" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose book cover</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="{!! url('course') !!}" class="btn btn-warning">Back</a>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>
  @endsection
