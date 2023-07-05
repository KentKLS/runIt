@extends('templates.template')
@section('title')
Homepage
@endsection
@section('content')

<div class=" ">
<img src="{{URL::asset('Image/HeroHomepage.png')}}" alt="Une image d'un homme en train de courir, dark background, shirtless" class="absolute left-0 right-0">



<div class="  max-w-[1400px] mx-auto absolute left-1/4 ">
    <img src="{{URL::asset('Image/LogoRunIt.svg')}}" alt="logo" class="absolute md:mt-40 opacity-30 w-80 ">
    <div class="  text-white z-10 mt-4 sm:mt-20 md:mt-60   ">
        <h1 class=" text-5xl ">SO CLOSE TO THE</h1>
        <h1 class=" text-5xl text-[#D2F306] ">FINISH LINE</h1>
        <p class="p-3 text-2xl">Accésoires de running pour la performance</p>
    </div>
</div>

<div class="  container">
</div>

@endsection
