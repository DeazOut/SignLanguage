@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #1C3334; box-shadow: 0 0 7px;">
                <div class="card-header text-white">Успешно!</div>

                <div class="card-body text-white">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    <a class="rounded-pill text-white" href="{{route('lessons')}}" style="text-decoration: none; width:100%; height:100%; padding: 5px; background-color:#2E151B; box-shadow: 0 0 7px rgba(0,0,0,0.5);">Перейти к урокам</a> 
                
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
