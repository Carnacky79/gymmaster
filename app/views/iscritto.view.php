<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Benvenuto in GYMSTUDIO</title>
    <!-- Link a Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: darkorange">

<div class="container mt-4">
    <h1 class="text-center" style="color: ghostwhite">Scheda Allenamento</h1>
    <?php
    //var_dump($data['esercizi']);
    ?>

    <!-- Aggiungi il nome dell'iscritto -->
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card" style="border: 2px solid black">
                <div class="card-body">
                    <h3 class="card-title text-center">Ciao <?= $_SESSION['user']->nome ?></h3>
                    <h5 class="text-center"><a class="btn btn-sm btn-outline-warning" href="<?= ROOT ?>/login/logout">Esci</a>
                    </h5>
                    <!-- Inserisci il nome dell'iscritto qui -->
                </div>
            </div>
        </div>
    </div>

    <!-- Elenco degli esercizi -->
    <div class="row mt-4">
        <div class="col-md-6 offset-md-3">
            <div class="card" style="border: 2px solid black">
                <div class="card-body">
                    <h4 class="card-title text-center">Esercizi da Svolgere</h4>
                    <!-- Aggiungi la lista degli esercizi qui -->
                    <ul class="list-group">
                        <?php
                        foreach ($data['esercizi'] as $e) {
                            $nomeEsercizio = ucwords(str_replace('_', ' ', $e->nome));
                            echo "<li class='list-group-item'><span style='font-weight: bolder'> $nomeEsercizio - $e->serie X $e->rep</span> ($e->carico Kg) <br>Recupero: $e->recupero sec.</li>";
                        }
                        ?>
                        <!-- Aggiungi altri esercizi se necessario -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Link a Bootstrap JS e script Popper.js, necessari per il funzionamento di Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
