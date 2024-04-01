<div class="flex flex-col w-[500px]">
    <h1 class="font-semibold text-lg py-4">Users List</h1>

    <input wire:model.live.blur='search' type="text" placeholder="Search..."
    class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 w-full p-2 text-sm rounded">


    <table class="shadow-md my-4">

        @foreach ($this->testList as $user)
            <tr wire:key='{{$user->id}}' class="border-b-2 border-gray-100">
                <td class="text-left pl-3">
                    <p class="text-lg font-semibold">{{$user->name}}</p>
                    <p class="text-sm">{{$user->email}}</p>
                </td>
                <td class="text-center">
                    <div wire:click="viewUser({{$user}})" class="mr-2 py-1 bg-teal-400 text-white rounded-md hover:bg-teal-700 hover:text-teal-200 hover:cursor-pointer">View</div>
                </td>


            </tr>
        @endforeach
    </table>

    @if ($selectedUser)
        <x-modal name="user-details" title="View User">
            <x-slot:body>
                Name: {{$selectedUser->name}}
                <br>
                Email: {{$selectedUser->email}}
                <br>
                Created at: {{$selectedUser->created_at}}
            </x-slot:body>
        </x-modal>
    @endif

    <div>
        {{$this->testList->links()}}
    </div>
</div>
