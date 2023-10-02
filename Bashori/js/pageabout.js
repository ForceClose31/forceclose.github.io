let number1 = document.getElementById("number-1");
let counter1 = 0;
let number2 = document.getElementById("number-2");
let counter2 = 0;
let number3 = document.getElementById("number-3");
let counter3 = 0;
let number4 = document.getElementById("number-4");
let counter4 = 0;
let number5 = document.getElementById("number-5");
let counter5 = 0;
let number6 = document.getElementById("number-6");
let counter6 = 0;
let number7 = document.getElementById("number-7");
let counter7 = 0;

setInterval(() => {
    if (counter1 == 80){
        clearInterval();
    }
    else{
        counter1 += 1;
        number1.innerHTML = counter1 + "%";
    }
    if (counter2 == 75){
        clearInterval();
    }
    else{
        counter2 += 1;
        number2.innerHTML = counter2 + "%";
    }
    if (counter3 == 55){
        clearInterval();
    }
    else{
        counter3 += 1;
        number3.innerHTML = counter3 + "%";
    }
    if (counter4 == 50){
        clearInterval();
    }
    else{
        counter4 += 1;
        number4.innerHTML = counter4 + "%";
    }
    if (counter5 == 75){
        clearInterval();
    }
    else{
        counter5 += 1;
        number5.innerHTML = counter5 + "%";
    }
    if (counter6 == 75){
        clearInterval();
    }
    else{
        counter6 += 1;
        number6.innerHTML = counter6 + "%";
    }
    if (counter7 == 55){
        clearInterval();
    }
    else{
        counter7 += 1;
        number7.innerHTML = counter7 + "%";
    }
}, 20);