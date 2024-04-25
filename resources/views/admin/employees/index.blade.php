<!DOCTYPE html>
<html lang="en">
<head>
  @php
  // dd($countries);
    $title = 'Администрирование|Сотрудники'
  @endphp
  @include('vendor/header')
  <link rel="stylesheet" href="/styles/datatables.min.css">
</head>
<body>
  <div class="container">
    <div class="text-center">
      <a href="/admin" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-gray-400">Назад</a>
    </div>
    <h2 class="text-xl font-semibold text-center my-8">
      Список сотрудников
    </h2>
    <table id="table" class="display">
      <thead>
        <tr>
          <th>№</th>
          <th>Сотрудник</th>
          <th>Действия</th>
        </tr>
      </thead>
      <tbody>
        @foreach($employees as $key => $employee)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$employee['firstName']}} {{$employee['lastName']}}</td>
          <td>
            <a href="/admin/employees/edit/{{$employee['id']}}" class="px-4 py-1 rounded-sm bg-gray-400">Редактировать</a>
            <a href="/admin/employees/drop/{{$employee['id']}}" class="px-4 py-1 rounded-sm bg-red-400">Удалить</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center">
      <a href="/admin/employees/create" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-lime-400">Добавить сотрудника</a>
    </div>
  </div>
  <script src="/scripts/datatables.min.js"></script>
  <script>
    let table = new DataTable('#table', {
      responsive: true
    });
  </script>
</body>
</html>