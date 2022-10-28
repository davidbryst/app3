<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangePassword extends Component
{
    public $active = false;

    public function toggleActive()
    {
        $this->active = !$this->active;
    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
