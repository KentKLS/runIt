@extends('templates.template')
@section('content')
<main>
    <div class="container mx-auto">
        <div class="flex flex-row justify-center py-[250px]">
            <div class="columns-1 bg-[#D2F306] rounded-xl basis-1/4 mr-8">
                <h3 class="text-xl font-bold text-black pl-8 pt-20">Nos contacts</h3>
                <h3 class="text-xl font-bold text-black pl-8 pt-10">Adresse:</h3>
                <h3 class="text-xl font-normal text-black pl-8 pt-4">6 rue Condorcet</h3>
                <h3 class="text-xl font-normal text-black pl-8 pt-4">38000 Grenoble</h3>
                <h3 class="text-xl font-bold text-black pl-8 pt-10">Email:</h3>
                <h3 class="text-xl font-normal text-black pl-8 pt-4">service-client@run-it.fr</h3>
                <h3 class="text-xl font-bold text-black pl-8 pt-10">Téléphone:</h3>
                <h3 class="text-xl font-normal text-black pl-8 pt-4 pb-20">04 76 35 16 69</h3>
            </div>
            <div class="columns-1 bg-white rounded-xl basis-1/2">
                <h3 class="text-xl font-bold text-black flex justify-center pt-20">Formulaire</h3>
                <form class="w-full max-w-lg ml-20 mt-10">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            </label>
                            <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-red-500 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            </label>
                            <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded-xl py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            </label>
                            <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="Email">
                         </div>
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-phone">
                            </label>
                            <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-phone" type="tel" placeholder="06xxxxxxxx">
                        </div>
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-objet">
                            </label>
                            <textarea class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-objet" type="textarea" placeholder="Objet"></textarea>
                        </div>
                    </div>
                </form>
                <button class="bg-[#D2F306] text-black font-bold  py-2 px-4 rounded-xl ml-20 mb-[50px]">
                    Envoyer
                </button>
            </div>
        </div>
    </div>
</main>
@endsection
