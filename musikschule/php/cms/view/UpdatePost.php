<?php 

namespace CMS\View\Post\Update;

require_once("../php/cms/view/components/Header.php");
require_once("../php/cms/view/components/Navigation.php");
require_once("../php/cms/controller/EditPostHandler.php");
require_once("../php/cms/controller/Post.php");
use CMS\View\components\Header;
use CMS\View\components\Navigation;
use CMS\Controller\EditPostHandler;
use CMS\Controller\Post\Post;

function render() {
    

    \CMS\View\components\Header\render("Update Post");

    \CMS\View\components\Navigation\render();

    //do update
    \CMS\Controller\EditPostHandler\editPostHandler();

    //updated Post
    $post = \CMS\Controller\Post\Post\handler($_GET['postID']);
    
    ?>
        <div class="update">
            <h2 class="subheader">Update Post successful</h2>

            <h3>Title</h3>
            <p><?php echo $post->title() ?></p>

            <br /><br /><br />

            <h3 class="">Description</h3>
            <p><?php echo $post->description() ?></p>

            <br /><br /><br />

            
            <img src="<?php echo $post->image(); ?>" />
            <br /><br />
            
            <br /><br /><br />

            <form action="index.php" method="get">
            <input type="hidden" name="route" value="posts" />          
            <input type="submit" value="Back to Posts" />
            </form>


            <!--js replace url-->
        </div>    
        
    
    <?php


}




?>