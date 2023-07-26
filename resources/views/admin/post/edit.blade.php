@extends('admin.include.master')
@section('content')


        <div class="wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Update Job</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Update Job</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Update Job</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.post.update',['id' => $post->id]) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="inputName">Title</label>
                                            <input name="title" type="text" class="form-control "
                                                value="{{ $post->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputClientCompany">Company</label>
                                            <input name="company" type="text" class="form-control"
                                                value="{{ $post->company }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputProjectLeader">Designation</label>
                                            <input name="designation" type="text" class="form-control"
                                                value="{{ $post->designation }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDescription">Description</label>
                                            <textarea name="description" class="form-control" rows="2">{{ $post->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputProjectLeader">Location</label>
                                            <input name="location" type="text" class="form-control"
                                                value="{{ $post->location }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="submit" value="Update Job"
                                                    class="btn btn-success float-right">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                </section>
                <!-- /.content -->
            </div>
        @endsection
