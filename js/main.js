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
  $('.slick_mob').slick({
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
