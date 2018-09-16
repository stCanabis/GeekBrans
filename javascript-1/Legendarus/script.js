let spartakusPower;

function init() {
    spartakusPower = parseInt(document.getElementById('spartakus-power').value);
}




function fight(numberGladiator){

    let gladiators = document.getElementsByName('power' + numberGladiator);
    if (spartakusPower > parseInt(gladiators[0].value)) {
        spartakusPower += parseInt(gladiators[1].value);
        numberGladiator++;
        console.log(spartakusPower);
        fight(numberGladiator);
    } else if (spartakusPower < parseInt(gladiators[0].value)) {

        alert('Legendarius defeated');

    }


}



document.getElementById('start').onclick = function (){
    init();
    fight(1);
};
