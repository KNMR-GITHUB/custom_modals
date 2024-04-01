<div class="flex flex-col w-[330px] shadow-lg border-t-2 border-teal-500 mt-6 p-4 rounded-b-md">

    @if (session('success'))
        <span class="text-green-400">{{session('success')}}</span>
    @endif

    <form wire:submit='createNewUser'>

        <h1 class="text-lg font-semibold my-4">Create an Account</h1>

        <label class="font-semibold text-gray-900" for="name">Name</label>
        <input wire:model='name' class="w-full mb-3 block bg-gray-100 text-sm text-gray-900  rounded-md  border border-gray-300 px-4 py-1" type="text" placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs block">{{$message}}</span>
        @enderror

        <label class="font-semibold text-gray-900" for="email">Email</label>
        <input wire:model='email' class="w-full mb-3 block bg-gray-100 text-sm text-gray-900  rounded-md  border border-gray-300 px-4 py-1" type="email" placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs block">{{$message}}</span>
        @enderror

        <label class="font-semibold text-gray-900" for="password">Password</label>
        <input wire:model='password' class="w-full mb-3 block  bg-gray-100 text-sm text-gray-900  rounded-md  border border-gray-300 px-4 py-1" type="password" placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs block">{{$message}}</span>
        @enderror

        <label class="font-semibold text-gray-900" for="image">Profile Picture</label>
        <input wire:model='image' type='file' accept="image/*" class="w-full mb-3 block  bg-gray-100 text-sm text-gray-900  rounded-md  border border-gray-300 px-4 py-1" type="password" placeholder="password">
        @error('image')
            <span class="text-red-500 text-xs block">{{$message}}</span>
        @enderror

        <!-- Uploading text when uploading image -->
        <div wire:loading wire:target='image'>
            <span class="text-green-500 block">Uploading ...</span>
        </div>

        <!-- image preview -->
        @if ($image)
            <img class="rounded w-20 h-20 mt-4 block" src="{{$image->temporaryUrl()}}" alt="">
        @endif

        <div wire:loading wire:target='createNewUser'>
            <span class="text-green-500 block">Sending ...</span>
        </div>

        <button type="button" @click="$dispatch('createdNewUser')">Reload Page</button>
        <button wire:loading.class='bg-gray-500' wire:loading.attr='disabled'  class="rounded-md block mt-4 bg-teal-400 px-4 border py-2 hover:bg-green-400">Create</button>
    </form>

</div>
