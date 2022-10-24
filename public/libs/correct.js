$(document).ready(function(){
    $('.nav-item__link').bind('click',function(){
        let status=  $(this).siblings('.nav-list__sub').css('display')
        if(status=='none')
        {
            $(this).siblings('.nav-list__sub').show();
        }
        else
        {
            $(this).siblings('.nav-list__sub').hide();
        }
    })

   /* $('.nav-list__sub').mouseout(function(){
        $(this).hide();
    })*/
})


const scroll_up=document.querySelector('#scroll_up');
const scroll_down=document.querySelector('#scroll_down');
scroll_up.addEventListener('click',function(){
    const scroll_block=document.querySelector('.section__title-medium');
    scroll_block.scroll(0,20);
})
scroll_down.addEventListener('click',function(){
    const scroll_block=document.querySelector('.section__title-medium');
    scroll_block.scroll(0,-20);
})
