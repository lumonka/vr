@extends('layouts.app')
@section('content')
<style>
    .ban-ban {
    background-size: cover;
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.fs-vb{
    font-size: 24px;
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

.group {
    position: absolute;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
}
.item {
    width: 15vw;
    height: 75vh;
    background-position: center;
    background-size: 75vh;
    margin: 1vw;
    border-radius: 3vw;
    display: inline-block;
    cursor: pointer;
    background-size: cover;
    z-index: 3;
}
.flex-slider{
    display: flex;
    flex-flow: row nowrap;
    overflow: hidden;
    height: 80vh;
    width: 100%;

}

.flex-slider-item-img{
    width: 100%;
    height: auto;
}
.active:hover{
    flex-basis: 50%;
}
.flex-slider-item{
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    background:linear-gradient(to right, rgba(0, 0, 0,0.4), rgba(0, 0, 0,0.3)),
    url('https://upload.wikimedia.org/wikipedia/ru/thumb/9/94/%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg/640px-%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    flex-basis: 25%;
    transition: 1000ms ease-in-out;
}
.flex-slider-item-text{
    margin-left: 5%;
    margin-right: 5%;
}
.flex-slider-item-text{
    font-weight: 100;
    font-size: 24px;
    transition: 350ms ease-in-out;
}
.active:hover .flex-slider-item-text{
    font-size: 2.4vw;

}
.flex-slider-item-text{
    color: #fff;
}

@media screen and (min-width: 1801px) {
    .fs-m {
        font-size: 29px;
    }
    .fs-vb{
        font-size: 90px;
        color: #fff;
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
}


</style>
    @foreach ($banner_1 as $item)
        <div class="ban-ban" style="background: url({{ asset('/media/images/') . '/' . $item->background }});">
            <h1 class="intro_text_h1 _anim-items fs-vb" style="text-shadow: 0 0 5px #fff;">
                {{ $item->heading }}</h4>
        </div>
    @endforeach
    <div id="GB-hmeheadera">
        <div
            style="width: 100%; height: 100vh; background-color: #6634b600; display: flex; justify-content: center; align-items: center;">
            <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; ">
                <div class="group" style="z-index: 9; ">
                    @foreach ($cards as $item)
                        <div class="item"
                            style="background-image: url({{ asset('/media/images/') . '/' . $item->image }}); width: 15vw; ">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div
            style="display: flex; justify-content: center; align-items: center; background: #00000000; flex-direction: column; text-align: center; padding-bottom: 60px;">
            <h1 class="fs-vs" style="color: #fff; ">FULL LIST</h1>
            <h3 class="fs-vs" style="color: #fff; ">
                @foreach ($list as $item)
                    {{ $item->text }} <br>
                @endforeach
            </h3>
        </div>
        @foreach ($banner_2 as $item)
            <div
                style="background: url({{ asset('/media/images/') . '/' . $item->background }}); background-size: cover; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center;">
                <h4 class="intro_text_h4 _anim-items fs-vb"
                    style="font-weight: 900; font-size: 80px; text-shadow: 0 0 10px #fff;">{{ $item->heading }}</h4>
            </div>
        @endforeach
        <section class="flex-slider">
            @foreach ($person as $item)
                <div class="flex-slider-item active" 
                {{-- style="background:linear-gradient(to right, rgba(0, 0, 0,0.4), rgba(0, 0, 0,0.3)), url({{ $item->image }});" --}}
                >
                    <span class="flex-slider-item-text">Lorem ipsum dolor</span>
                </div>
            @endforeach
        </section>
    </div>
@endsection
