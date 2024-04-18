<!DOCTYPE html>
<html lang="en">
<head>
  @php
  $title = 'Акции | Редактирование'
  @endphp
  @include('/vendor/header')
</head>
<body>
  <div class="container">
    <div class="text-center">
      <a href="/admin/offers" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-gray-400">Назад</a>
    </div>
    <form action="/admin/offers/update/{{$offer['id']}}" enctype="multipart/form-data" method="POST" class="flex flex-col">
      @csrf
      @method('PUT')
      <label for="name" class="mt-2">
        Название страны
      </label>
      <input value="{{$offer['name']}}" type="text" name="name" id="name" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      <label for="Описание" class="mt-2">
        Описание
      </label>
      <input value="{{$offer['description']}}" type="text" name="description" id="description" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      <label for="offer" class="mt-2">
        Краткое описание акции
      </label>
      <input value="{{$offer['offer']}}" type="text" name="offer" id="offer" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      <label for="preview" class="mt-2">
        Фото для карточки
      </label>
      <input type="file" accept=".jpg,.jpeg" name="preview" id="preview">
      <label for="preview" class="mt-2">
        Фото для страницы
      </label>
      <label for="preview_text" class="mt-2">
        Текст-описание для карточки
      </label>
      <input value="{{$offer['preview_text']}}" type="text" name="preview_text" id="preview_text" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      <input type="file" accept=".jpg,.jpeg,.png" name="image" id="image">
      <button type="submit" class="px-4 py-2 mt-4 rounded-md bg-lime-500 ">
        Добавить страну для акции
      </button>
    </form>
  </div>
</body>
</html>