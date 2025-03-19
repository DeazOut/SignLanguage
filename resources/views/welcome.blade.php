@extends('layouts.main')
@section('header')
    <div class="text-white container " >

    <h1>Мы рады приветствовать вас в мире жестового языка ! <br> <br>
         <div class="p-3" style="background-color: #1C3334; border-radius: 10px; box-shadow: 0 0 7px;">
         Sign Language <span style="font-size: 70%;"> - это сайт, который поможет людям в изучении жестового языка, а также позволит проверить свои знания, проходя тесты.</span> 
         </div>
    </h1> 
        
    </div> 
@endsection

@section('content')
    <div class="container text-white mt-5 d-flex flex-wrap " style="background-color: #1C3334; box-shadow: 0 0 7px; border-radius:20px">
         <div class="p-3" > 
         <h2>На нашем сайте вы найдете:</h2>
        </div>

    <div class="container d-flex justify-content-around mt-4 mb-4 gap-5 p-3 overflow-x-auto overflow-y-hidden" >
        <div class="container d-flex flex-wrap p-5 justify-content-center align-items-center badv" style="background-color: #2E151B; width: 80%; border-radius: 10px; box-shadow: 0 0 8px black;" >
            <header class=" p-3 d-flex justify-content-center align-items-center mb-3" style="background-color: #DA7B93; border-radius: 10px; box-shadow: 0 0 7px; ">
                <h3>Множество уроков</h3>
            </header>  
            <div>
                <p>
                На нашем сайте вы найдете обширную коллекцию уроков жестового языка, охватывающих все уровни — от новичков до продвинутых пользователей. Каждый урок тщательно разработан для того, чтобы помочь вам уверенно освоить язык жестов и улучшить ваши навыки.
                </p>
            </div>
        </div>
        <div class="container d-flex flex-wrap p-5 justify-content-center align-items-center badv" style="background-color: #2E151B; width: 80%; border-radius: 10px; box-shadow: 0 0 8px black;">
            <header class="p-3 d-flex justify-content-center align-items-center mb-3" style="background-color: #DA7B93; border-radius: 10px; box-shadow: 0 0 7px; width: 90%">
                <h3>Тестирования</h3>
            </header>
            <div>
                <p>
                Мы предлагаем разнообразные тестирования для оценки вашего уровня знаний жестового языка. Регулярные тесты помогут вам отслеживать прогресс, выявлять слабые стороны и уверенно двигаться к совершенствованию ваших навыков.
                </p>
            </div>
        </div>
        <div class="container d-flex flex-wrap p-5 justify-content-center align-items-center badv" style="background-color: #2E151B; width: 80%; border-radius: 10px; box-shadow: 0 0 8px black;">
            <header class="p-3 d-flex justify-content-center align-items-center mb-3" style="background-color: #DA7B93; border-radius: 10px; box-shadow: 0 0 7px; width: 90%">
                <h3>Видеоуроки</h3>
            </header>
            <div>
                <p>
                Наши видеоматериалы предлагают визуальные и наглядные инструкции по жестовому языку. Профессиональные преподаватели шаг за шагом покажут вам основные жесты и правила, что поможет быстро и эффективно усваивать информацию.
                </p>
            </div>
        </div>
    </div>
        
    </div> 

    <div class="container d-flex flex-wrap p-5 mt-5" style="background-color: #2E151B; border-radius: 10px; box-shadow: 0 0 8px black;">
        <h2></h2>
        <h5 class="">
            
            На нашем портале вы найдете множество уроков, охватывающих различные аспекты жестового языка — от основ до более сложных тем. Каждое занятие сопровождается видеоматериалами, которые демонстрируют правильное выполнение жестов и помогут вам лучше понять их значение и контекст.
            <hr>
            <br>
            Кроме того, мы предлагаем интерактивные тесты, которые позволят вам проверить свои знания и навыки по мере продвижения в обучении. Это отличный способ закрепить материал и получить обратную связь о вашем прогрессе.
            <br>
            Наши ресурсы созданы с учетом различных уровней подготовки, поэтому вы сможете изучать жестовый язык в удобном для вас темпе. Мы также поддерживаем обратную связь, где вы можете предлагать свои идеи и делиться опытом.
            <hr>
            <br>
            <br>
            Присоединяйтесь к нам и откройте для себя удивительный мир жестового языка — языка, который объединяет людей и способствует инклюзивности в обществе!
            <hr>
            
        </h5>
    </div>
    <div class="container d-flex justify-content-center mt-5">
        
        <a class="p-3 d-flex justify-content-center align-items-center text-white badv" href="{{ route('lessons')}}" style = 'background-color: #DA7B93; border-radius: 10px; box-shadow: 0 0 7px; width: 20vh; text-decoration: none'>Перейти к урокам</a>
    </header>
</div>
    


@endsection