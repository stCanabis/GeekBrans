let mingHealthStat;
let potionPlus;
let power;
let countMove;
let maxHealth;
let minHealth;
let maxWeaponPower;
let maxPotionPlus;


function init() {
    mingHealthStat = 50;
    maxHealth = 0;
    minHealth = mingHealthStat;
    countMove = 0;
    maxWeaponPower = 0;
    maxPotionPlus = 0;

}


function end(result) {
    $('.ming_field').text('минимум жмзней' + mingHealthStat + 'maxPotionPlus' + maxPotionPlus + 'maxWeaponPower' + maxWeaponPower
        + 'maxHealth' + maxHealth + 'minHealth' + minHealth);
    if (result == "loose"){
        alert("МИНГ ПОРАБОТИЛ ЗЕМЛЮ !!!");
    } else if (result == "won"){
        alert("МИНГ УБИТ УРАААААА !!!");
    }

}

function fight(){


    function mingHealth() {
        potionPlus = parseInt(prompt('Введите силу снадобья'));
        mingHealthStat = mingHealthStat + potionPlus;
        if (potionPlus > maxPotionPlus){
            maxPotionPlus = potionPlus;
        }
        if (mingHealthStat >= 100){

            end("loose");

        }


    }
    function weaponPower() {
        power = parseInt(prompt('Введите силу оружия'));
        if (maxWeaponPower < power) {
            maxWeaponPower = power;
        }
    }

    function move(){
        countMove++;
        mingHealthStat = mingHealthStat - power;
        if (mingHealthStat <= 0){

            end("won");

        }
        if (mingHealthStat > maxHealth){
            maxHealth = mingHealthStat;
        } else if (mingHealthStat < minHealth){
            minHealth = mingHealthStat;
        }







        console.log(mingHealthStat);
    }







    mingHealth();
    weaponPower();
    move();

}


init();

$("#fight").click(fight);


