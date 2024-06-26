@extends('layouts.base')

@section('contents')
<a href="{{ route('admin.posts.index') }}" class="btn btn-dark my-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/></svg>
</a>

    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    <div class="my-3">
        <div class="card p-3">
            <h1 style="text-transform:uppercase " >{{$post->title}}</h1>
            <img class="my-image-show" src="{{ asset('public/storage/' . $post->image) }}" alt="{{ $post->title }}">       

            <h3>Id: <span class="badge rounded-pill bg-secondary">{{ $post->id}}</span> </h3>
            <h3>Hashtags: </h3>
            <div style="display: flex; gap: .2em; flex-wrap: wrap">
                @foreach ($post->hashtags as $tag)
                <span class="badge rounded-pill bg-primary">#{{ $tag->tag }}</span>  
                @endforeach
                
            </div>
            <h3>Descrizione: <div class="">{{ $post->description }}</div> </h3>
            <h3>Instagram Link: <span class="badge rounded-pill bg-secondary">{{ $post->link }}</span> </h3>
            <h3>TIPOLOGIA:
                @if ($post->type == 1)
                    
                <span class="badge rounded-pill bg-primary">IN VIAGGIO CON LEO</span> 
                @else
                <span class="badge rounded-pill bg-primary">LA NOSTRA STORIA</span> 
                    
                @endif
                </h3>
            <h3>Data ultima modifica: <span class="badge rounded-pill bg-warning">{{ $post->created_at }}</span> </h3>
            <h3>Data ultima modifica: <span class="badge rounded-pill bg-danger">{{ $post->updated_at }}</span> </h3>
        </div>
    </div>    

@endsection