<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phoneNumber;
    public $summary;
    public $company;
    public $budget;
    public $reference;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phoneNumber, $summary, $company, $budget, $reference)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->summary = $summary;
        $this->company = $company;
        $this->budget = $budget;
        $this->reference = $reference;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')
        ->subject('You have a new request for a consultation');
    }
}
