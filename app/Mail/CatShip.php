<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Cat;

class CatShip extends Mailable
{
    use Queueable, SerializesModels;

    public $cat;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cat $cat)
    {
        $this -> cat = $cat;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.catShip');
    }
}
