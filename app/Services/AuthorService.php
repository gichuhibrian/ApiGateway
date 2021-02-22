<?php
 
namespace App\Services;

use App\Traits\ConsumeExternalServices;

class AuthorService
{
    use ConsumeExternalServices;
    /**
     * baseUri to consume authors service
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    public function obtainAuthors()
    {
        $this->performRequest('GET', '/authors');
    }

    public function createAuthor($data)
    {
        $this->performRequest('POST', '/authors', $data);
    }
}