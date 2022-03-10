<?php

$uploaddir = '../src/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

?> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $prenom = $_POST['prénom'];
    $nom = $_POST['nom'];
    $specialite = $_POST['spécialité'];
    $telephone = $_POST['téléphone'];
    $email = $_POST['email'];
    $siteweb = $_POST['siteweb'];
    $adresse = $_POST['adresse'];
    $societe = $_POST['societé'];
    $image = $uploadfile;

    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "\n Session variables are set. \n";
}
?>

<?php
$cookie_name = "USER";
$cookie_value = "Yassine Chettouch";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ta Carte Visite</title>
    <link rel="stylesheet" href="../css/carte.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

    
    <?php 
    echo "<style>";
    echo ".front-face{background-image: url('$image')}";
    echo ".export{background-image: url('$image')}";
    echo "</style>";
?>
</head>




<body>
    <header>
        <h2>Changer le theme:</h2>
        <div class="themes">
            <div id="dark"><i class="material-icons">dark_mode</i></div>
            <div id="light"><i class="material-icons">light_mode</i></div>
        </div>
    </header>
    <div class="container back-face" id="back">
        <div class="image" >
            <img src="<?php echo $image ?>">
            <div class="name">
                <h1><?php echo $prenom; echo " " ; echo $nom; ?></h1>
                <p><?php echo $specialite ?></p>
            </div>
        </div>
        <div class="line"></div>
        <div class="info">
            <div class="column">

                <div class="text">
                    <div class="title">
                        <span><i class="material-icons">phone</i></span>
                        <p class="title">Téléphone</p>
                    </div>
                    
                    <p class="description"><?php echo $telephone ?></p>
                </div>

                <div class="text">
                    <div class="title">
                        <span><i class="material-icons">mail</i></span>
                        <p class="title">E-mail</p>
                    </div>
                    
                    <p class="description"><?php echo $email ?></p>
                </div>

                <div class="text">
                    <div class="title">
                        <span><i class="material-icons">web</i></span>
                        <p class="title">Site Web</p>
                    </div>
                    
                    <p class="description"><?php echo $siteweb ?></p>
                </div>

                <div class="text">
                    <div class="title">
                        <span><i class="material-icons">share_location</i></span>
                        <p class="title">Adresse</p>
                    </div>
                    
                    <p class="description"><?php echo $adresse ?></p>
                </div>
            </div>

            <div class="company">
                <i class="material-icons">code</i>
                <p><?php echo $societe ?></p>
            </div>
        </div>
    </div>

    <div class="container front-face" id="front">
        <div class="after"></div>
        <i class="material-icons">code</i>
        <h1><?php echo $societe ?></h1>
    </div>


    <div class="container export">
        <div class="after-export"></div>
        <div class="download" onclick="genPDF()" id="download">DOWNLOAD</div>
        <div class="preview" onclick="printDiv()">PREVIEW</div>
    </div>


</body>

<footer>
    <p>Réalisé par: Yassine Chettouch</p>
</footer>


<script src="../js/theme.js"></script>
<script src="../js/download.js"></script>
<script type="text/javascript">
  $(function() { 
    $("#download").click(function() { 
        html2canvas($("#back"), {
            onrendered: function(canvas) {
                theCanvas = canvas;


                canvas.toBlob(function(blob) {
                    saveAs(blob, "Dashboard.png"); 
                });
            }
        });
    });
});
  </script>

<?php

echo "<script> \n";

if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "console.log('File is valid, and was successfully uploaded.'); \n";
} else {
    echo "console.error('Upload failed');";
    echo "alert('Upload failed');";
}

echo "let info = '". json_encode($_FILES) ."';\n";

echo "console.log('Here is some more debugging info:'); \n";
echo "console.table(info) \n";

echo "</script>";

?>
</html>