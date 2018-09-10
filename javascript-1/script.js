let count = 0;

/**
 * Функция выполгиющая ДЗ 1 урок.
 */
function counting(){
    for (i = 1; i < 101; i++){
        if ((count % 3) == 0 && (count % 5) != 0 ) {
            console.log('fizz');

        } else if ((count % 5) == 0 && (count % 3) != 0 ) {
            console.log('Buzz');

        }  else if ((count % 3) == 0 && (count % 5) == 0 ) {
            console.log('FizzBuzz');
        }  else {

            console.log(count);
        }

        count++;

    }


    }


// запускаю функцию вывода в консоль чисел
counting();