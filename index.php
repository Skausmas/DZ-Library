<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<main class="container">
  <div class="row mb-2">
    <div class="col-md-6">
      <form action = 'read.php' method ='post'>
        <?php
             include 'class.php';
              $json_data = json_decode(file_get_contents('book.txt'), true);
              foreach ($json_data as $data) {
              $book[] = new Book ($data['name'], $data['author'], $data['count'], $data['year'], $data['cover'], $data['izdatelstvo']);
              }   
              foreach($book as $books){ 
              echo $books->show_info(); 
              }

                $json_data2 = json_decode(file_get_contents('funfiction.txt'), true);
                foreach ($json_data2 as $data) {
                $funfiction[] = new Funfiction ($data['name'], $data['author'], $data['count'], $data['year'], $data['cover'], $data['source']);
                }   
                foreach($funfiction as $fun){ 
                echo $fun->show_info(); 
                }

                $json_data1 = json_decode(file_get_contents('comics.txt'), true);
                foreach($json_data1 as $com){
                    $comics[]= new Comics ($com['name'], $com['author'], $com['count'], $com['year'], $com['cover'], $com['painter'], $com['color']);
                }
                foreach($comics as $com){ 
                    echo $com->show_info(); 
                    }
        ?>
    </form>
    </div>
    </container>
  </body>
</html>