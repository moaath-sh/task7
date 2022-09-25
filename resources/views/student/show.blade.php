@extends('student.layout')
@section('content')
<div style="padding-top: 12%"></div>
<div class="card container">
    <div class="card-body">
      <p class="card-text">student info:</p>
    </div>
  </div>
  <div class="container">
        <div class="form-group">
          <label>student name: {{$student->name}} </label>

        </div>
        <div class="form-group">
            <label>student year: {{$student->year}} </label>

          </div>
          <div class="form-group">
            <label>student GPA: {{$student->gpa}} </label>

          </div>
  </div>
@endsection
