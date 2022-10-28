<?php

namespace App\Http\Livewire;

use App\Models\Offense;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SingleOffenses extends Component
{
    public $offense;

    public $justify;

    // protected $listeners = ['change' => 'update'];

    public function update()
    {
        // Offense::find($this->offense->id)->update(['justify' => !$this->justify]);
        DB::table('offenses')
        ->where('id', $this->offense->id)
        ->update(['justify' => !$this->justify]);
        $this->justify = !$this->justify;
    }

    public function mount($offense)
    {
        $this->offense = $offense;
        $this->justify = $offense->justify;
    }

    public function render()
    {
        return view('livewire.single-offenses');
    }
}
