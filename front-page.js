const headerHeight = jQuery('header').height();
const omHeight = headerHeight + jQuery('header').height();

jQuery('#landing-btn').click((event) => {
    event.preventDefault();
    jQuery('html, body').animate({ scrollTop: headerHeight }, 500);
})

jQuery('#menu-item-8').click((event) => {
    jQuery('html, body').animate({ scrollTop: headerHeight }, 500);
})