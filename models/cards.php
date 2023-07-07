<!-- MECCANISMO CHE CREA LE CARTE DEI FILM -->
<?php foreach($movies as $movie){ ?>
    <div class="col-3">
        <div class="card">
            <div class="card-header h3"><?php echo $movie -> title; ?></div>
            <ul>
                <li>Generi: <?php foreach($movie -> genre as $index => $genre){
                    if($index === count($movie -> genre) - 1){
                        echo $genre.'.';
                    }else{
                        echo $genre.', ';
                    };
                };?></li>
                <li>Durata: <?php echo $movie -> time ?></li>
                <li>Anno di uscita: <?php echo $movie -> releaseY ?></li>
                <li>Voto <?php echo $movie -> vote ?></li>
                <li>Classico <?php echo $movie -> genre ? 'S&igrave;' : 'No'?></li>
            </ul>
        </div>
    </div>
<?php } ?>