@extends('layouts.admin');
@section('content')
<div class="row">
  <div class="col">
    <h1 class="display-2">View All Students</h1>
  </div>
</div>

<a href="{{route('students.create')}}">Create student</a>
<div class="row">
  @foreach ($students as $student )
    <div class="col-md-4  mb-3">
      <div clas="card" style="width: 18rem;">
        <div class="card-body">
          <div class="card-title">
            <h2>{{$student -> fname}} | {{$student -> lname}}</h2>
            <p>
              {{$student -> email}}
            </p>
          </div>
          <a href="{{ route('students.edit', $student -> id ) }}" class="card-link">Edit</a>
          <a href="{{ route('students.trash', $student -> id )}}" class="card-link">Delete</a>
        </div>
      </div>
    </div>
  @endforeach
  

  
</div>
@endsection