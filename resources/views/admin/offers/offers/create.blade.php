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
    <form id="form" action="/admin/offers/offers/store" method="POST" class="flex flex-col">
      @csrf
      @error('name')
      <p>Обязательное поле</p>
      @enderror
      <label for="name" class="mt-2">
        Название акции
      </label>
      <input type="text" name="name" id="name" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      @error('info')
      <p>Обязательное поле</p>
      @enderror
      <label for="info" class="mt-2">
        Краткое описание акции
      </label>
      <input type="text" name="info" id="info" class="p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2">
      @error('description')
      <p>Обязательное поле</p>
      @enderror
      <label for="descripton" class="mt-2">
        Полное описание акции
      </label>
      <div class="description_ p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2 max-w-[500px]" id="description_"></div>
      <input type="text" style="opacity: 0; cursor:unset; width: 0; height: 0" width="0" height="0" id="description" name="description">
      @error('additionalInfo')
      <p>Обязательное поле</p>
      @enderror
      <label for="additionalInfo" class="mt-2">
        Дополнительная информация
      </label>
      <div class="additionalInfo_ p-1 w-full border-[1px] border-[rgba(0,0,0,0.1)] mt-2 max-w-[500px]" id="additionalInfo_"></div>
      <input type="text" style="opacity: 0; cursor:unset; width: 0; height: 0" width="0" height="0" id="additionalInfo" name="additionalInfo">
      @error('bookingStart')
      <p>Обязательное поле</p>
      @enderror
      <label for="bookingStart" class="mt-6">
        Дата начала бронирования
      </label>
      <input type="date" name="bookingStart" id="bookingStart" class="max-w-[200px] mt-2">
      @error('bookingEnd')
      <p>Обязательное поле</p>
      @enderror
      <label for="bookingEnd" class="mt-6">
        Дата конца бронирования
      </label>
      <input type="date" name="bookingEnd" id="bookingEnd" class="max-w-[200px] mt-2">
      @error('livingStart')
      <p>Обязательное поле</p>
      @enderror
      <label for="livingStart" class="mt-6">
        Дата начала проживания
      </label>
      <input type="date" name="livingStart" id="livingStart" class="max-w-[200px] mt-2">
      @error('livingEnd')
      <p>Обязательное поле</p>
      @enderror
      <label for="livingEnd" class="mt-6">
        Дата конца проживания
      </label>
      <input type="date" name="livingEnd" id="livingEnd" class="max-w-[200px] mt-2">
      <label for="country_id" class="mt-6">
        Страна
      </label>
      <select name="country_id" id="country_id">
        @foreach($countries as $country)
        <option value="{{$country['id']}}">{{$country['name']}}</option>
        @endforeach
      </select>
      <button type="button" onclick="sumbitForm()" class="px-4 py-2 mt-12 mb-12 rounded-md bg-lime-500 ">
        Добавить страну для акции
      </button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@2.29.1/dist/editorjs.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
  <script>
    const description = new EditorJS({
      holder: 'description_',
      tools: {
        header: {
          class: Header,
          inlineToolbar: ['link']
        },
        list: {
          class: List,
          inlineToolbar: true
        },
        @if(old('description'))
        data: {{old('description')}}
        @endif
      }
    });

    const additionalInfo = new EditorJS({
      holder: 'additionalInfo_',
      tools: {
        header: {
          class: Header,
          inlineToolbar: ['link']
        },
        list: {
          class: List,
          inlineToolbar: true
        },
        @if(old('additionalInfo'))
        data: {{old('additionalInfo')}}
        @endif
      }
    });

    async function sumbitForm() {
      await additionalInfo.save().then((data) => {
        const inputelem = document.querySelector('#additionalInfo');
        inputelem.value = JSON.stringify(data);
        console.log(inputelem.value);
      }).catch((error) => {
        console.log('Something went wrong');
      });
      await description.save().then((data) => {
        const inputelem = document.querySelector('#description');
        inputelem.value = JSON.stringify(data);
        console.log(inputelem.value);
      }).catch((error) => {
        console.log('Something went wrong');
      });

      document.getElementById('form').submit();
    }
  </script>
</body>
</html>