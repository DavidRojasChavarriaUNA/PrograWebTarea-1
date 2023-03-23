<?php

  include_once('./Models/Books.php');

  class BooksController extends Controller {
    public function index() {
        return view('books/index', 
          ['books' => Books::GetAllBooks(),
          'title' => 'Información de libros']
      );
    }

    public function show($id) {
      $book = Books::GetBookById($id);
      return view('books/show',
        ['book'=>$book,
         'title'=>'Detalle de libro']);
    }

  }
?>