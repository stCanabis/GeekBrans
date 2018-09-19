
let moveBlockPosition = $('#block').position().left;
let blockWidth = $('#block').width();
console.log(moveBlockPosition);
console.log(blockWidth);


function move (){
    setTimeout(function () {

        if (moveBlockPosition >= 0 - blockWidth){
            $('#block').css('left', moveBlockPosition + 'px')
            moveBlockPosition -= 10;
        }
        move();
    }, 10)
}

// function move() {
//     setTimeout(function () {
//         if (moveBlockPosition < window.innerWidth) {
//             $('#block').css('left', moveBlockPosition + 'px');
//             moveBlockPosition += 5;
//         }
//         move();
//     }, 50);
//
// }

move();

console.log(moveBlockPosition);
console.log(window.innerWidth);

























