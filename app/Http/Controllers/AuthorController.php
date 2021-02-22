<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    public $authorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        try {
            return $this->successMessage($this->authorService->obtainAuthors());
        } catch (\Throwable $th) {
            return $this->errorMessage($th->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function store(Request $request)
    {
        try {
            return $this->successMessage($this->authorService->createAuthor($request->all(), Response::HTTP_CREATED));
        } catch (\Throwable $th) {
            return $this->errorMessage($th->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
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
