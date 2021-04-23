@props(['portada'])
<style>
    .sld{
        overflow: hidden;
    }
    .slide{
        width:100vw;
        margin: auto;
        height: 600px;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slide ul{
        display: flex;
        width: 400vw;
        animation: cambio 20s infinite alternate;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .slide li{
        width:100vw;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .slide img{
        width:100vw;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    @keyframes cambio{
        0% {margin-left: 0;}
        20% {margin-left: 0;}
        25% {margin-left: -100%;}
        45% {margin-left: -100%;}
        50% {margin-left: -200%;}
        70% {margin-left: -200%;}
        75% {margin-left: -300%;}
        100% {margin-left: -300%;}
    }
</style>

<li>
    <div class="slide bg-cover" style="background-image: @if ($portada->image) url({{Storage::url($portada->image->url)}} @else url({{asset('img/home/pexels-sam-lion-6001670.jpg')}} @endif">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <div class="py-2 px-4 rounded-xl shadow" style="background-color:{{$portada->color}}">
                    <h1 class="text-white font-bold text-4xl">{{$portada->title}}</h1>
                    <div class="text-white text-lg mt-2 mb-4">{!! $portada->description !!}</div>
                </div>
            </div>
            
        </div>
    </div>
</li>