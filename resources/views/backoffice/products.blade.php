<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
<div class="bg-slate-800 h-screen">
    <div class="container mx-auto flex justify-center flex-wrap">
        @foreach ($products as $product)
            <div class="p-10 m-1 outline outline-1 text-gray-100 bg-slate-600">
                <a href="/backoffice/product/modify/{{$product->id}}">
                    Click here to modify {{ $product->name }}
                </a>
            </div>
        @endforeach
    </div>
</div>
