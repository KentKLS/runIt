<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
<div class="bg-slate-900">
    <div class="container mx-auto flex text-gray-100 justify-center gap-2">
        <form action="{{ route('product.index') }}" method="GET">
            @csrf
            <input name="tableName" id="tableName" type="hidden" value="products">
            <button class="bg-slate-900 m-2 px-7 py-3 rounded">Produits</button>
        </form>
        <form action="{{ route('user.index') }}" method="GET">
            @csrf
            <input name="tableName" id="tableName" type="hidden" value="users">
            <button class="bg-slate-900 m-2 px-7 py-3 rounded">Users</button>
        </form>
        <form action="{{ route('category.index') }}" method="GET">
            @csrf
            <input name="tableName" id="tableName" type="hidden" value="categories">
            <button class="bg-slate-900 m-2 px-7 py-3 rounded">Categories</button>
        </form>
        <form action="{{ route('address.index') }}" method="GET">
            @csrf
            <input name="tableName" id="tableName" type="hidden" value="addresses">
            <button class="bg-slate-900 m-2 px-7 py-3 rounded">Addresses</button>
        </form>
        <form action="{{ route('order.index') }}" method="GET">
            @csrf
            <input name="tableName" id="tableName" type="hidden" value="orders">
            <button class="bg-slate-900 m-2 px-7 py-3 rounded">Orders</button>
        </form>
    </div>
</div>
@if(session('success'))
    <div class="bg-slate-800 flex justify-center">
        <div class="w-1/3 text-center text-gray-100 font-bold rounded bg-green-700 p-3 m-10">
            {{session('success')}}
        </div>
    </div>
@endif
@if(session('delete'))
    <div class="bg-slate-800 flex justify-center">
        <div class="w-1/3 text-center text-gray-100 font-bold rounded bg-red-600 p-3 m-10">
            {{session('delete')}}
        </div>
    </div>
@endif
@yield('content')
