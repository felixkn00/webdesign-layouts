<?php

namespace CMS\View\Components\Post;


class Post {
    private $post = "";
    private $addEditBar= false;

    //Constructor
    function __construct($post, $addEditBar) {
        $this->post = $post;
        $this->addEditBar = $addEditBar;
    }


    public function render() {
        ?>
        <style>
            
        </style>

        <!-- Elements -->
            <div class="post-card">

        <!-- Title -->
        <?php if($this->post['title'] >= ""){ ?>
            <h2>
                <?php print_r($this->post['title']); ?>
            </h2>
            <?php
            }
        ?>
         
         <!-- Description -->
        <?php if($this->post['description'] >= ""){ ?>
            <div>
             <p>
                <?php print_r($this->post['description']); ?>
             <p>
                <form action="route?route=edit" method="get" >
                <input type="hidden" name="postID" value="">
            </form>
            </div>
        <?php
            }
        ?><?php

        if($this->addEditBar == 1){
        ?>
            <form action="index.php" method="get" >
                <input type="hidden" name="route" value="editPost" />
                <input type="hidden" name="postID" value="<?php print_r($this->post['postID']); ?>">
                <input type="submit" />
            </form>
        <?php
        
        }

        ?>
            </div>
        <?php
}

    //none html and css styling
    public function title(){
        print_r($this->post['title']);
    }

    public function description(){
        print_r($this->post['description']);
    }

    public function image(){
        print_r($this->post['image']);
    }

}

?>