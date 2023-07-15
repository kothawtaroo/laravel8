<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUsCompoenet extends Component
{
    public function render()
    {
        return view('livewire.contact-us-compoenet')->layout("layouts.base");
    }
}
