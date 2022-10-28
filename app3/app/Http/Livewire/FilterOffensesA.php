<?php

namespace App\Http\Livewire;

use App\Models\Offense;
use Livewire\Component;

class FilterOffensesA extends Component
{
    public $offenses;

    public $offenseType;
    public $date;
    public $licensePlate;

    public function render()
    {
        if ($this->offenseType) {
            if ($this->date) {
                if ($this->licensePlate) {
                    $this->offenses = Offense::where('offense_type', $this->offenseType)
                                                ->orWhere('created_at', 'like', '%'.$this->date.'%')
                                                ->orWhere('license_plate', 'like', '%'.$this->licensePlate.'%')->get();
                } else {
                    $this->offenses = Offense::where('offense_type', $this->offenseType)
                                                ->orWhere('created_at', 'like', '%'.$this->date.'%')->get();
                }
            } else {
                if ($this->licensePlate) {
                    $this->offenses = Offense::where('offense_type', $this->offenseType)
                              ->orWhere('license_plate', 'like', '%'.$this->licensePlate.'%')->get();
                } else {
                    $this->offenses = Offense::where('offense_type', $this->offenseType)->get();
                }
            }
        } else {
            if ($this->date) {
                if ($this->licensePlate) {
                    $this->offenses = Offense::where('created_at', 'like', '%'.$this->date.'%')
                              ->orWhere('license_plate', 'like', '%'.$this->licensePlate.'%')->get();
                } else {
                    $this->offenses = Offense::where('created_at', 'like', '%'.$this->date.'%')->get();
                }
            } else {
                if ($this->licensePlate) {
                    $this->offenses = Offense::where('license_plate', 'like', '%'.$this->licensePlate.'%')->get();
                } else {
                    $this->offenses = Offense::all();
                }
            }
        }
        return view('livewire.filter-offenses-a', ['offense' => $this->offenses]);
    }
}
