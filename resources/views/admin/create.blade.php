@extends('layouts.layout')

@section('content')
<form method="POST" action="{{ route("project.store") }}" class="p-5">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="mb-3">
        <label class="form-label">Cration date</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label class="form-label">Is complited</label>
        <input type="text" class="form-control" name="release_year">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Yes
        </label>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
          No
        </label>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
