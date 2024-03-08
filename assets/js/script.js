window.scroll({
    top: 100,
    left: 100,
    behavior: "smooth",
  });

  document.addEventListener("DOMContentLoaded", function() {
    const myModal = new bootstrap.Modal(document.getElementById('Modal'));
    myModal.show();
  });

/*   const date = new Date();
  const start = date.getFullYear() + '-03-17';


const countdown = document.getElementById('count');{
countdown = () => {
    const now = new Date();
    const gap = start - now;
    const seconds = 1000;
    const minutes = seconds * 60;
    const hours = minutes * 60;
    const days = hours * 24;

    const textDays = Math.floor(gap / days);
    const textHours = Math.floor((gap % days) / hours);
    const textMinutes = Math.floor((gap % hours) / minutes);
    const textSeconds = Math.floor((gap % minutes) / seconds);

    document.querySelector('.days').innerText = textDays;
    document.querySelector('.hours').innerText = textHours;
    document.querySelector('.minutes').innerText = textMinutes;
    document.querySelector('.seconds').innerText = textSeconds;
}
}
 */

function reboursF()
{
    let rebours = document.getElementById("rebours"),
        jour = document.getElementById("jour"),
        jour_label = document.getElementById("jour_label"),
        heure = document.getElementById("heure"),
        heure_label = document.getElementById("heure_label"),
        minute = document.getElementById("minute"),
        minute_label = document.getElementById("minute_label"),
        seconde = document.getElementById("seconde"),
        seconde_label = document.getElementById("seconde_label"),
        maintenant = new Date(),
        finannee = new Date('March 17, 2024 08:45:00');

    let total_secondes = (finannee - maintenant) / 1000;
     
    if (total_secondes > 0)
    {
        let nb_jours = Math.floor(total_secondes / (60 * 60 * 24));
        let nb_heures = Math.floor((total_secondes - (nb_jours * 60 * 60 * 24)) / (60 * 60));
        let nb_minutes = Math.floor((total_secondes - ((nb_jours * 60 * 60 * 24 + nb_heures * 60 * 60))) / 60);
        let nb_secondes = Math.floor(total_secondes - ((nb_jours * 60 * 60 * 24 + nb_heures * 60 * 60 + nb_minutes * 60)));

        jour.textContent = caractere(nb_jours);
        heure.textContent = caractere(nb_heures);
        minute.textContent = caractere(nb_minutes);
        seconde.textContent = caractere(nb_secondes);

        jour_label.textContent = genre(nb_jours, 'jour');
        heure_label.textContent = genre(nb_heures, 'heure');
        minute_label.textContent = genre(nb_minutes, 'minute');
        seconde_label.textContent = genre(nb_secondes, 'seconde');        
    }

    let minuteur = setTimeout("reboursF();", 1000);
}

function genre(nb, libelle)
{
    return (nb > 1) ? libelle+'s' : libelle;
}

function caractere(nb)
{
    return (nb < 10) ? '0'+nb : nb;
}

reboursF();