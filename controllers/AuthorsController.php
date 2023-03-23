<?php

  include_once('./Models/Authors.php');

  class AuthorsController extends Controller {
    public function index() {
        return view('authors/index', 
          ['authors' => Authors::GetAllAuthors(),
          'title' => 'Información de autores']
        );
    }

    public function show($id) {
      $author = Authors::GetAuthorById($id);
      return view('authors/show',
        ['author'=>$author,
         'title'=>'Detalle del autor']);
    }

  }
?>