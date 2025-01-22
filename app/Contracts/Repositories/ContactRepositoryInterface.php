<?php

namespace App\Contracts\Repositories;

use App\Models\Contact;

interface ContactRepositoryInterface
{
  public function store(array $data): Contact;
}
