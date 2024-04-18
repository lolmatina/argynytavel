<!DOCTYPE html>
<html lang="en">
<head>
  @php
    $title = 'Администрирование'
  @endphp
  @include('vendor/header')
  <link rel="stylesheet" href="/styles/datatables.min.css">
</head>
<body>
  <div class="container">
    @auth
    <h1 class="text-2xl text-center p-4 font-semibold">
      Добро пожаловать {{auth()->user()->name}}
    </h1>
    <div class="flex justify-center items-center">
      <a href="/admin/offers" class="text-center text-md inline-block py-2 mx-4 rounded-md px-8 border-[1px] border-[rgba(0,0,0,0.3)] hover:bg-slate-400 transition-all">Акции</a>
      <a href="/admin/countries" class="text-center text-md inline-block py-2 mx-4 rounded-md px-8 border-[1px] border-[rgba(0,0,0,0.3)] hover:bg-slate-400 transition-all">Страны</a>
      <a href="/admin/employees" class="text-center text-md inline-block py-2 mx-4 rounded-md px-8 border-[1px] border-[rgba(0,0,0,0.3)] hover:bg-slate-400 transition-all">Сотрудники</a>
    </div>
    <h2 class="text-xl font-semibold text-center my-8">
      Список заявок
    </h2>
    <table id="table" class="display">
      <thead>
        <tr>
          <th>№</th>
          <th>Имя</th>
          <th>Номер телефона</th>
          <th>Город</th>
          <th>Дата подачи заявки</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clients as $client)
        <tr>
          <td>{{$client['id']}}</td>
          <td>{{$client['name']}}</td>
          <td>{{$client['phone']}}</td>
          <td>{{$client['city']}}</td>
          <td>{{$client['date']}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <form method="POST" action="/admin/auth" class="w-full h-[100vh] flex justify-center items-center">
      @csrf
      <div class="rounded-[15px] p-4 w-[350px] flex flex-col border-[1px] border-[rgba(0,0,0,0.1)]">
        <h2 class="font-semibold text-xl text-center">
          Вход в систему
        </h2>
        @error('email')
        <p class="text-sm pt-4 text-center text-red-400">Ошибка при авторизации. Неправильный email или пароль</p>   
        @enderror
        <label for="email" class="mt-4">
          Введите электронную почту
        </label>
        <input type="email" id="emal" name="email" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
        <label for="password" class="mt-4">
          Введите пароль
        </label>
        <input type="password" id="password" name="password" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
        <button type="submit" class="px-4 py-2 mt-4 rounded-md bg-lime-500 ">
          Войти
        </button>
      </div>
    </form>
    @endauth
  </div>
  <script src="/scripts/datatables.min.js"></script>
  <script>
    let table = new DataTable('#table', {
      responsive: true
    });
  </script>
</body>
</html>