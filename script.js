const questions = [
    {
        question: "Apa ibu kota Indonesia?",
        options: ["Bandung", "Jakarta", "Surabaya", "Medan"],
        answer: 1
    },
    {
        question: "2 + 5 = ?",
        options: ["5", "6", "7", "8"],
        answer: 2
    },
    {
        question: "Bahasa pemrograman untuk web adalah?",
        options: ["HTML", "Python", "C++", "Java"],
        answer: 0
    }
];

let currentQuestion = 0;
let score = 0;
let timeLeft = 15;
let timer;

const questionEl = document.getElementById("question");
const optionsEl = document.querySelectorAll(".option");
const questionNumberEl = document.getElementById("question-number");
const timerEl = document.getElementById("timer");
const nextBtn = document.getElementById("next-btn");
const resultEl = document.getElementById("result");
const scoreEl = document.getElementById("score");

function startQuiz() {
    loadQuestion();
    startTimer();
}

function loadQuestion() {
    timeLeft = 15;
    questionEl.textContent = questions[currentQuestion].question;
    questionNumberEl.textContent = `Soal ${currentQuestion + 1}/${questions.length}`;

    optionsEl.forEach((btn, index) => {
        btn.textContent = questions[currentQuestion].options[index];
        btn.disabled = false;
        btn.style.backgroundColor = "#3498db";
    });

    nextBtn.style.display = "none";
}

function startTimer() {
    clearInterval(timer);
    timerEl.textContent = `Waktu: ${timeLeft}`;

    timer = setInterval(() => {
        timeLeft--;
        timerEl.textContent = `Waktu: ${timeLeft}`;

        if (timeLeft === 0) {
            clearInterval(timer);
            nextBtn.style.display = "block";
            optionsEl.forEach(btn => btn.disabled = true);
        }
    }, 1000);
}

function checkAnswer(selected) {
    clearInterval(timer);
    const correct = questions[currentQuestion].answer;

    if (selected === correct) {
        score++;
        optionsEl[selected].style.backgroundColor = "#2ecc71";
    } else {
        optionsEl[selected].style.backgroundColor = "#e74c3c";
        optionsEl[correct].style.backgroundColor = "#2ecc71";
    }

    optionsEl.forEach(btn => btn.disabled = true);
    nextBtn.style.display = "block";
}

function nextQuestion() {
    currentQuestion++;
    if (currentQuestion < questions.length) {
        loadQuestion();
        startTimer();
    } else {
        showResult();
    }
}

function showResult() {
    document.querySelector(".options").style.display = "none";
    nextBtn.style.display = "none";
    resultEl.classList.remove("hidden");
    scoreEl.textContent = `Skor kamu: ${score} dari ${questions.length}`;
}

function restartQuiz() {
    currentQuestion = 0;
    score = 0;
    resultEl.classList.add("hidden");
    document.querySelector(".options").style.display = "flex";
    startQuiz();
}

startQuiz();
