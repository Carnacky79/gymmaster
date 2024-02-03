<?php

use Dompdf\Dompdf;

class Admin
{
    use Controller;

    public function index()
    {
        $iscritto = new Iscritto();
        $esercizi = new Esercizio();
        $data = [
            'id_palestra' => $_SESSION['user']->id,
        ];
        $iscritti = $iscritto->where($data);
        $numeroEsercizi = $esercizi->count();
        $this->view('admin', ['iscritti' => $iscritti, 'esercizi' => $numeroEsercizi]);
    }

    //DISPLAY ALL USERS
    public function users()
    {
        $iscritto = new Iscritto();
        $iscritti = $iscritto->iscritti_palestra();
        $this->view('users', ['iscritti' => $iscritti]);
    }

    public function esercizi()
    {
        $esercizio = new Esercizio();
        $esercizi = $esercizio->esercizi_categorie();
        $this->view('esercizi', ['esercizi' => $esercizi]);
    }

    public function addUser()
    {
        $this->view('addUser');
    }

    public function persistUser()
    {
        $iscritto = new Iscritto();
        $data = [
            'nome' => $_POST['nome'],
            'cognome' => $_POST['cognome'],
            'email' => $_POST['email'],
            'data_nascita' => $_POST['data_nascita'],
            'telefono' => $_POST['telefono'],
            'id_palestra' => $_SESSION['user']->id,
            'password' => $_POST['password'],
        ];
        $iscritto->insert($data);
        $this->redirect('admin/users');
    }

    public function creaScheda()
    {
        $schede = new Scheda();
        $iscritto = new Iscritto();
        $data = [
            'id' => $_GET['id'],
        ];
        $iscritto = $iscritto->where($data);
        $schede_iscritto = $schede->schede_iscritto($_GET['id']);
        $this->view('creaScheda', ['iscritto' => $iscritto, 'schede' => $schede_iscritto]);
    }

    public function nuovascheda()
    {
        if (isset($_POST['id_iscritto'])) {
            $scheda = new Scheda();
            $iscritto = new Iscritto();
            $data = [
                'id' => $_POST['id_iscritto'],
            ];
            $iscritto = $iscritto->where($data);
            $data = [
                'id_utente' => $_POST['id_iscritto'],
                'attiva' => 0,
            ];
            $scheda_nuova = $scheda->insert($data);
        }
        $this->mostraNuovaScheda(['iscritto' => $iscritto, 'scheda' => $scheda_nuova]);
    }

    public function mostraNuovaScheda($data = [])
    {
        $esercizio = new Esercizio();
        $esercizi = $esercizio->esercizi_categorie();
        $scheda = new Scheda();
        $scheda = $scheda->where(['id' => $data['scheda']]);
        $categorie = new Categoria();
        $categorie = $categorie->findAll();
        $this->view('esercizioscheda', ['iscritto' => $data['iscritto'], 'scheda' => $scheda[0], 'esercizi' => $esercizi, 'categorie' => $categorie]);
    }

    public function associaSchedaEsercizi()
    {
        $id_scheda = $_POST['id_scheda'];
        $esercizi = $_POST['esercizi'];
        $attiva = $_POST['attiva'];
        $iscritto = new Iscritto();
        $iscritto = $iscritto->where(['id' => $_POST['id_iscritto']]);

        $scheda = new Scheda();
        $schede = $scheda->schede_iscritto($iscritto[0]->id);

        if ($attiva == 1) {
            $scheda->update($id_scheda, ['attiva' => 1]);

            foreach ($schede as $s) {


                if ($s->id != $id_scheda) {
                    $scheda->update($s->id, ['attiva' => 0]);
                }
                //
            }
        }

        foreach ($esercizi as $es) {
            foreach ($_POST as $key => $value) {
                if (substr($key, strpos($key, "_") + 1) == $es)
                    $data[substr($key, 0, strpos($key, "_"))] = $value == '' ? null : $value;
            }
            $data['id_esercizio'] = $es;
            $data['id_scheda'] = $id_scheda;
            $associazione = new Associazione();
            $associazione->insert($data);
        }

        $schede = $scheda->schede_iscritto($iscritto[0]->id);
        $this->view('creaScheda', ['iscritto' => $iscritto, 'schede' => $schede]);
    }

    public function dettaglioscheda()
    {
        $id_scheda = $_POST['id_scheda'];
        $iscritto = new Iscritto();
        $iscritto = $iscritto->where(['id' => $_POST['id_iscritto']]);

        $scheda = new Scheda();
        $scheda = $scheda->where(['id' => $id_scheda]);

        $esercizo = new Associazione();
        $esercizi = $esercizo->esercizi_scheda_utente($id_scheda);

        $this->view('dettaglioscheda', ['iscritto' => $iscritto, 'scheda' => $scheda[0], 'esercizi' => $esercizi]);
    }

    public function deleteuser()
    {
        $iscritto = new Iscritto();
        $iscritto->delete($_POST['id_iscritto']);
        $this->redirect('admin/users');
    }

    public function scaricascheda()
    {

        $id = $_POST['id_scheda'];

        $es = new Associazione();
        $esercizi = $es->esercizi_scheda_utente($id);

        $html = "<h4>Elenco Esercizi:</h4>";
        $html .= "<ul>";
        foreach ($esercizi as $esercizio) {
            $imgSrc = IMG . '/scheda/' . $esercizio->nome_cat . '/' . $esercizio->nome;
            $html .= <<<HTML
                                        <li>
                                            <div class="row">
                                                <div class="col-md-6">
                                                <img class='img-fluid' style='height: 250px' src='$imgSrc' />
                                                </div>  
                                                <div class="col-md-6">
                                                    <p>Note: $esercizio->note</p>
                                                </div>      
                                                </div>
                                        </li>  
                        <hr style="border: 2px solid orangered">
HTML;

        }
        $html .= "</ul>";
        //exit($html);


// instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->set_option('isRemoteEnabled', true);
        $dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
        $dompdf->render();

// Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function addesercizio()
    {
        $categorie = new Categoria();
        $categorie = $categorie->findAll();
        $this->view('addesercizio', ['categorie' => $categorie]);
    }

    public function persistex()
    {
        $categoria = new Categoria();

        $cat = $categoria->where(['id' => $_POST['categoria']]);
        $nome_cat = $cat[0]->nome;

        $dir = IMG . '/scheda/';
        $path = parse_url($dir, PHP_URL_PATH);
        //exit($_SERVER['DOCUMENT_ROOT'] . $path);
        $path = $_SERVER['DOCUMENT_ROOT'] . $path;

        $target_dir = $path . $nome_cat . '/';
        //exit($target_dir);
        $target_file = $target_dir . basename($_FILES["immagine_esercizio"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["immagine_esercizio"]["tmp_name"]);
            if ($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $msg = "File is not an image.";
                $uploadOk = 0;
            }
        }

// Check if file already exists
        if (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
            $uploadOk = 0;
        }

// Check file size
        if ($_FILES["immagine_esercizio"]["size"] > 5000000) {
            $msg = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //$msg = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["immagine_esercizio"]["tmp_name"], $target_file)) {
                $msg = "The file " . htmlspecialchars(basename($_FILES["immagine_esercizio"]["name"])) . " has been uploaded.";
            } else {
                $msg = "Sorry, there was an error uploading your file.";
            }
        }
        $categorie = new Categoria();
        $categorie = $categorie->findAll();

        $esercizio = new Esercizio();
        $data = [
            'id_categoria' => $_POST['categoria'],
            'nome' => basename($_FILES["immagine_esercizio"]["name"]),
        ];
        //basename($_FILES["immagine_esercizio"]["name"])
        $esercizio->insert($data);
        $this->view('addesercizio', ['messaggio' => $msg, 'categorie' => $categorie]);
    }
}
