<?php
if($_POST){
    require('fpdf/fpdf.php');
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $heure = $_POST['heure'];
    $minute = $_POST['minute'];
    $title = 'Convention etudiants';

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Calculate width of title and position
    

    $pdf->Write(10, "Bonjour ");
    $pdf->Write(10, $name);
    $pdf->Write(10, " ");
    $pdf->Write(10, $prenom);

    $pdf->Write(10, "\n");
    $pdf->Write(10, "\n");
    $pdf->Write(10, "\n");

    $pdf->Write(10, "Vous avez suvi ");
    $pdf->Write(10, $heure);
    $pdf->Write(10, " heure ");
    $pdf->Write(10, $minute);
    $pdf->Write(10, " minute de votre FormationPlus.");

    $pdf->Write(10, "\n");

    $pdf->Write(10, "Pouvez-vous nous retourner ce mail avec la piéce jointe signée.");

    $pdf->Write(10, "\n");
    $pdf->Write(10, "\n");
    $pdf->Write(10, "\n");

    $pdf->Write(10, "Cordialement,");

    $pdf->Write(10, "\n");

    $pdf->Write(10, "FormationPlus");




    $pdf->Output();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
            <div class="header">
                Convention etudiants
            </div>
            <div class="body">
                <form action='' method="POST">
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="text" name="prenom" placeholder="Prenom" required>
                    <input class="email" type="email" name="email" placeholder="Email" required>
                    <input class="heure" type="number" name="heure" placeholder="heure" required>
                    <input class="minute" type="number" name="minute" placeholder="minute" required>
                    <input type="submit" value="Add User">
                </form>
            </div>
            <div class="footer">
                <p>Developer par <a href="https://moha912.github.io/Portfolio/index.html" target="_blank">Mohamed ZENIDI</a></p>
            </div>
    </div>
</body>
</html>