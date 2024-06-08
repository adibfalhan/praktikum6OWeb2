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
                                <h2>Hallo Admin {{Auth::user()->nama}}</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid recusandae iusto, labore magnam eligendi voluptate consequuntur eum suscipit vitae, accusantium culpa explicabo fugiat perferendis optio! Explicabo pariatur fuga sunt enim!
                                    Reiciendis molestiae expedita dolores eveniet praesentium modi hic culpa. Est numquam sint nam officiis aut quaerat voluptate quas, error quod autem ut ratione, pariatur totam repellat eos accusantium consequuntur deserunt!
                                    Possimus corporis excepturi magni accusantium, eius eaque tempore laudantium, assumenda recusandae numquam itaque minima quis architecto delectus veniam hic. Minus corporis, perferendis voluptatum illo nemo pariatur quidem illum sapiente sequi!
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