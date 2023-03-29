<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\SendMessageInterested;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class JobMessageInterested implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $email;
    public $course_name;
    public $degree;
    public $name;
    public $download_id;
   public function __construct(string $email , string $course_name,string $degree,string $name,int $download_id)
   {
       $this->email=$email;
       $this->course_name=$course_name;
       $this->degree=$degree;
       $this->name=$name;
       $this->download_id=$download_id;
   }
   
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new SendMessageInterested($this->course_name,$this->degree,$this->name,$this->download_id));
    }
}