// Enable enter key click.
var input = document.getElementById("userAnswer");
input.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("btn").click();
    }
});

// Counter function to keep track of the number of questions a user completes.
var num_completed = 0;
function countCompleted() {
    num_completed++;
    return num_completed;
}

// Produce a new math problem with random numbers and operator.
function generateProblem() {
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;

    const chose_operator = Math.random();
    var operator = '+';
    // console.log(chose_operator);
    // document.getElementById('debug').innerHTML = chose_operator;

    if (chose_operator <= 0.25) {operator = '+';}
    else if (chose_operator <= 0.5 && chose_operator > 0.25) {operator = '-';}
    else if (chose_operator <= 0.75 && chose_operator > 0.5) {operator = '*';}
    else {operator = "/"}
    
    return `${num1} ${operator} ${num2}`;
}

// Check the given answer for accuracy. 
// If correct, generate new problem. 
// If incorrect, try again til correct.
function checkAnswer() {
    const problemElement = document.getElementById('problem');
    const feedbackElement = document.getElementById('feedback');
    const userAnswer = document.getElementById('userAnswer').value;

    const problemText = problemElement.innerText;
    var [num1, operator, num2] = problemText.split(' ');

    num1 = parseInt(num1);
    num2 = parseInt(num2);
    var correctAnswer = 0;

    if(operator == '+') {correctAnswer = num1 + num2;}
    else if(operator == '-') {correctAnswer = num1 - num2;}
    else if(operator == '*') {correctAnswer = num1 * num2;}
    else {
        correctAnswer = num1 / num2;
        correctAnswer = parseFloat(correctAnswer.toFixed(2));
    }
    
    // document.getElementById("debug").innerHTML = correctAnswer;

    if (parseFloat(userAnswer) == correctAnswer) {
        feedbackElement.innerText = 'Correct! Well done!';
        var new_problem = generateProblem();
        problemElement.innerText = new_problem;
        document.getElementById('problem').innerText = new_problem;
        var score = countCompleted();
        document.getElementById("score").innerHTML = "Current score: " + score;
        document.getElementById("score").value = score;
    } else {
        feedbackElement.innerText = 'Incorrect. Try again.';
        // document.getElementById("debug").innerHTML = correctAnswer;
    }

    // Generate a new problem
    // problemElement.innerText = generateProblem();
    document.getElementById('userAnswer').value = '';
}

// Initialize the page with a random math problem
document.getElementById('problem').innerText = generateProblem();