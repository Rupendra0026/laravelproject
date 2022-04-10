<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('post') }}
        </h2>
    </x-slot>
    <div class="py-4">

<div class="max-w-7x1 mx-auto sm:px-6 lg:px-8"> <div class="bg-grey-400 overflow-hidden shadow-sm sm:rounded-lg">

<h1 class="p-5 font-bold Itext-white">Create Post</h1>
<hr class="border-gray-600">
<div class="p-6 bg-gray-700">
<form class="w-full max-w-sm" method="POST">
    @csrf
<div class="md: flex md:items-center mb-4"> 
<div class="md:w-1/3">
<label class="block Otext-gray-500 font-bold
md:text-right mb-1 md: mb-0 pr-4" for="title">Title</label>
</div>

<div class="md:w-2/3 md-3">

<input class="border-2 border-gray-200

rounded w-full py-3 px-4" id="title"

type="text" name="title">

</div>

</div>

<div class="md: flex md:items-center mb-2">

<div class="md:w-1/3">
<label class="block text-gray-500 font-bolc md:text-right mb-4 md:mb-0 pr-4" for="body">Body</label>

</div>

<div class="md:w-2/4">

<textarea class="resize border rounded-md" name="body" style="width: 255px;"></textarea>

</div>

</div>

<div class="md: flex md:items-center">

<div class="md:w-1/3"></div>

<div class="md:w-2/3">
<input type="submit" class="shadow bg-dark-see hover: bg-dark-400 focus: shadow-outline focus:outline-none text-dark font-bold py-2 px-4 rounded Danger"
value="Post">
</div> 
</div>
</form>
</div>
</div>
</div>
</div>
</x-app-layout>
