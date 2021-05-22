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

function nextWord(words){
    console.log("função next word");
    // console.log(words);

    $.ajax({
        type: "GET",
        url: "getAllWords",
        // data: "data",
        dataType: "json",
        success: function (response) {
            console.log(response);
            // console.log(response.length);
            let randomWord = response[Math.floor(Math.random() * response.length)];
            console.log(randomWord);
            $("#dutchWord").html(randomWord['word_dutch']);
            $("#englishWord").html(randomWord['word_english']);
        }

    });
}