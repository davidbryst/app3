<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModifyUser extends Component
{

    public $active = false;

    public $user;

    public function toggleActive()
    {
        $this->active = !$this->active;
    }

    public function render()
    {
        return view('livewire.modify-user');
    }
}
