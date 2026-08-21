<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">

  <title>Пользователь</title>

  <style>
    body {
      font-family: "DejaVu Sans", sans-serif;
    }
  </style>
</head>

<body>

  <h1>Информация о пользователе</h1>

  <p>Имя: {{ $user->name }}</p>
  <p>Фамилия: {{ $user->surname }}</p>
  <p>Email: {{ $user->email }}</p>

</body>

</html>