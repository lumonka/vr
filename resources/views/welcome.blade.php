@extends('layouts.app')
@section('content')
    <div class="intro slider">
        <div class="intro__item">
            <div class="intro__fon">
                <video class="intro__v-fon" src="{{ asset('resources/media/images/Travis_scott.mp4') }}" autoplay muted loop></video>
            </div>
            <div class="intro__content">
                <h1 class="intro_text_h1 _anim-items fs-vb" style=" text-shadow: 0 0 10px #fff; font-weight: bold; letter-spacing: 0px;">SHREE</h1>
                <h4 class="intro_text_h4 _anim-items fs-m" style=" text-shadow: 0 0 10px #fff; font-weight: bold; letter-spacing: 10px;">RECORDS</h4>
                <div class="mar-lef" style="display: flex; align-items: center;  margin-top: 10%;">
                    <a class="js-open-modal button1" data-modal="2">BOOK NOW</a>
                    <a class="button" href="/create-beat">EVENTS</a>
                </div>
            </div>
        </div>
    </div>
    <div id="GB-hmeheadera">

        <div id="dodo" class="app-app-app">
            <div id="app-cover">
                <div id="bg-artwork" style="background-image: url(&quot;https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_1.jpg&quot;);"></div>
                <div id="bg-layer"></div>
                <div id="player">
                    <div id="player-track">
                        <div id="album-name">Dawn</div>
                        <div id="track-name">Skylike - Dawn</div>
                        <div id="track-time">
                            <div id="current-time">00:00</div>
                            <div id="track-length">00:00</div>
                        </div>
                        <div id="s-area">
                            <div id="ins-time"></div>
                            <div id="s-hover"></div>
                            <div id="seek-bar" style="width: 0px;"></div>
                        </div>
                    </div>
                    <div id="player-content">
                        <div id="album-art">
                            <img src="{{ asset('resources/media/images/SkYClbKLcb0.jpg') }}" class="active" id="_1">
                            <img src="{{ asset('resources/media/images/kD9twhD52Ow.jpg') }}" id="_2">
                            <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_3.jpg" id="_3">
                            <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_4.jpg" id="_4">
                            <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_5.jpg" id="_5">
                            <div id="buffer-box">Buffering ...</div>
                        </div>
                        <div id="player-controls">
                            <div class="control">
                                <div class="button11" id="play-previous">
                                    <i class="fas fa-backward"></i>
                                </div>
                            </div>
                            <div class="control">
                                <div class="button11" id="play-pause-button">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>
                            <div class="control">
                                <div class="button11" id="play-next">
                                    <i class="fas fa-forward"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper"  >
            <div class="main-slider-section">
                <div class="main-slider swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        <a class="swiper-slide swiper-slide-active" style="width: 652.333px; margin-right: 15px;">
                            <div class="block-slider swiper-container swiper-container-horizontal">

                                <div class="cardbbb" >
                                    <div id="aaaddd" class="card-1">
                                        <div class="card-img6-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">GUNNA X MIGOS TYPE BEAT - EORI</p>
                                    </div>
                                </div>

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img7-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="swiper-slide swiper-slide-active" style="width: 652.333px; margin-right: 15px;">
                            <div class="block-slider swiper-container swiper-container-horizontal">

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img6-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">GUNNA X MIGOS TYPE BEAT - EORI</p>
                                    </div>
                                </div>

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img7-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="swiper-slide swiper-slide-active" style="width: 652.333px; margin-right: 15px;">
                            <div class="block-slider swiper-container swiper-container-horizontal">

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img6-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">GUNNA X MIGOS TYPE BEAT - EORI</p>
                                    </div>
                                </div>

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img7-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="swiper-slide swiper-slide-next" style="width: 652.333px; margin-right: 15px;">
                            <div class="block-slider swiper-container swiper-container-horizontal">

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img6-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">GUNNA X MIGOS TYPE BEAT - EORI</p>
                                    </div>
                                </div>

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img7-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="swiper-slide swiper-slide-next" style="width: 652.333px; margin-right: 15px;">
                            <div class="block-slider swiper-container swiper-container-horizontal">

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img6-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">GUNNA X MIGOS TYPE BEAT - EORI</p>
                                    </div>
                                </div>

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img7-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="swiper-slide swiper-slide-next" style="width: 652.333px; margin-right: 15px;">
                            <div class="block-slider swiper-container swiper-container-horizontal">

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img6-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">GUNNA X MIGOS TYPE BEAT - EORI</p>
                                    </div>
                                </div>

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img7-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="swiper-slide swiper-slide-next" style="width: 652.333px; margin-right: 15px;">
                            <div class="block-slider swiper-container swiper-container-horizontal">

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img6-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">GUNNA X MIGOS TYPE BEAT - EORI</p>
                                    </div>
                                </div>

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img7-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="swiper-slide swiper-slide-next" style="width: 652.333px; margin-right: 15px;">
                            <div class="block-slider swiper-container swiper-container-horizontal">

                                <div class="cardbbb" >
                                    <div class="card-1">
                                        <div class="card-img6-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">GUNNA X MIGOS TYPE BEAT - EORI</p>
                                    </div>
                                </div>

                                <div class="cardbb" >
                                    <div class="card-1">
                                        <div class="card-img7-1"></div>
                                    </div>
                                    <div class="card-text">
                                        <p class="card-p-1">LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="swiper-button-prev uploaded-in-prev" style="background-image: url({{ asset('resources/media/images/Vector_6.svg') }});"></div>
                    <div class="swiper-button-next uploaded-in-next swiper-button-disabled" style="background-image: url({{ asset('resources/media/images/Vector_7.svg') }});"></div>
                </div>
            </div>
        </div>
    </div>
@endsection


