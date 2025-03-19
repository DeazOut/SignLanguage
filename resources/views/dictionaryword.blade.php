@extends('layouts.main')
@section('header')
    <div class="container-fluid d-flex justify-content-center mb-3" style="border-bottom: 5px solid #2E151B; padding: 5px ">
      <div class="container">
      
      
      </div>
      <a href="{{ route('dictionary') }}" class="d-flex align-items-center text-white text-white" style="text-decoration: none; padding: 5px; background-color:#DA7B93; box-shadow: 0 0 7px rgba(0,0,0,0.5); border-radius:5px; height:70%;">Назад к словарю</a>
    </div>
    
@endsection

@section('content')
<div class="container d-flex justify-content-around mt-4 mb-4 gap-5 p-3 overflow-x-auto overflow-y-hidden">
    <div class="container  flex-wrap p-3 justify-content-center align-items-center nadv" style="background-color: #2E151B; width: 80%; border-radius: 10px; box-shadow: 0 0 8px black;" >
            
                <div class="container  text-center justify-content-center align-items-center d-nowrap" style="height: 60vh">
                    <div class="container mb-5" >
                        <img src="{{ $word->image_url }}" alt="{{ $word->word }}" style='width:30vh; border-radius:5px'>
                    </div>
                    
                    <div class="container p-3 d-flex justify-content-center align-items-center mb-3" style="background-color: #DA7B93; border-radius: 10px; box-shadow: 0 0 7px black; width:70%">
                        <h2 class="card-title text-white">{{ $word->word }}</h2>
                    </div>
                </div>
            </a>
        </div>
    
</div>
@endsection
