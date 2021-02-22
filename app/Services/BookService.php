<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;

class BookService
{
    use ConsumeExternalServices;
    /**
     * baseUri to consume book services
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    public function obtainBooks()
    {
        $this->performRequest('GET', '/books');
    }
}