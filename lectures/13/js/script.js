var questions = [
    {
        question : "When a user views a page containing a JavaScript program, which machine actually executes the script?",
        choices : [ "The User's machine running a Web browser",
            "The Web server",
            "A central machine deep within Netscape's corporate offices",
            "None of the above"],
        correctAnswer : 0
    },{
        question : "Which of the following can't be done with client-side JavaScript?",
        choices : [ "Validating a form",
            "Sending a form's contents by email",
            "Storing the form's contents to a database file on the server",
            "None of the above"],
        correctAnswer : 2
    },{
        question : "Using _______ statement is how you test for a specific condition",
        choices : [ "select",
            "if",
            "for",
            "none of the above"],
        correctAnswer : 1
    }];

var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;
displayCurrentQuestion();
document.getElementById("quiz-message").style.display = 'none';
function displayNext() {
    if (quizOver)
    {
        resetQuiz();
        document.getElementById("next-btn").innerText = "Next Question";
        displayCurrentQuestion();
    }
    else
    {
        var query_val = null;
        if (document.querySelector("input[name='dq']:checked")!==null)
        {
            query_val = document.querySelector("input[name='dq']:checked").value;
        }
        else
        {
            document.getElementById("quiz-message").innerText = "Please select option";
        }

        if (query_val == questions[currentQuestion].correctAnswer)
        {
            correctAnswers++;
        }
        currentQuestion++;

        if (currentQuestion < questions.length)
        {
            displayCurrentQuestion();
        }
        else
        {
            displayScore();
            document.getElementById("next-btn").innerText = "Play again";
            quizOver = true;
        }
    }
}

function displayCurrentQuestion() {
    var question = document.getElementById("question");
    question.innerText = "";
    question.innerText = questions[currentQuestion].question;
    var choices = document.getElementById("choice-list");
    choices.innerText = "";
    for (var i = 0; i < questions[currentQuestion].choices.length;i++)
    {
        choices.innerHTML += "<li>" + "<input type='radio' value='"+i+"'name='dq'>"+questions[currentQuestion].choices[i]+"</li>";
    }
}

function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    quizOver = false;
    hideScore();
}
function displayScore() {
    document.getElementById("result").innerText = "Your Score is = " + correctAnswers;
}
function hideScore() {
    document.getElementById("result").innerText = "";
}