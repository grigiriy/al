$("input[name='phone']").mask('+7(999) 999-9999');
$("input[name='your-tel']").mask('+7(999) 999-9999');

var wpcf7Elm = document.querySelectorAll('.wpcf7');

for (var i = 0; i < wpcf7Elm.length; i++) {
  wpcf7Elm[i].addEventListener(
    'wpcf7submit',
    function (event) {
      ym(65306272, 'reachGoal', 'zayavka');
      api_push(this);
    },
    false
  );
}
function api_push(e) {
  console.log('api push init');
  let slug = window.location.href;

  let num = $(e).find('div.form_source_id').text();
  let city = $('footer').data('city');

  let phone = $(e).find('input[name="your-tel"]').val();
  let name = $(e).find('input[name="your-name"]').val();
  let model = $(e).find('input[name="your-model"]').val();
  let year = $(e).find('input[name="your-year"]').val();

  // calc
  let dateto = $(e).find('input[name="calc_term"]').val();
  let every = $(e).find('input[name="calc_payment"]').val();
  let pocent = $(e).find('input[name="calc_rate_range"]').val();
  let total = $(e).find('#calc_payments_sum').text();
  let sumcr = $(e).find('input[name="calc_sum"]').val();

  console.log('sumcr', sumcr);
  console.log('dateto', dateto);
  console.log('every', every);
  console.log('pocent', pocent);
  console.log('total', total);
  console.log('slug', slug);
  console.log('num', num);
  console.log('city', city);

  $.post({
    url: '/wp-admin/admin-ajax.php',
    data: {
      action: 'send_request',

      city: city,
      dateto: dateto,
      every: every,
      pocent: pocent,
      total: total,
      sumcr: sumcr,
      slug: slug,
      num: num,
      phone: phone,
      name: name,
      model: model,
      year: year,
    },
    success: function (data) {
      console.log(data);
    },
    error: function (errorThrown) {
      console.log(errorThrown);
    },
  });
  return false;
}

function showCities(e) {
  // $(e).parent('ul').addClass('all_cities');
  $(e).parents('div.cities').fadeOut();
  setTimeout(() => {
    $(e).parents('div.cities').siblings('div.cities').fadeIn();
  }, 350);
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

// ymaps.ready(function () {
//   var coords = document.querySelector('footer').getAttribute('data-coords');
//   var address = document.querySelector('footer').getAttribute('data-address');
//   var myMap = new ymaps.Map(
//     'main-map',
//     {
//       center: coords.split(','),
//       zoom: 13,
//     },
//     {
//       searchControlProvider: 'yandex#search',
//     }
//   );
//   myMap.geoObjects.add(
//     new ymaps.Placemark(
//       coords.split(','),
//       {
//         balloonContent:
//           '<div class="balloon"><b>Автоломбард «ПТС ЗАЙМ»</b><br>' +
//           address +
//           '</div>',
//       },
//       {
//         preset: 'islands#icon',
//         iconColor: '#15008f',
//       }
//     )
//   );
// });

function toggleCallBack(e) {
  $(e).siblings('.callback-popover').fadeToggle(300);
  $(e).toggleClass('active');
}
$('#bot_hunter')
  .find('.slick')
  .slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    mobileFirst: true,
    slidesToScroll: 1,
    arrows: true,
    centerMode: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          centerMode: false,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          centerMode: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          initialSlide: 1,
        },
      },
    ],
  });
