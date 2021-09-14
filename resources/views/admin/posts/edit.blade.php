@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.posts.update', $post->id)}}" method="post">
        @csrf
        @method('PATCH')

    <div class="mb-3">
        <label for="title" >Write Title</label>
        {{-- Remeber the value  --}}
        <input type="title" name="title" class="form-control" id="title" value="{{$post->title}}" >
   
      </div>
      <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        {{-- Not value because is a TextArea --}}
        <textarea class="form-control" type="text" name="content" cols="30" rows="10"  id="descrizione" >{{$post->content}}</textarea>
        
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>

</div>

@endsection