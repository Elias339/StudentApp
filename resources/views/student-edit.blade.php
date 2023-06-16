@extends('master')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            Student From
                            {{ session('message') }}
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update.student') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Seip Id</label>
                                    <div class="col-md-9">
                                        <input type="text" name="seid" value="{{$student->seid}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text"name="name" value="{{$student->name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email"name="email" value="{{$student->email}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">phone</label>
                                    <div class="col-md-9">
                                        <input type="number"name="phone" value="{{$student->phone}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <textarea name="address" class="form-control">{{$student->address}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department</label>
                                    <div class="col-md-9">
                                        <input type="text"name="department" value="{{$student->department}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Course Name</label>
                                    <div class="col-md-9">
                                        <input type="text"name="course_name" value="{{$student->course_name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file"name="image" class="form-control">
                                        <img src="{{ asset($student->image) }}" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" value="Submit" class="form-control btn btn-outline-success">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
