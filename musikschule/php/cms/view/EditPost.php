<?php 

namespace CMS\View\Post\Edit;

require_once("../php/cms/view/components/Header.php");
require_once("../php/cms/view/components/Navigation.php");
require_once("../php/cms/controller/Post.php");
use CMS\View\components\Header;
use CMS\View\components\Navigation;
use CMS\Controller\Post\Post;

function render() {
    

    \CMS\View\components\Header\render("Edit Post");

    \CMS\View\components\Navigation\render();

    $post = \CMS\Controller\Post\Post\handler($_GET['postID']);
    
    ?>
        <style>
            
        </style>    
        
        <p>
            <?php echo $_GET['error'];

            if($_COOKIE['oldPostTitle'] == "" && $_COOKIE['oldDescription'] == "" && $_GET['error'] != ""){
                
                echo "<br /><br />Du hast die Felder leer gelasen, der es wurde die alten Werte im Formular geladen";

            }else{


                if($_COOKIE['oldPostTitle'] != "" && $_COOKIE['oldDescription'] == ""){
                    echo "<br /><br />Du hast keine Beschreibung angegeben, aber dein bleibt im Formular erhalten";
                }

                if($_COOKIE['oldDescription'] != "" && $_COOKIE['oldPostTitle'] == ""){
                    echo "<br /><br />Du hast keinen Titel angegeben, aber deine Beschreibung bleibt im Formular erhalten";
                }

            }
            ?>
            
            <br /><br />
            
        </p>

        <form id="editPostForm" action="index.php" method="get" enctype="multipart/form-data">
            <h2 class="subheader">Post Editor</h2>

            <label for="title">Title</label>
            <br /><br />
            <input type="text" id="title" name="postTitle" value="<?php if(isset($_COOKIE['oldPostTitle']) && isset($_COOKIE['oldPostTitle'])){
                echo $_COOKIE['oldPostTitle'];
            }
            else{
                echo $post->title();
            }


        
            
            ?>" />

            <br /><br /><br />

            <label for="description">Description</label>
            <br /><br />
            <textarea type="text" id="description" name="description" cols="76" rows="15"><?php
                
                    if(isset($_COOKIE['oldDescription']) && isset($_COOKIE['oldDescription'])){
                        echo $_COOKIE['oldDescription'];
                    }
                    else{
                        echo $post->description();
                    }


                ?></textarea>

            <br /><br /><br />

            <label for="newImage">Image Active
            <br/>
            <img src="<?php echo $post->image(); ?>" />
            <br /><br />
    
            <label for="notNewImage">No new Image</label>
            <input type="checkbox" id="notNewImage" name="notNewImage" />
    
            <br /><br />
            <label for="newImage">New Image</label>
            <input type="file" id="newImage" name="newImage" />
    
            <br /><br /><br />

            <input type="hidden" name="postID" value="<?php echo $_GET['postID'] ?>" />
            <input type="hidden" name="route" value="updatePost" />
            <input type="hidden" name="newImageUrl" value="newImageUrl" />          
            <input type="submit" value="Safe" onclick="readImage()" />

        </form>

        <script>
            document.getElementById('editPostForm').addEventListener('submit', function(event) {
            event.preventDefault();

            
                    
            var checkbox = document.getElementById('notNewImage');
            var isChecked = checkbox.checked;
                if (isChecked) {
                    document.getElementById('editPostForm').submit();
                }
                else{
                    console.log("123")
            uploadFile();
                }
        }); 

            function uploadFile() {
                var file = document.getElementById('newImage').files[0];
                var formData = new FormData();
                formData.append('media', file);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', '../php/cms/model/UploadMedia.php', true);
                xhr.onload = function() {
                    if (xhr.status == 200) {
                        console.log('Media Uploaded:' + xhr.responseText);
                        document.getElementById('editPostForm').submit();
                        //url = "http://localhost/musikschule/php/cms/model/media/" + xhr.responseText;
                          //  inputFile =document.getElementById('newImageUrl')
                          document.getElementById('editPostForm').submit();
                        /*if (xhr.responseText != '') {
                            url = "http://localhost/musikschule/php/cms/model/media/" + xhr.responseText;
                            //document.getElementById('newImageUrl').value =  url;
                            //document.getElementById('editPostForm').submit();
                        }
                        else{
                            document.getElementById('editPostForm').submit();
                        }*/
                    } else {
                        console.error('Upload failed: ' + xhr.responseText);
                    }
                };
                xhr.send(formData);
            }   
        </script>
        
    
    <?php


}




?>