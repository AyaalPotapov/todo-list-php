<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Список дел</title>
</head>
<body>

   <header>
   </header>

   <main>
      <div class="container">
         <h1>Список дел</h1>
         <form action="/add.php" method="POST">
            <input type="text" name="task" id="task" placeholder="Новое событие..." class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Создать</button>
         </form>
      </div>
   </main>

   <footer>
   </footer>
</body>
</html>



