$(function () {
    $('select').material_select();
    $('.materialboxed').materialbox();
    let nbPointList = [];
    $('.nb-point').each((index, elem) => {
       nbPointList.push($(elem).val());
    });
    nbPointList = nbPointList.map(Number);
    $('.add').on('click',function(){
        let indexClick = $('.add').index(this);
        let nbPoint = nbPointList[indexClick];
        let $qty=$(this).closest('p').find('.quantity');
        let currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
            let nbCalculated = $qty.val() * nbPoint;
            $(this).parent().siblings('span').children('.nb-point').val(nbCalculated);
        }
    });
    $('.minus').on('click',function(){
        let indexClick = $('.minus').index(this);
        let nbPoint = nbPointList[indexClick];
        let $qty=$(this).closest('p').find('.quantity');
        let currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $qty.val(currentVal - 1);
            let nbCalculated = $qty.val() * nbPoint;
            $(this).parent().parent().siblings('span').children('.nb-point').val(nbCalculated);
        }
    });
});