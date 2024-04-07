<?php

if(!empty($_GET['file'])){

    $fileName  = basename($_GET['file']);
    $filePath  = "Telechargements/".$fileName;
    
    if(!empty($fileName) && file_exists($filePath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        //read file 
        readfile($filePath);
        exit;
    } else{
        ?>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
        <div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
            <div class="row py-3 justify-content-warning">
                <div class="col-md-7">
                    <div class="alert alert-danger">
                        <h1 class="py-3 text-center">Attention !</h1> 
                        <h4 style="text-align: center;">Le fichier n'existe pas!<a href="deconnexion_form1_4_1.php" style="position: relative; left: 35px; color: brown">X</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}


?>