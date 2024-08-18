@extends('layout.app')
@section('content')
<form method="POST" action="/" >
@csrf
    <div class="mb-3 ">
      <label class="form-label">Title</label>
      <input name="title" type="text" class="form-control" >
    </div>
    <div class="mb-3">
  <label class="form-label">Description</label>
  <textarea name="description" class="form-control" rows="3"></textarea>
</div>
    <div class="mb-3 ">
      <label class="form-label">Post Creator</label>
      <select name="post_creator" class="form-control">
        <option value="1">Ammar</option>
        <option value="2">Haidar</option>
        <option value="3">Basel</option>
        <option value="4">Mekdad</option>
      </select>
    </div>
    

    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection