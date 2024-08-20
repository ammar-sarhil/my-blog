@extends('layout.app')
@section('content')
<form method="POST" action="/" >
@csrf
    <div class="mb-3 ">
      <label class="form-label">Title</label>
      <input name="title" type="text" class="form-control"  required>
    </div>
    <div class="mb-3">
  <label class="form-label">Description</label>
  <textarea name="description" class="form-control" rows="3" required></textarea>
</div>
    <div class="mb-3 ">
      <label class="form-label">Post Creator</label>
      <select name="post_creator" class="form-control" required>
      @foreach ($users as $user)
          <option value="{{ $user->id }}">{{ $user->name }}</option>
      @endforeach
        
      </select>
    </div>
    

    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection