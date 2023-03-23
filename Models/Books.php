<?php

class Books{
    static $books = [
        ['id' => 1, 'title' => 'Operating System Concepts', 'edition' => '9th', 'copyright' =>2012, 'language' =>'ENGLISH', 'pages' =>976, 'author_id' =>1, 'author' =>'Abraham Silberschatz', 'publisher_id' =>1, 'publisher' => 'John Wiley & Sons'],
        ['id' => 2, 'title' => 'Database System Concepts', 'edition' => '6th', 'copyright' =>2010, 'language' =>'ENGLISH', 'pages' =>1376, 'author_id' =>1, 'author' =>'Abraham Silberschatz', 'publisher_id' =>1, 'publisher' => 'John Wiley & Sons'],
        ['id' => 3, 'title' => 'Computer Networks', 'edition' => '5th', 'copyright' =>2010, 'language' =>'ENGLISH', 'pages' =>960, 'author_id' =>2, 'author' =>'Andrew S. Tanenbaum', 'publisher_id' =>2, 'publisher' => 'Pearson Education'],
        ['id' => 4, 'title' => 'Modern Operating Systems', 'edition' => '4th', 'copyright' =>2014, 'language' =>'ENGLISH', 'pages' =>1136, 'author_id' =>2, 'author' =>'Andrew S. Tanenbaum', 'publisher_id' =>2, 'publisher' => 'Pearson Education']
    ];

    public static function GetAllBooks(){
        return self::$books;
    }

    public static function GetBookById($id){
        foreach(self::$books as $key => $book){
            if($book['id'] == $id){
                return $book;
            }
        }
        return null;
    }

}

?>