<?php

class Publishers{
    static $Publishers = [
        ['id' => 1,'publisher' => 'John Wiley & Sons','country' => 'United States','founded' => 1807,'genere' => 'Academic', 'publisherBooks' => [['book_id' => 1, 'title' => 'Operating System Concepts'],['book_id' => 2, 'title' => 'Database System Concepts']]],
        ['id' => 2,'publisher' => 'Pearson Education','country' => 'United Kingdom','founded' => 1844,'genere' => 'Education', 'publisherBooks' => [['book_id' => 3, 'title' => 'Computer Networks'],['book_id' => 4, 'title' => 'Modern Operating Systems']]]
    ];

    public static function GetAllPublishers(){
        return self::$Publishers;
    }

    public static function GetPublisherById($id){
        foreach(self::$Publishers as $key => $Publisher){
            if($Publisher['id'] == $id){
                return $Publisher;
            }
        }
        return null;
    }

}

?>