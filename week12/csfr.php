<?php
        ob_start();
        session_start();
?>
<html lang = "en">

   <head>
          <title>User Input </title>
   </head>
   <body>
      <h2>Login with User and Password</h2>
      <div class = "container form-signin">
         <?php
            $msg = '';
            if (isset($_POST['submit']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {
              if ($_POST['username'] == 'host' &&
                  $_POST['password'] == 'pass') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'host';
                  echo 'You have entered valid username and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
    ?>
      </div>

      <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
               name = "username" placeholder = "username = host"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = pass" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "submit">Submit</button>
         </form>
      </div>

   </body>
</html>