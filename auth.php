<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <script type="text/javascript" src="/js/wow.min.js"></script>
  <script>
    var wow = new WOW();
    wow.init();
    
  </script>
  <title>Female Club</title>
</head>

<body>  
    <div class="container">
        <form action="" method="post">
            <input type="text" placeholder="Login" name="login">
            <input type="text" placeholder="Authorization" name="password">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $login = test_input($_POST["login"]);
            $email = test_input($_POST["password"]);

            if (md5($login)==md5("admin") && md5($password)==md5("neskromnaya")){
                header('Location: https://onemuseclub.kz/control_panel.php');
            }
            else{
                echo "<h1>Invalid data.</h1>";
            }
          }
        else{
            echo "<h1>Please, input authorization data.</h1>";
        }
        ?>
    </div>

</body>

</html>