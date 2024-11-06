
<?php
if(!empty($_POST['submit']))
{

   $email = $_POST['email'];
   $password = $_POST['pwd'];
     
    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf-> SetFont("Arial","",16);
    $pdf-> Cell(0,10,"Anish",1,1,'C');

    $pdf-> Cell(90,10,"Email",1,0,'C');
    $pdf-> Cell(0,10,"Pasword",1,1,'C');

    $pdf-> Cell(90,10,$email,1,0,);
    $pdf-> Cell(0,10,$password,1,1,);




    $pdf->output(); 
    
}


?>