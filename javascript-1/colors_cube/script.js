let plusBtn = document.getElementById('plusBtn');
let count = 1;
let minusBtn = document.getElementById('minusBtn');

/**
 * Инициализация интерактивных элемментов
 */
function init() {
    plusBtn.onclick = createFunction;
    minusBtn.onclick =  deletBlock;
}




/**
 * Функция генерации случайного цвета.
 * @returns {{r: number, g: number, b: number}}
 */
function generateColor() {
    let color = {r:1, g:1, b:1};
    /**
     * Функция генерации числа от 0 до 255.
     * @returns {number}
     */
    function randomazer(){
        i = Math.random()*1000;
        while (i > 255){
            i = Math.random()*1000;
        }
        return Math.round(i);
    }

    for (key in color){
        color[key] = randomazer();

    }
    return color;
}


/**
 *Создание блоков
 */
function createFunction (){
    let color = generateColor();
    let newBlock = document.createElement('div');
    newBlock.classList.add('blockInBlock');
    newBlock.style.backgroundColor = 'rgb(' + color.r + ',' + color.g + ',' + color.b + ')';
    newBlock.onmouseover = function(){
        let color2 = generateColor();
        newBlock.style.backgroundColor = 'rgb(' + color2.r + ',' + color2.g + ',' + color2.b + ')';

            $(this).detach();


    };
    newBlock.innerHTML = count;
    this.parentNode.appendChild(newBlock);
    count++;
}

/**
 * Удаление цветных блоков
 * @type {createFunction}
 */
function deletBlock (){
    $('.block #plusBtn').parent().children().last().detach();




   // let findedBlock = document.querySelector('.block > #plusBtn + #minusBtn');
   // let parentBlock = findedBlock.parentNode;
   // parentBlock.removeChild(parentBlock.lastChild);
   // console.log(parentBlock);


   // firstBlock.removeChild(firstBlock.lastChild);
}



init();
