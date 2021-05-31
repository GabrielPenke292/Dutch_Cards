
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

            storeWords('store');

            $("#dutchWord").html(randomWord['word_dutch']);
            $("#englishWord").html(randomWord['word_english']);
        }
    });
}

function storeWords(type){
    if(type == 'store'){
        console.log("store")
        $("#last_dutch").html($("#dutchWord").html());
        $("#last_english").html($("#englishWord").html());
    }else if(type == 'getLastWord'){
        if($("#last_dutch").html() != ''){
            $("#dutchWord").html($("#last_dutch").html());
            $("#englishWord").html($("#last_english").html());
        }
        
    }
}

function previousWord(){
    let word = storeWords('getLastWord');

    console.log(word);
}

function saveNewCard(){
    event.preventDefault()
    let dutchWord = $("#dutchWord").val();
    let englishWord = $("#englishWord").val();
    $.ajax({
        type: "post",
        url: "saveNewCard",
        data: {
            dutchWord,
            englishWord
        },
        dataType: "json",
        success: function (response) {
            console.log(response);
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your new card is saved with success',
                showConfirmButton: false,
                timer: 1500
            })
            $("#dutchWord").val("");
            $("#englishWord").val("");
            $("#total").html(response['totalWords'].length);
        }
    }).fail( function(response){
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Something went wrong!',
            showConfirmButton: false,
            timer: 1500
        })
        $("#dutchWord").val("");
        $("#englishWord").val("");
    });
}