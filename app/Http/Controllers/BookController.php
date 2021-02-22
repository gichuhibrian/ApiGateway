<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponser;
    public $bookService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        return $this->successMessage($this->bookService->obtainBooks());
    }

    public function store(Request $request)
    {

    }

    public function show($author)
    {

    }

    public function update(Request $request, $author)
    {

    }

    public function destroy($author)
    {

    }
}
