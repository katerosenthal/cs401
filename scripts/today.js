$(function(){
    $('.checkbox').click(function(){
        $(this).closest('li').find('.taskitem').toggleClass('checked');
    });
});