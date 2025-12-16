@extends('layouts.app')


@section('content')
<h2>Student List</h2>
<a href="{{ route('students.create') }}" class="btn btn-primary mb-2">Add Student</a>


@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif


<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Actions</th>
</tr>
@foreach($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->course }}</td>
<td>
<a href="{{ route('students.edit',$student) }}" class="btn btn-warning btn-sm">Edit</a>
<form action="{{ route('students.destroy',$student) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection
