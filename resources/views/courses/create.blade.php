@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Add Course</h1>
    </div>
</div>
<div class="row">
  <div class="col">
    <form action="{{ route('courses.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="courseName" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="courseName" name="coursename">
          </div>
          <div class="mb-3">
              <label for="courseCode" class="form-label">Course Code</label>
              <input type="text" class="form-control" id="courseCode" name="coursecode">
          </div>
          <div class="mb-3">
              <label for="courseTeacher" class="form-label">Course Description</label>
              <input type="text" class="form-control" id="courseTeacher" name="courseteacher">
          </div>
        <button type="submit" class="btn btn-primary">Add Course</button>      
    </form>
  </div>
</div>
@endsection