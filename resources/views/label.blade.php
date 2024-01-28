@extends('layouts.app')
@section('content')
<style>
.ab_txt{
    border-bottom: 2px solid rgba(255, 255, 255, 0);
    transition-duration:  0.4s;
    transform: translate(0px, 120%);
    opacity: 0;
    transition: all 0.6s ease 0s;
    color: #fff;
}

.photo-vh{
    width: 60vh;
    height: 60vh;
}

h1 {
    font-weight: 300 !important;
    font-size: 3.5em !important;
}
.ab_txt._active{
    transform: translate(0px, 0px);
    opacity: 1;
    transition: all 0.6s ease 0s;
}
.ab_txt1{

    border-bottom: 2px solid rgba(255, 255, 255, 0);
    transition-duration:  0.4s;
    transform: translate(0px, 80%);
    opacity: 0;
    transition: all 0.6s ease 0s;
}
.ab_txt1._active{
    transform: translate(0px, 0px);
    opacity: 1;
    transition: all 0.6s ease 0s;
}

.intro {
    overflow: hidden;
    position: relative;
}

.affix {
    padding: 0;
    backdrop-filter: blur(20px);
    background-color: #111111ad;
    transition: all 0.4s ease;
}

.affix img {
    padding-top: 10px;
    width: 48px;
    height: 48px;

    background: transparent;
    transition: 0.4s;
}

.intro::after{
    content: "";
    display: block;

    background:linear-gradient(180deg, rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.5),rgb(0, 0, 0));

    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
}
.intro__content{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 3;
}
.intro_text_h1{
    font-size: 600%;
    font-weight:100;
    margin: 0;
    color: #fff;
}
.intro_text_h4{
    font-size: 400%;
    font-weight:100;
    margin: 0;
    color: #fff;
}

.intro__fon {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;

    z-index: 1;

    height: 100vh;
}

.intro__v-fon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
}

.button{

    text-decoration: none;
    color: #fff;
    width: 350px;
    height: 60px;
    display: flex;
    margin: 20px;
    padding: 0 20px;

    align-content: center;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg,#9747FF, #493F89 );
    font-size: 23px;
    border-radius: 40px;
    transition: 0.5s;
    z-index: 3;
}
.button:hover{
    transition: 0.5s;

    box-shadow: 0 0 20px #FF8C00;
    background: linear-gradient(45deg, #FF8C00, #FF5C00);
}
.button1{
    text-decoration: none;
    color: #fff;
    width: 450px;
    height: 80px;
    display: flex;
    margin: 20px;
    padding: 0 20px;

    align-content: center;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg,#9747FF, #493F89 );
    font-size: 34px;
    border-radius: 40px;
    transition: 0.5s;
    z-index: 3;
}
.button1:hover{
    cursor: pointer;
    transition: 0.5s;
    background: linear-gradient(45deg, #FF8C00, #FF5C00);
    box-shadow: 0 0 20px #FF8C00;
}

.fs-m {
    font-size: 38px;
}
.fs-vb{
    font-size: 24px;
}
.fs-vs{
    font-size: 40px;
}

@media screen and (min-width: 1801px) {
    .fs-m {
        font-size: 29px;
    }
    .fs-vb{
        font-size: 63px;
    }
    .fs-vs{
        font-size: 40px;
    }
    .button1{
        width: 350px;
        height: 80px;
        font-size: 34px;
    }
    .button{
        width: 250px;
        height: 60px;
        font-size: 28px;
    }
    
    .video {
        width: 100vw;
        height: 100vh;
    }
}




</style>
    <div class="intro slider">
        <div class="intro__item">
            @foreach ($banner as $item)
                <div class="intro__fon">
                    <video class="intro__v-fon" src="{{ asset('media/images/') .'/'. $item->background }}"
                        autoplay muted loop></video>
                </div>
                <div class="intro__content">
                    <h1 class="intro_text_h1 _anim-items fs-vb"
                        style=" text-shadow: 0 0 10px #fff; font-weight: bold; letter-spacing: 0px;">{{ $item->heading }}
                    </h1>
                </div>
            @endforeach
        </div>
    </div>

    <div id="GB-hmeheadera" style="height: 100%;">

        <div
            style="display: flex; justify-content: center; align-items: center; background: #00000000; flex-direction: column; text-align: center; ">
            @foreach ($header as $item)
                <div style="margin: 160px ;">
                    <h1 class="ab_txt _anim-items _anim-no-hide">{{ $item->text }}</h1>
                </div>
            @endforeach
            @foreach ($cards as $item)
                @if ($item->id % 2 == 1)
                    <div style="display: flex; align-items: center; justify-content: center; margin: 120px 60px;">
                        <div>
                            @if ($item->image && Str::contains($item->image, '.mp4'))
                                <video class="video photo-vh"
                                    src="{{ asset('/media/images/') .'/'. $item->image }}" autoplay muted
                                    loop></video>
                            @else
                                <div class="photo-vh" 
                                    style="display: flex; flex-direction: column; justify-content: center; background: url({{ asset('/media/images/') .'/'. $item->image }}); background-size: cover; background-position: center; color: #fff; ">
                                </div>
                            @endif
                        </div>
                        <div style="margin-left: -80px;">
                            <div class="ab_txt _anim-items _anim-no-hide"
                                style="text-align: start; margin: 25px; font-size: 55px;">LABEL</div>
                            <div class="ab_txt _anim-items _anim-no-hide w-con-min fs-m text-balance"
                                style="text-align: start; margin: 25px;">{{ $item->descr }}</div>

                        </div>
                    </div>
                @else
                    <div style="display: flex; align-items: center; justify-content: center; margin: 120px 60px;">
                        <div style="margin-right: -80px; z-index: 4;">
                            <div class="ab_txt _anim-items _anim-no-hide"
                                style="text-align: end; margin: 25px; font-size: 55px;">
                                LABEL</div>
                            <div class="ab_txt _anim-items _anim-no-hide w-con-min fs-m text-balance"
                                style="text-align: end; margin: 25px;">
                                {{ $item->descr }}
                            </div>

                        </div>
                        <div>
                            @if ($item->image && Str::contains($item->image, '.mp4'))
                                <video class="video photo-vh"
                                    src="{{ asset('/media/images/') .'/'. $item->image }}" autoplay muted
                                    loop></video>
                            @else
                                <div class="photo-vh"
                                    style="display: flex; flex-direction: column; justify-content: center; background: url({{ asset('/media/images/') .'/' . $item->image }}); background-size: cover; background-position: center; color: #fff; ">
                                </div>
                            @endif

                        </div>
                    </div>
                @endif
            @endforeach

        </div>
        <div style="height: 80px; margin-bottom: 0px;"></div>
    </div>
@endsection
