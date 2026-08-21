<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Добавить пользователя</title>
</head>

<body>

  <h1>Добавить пользователя</h1>

  @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ url('/store') }}">

    @csrf

    <div>
      <label for="name">Имя</label>
      <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>

    <br>

    <div>
      <label for="surname">Фамилия</label>
      <input type="text" id="surname" name="surname" value="{{ old('surname') }}" required>
    </div>

    <br>

    <div>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <br>

    <button type="submit">
      Добавить пользователя
    </button>

  </form>

</body>

</html>