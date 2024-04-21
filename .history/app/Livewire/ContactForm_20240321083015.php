<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

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

    public function submitForm()
    {
        $this->validate();

        Mail::to('support@dixieacademy.com')->send(new ContactFormMail($this->name, $this->email, $this->subject, $this->message));

        session()->flash('success', 'Your message has been sent successfully.');

        $this->reset();
    }
}
