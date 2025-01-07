<?php

class Posts{
    private $conn;
    private $posts = [];
    function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "cms");
        $sql = "SELECT `title` FROM `post`";
        $query = mysqli_query($this->conn, $sql);
        
        while ($row = mysqli_fetch_assoc($query)) {
            $this->posts[] = $row;
         
        }
        
    }


    function getPostTitle($id){
        return $this->posts[$id]['title'];
    }

    function getPostDescription($id){
        return $this->posts[$id]['description'];
    }

    function getPostImage($id){
        return $this->posts[$id]['image'];
    }

}


