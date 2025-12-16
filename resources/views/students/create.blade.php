@extends('layouts.app')


@section('content')
<div class="container">
<h2>Add Student</h2>
<form method="POST" action="{{ route('students.store') }}">
@csrf
<input type="text" name="name" class="form-control mb-2" placeholder="Name">
<input type="email" name="email" class="form-control mb-2" placeholder="Email">
<input type="text" name="course" class="form-control mb-2" placeholder="Course">
<button class="btn btn-success">Save</button>
</form>
</div>
@endsection
