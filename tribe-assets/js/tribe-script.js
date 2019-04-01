jQuery(document).ready(function(){
  jQuery('#member-search').on("keyup", function(){
    searchname = jQuery(this).val();
    if (searchname !== '' && searchname.length > 2) {
      jQuery.ajax({
        type:"post",
        url : myAjax.ajaxurl,
        dataType: "text",
        data: {
          action: "getuser_list",
          searchname : searchname,
        },
        success: function(results){
          jQuery('#profile-livesearch').html('');
          jQuery('#profile-livesearch').append(results);
        },
        error: function(results) {
          jQuery('#profile-livesearch').html('');
          jQuery('#profile-livesearch').append(results);
        }
      }); 
    }else{
        jQuery('#profile-livesearch').html('');
    }
  });
  jQuery('#post-search').on("keyup", function(){
    searchtag = jQuery(this).val();
    if (searchtag == '') {
      jQuery('#post-livesearch').html('');
    }else{
      jQuery.ajax({
        type:"post",
        url : myAjax.ajaxurl,
        dataType: "text",
        data: {
          action: "getposts_list",
          searchtag : searchtag,
        },
        success: function(results){
          jQuery('#post-livesearch').html('');
          jQuery('#post-livesearch').append(results);
        },
        error: function(results) {
          jQuery('#post-livesearch').html('');
          jQuery('#post-livesearch').append(results);
        }
      });
    }
  });
  jQuery('ul.tabs li').click(function(){
    var tab_id = jQuery(this).attr('data-tab');

    jQuery('ul.tabs li').removeClass('current');
    jQuery('.tab-content').removeClass('current');

    jQuery(this).addClass('current');
    jQuery("#"+tab_id).addClass('current');
  });
  jQuery('.tribe-close-btn').click(function(){
    jQuery(this).parents('.tribe-popup-content').fadeOut();
    var videosrc = '';
    jQuery('#tribe__video').attr('src', videosrc);
  });
  jQuery('.tribe-popup').click(function(){
    var videosrc = jQuery(this).attr('data-video');
    videosrc = videosrc + '?autoplay=1';
    jQuery('.tribe-popup-content').show();
    jQuery('#tribe__video').attr('src', videosrc);
   // jQuery('#tribe__video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
  
});
});



