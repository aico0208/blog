
$(function(){
  $('#spmenubtn').on('click',function(){
    if($('.c-spbtn').hasClass('active')){
      $('.c-spbtn').removeClass('active');
      $('.c-spheadermenu').removeClass('open');
    }else{
      $('.c-spbtn').addClass('active');
      $('.c-spheadermenu').addClass('open');
    }
  });
});