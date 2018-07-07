@extends('master')

@section('content')

<div class="row">

  <div class="col-md-6">
<!-- Content 1 -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form name='add' method='post'
action="{{URL::to('add')}}">
{{csrf_field()}}


<div class="form-group">
  <label for="lname">Name</label>
  <input type="text" class="form-control" name="lname" id="lname" aria-describedby="emailHelp" placeholder="Enter name">
  <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

  </div>

  <div class="col-md-6">

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">leah_id</th>
      <th scope="col">leah_name</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- Content 2 -->
    @foreach($rows as $row)
  <tr>
    <td>{{$row->leah_id}}</td>
    <td>{{$row->leah_name}}</td>
    <td>{{$row->created_at}}</td>
    <td>{{$row->updated_at}}</td>
    <td>
      <a href="{{URL::to('del')}}" title="delete?">
        <i class ="fa fa-trash"></i>
      </a>
    </td>
  </tr>
    @endforeach
  </tbody>
  </div>
</div>
