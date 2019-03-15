
@extends('layouts.app')

@section('content')

<a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>

<h3>TITLE : </h3><p>{{$post->title}}</p>
<h3>description : </h3><p>{{$post->description}}</p>
<h3>creater name : </h3><p>{{isset($post->user)?$post->user->name:'Not Found'}}</p>
<h3>created at : </h3><p>{{$post->created_at->format('l js \of F Y h:i:s A')}}</p>

@endsection







