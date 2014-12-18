$(document).ready(function(){
    $('.answer-selected').addClass('invisible');
    $('.btn-view-answer').click(function(){
        $('.answer-selected').removeClass('invisible');
    });
    
    $('.answer-user').hide();
    $('.btn-suggest-answer').click(function(){
        $('.answer-user').slideDown('fast');
    });
    
    $('.btn-cancel-answer').click(function(){
        $('.answer-user').slideUp('fast');
    });
    
});