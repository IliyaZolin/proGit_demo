<?php
  require_once 'Writer.php';
  require_once 'Text.php';


if(count($_POST)) {
  $text = new Text($_POST);
  $writher = new Writer();
  $writher->save($text);

  header("Location: /");
  die();
}

?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Title</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="/assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class="container">

    <header class="mb-4 p-4 bg-dark text-white">
      <h2>Header</h2>
    </header>

    <main>

      <h1>Form</h1>

      <form method="post">

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">title</label>
          <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput2" class="form-label">description</label>
          <input type="text" name="description" class="form-control" id="exampleFormControlInput2" placeholder="" >
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">phone</label>
          <input type="text" name="phone" class="form-control" id="phone" autocomplete="false">
        </div>



        <button type="submit" class="btn btn-primary">Отправить</button>
       

      </form>

    </main>

    <footer class="mt-4 p-4 bg-dark text-white">
      <h2>Footer</h2>
    </footer>

  </div>
  <script src="https://unpkg.com/imask"></script>
  <script src="/assets/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


