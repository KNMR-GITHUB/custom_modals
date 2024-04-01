@props(['name','title'])

<div
    x-data = "{display : false, name:'{{$name}}'}"
    x-show = "display"
    x-on:open-modal.window = "display = ($event.detail.name === name)"
    x-on:close-modal.window = "display = false"
    x-on:keydown.escape.window = "display = false"
    x-transition
    style="display: none"

    class="fixed z-50 inset-0">

    {{-- gray background --}}
    <div x-on:click="display = false" class="fixed inset-0 bg-gray-500 opacity-50">

    </div>

    {{-- content of modal --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl max-h-[600px]">
        <div class="flex justify-between">
            <div class="px-3"></div>
            <div>{{$title}}</div>
            <button x-on:click="$dispatch('close-modal')"
                class="bg-red-400 px-2 text-white hover:text-black hover:bg-red-800">
                    X
            </button>
        </div>
        {{$body}}
    </div>
</div>
