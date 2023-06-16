@extends('master')
@section('content')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Student List</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Seid</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Department</th>
                                    <th>Course Name</th>
                                    <th>Action</th>
                                </tr>

                                @php $i=1 @endphp
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>
                                        <img src="{{ asset($student->image) }}" class="img-fluid" alt="">
                                    </td>
                                    <td>{{$student->seid}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{$student->department}}</td>
                                    <td>{{$student->course_name}}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('edit.student',['id'=>$student->id]) }}" class="btn btn-primary btn-sm mx-1">edit</a>

                                        <form action="{{ route('delete.student') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $student->id }}" name="id">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this??')">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
