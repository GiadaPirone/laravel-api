@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>Tutti i Tag</h1>

        @foreach ($types as $type)
            <div class="card p-0 mb-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $tecnology->name }}</h5>     
                </div>

            {{-- bottone cancella --}}
            {{-- <form action="{{route ("admin.types.destroy",$type )}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="cancella">
            </form> --}}


            {{-- modifica --}}
            {{-- <div class="row">
                <div class=" col-3">

                    <button type="button" class="btn btn-warning">
                        <a href="{{route("admin.types.edit", $type)}}">Modifica</a>
                    </button>
                </div>
            </div> --}}

            </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-light">
            <a href="{{route("admin.technologies.create")}}">Aggiungi Type</a>
        </button>
</div>


@endsection