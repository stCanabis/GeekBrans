
let score = 0;

function askQuestion(id, goodanswer) {
    let userAnswer = document.getElementById(id).value;
    userAnswer = userAnswer.toLowerCase();
    if (userAnswer == goodanswer){
        score++;
    }

}


function checkAnswer() {
    score = 0;

    askQuestion("puzzle1", "свисток");
    askQuestion("puzzle2", "елка");



    alert(score);


}