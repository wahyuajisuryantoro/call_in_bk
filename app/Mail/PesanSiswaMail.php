<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Pesan\PesanSiswa;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use App\Models\Pengaturan\PengaturanSitus;
use Illuminate\Contracts\Queue\ShouldQueue;

class PesanSiswaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pesan;
    public $pengaturan;

    /**
     * Create a new message instance.
     */
    public function __construct(PesanSiswa $pesan, PengaturanSitus $pengaturan)
    {
        $this->pesan = $pesan;
        $this->pengaturan = $pengaturan;
    }

    /**
     * Get the message envelope.
     */
   public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pesan Baru',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.pesan-siswa',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
