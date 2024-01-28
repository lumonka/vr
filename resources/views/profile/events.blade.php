@extends('layouts.app')
@section('content')
<style>
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
</style>
    <div id="GB-hmeheadera" class="pt-[50px] h-screen text-white">
        <div class="w-full h-full pt-[100px] flex" style="background: #00000000;">
            <div
                style="display: flex; flex-direction: column; height: 100%; width: 15%; justify-content: flex-start; align-items: center; font-size: 20px; z-index: 3;">
                <a href="/profile" style="margin: 10px; color: #fff; text-decoration: none;">My account</a>

                <a href="./events" style="margin: 10px; color: #fff; text-decoration: none;">Events apply History</a>
                <hr style="width: 50%; margin: 0; border: 1px solid #fff; border-radius: 15px;">

                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="margin: 10px; color: #fff; text-decoration: none; opacity: .5;">
                        Log out</button>
                </form>

            </div>
            <div>
                <hr style="margin-top: -35px;  height: 100%; border: 1px solid #fff;">
            </div>
            <div class="pt-[50px] w-[85%] wrapper">
                <div class="gap-10 flex flex-col">
                    <h1 class="text-center" style="font-size: 34px;">Events apply History</h1>
                    <div class="main-slider-section">
                        <div class="main-slider swiper-container swiper-container-horizontal">
                            <div class="swiper-wrapper"
                                style="transition-duration: 0ms;transform: translate3d(-480.667px, 0px, 0px);">
                                {{-- <a class="swiper-slide swiper-slide-prev" style="width: 465.667px; margin-right: 15px;">
                                    <div class="block-slider sliderr swiper-container swiper-container-horizontal">
                                        <div style="display: flex; flex-direction: column; width: 100%; height: 100%;">
                                            @foreach ($requests as $index => $item)
                                                @if ($index % 2 == 0)
                                                    <div
                                                        style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                        <div class="rounded-2xl w-full h-full"
                                                        style="border: 2px solid #000000; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                        <div class="w-[100%] h-[250px] flex justify-center items-center rounded-t-2xl bg-cover bg-center"
                                                            style="background: url({{ asset('/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }});">
                                                            <div class="w-[175px] h-[95%]"
                                                                style="background-image: url({{ asset('/media/images/logo/SHREE.svg') }}); background-position: center; background-size: cover;">
                                                            </div>
                                                        </div>

                                                            <div style="font-size: 20px; text-align: center;">
                                                                <p>{{ $item->data }}</p>
                                                                <p>{{ $item->text }}</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <b style="font-size: 24px;">{{ $item->price }}$</b>
                                                        </div>
                                                    </div>
                                                    @if ($index + 1 < count($requests))
                                                        <div
                                                            style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                            <div class="rounded-2xl w-full h-full"
                                                        style="border: 2px solid #000000; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                        <div class="w-[100%] h-[250px] flex justify-center items-center rounded-t-2xl bg-cover bg-center"
                                                            style="background: url({{ asset('/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }});">
                                                            <div class="w-[175px] h-[95%]"
                                                                style="background-image: url({{ asset('/media/images/logo/SHREE.svg') }}); background-position: center; background-size: cover;">
                                                            </div>
                                                        </div>

                                                                <div style="font-size: 20px; text-align: center;">
                                                                    <p>{{ $requests[$index + 1]->data }}</p>
                                                                    <p>{{ $requests[$index + 1]->text }}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <b style="font-size: 24px;">{{ $requests[$index + 1]->price }}$</b>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </a> --}}
                                @foreach ($requests as $index => $item)
                                    @if ($index % 2 == 0)
                                        <a class="swiper-slide swiper-slide-prev"
                                            style="width: 465.667px; margin-right: 15px;">
                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%;">
                                                <div class="rounded-2xl w-full h-full"
                                                        style="border: 2px solid #000000; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                        <div class="w-[100%] h-[250px] flex justify-center items-center rounded-t-2xl bg-cover bg-center"
                                                            style="background: url({{ asset('/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }});">
                                                            <div class="w-[175px] h-[95%]"
                                                                style="background-image: url({{ asset('/media/images/logo/SHREE.svg') }}); background-position: center; background-size: cover;">
                                                            </div>
                                                        </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>{{ $item->data }}</p>
                                                        <p>{{ $item->text }}</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">{{ $item->price }}$</b>
                                                </div>
                                            </div>
                                        </a>
                                        @if ($index + 1 < count($requests))
                                            <a class="swiper-slide swiper-slide-prev"
                                                style="width: 465.667px; margin-right: 15px;">
                                                <div
                                                    style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%;">
                                                    <div class="rounded-2xl w-full h-full"
                                                        style="border: 2px solid #000000; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                        <div class="w-[100%] h-[250px] flex justify-center items-center rounded-t-2xl bg-cover bg-center"
                                                            style="background: url({{ asset('/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }});">
                                                            <div class="w-[175px] h-[95%]"
                                                                style="background-image: url({{ asset('/media/images/logo/SHREE.svg') }}); background-position: center; background-size: cover;">
                                                            </div>
                                                        </div>

                                                        <div style="font-size: 20px; text-align: center;">
                                                            <p>{{ $requests[$index + 1]->data }}</p>
                                                            <p>{{ $requests[$index + 1]->text }}</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <b style="font-size: 24px;">{{ $requests[$index + 1]->price }}$</b>
                                                    </div>
                                                </div>
                                            </a>
                                        @endif
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="swiper-button-prev uploaded-in-prev"
                            style="background-image: url({{asset('/media/images/Vector_6.svg') }});">
                        </div>
                        <div class="swiper-button-next uploaded-in-next swiper-button-disabled"
                            style="background-image: url({{ asset('/media/images/Vector_7.svg') }});">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
