<?php

namespace App\Mail;

use App\Models\Contact as ModelsContact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ModelsContact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Novo contato!');
        $this->to(env('CONTACT_EMAIL'));
        $this->markdown('mail.contact')->with('contact',$this->contact);
        $this->attach(Storage::disk('public')->path('/').'/'.$this->contact->file);
    }
}
