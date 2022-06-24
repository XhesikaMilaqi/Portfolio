let number = 1;
const delay = 1000;
const nbSlides = 4;

$("#next").on("click",function(){
    $("#slide" + number).fadeOut(delay);

    number = number +1;

    if(number > nbSlides) {
        number = 1;
    }
    $("#slide" + number).fadeIn(delay);
});

$("#back").on('click', function(){
    $("#slide" + number).fadeOut(delay);

    number = number - 1;

    if(number < 1) {
        number = nbSlides;
    }

    $("#slide" + number).fadeIn(delay);
});

