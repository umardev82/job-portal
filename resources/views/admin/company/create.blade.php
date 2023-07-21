@extends('admin.include.master')
@section('content')
    <div class="wrapper">
        <!-- Navbar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add Company</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Company</li>
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
                                <h3 class="card-title">Add Company</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin.company.store')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description</label>
                                        <textarea name="description" class="form-control" rows="4"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputClientCompany">Address</label>
                                        <input name="address" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputProjectLeader">Email</label>
                                        <input name="email" type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputProjectLeader">Location</label>
                                        <input name="location" type="text" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="submit" value="Create new Company"
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
