<?php require 'parts/head.php' ?>
<body>
<div class="app" id="app">
    <?php require 'parts/aside.php' ?>

    <div id="content" class="app-content box-shadow-z0" role="main">
        <!-- ... (header and other components) ... -->

        <div ui-view class="app-body" id="view">
            <!-- Details about the exercise sheet -->
            <div class="padding">
                <div class="margin">
                    <h5 class="mb-0 _300">Ciao <?= $_SESSION['user']->nome ?></h5>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <div class="box-header">
                                <h3>Dettagli Scheda di <?= $data['iscritto'][0]->nome ?></h3>
                            </div>
                            <div class="box-body">
                                <p>Data Creazione: <?= $data['scheda']->data ?></p>
                                <!-- Add other details as needed -->

                                <!-- List of exercises in the sheet -->
                                <h4>Elenco Esercizi:</h4>
                                <ul>
                                    <?php foreach ($data['esercizi'] as $esercizio): ?>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-6"><?php
                                                    $imgSrc = IMG . '/scheda/' . $esercizio->nome_cat . '/' . $esercizio->nome;
                                                    echo "<img class='img-fluid' style='height: 300px' src='$imgSrc' />";

                                                    ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Note: <?= $esercizio->note ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <hr style="border: 2px solid orangered">
                                    <?php endforeach; ?>
                                </ul>
                                <div class="mt-3 text-center">
                                    <?php
                                    $scheda_link = ROOT . '/admin/scaricascheda';
                                    ?>
                                    <form action="<?php echo $scheda_link; ?>" method="post">
                                        <input type="hidden" name="id_scheda"
                                               value="<?php echo $data['scheda']->id; ?>">
                                        <button class="btn btn-lg btn-info" type="submit">Scarica Scheda</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... (other content) ... -->
        </div>

        <?php require 'parts/footer.php' ?>
    </div>

    <!-- ... (theme switcher and other components) ... -->
</div>
</body>
</html>
