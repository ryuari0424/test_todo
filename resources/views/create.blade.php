@extends('layout.app')

@section('content')
<form method="POST" action="{{route('store')}}">
    @csrf
    <div class="mb-2">
      <label class="form-label" for="title">title</label>
      <input class="form-control" type="text" name="title" id="title">
    </div>
    <div class="mb-2">
      <label class="form-label" for="memo">Address</label>
      <input class="form-control" type="text" name="memo" id="address">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection