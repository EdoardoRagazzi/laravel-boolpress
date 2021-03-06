@extends('layouts.app')

@section('content')


<div class="container">
  {{-- Alert Session-> On PostsControllerPage Insert With Method --}}
  <p>
    @if (session('updated'))
    <div class="alert alert-success">
      {{session('updated')}}
    </div>
      
    @endif
    @if (session('delete'))
    <div class="alert alert-success">
      {{session('delete')}}
    </div>
    @endif
  </p>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Azioni</th>
       
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Show</a>
                    <a href="{{ route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('admin.posts.destroy',$post->id)}}" method="post" class="d-inline-block delete-post-form">
                        @csrf
                        @method('DELETE')  
                        <input type="submit" value="delete" class="btn btn-danger"> 
                    </form>
                </td>
          
              </tr>
                
            @endforeach
          
        
        </tbody>
      </table>
      <div>
        {{$posts->links()}}
    </div>
</div>

@endsection