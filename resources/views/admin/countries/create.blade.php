<!DOCTYPE html>
<html lang="en">
<head>
  @php
  $title = 'Страны | Добавление страны'
  @endphp
  @include('/vendor/header')
</head>
<body>
  <div class="container">
    <div class="text-center">
      <a href="/admin/countries" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-gray-400">Назад</a>
    </div>
    <form action="/admin/countries/store" enctype="multipart/form-data" method="POST" class="flex flex-col pb-[200px]">
      @csrf
      <label for="name" class="mt-2">
        Название страны
      </label>
      <input type="text" name="name" id="name" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">


      <label for="flag" class="mt-2">
        Флаг страны
      </label>
      <input type="file" accept=".jpg,.jpeg,.svg" name="flag" id="flag">


      <label for="visa" class="mt-2">
        Условия для визы
      </label>
      <textarea type="text" name="visa" id="visa" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2"></textarea>


      <label for="requirements" class="mt-2">
        Условия для въезда
      </label>
      <textarea type="text" name="requirements" id="requirements" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2"></textarea>


      <label for="description" class="mt-2">
        Описание
      </label>
      <textarea type="text" name="description" id="description" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2"></textarea>


      <label for="capital" class="mt-2">
        Столица
      </label>
      <input type="text" name="сapital" id="capital" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">


      <label for="currency" class="mt-2">
        Валюта
      </label>
      <input type="text" name="currency" id="currency" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">


      <label for="time" class="mt-2">
        Время
      </label>
      <input type="text" name="time" id="time" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">


      <label for="language" class="mt-2">
        Язык
      </label>
      <input type="text" name="language" id="language" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">


      <label for="climate" class="mt-2">
        Климат
      </label>
      <textarea type="text" name="climate" id="climate" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2"></textarea>


      <label for="location" class="mt-2">
        Местоположение
      </label>
      <textarea type="text" name="location" id="location" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2"></textarea>


      <label for="preview" class="mt-2">
        Фото страны
      </label>
      <input type="file" accept=".jpg,.jpeg,.png" name="image" id="image">


      <p class="mt-4">Достопримичательности</p>
      <div class="mt-2">
        <input type="button" id="addAttraction" class="cursor-pointer bg-lime-500 px-3 py-2 inline-block rounded-md" value="Добавить">
      </div>

      <div id="attractionLayout" class="" oncl>
        
      </div>

      <button type="submit" class="px-4 py-2 rounded-md bg-lime-500 mt-10">
        Добавить страну
      </button>
    </form>
  </div>

  <script>
    const addAttraction = document.getElementById('addAttraction');
    const attractionLayout = document.getElementById('attractionLayout');

    addAttraction.addEventListener('click', () => {
      const block = document.createElement('div');
      Object.assign(block, {
        className: "attractionBlock flex flex-col justify-center items-center p-3 border border-[rgba(0,0,0,0.1)] rounded-md mt-2",
      });

      const deleteBtn = document.createElement('input');
      Object.assign(deleteBtn, {
        type: 'button',
        className: 'cursor-pointer bg-red-400 px-3 py-2 inline-block rounded-md',
        value: 'Удалить'
      });

      const label_name = document.createElement('label');
      Object.assign(label_name, {
        className: 'w-full'
      });
      label_name.textContent = 'Наименование';

      const name = document.createElement('input');
      Object.assign(name, {
        type: 'text',
        name: 'attraction_name[]',
        id: 'attraction_name',
        className: 'p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2',
      });

      const label_description = document.createElement('label');
      Object.assign(label_description, {
        className: 'w-full'
      });
      label_description.textContent = 'Описание';

      const description = document.createElement('input');
      Object.assign(description, {
        type: 'text',
        name: 'attraction_description[]',
        id: 'attraction_description',
        className: 'p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2',
      });

      const label_image = document.createElement('label');
      Object.assign(label_image, {
        className: 'w-full'
      });
      label_image.textContent = 'Фото';

      const image = document.createElement('input');
      Object.assign(image, {
        type: 'file',
        name: 'attraction_image[]',
        id: 'attraction_image',
        className: 'w-full',
        accept: '.jpg,.jpeg,.png'
      });

      block.append(deleteBtn, label_name, name, label_description, description, label_image, image);

      deleteBtn.addEventListener('click', () => {
        block.remove();
      })

      attractionLayout.append(block);
    });
  </script>
  <script src="https://kit.fontawesome.com/10b4c523e5.js" crossorigin="anonymous"></script>
</body>
</html>