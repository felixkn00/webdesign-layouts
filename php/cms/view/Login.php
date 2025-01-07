<?php
    
namespace CMS\View\Login;

function render($origin) {
    
    $route = $_GET['route'];
    if($_GET['route'] == ""){
        $route == "login";
    }
    ?>

    <h1>Login</h1>
    
    <div>
        <?php
        if(isset($_GET['login_error_data'])){
            echo "Login fehlgeschlagen";
        }
        ?>
    </div>
    
    <form id="loginForm" class="loginForm" action="doLogin.php" method="post" >
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="hidden" name="route" value="<?php echo $origin ?>" />
        <button type="submit">Login</button>
    </form>

       
    <?php

}




?>