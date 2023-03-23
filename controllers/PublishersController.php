<?php

  include_once('./Models/Publishers.php');

  class PublishersController extends Controller {
    public function index() {
        return view('publishers/index', 
          ['publishers' => Publishers::GetAllPublishers(),
          'title' => 'Información de editoriales']
        );
    }
    public function show($id) {
      $Publisher = Publishers::GetPublisherById($id);
      return view('publishers/show',
        ['publisher'=>$Publisher,
         'title'=>'Detalle de la editorial']);
    }
  }
?>