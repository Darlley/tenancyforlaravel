<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Github extends Component
{
    public function render()
    {
        return view('livewire.github', [
            "title" => "Darlley 2"
        ]);
    }
}
