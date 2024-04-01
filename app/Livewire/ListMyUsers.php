<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class ListMyUsers extends Component
{
    use WithPagination;

    public $search;

    public User $selectedUser;

    public function viewUser(User $user){

        $this->selectedUser = $user;

        $this->dispatch('open-modal', name: 'user-details');
    }

    #[Computed()]
    public function testList(){
        return User::latest()
        ->where('name','like',"%{$this->search}%")
        ->paginate(5);
    }

    #[Layout('layout.nothing')]
    #[Title('Users List')]
    public function render()
    {
        return view('livewire.list-my-users',[]);
    }
}
