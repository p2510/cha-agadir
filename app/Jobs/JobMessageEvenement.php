<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\SendMessageEvenement;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class JobMessageEvenement implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $email ;
    public $title ;
    public $name ;
    public $location ;
    public $start_at ;
    public $end_at;
    public $id;
    public function __construct(string $email ,string $title,string $name,string $location , string $start_at,string $end_at,int $id)
    {
        $this->email=$email;
        $this->title=$title;
        $this->name=$name;
        $this->location=$location;
        $this->start_at=$start_at;
        $this->end_at=$end_at;
        $this->id=$id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      Mail::to($this->email)->send(new SendMessageEvenement($this->title,$this->name,$this->location,$this->start_at,$this->end_at,$this->id));
    }
}