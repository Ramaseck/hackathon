// JavaScript pour gérer la pagination des mois
const calendar = document.querySelector('.calendar');
const monthElement = calendar.querySelector('.month');

const currentDate = new Date();

document.querySelector('#previousMonthButton').addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
});

document.querySelector('#nextMonthButton').addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    updateCalendar();
});

function updateCalendar() {
    // Mettez à jour le mois et l'année du calendrier
    const options = { year: 'numeric', month: 'long' };
    monthElement.textContent = currentDate.toLocaleDateString('fr-FR', options);

    // Mettez à jour le contenu du calendrier ici en générant les jours pour le nouveau mois
    // Cela nécessiterait de connaître le nombre de jours dans le mois et le jour de la semaine de début.
}

updateCalendar();
