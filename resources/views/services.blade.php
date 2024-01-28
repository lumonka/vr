@extends('layouts.app')
@section('content')
<style>
    .fs-vb{
    font-size: 24px;
}


#cards {
    padding-bottom: calc(var(--numcards) * var(--card-top-offset)); /* Make place at bottom, as items will slide to that position*/
    margin-bottom: var(--card-margin); /* Don't include the --card-margin in padding, as that will affect the scroll-timeline*/
}

#cardd_1 {
    --index: 1;
}

#cardd_2 {
    --index: 2;
}

#cardd_3 {
    --index: 3;
}

#cardd_4 {
    --index: 4;
}

.cardd {
    position: sticky;
    top: 80px;
    padding-top: calc(var(--index) * var(--card-top-offset));
}

@supports (animation-timeline: works) {

    @scroll-timeline cards-element-scrolls-in-body {
        source: selector(body);
        scroll-offsets:
            /* Start when the start edge touches the top of the scrollport */
            selector(#cards) start 1,
                /* End when the start edge touches the start of the scrollport */
            selector(#cards) start 0
    ;
        start: selector(#cards) start 1; /* Start when the start edge touches the top of the scrollport */
        end: selector(#cards) start 0; /* End when the start edge touches the start of the scrollport */
        time-range: 4s;
    }

    .cardd {
        --index0: calc(var(--index) - 1); /* 0-based index */
        --reverse-index: calc(var(--numcards) - var(--index0)); /* reverse index */
        --reverse-index0: calc(var(--reverse-index) - 1); /* 0-based reverse index */
    }

    .card__content {
        transform-origin: 50% 0%;
        will-change: transform;

        --duration: calc(var(--reverse-index0) * 1s);
        --delay: calc(var(--index0) * 1s);

        animation: var(--duration) linear scale var(--delay) forwards;
        animation-timeline: cards-element-scrolls-in-body;
    }

    @keyframes scale {
        to {
            transform:
                scale(calc(
                    1.1
                    -
                    calc(0.1 * var(--reverse-index))
                ));
        }
    }
}

/** DEBUG **/

#debug {
    position: fixed;
    top: 1em;
    left: 1em;
}
#debug::after {
    content: " Show Debug";
    margin-left: 1.5em;
    color: white;
    white-space: nowrap;
}

#debug:checked ~ main {
    --outline-width: 1px;
}

#cards {
    list-style: none;
    outline: calc(var(--outline-width) * 10) solid blue;
    background: transparent;
    margin: 0;
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(var(--numcards), var(--card-height));
    gap: var(--card-margin);
}

.cardd {
    outline: var(--outline-width) solid hotpink;
}

.card__content {
    box-shadow: 0 0.2em 1em rgba(0, 0, 0, 0.1), 0 1em 2em rgba(0, 0, 0, 0.1);
    background: rgb(43, 43, 43);
    color: rgb(255, 255, 255);
    border-radius: 1em;
    overflow: hidden;
    display: grid;
    grid-template-areas: "text img";
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto;
    align-items: stretch;
    outline: var(--outline-width) solid lime;
}

.card__content h3 {
    font-size: 2.5rem
}

.p-card-min {
    margin: 0px;
    width: 101%;
    font-family: Chunky;
    font
}

.section-cards {
    width: 80vw;
    margin: 0 auto;
}

.card__content > div {
    grid-area: text;
    width: 80%;
    place-self: center;
    text-align: left;

    display: grid;
    gap: 1em;
    place-items: start;
}

.card__content > figure {
    margin: 0;
    grid-area: img;
    overflow: hidden;
}

.card__content > figure > img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

h1 {
    font-weight: 300;
    font-size: 3.5em;
}

h3 {
    font-weight: 300;
    font-size: 2.5em;
}

p {
    font-family: sans-serif;
    font-weight: 300;
    line-height: 1.42;
}
.btn{

    text-decoration: none;
    color: #fff;
    width: auto;
    height: 60px;
    display: flex;
    margin: 20px;
    margin-left: 0;
    align-content: center;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg,#9747FF, #493F89 );
    font-size: 23px;
    border-radius: 40px;
    transition: 0.5s;
    z-index: 3;
}
.btn:hover{
    transition: 0.5s;

    box-shadow: 0 0 20px #FF8C00;
    background: linear-gradient(45deg, #FF8C00, #FF5C00);
}


aside {
    width: 50vw;
    margin: 0 auto;
    text-align: left;
}

aside p {
    margin-bottom: 1em;
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
            style="background: url({{ asset('media/images/') .'/'. $item->background }}); background-size: cover; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center;">
            <h4 class="intro_text_h4 _anim-items fs-vb" style="text-shadow: 0 0 5px #fff;">
                {{ $item->heading }}</h4>
        </div>
    @endforeach
    <div id="GB-hmeheadera">

        <div class="fs-vb"
            style="background: #00000000; height: 100px; color: #fff; display: flex; justify-content: space-evenly; align-items: center; flex-wrap: wrap;"
            id="menu">
            @foreach ($cards as $item)
                <a href="#card_{{ $item->id }}" style="text-decoration: none; color: #fff;">
                    <div style="display: flex; align-items: center; margin: 10px;">
                        <div
                            style="background: url({{ asset('/media/images/') .'/'. $item->icon }});background-size: contain; background-repeat: no-repeat; width: 48px;height: 52px; margin: 10px;">
                        </div>
                        <h3 class="fs-m">{{ $item->headers }}</h3>
                    </div>
                </a>
            @endforeach

        </div>
        <section class="section-cards">
            <ul id="cards">
                @foreach ($cards as $item)
                <li class="cardd" id="card_{{ $item->id }}">
                    <div class="card__content">
                        <div>
                            <div style="display: flex; align-items: center; margin: 10px;">
                                <div
                                    style="background: url({{ asset('/media/images/') .'/'. $item->icon }});background-size: contain; background-repeat: no-repeat; width: 48px;height: 52px; margin: 10px;">
                                </div> 
                                <h3>{{ $item->headers }}</h3>
                            </div>
                            <p class="p-card-min"> {{ $item->descr }}</p>
                            <p class="p-card-min">
                                {{ $item->prices }}
                            </p>
                            <p class="p-card-min"><a href="/create-beat" class="btn btn--accent">BOOK NOW</a></p>
                        </div>
                        <figure style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{ asset('/media/images/').'/' . $item->image }}"
                                alt="Image description">
                        </figure>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>

        <div style="height: 52px;"></div>
    </div>
@endsection
