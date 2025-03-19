@extends('layouts.main')
@section('header')
    <div class="container-fluid d-flex justify-content-center mb-5" style="border-bottom: 5px solid #2E151B; padding: 5px ">
      <div class="container ">
      <h1 class="text-center mb-2 text-white ">Словарь жестов</h1>
      </div>
      <a href="{{ route('lessons') }}" class="d-flex align-items-center text-white text-white" style="text-decoration: none; padding: 5px; background-color:#DA7B93; box-shadow: 0 0 7px rgba(0,0,0,0.5); border-radius:5px; height:70%;">К урокам</a>
    </div>
    
@endsection

@section('content')
<div class="container">
    <div class="row row-cols-2 row-cols-sm-1 row-cols-md-4 row-cols-lg-5 g-3 " >
        @foreach($words as $word)
        <div class="col nadv" style="background-color: #2E151B; border-radius: 10px; box-shadow: 0 0 8px black;">
            <a href="{{ route('dictionary.show', $word->id) }}" class="text-decoration-none">
                <div class="card h-100 text-center shadow-sm">
                    <img src="{{ $word->image_url }}" class="card-img-top img-fluid" alt="{{ $word->word }}" style="width: 30vh;">
                    <div class="card-body" >
                        <h6 class="card-title text-dark">{{ $word->word }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
