@extends('student.layout')
@section('content')

<div class="jumbotron container">
    <p>welcome to our university,we are so glad for you to be here.</p>
    <a class="btn btn-primary btn-lg" href="{{route('students.create')}}" role="button">Create</a>
  </div>
  <div class="container">
    @if ($message=Session::get('success'))
    <div class="alert alert-primary" role="alert">
        {{$message}}
      </div>
    @endif
   </div>

  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Year</th>
            <th scope="col">GPA</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        @php
        $i=0;
    @endphp
        <tbody>
            @foreach ($students as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->year}}</td>
                <td>{{$item->gpa}}</td>
                <td>
                    <div class="row">
                        <div class="col-sm">
                            <a href="{{route('students.edit',$item->id)}}" class="btn btn-success">Edit</a>
                        </div>
                        <div class="col-sm">
                            <a href="{{route('students.show',$item->id)}}" class="btn btn-primary">Show</a>
                        </div>
                        <div class="col-sm">
                            <form action="{{route('students.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                      </div>



                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
      {{$students->links()}}
  </div>
@endsection
