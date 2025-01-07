<?php

class Posts{
    private $conn;
    private $post;
    function __construct($postID)
    {
        $this->conn = mysqli_connect("localhost", "root", "", "cms");
        $sql = "SELECT * FROM `post` WHERE `postID` = '$postID'";
        $query = mysqli_query($this->conn, $sql);
        
        $this->post = mysqli_fetch_assoc($query);
        
    }


    function getPostTitle(){
        return $this->post['title'];
    }

    function getPostDescription(){
        return $this->post['description'];
    }

    function getPostImage(){
        return $this->post['image'];
    }

}


