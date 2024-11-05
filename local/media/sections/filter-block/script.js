document.addEventListener('DOMContentLoaded', () => {
    const sorter = document.body.querySelector('[data-filter="sort"]') || false;
    if (sorter) {
        function closeSorter(e) {
            if (!e.target.closest('[data-filter="sort"]')) {
                sorter.classList.remove('is-selected');
            }
        }
        window.addEventListener('click', closeSorter)
        sorter.addEventListener('click', function (e) {
            this.classList.toggle('is-selected');
        })
    }
})
// /*=== Open desktop filter sections ===*/
// $('body').on('click', '[data-filter]', function() {
//   var activeFilterBlock = $(this).data('filter');

//   $('[data-filter-section="'+activeFilterBlock+'"]').addClass('active');
// });
// /*=== end ===*/


// /*=== Close desktop filter sections ===*/
// $('body').on('click', '[data-filter-close]', function() {
//     $('[data-filter-section]').removeClass('active');
// });

// // $('body').on('click', '[data-filter-section]', function(e) {
// //     var clickedEl = $(e.target);

// //     if ( clickedEl.hasClass('filters-section') ) {
// //         $('[data-filter-section]').removeClass('active');
// //     };
// // });
// /*=== end ===*/


// /*=== Init price range slider ===*/
// $('[data-price-range="block"]').each( function() {
//   var rangeRow = $(this).find('[data-price-range="row"]');
//   var rangePriceFrom = $('[data-price-range="from"]');
//   var rangePriceTo = $('[data-price-range="to"]');
//   var rangePriceMin = +$('[data-price-min]').data('price-min').replace(/ /g, '');
//   var rangePriceMax = +$('[data-price-max]').data('price-max').replace(/ /g, '');

//   rangeRow.slider({
//     animate: "slow",
//     range: true,    
//     min: rangePriceMin,
//     max: rangePriceMax,
//     values: [ rangePriceMin, rangePriceMax ],
//     slide : function(event, ui) {    
//       rangePriceFrom.val( ui.values[0] );
//       rangePriceTo.val( ui.values[1] );    
//     }
//   });
//   rangePriceFrom.val( rangePriceMin );
//   rangePriceTo.val( rangePriceMax );

//   rangePriceFrom.on('keyup', function() {
//     if ( +$(this).val() >= rangePriceMax ) {
//       rangePriceMin = rangePriceMax;
//       $(this).val(rangePriceMax);
//     } else {
//       rangePriceMin = +$(this).val();
//     };
//     rangeRow.slider('values', 0, rangePriceMin);
//   });

//   rangePriceTo.on('keyup', function() {
//     if ( +$(this).val() <= rangePriceMin ) {
//       rangePriceMax = rangePriceMin;
//       $(this).val(rangePriceMin);
//     } else {
//       rangePriceMax = +$(this).val();
//     };
//     rangePriceMax = +$(this).val();
//     rangeRow.slider('values', 1, rangePriceMax);
//   });
// });
// /*=== end ===*/

// $('body').on('click', '[filters-mobile="toggler"]', function() {
//   $(this).toggleClass('active');
//   $(this).next('[filters-mobile="block"]').slideToggle();
// });