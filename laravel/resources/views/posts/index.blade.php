@extends('layouts.app')

@section('title', "Blog-Ana")

@section('content')


      <!-- <a href="{{ url('posts/create') }}" class="btn btn-warning mx-3  mb-4" style="font-family:'pricedown', monospace">+ Buat Post</a>

        <a href="{{ url('posts/trash') }}" class="btn btn-danger mb-4" style="font-family:'pricedown', monospace">Riwayat Hapus</a> -->
        
    <p class="text-muted" style="font-family:'deathshead semi', monospace">Total Postingan Aktif : <span class="badge bg-success" style="font-family:'product sans', monospace">{{ $total_active }}</span>   Total postingan non Aktif : <span class="badge bg-warning" style="font-family:'product sans', monospace">{{ $total_nonactive }}</span>   Total postingan dihapus : <span class="badge bg-danger" style="font-family:'product sans', monospace">{{ $total_dihapus }}</span> </p>

      @foreach($posts as $p)

        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title fs-2" style="font-family:'deathshead', monospace">{{ $p->title }}</h5>
                <p class="card-text" style="font-family:'Futura-Book', sans-serif">{{ $p->content }}</p>
                <p class="card-text" style="font-family:'clarendon-regular', monospace"><small class="text-muted">Created
                        {{ date("d M Y, H:i", strtotime($p->created_at)) }}
                    </small> </p>
                <a href="{{ url("posts/$p->slug") }}" class="btn btn-primary" style="font-family:'Futura LT', monospace">Selengkapnya</a>
                <a href="{{ url("posts/$p->slug/edit") }}" class="btn btn-warning" style="font-family:'Futura LT', monospace">Edit</a>
            </div>
        </div>

        @endforeach
      
       @endsection
        
      
        
      