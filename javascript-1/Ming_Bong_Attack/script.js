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




function fight(){
    function end() {
        $('.ming_field').text('минимум жмзней' + mingHealthStat + 'maxPotionPlus' + maxPotionPlus + 'maxWeaponPower' + maxWeaponPower
            + 'maxHealth' + maxHealth + 'minHealth' + minHealth);

    }

    function mingHealth() {
        potionPlus = parseInt(prompt('Введите силу снадобья'));
        mingHealthStat = mingHealthStat + potionPlus;
        if (potionPlus > maxPotionPlus){
            maxPotionPlus = potionPlus;
        }
        if (mingHealthStat >= 100){
            alert("МИНГ ПОРАБОТИЛ ЗЕМЛЮ !!!");
            end();
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
            alert("МИНГ УБИТ УРАААААА !!!");
            end();

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


