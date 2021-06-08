<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\User;

class NewAccess extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    
    public function build()
    {
        return $this->view('email.newaccess')->with([
            'name'=>$this->user->name,
            'datetime'=>now()->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i:s')
        ]);
    }
}
