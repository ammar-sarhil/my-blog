@extends('layout.app')
@section('content')
<div class= " container mt-5">
<div class="text-center">
<a href="/create" class="btn btn-success">create post</a>
</div>

<table class="table mt-4 center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">posted by</th>
      <th scope="col">created at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
      <tr>
      <td>{{ $post->id}}</td>
      <td>{{ $post->title}}</td>
      <td>{{ $post->user->name }}</td>
      <td>{{ $post->created_at}}</td>
      <td>
      <a href="/posts/{{ $post->id}}" class="btn btn-info">view</a>
      <a href="/{{ $post->id }}/edit" class="btn btn-primary">edit</a>

      <form style="display:inline;" method="POST" action="{{ route('posts.destroy', $post->id) }}">
        @csrf 
        @method('delete')
        <button type="submit" class="btn btn-danger">delete</button>
      </form>
      </td>
    </tr>
  @endforeach
    
   
  </tbody>
</table>
</div>
@endsection