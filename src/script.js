document.addEventListener("DOMContentLoaded", function () {
    const zitate = [
        "Der beste Weg, etwas zu lernen, ist es zu tun.",
        "Programmieren ist wie Zaubern – nur echter.",
        "Jeder Tag ist eine neue Chance, etwas Großartiges zu schaffen.",
        "Auch aus Steinen, die dir in den Weg gelegt werden, kannst du etwas Schönes bauen.",
        "Erfolg ist das Ergebnis von Ausdauer und Lernen."
    ];
    const zufall = Math.floor(Math.random() * zitate.length);
    document.getElementById('tageszitat').textContent = zitate[zufall];
});