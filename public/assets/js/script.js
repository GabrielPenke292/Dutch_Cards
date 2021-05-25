$(document).ready(function () {
    console.log("okok");
});

function turnSide(){
    if($('.card-front').hasClass('active')){
        $(".card-front").removeClass('active').css({"transform":  'rotateY(180deg)'});
        $(".card-back").css({'transform': "rotateY(0)"});
    }else{
        $(".card-front").addClass('active').css({"transform":  'rotateY(0)'});
        $(".card-back").css({'transform': "rotateY(180deg)"});

    }
}

function nextWord(){
    $.ajax({
        type: "GET",
        url: "getAllWords",
        // data: "data",
        dataType: "json",
        success: function (response) {
            let randomWord;

            do{
                randomWord = response[Math.floor(Math.random() * response.length)];
            }while(randomWord['word_dutch'] == $("#dutchWord").html() );

            // console.log(randomWord);
            $("#dutchWord").html(randomWord['word_dutch']);
            $("#englishWord").html(randomWord['word_english']);
            
        }

    });
}