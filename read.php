<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <main class="container">
  
    <?php
      read();
    ?>

    </container>
  </body>
</html>

<?php
    function read(){
        if(isset($_POST["value"])){
            $test = explode(".", $_POST["value"]);
            if ($test[0]=="comics"){
              $directory="comics/" . $test[1] . "/";
              $count = count(glob($directory . '*.jpeg'));
              for($i=0; $i<$count; $i++){
                echo "<div class=''><div class='w-50 mx-auto'><img
                src='comics/$test[1]/$i.jpeg'
                width='600'/></div></div>";
              }
            }
            else {
              $str = file_get_contents("text/" . $test[0] . ".txt");
            echo $str;
            }
        }
      }
?>


