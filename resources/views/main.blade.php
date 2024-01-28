@extends('layouts.app')
@section('content')
    <style>
        .intro {
            overflow: hidden;
            position: relative;
        }

        .intro::after {
            content: "";
            display: block;

            background: linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5), rgb(0, 0, 0));

            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
        }

        .intro__content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            width: 100%;
            height: 100%;
            margin-top: 6%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
        }

        .intro_text_h1 {
            font-size: 600%;
            font-weight: 100;
            margin: 0;
            color: #fff;
        }

        .intro_text_h4 {
            font-size: 400%;
            font-weight: 100;
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

        .button {

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
            background: linear-gradient(45deg, #9747FF, #493F89);
            font-size: 23px;
            border-radius: 40px;
            transition: 0.5s;
            z-index: 3;
        }

        .button:hover {
            transition: 0.5s;

            box-shadow: 0 0 20px #FF8C00;
            background: linear-gradient(45deg, #FF8C00, #FF5C00);
        }

        .button1 {
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
            background: linear-gradient(45deg, #9747FF, #493F89);
            font-size: 34px;
            border-radius: 40px;
            transition: 0.5s;
            z-index: 3;
        }

        .button1:hover {
            cursor: pointer;
            transition: 0.5s;
            background: linear-gradient(45deg, #FF8C00, #FF5C00);
            box-shadow: 0 0 20px #FF8C00;
        }

        .fs-m {
            font-size: 38px;
        }

        .fs-vb {
            font-size: 24px;
        }

        .fs-vs {
            font-size: 40px;
        }

        #GB-hmeheader {
            width: 100%;
            height: 100vh;
        }

        #dodo {
            transform: translate(0px, 120%);
        }

        .app-app-app {

            position: fixed;
            z-index: 4;
            top: 80%;
            right: 25%;
            transform: translate(0px, 120%);
            opacity: 0;
            transition: all 0.6s ease 0s;
        }

        #app-cover {
            position: absolute;

            right: 25px;
            left: 0;
            width: 430px;
            height: 100px;
            margin: -4px auto;
            z-index: 4;
        }

        #bg-layer {
            background-color: #fff;
            opacity: 0;
            z-index: 2;
        }

        #player {
            position: relative;
            height: 100%;
            z-index: 3;
        }

        #player-track {
            position: absolute;
            top: 0;
            right: 15px;
            left: 15px;
            padding: 13px 22px 10px 184px;

            background: #ffffffc0;
            backdrop-filter: blur(20px);
            border-radius: 15px 15px 0 0;
            transition: 0.3s ease top;
            z-index: 1;
        }

        #player-track.active {
            top: -92px;
        }

        #album-name {
            color: #54576f;
            font-size: 17px;
            font-weight: bold;
        }

        #track-name {
            color: #acaebd;
            font-size: 13px;
            margin: 2px 0 13px 0;
        }

        #track-time {
            height: 12px;
            margin-bottom: 3px;
            overflow: hidden;
        }

        #current-time {
            float: left;
        }

        #track-length {
            float: right;
        }

        #current-time,
        #track-length {
            color: transparent;
            font-size: 11px;
            background-color: #ffe8ee;
            border-radius: 10px;
            transition: 0.3s ease all;
        }

        #track-time.active #current-time,
        #track-time.active #track-length {
            color: #FF8C00;
            background-color: transparent;
        }


        #s-area,
        #seek-bar {
            position: relative;
            height: 4px;
            border-radius: 4px;
        }

        #s-area {
            background-color: #fff0de;
            cursor: pointer;
        }

        #ins-time {
            position: absolute;
            top: -29px;
            color: #fff;
            font-size: 12px;
            white-space: pre;
            padding: 5px 6px;
            border-radius: 4px;
            display: none;
        }

        #s-hover {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            opacity: 0.2;
            z-index: 2;
        }

        #ins-time,
        #s-hover {
            background-color: #3b3d50;
        }

        #seek-bar {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 0;
            background-color: #FF8C00;
            transition: 0.2s ease width;
            z-index: 1;
        }

        #player-content {
            position: relative;
            height: 100%;
            background-color: #fff;
            box-shadow: 0 0px 0px #656565;
            border-radius: 15px;
            z-index: 2;
        }

        #album-art {
            position: absolute;
            top: -40px;
            width: 115px;
            height: 115px;
            margin-left: 40px;
            transform: rotateZ(0);
            transition: 0.3s ease all;
            box-shadow: 0 0 0 10px #fff;
            border-radius: 50%;
            overflow: hidden;
        }

        #album-art.active {
            top: -60px;
            box-shadow: 0 0 0 4px #fff7f7, 0 30px 50px -15px #afb7c1;
        }

        #album-art:before {
            content: "";
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;
            width: 20px;
            height: 20px;
            margin: -10px auto 0 auto;
            background-color: #d6dee7;
            border-radius: 50%;
            box-shadow: inset 0 0 0 2px #fff;
            z-index: 2;
        }

        #album-art img {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: -1;
        }

        #album-art img.active {
            opacity: 1;
            z-index: 1;
        }

        #album-art.active img.active {
            z-index: 1;
            -webkit-animation: rotateAlbumArt 3s linear 0s infinite forwards;
            animation: rotateAlbumArt 3s linear 0s infinite forwards;
        }

        @-webkit-keyframes rotateAlbumArt {
            0% {
                transform: rotateZ(0);
            }

            100% {
                transform: rotateZ(360deg);
            }
        }

        @keyframes rotateAlbumArt {
            0% {
                transform: rotateZ(0);
            }

            100% {
                transform: rotateZ(360deg);
            }
        }

        #buffer-box {
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;
            height: 13px;
            color: #1f1f1f;
            font-size: 13px;
            font-family: Helvetica;
            text-align: center;
            font-weight: bold;
            line-height: 1;
            padding: 6px;
            margin: -12px auto 0 auto;
            background-color: rgba(255, 255, 255, 0.19);
            opacity: 0;
            z-index: 2;
        }

        #album-art img,
        #buffer-box {
            transition: 0.1s linear all;
        }

        #album-art.buffering img {
            opacity: 0.25;
        }

        #album-art.buffering img.active {
            opacity: 0.8;
            filter: blur(2px);
            -webkit-filter: blur(2px);
        }

        #album-art.buffering #buffer-box {
            opacity: 1;
        }

        #player-controls {
            width: 250px;
            height: 100%;
            margin: 0 5px 0 141px;
            float: right;
            overflow: hidden;
        }

        .control {
            width: 33.333%;
            float: left;
            padding: 12px 0;
        }

        .button11 {
            padding: 25px;
            background-color: #fff;
            border-radius: 6px;
            cursor: pointer;
        }

        .button11 i {
            display: block;
            color: #d6dee7;
            font-size: 26px;
            text-align: center;
            line-height: 1;
        }

        .button11,
        .button11 i {
            transition: 0.2s ease all;
        }

        .button11:hover {
            background-color: #d6d6de;
        }

        .button11:hover i {
            color: #fff;
        }

        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            width: 100%;
            background: #6634b600;
        }

        .main-slider-section {
            width: 90%;
            height: 780px;
        }

        .main-slider {

            width: 100%;
            height: 100%;
        }

        .main-slider .swiper-wrapper .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background: #1a1a1a00;
        }


        .block-slider {
            padding: 3.790000000000003em;
            width: 100%;
            height: 100%;
            /* height: 100%; */
        }

        .block-slider .swiper-slide {
            background: #4F628E;
        }

        .next-btn,
        .prev-btn {
            width: 26px;
            height: 20px;
            margin-top: -10px;
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

        .page_card {

            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .cardb {
            overflow: visible;
            margin: 20px 60px;
        }

        .card-text {

            display: flex;
            flex-direction: column;
            color: #fff;
            font-weight: 600;
        }

        .card-p {
            margin-top: 7%;
            margin-bottom: 7%;
        }

        .card-p-1 {
            margin-top: 7%;
            font-size: 17px;
            /* font-family: 'Ubuntu', sans-serif; */
            margin-bottom: 7%;
        }

        .card {
            display: grid;
            grid-template-columns: 200px;
            grid-template-rows: 280px;
            grid-template-areas: "img";
            position: relative;
            overflow: hidden;
            overflow: hidden;
            z-index: 2;
            touch-action: none;
            border-radius: 5%/3.5%;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;
            will-change: transform, filter;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            transform-origin: center;
        }

        .card-1 {
            display: grid;
            width: 228px;
            grid-template-columns: 230px;
            grid-template-rows: 230px;
            grid-template-areas: "img";



            position: relative;
            overflow: hidden;

            overflow: hidden;
            z-index: 2;
            touch-action: none;
            border-radius: 5%/3.5%;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;
            will-change: transform, filter;
            background-color: #040712;
            background-image: var(--front);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            transform-origin: center;
        }


        .card:before,
        .card:after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            background-repeat: no-repeat;
            opacity: 0.5;
            mix-blend-mode: color-dodge;
            transition: all 0.33s ease;
        }

        .card:before {
            background-position: 50% 50%;
            background-size: 300% 300%;
            background-image: linear-gradient(115deg, transparent 0%, var(--color1) 25%, transparent 47%, transparent 53%, var(--color2) 75%, transparent 100%);
            opacity: 0.5;
            filter: brightness(0.5) contrast(1);
            z-index: 1;
        }

        .card:after {
            opacity: 1;
            background-image: url("https://assets.codepen.io/13471/sparkles.gif"), url(https://assets.codepen.io/13471/holo.png), linear-gradient(125deg, #ff008450 15%, #fca40040 30%, #ffff0030 40%, #00ff8a20 60%, #00cfff40 70%, #cc4cfa50 85%);
            background-position: 50% 50%;
            background-size: 160%;
            background-blend-mode: overlay;
            z-index: 2;
            filter: brightness(1) contrast(1);
            transition: all 0.33s ease;
            mix-blend-mode: color-dodge;
            opacity: 0.75;
        }

        .card.active:after,
        .card:hover:after {
            filter: brightness(1) contrast(1);
            opacity: 1;
        }

        .card.active,
        .card:hover {
            -webkit-animation: none;
            animation: none;
            transition: box-shadow 0.1s ease-out;
        }

        .card.active:before,
        .card:hover:before {
            -webkit-animation: none;
            animation: none;
            background-image: linear-gradient(110deg, transparent 25%, var(--color1) 48%, var(--color2) 52%, transparent 75%);
            background-position: 50% 50%;
            background-size: 250% 250%;
            opacity: 0.88;
            filter: brightness(0.66) contrast(1.33);
            transition: none;
        }

        .card.active:before,
        .card:hover:before,
        .card.active:after,
        .card:hover:after {
            -webkit-animation: none;
            animation: none;
            transition: none;
        }

        .card.animated {
            transition: none;
            -webkit-animation: holoCard 12s ease 0s 1;
            animation: holoCard 12s ease 0s 1;
        }

        .card.animated:before {
            transition: none;
            -webkit-animation: holoGradient 12s ease 0s 1;
            animation: holoGradient 12s ease 0s 1;
        }

        .card.animated:after {
            transition: none;
            -webkit-animation: holoSparkle 12s ease 0s 1;
            animation: holoSparkle 12s ease 0s 1;
        }

        .card-1:before,
        .card-1:after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            background-repeat: no-repeat;
            opacity: 0.5;
            mix-blend-mode: color-dodge;
            transition: all 0.33s ease;
        }

        .card-1:before {
            background-position: 50% 50%;
            background-size: 300% 300%;
            background-image: linear-gradient(115deg, transparent 0%, var(--color1) 25%, transparent 47%, transparent 53%, var(--color2) 75%, transparent 100%);
            opacity: 0.5;
            filter: brightness(0.5) contrast(1);
            z-index: 1;
        }

        .card-1:after {
            opacity: 1;
            background-image: url("https://assets.codepen.io/13471/sparkles.gif"), url(https://assets.codepen.io/13471/holo.png), linear-gradient(125deg, #ff008450 15%, #fca40040 30%, #ffff0030 40%, #00ff8a20 60%, #00cfff40 70%, #cc4cfa50 85%);
            background-position: 50% 50%;
            /* background-size: 160%; */
            background-blend-mode: overlay;
            z-index: 2;
            filter: brightness(1) contrast(1);
            transition: all 0.33s ease;
            mix-blend-mode: color-dodge;
            opacity: 0.75;
            transition: .4s;
        }

        .card-1.active:after,
        .card-1:hover:after {
            filter: brightness(1) contrast(1);

            opacity: 1;

        }

        .card-1:hover:after {
            background-image: url(../media/images/Frame_7_1.png);

            transition: .4s;

        }

        .card-1.active,
        .card-1:hover {
            -webkit-animation: none;
            animation: none;

            transition: box-shadow 0.1s ease-out;

        }

        .card-1.active:before,
        .card-1:hover:before {
            -webkit-animation: none;
            animation: none;
            background-image: linear-gradient(110deg, transparent 25%, var(--color1) 48%, var(--color2) 52%, transparent 75%);
            background-position: 50% 50%;
            background-size: 250% 250%;
            opacity: 0.88;
            filter: brightness(0.66) contrast(1.33);
            transition: none;
        }

        .card-1.active:before,
        .card-1:hover:before,
        .card-1.active:after,
        .card-1:hover:after {
            -webkit-animation: none;
            animation: none;
            transition: none;
        }

        .card-1.animated {
            transition: none;
            -webkit-animation: holoCard 12s ease 0s 1;
            animation: holoCard 12s ease 0s 1;
        }

        .card-1.animated:before {
            transition: none;
            -webkit-animation: holoGradient 12s ease 0s 1;
            animation: holoGradient 12s ease 0s 1;
        }

        .card-1.animated:after {
            transition: none;
            -webkit-animation: holoSparkle 12s ease 0s 1;
            animation: holoSparkle 12s ease 0s 1;
        }


        @-webkit-keyframes holoSparkle {

            0%,
            100% {
                opacity: 0.75;
                background-position: 50% 50%;
                filter: brightness(1.2) contrast(1.25);
            }

            5%,
            8% {
                opacity: 1;
                background-position: 40% 40%;
                filter: brightness(0.8) contrast(1.2);
            }

            13%,
            16% {
                opacity: 0.5;
                background-position: 50% 50%;
                filter: brightness(1.2) contrast(0.8);
            }

            35%,
            38% {
                opacity: 1;
                background-position: 60% 60%;
                filter: brightness(1) contrast(1);
            }

            55% {
                opacity: 0.33;
                background-position: 45% 45%;
                filter: brightness(1.2) contrast(1.25);
            }
        }

        @keyframes holoSparkle {

            0%,
            100% {
                opacity: 0.75;
                background-position: 50% 50%;
                filter: brightness(1.2) contrast(1.25);
            }

            5%,
            8% {
                opacity: 1;
                background-position: 40% 40%;
                filter: brightness(0.8) contrast(1.2);
            }

            13%,
            16% {
                opacity: 0.5;
                background-position: 50% 50%;
                filter: brightness(1.2) contrast(0.8);
            }

            35%,
            38% {
                opacity: 1;
                background-position: 60% 60%;
                filter: brightness(1) contrast(1);
            }

            55% {
                opacity: 0.33;
                background-position: 45% 45%;
                filter: brightness(1.2) contrast(1.25);
            }
        }

        @-webkit-keyframes holoGradient {

            0%,
            100% {
                opacity: 0.5;
                background-position: 50% 50%;
                filter: brightness(0.5) contrast(1);
            }

            5%,
            9% {
                background-position: 100% 100%;
                opacity: 1;
                filter: brightness(0.75) contrast(1.25);
            }

            13%,
            17% {
                background-position: 0% 0%;
                opacity: 0.88;
            }

            35%,
            39% {
                background-position: 100% 100%;
                opacity: 1;
                filter: brightness(0.5) contrast(1);
            }

            55% {
                background-position: 0% 0%;
                opacity: 1;
                filter: brightness(0.75) contrast(1.25);
            }
        }

        @keyframes holoGradient {

            0%,
            100% {
                opacity: 0.5;
                background-position: 50% 50%;
                filter: brightness(0.5) contrast(1);
            }

            5%,
            9% {
                background-position: 100% 100%;
                opacity: 1;
                filter: brightness(0.75) contrast(1.25);
            }

            13%,
            17% {
                background-position: 0% 0%;
                opacity: 0.88;
            }

            35%,
            39% {
                background-position: 100% 100%;
                opacity: 1;
                filter: brightness(0.5) contrast(1);
            }

            55% {
                background-position: 0% 0%;
                opacity: 1;
                filter: brightness(0.75) contrast(1.25);
            }
        }

        @-webkit-keyframes holoCard {

            0%,
            100% {
                transform: rotateZ(0deg) rotateX(0deg) rotateY(0deg);
            }

            5%,
            8% {
                transform: rotateZ(0deg) rotateX(6deg) rotateY(-20deg);
            }

            13%,
            16% {
                transform: rotateZ(0deg) rotateX(-9deg) rotateY(32deg);
            }

            35%,
            38% {
                transform: rotateZ(3deg) rotateX(12deg) rotateY(20deg);
            }

            55% {
                transform: rotateZ(-3deg) rotateX(-12deg) rotateY(-27deg);
            }
        }

        @keyframes holoCard {

            0%,
            100% {
                transform: rotateZ(0deg) rotateX(0deg) rotateY(0deg);
            }

            5%,
            8% {
                transform: rotateZ(0deg) rotateX(6deg) rotateY(-20deg);
            }

            13%,
            16% {
                transform: rotateZ(0deg) rotateX(-9deg) rotateY(32deg);
            }

            35%,
            38% {
                transform: rotateZ(3deg) rotateX(12deg) rotateY(20deg);
            }

            55% {
                transform: rotateZ(-3deg) rotateX(-12deg) rotateY(-27deg);
            }
        }

        .card-img6-1 {

            grid-area: img;
            background-size: cover;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
        }
        
        #GB-hmeheadera .vanta-canvas{
  border-radius: 6px;
}
        .but-log{
            text-decoration: none;
            color: #fff;
            width: 250px;
            height: 50px;
            display: flex;
            margin: 20px;
            align-content: center;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg,#9747FF, #493F89 );
            font-size: 23px;
            border-radius: 40px;
            border: 0;
            transition: 0.5s;
            z-index: 3;
        }
        .but-log:hover{
            transition: 0.5s;
          cursor: pointer;
          box-shadow: 0 0 20px #FF8C00;
          background: linear-gradient(45deg, #FF8C00, #FF5C00);
        }
        .con-logo{
          background: #fff;
          width: 50px; 
          height: 50px; 
          border-radius: 28px; 
          display: flex; 
          justify-content: center; 
          align-items: center; 
          margin: 20px;
          transition: all .5s;
        }
        .con-logo:hover{
          background: #FF8C00;
          transition: all .5s;
        }
        .overlay {
  /* Скрываем подложку  */
  opacity: 0;
  visibility: hidden;
  
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.897);
  z-index: 20;
  transition: .3s all;
  
}
/* .overlay::after{
  width: 100%;
  height: 100%;
  background: red;
  position: absolute;
  z-index: 21;
  transition: .3s;
} */

/* Стили для модальных окон */

.modal {
  
  /* Скрываем окна  */
  opacity: 0;
  visibility: hidden;
  
  
  /*  Установаем ширину окна  */
  width: 35%;
  max-width: 65%;
  
  /*  Центрируем и задаем z-index */
  position: fixed;
  top: 53%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 30; /* Должен быть выше чем у подложки*/
  
  /*  Побочные стили   */
  box-shadow: 0 3px 10px -.5px rgba(0, 0, 0, .2); 
  text-align: center;
  padding: 30px;
  border-radius: 6px;
  border: 2px solid #4242429d;
  background:url(../img/Rectangle\ 41.png) no-repeat;
  background-position: center;
  background-size: cover;
    color: #fff;
  transition: 0.3s all;
}
.modal__title{
  font-size: 26px;
  margin: 0;
}
/* Стили для активных классов подложки и окна */

.modal.active,
.overlay.active{
  
  display: flex;
  opacity: 1;
  visibility: visible;
  justify-content: center;
  flex-direction: column;
  /* width: 100%;
  height: 100%;
  background: #000; */

}


/* Стили для кнопки закрытия */

.modal__cross {
  width: 15px;
  height: 15px;
  /* position: absolute;
  top: 20px;
  right: 20px; */
  fill: rgb(250, 250, 250);
  cursor: pointer;
}
.modal__cross-l {
  width: 15px;
  height: 15px;
  position: absolute;
  top: 20px;
  right: 20px; 
  fill: rgb(250, 250, 250);
  cursor: pointer;
}
.mcc{
  overflow: scroll;
  overflow-x: hidden;
  height: 20em;
  width: 100%;
  padding: 0;
}

.mcc::-webkit-scrollbar {
  position: absolute;
  margin: 8px;
  width: 6px;              
}
.mcc::-webkit-scrollbar-track {
  
  background: rgba(255, 166, 0, 0);       
}
.mcc::-webkit-scrollbar-thumb {
  
  background-color: rgba(182, 182, 182, 0);   
  border-radius: 20px;       
  border: 3px solid rgba(230, 230, 230, 0.45);  
}


.model__con{
  display: flex;
  align-items: center;
  flex-direction: row-reverse;
  justify-content: space-between;
}
.modal-img{
  /* background: url(../img/cham03.jpg);
  background-size: cover; */
  width: 140px;
  height: 220px;
  border-radius: 6px;
}
.modal-card-con{
  display: flex;
  justify-content: space-between;
}
.modal-card-con-con{
  display: flex;
}
.card-p-1-m-h{
  font-size: 1.7rem;
  margin: 0;
}
.card-p-1-m{
  font-size: 1.2rem;
  margin: 0 15px;
}
.modal-margin{
  margin: 0 19px;
}

.table{
  border-spacing: 0px;
}

.btn-rounded{
  width: 20px;
  height: 20px;
  background: #1e1e1e;
  border-radius: 5%;
  color: rgb(255, 255, 255);
  border: 0px;
  font-weight: 900;
  border-radius: 3px;
  padding: 0px;
  margin: 5px;
  transition: 0.2s ease;
}

.btn-minus {
  width: 20px;
  height: 20px;
  background: #1e1e1e;
  border-radius: 5%;
  color: rgb(255, 255, 255);
  border: 0px;
  font-weight: 900;
  border-radius: 3px;
  padding: 0px;
  margin: 5px;
  transition: 0.2s ease;
}
.btn-minus:hover{
  background: rgb(24, 24, 24);
  transition: 0.2s ease;
}
.btn-plus {
  width: 20px;
  height: 20px;
  background: #1e1e1e;
  border-radius: 5%;
  color: rgb(255, 255, 255);
  border: 0px;
  font-weight: 900;
  border-radius: 3px;
  padding: 0px;
  margin: 5px;
  transition: 0.2s ease;
}
.btn-plus:hover{
  background: rgb(24, 24, 24);
  transition: 0.2s ease;
}
.cart-thead tr th {
  border-top: none;
  border-bottom: 1px solid rgb(255, 255, 255);
  min-width: 15%;
  width: 25%;
}
.cart-thead tr th:nth-child(1) {
  min-width: 17%;
  width: 25%;
  
}
.cart-thead tr th:nth-child(2) {
  min-width: 19%;
  width: 25%;
}
.cart-thead tr th:last-child {
  min-width: 15%;
  width: 25%;
}
.cart-table-row {
  height: 40px;
}
.cart-table-row td {
  vertical-align: middle;
}
.transparent-bg {
  background-color: transparent;
}
/* Стили для кнопок. Мы ведь порядочные разработчики, негоже простые ссылки оставлять */













      
        .form__napr{
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 30px;
        }
        .form_napr{
          display: flex;
          flex-direction: column;
          align-items: center;
          font-size: 30px;
        }
        .pass{
          margin: 20px;
        }
    

        .card-img7-1 {

            grid-area: img;
            background-size: cover;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
        }


        @media screen and (min-width: 1801px) {
            .fs-m {
                font-size: 29px;
            }

            .fs-vb {
                font-size: 90px;
            }

            .fs-vs {
                font-size: 40px;
            }

            .button1 {
                width: 350px;
                height: 80px;
                font-size: 34px;
            }

            .button {
                width: 250px;
                height: 60px;
                font-size: 28px;
            }
        }
    </style>
    <div class="modal" data-modal="1">
  
    <div class="model__con">
     <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path></svg>
     <p class="modal__title"></p>
    </div>

      <form class="form__user" action="" id="register" style="display: none;">
        <div class="form__napr" >
            <label class="avt" id="log">SIGN IN </label><span><pre> | </pre></span><label class="zar" id="reg"> SIGN UP</label>
        </div>
        <div class="login-box-log">
          <div class="user-box">
            <input type="name" name="" required="">
            <label>Full name</label>
          </div>
          <div class="user-box">
            <input type="name" name="" required="">
            <label>E-mail</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>Confirm passowed</label>
          </div>
          <div style="display: flex;">
            <div class="con-logo">
              <div style="background: url(./img/Vector\ \(4\).svg); background-size: cover; width: 25px; height: 26px;"></div>
            </div>
            <div class="con-logo">
              <div style="background: url(./img/Vector\ \(5\).svg); background-size: cover; width: 13px; height: 26px;"></div>
            </div>
          </div>
          <button class="but-log">SEND</button>
          </div>
        
      </form>

      <form class="form__user" id="sing" action="" >
          <div class="form__napr">
              <label class="avt" id="log" style="color: #FF8C00;">SIGN IN </label><span><pre> | </pre></span><label class="zar" id="reg"> SIGN UP</label>
          </div>
          <div class="form_napr">
            <div class="login-box-log">
            <div class="user-box">
              <input type="name" name="" required="">
              <label>User Name</label>
            </div>
            <div class="user-box">
              <input type="password" name="" required="">
              <label>Password</label>
            </div>
            <div style="display: flex;">
              <div class="con-logo">
                <div style="background: url(./img/Vector\ \(4\).svg); background-size: cover; width: 25px; height: 26px;"></div>
              </div>
              <div class="con-logo">
                <div style="background: url(./img/Vector\ \(5\).svg); background-size: cover; width: 13px; height: 26px;"></div>
              </div>
            </div>
            <button class="but-log">SEND</button>
            </div>

          </div>

      </form>
    
  </div>
    <div id="GB-hmeheadera" class="modal" data-modal="2" style="border: 0; border-radius: 6px;">
  
    <div class="model__con">
     <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path></svg>
     <p class="modal__title"></p>
    </div>


    <div style="display: flex; justify-content: space-evenly; align-items: center; flex-direction: column; font-size: 18px;">
      <div style="display: flex; flex-direction: column;">
        <p>Phone</p>
        <h4>123-456-7890</h4>
      </div>
      <div style="display: flex; flex-direction: column;">
        <p>Email</p>
        <h4>info@mystie.com</h4>
      </div>
      <div style="display: flex; flex-direction: column; ">
        <p>Social Media</p>
        <div class="" style="display: flex; flex-direction: column;">
          <ul class="social-icons">
            <li><a class="facebook" href="#" style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#" style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#" style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;"><i class="fa fa-instagram"></i></a></li>
            <li><a class="youtube" href="#" style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;"><i class="fa fa-youtube"></i></a></li>   
            <li><a class="tiktok" href="#" style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></a></li>   
            <li><a class="spotify" href="#" style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;"><i class="fa fa-spotify"></i></a></li>   
            <li><a class="youtube" href="#" style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 27 27" fill="none"> <path d="M19.1815 13.495L15.5753 14.709V18.6321L13.3396 15.4615L9.73337 16.6656L11.969 13.495L9.73337 10.3344L13.3396 11.5385L15.5753 8.36789V12.291L19.1815 13.495Z" fill="#000"/><path d="M19.1815 13.495V21.6823H7.88651V5.16722H19.1815V13.495L24.1875 11.8194V3.19063L21.2811 0H2.8125V27H21.2617L24.1875 23.9799V15.1806L19.1815 13.495Z" fill="#000"/></svg></a></li>   
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="overlay js-overlay-modal"></div>
    <div class="intro slider">
        <div class="intro__item">
            @foreach ($banner as $item)
                <div class="intro__fon">
                    <video class="intro__v-fon" src="{{ asset('/media/images/') . '/' . $item->background }}" autoplay muted
                        loop></video>
                </div>
                <div class="intro__content">
                    <?php
                    $heading = explode(' ', $item->heading);
                    $heading_1 = $heading[0];
                    $heading_2 = $heading[1];
                    ?>
                    <h1 class="intro_text_h1 _anim-items fs-vb" style=" text-shadow: 0 0 5px #fff; letter-spacing: 0px;">
                        {{ $heading_1 }} {{ $heading_2 }}</h1>
                    <div class="mar-lef" style="display: flex; align-items: center;  margin-top: 10%;">
                        <a class="js-open-modal button1" data-modal="2">BOOK NOW</a>
                        <a class="button" href="/create-beat">EVENTS</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div id="GB-hmeheadera">

        <div id="dodo" class="app-app-app">
            <div id="app-cover">
                <div id="bg-artwork"
                    style="background-image: url(&quot;https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_1.jpg&quot;);">
                </div>
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
                            <img src="{{ asset('/media/images/SkYClbKLcb0.jpg') }}" class="active" id="_1">
                            <img src="{{ asset('/media/images/kD9twhD52Ow.jpg') }}" id="_2">
                            <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_3.jpg"
                                id="_3">
                            <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_4.jpg"
                                id="_4">
                            <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_5.jpg"
                                id="_5">
                            <div id="buffer-box">Buffering ...</div>
                        </div>
                        <div id="player-controls">
                            <div class="control">
                                <div class="button11" id="play-previous">
                                    <i class="fa fa-backward"></i>
                                </div>
                            </div>
                            <div class="control">
                                <div class="button11" id="play-pause-button">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>
                            <div class="control">
                                <div class="button11" id="play-next">
                                    <i class="fa fa-forward"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="main-slider-section">
                <div class="main-slider swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        @foreach ($music as $item)
                            <a class="swiper-slide swiper-slide-active" style="width: 652.333px; margin-right: 15px;">
                                <div class="block-slider swiper-container swiper-container-horizontal">
                                    <div class="cardbbb">
                                        <div id="aaaddd" class="card-1">
                                            <div class="card-img6-1"
                                                style="background-image: url({{ asset('/media/images/') . '/' . $item->image }})">
                                            </div>
                                        </div>
                                        <div class="card-text">
                                            <p class="card-p-1 line-clamp-2">{{ $item->name }}</p>
                                        </div>
                                    </div>

                                    <div class="cardbbb">
                                        <div class="card-1">
                                            <div class="card-img7-1"
                                                style="background-image: url({{ asset('/media/images/') . '/' . $item->image }})">
                                            </div>
                                        </div>
                                        <div class="card-text">
                                            <p class="card-p-1 line-clamp-2">{{ $item->name }}</p>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev uploaded-in-prev"
                        style="background-image: url({{ asset('/media/images/Vector_6.svg') }});"></div>
                    <div class="swiper-button-next uploaded-in-next swiper-button-disabled"
                        style="background-image: url({{ asset('/media/images/Vector_7.svg') }});"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
