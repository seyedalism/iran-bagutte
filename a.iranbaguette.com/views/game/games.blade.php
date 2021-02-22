@extends('master')

@section('title')
    ایران باگت
@endsection

@section('content')
    <div id="gameBox"
         style="visibility: hidden;height: 100%;width: 100%;position: fixed; background-color: hsla(0, 0%, 0%, 0.90);z-index: 10000;">
        <span style="cursor: pointer;" class="p-3 pt-5 text-white display-4" onclick="closeGame()">&times;</span>
        <div id="iframe" class="m-auto w-100 mt-2 text-white"></div>
    </div>

    <div class="w-100 p-0 m-0">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php($active = 'active')
                    @foreach($ads as $index => $ad)
                        @if($ad->state == 1)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <a href="{{ url('advertise/'.$ad->id) }}">
                                    <img src="{{ asset('upload/'.$ad->img) }}" class="d-block w-100">
                                </a>
                            </div>
                            @php($active = '')
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 w-100 py-3 bg-dark" style="
    border-top: 15px dashed whitesmoke;
    border-bottom: 15px dashed whitesmoke;
    outline: #343a40 10px solid;
    overflow: hidden;
    ">

        <div class="bg-light w-100 pt-3"
             style="box-shadow:inset 0px 0px 20px black;background: linear-gradient(to right, #f2994a, #f2c94c);">

            <div class="row" style="direction: ltr !important">
                <div class="slider" id="slider">
                    <div class="slide mx-3" id="slide" style="color:#fff;">

                        <a style="color: white" onclick="openTheGame()">
                            <div class="ads-parent position-relative m-2"
                                 style="border-radius: 30px;width: 420px !important;">
                                <img src="{{ asset('img/play.png') }}" class="bg-light img-fluid"
                                     style="position: absolute;top: 44%;left: 44%;z-index: 100;border-radius: 100%;">
                                <div style="position: relative;">
                                    <div style="
                                        position: absolute;
                                        top: 0;left:0;
                                        width:100%;height: 100%;
                                        background-color: black;
                                        opacity: 0.7;">
                                    </div>
                                    <img class="item img-fluid w-100" src="{{ asset('img/mario.png') }}">
                                </div>
                            </div>
                        </a>

                        <a style="color: white" onclick="openTheGame()">
                            <div class="ads-parent position-relative m-2"
                                 style="border-radius: 30px;width: 420px !important;">
                                <img src="{{ asset('img/play.png') }}" class="bg-light img-fluid"
                                     style="position: absolute;top: 44%;left: 44%;z-index: 100;border-radius: 100%;">
                                <div style="position: relative;">
                                    <div style="
                                        position: absolute;
                                        top: 0;left:0;
                                        width:100%;height: 100%;
                                        background-color: black;
                                        opacity: 0.7;">
                                    </div>
                                    <img class="item img-fluid w-100" src="{{ asset('img/mario.png') }}">
                                </div>
                            </div>
                        </a>

                        <a style="color: white" onclick="openTheGame()">
                            <div class="ads-parent position-relative m-2"
                                 style="border-radius: 30px;width: 420px !important;">
                                <img src="{{ asset('img/play.png') }}" class="bg-light img-fluid"
                                     style="position: absolute;top: 44%;left: 44%;z-index: 100;border-radius: 100%;">
                                <div style="position: relative;">
                                    <div style="
                                        position: absolute;
                                        top: 0;left:0;
                                        width:100%;height: 100%;
                                        background-color: black;
                                        opacity: 0.7;">
                                    </div>
                                    <img class="item img-fluid w-100" src="{{ asset('img/mario.png') }}">
                                </div>
                            </div>
                        </a>

                        <div class="ads-parent position-relative m-2 d-flex flex-column justify-content-center align-items-center"
                             style="border-radius: 30px;width: 500px; !important;background: #0c5460">
                            <span class="pb-3">جهت ادامه بازی کد خرید ساندویچ خودرا وارد نمایید</span>
                            <form action="">
                                <div class="form-row">
                                    <div class="col-8">
                                        <input name="buy-code" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-default">ارسال</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button class="ctrl-btn pro-prev text-white" style="margin-left: 20px;">< قبلی</button>
                    <button class="ctrl-btn pro-next text-white" style="margin-right: 20px;">بعدی ></button>
                </div>
            </div>

        </div>

    </div>

    <div class="justify-content-center d-flex align-items-center w-100 bg-dark"
         style="height: 200px;background: url({{ asset('img/mario.png') }});background-repeat: no-repeat;background-blend-mode: multiply;background-size: cover;">
        <a href="#" style="color: #969896;font-size: 2rem;">خرید و دانلود نسخه کامل بازی</a>
    </div>

    <div class="w-100 p-0 m-0">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    @php($active = 'active')
                    @foreach($ads as $index => $ad)
                        @if($ad->state == 0)
                            <div class="carousel-item {{ $active }}">
                                <a href="{{ url('advertise/'.$ad->id) }}">
                                    <img src="{{ asset('upload/'.$ad->img) }}" class="d-block w-100">
                                </a>
                            </div>
                            @php($active = '')
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <script>
        let vars=[];
        let objs=[];
        let bar;
        let counter = 0;
        let max = -1;
        let ifram = `<iframe width="100%" height="800px" src="{{ url('public/games/HTML5-P1/index.html') }}"></iframe>`;
        @foreach($dynamic as $d)
            let x = {time: '{{ $d->time }}', img: '{{ $d->img }}',url: '{{ $d->url }}' };
            vars.push(x);
        @endforeach

        for(v of vars)
        {
            max++;
            let img = `
            <div class="container">
                <a href="{{ url() }}${v.url}"><img style="max-height:500px;" id="Ad" src="{{ asset('upload/') }}${v.img}" class="d-block mx-auto img-fluid rounded"></a>
                <div id="progressBar" style="height:5px;background-color:white;"></div>
            </div>
            `;
            let time = v.time*1000;
            objs.push({img,time});
        }
        let closeAdver = `
            <span class="col-10 mt-2 col-md-3 mx-auto btn btn-block btn-outline-warning" onclick="closeAd()">بستن تبلیغات</span>
        `;

        function openTheGame() {
            gameBox.style.visibility = '';
            iframe.innerHTML = objs[counter].img;
            let width = 100;
            let ratio = width / (objs[counter].time / 10);
            bar = setInterval(function () {
                width -= ratio;
                progressBar.style.width = width + '%';
                if (width <= 0) {
                    clearInterval(bar);
                    progressBar.remove();
                    iframe.innerHTML += closeAdver;
                }
            }, 10);
        }

        function closeGame() {
            gameBox.style.visibility = 'hidden';
            iframe.innerHTML = '';
            clearInterval(bar);
        }

        function closeAd() {
            counter++;
            if(counter > max)
                counter = 0;
            iframe.innerHTML = ifram;
        }
    </script>
@endsection