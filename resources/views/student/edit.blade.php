@extends('student.layout')
@section('content')
<div style="padding-top: 12%"></div>
<div class="card container">
    <div class="card-body">
      <p class="card-text">student name : {{$student->name}}</p>
    </div>
  </div>
  <div class="container">
    <form action="{{route('students.update',$student->id)}}" method="POST" style="padding-top: 2%">
        @csrf
        @method ('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">student name </label>
          <input type="text" name="name" value="{{$student->name}}" class="form-control"  placeholder="your name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">student year </label>
            <input type="text" name="year" value="{{$student->year}}" class="form-control"  placeholder="your year">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">student GPA </label>
            <input type="number" name="gpa" value="{{$student->gpa}}" class="form-control" min="1" max="5" step="0.1">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">save</button>
          </div>
      </form>
  </div>
@endsection
