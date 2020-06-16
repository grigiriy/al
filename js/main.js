var $ = jQuery;

$("input[name='phone']").mask('+7(999) 999-9999');

function showCities(e) {
  $(e).parent('ul').addClass('all_cities');
}
