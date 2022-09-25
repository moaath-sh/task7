@extends('student.layout')
@section('content')
<div style="padding-top: 12%"></div>
<div class="card container">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <div class="container">
    <form action="{{route('students.store')}}" method="POST" style="padding-top: 2%">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">student name </label>
          <input type="text" name="name" class="form-control"  placeholder="your name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">student year </label>
            <input type="text" name="year" class="form-control"  placeholder="your year">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">student GPA </label>
            <input type="number" name="gpa" class="form-control" min="1" max="5" step="0.1">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">save</button>
          </div>
      </form>
  </div>
@endsection
