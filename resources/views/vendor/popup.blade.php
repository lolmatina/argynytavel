<div class="hidden popup flex items-center justify-center fixed left-0 right-0 top-0 bottom-0 z-50 w-[100vw] h-[100vh] bg-[rgba(0,0,0,0.3)] backdrop-blur-md overflow-y-auto px-5">
  <div class="z-[51] max-w-[600px] lg:max-w-[1163px] p-[25px] rounded-[50px] bg-gradient-to-b from-[rgba(59,229,199,.63)] to-[rgba(90,136,255,.57)] grid grid-cols-1 lg:grid-cols-2 gap-[25px]">
    <div class="popup-image rounded-[25px] hidden lg:block"></div>
    <div>
      <div class="bg-white rounded-[25px] text-center p-[25px]">
        <h2 class="text-[20px] md:text-[32.36px] md:leading-[32.36px] font-semibold">
          Оставьте заявку
        </h2>
        <p class="text-[15px] md:text-[20px] mt-[28px]">
          Получите консультацию в кротчайшие сроки
        </p>
      </div>
      <form class="bg-white rounded-[25px] p-[25px] mt-[25px]" action="/client/store" method="POST">
        @csrf
        <label for="name" class="block text-[15px] md:text-[20px]">
          Ваше имя
        </label>
        <input type="text" name="name" id="name" class="w-full bg-[#EEEEEE] border-[1px] border-[#C5C5C5] text-[15px] md:text-[20px] rounded-[12.5px] p-[13px] md:mt-[25px]">
        <label for="phone" class="block text-[15px] md:text-[20px] mt-[25px]">
          Номер мобильного телефона
        </label>
        <input type="text" name="phone" id="phone" class="w-full bg-[#EEEEEE] border-[1px] border-[#C5C5C5] text-[15px] md:text-[20px] rounded-[12.5px] p-[13px] md:mt-[25px]">
        <label for="city" class="block text-[15px] md:text-[20px] mt-[25px]">
          Город
        </label>
        <input type="text" name="city" id="city" class="w-full bg-[#EEEEEE] border-[1px] border-[#C5C5C5] text-[15px] md:text-[20px] rounded-[12.5px] p-[13px] md:mt-[25px]">
        <button type="submit" class="py-[17px] bg-[#FCD15B] border-[1px] border-[#C5C5C5] w-full text-[15px] md:text-[20px] font-semibold rounded-[12.5px] mt-[25px]">
          Отправить
        </button>
      </form>
    </div>
  </div>
  <div class="close absolute left-0 top-0 right-0 bottom-0 z"></div>
</div>
<style>
  .popup-image {
    background: url(/images/popup.jpg);
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
  }
</style>
<script src="https://unpkg.com/imask"></script>
<script>
  const btns  = document.querySelectorAll('.open-popup');
  const popup = document.querySelector('.popup');

  var phoneInput = document.getElementById('phone');
    
    // Apply input mask
  const mask = IMask(phoneInput, {
    mask: '+{7} (700) 000-00-00',
    placeholder: '_'
  });

  btns.forEach(element => {
    element.addEventListener('click', () => {
      popup.classList.remove('hidden');
      document.body.style.overflowY = 'hidden';
    })
  });

  popup.querySelector('.close').addEventListener('click', () => {
    popup.classList.add('hidden');
    document.body.style.overflowY = 'auto';
  })
</script>