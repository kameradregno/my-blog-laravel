@extends('layouts.app')

@section('title', "Riwayat")

@section('content')

    <!-- <div class="container my-4">
        <h1 style="font-family:'deathshead 3D', monospace">
            Blog-Ana <a href="{{ url('posts') }}" class="btn btn-success mx-3" style="font-family:'pricedown', monospace"></a>
        </h1> -->

        @foreach($posts as $p)

        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title" style="font-family:'itc avant garde gothic', monospace">{{ $p->title }}</h5>
                <p class="card-text" style="font-family:'sf pro', monospace">{{ $p->content }}</p>
                <p class="card-text" style="font-family:'clarendon-regular', monospace"><small class="text-muted">Created At
                        {{ date("d M Y H:i", strtotime($p->created_at)) }}
                    </small> </p>

            {{-- * form hapus data --}}
             <form action="{{ url("posts/$p->id/permanent")}}" method="post">
                @method('DELETE')
                @csrf
    
                <button type="submit"class="btn btn-danger my-2" style="font-family:'pricedown', monospace">Hapus Permanen</button>
    
            </form>

            <form action="{{ url("posts/$p->id/restore")}}" method="post">
                @method('DELETE')
                @csrf
    
                <button type="submit"class="btn btn-warning my-4" style="font-family:'pricedown', monospace">Pulihkan</button>
    
            </form>
            </div>
        </div>

        @endforeach

    </div>

@endsection