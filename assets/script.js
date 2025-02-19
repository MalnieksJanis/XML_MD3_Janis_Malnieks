// Piemērs, kā iespējams pievienot funkcionalitāti, lai atjaunotu datus bez lapas pārlādēšanas.
document.addEventListener('DOMContentLoaded', function() {
    setInterval(function() {
        location.reload();  // Pārleju lapu katras 30 minūtes
    }, 1800000); // 30 minūtes
});
