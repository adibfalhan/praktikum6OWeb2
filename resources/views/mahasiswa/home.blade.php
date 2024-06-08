@extends('layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="{{asset('image/students.png')}}" alt="" width="100%">
                            </div>
                            <div class="col-10">
                                <h2>Hallo Mahasiswa {{Auth::user()->nama}}</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora rem architecto fugiat. Ipsum, aut voluptas assumenda labore cupiditate officiis nemo sit harum corrupti voluptatum. Aspernatur voluptate expedita odit? Fuga, modi?
                                    Quaerat saepe ipsum fugit nemo exercitationem voluptas incidunt, voluptatum aperiam? Accusantium itaque soluta voluptatibus perspiciatis fugiat tenetur laborum, tempora, sit sequi nisi minima labore, accusamus minus. Saepe quos molestias ipsa?
                                </p>
                            </div>


                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
@endsection