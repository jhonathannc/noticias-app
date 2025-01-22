<?php

namespace App\Services;

use App\Contracts\Repositories\ContactRepositoryInterface;
use App\Mail\SendContactMail;
use App\Models\Contact;
use App\Repositories\ContactRepository;
use Illuminate\Support\Facades\Mail;

class ContactService
{
    private ContactRepositoryInterface $repository;

    public function __construct()
    {
        $this->repository = app(ContactRepository::class);
    }

    public function store(array $data): Contact
    {
        // Handle
        $data;

        $contact = $this->repository->store($data);

        // send
        Mail::to($contact->email)->queue(new SendContactMail());

        return $contact;
    }
}
