//<![CDATA[
jQuery(function() {
 jQuery('.primary-nav a').each(function() {
   if (jQuery(this).attr('href')  ===  window.location.pathname) {
     jQuery(this).addClass('active');
   }
 });
});
//]]>


$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});