@extends('templates.templateHomepage')
@section('title')
    Homepage
@endsection
@section('content')
    <div class="w-full bg-gradient-to-l from-[#292929] from-50% to-50% to-[#D2F306]">
        <div class="container grid grid-cols-5 mx-auto">
            <div class=" col-span-3 bg-[#D2F306] p-8">
                <h1 class=" text-2xl font-bold py-5 ">RUN WITH US</h1>
                <p>Run-It est une entrepise spécialisé dans la vente de chaussure,
                    de vêtement et de matériel dans le domaine du trail et du running.
                    En effet suite à l’essor, ces dernières années, de ces deux disciplines nous avons remarqué une forte
                    demande d’équipement.
                    C’est pourquoi nous vous proposons un large pannel de matériel de bonne et qualité et durable.</p>
            </div>
            <div class=" flex flex-col col-span-2 p-[32px] bg-[#292929]">
                <h1 class=" text-[#D2F306] text-2xl font-bold ml-[78px] pt-5 pb-8">REJOINS-NOUS</h1>

                <button class="rounded font-bold w-40 ml-[72px] p-1 bg-[#D2F306]"> C'est Ici</button>

            </div>
        </div>
    </div>
    <div class="w-full grid grid-cols-2 ">
        <div class="relative object-fill">
            <img src="{{ URL::asset('Image/ImageTrail.png') }}" alt="" >
            <a href="#" class="absolute z-50 text-2xl font-bold  text-[#D2F306] bottom-10 left-10">TRAIL</h2>

        </div>
        <div class="relative object-fill">

            <a href="#" class="absolute z-50 text-2xl font-bold  text-[#D2F306] bottom-10 right-10">RUNNING</a>
            <img src="{{ URL::asset('Image/ImageRunning.png') }}" alt="" >

        </div>
    </div>

    </div>
@endsection
