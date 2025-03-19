@extends('layouts.main')

@section('header')
<div class="container">
    <h1 class="text-white">Добро пожаловать в личный профиль</h1>
</div>
@endsection

@section('content')
<div style="height: 66vh;">
    <div class="container d-flex flex-nowrap p-3" style="background-color: #2E151B; border-radius: 10px; box-shadow: 0 0 8px black;">
        <div class="container">
            <div class="container">
                <h1>Ваше имя:</h1>
                <h1 style="color: #DA7B93">{{ $name_user }}</h1>
            </div>
            <div class="container">
                <h1>Ваша почта:</h1>
                <h1 style="color: #DA7B93">{{ $email_user }}</h1>
            </div>
            <div class="container">
                <h1>Ваш пароль:</h1>
                <h1 style="color: #DA7B93">{{ $password_user }}</h1>
            </div>
            <div class="container">
                <h3>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="d-flex justify-content-center align-items-center text-white nadv text-center" style="text-decoration: none; padding: 10px; background-color:#DA7B93; width:15vh; border-radius: 10px">
                        {{ __('Сменить пароль') }}
                    </a>
                    @endif
                </h3>
            </div>
        </div>
        <div class="container">
            <h2 style="color: white;">Прогресс уроков:</h2>
            <h3 class="mb-3" style="color: #DA7B93;">Вы прошли {{ $completedLessons }} из {{ $totalLessons }} уроков:</h3>

            <div class="progress " style="height: 30px; border-radius: 15px; overflow: hidden; background-color: #444;">
                <div class="progress-bar" role="progressbar " style="
                    width: {{ $progressPercentage }}%;
                    background-color: 
                        @if ($progressPercentage <= 40) rgb(255, 91, 91) 
                        @elseif ($progressPercentage <= 70) rgb(255, 225, 118) 
                        @else rgb(76, 175, 80) 
                        @endif;
                    text-align: center;
                    font-weight: bold;
                    line-height: 30px;
                    color: white;
                ">
                    <h5>{{ $progressPercentage }}%</h5>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection