let legendariusPower

function init() {
    legendariusPower = +document.getElementById('spartakus-power').value;
}

function fight() {

    let gladiatorsPower = document.getElementsByName('power');
    let gladiatorsWeapon = document.getElementsByName('weapon');

    for (i = 0; i < gladiatorsPower.length; i++){

        +gladiatorsPower[i].value ?
            (legendariusPower > +gladiatorsPower[i].value) ? legendariusPower += +gladiatorsWeapon[i].value : console.log(+gladiatorsPower[i].value)
                :console.log('нет числа');
        console.log(legendariusPower);




        if (!+gladiatorsPower[i].value) {
            alert('sad');
            break;
        }


    }




}




document.getElementById('start').onclick = function() {
    init();
    fight();
}