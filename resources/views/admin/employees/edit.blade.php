<!DOCTYPE html>
<html lang="en">
<head>
  @php
  $title = 'Страны | Добавлениe сотрудника'
  @endphp
  @include('/vendor/header')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
</head>
<body>
  <section class="section">
    <div class="container">
      <div class="text-center">
        <a href="/admin/employees" class="inline-block mx-auto mt-4 px-4 py-1 rounded-sm bg-gray-400">Назад</a>
      </div>
      <div class="flex gap-5">
        <form action="/admin/employees/update/{{$employee['id']}}" enctype="multipart/form-data" method="POST" class="w-[60%]">
          @csrf
          <div class="field">
            <label class="label">Имя</label>
            <div class="control">
              <input class="input{{$errors->has('firstName')? ' is-danger': ''}}" type="text" placeholder="Имя" name="firstName" value="{{$employee['firstName']}}">
            </div>
          </div>
          <div class="field">
            <label class="label">Фамилия</label>
            <div class="control">
              <input class="input{{$errors->has('lastName')? ' is-danger': ''}}" type="text" placeholder="Фамилия" name="lastName" value="{{$employee['lastName']}}">
            </div>
          </div>
          <div class="field">
            <label class="label">Должность</label>
            <div class="control">
              <input class="input" type="text" placeholder="Должность" name="position" value="{{$employee['position']}}">
            </div>
          </div>
          <div class="file is-boxed">
            <label class="file-label">
              <input class="file-input" type="file" name="photo"/>
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">Фото сотрудника</span>
              </span>
            </label>
          </div>
          <div class="field">
            <label class="label">Номер телефона</label>
            <div class="control">
              <input class="input{{$errors->has('phone')? ' is-danger': ''}}" type="text" placeholder="Номер телефона" name="phone" value="{{$employee['phone']}}">
            </div>
          </div>
          <div class="field">
            <label class="label">Текст</label>
            <div class="control">
              <input class="input{{$errors->has('description')? ' is-danger': ''}}" type="text" placeholder="Текст" name="description" value="{{$employee['description']}}">
            </div>
          </div>
          <div class="field">
            <label class="label">Город</label>
            <div class="control">
              <input class="input{{$errors->has('city')? ' is-danger': ''}}" type="text" placeholder="Город" name="city" value="{{$employee['city']}}">
            </div>
          </div>
          <div class="field">
            <label class="label">Время начала графика работы</label>
            <div class="control w-32">
              <input class="input{{$errors->has('timeStart')? ' is-danger': ''}}" type="time" name="timeStart" value="{{$employee['timeStart']}}">
            </div>
          </div>
          <div class="field">
            <label class="label">Время конца графика работы</label>
            <div class="control w-32">
              @error('timeEnd')
                
              @enderror
              <input class="input{{$errors->has('timeEnd')? ' is-danger': ''}}" type="time" name="timeEnd" value="{{$employee['timeEnd']}}">
            </div>
          </div>
          <input class="button is-link" type="submit" value="Изменить данные сотрудника" />
        </form>
      </div>
    </div>
  </section>
  </div>
  <script src="https://kit.fontawesome.com/10b4c523e5.js" crossorigin="anonymous"></script>
</body>
</html>