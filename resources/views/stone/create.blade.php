@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Aggiungi nuove pietre</h1>
            <div class="col-2">
            </div>
            <div class="col 8">
                <form action="{{ route('stones.store')}}" method="POST">
                @csrf
                <label for="nome" class="form-label" >Nome della pietra</label>
                <input type="text" class="form-control" id="nome">

                <label for="descrizione" class="form-label" >Descrizione</label>
                <input type="text" class="form-control" id="descrizione">

                <label for="composizione" class="form-label" >Composizione</label>
                <input type="text" class="form-control" id="composizione">

                <label for="foto" class="form-label" >Foto</label>
                <input type="text" class="form-control" id="foto">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">
                    Aggiungi
                </button>
            </form>   
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>


@endsection