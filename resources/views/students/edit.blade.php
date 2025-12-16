@extends('layouts.app')


@section('content')
<h2>Edit Student</h2>
<form method="POST" action="{{ route('students.update',$student) }}">
@csrf
@method('PUT')
<input type="text" name="name" class="form-control mb-2" value="{{ $student->name }}">
<input type="email" name="email" class="form-control mb-2" value="{{ $student->email }}">
<input type="text" name="course" class="form-control mb-2" value="{{ $student->course }}">
<button class="btn btn-success">Update</button>
</form>
@endsection
