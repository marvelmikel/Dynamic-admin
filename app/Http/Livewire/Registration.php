<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public function render()
    {
        return view('livewire.registration', [
            'step' => 1,
        ])->layout('layouts.blank');
    }
}
