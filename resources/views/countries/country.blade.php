<!DOCTYPE html>
<html lang="en">
<head>
  @php
  $title = 'Argyn Travel | '.$data['name'];
  // dd($data)
  @endphp
  @include('vendor/header')
</head>
<body class="pt-[145px] bg-gradient-to-b from-[#CAF6FC] to-white bg-cover">
  <header>
    <div class="container flex justify-between items-center">
      <h1 class="py-[11px] w-[567px] pl-[50px] rounded-[46px] bg-white text-[40px] font-semibold shadow-md">
        {{$data['name']}}
      </h1>
      <a href="/" class="block px-[109px] py-[11px] text-white bg-black rounded-[23px] font-medium text-[25px] shadow-md">
        На главную
      </a>
    </div>
  </header>
  <section class="mt-9">
    <div class="container">
      <div class="grid grid-cols-2 gap-[70px]">
        <div class="col-span-1 grid grid-cols-1">
          <p class="py-[26px] pl-[50px] pr-[170px] rounded-[46px] bg-white text-[20px] shadow-md">
            {{$data['description']}}
          </p>
        </div>
        <div class="col-span-1 grid grid-cols-1">
          <p class="py-[26px] pl-[50px] pr-[170px] rounded-[46px] bg-white text-[20px] shadow-md">
            {{$data['description']}}
          </p>
        </div>
      </div>
      <div class="grid grid-cols-4 gap-[70px] pt-[62px]">
        <div class="px-[55px] py-[11px] bg-white rounded-[56px] font-medium text-[25px] text-center shadow-md">
          Часовой пояс<br>
          <span class="text-[#FFB321] max-w-[140px] inline-block">{{$data['time']}}</span>
        </div>
        <div class="px-[55px] py-[11px] bg-white rounded-[56px] font-medium text-[25px] text-center shadow-md">
          Столица<br>
          <span class="text-[#FFB321] max-w-[140px] inline-block">{{$data['capital']}}</span>
        </div>
        <div class="px-[55px] py-[11px] bg-white rounded-[56px] font-medium text-[25px] text-center shadow-md">
          Язык<br>
          <span class="text-[#FFB321] max-w-[140px] inline-block">{{$data['language']}}</span>
        </div>
        <div class="px-[55px] py-[11px] bg-white rounded-[56px] font-medium text-[25px] text-center shadow-md">
          Валюта<br>
          <span class="text-[#FFB321] max-w-[140px] inline-block">{{$data['$currency']}}</span>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-[224px]">
    <div class="container">
      <div class="grid grid-cols-2 gap-[170px] py-[41px] px-[50px] bg-white rounded-[46px] shadow-md">
        <div class="py-[21px] px-[37px] bg-[#F4EFEC] rounded-[36px] text-center shadow-md">
          <h2 class="font-semibold text-[25px]">
            Расположение
          </h2>
          <p class="text-[15px] mt-2">
            {{$data['location']}}
          </p>
        </div>
        <div class="py-[21px] px-[37px] bg-[#F4EFEC] rounded-[36px] text-center shadow-md">
          <h2 class="font-semibold text-[25px]">
            Климат
          </h2>
          <p class="text-[15px] mt-2">
            {{$data['climate']}}
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-[77px]">
    <div class="container">
      <h2 class="font-semibold text-[30px] text-center leading-[160%]">
        ДОСТОПРИМЕЧАТЕЛЬНОСТИ
      </h2>
      <div class="grid grid-cols-1 gap-[70px]"></div>
      @foreach($attractions as $attraction)
      <div class="grid grid-cols-2 gap-[25px] mt-[70px]">
        <div class="col-span-1">
          <h3 class="font-semibold text-[35px] leading-[160%]">
            {{$attraction['name']}}
          </h3>
          <p class="text-[30px] leading-[160%] mt-3">
            {{$attraction['description']}}
          </p>
        </div>
        <div class="col-span-1">
          <img src="/storage/{{$attraction['image']}}" alt="">
        </div>
      </div>
      @endforeach
    </div>
  </section>
</body>
</html>