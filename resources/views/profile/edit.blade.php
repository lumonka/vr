@extends('layouts.app')
@section('content')
    <div id="GB-hmeheadera" class="pt-[50px] h-screen text-white">
        <div class="w-full h-full pt-[100px] flex" style="background: #00000000;">
            <div
                style="display: flex; flex-direction: column; height: 100%; width: 15%; justify-content: flex-start; align-items: center; font-size: 20px; ">
                <a href="/profile" style="margin: 10px; color: #fff; text-decoration: none;">My account</a>
                <hr style="width: 50%; margin: 0; border: 1px solid #fff; border-radius: 15px;">
                <a href="/profile-events" style="margin: 10px; color: #fff; text-decoration: none;">Events apply History</a>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="margin: 10px; color: #fff; text-decoration: none; opacity: .5;">Log
                        out</button>
                </form>

            </div>
            <div style="display: flex; flex-direction: column;">
                <hr style="margin-top: -35px; height: 100%; border: 1px solid #fff;">
            </div>
            <div class="pt-[50px] w-[85%] wrapper flex flex-col gap-5 items-center">
                <div>
                    <h2 style="font-size: 38px;">Hi,
                        {{ Auth::user()->name }}
                    </h2>
                </div>

                <div style="display: flex;">

                    <div style="margin: 30px;">
                        <h2 style="font-size: 30px;">LATEST BOOKING</h2>
                        <p style="font-size: 16px;">You have not made a booking.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


<script id="rendered-js">
    VANTA.FOG({
        el: "#GB-hmeheadera",
        mouseControls: true,
        touchControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        highlightColor: 0xff8a2b,
        midtoneColor: 0x9564ff,
        lowlightColor: 0xff780f,
        baseColor: 0xa06cff,
        speed: 1.60,
        zoom: 1
    })
</script>
@endsection