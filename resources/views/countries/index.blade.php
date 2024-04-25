<!DOCTYPE html>
<html lang="en">
<head>
  @php
    // dd($countries);
    $title = 'Argyn Travel | Страны';
  @endphp
  @include('vendor/header')
</head>
<body>
  <section class="offers bg-[#CAF6FC]">
    <div class="container mx-auto grid grid-cols-3 gap-6 p-5">
      <div class="col-span-3 md:col-span-1 relative">
        <div class="p-7 bg-gradient-to-t from-[#A9DBFF] to-[#F2FAC3] rounded-[40px]">
          <div class="p-6 bg-white rounded-[10px] flex items-center justify-center">
            <label for="search" class="offers-search_icon mr-[35px]">
              <img src="images/icons/search.svg" alt="Найти страну">
            </label>
            <input id="search" class="text-xl leading-5 focus:outline-none w-full" type="text" placeholder="Найти страну"/>
          </div>
          <ul class="country__items mt-[25px] h-[586px] bg-white rounded-[10px] grid grid-cols-1 gap-[18px] py-7 pl-5 pr-9 overflow-x-hidden overflow-y-auto">
            @forelse($countries as $country)
            <li class="country__item bg-[#EFEFEF] hover:bg-[#FCD15B] duration-300 rounded-[69px] h-[82px] p-1 flex align-middle cursor-pointer">
              <img class="w-[72px] min-w-[72px] h-[72px] bg-black rounded-[36px]" src="/storage/{{$country['flag']}}">
              <div class="h-full w-full pr-[72px] flex items-center justify-center text-xl leading-5"><span>{{$country['name']}}</span></div>
              <div class="hidden" data-description>{{$country['description']}}</div>
              <div class="hidden" data-requirements>{{$country['requirements']}}</div>
              <div class="hidden" data-visa>{{$country['visa']}}</div>
              <div class="hidden" data-id>{{$country['id']}}</div>
            </li>
            @empty
            <p>
              Список пуст
            </p>
            @endforelse
          </ul>
        </div>
        <p class="text-center text-xl py-[20px] px-[49px]">
          Будьте в курсе всех акций и скидок воспользовавшись бесплатной консультацией
        </p>
        <a class="w-full open-popup text-[30px] py-8 font-semibold flex items-center justify-center bg-[#FCD15B] rounded-[40px] leading-[30px] cursor-pointer">
          Оставьте заявку
        </a>
      </div>
      <div class="country__layout absolute hidden left-0 right-0 bottom-20 top-0 md:static mx-5 col-span-3 md:col-span-2 p-7 bg-gradient-to-t from-[#A9DBFF] to-[#F2FAC3] rounded-[40px]">
        <h2 data-name class="w-full bg-white rounded-[25px] md:rounded-[10px] h-[51px] md:h-[74px] flex items-center justify-center text-[25px] md:text-[40px] font-semibold relative">
          <img src="/images/icons/arrow-left-bg.svg" class="absolute left-2 md:hidden" onclick="closeBlock()">
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[20px] mt-[25px]">
          <div class="col-span-1">
            <div class="col-span-1 bg-white rounded-[10px] p-5 pt-[10px] text-center">
              <h3 class="text-xl font-medium">Оформление визы</h3>
              <p data-visa></p>
            </div>  
            <div class="col-span-1 bg-white rounded-[10px] p-5 pt-[10px] text-center mt-[25px]">
              <h3 class="text-xl font-medium">О стране</h3>
              <p data-description></p>
              <a href="/coutries/" class="rounded-[23px] block text-center bg-[#FCD15B] py-3 text-[25px] font-medium mt-[25px]" data-id>Подробнее</a>
            </div>
          </div>
          <div class="col-span-1">
            <div class="col-span-1 bg-white rounded-[10px] p-5 pt-[10px] text-center">
              <h3 class="text-xl font-medium">Условия въезда</h3>
              <p data-requirements></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('vendor/popup')
  <style>

  </style>
  <script>
    const countries = document.querySelector('.country__items').querySelectorAll('.country__item');
    const layout    = document.querySelector('.country__layout');
    let active;

    function closeBlock() {
      layout.classList.add('hidden');
    }

    countries.forEach(element => {
      element.addEventListener('click', () => {
        element.classList.add('active');
        if (active)
          active.classList.remove('active');
        active = element;

        layout.classList.remove('hidden');

        const visa         = element.querySelector('[data-visa]');
        const description  = element.querySelector('[data-description]');
        const requirements = element.querySelector('[data-requirements]');
        const id           = element.querySelector('[data-id]');

        layout.querySelector('[data-visa]').innerHTML = visa.innerHTML;
        layout.querySelector('[data-description]').innerHTML = description.innerHTML;
        layout.querySelector('[data-requirements]').innerHTML = requirements.innerHTML;
        layout.querySelector('[data-id]').href = `/countries/${id.innerHTML}`;
      })
    });
  </script>
</body>
</html>