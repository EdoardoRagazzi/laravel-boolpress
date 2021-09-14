@extends('layouts.app')
@section('content')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
    <form action="{{ route('admin.posts.store')}}" method="post">
        @csrf
      

    <div class="mb-3">
        <label for="title" >Write Title</label>

        {{-- Remember method old so you don't delete the values already insert / doesn't delete your data --}}
        <input type="title" name="title" class="form-control" id="title" value="{{old('title')}}" >
   
      </div>
      <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        <textarea class="form-control" type="text" name="content" cols="30" rows="10"  id="descrizione" ></textarea>
        
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>




@endsection