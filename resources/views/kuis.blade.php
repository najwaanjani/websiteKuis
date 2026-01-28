<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Web Kuis Online</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="quiz-container">
    <h1>Kuis Pengetahuan Umum</h1>

    <div class="info">
        <span id="question-number"></span>
        <span id="timer">Waktu: 15</span>
    </div>

    <h2 id="question">Soal akan muncul di sini</h2>

    <div class="options">
        <button class="option" onclick="checkAnswer(0)"></button>
        <button class="option" onclick="checkAnswer(1)"></button>
        <button class="option" onclick="checkAnswer(2)"></button>
        <button class="option" onclick="checkAnswer(3)"></button>
    </div>

    <button id="next-btn" onclick="nextQuestion()">Soal Berikutnya</button>

    <div id="result" class="hidden">
        <h2>Hasil Kuis</h2>
        <p id="score"></p>
        <button onclick="restartQuiz()">Ulangi Kuis</button>
    </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>