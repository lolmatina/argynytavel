<!DOCTYPE html>
<html lang="en">
<head>
  @php
  // dd($offers, $hotels);
  $title = 'Argyn Travel | '.$country['name']
  @endphp
  @include('vendor/header')
  <link rel="stylesheet" href="/styles/glide.core.min.css">
</head>
<body>
  <style>
    #header{
      background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%, rgba(217,217,217,0) 760px), url(/storage/{{$country['image_mobile']}});
      background-size: cover;
      background-position: 50% 50%;
    }

    @media(min-width: 768px) {
      #header {
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%, rgba(217,217,217,0) 760px), url(/storage/{{$country['image']}});
        background-size: 1920px 100%;
      }
    }
  </style>
  <section id="header" class="h-[100vh] md:h-[1862px] text-center text-white pt-2 px-2 md:pt-[66px]">
    <div class="container">
      <a href="/" class="inline-block font-medium text-[25px] rounded-[23px] bg-black text-white py-3 px-[109px]">
        На главную
      </a>
      <p class="text-[15px] mt-4 md:text-[30px] md:mt-[63px]">
        Успейте приобрести
      </p>
      <h2 class="text-[30px] md:text-[100px] md:leading-[100px] font-bold mt-2 md:mt-4">
        {{$country['name']}}
      </h2>
      <p class="md:mt-4 text-[15px] md:text-[61.8px] font-medium">
        {{$country['description']}}
      </p>
      <p class="text-[15px] mt-3 md:mt-[34px] md:text-[40px] py-3 md:py-[25px] px-[28px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] inline-block rounded-[34px]">
        {{$country['offer']}}
      </p>
      <div class="text-center mt-10 hidden md:block">
        <a href="#offers" class="inline-flex w-[70px] h-[70px] bg-[#FBA81F] justify-center items-center rounded-full">
          <img src="/images/icons/arrow-down.svg" class="rotate-180">
        </a>
      </div>
    </div>
  </section>
  <section class="bg-[#FFF0C8] pt-10 md:pt-[308px] pb-[180px] md:pb-0" id="offers">
    <div class="container">
      <div class="bg-white rounded-[45px] pb-[49px]">
        <div class="offers relative">
          <div data-glide-el="controls" class="absolute flex items-center z-50 left-[50%] translate-x-[-50%] bottom-[-180px] md:bottom-auto md:top-[360px]">
            <button data-glide-dir="<" class="w-[114px] h-[114px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] rounded-full flex justify-center items-center">
              <img src="/images/icons/arrow-left.svg" alt="">
            </button>
            <div class="glide__bullet flex gap-[25px] mx-[53px]" data-glide-el="controls[nav]">
              @for($i = 0; $i < sizeof($offers); $i++)
              <button class="glide__bullet bg-black w-6 h-6 rounded-xl" data-glide-dir="={{$i}}"></button>
              @endfor
            </div>
            <button data-glide-dir=">" class="w-[114px] h-[114px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] rounded-full flex justify-center items-center">
              <img src="/images/icons/arrow-right.svg" alt="">
            </button>
          </div>
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              @foreach($offers as $offer_)
              <li class="glide__slide px-2 py-2 md:py-0 md:px-[30px]">
                <h3 class="py-3 md:py-[36px] text-center rounded-[45px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] text-[20px] md:text-[50px] text-white font-semibold">
                  {{$offer_['name']}}
                </h3>
                <p class="text-[20px] md:text-[40px] font-medium text-center mt-4 md:mt-[81px]">
                  {{$offer_['info']}}
                </p>
                <div class="grid md:grid-cols-2 gap-[30px] md:mt-[268px] mt-4">
                  <div class="rounded-[20px] bg-[#D0D0D0]">
                    <h4 class="hidden md:block rounded-[20px] bg-black text-[40px] font-medium text-white text-center py-[24px]">
                      Важное инфо об акции
                    </h4>
                    <div class="description px-[65px] py-[82px] text-[20px]">
                      {!!$offer_['description']!!}
                    </div>
                  </div>
                  <div class="grid grid-cols-1 md:grid-rows-3">
                    <div class="hidden md:block rounded-[20px] row-span-2 bg-[#D0D0D0]">
                      <h4 class="rounded-[20px] bg-black text-[40px] font-medium text-white text-center py-[24px]">
                        Дополнительно
                      </h4>
                      <div class="additionalInfo px-[65px] pt-[58px] text-[20px]">
                        {!!$offer_['additionalInfo']!!}
                      </div>
                    </div>
                    <div class="grid grid-cols-2 gap-[15px] mt-4">
                      <div class="rounded-[20px] row-span-2 bg-[#D0D0D0]">
                        <h4 class="rounded-[20px] bg-black text-[15px] md:text-[20px] font-medium text-white text-center py-3 md:py-[24px]">
                          Окно бронирования
                        </h4>
                        <p class="flex items-center justify-center py-[40px] text-center text-[12px] md:text-[20px] font-semibold">
                          @php
                          if (!$offer_['bookingStart'])
                            echo str_replace('-', '.', $offer_['bookingStart']);
                          else
                            echo str_replace('-', '.', $offer_['bookingStart']) . ' - ' . str_replace('-', '.', $offer_['bookingEnd']);
                          @endphp
                        </p>
                      </div>
                      <div class="rounded-[20px] row-span-2 bg-[#D0D0D0]">
                        <h4 class="rounded-[20px] bg-black text-[15px] md:text-[20px] font-medium text-white text-center py-3 md:py-[24px]">
                          Окно проживания
                        </h4>
                        <p class="flex items-center justify-center py-[40px] text-center text-[12px] md:text-[20px] font-semibold">
                          @php
                          if (!$offer_['bookingStart'])
                            echo str_replace('-', '.', $offer_['livingStart']);
                          else
                            echo str_replace('-', '.', $offer_['livingStart']) . ' - ' . str_replace('-', '.', $offer_['livingEnd']);
                          @endphp
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <a class="text-black open-popup text-[25px] font-semibold rounded-[21px] cursor-pointer ml-auto md:mt-[57px] w-full md:w-auto py-3 mt-3 md:py-5 md:px-[184px] bg-[#FDD671] inline-block">Оформить тур</a>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="container mt-[200px]">
      <div class="hotels glide relative">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach($hotels as $hotel)
              <li class="glide__slide">
                <div class="bg-white p-4">
                  <div --bg="{{$hotel['image']}}" class="bg-[url(var(--bg))]">
                  </div>

                </div>
              </li>
            @endforeach
          </ul>
        </div>
        <div data-glide-el="controls" class="absolute flex items-center z-50 left-[50%] translate-x-[-50%] top-[360px]">
          <button data-glide-dir="<" class="w-[114px] h-[114px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] rounded-full flex justify-center items-center">
            <img src="/images/icons/arrow-left.svg" alt="">
          </button>
          <div class="glide__bullet flex gap-[25px] mx-[53px]" data-glide-el="controls[nav]">
            @for($i = 0; $i < sizeof($offers); $i++)
            <button class="glide__bullet bg-black w-6 h-6 rounded-xl" data-glide-dir="={{$i}}"></button>
            @endfor
          </div>
          <button data-glide-dir=">" class="w-[114px] h-[114px] bg-gradient-to-r from-[#F87537] to-[#FBA81F] rounded-full flex justify-center items-center">
            <img src="/images/icons/arrow-right.svg" alt="">
          </button>
        </div>
      </div>
    </div>
  </section> --}}
  @include('/vendor/popup')
  <script src="/scripts/glide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/editorjs-html@3.4.0/build/edjsHTML.js"></script>
  <script>
    new Glide('.offers').mount()
    const description = document.querySelectorAll('.description');
    const additionalInfo = document.querySelectorAll('.additionalInfo');
    const edjsParser = edjsHTML();

    description.forEach(element => {
      const content = element.innerHTML;
      let html = edjsParser.parse(JSON.parse(content));
      element.innerHTML = "";
      html.forEach(elem => {
        element.innerHTML+=elem;
      })
    });

    additionalInfo.forEach(element => {
      const content = element.innerHTML;
      let html = edjsParser.parse(JSON.parse(content));
      element.innerHTML = "";
      html.forEach(elem => {
        element.innerHTML+=elem;
      })
    });
  </script>
  <style>
    .glide__bullet--active {
      background: #B5B5B5;
    }

    .additionalInfo li, .description li {
      display: list-item;
    }

    .additionalInfo ol, .description ol {
      list-style: decimal
    }

    .additionalInfo ul, .description ul {
      list-style: bullets;
    }
  </style>
</body>
</html>