jQuery(document).ready(function(){
    sliderLogoPartner();
    sliderTradeMarkViet();
    questAnswer();
    menuMobHandler();
});

function sliderLogoPartner(){
  jQuery('.list-logo').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
}
function sliderTradeMarkViet(){
  jQuery('.slide-trademark-viet').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    prevArrow:`<div class="mc-prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" viewBox="0 0 12 6" fill="none">
<path d="M2.9925 3.75L12 3.75V2.25L2.9925 2.25V0L0 3L2.9925 6V3.75Z" fill="#0098D1"/>
</svg></div>`,
    nextArrow:`<div class="mc-next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" viewBox="0 0 12 6" fill="none">
<path d="M9.0075 2.25H0L0 3.75H9.0075V6L12 3L9.0075 0V2.25Z" fill="#0098D1"/>
</svg></div>`,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 770,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
}

function questAnswer(){
  const faqItems = document.querySelectorAll('.faq-item');
  if(faqItems){
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      const arrow = item.querySelector('.arrow');
  
      question.addEventListener('click', () => {
          // Nếu câu trả lời đã hiển thị, thì ẩn nó đi
          if (answer.style.display === 'block') {
              
              arrow.classList.remove('up');
              answer.style.maxHeight = 0;
              answer.style.transition = "max-height 0.4s ease";
              setTimeout(() => {
                answer.style.display = 'none';
              }, 100);
          } else {
              // Đóng tất cả các câu hỏi khác
              faqItems.forEach(i => {
                  const otherAnswer = i.querySelector('.faq-answer');
                  const otherArrow = i.querySelector('.arrow');
                  if (otherAnswer.style.display === 'block') {
                      
                      otherArrow.classList.remove('up');
                      otherAnswer.style.maxHeight = 0;
                      otherAnswer.style.transition = "max-height 0.4s ease";
                      setTimeout(() => {
                        otherAnswer.style.display = 'none';
                      }, 100);
                  }
              });
              
              // Hiển thị câu trả lời cho câu hỏi hiện tại
              answer.style.display = 'block';
              arrow.classList.add('up');
              answer.style.maxHeight = answer.scrollHeight + 'px';
          }
      });
  });
  }
}

function menuMobHandler(){
  let barMobOpenMenu = document.querySelector(".bar-mob-open-menu");
  let menuMobile = document.querySelector(".menu-mobile-hanlder");
  let overLaymenuMobile = document.querySelector(".overlay-menu-mob");
  let closeMenuMob = document.querySelector(".cls-menu-mob");
  
  if(barMobOpenMenu){
    barMobOpenMenu.onclick = ()=>{
      menuMobile.style.display = "block";
      overLaymenuMobile.style.display = "block";
    }
  }
  if(closeMenuMob){
    closeMenuMob.onclick = ()=>{
      menuMobile.style.display = "none";
      overLaymenuMobile.style.display = "none";
    }
  }
  if(overLaymenuMobile){
    overLaymenuMobile.onclick = ()=>{
      menuMobile.style.display = "none";
      overLaymenuMobile.style.display = "none";
    }
  }
}