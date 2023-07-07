<?php

    require __DIR__.'/classes/classMovie.php';

    $PulpFiction = new Movie('Pulp Fiction', ['gangster', 'commedia', 'drammatico', 'thriller', 'noir'], '2h 45m', 1994, 9);
    $SpidermanNoWayHome = new Movie('Spider-Man: No Way Home', ['azione', 'avventura', 'fantascienza'], '2h 28m', 2021, 9);
    $AranciaMeccanica = new Movie('Arancia Meccanica', ['grottesco', 'drammatico'], '2h 16m', 1971, 8);
    $NataleAMiami = new Movie('Natale A Maiami', ['commedia'], '1h 36m', 2005, 5);

    $PulpFiction->isClassic();
    $SpidermanNoWayHome->isClassic();
    $AranciaMeccanica->isClassic();
    $NataleAMiami->isClassic();

    $movies[] = $PulpFiction;
    $movies[] = $SpidermanNoWayHome;
    $movies[] = $AranciaMeccanica;
    $movies[] = $NataleAMiami;
?>