$(document).ready(function () {
    console.log("okok");
});

function turnSide(){
    $("#cardWord").css({"transform":  'rotateY(180deg)'});
    $("#duthWord").removeClass('d-block').addClass('d-none');
    $("#englishWord").removeClass('d-none').addClass('d-block');
}