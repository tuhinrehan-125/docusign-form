<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DocumentSignedMail extends Mailable
{
    use Queueable, SerializesModels;


    public $pdfPath;

    public function __construct($pdfPath)
    {
        $this->pdfPath = $pdfPath;
    }

    // public function build()
    // {
    //     return $this->view('emails.document-signed')
    //         ->with('formData', $this->formData)
    //         ->attach('/path/to/signed/document.pdf', [
    //             'as' => 'signed_document.pdf',
    //             'mime' => 'application/pdf',
    //         ]);
    // }

    public function build()
    {
        return $this->subject('Form Submission')
            ->attach($this->pdfPath, ['as' => 'form_submission.pdf'])
            ->view('emails.document-signed');
    }

}
