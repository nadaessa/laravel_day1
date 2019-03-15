@extends('layouts.app')

@section('content')
<a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Creator Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Slug</th>
      <th scope="col">ِActions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->description}}</td>
      <td>{{isset($post->user)?$post->user->name:'Not Found'}}</td>
      <td>{{$post->created_at->toDateString()}}</td>
      <td>{{isset($post->slug)?$post->slug:'Not Found'}}</td>
      <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-success">View</a></td>
      <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">Edit</a></td>
      <td>
        <form action="{{route('posts.destroy',$post->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-primary" onclick="return myFunction();">Delete</button>
          <script>
            function myFunction(){
              if (!confirm('are you sure you want to delete ?'))
                event.preventDefault();
              
            }
          </script>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection
