@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>stones index</h1>
    </div>
       @forelse ($stones as $stone)
        
               <h1>{{$stone->nome}} </h1>

              @empty
              <h1>none</h1>

       @endforelse    

@endsection