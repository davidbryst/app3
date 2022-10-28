<?php

namespace App\Http\Livewire;

use App\Models\Offense;
use Livewire\Component;

class FilterOffensesU extends Component
{
    public $licenses;
    public $offenses;

    public $offenseType;
    public $date;
    public $licensePlate;

    public function render()
    {
        $licensesTable = array();
        foreach ($this->licenses as $key => $value) {
            $licensesTable[] = $value->license;
        }
        if ($this->offenseType) {
            if ($this->date) {
                if ($this->licensePlate) {
                    $this->offenses = Offense::whereIn('license_plate', $licensesTable)->where(function ($query) {
                        $query->where('offense_type', $this->offenseType)
                              ->orWhere('created_at', 'like', '%'.$this->date.'%')
                              ->orWhere('license_plate', 'like', '%'.$this->licensePlate.'%');
                    })->get();
                } else {
                    $this->offenses = Offense::whereIn('license_plate', $licensesTable)->where(function ($query) {
                        $query->where('offense_type', $this->offenseType)
                              ->orWhere('created_at', 'like', '%'.$this->date.'%');
                    })->get();
                }
            } else {
                if ($this->licensePlate) {
                    $this->offenses = Offense::whereIn('license_plate', $licensesTable)->where(function ($query) {
                        $query->where('offense_type', $this->offenseType)
                              ->orWhere('license_plate', 'like', '%'.$this->licensePlate.'%');
                    })->get();
                } else {
                    $this->offenses = Offense::whereIn('license_plate', $licensesTable)->where(function ($query) {
                        $query->where('offense_type', $this->offenseType);
                    })->get();
                }
            }
        } else {
            if ($this->date) {
                if ($this->licensePlate) {
                    $this->offenses = Offense::whereIn('license_plate', $licensesTable)->where(function ($query) {
                        $query->where('created_at', 'like', '%'.$this->date.'%')
                              ->orWhere('license_plate', 'like', '%'.$this->licensePlate.'%');
                    })->get();
                } else {
                    $this->offenses = Offense::whereIn('license_plate', $licensesTable)->where(function ($query) {
                        $query->where('created_at', 'like', '%'.$this->date.'%');
                    })->get();
                }
            } else {
                if ($this->licensePlate) {
                    $this->offenses = Offense::whereIn('license_plate', $licensesTable)->where(function ($query) {
                        $query->where('license_plate', 'like', '%'.$this->licensePlate.'%');
                    })->get();
                } else {
                    $this->offenses = Offense::whereIn('license_plate', $licensesTable)->get();
                }
            }
        }
        return view('livewire.filter-offenses-u');
    }
}
