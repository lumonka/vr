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

body {
    color: rgb(255, 255, 255);
    text-align: center;
    font-size: calc(1em + 0.5vw);
}
/*h1 {*/
/*    margin-top: 55px !important;*/
/*}*/
.login-box {
position: absolute;
    top: 50%;
    width: 750px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgb(255, 255, 255);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(255, 255, 255, 0.6);
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.login-box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #9747FF;
    text-align: center;
    font-size: 500%;
}

.login-box .user-box {
    margin: 10px;
    position: relative;
}
.Zip {
    width: 510px;
}
.login-box .user-box input {
    width: 100%;
    padding: 10px  0 10px  10px ;
    font-size: 16px;
    font-weight: 400;
    color: #000000;
    margin-bottom: 30px;
    border: none;
    /* border-bottom: 1px solid #000000; */
    outline: none;
    background: #F8F1FF;
    border-radius: 5px;
}
.login-box .user-box input[type="date"] {
    color: #00000000;
    transition: .8s;
}
.login-box .user-box input[type="datetime-local"] {
    color: #00000000;
    transition: .8s;
}
.login-box .user-box input[type="date"]:active {
    color: #000000;
    transition: .8s;
}
.login-box .user-box input[type="datetime-local"]:active {
    color: #000000;
    transition: .8s;
}
.login-box .user-box input[type="date"]:focus {
    color: #000000;
    transition: .8s;
}
.login-box .user-box input[type="datetime-local"]:focus {
    color: #000000;
    transition: .8s;
}
.login-box .user-box input[type="date"]:valid {
    color: #000000;
    transition: .8s;
}
.login-box .user-box input[type="datetime-local"]:valid {
    color: #000000;
    transition: .8s;
}

.login-box .user-box label {
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0 10px  10px ;
    font-size: 16px;
    font-weight: 400;
    color: #000000;
    pointer-events: none;
    transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
    top: -25px;
    left: 0;
    color: #9747FF;
    font-size: 12px;
}


.login-box form a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #9747FF;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
}

.login-box a:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
    0 0 25px #03e9f4,
    0 0 50px #03e9f4,
    0 0 100px #03e9f4;
}

.login-box a span {
    position: absolute;
    display: block;
}

.login-box a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
    0% {
        left: -100%;
    }
    50%,100% {
        left: 100%;
    }
}

.login-box a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
}

@keyframes btn-anim2 {
    0% {
        top: -100%;
    }
    50%,100% {
        top: 100%;
    }
}

.login-box a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
}

@keyframes btn-anim3 {
    0% {
        right: -100%;
    }
    50%,100% {
        right: 100%;
    }
}

.login-box a span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
}

@keyframes btn-anim4 {
    0% {
        bottom: -100%;
    }
    50%,100% {
        bottom: 100%;
    }
}

/*_------------------------------------------------------------------------------------------------------------------_*/
.login-box-log{
    /* position: absolute;
    top: 150%;
    left: 50%; */
    /* width: 600px; */
    /* padding: 40px;

    background: rgba(255, 255, 255, 0);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px; */

    display: flex;
    flex-direction: column;
    align-items: center;
}

.login-box-log h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #9747FF;
    text-align: center;
    font-size: 500%;
}

.login-box-log .user-box {
    margin: 10px;
    position: relative;
}

.login-box-log .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #ffffff;
    margin-bottom: 15px;
    border: none;
    border-bottom: 1px solid #ffffff;
    outline: none;
    background: #5500f300;
    /* border-radius: 5px; */
}

.login-box-log .user-box label {
    position: absolute;
    top:0;
    left: 0;
    padding: 20px 0;
    font-size: 16px;
    color: #ffffff;
    pointer-events: none;
    transition: .5s;
}

.login-box-log .user-box input:focus ~ label,
.login-box-log .user-box input:valid ~ label {
    top: -30px;
    left: 0;
    color: #FF8C00;
    font-size: 12px;
}

.login-box-log form a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #9747FF;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
}

.login-box-log a:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
    0 0 25px #03e9f4,
    0 0 50px #03e9f4,
    0 0 100px #03e9f4;
}

.login-box-log a span {
    position: absolute;
    display: block;
}

.login-box-log a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
    0% {
        left: -100%;
    }
    50%,100% {
        left: 100%;
    }
}

.login-box-log a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
}

@keyframes btn-anim2 {
    0% {
        top: -100%;
    }
    50%,100% {
        top: 100%;
    }
}

.login-box-log a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
}

@keyframes btn-anim3 {
    0% {
        right: -100%;
    }
    50%,100% {
        right: 100%;
    }
}

.login-box-log a span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
}

@keyframes btn-anim4 {
    0% {
        bottom: -100%;
    }
    50%,100% {
        bottom: 100%;
    }
}


/*_------------------------------------------------------------------------------_*/

.login-box-log-l{
    /* position: absolute;
    top: 150%;
    left: 50%; */
    width: 600px;
    /* padding: 40px;

    background: rgba(255, 255, 255, 0);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px; */

    display: flex;
    flex-direction: column;
    align-items: center;
}

.login-box-log-l h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #9747FF;
    text-align: center;
    font-size: 500%;
}

.login-box-log-l .user-box {
    margin: 10px;
    width: 600px;
    position: relative;
}


.login-box-log-l .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #ffffff;
    margin-bottom: 15px;
    border: none;
    border-bottom: 1px solid #ffffff;
    outline: none;
    background: #5500f300;
    /* border-radius: 5px; */
}
.login-box-log-l .user-box label {
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #ffffff;
    pointer-events: none;
    transition: .5s;
}

.login-box-log-l .user-box input:focus ~ label,
.login-box-log-l .user-box input:valid ~ label {
    top: -30px;
    left: 0;
    color: #FF8C00;
    font-size: 12px;
}

.login-box-log-l form a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #9747FF;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
}

.login-box-log-l a:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
    0 0 25px #03e9f4,
    0 0 50px #03e9f4,
    0 0 100px #03e9f4;
}

.login-box-log-l a span {
    position: absolute;
    display: block;
}

.login-box-log-l a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
    0% {
        left: -100%;
    }
    50%,100% {
        left: 100%;
    }
}

.login-box-log-l a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
}

@keyframes btn-anim2 {
    0% {
        top: -100%;
    }
    50%,100% {
        top: 100%;
    }
}

.login-box-log-l a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
}

@keyframes btn-anim3 {
    0% {
        right: -100%;
    }
    50%,100% {
        right: 100%;
    }
}

.login-box-log-l a span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
}

@keyframes btn-anim4 {
    0% {
        bottom: -100%;
    }
    50%,100% {
        bottom: 100%;
    }
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
    @foreach ($banner as $item)
        <div
            style="background: url({{ asset('/media/images/') . '/' . $item->background }}); background-size: cover; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center;">
            <h4 class="intro_text_h4 _anim-items fs-vb" style="text-shadow: 0 0 5px #fff;">
                {{ $item->heading }}</h4>
        </div>
    @endforeach

    <div id="GB-hmeheadera" style="position: relative;"><span style="position: relative; z-index: 1;">

        </span>
        <div
            style="width: 100%; height: 150vh; background: rgba(153, 0, 255, 0.31); display: flex; justify-content: center; align-items: center; flex-direction: column; position: relative; z-index: 1;">
            <div class="flex flex-wrap justify-center gap-5">
                {{-- @foreach ($news_1 as $item)
                    <div class="imggi wt-b margiinend"
                        style="background: url({{ asset('/media/images/') . '/' . $item->image }});">
                        <div style="padding: 0 30px; width: 100%;">

                            <div class="ab_txt _anim-items _anim-no-hide _active"
                                style="display: flex;  align-items: baseline; justify-content: space-between;">
                                <h1 style="margin: 0;">{{ $item->heading }}</h1>
                                <h3 style="margin: 0;">{{ $item->data }}</h3>
                            </div>

                            <p class="ab_txt _anim-items _anim-no-hide _active">{{ $item->descr }}</p>

                        </div>
                    </div>
                @endforeach --}}
                <div class="flex flex-col gap-5">
                    @foreach ($news_2 as $item)
                        <div class="imggi wt-m margiinend"
                            style="background: url({{ asset('/media/images/') . '/' . $item->image }});">
                            <div class="flex flex-col justify-end" style="padding: 0 30px; width: 100%; height:200px;">
                                <div class="ab_txt _anim-items _anim-no-hide _active"
                                    style="display: flex;  align-items: baseline; justify-content: space-between;">
                                    <h1 class="m-0">NEWS</h1>
                                    <h3 class="m-0">11.09.2003</h3>
                                </div>

                                <p class="ab_txt _anim-items _anim-no-hide _active">Lorem ipsum dolor sit amet busdam
                                    labofacilis ea.</p>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div><span style="position: relative; z-index: 1;">

        </span>
        <div
            style="width: 100%; height: 100vh; background: rgba(153, 0, 255, 0.31); display: flex; justify-content: center; align-items: center; position: relative; z-index: 1;">

            <div class="login-box">
                <h2>EVENTS</h2>
                <form action="/admin_users_requests_create" method="post"
                    style="display: flex; flex-wrap: wrap;
                    justify-content: space-evenly;
                    flex-direction: row;">
                    @csrf
                    <div style="display: flex; flex-wrap: wrap;
                    justify-content: space-evenly;
                    flex-direction: row;">
                        
                    
                    <div>
                        <div class="user-box">
                            <input type="text" name="rap_name" id="rap_name" required>
                            <label>Rap Name</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="name" id="name" required>
                            <label>Name</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="surname" id="surname" required>
                            <label>Surname</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="date" value="" id="start" name="date_of_birth" id="date_of_birth"
                                required placeholder="Date of birth">
                            <label>Date of birth</label>
                        </div>

                        <div class="user-box">
                            <input type="email" name="email" id="email" required>
                            <label>E-mail</label>
                        </div>
                        <div class="user-box">
                            <input type="tel" name="phone" id="phone" required>
                            <label>Phone</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="text" name="address" id="address" required class="dateselect">
                            <label>Address</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="city" id="city" required>
                            <label>City</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="datetime-local" id="start" name="date" id="date" required
                                placeholder="Date">
                            <label for="start">Date</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="zip" id="zip" required="">
                            <label>Zip</label>
                        </div>
                    </div>
</div>
                    <!--<button class="button-send" type="submit">SEND</button>-->
                    <button type="submit" class="inline-block text-xl rounded bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">SEND</button>
                </form>

            </div>

        </div><span style="position: relative; z-index: 1;">

        </span><canvas class="vanta-canvas" width="932" height="350"
            style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 1865px; height: 700px;"></canvas>
    </div>
@endsection
