@extends('layouts.app')

@section('content')
<h1>Create Job</h1>

<form method="POST" action="{{ route('jobs.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Job title" required>
    <input type="text" name="company" placeholder="Company" required>
    <input type="text" name="salary" placeholder="Salary" required>

    <button type="submit">Save</button>
</form>
@endsection






