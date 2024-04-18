<!DOCTYPE html>
<html lang="en">
<head>
  @php
  $title = 'Акции | Добавление акции'
  @endphp
  @include('/vendor/header')
</head>
<body>
  <div class="container">
    <div class="text-center">
      <a href="/admin/offers" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-gray-400">Назад</a>
    </div>
    <form id="form" action="/admin/offers/hotels/store" method="POST" class="flex flex-col">
      @csrf
      <label for="name">
        Название отеля
      </label>
      <input type="text" name="name" id="name" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      <label for="image" class="mt-2">
        Картинка
      </label>
      <input type="file" name="image" id="image" class="mt-2">
      <label for="rate" class="mt-2">
        Оценка
      </label>
      <input type="range" value="0" step="0.5" min="0" max="5" name="rate" id="rate" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      <p id="rate_" class="text-center">0</p>
      <label for="price" class="mt-2">
        Цена
      </label>
      <input type="number" name="price" id="price" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      <label for="country_id" class="mt-2">
        Страна
      </label>
      <select name="country_id" id="country_id" class="border-[1px] border-[rgba(0,0,0,0.1)]">
        @foreach($countries as $country)
        <option value="{{$country['id']}}">{{$country['name']}}</option>
        @endforeach
      </select>
      <button type="submit" class="px-4 py-2 mt-12 mb-12 rounded-md bg-lime-500 ">
        Добавить отель
      </button>
    </form>
  </div>
  <script>
    const label = document.getElementById('rate_');
    document.getElementById('rate').addEventListener("input", (e) => {
      console.log(1);
      label.innerHTML = e.target.value;
    })
  </script>
</body>
</html>