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
      <header class="header">
        <div class="header_bg hidden md:block" style="--yOffset: 0%;">
          <div class="header_bg-girl"></div>
        </div>
        <div class="container">
          <nav>
            <div class="header_logo"></div>
            <ul class="hidden nav md:flex">
              <li class="nav-item">Найти туры</li>
              <li class="nav-item">Горящие туры</li>
              <li class="nav-item">О компании</li>
              <li class="nav-item">Акции</li>
              <li class="nav-item">Контакты</li>
            </ul>
          </nav>
          <section class="header_content">
            <h1 class="animate fade-in-left">
              Откройте мир <br>
              <span class="yellow">
                с нами
              </span>
              !
            </h1>
            <p class="animate fade-in-left max-w-[566px]">
              Наша миссия - сделать ваше путешествие незабываемым. Готовьтесь к увлекательным маршрутам, культурным впечатлениям и встречам, которые оставят след в вашем сердце.
            </p>
            <div class="header_buttons flex">
              <a class="animate btn fade-in-left open-popup py-[18px] px-3 bg-[#FCD15B] rounded-[10px] text-[20px]">
                Получить консультацию
              </a>
              <a class="animate btn fade-in-left py-[18px] px-3 bg-white border-[1px] border-black rounded-[10px] text-[20px]" href="#about">
                О компании
              </a>
            </div>
          </section>
        </div>
      </header>
      <section class="tourvisor">
        <div class="container">
          <h2>
            Выберите себе тур
          </h2>
          <div class="tv-search-form tv-moduleid-9965234"></div>
          <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </div>
      </section>
      <section class="services">
        <div class="services-bg"></div>
        <div class="services-bg_boy"></div>
        <div class="services-bg_mother"></div>
        <div class="container">
          <h2>
            Лучшие условия!
          </h2>
          <div class="services_content">
            <div class="service animate fade-in-right">
              <div class="service_icon">
                <img src="images/icons/folder.svg" alt="">
              </div>
              <span class="service_text">
                Доступ к эксклюзивным предложениям
              </span>
            </div>
            <div class="service animate fade-in-right">
              <div class="service_icon">
                <img src="images/icons/calendar.svg" alt="">
              </div>
              <span class="service_text">
                Индивидуальное планирование
              </span>
            </div>
            <div class="service animate fade-in-right">
              <div class="service_icon">
                <img src="images/icons/clock.svg" alt="">
              </div>
              <span class="service_text">
                Поддержка 24/7
              </span>
            </div>
            <a href="" class="btn animate fade-in-right rounded-[10px] bg-[#FCD15B] text-[25px] py-[18px] px-[62px]">
              Смотреть туры
            </a>
          </div>
        </div>
      </section>
      <div id="block">
        <svg width="2000" height="2160" viewBox="0 0 1910 2160" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path id="path" d="M2.5 1C48.6667 108.167 -68.5 730.75 452.5 861C720 927.875 815.499 1134.53 906 1317C1276 2063 1512 2124 1909.5 2157" stroke="#444444" stroke-opacity="0.3" stroke-width="5" stroke-dasharray="20 40"/>
        </svg>
        <div id="square">
          <img src="images/plane.svg">
        </div>
      </div>
    </div>
    <section class="sales">
      <div class="container">
        <h2 class="text-center font-semibold text-[50px]">
          Акции
        </h2>
        <div class="glide mt-[75px]">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              @foreach($countries as $country)
              <li class="glide__slide px-[160px]">
                <div style="background: url(/storage/{{$country['preview']}}); background-size: cover" class="w-full rounded-[60px] p-[46px] text-white">
                  <h3 class="text-[50px]">
                    {{$country['name']}}
                  </h3>
                  <p class="text-[25px] mt-[45px] max-w-[50%]">
                    {{$country['preview_text']}}
                  </p>
                  <a href="/offers/{{$country['id']}}" class="btn mt-[45px] inline-block py-3 px-[78px] bg-[#FCD15B] text-black text-[25px] font-semibold rounded-[32px]">
                    Об Акции
                  </a>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          <div data-glide-el="controls" class="flex items-center z-50 justify-center mt-[120px]">
            <button data-glide-dir="<" class="w-[114px] h-[114px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] rounded-full flex justify-center items-center">
              <img src="/images/icons/arrow-left.svg" alt="">
            </button>
            <div class="glide__bullet flex gap-[25px] mx-[53px] bg-white py-[11px] px-[32px] rounded-[22px]" data-glide-el="controls[nav]">
              @for($i = 0; $i < sizeof($countries); $i++)
              <button class="glide__bullet bg-black w-6 h-6 rounded-xl" data-glide-dir="={{$i}}"></button>
              @endfor
            </div>
            <button data-glide-dir=">" class="w-[114px] h-[114px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] rounded-full flex justify-center items-center">
              <img src="/images/icons/arrow-right.svg" alt="">
            </button>
          </div>
        </div>
      </div>
    </section>
    <section class="tours pt-[350px]">
      <div class="container">
        <h2 class="text-[50px] font-semibold">
          ГОРЯЩИЕ ТУРЫ
        </h2>
        <h3 class="text-[31px] font-medium">
          Следите за всеми доступными турами в нашем <span class="yellow">Telegram!</span>
        </h3>
        <p class="text-[20px]">
          Успейте воспользоваться нашими эксклюзивными предложениями и отправиться в незабываемое путешествие! Мы подготовили для вас лучшие горящие туры по выгодным ценам. Не упустите свой шанс!
        </p>
        <a href="" class="btn py-[14px] px-[104px] text-[20px] font-semibold rounded-[23px] bg-[#FCD15B]">
          Вступите в чат
        </a>
      </div>
    </section>
  
    <section class="countries relative">
      <div class="animate fade w-[1024px] h-[1024px] bg-black absolute top-0 right-[50%]" style="background: url(/images/countries.png); background-size: 100% 100%"></div>
      <div class="container">
        <div class="max-w-[100%] md:max-w-[50%] ml-auto">
          <h2 class="text-[50px] font-semibold animate fade-in-right">
            Наши Направления
          </h2>
          <h3 class="text-[31px] font-medium animate fade-in-right">
            Откройте для себя уникальные страны с нашими турами!
          </h3>
          <p class="text-[20px] animate fade-in-right">
            Погрузитесь в мир приключений с нашими увлекательными турами по различным странам мира. Мы предлагаем широкий выбор направлений, чтобы удовлетворить любые ваши путешественнические желания.
          </p>
          <a href="/countries" class="animate fade-in-right btn py-[14px] px-[89px] bg-[#FCD15B] text-[20px] font-semibold mt-[92px] rounded-[23px] inline-block">
            Смотреть страны
          </a>
        </div>
      </div>
    </section>

    <section class="pt-[220px] w-full pb-[125px]" style="background: url(/images/planes.svg); background-size: cover; background-position: 50% 50%">
      <div class="container">
        <h2 class="animate fade-in-right text-[30px] md:text-[50px] font-semibold w-[100%] md:w-[50%] ml-auto leading-[61px  ]">
          Самые <span class="yellow">популярные </span>направления:
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-[35px] mt-[62px] text-white">
          <div class="countries_block pt-[15px] relative overflow-hidden items-center">
            <div class="absolute top-0 left-0 bottom-0 right-0 bg-gradient-to-b from-black to-transparent opacity-30 z-[0] cursor-pointer"></div>
            <h3 class="text-[31px] font-semibold relative z-1">
              ВЬЕТНАМ
            </h3>
            <a href="" class="btn inline-block py-[11px] px-[20px] bg-[#FCD15B] text-[15px] font-semibold rounded-[16px] relative z-1">
              О направлении
            </a>
          </div>
          <div class="countries_block pt-[15px] relative overflow-hidden items-center">
            <div class="absolute top-0 left-0 bottom-0 right-0 bg-gradient-to-b from-black to-transparent opacity-30 z-[0] cursor-pointer"></div>
            <h3 class="text-[31px] font-semibold relative z-1">
              ШРИ-ЛАНКА
            </h3>
            <a href="" class="btn inline-block py-[11px] px-[20px] bg-[#FCD15B] text-[15px] font-semibold rounded-[16px] relative z-1">
              О направлении
            </a>
          </div>
          <div class="countries_block pt-[15px] relative overflow-hidden items-center">
            <div class="absolute top-0 left-0 bottom-0 right-0 bg-gradient-to-b from-black to-transparent opacity-30 z-[0] cursor-pointer"></div>
            <h3 class="text-[31px] font-semibold relative z-1">
              ТАЙЛАНД
            </h3>
            <a href="" class="btn inline-block py-[11px] px-[20px] bg-[#FCD15B] text-[15px] font-semibold rounded-[16px] relative z-1">
              О направлении
            </a>
          </div>
          <div class="countries_block pt-[15px] relative overflow-hidden items-center">
            <div class="absolute top-0 left-0 bottom-0 right-0 bg-gradient-to-b from-black to-transparent opacity-30 z-[0] cursor-pointer"></div>
            <h3 class="text-[31px] font-semibold relative z-1">
              МАЛЬДИВЫ
            </h3>
            <a href="" class="btn inline-block py-[11px] px-[20px] bg-[#FCD15B] text-[15px] font-semibold rounded-[16px] relative z-1">
              О направлении
            </a>
          </div>
        </div>
      </div>
    </section>
  
    <section class="about" id="about">
      <div class="container">
        <h2 class="text-[50px] font-semibold">
          О Компании
        </h2>
        <p class="text-[20px]">
          Мы - команда профессионалов в области туризма, стремящаяся сделать ваше путешествие незабываемым и беззаботным. Наша компания специализируется на создании индивидуальных и групповых туров по всему миру, а также предоставляет полный спектр туристических услуг.
        </p>
        <div class="rounded-[80px] mt-[70px]">
          <div class="w-full rounded-t-[80px] bg-[rgba(255,255,255,1)] h-[133px] flex justify-center gap-[130px] shadow-2xl">
            <span class="text-[30px] font-semibold py-[48px] inline-block w-[100px]">Наши</span>
            <img src="/images/employee.png" class="w-[165px] h-[165px] p-[10px] bg-[rgba(255,255,255,1)] rounded-full">
            <span class="text-[30px] font-semibold py-[48px] inline-block w-[100px]">Сотрудники</span>
          </div>
        </div>
        <div class="bg-[rgba(255,255,255,0.4)] pt-[48px] pb-[28px] rounded-b-[80px] text-center">
          <div class="rounded-[20px] px-[100px] py-4 bg-gradient-to-b from-[rgba(0,0,0,.2)] to-white cursor-pointer inline-block">

          </div>
        </div>
      </div>
    </section>
    <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2503.923486839005!2d71.42794057631201!3d51.12831933832597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245841e0caadcf7%3A0x4f6ce0ff87111d39!2sBaiterek!5e0!3m2!1sen!2skz!4v1708608510663!5m2!1sen!2skz" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <footer class="">
      <div style="background: url(/images/footer.png); background-size: auto 101%" class="w-full h-[588px]"></div>
      <div class="bg-[#002842] py-[55px]">
        <div class="container">
          <h2 class="text-white text-[35px] text-center font-semibold">
            Контакты
          </h2>
          <ul class="text-white text-[15px] flex justify-center gap-[70px] mt-[100px]">
            <li><a href="#tourvisor">Найти туры</a></li>
            <li><a href="">Горящие туры</a></li>
            <li><a href="#about">О компании</a></li>
            <li><a href="#sales">Акции</a></li>
          </ul>
        </div>
      </div>
    </footer>
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
    <script>
      new Glide('.glide').mount()
    </script>
  </body>
  @include('vendor/popup')
</html>
