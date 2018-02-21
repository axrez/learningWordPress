const headerHeight = jQuery('header').height();

jQuery('#landing-btn').click((event) => {
    console.log('hello');
    jQuery('html, body').animate({ scrollTop: headerHeight }, 500);
})