$(document).ready(function(){
    $('#burger-btn').click(function(){
        $('#burger-btn').css('transform', 'rotate(360deg)');
        $('.header__list').slideToggle(400);
        $('.header__list').css('display', 'flex');
        $('.header__list-close').css('transform', 'rotate(0deg)');
    });
    $('.header__list-close').click(function(){
        $('.header__list').slideToggle(400);
        $('#burger-btn').css('transform', 'rotate(0deg)');
        $('.header__list-close').css('transform', 'rotate(-270deg)');
    });
});