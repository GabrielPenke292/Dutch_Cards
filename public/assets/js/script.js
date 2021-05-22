$(document).ready(function () {
    console.log("okok");
});

function turnSide(){
    if($('.card-front').hasClass('active')){
        $(".card-front").removeClass('active').css({"transform":  'rotateY(180deg)'});
        // $(".card-back").css({'opacity': "1"});
        $(".card-back").css({'transform': "rotateY(0)"});
    }else{
        $(".card-front").addClass('active').css({"transform":  'rotateY(0)'});
        $(".card-back").css({'transform': "rotateY(180deg)"});
        // $(".card-back").css({'transition-delay': "0"});
        // $(".card-back").css({'opacity': "0"});

    }
    
}