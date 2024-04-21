<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ];
    public function render()
    {
        return view('livewire.contact-form');
    }
}
