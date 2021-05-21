$(document).ready(function () {
    console.log("okok");
});

function turnSide(){
    // $(".active").css(
    //     {"transform":  'rotateY(90deg)'}
    // );
    if($('.card-front').hasClass('active')){
        $(".card-front").removeClass('active').css({"transform":  'rotateY(90deg)'});
        $(".card-back").css({'opacity': "1"});
    }else{
        // $(".card-front").removeClass('d-none').addClass('d-block active');
        $(".card-front").addClass('active').css({"transform":  'rotateY(0)'});
        $(".card-back").css({'opacity': "0"});

    }
    
}