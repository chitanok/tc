@extends('admin.layouts.layout')
@section('pageContent')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Courses</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Courses</h3>
                <a href="{!! url('course/create') !!}" title="Add Course" style="float: right" class="btn btn-success">Create New</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Course Title</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($courses) > 0)
                        @foreach($courses as $course)
                        <tr>
                            <td>{!! $course->id !!}</td>
                            <td>{!! $course->title !!}</td>
                            <td>{!! $course->price !!}</td>
                            <td>
                                <a href="{!! url('course', $course->id) !!}/edit" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)"  title="Delete"><i class="fa fa-trash"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form{!! $course->id !!}').submit();"
                                ></i></a>
                                <form id="delete-form{!!$course->id!!}" action="{!! url('course', $course->id) !!}" method="POST" style="display: none;">
                                    @csrf
                                    @method("DELETE")
                                </form>
                            </td>
                          </tr>
                        @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
