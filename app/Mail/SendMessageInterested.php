<?php

namespace App\Mail;

use App\Models\Download;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessageInterested extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     
     public $course_name;
     public $degree;
     public $name;
     public $download_id;
    public function __construct(string $course_name,string $degree,string $name,int $download_id)
    {
        $this->course_name=$course_name;
        $this->degree=$degree;
        $this->name=$name;
        $this->download_id=$download_id;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('contact@cha-agadir.ma', 'Cha Agadir'),
            subject: 'Inscription formation',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.messageInterested',
            with:[
                'name'=>$this->name,
                'course_name'=>$this->course_name,
                'degree'=>$this->degree,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments():array
    {
        
        $array_file= array();
        $getFile=Download::where('course_id',$this->download_id)->get();
        foreach ($getFile as $key => $item) {
            $array_file[]=Attachment::fromPath(public_path('storage/'.$item->file));
        }
        return $array_file;
    }
}