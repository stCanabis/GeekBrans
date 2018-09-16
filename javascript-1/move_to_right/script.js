
let containerBlockHeight;
let containerBlockWidth;
let moveedBlock;





function init(){


    containerBlockWidth = $('.block_container').width();
    moveedBlock = $('.block').position().left;

    console.log(moveedBlock);

}

function moveToRight(){
    setTimeout(function () {
            if (moveedBlock < containerBlockWidth ) {
            moveedBlock = moveedBlock + 30;
                $('.block').css('left', moveedBlock);
            console.log(moveedBlock);
        }
        moveToRight()
    }, 20);
    
}




// function moveToSmall(){
//     setTimeout(function () {
//         if (containerBlockHeight > 0){
//             containerBlockHeight = containerBlockHeight - 10;
//             $('.block_container').css('height', (containerBlockHeight + 'px'));
//             console.log(containerBlockHeight);
//         }
//         moveToSmall()
//     }, 50);
//
// }



init();
moveToRight();
// moveToSmall();






































