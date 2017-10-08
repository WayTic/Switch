$(document).ready(function(){
    $('.url_item').click(function(){
        var padre = $(this).siblings('.modal_user');
        var hijo = padre.children('.cont_user');
        var nieto = hijo.children('.txt_user');
        $(nieto).html('<h1>'+ $(this).children('.cont_item').children('p').text() +'</h1>');
        $(padre).css('top','0');
        $('body').css('overflow', 'hidden');
    });

    $('.btn_aceptar').click(function(){
        $('.modal_user').css('top','100%');
        $('body').css('overflow', 'initial');
    });
})