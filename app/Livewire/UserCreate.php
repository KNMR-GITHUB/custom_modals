<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UserCreate extends Component
{
    use WithFileUploads;

    #[Rule('required|min:3|max:99')]
    public $name;
    #[Rule('required|email|unique:users')]
    public $email;
    #[Rule('required|min:5')]
    public $password;
    #[Rule('nullable|sometimes|image|max:5120')]
    public $image;


    public function render()
    {
        return view('livewire.user-create',);
    }

    public function createNewUser(){

        $validated = $this->validate();

        if($this->image){
            $fileName = $this->image->getClientOriginalName();
            $validated['image'] = $this->image->storeAs('uploads',$fileName,'public');
        }

        $user = User::create($validated);

        $this->reset('name','email','password','image');

        session()->flash('success','User Created Successfully');

        $this->dispatch('createdNewUser',$user);

    }
}
