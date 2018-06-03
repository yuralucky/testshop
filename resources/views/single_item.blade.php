@extends('layouts._layout')
@section('content')
    <div class="row border-top">
<div class="col-1"></div>
        <div class="col-7">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-center">Название книги</h2>
                    <img src="{{asset('image/img1.png')}}" class="img-thumbnail">
                    <a class="btn btn-block btn-info marg-top">Добавить в корзину</a>
                </div>
                <div class="col-6">
                    <ul class="text-center">
                        <hr>
                        <li class="list-unstyled"><h4>Краткая информация</h4></li>
                        <li class="list-unstyled marg-top">Издательство: Ранок</li>
                        <li class="list-unstyled">Серия : Web</li>
                        <li class="list-unstyled">Год: 2018</li>
                        <li class="list-unstyled">Обложка: мягкая</li>
                        <li class="list-unstyled">Формат: 60x90</li>
                        <li class="list-unstyled">Язык : русский</li>

                    </ul>


                </div>
                <div class="col-12">
                    <h3 class="text-center marg-top"> Краткое описание книги</h3>
                    <div>
                        Между блоками есть связки, домашние задания и вопросы для самоконтроля. Вы сможете
                        самостоятельно продиагностировать свой голос, а также ответить на вопрос, который интересует,
                        пожалуй, большинство людей: а какой же у меня голос? С помощью необычных, интересных заданий и
                        листов контроля вы сможете исправить многие недостатки, присутствующие в вашей речи, и
                        закрепить полученный результат.

                        Надеемся, что благодаря такому подходу вы сможете изменить свой голос, усовершенствовать его
                        и победить страх перед аудиторией.
                    </div>
                    <div class="marg-top">
                        <h5 class="text-center">Похожие книги</h5>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('image/img1.png')}}" class="img-thumbnail">
                            </div>
                            <div class="col-4">
                                <img src="{{asset('image/img1.png')}}" class="img-thumbnail">
                            </div>
                            <div class="col-4">
                                <img src="{{asset('image/img1.png')}}" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h4>Отзывы</h4>
            <h6>Добавил: Юра</h6>
            <article>
                Что такое наш голос? Это прежде всего инструмент. Музыкальный, тонко устроенный, сложный, неповторимый.
                Можно быть серой мышкой с тихим, завышенным, неярким и плоским голосом, а можно играть первую
                скрипку в оркестре
            </article>
            <small>11.03.2018</small>
            <hr>
            <h6>Добавил: Юра</h6>
            <article>
                Что такое наш голос? Это прежде всего инструмент. Музыкальный, тонко устроенный, сложный, неповторимый.
                Можно быть серой мышкой с тихим, завышенным, неярким и плоским голосом, а можно играть первую
                скрипку в оркестре
            </article>
            <small>11.03.2018</small>
            <hr>
            <h6>Добавил: Юра</h6>
            <article>
                Что такое наш голос? Это прежде всего инструмент. Музыкальный, тонко устроенный, сложный, неповторимый.
                Можно быть серой мышкой с тихим, завышенным, неярким и плоским голосом, а можно играть первую
                скрипку в оркестре
            </article>
            <small>11.03.2018</small>
            <hr>

        </div>


    </div>
@endsection