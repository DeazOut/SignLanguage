@extends('layouts.main')

@section('header')
    <div class="container">
        <h1 class="text-white">Список уроков</h1>
        <h3 class="text-white">
            Пройдено уроков: {{ $completedCount }} из {{ $totalLessons }}
        </h3>
    </div>
@endsection

@section('content')

    @foreach ($lessons as $lesson)
        <div class="container d-flex flex-wrap">
            <div class="container-fluid mt-3 p-2 lesact d-flex align-items-end" 
                style="background-color: {{ in_array($lesson->id, $completedLessonIds) ? '#155724' : '#2E151B' }}; 
                       color: {{ in_array($lesson->id, $completedLessonIds) ? '#d4edda' : '#DA7B93' }};
                       border-radius: 10px; 
                       box-shadow: 0 0 8px black;">
                <div class="container-fluid d-flex align-items-center flex-nowrap justify-content-start">
                    <h2 class="text-white"> Урок №{{$lesson->id}}</h2>
                    <h5 class="container-fluid d-flex">{{$lesson->name}}</h5>
                </div>
                
                <div class="container d-flex justify-content-end align-items-center" style="height:100%">
                    <a class="d-flex align-items-center text-white" 
                       href="{{ route('lesson', ['id' => $lesson->id]) }}" 
                       style="text-decoration: none; padding: 5px; 
                              background-color: {{ in_array($lesson->id, $completedLessonIds) ? '#28a745' : '#DA7B93' }}; 
                              box-shadow: 0 0 7px rgba(0,0,0,0.5); 
                              border-radius: 5px; height: 70%">
                        {{ in_array($lesson->id, $completedLessonIds) ? 'Пройден' : 'Открыть' }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    
        
@endsection




