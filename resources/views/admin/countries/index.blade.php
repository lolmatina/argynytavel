<!DOCTYPE html>
<html lang="en">
<head>
  @php
  // dd($countries);
    $title = 'Администрирование'
  @endphp
  @include('vendor/header')
  <link rel="stylesheet" href="/styles/datatables.min.css">
</head>
<body>
  <div class="container">
    <h2 class="text-xl font-semibold text-center my-8">
      Список стран
    </h2>
    <table id="table" class="display">
      <thead>
        <tr>
          <th>№</th>
          <th>Страна</th>
          <th>Действия</th>
        </tr>
      </thead>
      <tbody>
        @foreach($countries as $key => $country)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$country['name']}}</td>
          <td>
            <a href="/admin/countries/edit/{{$country['id']}}" class="px-4 py-1 rounded-sm bg-gray-400">Редактировать</a>
            <a href="/admin/countries/drop/{{$country['id']}}" class="px-4 py-1 rounded-sm bg-red-400">Удалить</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center">
      <a href="/admin/countries/create" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-lime-400">Добавить страну</a>
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