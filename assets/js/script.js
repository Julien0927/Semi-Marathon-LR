window.scroll({
    top: 100,
    left: 100,
    behavior: "smooth",
  });

  document.addEventListener("DOMContentLoaded", function() {
    const myModal = new bootstrap.Modal(document.getElementById('Modal'));
    myModal.show();
  });

// Définir la date de la course (à modifier selon vos besoins)
const raceDate = new Date('2025-12-09T20:00:00').getTime();

function updateCountdown() {
    const now = new Date().getTime();
    const timeLeft = raceDate - now;

    if (timeLeft <= 0) {
        /* document.getElementById('message').textContent = "C'EST PARTI !"; */
        /* document.getElementById('gif').style.display = 'block'; */
        document.querySelectorAll('.number').forEach(el => el.textContent = '00');
        document.getElementById('btn-inscriptions').style.display = 'block';
        return;
    }

    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById('days').textContent = String(days).padStart(2, '0');
    document.getElementById('hours').textContent = String(hours).padStart(2, '0');
    document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
    document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');

/*     if (timeLeft > 0) {
        document.getElementById('message').textContent = "Préparez-vous pour la course !";
    }
 */}

// Mettre à jour le compte à rebours chaque seconde
setInterval(updateCountdown, 1000);

// Première mise à jour immédiate
updateCountdown();