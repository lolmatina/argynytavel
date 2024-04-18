<!DOCTYPE html>
<html lang="en">
<head>
  @php
  $title = 'Акции'
  @endphp
  @include('/vendor/header')
  {{-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script> --}}
  <link rel="stylesheet" type="text/css" href="/styles/tabby-ui.min.css">
  <link rel="stylesheet" href="/styles/datatables.min.css">
  <script src="/scripts/tabby.polyfills.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="text-center">
      <a href="/admin" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-gray-400">Назад</a>
    </div>
    <ul data-tabs>
      <li><a data-tabby-default href="#countries">Страны</a></li>
      <li><a href="#offers">Акции</a></li>
      <li><a href="#hotels">Отели</a></li>
    </ul>

    <div id="countries">
      <table id="countries_table" class="display">
        <thead>
          <tr>
            <th>№</th>
            <th>Название страны</th>
            <th>Описание</th>
            <th>Количество активных акций</th>
            <th>Количество отелей</th>
            <th>Действия</th>
          </tr>
        </thead>
        <tbody>
          @foreach($offers as $offer)
          <tr>
            <td>{{$offer['id']}}</td>
            <td>{{$offer['name']}}</td>
            <td>{{$offer['description']}}</td>
            <td>{{$offer['offers']? sizeof(explode(',', $offer['offers'])): 0}}</td>
            <td>{{$offer['hotels']? sizeof(explode(',', $offer['hotels'])): 0}}</td>
            <td>
              <a href="/admin/offers/edit/{{$offer['id']}}" class="px-4 py-1 rounded-sm bg-gray-400">Редактировать</a>
              <a href="/admin/offers/drop/{{$offer['id']}}" class="px-4 py-1 rounded-sm bg-red-400">Удалить</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        <a href="/admin/offers/create" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-lime-400">Добавить страну</a>
      </div>
    </div>

    <div id="offers">
      <table id="offers_table" class="display">
        <thead>
          <tr>
            <th>№</th>
            <th>Название акции</th>
            <th>Страна</th>
            <th>Активен до</th>
            <th>Действия</th>
          </tr>
        </thead>
        <tbody>
          @foreach($promotions as $offer)
          <tr>
            <td>{{$offer['id']}}</td>
            <td>{{$offer['name']}}</td>
            <td data-filterable="true">
            @php
            foreach ($offers as $key => $value) {
              if($value['id'] == $offer['country_id']) {
                echo $value['name'];
                break;
              }
            }
            @endphp
            </td>
            <td>{{$offer['bookingEnd']}}</td>
            <td>
              <a href="/admin/offers/offers/edit/{{$offer['id']}}" class="px-4 py-1 rounded-sm bg-lime-400">Редактировать</a>
              <a href="/admin/offers/offers/drop/{{$offer['id']}}" class="px-4 py-1 rounded-sm bg-red-400">Удалить</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        <a href="/admin/offers/offers/create" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-lime-400">Добавить акцию</a>
      </div>
    </div>

    <div id="hotels">
      <table id="hotels_table" class="display">
        <thead>
          <tr>
            <th>№</th>
            <th>Название отеля</th>
            <th>Страна</th>
            <th>Действия</th>
          </tr>
        </thead>
        <tbody>
          @foreach($hotels as $hotel)
          <tr>
            <td>{{$hotel['id']}}</td>
            <td>{{$hotel['name']}}</td>
            <td data-filterable="true">
            @php
            foreach ($offers as $key => $value) {
              if(array_search($hotel['id'], explode(',', $value['hotels']))) {
                echo $value['name'];
                break;
              }
            }
            @endphp
            </td>
            <td>
              <a href="/admin/offers/hotels/edit/{{$hotel['id']}}" class="px-4 py-1 rounded-sm bg-lime-400">Редактировать</a>
              <a href="/admin/offers/hotels/drop/{{$hotel['id']}}" class="px-4 py-1 rounded-sm bg-red-400">Удалить</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        <a href="/admin/offers/hotels/create" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-lime-400">Добавить отель</a>
      </div>
    </div>
  </div>
  <script src="/scripts/datatables.min.js"></script>
  <script>
    let countries = new DataTable('#countries_table', {
      responsive: true
    });
    let offers = new DataTable('#offers_table', {
      responsive: true
    });
    let hotels = new DataTable('#hotels_table', {
      responsive: true
    });

    let tabs = new Tabby('[data-tabs]');
  </script>
</body>
</html>