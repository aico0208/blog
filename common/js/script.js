
$(function(){
  $('#spmenubtn').on('click',function(){
    if($('#menu').hasClass('open')){
      $('#menu').removeClass('open');
    }else{
      $('#menu').addClass('open');
    }

    if(this.hasClass('active')){
      this.removeClass('active');
    }else {
      this.addClass('active');
    }
  });
});