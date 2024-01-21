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
                                    <p>Data Creazione: <?= $data['scheda']->data_creazione ?></p>
                                    <!-- Add other details as needed -->

                                    <!-- List of exercises in the sheet -->
                                    <h4>Elenco Esercizi:</h4>
                                    <ul>
                                        <?php foreach ($data['esercizi'] as $esercizio): ?>
                                            <li><?= $esercizio->nome ?></li>
                                            <!-- Add more details if necessary -->
                                        <?php endforeach; ?>
                                    </ul>
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