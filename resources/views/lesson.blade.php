@extends('layouts.main')


@section('content')

        <div class="text-white container-fluid">
                <div class="container-fluid d-flex justify-content-between">
                    <h1 style="border-bottom: 5px solid #2E151B; padding: 5px ">Урок {{$lesson->id}}: {{$lesson->name}} </h1>  
                    <a class="d-flex align-items-center text-white text-white" href="{{ route('lessons') }}" style="text-decoration: none; padding: 5px; background-color:#DA7B93; box-shadow: 0 0 7px rgba(0,0,0,0.5); border-radius:5px; height:70%;">Обратно к списку уроков</a>
                </div>
                <br>
                <br> 
            </div> 
        
            <div class="container d-flex flex-wrap p-3 text-white" style="background-color: #2E151B; border-radius: 10px; box-shadow: 0 0 8px black;">
                <iframe width="1856" height="802" src="{{$lesson->vid_url}}" title="Курс жестового языка, Урок 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 10px;"></iframe>
            </div>
            
            <!-- @section('kropis')
            <div class="container d-flex flex-wrap p-3 mt-3" style="background-color: #2E151B; border-radius: 10px; box-shadow: 0 0 8px black;">
                
                <div class="container">
                    <p>
                        <h1 class="p-1"><a class="text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none; padding: 5px; background-color:#DA7B93; box-shadow: 0 0 7px rgba(0,0,0,0.5); border-radius:5px">
                        Краткое содержание урока 
                        </a></h1>   
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body text-white" style="background-color: #2E151B;">
                        <h5>
                        00:00:00 Введение в курсы жестового языка 
                        <br>
                                • Курсы предназначены для людей, не владеющих жестовой речью, и тех, кто имеет глухих родственников.
                                <br>
                                • Цель курсов - помочь людям общаться с глухими, переводить программы и визиты к врачам и юристам.
                                <br>
                                • Первое занятие начинается с изучения дактиля - алфавита глухих.
                                <br>
                                <br>
                                00:01:00 Основы дактиля 
                                <br>
                                • Показ букв дактиля: а, в, с, е, ё.
                                <br>
                                • Повторение букв в обратном порядке.
                                <br>
                                • Показ букв ш, щ, р, о, н.
                                <br>
                                <br>
                                00:02:26 Практика дактиля
                                <br>
                                • Показ слов с использованием дактиля: шар, ров, нерв, роса, норов, весна.
                                <br>
                                • Важность четкой артикуляции губ и правильного положения руки.
                                <br>
                                <br>
                                00:03:21 Проверка понимания
                                <br>
                                • Показ дактилем а, е, с, в, ш, щ, н, о.
                                <br>
                                • Проверка правильности показа слов с помощью обучающего или глухого человека.
                                <br>
                                • Важность плавного показа дактильных знаков.
                                <br>
                                <br>
                                00:04:20 Ошибки и завершение занятия
                                <br>
                                • Исправление ошибок в словах с помощью зачеркивания знака рукой.
                                <br>
                                • Завершение первого занятия и задание на следующий урок: составить слова из выученных дактильных знаков.
                        </h5>
                    
                        </div>
                    </div>
                        
                    
                </div>
                @endsection -->
            </div>
            <div class="container d-flex flex-wrap p-3 mt-3" style="background-color: #2E151B; border-radius: 10px; box-shadow: 0 0 8px black;">
                <img src="/public/img/answers/11.png" alt="">
                <a class="d-flex align-items-center text-white" href="{{ route('lesson.test', ['lesson_id' => $lesson->id]) }}" style="text-decoration: none; padding: 5px; background-color:#DA7B93; box-shadow: 0 0 7px rgba(0,0,0,0.5); border-radius:5px; height:70%">Перейти к тесту</a>

            </div>
            
@endsection