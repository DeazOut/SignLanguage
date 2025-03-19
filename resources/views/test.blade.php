@extends('layouts.main')
@section('header')
    <div class="container-fluid d-flex justify-content-center mb-3" style="border-bottom: 5px solid #2E151B; padding: 5px ">
      <div class="container">
      <h1 class="text-white">Тест</h1>
      <h2 class="text-white">Урок № {{$lesson_id}}</h2>
      
      </div>
        <div class="container d-flex justify-content-end align-items-center">
          <a class="d-flex align-items-center text-white" href="{{ route('lesson', ['id' => $lesson_id]) }}" style="text-decoration: none; padding: 5px; background-color:#DA7B93; box-shadow: 0 0 7px rgba(0,0,0,0.5); border-radius:5px; height:50%">Обратно к уроку</a>
        </div>
    </div>
    
@endsection

@section('content')

<div class="container d-flex justify-content-center">
  <img src="/img/q1.png" alt="">
</div>
<div class="container">


  <div class="d-flex flex-column flex-md-row p-1 mb-5 gap-4  align-items-center justify-content-center">
    <div class="list-group list-group-radio d-grid gap-2 border-0">
    @if (isset($current_question) && isset($answers))
    
      <div class="container d-flex justify-content-center d-wrap">
        <h1>Вопрос {{$current_index}} / 5</h1> 
      </div>
      <div class='container d-flex justify-content-center d-wrap'>
          <h4>{{ $current_question }}</h4>
      </div>
        

        <form method="POST" action="{{ route('test.next', ['lesson_id' => $lesson_id]) }}">
            @csrf
            @foreach ($answers as $answer)
                <div class="position-relative mb-2">
                <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="selected_answer" value="{{ $answer->id }}" id="listGroupRadioGrid{{$answer->id}}" required>
                    <label class="list-group-item py-3 pe-5" for="listGroupRadioGrid{{$answer->id}}">
                        <img src="{{ $answer->answer_image_url }}" alt="Картинка с вопросом" style="max-width: 200px;">
                    </label>
                </div>
            
            @endforeach
            <div class='container d-flex justify-content-center d-wrap mt-3'>
              <button class="d-flex justify-content-center align-items-center text-white nadv" style="text-decoration: none; padding: 10px; background-color:#DA7B93; width:20vh; border: 0" type="submit">Дальше</button>
            </div>
          </form>
          @elseif (isset($percentage))
          <div class="container" style="height:58vh;">
            
            <div class='container d-flex justify-content-center d-wrap mt-3'>
                  <h1>Результаты</h1>
                </div>
                <div class="container d-flex justify-content-center d-wrap mt-3 radv" style="
                  background-color: @if($percentage <= 40)rgb(255, 91, 91) 
                  @elseif($percentage <= 70)rgb(255, 225, 118) 
                  @else #155724 
                  @endif; padding: 20px; border-radius: 10px;" >
                  <div class="container"><h4>Вы набрали: {{ round($percentage, 2) }}%.</h4></div>
                  
                  <div class="container"><h5>Всего правильных ответов: {{ session('counter', 0) }}</h5></div>
                  
                </div>
                <div class=''>
                  
                </div>
                <div class='container d-flex justify-content-center d-wrap mt-3' >
                  
                </div>
                <div class='container-fluid d-flex justify-content-center d-wrap mt-3'>
                  <a href="{{ route('lessons') }}" class="container d-flex justify-content-center align-items-center text-white nadv text-center" style="text-decoration: none; padding: 10px; background-color:#DA7B93; width:20vh;">Вернуться обратно к урокам</a>
                </div>
                <div class='container d-flex justify-content-center d-wrap mt-3'>
                  <a href="{{ route('lesson.test', ['lesson_id' => $lesson_id]) }}" class="d-flex justify-content-center align-items-center text-white nadv text-center" style="text-decoration: none; padding: 10px; background-color:#DA7B93; width:20vh;">Пройти тест еще раз</a>
                </div>
          </div>
              
          @else
              <p>Тесты недоступны</p>
          @endif
      
 

@endsection