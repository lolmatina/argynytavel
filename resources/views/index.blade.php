<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @php
    $title = 'Argyn Travel | Главная'
    @endphp
    @include('vendor/header')
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="/styles/glide.core.min.css">
    @vite('resources/css/app.css')
  </head>
  <body class="antialiased w-full overflow-x-hidden">
    <div class="wrapper">
      <header class="h-[100vh] px-1 pb-5 bg-[url(http://localhost:8000/images/main_bg.jpg)] lg:bg-none bg-cover bg-bottom bg-no-repeat text-white">
        <div class="flex translate-x-[100%] flex-col justify-between fixed w-[320px] right-0 top-0 bottom-0 bg-[rgba(0,0,0,0.5)] backdrop-blur-md z-10 mob-nav transition-all">
          <nav class="pl-10">
            <ul class="grid grid-cols-1 gap-[30px] text-center text-[20px] pt-[137px] items-start">
              <li>
                <a href="#tourvisor" onclick="openMenu()" class="hover:text-[#FCD15B] hover:underline">Найти туры</a>
              </li>
              <li>
                <a href="#super" onclick="openMenu()" class="hover:text-[#FCD15B] hover:underline">Горящие туры</a>
              </li>
              <li>
                <a href="#about" onclick="openMenu()" class="hover:text-[#FCD15B] hover:underline">О компании</a>
              </li>
              <li>
                <a href="#sales" onclick="openMenu()" class="hover:text-[#FCD15B] hover:underline">Акции</a>
              </li>
              <li>
                <a href="#contacts" onclick="openMenu()" class="hover:text-[#FCD15B] hover:underline">Контакты</a>
              </li>
            </ul>
          </nav>
          <nav>
            <ul class="grid grid-cols-3 text-center pb-10">
              <li><a href=""><img src="/images/icons/telegram.svg" alt="" class="mx-auto"></a></li>
              <li><a href=""><img src="/images/icons/whatsapp.svg" alt="" class="mx-auto"></a></li>
              <li><a href=""><img src="/images/icons/instagram.svg" alt="" class="mx-auto"></a></li>
            </ul>
          </nav>
        </div>
        <div class="header_bg hidden lg:block" style="--yOffset: 0%;">
          <div class="header_bg-girl"></div>
        </div>
        <div class="container px-4 h-full flex flex-col">
          <div class="flex justify-between py-[34px] px-2 relative">
            <div class="w-[85px] h-[68px] lg:w-[150px] lg:h-[120px] bg-[url(http://localhost:8000/images/logo.svg)] bg-cover bg-no-repeat z-[2]"></div>
            <div class="bg-[url(http://localhost:8000/images/nav.svg)] w-[69px] h-[69px] bg-cover bg-no-repeat lg:hidden z-30 relative mob-btn transition-all" onclick="openMenu()"></div>
          </div>
          <div class="h-full flex flex-col justify-between lg:justify-end lg:gap-[60px] lg:pb-[100px]">
            <div class="">
              <h1 class="uppercase text-[35px] md:text-[40px] font-bold text-center lg:hidden">
                Argyn Travel
              </h1>
              <h2 class="text-[25px] md:text-[32px] text-center font-semibold mt-[25px] lg:text-[50px] lg:max-w-[560px] lg:text-left lg:text-black">
                Откройте мир <br class="hidden lg:block"> <span class="text-white lg:text-[#FCD15B]">с нами!</span>
              </h2>
              <p class="text-[15px] md:text-[20px] text-center mt-5 text-regular lg:text-[20px] lg:mt-10 lg:max-w-[570px] lg:text-left lg:text-black">
                Наша миссия - сделать ваше путешествие незабываемым. Готовьтесь к увлекательным маршрутам, культурным впечатлениям и встречам, которые оставят след в вашем сердце.
              </p>
            </div>
            <div class="grid grid-cols-2 gap-2 lg:max-w-[570px] md:mx-auto lg:mx-0">
              <a class="bg-[#FCD15B] text-nowrap btn open-popup rounded-[27px] text-center block p-[15px] text-[11px] text-black md:text-[20px] lg:px-0 lg:rounded-[10px] cursor-pointer">
                Получить консультацию
              </a>
              <a href="#about" class="bg-[rgba(255,255,255,0.7)] text-nowrap btn rounded-[27px] text-center block p-[15px] text-[11px] text-black md:text-[20px] lg:px-0 lg:border lg:border-black lg:rounded-[10px]">
                О компании
              </a>
            </div>
          </div>
        </div>
      </header>
      <section id="tourvisor">
        <div class="container">
          <h2>
            Выберите себе тур
          </h2>
          <div class="tv-search-form tv-moduleid-9965234"></div>
          <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </div>
      </section>
      <section class="h-[100vh] lg:h-auto pt-[70px] relative lg:pb-[469px] bg-[url(http://localhost:8000/images/beach.jpg)] bg-cover bg-bottom lg:bg-none">
        <div class="services-bg hidden lg:block"></div>
        <div class="services-bg_boy hidden lg:block"></div>
        <div class="services-bg_mother hidden lg:block"></div>
        <div class="container">
          <h2 class="text-[40px] text-white lg:text-black lg:text-[50px] lg:font-semibold lg:text-center lg:w-1/2 lg:ml-auto">
            Лучшие условия!
          </h2>
          <div class="flex flex-col items-center lg:items-end relative z-10">
            <div class="bg-white p-[5px] pr-[25px] inline-flex items-center rounded-[99px] mt-[40px] lg:mt-[87px] animate fade-in-right">
              <div class="bg-[#FFD8B4] flex items-center justify-center w-[56px] h-[56px] mr-[15px] rounded-full lg:w-[91px] lg:h-[91px]">
                <img src="images/icons/folder.svg" class="w-[27px] lg:w-[43px]">
              </div>
              <span class="text-[12px] md:text-[18px] lg:text-[25px]">
                Доступ к эксклюзивным предложениям
              </span>
            </div>
            <div class="bg-white p-[5px] pr-[25px] inline-flex items-center rounded-[99px] mt-[40px] lg:mt-[87px] animate fade-in-right">
              <div class="bg-[#FFD8B4] flex items-center justify-center w-[56px] h-[56px] mr-[15px] rounded-full lg:w-[91px] lg:h-[91px]">
                <img src="images/icons/calendar.svg" class="w-[27px] lg:w-[43px]">
              </div>
              <span class="text-[12px] md:text-[18px] lg:text-[25px]">
                Индивидуальное планирование
              </span>
            </div>
            <div class="bg-white p-[5px] pr-[25px] inline-flex items-center rounded-[99px] mt-[40px] lg:mt-[87px] animate fade-in-right">
              <div class="bg-[#FFD8B4] flex items-center justify-center w-[56px] h-[56px] mr-[15px] rounded-full lg:w-[91px] lg:h-[91px]">
                <img src="images/icons/clock.svg" class="w-[27px] lg:w-[43px]">
              </div>
              <span class="text-[12px] md:text-[18px] lg:text-[25px]">
                Поддержка 24/7
              </span>
            </div>
            <a href="#tourvisor" class="hidden btn animate fade-in-right rounded-[10px] bg-[#FCD15B] text-[25px] py-[18px] px-[62px] lg:inline-block lg:mt-[90px]">
              Смотреть туры
            </a>
          </div>
        </div>
      </section>
      {{-- <div id="block">
        <svg width="2000" height="2160" viewBox="0 0 1910 2160" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path id="path" d="M2.5 1C48.6667 108.167 -68.5 730.75 452.5 861C720 927.875 815.499 1134.53 906 1317C1276 2063 1512 2124 1909.5 2157" stroke="#444444" stroke-opacity="0.3" stroke-width="5" stroke-dasharray="20 40"/>
        </svg>
        <div id="square">
          <img src="images/plane.svg">
        </div>
      </div> --}}
    </div>
    @if(sizeof($countries) > 0)
    <section class="sales h-[100vh] md:auto" id="sales">
      <div class="container">
        <h2 class="text-center font-semibold text-[50px]">
          Акции
        </h2>
        <div class="glide mt-[75px]">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              @foreach($countries as $country)
              <li class="glide__slide px-2 md:px-[160px]">
                <div style="background: url(/storage/{{$country['preview']}}); background-size: cover; background-position: center" class="w-full rounded-[25px] md:rounded-[60px] p-5 md:p-[46px] text-white">
                  <h3 class="md:text-[50px] text-[25px]">
                    {{$country['name']}}
                  </h3>
                  <p class="md:text-[25px] mt-4 md:mt-[45px] md:max-w-[50%] pb-10 md:pb-0">
                    {{$country['preview_text']}}
                  </p>
                  <a href="/offers/{{$country['id']}}" class="btn mt-[45px] hidden md:inline-block py-3 px-[78px] bg-[#FCD15B] text-black text-[25px] font-semibold rounded-[32px]">
                    Об Акции
                  </a>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          <div data-glide-el="controls" class="flex items-center z-50 justify-center mt-[120px]">
            <button data-glide-dir="<" class="hidden w-[114px] h-[114px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] rounded-full md:flex justify-center items-center">
              <img src="/images/icons/arrow-left.svg" alt="">
            </button>
            <div class="glide__bullet flex gap-[25px] mx-[53px] bg-white py-[11px] px-[32px] rounded-[22px]" data-glide-el="controls[nav]">
              @for($i = 0; $i < sizeof($countries); $i++)
              <button class="glide__bullet bg-black w-6 h-6 rounded-xl" data-glide-dir="={{$i}}"></button>
              @endfor
            </div>
            <button data-glide-dir=">" class="w-[114px] h-[114px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] rounded-full hidden md:flex justify-center items-center">
              <img src="/images/icons/arrow-right.svg" alt="">
            </button>
          </div>
        </div>
      </div>
    </section>
    @endif
    <section id="super" class="h-[100vh] pt-9 p-2 bg-[url(http://localhost:8000/images/suitcase.png)] bg-cover bg-bottom lg:h-auto lg:pt-[350px] lg:pb-[600px] lg:bg-[url(http://localhost:8000/images/Group338.png)] lg:bg-[auto_100%] lg:bg-center">
      <div class="container h-full flex flex-col justify-between lg:block">
        <div class="w-full lg:w-1/2">
          <h2 class="lg:text-[50px] text-[30px] font-semibold lg:text-left">
            ГОРЯЩИЕ ТУРЫ
          </h2>
          <h3 class="text-[20px] mt-5 text-center lg:text-left lg:text-[31px] font-medium">
            Следите за всеми доступными турами в нашем <span class="yellow">Telegram!</span>
          </h3>
          <p class="text-[15px] mt-5 text-center lg:text-left">
            Успейте воспользоваться нашими эксклюзивными предложениями и отправиться в незабываемое путешествие! Мы подготовили для вас лучшие горящие туры по выгодным ценам. Не упустите свой шанс!
          </p>
        </div>
        <div class="px-2 lg:px-0 md:text-center lg:text-left">
          <a href="" class="btn py-[14px] block w-full md:inline-block md:w-auto md:px-[100px] md:mx-auto lg:w-auto text-center lg:mt-[80px] lg:inline-block lg:py-[14px] lg:px-[104px] text-[20px] font-semibold rounded-[23px] bg-[#FCD15B]">
            Вступить в чат
          </a>
        </div>
      </div>
    </section>
  
    <section class="h-[100vh] lg:h-auto relative pt-5 lg:pt-0">
      <div class="animate fade w-[100%] max-w-[500px] mx-auto lg:mx-0 after:block after:pt-[100%] md:mt-10 lg:max-w-full lg:after:pt-0 lg:pt-0 bg-[url(http://localhost:8000/images/countries.png)] bg-cover bg-no=repeat lg:w-[1024px] lg:h-[1024px] lg:absolute lg:top-0 lg:right-[50%]"></div>
      <div class="container">
        <div class="max-w-[100%] lg:max-w-[50%] lg:ml-auto lg:pt-[84px]">
          <h2 class="text-[25px] mt-[35px] lg:text-[50px] lg:text-right font-semibold animate fade-in-right">
            Наши Направления
          </h2>
          <h3 class="text-[20px] text-center mt-[25px] lg:mt-[46px] lg:text-right lg:text-[31px] font-medium animate fade-in-right">
            Откройте для себя уникальные страны с нашими турами!
          </h3>
          <p class="text-[15px] text-center lg:text-right lg:text-[20px] lg:mt-[46px] animate fade-in-right">
            Погрузитесь в мир приключений с нашими увлекательными турами по различным странам мира. Мы предлагаем широкий выбор направлений, чтобы удовлетворить любые ваши путешественнические желания.
          </p>
          <div class="px-[30px] mt-[50px] md:text-center lg:mt-[92px] lg:text-right lg:px-0">
            <a href="/countries" class="animate block w-full text-center md:inline-block md:w-auto fade-in-right btn py-[14px] md:px-[89px] bg-[#FCD15B] lg:text-[20px] font-semibold lg:mt-[92px] rounded-[23px] lg:inline-block">
              Смотреть страны
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="h-[100vh] bg-[url(http://localhost:8000/images/planesbottom.jpg)] bg-bottom lg:h-auto lg:pt-[220px] lg:w-full lg:pb-[125px] lg:bg-[url(http://localhost:8000/images/planes.svg)] bg-cover">
      <div class="container">
        <h2 class="animate fade-in-right text-[30px] md:text-[40px] lg:text-[50px] font-semibold w-[100%] lg:w-[50%] ml-auto leading-[61px  ]">
          Самые <span class="yellow">популярные </span>направления:
        </h2>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-[35px] mt-[62px] text-white">
          <div class="countries_block mx-auto w-[180px] h-[180px] mt-[80px] lg:mt-[225px] lg:w-[280px] lg:h-[280px] p-5 flex flex-col justify-between text-center rounded-[40px] lg:pt-[15px] relative overflow-hidden items-center">
            <div class="absolute top-0 left-0 bottom-0 right-0 bg-gradient-to-b from-black to-transparent opacity-30 z-[0] cursor-pointer"></div>
            <h3 class="text-[20px] lg:text-[31px] font-semibold relative z-1">
              ВЬЕТНАМ
            </h3>
            <a href="" class="btn text-black inline-block py-[11px] px-4 lg:px-[20px] bg-[#FCD15B] text-[12px] lg:text-[15px] font-semibold rounded-[16px] relative z-1">
              О направлении
            </a>
          </div>
          <div class="countries_block mx-auto w-[180px] h-[180px] lg:mt-[150px] lg:w-[280px] lg:h-[280px] p-5 flex flex-col justify-between text-center rounded-[40px] lg:pt-[15px] relative overflow-hidden items-center">
            <div class="absolute top-0 left-0 bottom-0 right-0 bg-gradient-to-b from-black to-transparent opacity-30 z-[0] cursor-pointer"></div>
            <h3 class="text-[20px] lg:text-[31px] font-semibold relative z-1">
              ШРИ-ЛАНКА
            </h3>
            <a href="" class="btn text-black inline-block py-[11px] px-4 lg:px-[20px] bg-[#FCD15B] text-[12px] lg:text-[15px] font-semibold rounded-[16px] relative z-1">
              О направлении
            </a>
          </div>
          <div class="countries_block mx-auto w-[180px] h-[180px] mt-10 lg:mt-[75px] lg:w-[280px] lg:h-[280px] p-5 flex flex-col justify-between text-center rounded-[40px] lg:pt-[15px] relative overflow-hidden items-center">
            <div class="absolute top-0 left-0 bottom-0 right-0 bg-gradient-to-b from-black to-transparent opacity-30 z-[0] cursor-pointer"></div>
            <h3 class="text-[20px] lg:text-[31px] font-semibold relative z-1">
              ТАЙЛАНД
            </h3>
            <a href="" class="btn text-black inline-block py-[11px] px-4 lg:px-[20px] bg-[#FCD15B] text-[12px] lg:text-[15px] font-semibold rounded-[16px] relative z-1">
              О направлении
            </a>
          </div>
          <div class="countries_block mx-auto w-[180px] h-[180px] mt-[-33px] lg:mt-0 lg:w-[280px] lg:h-[280px] p-5 flex flex-col justify-between text-center rounded-[40px] lg:pt-[15px] relative overflow-hidden items-center">
            <div class="absolute top-0 left-0 bottom-0 right-0 bg-gradient-to-b from-black to-transparent opacity-30 z-[0] cursor-pointer"></div>
            <h3 class="text-[20px] lg:text-[31px] font-semibold relative z-1">
              МАЛЬДИВЫ
            </h3>
            <a href="" class="btn text-black inline-block py-[11px] px-4 lg:px-[20px] bg-[#FCD15B] text-[12px] lg:text-[15px] font-semibold rounded-[16px] relative z-1">
              О направлении
            </a>
          </div>
        </div>
      </div>
    </section>
  
    <section class="about" id="about">
      <div class="container">
        <h2 class="text-[40px] lg:text-[50px] font-semibold">
          О Компании
        </h2>
        <p class="text-[15px] lg:text-[20px] text-center">
          Мы - команда профессионалов в области туризма, стремящаяся сделать ваше путешествие незабываемым и беззаботным. Наша компания специализируется на создании индивидуальных и групповых туров по всему миру, а также предоставляет полный спектр туристических услуг.
        </p>
        <div class="rounded-t-[25px] lg:rounded-[80px] mt-[70px] mx-[43px] lg:mx-0 relative z-10">
          <div class="w-full rounded-t-[25px] lg:rounded-t-[80px] bg-[rgba(255,255,255,1)] h-[30px] lg:h-[133px] flex justify-center lg:gap-[130px] shadow-2xl">
            <span class="text-[15px] lg:text-[30px] font-semibold lg:py-[48px] flex items-center justify-center lg:block text-center w-full lg:w-[100px]">Наши</span>
            <img src="/images/employee.png" class="w-[38px] h-[38px] p-0 lg:w-[165px] lg:h-[165px] lg:p-[10px] bg-[rgba(255,255,255,1)] rounded-full">
            <span class="text-[15px] lg:text-[30px] font-semibold lg:py-[48px] flex items-center justify-center lg:block w-full lg:w-[100px] text-center">Сотрудники</span>
          </div>
        </div>
        <div class="bg-[rgba(255,255,255,0.4)] pt-[48px] pb-[15px] lg:pb-[28px] rounded-b-[25px] lg:rounded-b-[80px] text-center mx-[43px] lg:mx-0 backdrop-blur px-10 lg:px-[100px]">
          <div class="employee-content transition-all duration-300 overflow-hidden scale-y-0 !h-0">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px] justify-center pb-[64px]">
              @foreach($employees as $employee)
              <div class="rounded-[44px] bg-[rgba(255,255,255,0.8)] backdrop-blur-sm pt-[17px] pb-[28px] px-5">
                <img src="/storage/{{$employee['photo']}}" data-photo class="w-[128px] h-[128px] rounded-full mx-auto">
                <h3 class="text-[15px] font-semibold text-center mt-2"><span data-firstName>{{$employee['firstName']}}</span> <span data-lastName>{{$employee['lastName']}}</span></h3>
                <p class="text-[15px] text-center mt-2 pt-0"><span data-position>{{$employee['position']}}</span></p>
                <p class="text-[12px] text-center mt-2 pt-0 mb-[25px]"><span data-description>{{$employee['description']}}</span></p>
                <span data-timeStart class="hidden">{{substr($employee['timeStart'], 0, 5)}}</span>
                <span data-timeEnd class="hidden">{{substr($employee['timeEnd'], 0, 5)}}</span>
                <span data-phone class="hidden">{{$employee['phone']}}</span>
                <span data-city class="hidden">{{$employee['city']}}</span>
                <a class="open-btn btn px-[50px] py-[8px] text-[15px] bg-[#FCD15B] rounded-[38px]" target="modal" fields="city,firstName,lastName,position,description,timeStart,timeEnd,phone,photo">
                  Связаться
                </a>
              </div>
              @endforeach
            </div>
          </div>
          <div onclick="shrink()" class="transition-all rounded-[20px] px-[50px] lg:px-[100px] py-4 bg-white shadow-md cursor-pointer inline-block">
            <img src="/images/icons/arrow-down.svg" class="transition-all rotate-180 employee-btn">
          </div>
        </div>
      </div>
    </section>
    <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2503.923486839005!2d71.42794057631201!3d51.12831933832597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245841e0caadcf7%3A0x4f6ce0ff87111d39!2sBaiterek!5e0!3m2!1sen!2skz!4v1708608510663!5m2!1sen!2skz" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <footer class="" id="contacts">
      <div class="w-full md:h-[588px] h-[100vh] bg-[url(http://localhost:8000/images/footer-mob.jpg)] md:bg-[url(http://localhost:8000/images/footer.png)] bg-cover md:bg-[auto_101%]">
        <h2 class="md:hidden text-[35px] text-center font-semibold pt-10">
          Контакты
        </h2>
      </div>
      <div class="bg-[#002842] py-[55px] hidden md:block">
        <div class="container">
          <h2 class="text-white text-[35px] text-center font-semibold">
            Контакты
          </h2>
          <ul class="text-white text-[15px] justify-center gap-[70px] mt-[100px] hidden lg:flex">
            <li><a href="#tourvisor">Найти туры</a></li>
            <li><a href="">Горящие туры</a></li>
            <li><a href="#about">О компании</a></li>
            <li><a href="#sales">Акции</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <div id="modal" class="hidden w-full h-[100vh] left-0 top-0 py-10 px-6 md:p-10 fixed backdrop-blur-md overflow-y-auto z-50">
      <div class="max-w-[670px] border-[4px] mx-auto p-5 md:p-[53px] border-white rounded-[44px] bg-gradient-to-br from-[#F2EBA9] to-[rgba(156,255,249,.42)] backdrop-blur-sm">
        <div class="w-[283px] h-[283px] md:w-[420px] md:h-[420px] mx-auto flex justify-center items-center bg-cover bg-[url(http://localhost:8000/images/frame.svg)]">
          <img src="/storage/{{$employees[0]->photo}}" class="w-[231.67px] h-[231.67px] md:w-[343px] md:h-[343px] rounded-full" alt="" data-photo>
        </div>
        <h3 class="text-[20px] md:text-[40px] font-semibold text-center">
          <span data-firstName></span> <span data-lastName></span>
        </h3>
        <p class="text-[18px] md:text-[30px] text-center">
          <span data-position></span>
        </p>
        <p class="text-[16px] md:text-[20px] text-center">
          <span data-description></span>
        </p>
        <div class="text-center mt-5">
          <a href="" class="py-[6px] px-10 md:px-[82px] text-center text-[16px] md:text-[20px] inline-block bg-white rounded-[25px] font-semibold">
            <span data-phone></span>
          </a>
        </div>
        <p class="text-center text-[20px] font-semibold mt-4 md:mt-10">
          г.<span data-city></span>
        </p>
        <p class="text-center text-[20px] font-semibold mt-4 md:mt-10">
          Рабочие часы:
        </p>
        <p class="text-center text-[40px] font-semibold mt-4 md:mt-10">
          <span data-timeStart></span>-<span data-timeEnd></span>
        </p>
        <div class="text-center mt-4 md:mt-10">
          <a class="btn inline-block close-btn text-[20px] py-3 px-[65px] bg-white border border-black cursor-pointer rounded-[38px]">
            Свернуть
          </a>
        </div>
      </div>
    </div>
    <svg width="0" height="0" viewBox="0 0 1 1" preserveAspectRatio="none" fill="none" x="0" y="0" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <clipPath id="Apath" clipPathUnits="objectBoundingBox">
          <path id="wavepath" stroke-width="10" transform="scale(0.00052083, 0.00079617834)" d="M1919.5 1195.74L1817.4 1223.63L1693.83 1242.12L1693.81 1242.12L1565.97 1255.12H1494.99C1472.39 1255.12 1449.83 1253.32 1427.52 1249.74L1334.54 1234.82C1095.68 1196.5 915.707 997.068 902.018 755.541C894.117 616.124 778.759 507.119 639.119 507.119H253.034C144.501 507.119 49.2682 434.797 20.1323 330.248C12.3997 302.501 7.35536 274.075 5.06903 245.361L0.5 187.98V0.5H1919.5V1195.74Z" stroke="black"/>
        </clipPath>
        <clipPath id="way1" clipPathUnits="objectBoundingBox">
          <path transform="scale(0.00187013764, 0.00113406972)" d="M464.965 704.955C422.335 778.788 364.445 838.328 297.58 881.87V443.687H297.573C297.594 344.931 246.354 248.878 154.684 195.953C107.89 168.928 56.622 156.659 6.26744 157.692C0.459462 157.811 -1.68954 150.121 3.34591 147.213L244.605 7.92017C263.905 -3.21824 287.916 -2.45976 306.344 10.0692C531.114 162.938 603.057 465.76 464.965 704.955Z" fill="currentColor"/>
        </clipPath>
        <clipPath id="Bpath" clipPathUnits="objectBoundingBox">
          <path id="wavepath-bot" transform="scale(0.00052083, 0.00095238095)" d="M270.5 151C163.878 143.768 40.5 72.5 1 1V1051H373.5H1921V769.5C1635.4 770.3 1302.37 794 1053 470C784 120.5 528.5 168.5 270.5 151Z"/>
        </clipPath>
      </defs>
    </svg>
    <script src="main.js"></script>
    <script src="/scripts/glide.min.js"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script>
      // new Glide('.glide').mount()

      function shrink() {
        document.querySelector('.employee-content').classList.toggle('!h-0');
        document.querySelector('.employee-content').classList.toggle('scale-y-0');
        document.querySelector('.employee-btn').classList.toggle('rotate-180');
      }

      function openMenu() {
        document.querySelector('.mob-nav').classList.toggle('translate-x-[100%]');
        document.querySelector('.mob-btn').classList.toggle('rotate-90');
        // document.querySelector('.mob-btn').classList.toggle('mr-[232px]');
      }

      function open(event) {
        const parent = event.target.parentNode;
        const fields = event.target.getAttribute('fields').split(',');
        const modal = document.querySelector(`#${event.target.getAttribute('target')}`);
        document.body.style.overflowY = 'hidden';
        modal.classList.remove('hidden');

        modal.querySelector('.close-btn').addEventListener('click', () => {
          modal.classList.add('hidden');
          document.body.style.overflowY = 'auto';
        })

        fields.forEach(field => {
          const modalElem = modal.querySelector(`[data-${field}]`);
          const parentElem = parent.querySelector(`[data-${field}]`);
          if (modalElem.tagName === 'img' || parentElem.tagName === 'img')
            modalElem.src = parentElem.src;
          else
            modalElem.textContent = parentElem.textContent;
        });
      }

      document.querySelectorAll(`.open-btn[target]`).forEach(btn => {
        btn.addEventListener('click', open);
      })
    </script>
  </body>
  @include('vendor/popup')
</html>
