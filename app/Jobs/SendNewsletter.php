<?php

namespace App\Jobs;

use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use App\Mail\SendMessageNewsletter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendNewsletter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    
     public $subject;
     public $message;
     public function __construct(string $subject,string $message)
     {
         $this->subject=$subject;
         $this->message=$message;
     } 

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $getSusbriber=Newsletter::all();
        foreach($getSusbriber as $item){
            Mail::to($item->email)->send(new SendMessageNewsletter($this->subject,$this->message));
        }
    }
}