<?php
include_once 'header.php';
?>

<main class="centered-main">
    <h2>Copa del Rey - Ayer</h2>
    <div class="match-details">
        <div class="teams">
            <div class="team">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/800px-FC_Barcelona_%28crest%29.svg.png"
                     alt="Escudo del Barcelona" class="team-logo">
                <span class="team-name">Barcelona</span>
            </div>
            <span class="score">4 - 4</span>
            <div class="team">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f9/Atletico_Madrid_Logo_2024.svg/1200px-Atletico_Madrid_Logo_2024.svg.png"
                     alt="Escudo del Atlético Madrid" class="team-logo">
                <span class="team-name">Atlético Madrid</span>
            </div>
        </div>

        <h3>Goleadores</h3>
        <div class="goals">
            <ul class="team-goals barca">
                <li><span class="player">Pedri</span> <span class="minute">19'</span></li>
                <li><span class="player">Pau Cubarsí</span> <span class="minute">21'</span></li>
                <li><span class="player">Iñigo Martínez</span> <span class="minute">41'</span></li>
                <li><span class="player">Robert Lewandowski</span> <span class="minute">74'</span></li>
            </ul>
            <ul class="team-goals atleti">
                <li><span class="player">Julián Álvarez</span> <span class="minute">1'</span></li>
                <li><span class="player">Antoine Griezmann</span> <span class="minute">6'</span></li>
                <li><span class="player">Marcos Llorente</span> <span class="minute">84'</span></li>
                <li><span class="player">Alexander Sørloth</span> <span class="minute">90+3'</span></li>
            </ul>
        </div>
    </div>
</main>

<?php
require_once 'footer.php';
?>
