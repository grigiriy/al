$("input[name='phone']").mask('+7(999) 999-9999');

function showCities(e) {
  $(e).parent('ul').addClass('all_cities');
}

function set_calc(e) {
  let val = $(e).parents('form').find('input#quiz').val().replace(/[^\d]/g, '');
  $('#calc_sum').val(val);
  document.getElementById('calc_sum_range').noUiSlider.set(val);
  calcResult();
  $('html,body').animate({ scrollTop: $('#calculator').offset().top }, 'slow');
}

$(document).ready(function () {
  $('.slick_mob:not(.slick_order)').slick({
    centerMode: true,
    mobileFirst: true,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: 'unslick',
      },
    ],
  });
});

$('.slick_mob.slick_order').slick({
  infinite: false,
  centerMode: true,
  mobileFirst: true,
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: 'unslick',
    },
  ],
});

ymaps.ready(function () {
  var coords = document.querySelector('footer').getAttribute('data-coords');
  var address = document.querySelector('footer').getAttribute('data-address');
  var myMap = new ymaps.Map(
    'main-map',
    {
      center: coords.split(','),
      zoom: 13,
    },
    {
      searchControlProvider: 'yandex#search',
    }
  );
  myMap.geoObjects.add(
    new ymaps.Placemark(
      coords.split(','),
      {
        balloonContent:
          '<div class="balloon"><b>Автоломбард «ПТС ЗАЙМ»</b><br>' +
          address +
          '</div>',
      },
      {
        preset: 'islands#icon',
        iconColor: '#15008f',
      }
    )
  );
});
