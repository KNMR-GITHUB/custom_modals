<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class UsersPage extends Component
{
    public $user;

    public function mount(User $user){
        $this->user = $user;
    }


    #[Layout('layout.app')]
    #[Title('Users')]
    public function render()
    {
        return view('livewire.users-page');
    }
}
