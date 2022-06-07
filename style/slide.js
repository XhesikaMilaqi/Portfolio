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

// let nb = 1;
// const duration = 1000;
// const numberS=4;

// $("#right").on("click",function(){
//     $("#part" + nb).fadeOut(duration);

//     nb = nb +1;

//     if(nb > numberS) {
//         nb = 1;
//     }
//     $("#part" + nb).fadeIn(duration);
// });

// $("#left").on('click', function(){
//     $("#part" + nb).fadeOut(duration);

//     nb = nb - 1;

//     if(nb < 1) {
//         nb = numberS;
//     }

//     $("#part" + nb).fadeIn(duration);
// });