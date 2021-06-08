<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $email;
    private $title;
    private $message;
    
    
    public function __construct($email, $title, $message)
    {
        $this->email = $email;
        $this->title = $title;
        $this->message = $message;
    }

    
    public function build()
    { 
       return $this->subject($this->title)            
            ->view('email.emails')
            ->with([
                'text'=>$this->message,
                'datetime'=>now()->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i:s')
            ]);
        
    }
}
