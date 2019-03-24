/**
 * divi-gym.js
 * 
 * Copyright 2017 Divi Center
 * http://divi.center
 */



jQuery(function($){
    jQuery(document).ready(function($){
$(".jtabs ul li").click(function(){
close();
var id=$(this).attr("id");
$(this).addClass("active");
var id="."+id;
close1();
$(".jtabs .tabs-content").find(id).addClass("active");
$(this).addClass("dc_main_gym_background_color_3");
$(this).find('h3').addClass("dc_main_gym_color_5");
$(this).find('b').addClass("dc_main_gym_color_5");
$(this).find('h3').removeClass("dc_main_gym_color_3");
$(this).find('b').removeClass("dc_main_gym_color_6");
})
});
function close()
{
jQuery(".jtabs ul li").each(function(){
jQuery(this).removeClass("active");
jQuery(this).find('h3').addClass("dc_main_gym_color_3");
jQuery(this).find('b').addClass("dc_main_gym_color_6");
jQuery(this).find('h3').removeClass("dc_main_gym_color_5");
jQuery(this).find('b').removeClass("dc_main_gym_color_5");
jQuery(this).removeClass("dc_main_gym_background_color_3");

});
}
function close1()
{
jQuery(".jtabs .tabs-content .tabc").each(function(){
jQuery(this).removeClass("active");

});
}



(function($) {
$(document).ready(function(){
$('.hover').hover(function(){
$(this).addClass('flip');
},function(){
$(this).removeClass('flip');
});
});
})(jQuery);
    
    jQuery(document).ready(function($){
$('#packs ul.pack1 li').on('click', function(){
    $('#packs ul.pack1 li.active').removeClass('active');
    $(this).addClass('active');
if($(this).attr("data")=="boxing")
{
var array = ['$30', '$50', '$80'];
}
else if($(this).attr("data")=="yoga")
{
var array = ['$12', '$20','$30'];
}
else if($(this).attr("data")=="fitness")
{
var array = ['$40', '$50', '$60'];
}
else if($(this).attr("data")=="cycling")
{
var array = ['$70', '$80', '$90'];
}
else if($(this).attr("data")=="pilates")
{
var array = ['$100', '$120', '$130'];
}

var once= array[0];
var ttimes= array[1];
var ftimes= array[2];

$('li#once').attr("data",once);
$('li#3times').attr("data",ttimes);
$('li#5times').attr("data",ftimes);
var val= $("ul.pack2 li.active").attr("data");
console.log(val);
$('#packs .total').text(val);
});
$('#packs ul.pack2 li').on('click', function(){
    $('#packs ul.pack2 li.active').removeClass('active');
    $(this).addClass('active');
var value= $(this).attr("data");
$('#packs .total').text(value);
});
});
    
    
    
    
    (function($) {
      
    function setup_collapsible_submenus() {
        var $menu = $('#mobile_menu'),
            top_level_link = '#mobile_menu .menu-item-has-children > a';
             
        $menu.find('a').each(function() {
            $(this).off('click');
              
            if ( $(this).is(top_level_link) ) {
                $(this).attr('href', '#');
            }
              
            if ( ! $(this).siblings('.sub-menu').length ) {
                $(this).on('click', function(event) {
                    $(this).parents('.mobile_nav').trigger('click');
                });
            } else {
                $(this).on('click', function(event) {
                    event.preventDefault();
                    $(this).parent().toggleClass('visible');
                });
            }
        });
    }
      
    $(window).load(function() {
        setTimeout(function() {
            setup_collapsible_submenus();
        }, 700);
    });


$('.current-menu-item > a').addClass('dc_main_gym_background_color_2 dc_main_gym_color_5');
$('.current-menu-item > a').hover(function(){

$('.current-menu-item > a').addClass('dc_main_gym_background_color_2 dc_main_gym_color_5');

});

$('#top-menu a').addClass('dc_main_gym_color_5');
$('#top-menu a').hover(function(){

$(this).not('.current-menu-item > a').toggleClass('dc_main_gym_background_color_2 dc_opacity');

});
$('.dc_gym_button').addClass('dc_main_gym_background_color_1 dc_main_gym_color_5 dc_main_gym_border_color_1');
$('.dc_gym_button').hover(function(){

$(this).toggleClass('dc_main_gym_background_color_1 dc_main_gym_color_2 dc_main_gym_color_5');

});

$('.dc_start_now_button').addClass('dc_main_gym_color_5 dc_main_gym_border_color_1');
$('.dc_start_now_button').hover(function(){

$(this).toggleClass('dc_main_gym_background_color_1 dc_main_gym_background_color_5 dc_main_gym_color_5 dc_main_gym_color_1');

});
$('#timer .values .value').addClass('dc_main_gym_background_color_5');
$('#timer .label').addClass('dc_main_gym_color_5');
$('#pricet .et_pb_pricing_table').not('.et_pb_featured_table').addClass('dc_main_gym_background_color_5');
$('#pricet .et_pb_pricing_heading h2').addClass('dc_main_gym_color_4');
$('#pricet .et_pb_sum').addClass('dc_main_gym_color_4');
$('#pricet .et_pb_frequency').addClass('dc_main_gym_color_4');
$('#pricet .et_pb_dollar_sign').addClass('dc_main_gym_color_4');
$('#pricet .et_pb_pricing_content li > span').addClass('dc_main_gym_color_4');
$('#pricet .et_pb_pricing_table_button').not('#pricet .et_pb_featured_table .et_pb_pricing_table_button').addClass('dc_main_gym_color_4 dc_main_gym_border_color_1 dc_main_gym_background_color_5');
$('#pricet .et_pb_pricing_table_button').not('#pricet .et_pb_featured_table .et_pb_pricing_table_button').hover(function(){

$(this).toggleClass('dc_main_gym_color_4 dc_main_gym_color_5 dc_main_gym_background_color_5 dc_main_gym_background_color_1');

});
$('#pricet .et_pb_featured_table.et_pb_pricing_table').addClass('dc_main_gym_background_color_1');
$('#pricet .et_pb_featured_table h2').addClass('dc_main_gym_color_5');
$('#pricet .et_pb_featured_table .et_pb_sum').addClass('dc_main_gym_color_5');
$('#pricet .et_pb_featured_table .et_pb_frequency').addClass('dc_main_gym_color_5');
$('#pricet .et_pb_featured_table .et_pb_dollar_sign').addClass('dc_main_gym_color_5');
$('#pricet .et_pb_featured_table .et_pb_pricing_content li > span').addClass('dc_main_gym_color_5');
$('#pricet .et_pb_featured_table .et_pb_pricing_table_button').addClass('dc_main_gym_color_1 dc_main_gym_border_color_5 dc_main_gym_background_color_5');
$('#pricet .et_pb_featured_table .et_pb_pricing_table_button').hover(function(){

$(this).toggleClass('dc_main_gym_background_color_5 dc_main_gym_background_color_1 dc_main_gym_color_1 dc_main_gym_color_5');

});
$('#testinfo .et_pb_column img').addClass('dc_main_gym_border_color_1');
$('#testinfo .et_pb_column').hover(function(){

$(this).toggleClass('dc_main_gym_border_color_1');

});

$('#glry .et_overlay ').addClass('dc_main_gym_background_color_1 dc_main_gym_color_4');
$('.et_pb_newsletter_form p input').addClass('dc_main_gym_background_color_5 dc_main_gym_color_6 dc_main_gym_border_color_5');
$('.et_pb_newsletter_button').addClass('dc_main_gym_background_color_5 dc_main_gym_color_1 dc_main_gym_border_color_1');
$('.et_pb_newsletter_button').hover(function(){

$('.et_pb_newsletter_button').toggleClass('dc_main_gym_background_color_5 dc_main_gym_background_color_1 dc_main_gym_color_1 dc_main_gym_color_5 dc_main_gym_border_color_1 dc_main_gym_border_color_5');


});
$('#contf input').addClass('dc_main_gym_color_5 dc_main_gym_border_color_6');


$('#contf input').focusin(function(){

$(this).toggleClass('dc_main_gym_color_1 dc_main_gym_border_color_1 dc_main_gym_color_5 dc_main_gym_border_color_6');


}).focusout(function(){

$(this).toggleClass('dc_main_gym_color_1 dc_main_gym_border_color_1 dc_main_gym_color_5 dc_main_gym_border_color_6');

});


$('#contf textarea').addClass('dc_main_gym_color_5 dc_main_gym_border_color_6');
$('#contf textarea').focusin(function(){

$(this).toggleClass('dc_main_gym_color_1 dc_main_gym_border_color_1 dc_main_gym_color_5 dc_main_gym_border_color_6');


}).focusout(function(){

$(this).toggleClass('dc_main_gym_color_1 dc_main_gym_border_color_1 dc_main_gym_color_5 dc_main_gym_border_color_6');

});
$('#contf .et_pb_contact_submit ').not('.dc_button_trainer_form #contf .et_pb_contact_submit').addClass('dc_main_gym_color_5 dc_main_gym_border_color_5');
$('.dc_button_trainer_form #contf .et_pb_contact_submit').addClass('dc_main_gym_color_1 dc_main_gym_border_color_1');
$('.dc_button_trainer_form #contf .et_pb_contact_submit').addClass('dc_main_gym_color_1 dc_main_gym_border_color_1');
$('.dc_button_trainer_form #contf .et_pb_contact_submit').addClass('dc_main_gym_color_1 dc_main_gym_border_color_1');
$('.dc_button_trainer_form #contf .et_pb_contact_submit').addClass('dc_main_gym_color_1 dc_main_gym_border_color_1');
$('#contf .et_pb_contact_submit').hover(function(){

$(this).toggleClass('dc_main_gym_border_color_1 dc_main_gym_background_color_1 dc_main_gym_border_color_5');

});
$('.dc_button_trainer_form #contf .et_pb_contact_submit').hover(function(){

$(this).toggleClass('dc_main_gym_color_1 dc_main_gym_color_5 dc_main_gym_background_color_1');

});
$('.service_block_icon').addClass('dc_main_gym_color_5');
$('.dc_about_icon').addClass('dc_main_gym_color_1');
$('.aboutim img').addClass('dc_main_gym_color_box_shadow_about_1');
$('.et_pb_video_play').addClass('dc_main_gym_color_1');
$('#ncounter h3').addClass('dc_main_gym_color_4');
$('#ncounter .percent').addClass('dc_main_gym_border_color_2');
$('#ncounter .percent-value').addClass('dc_main_gym_color_1');
$('#barcounter .et_pb_counter_amount').addClass('dc_main_gym_color_5');
$('#barcounter .et_pb_counter_title').addClass('dc_main_gym_color_4');
$('#barcounter .et_pb_counter_container').addClass('dc_main_gym_background_color_1');
$('#barcounter .et_pb_counter_amount').addClass('dc_main_gym_background_color_2');
$('.sched .tab > h4').addClass('dc_main_gym_color_5');
$('.sched .tcontent h3.title').addClass('dc_main_gym_color_5');
$('.sched .tcontent p').addClass('dc_main_gym_color_6');
$('.dc_blog_grid_about .entry-title a').addClass('dc_main_gym_color_4');
$('.dc_blog_grid_about  .post-content p').addClass('dc_main_gym_color_6');
$('.dc_blog_grid_about  span.published').addClass('dc_main_gym_color_5 dc_main_gym_background_color_1');
$('#modblog.et_pb_blog_grid p.post-meta a').addClass('dc_main_gym_color_5 dc_main_gym_background_color_1');
$('.nav li ul').addClass('dc_main_gym_border_color_1');
$('#st .et_pb_social_network_link > a').addClass('dc_main_gym_background_color_1');
$('#traininfo .dc_working_day').addClass('dc_main_gym_border_color_1 dc_main_gym_background_color_5 dc_main_gym_color_1');
$('#traininfo .dc_working_day').hover(function(){

$(this).toggleClass('dc_main_gym_border_color_1 dc_main_gym_border_color_5 dc_main_gym_color_1 dc_main_gym_color_5 dc_main_gym_background_color_1 dc_main_gym_background_color_5');

});
$('#main-header .nav li ul').addClass('dc_main_gym_background_color_4');
$('.tagcloud a').addClass('dc_main_gym_background_color_1 dc_main_gym_color_5 dc_main_gym_border_color_1');
$('.tagcloud a').hover(function(){

$(this).toggleClass('dc_main_gym_background_color_1 dc_main_gym_background_color_5 dc_main_gym_color_5 dc_main_gym_color_1');

});

$('#modblog.et_pb_blog_grid p.post-meta span.published').addClass('dc_main_gym_background_color_1 dc_main_gym_color_5');
$('blockquote').addClass('dc_main_gym_border_color_1');
$('.single-post h1.entry-title').addClass('dc_main_gym_color_1');
$('a').addClass('dc_main_gym_color_1');
$('.single-post h1,.single-post h2,.single-post h3,.single-post h4,.single-post h5,.single-post h6').addClass('dc_main_gym_color_4');
$('.single-post p').addClass('dc_main_gym_color_6');
$('.single-post li').addClass('dc_main_gym_color_6');
$('#aboutmewidget-3 > div').addClass('dc_main_gym_color_6');
$('#commentform .form-submit .et_pb_button').addClass('dc_main_gym_color_5 dc_main_gym_border_color_1 dc_main_gym_background_color_1');
$('#commentform .form-submit .et_pb_button').hover(function(){

$('#commentform .form-submit .et_pb_button').toggleClass('dc_main_gym_color_5 dc_main_gym_color_1 dc_main_gym_background_color_1 dc_main_gym_background_color_5');

});






})(jQuery);
    
});
