
$(function(){
  $('#spmenubtn').on('click',function(){
    var spmenu = $('.c-spheadermenu');
    if($('.c-spbtn').hasClass('active')){
      $('.c-spbtn').removeClass('active');
      spmenu.removeClass('open');
    }else{
      $('.c-spbtn').addClass('active');
      spmenu.addClass('open');
    }
  });
});