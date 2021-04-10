
$('#btn__conteudo').click(function (){
    $('#card__conteudo').show();
    $('section').fadeOut(500);
    $('#tx__prototipo').fadeOut(500);
});
$('btn_reset_conteudo').click(function (){
    $('#card__conteudo').hide();
    $('section').fadeIn(500);
    $('#tx__prototipo').fadeIn(500);
});
