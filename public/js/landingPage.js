/* JavaScript Document

TemplateMo 606 String Master - Modified for Quiz Platform

https://templatemo.com/tm-606-string-master

*/

// Quiz configuration
const QUIZ_CATEGORIES = ['Sains', 'Matematika', 'Sejarah', 'Bahasa', 'Geografi', 'Teknologi'];

// Quiz data
const QUIZZES = {
   'pengetahuan-umum': {
      name: 'Kuis Pengetahuan Umum',
      questions: 25
   },
   'sains-dasar': {
      name: 'Kuis Sains Dasar',
      questions: 30
   },
   'sejarah-dunia': {
      name: 'Kuis Sejarah Dunia',
      questions: 20
   }
};

let soundEnabled = true;
let isPlaying = false;
let currentQuiz = 'pengetahuan-umum';
let quizTimeout = null;
let questionIndex = 0;

// Single shared AudioContext
let audioCtx = null;

function getAudioContext() {
   if (!audioCtx) {
      audioCtx = new(window.AudioContext || window.webkitAudioContext)();
   }
   if (audioCtx.state === 'suspended') {
      audioCtx.resume();
   }
   return audioCtx;
}

// Initialize quiz cards
function initQuizCards() {
   const neckContainer = document.querySelector('.guitar-neck');
   if (!neckContainer) return;

   // Clear existing content
   neckContainer.innerHTML = '';

   // Create cards container
   const cardsContainer = document.createElement('div');
   cardsContainer.className = 'quiz-cards-container';

   // Create 3 quiz cards with letters A, B, C
   const cards = [
      { letter: 'A' },
      { letter: 'B' },
      { letter: 'C' }
   ];

   cards.forEach((card, index) => {
      const cardEl = document.createElement('div');
      cardEl.className = `quiz-card quiz-card-${index + 1}`;
      cardEl.innerHTML = `
         <div class="quiz-card-icon">${card.letter}</div>
      `;
      
      // Add click animation
      cardEl.addEventListener('click', () => {
         playClickSound();
      });

      cardsContainer.appendChild(cardEl);
   });

   neckContainer.appendChild(cardsContainer);
}

function showCategory(categoryName) {
   // Highlight active button
   document.querySelectorAll('.chord-btn').forEach(btn => {
      btn.classList.remove('active');
   });
   
   const activeBtn = Array.from(document.querySelectorAll('.chord-btn')).find(
      btn => btn.dataset.chord === categoryName
   );
   if (activeBtn) {
      activeBtn.classList.add('active');
   }

   // Play sound
   playClickSound();

   // Animate quiz cards
   const cards = document.querySelectorAll('.quiz-card');
   cards.forEach((card, index) => {
      card.style.animation = 'none';
      setTimeout(() => {
         card.style.animation = `pulse 0.5s ease ${index * 0.1}s`;
      }, 10);
   });
}

function clearSelection() {
   document.querySelectorAll('.chord-btn').forEach(btn => {
      btn.classList.remove('active');
   });
   stopQuiz();
}

// Quiz player functions
function playQuiz() {
   if (isPlaying) {
      stopQuiz();
      return;
   }

   getAudioContext();

   isPlaying = true;
   questionIndex = 0;
   document.getElementById('playBtn').textContent = '■';
   document.getElementById('playBtn').classList.add('playing');
   playNextQuestion();
}

function stopQuiz() {
   isPlaying = false;
   if (quizTimeout) {
      clearTimeout(quizTimeout);
      quizTimeout = null;
   }
   questionIndex = 0;
   document.getElementById('playBtn').textContent = '▶';
   document.getElementById('playBtn').classList.remove('playing');
   document.getElementById('progressBar').style.width = '0%';
}

function playNextQuestion() {
   if (!isPlaying) return;

   const quiz = QUIZZES[currentQuiz];
   if (questionIndex >= quiz.questions) {
      stopQuiz();
      return;
   }

   // Play sound for each question
   playClickSound();

   // Update progress
   const progress = ((questionIndex + 1) / quiz.questions) * 100;
   document.getElementById('progressBar').style.width = progress + '%';

   questionIndex++;
   quizTimeout = setTimeout(playNextQuestion, 500);
}

function changeQuiz(quizKey) {
   stopQuiz();
   currentQuiz = quizKey;
   document.getElementById('songTitle').textContent = QUIZZES[quizKey].name;
}

// Event listeners
document.querySelectorAll('.chord-btn').forEach(btn => {
   btn.addEventListener('click', () => {
      stopQuiz();
      showCategory(btn.dataset.chord);
   });
});

document.getElementById('soundToggle')?.addEventListener('click', function () {
   soundEnabled = !soundEnabled;
   this.classList.toggle('active', soundEnabled);
   if (soundEnabled) {
      getAudioContext();
   }
});

document.getElementById('clearBtn')?.addEventListener('click', () => {
   clearSelection();
});

document.getElementById('playBtn')?.addEventListener('click', playQuiz);

document.getElementById('songSelect')?.addEventListener('change', function () {
   changeQuiz(this.value);
});

// Initialize
initQuizCards();

// Pre-initialize audio context on first user interaction
document.addEventListener('click', function initAudio() {
   getAudioContext();
   document.removeEventListener('click', initAudio);
}, {
   once: true
});

// Mobile menu toggle
const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const navLinks = document.querySelector('.nav-links');
const navCta = document.querySelector('.nav-cta');

if (mobileMenuBtn && navLinks && navCta) {
   mobileMenuBtn.addEventListener('click', () => {
      const isOpen = navLinks.classList.toggle('active');
      navCta.classList.toggle('active', isOpen);
      mobileMenuBtn.textContent = isOpen ? '✕' : '☰';

      if (isOpen) {
         setTimeout(() => {
            const navLinksHeight = navLinks.offsetHeight;
            navCta.style.top = `calc(100% + ${navLinksHeight}px)`;
         }, 10);
      }
   });

   // Close mobile menu when clicking a link
   navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
         navLinks.classList.remove('active');
         navCta.classList.remove('active');
         mobileMenuBtn.textContent = '☰';
      });
   });
}

// Pricing toggle
const pricingToggle = document.getElementById('pricingToggle');
if (pricingToggle) {
   pricingToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      
      const isAnnual = this.classList.contains('active');
      const priceEl = document.getElementById('proPrice');
      const billedEl = document.getElementById('proBilled');
      const savingsEl = document.getElementById('proSavings');

      if (priceEl) {
         priceEl.style.opacity = '0';
         priceEl.style.transform = 'translateY(-10px)';

         setTimeout(() => {
            if (isAnnual) {
               priceEl.textContent = '40.000';
               billedEl.textContent = 'Rp 480.000 per tahun';
               savingsEl.textContent = 'Hemat 20%';
            } else {
               priceEl.textContent = '50.000';
               billedEl.textContent = '';
               savingsEl.textContent = '';
            }

            priceEl.style.opacity = '1';
            priceEl.style.transform = 'translateY(0)';
         }, 150);
      }
   });
}

// Add transition to price element
const proPrice = document.getElementById('proPrice');
if (proPrice) {
   proPrice.style.transition = 'all 0.15s ease';
}

// Add pulse animation for quiz cards
const style = document.createElement('style');
style.textContent = `
   @keyframes pulse {
      0%, 100% {
         transform: scale(1);
      }
      50% {
         transform: scale(1.05);
      }
   }
`;
document.head.appendChild(style);