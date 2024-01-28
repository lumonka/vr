@extends('layouts.app')
@section('content')
<style>
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
h1 {
    margin-top: 55px !important;
}
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

</style>
    @foreach ($banner as $item)
        <div
            style="background: url({{ asset('/media/images/') . '/' . $item->background }}); background-size: cover; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center;">
            <h4 class="intro_text_h4 _anim-items fs-vb" style="font-weight: 900; text-shadow: 0 0 10px #fff;">
                {{ $item->heading }}</h4>
        </div>
    @endforeach

    <div id="GB-hmeheadera">

        <div style="display: flex; justify-content: space-evenly; align-items: center; padding-top: 40px;">
            @foreach ($contacts as $item)
                <div style="display: flex; flex-direction: column;">
                    <p>Phone</p>
                    <h4>{{ $item->phone }}</h4>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <p>Email</p>
                    <h4>{{ $item->email }}</h4>
                </div>
            @endforeach
            <div style="display: flex; flex-direction: column; ">
                <p>Social Media</p>
                <div class="" style="display: flex; flex-direction: column;">
                    <ul class="social-icons">
                        @foreach ($social as $item)
                            <li>
                                <a class="{{ $item->name }}" href="#"
                                    style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;">
                                    {!! $item->icon !!}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <form action="">
            <h1>FEEDBACK</h1>
            <div style="display: flex; justify-content: space-evenly; align-items: center; ">
                <div style="display: flex; flex-direction: column;">

                    <div class="login-box-log">
                        <div class="user-box">
                            <input type="name" name="" required="">
                            <label>First Name</label>
                        </div>
                    </div>

                </div>
                <div style="display: flex; flex-direction: column;">

                    <div class="login-box-log">
                        <div class="user-box">
                            <input type="name" name="" required="">
                            <label>Last Name</label>
                        </div>
                    </div>

                </div>
                <div style="display: flex; flex-direction: column; ">

                    <div class="login-box-log">
                        <div class="user-box">
                            <input type="name" name="" required="">
                            <label>E-mail</label>
                        </div>
                    </div>

                </div>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; padding:  50px;">

                <div class="login-box-log-l">
                    <div class="user-box">
                        <input type="name" name="" required="">
                        <label>Message</label>
                    </div>
                </div>
                <button class="but-log">SEND</button>

            </div>
        </form>
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; padding: 90px;">
            <div>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2426.075952259417!2d13.412759577035914!3d52.55014973399642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85206601ab613%3A0x67777008a16243f4!2zV2ljaGVydHN0cmHDn2UgNCwgMTA0MzkgQmVybGluLCDQk9C10YDQvNCw0L3QuNGP!5e0!3m2!1sru!2sru!4v1696162641037!5m2!1sru!2sru"
                    width="600" height="450" style="border-radius: 30px;border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div>
                <h2 style="font-size: 48px;">Address</h2>
                @foreach ($contacts as $item)
                    <p style="font-size: 24px;">{{ $item->address }}</p>
                @endforeach
            </div>
        </div>

    </div>
@endsection
