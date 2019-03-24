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
});