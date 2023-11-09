<?php
require'dompdf/dompdf/vendor/autoload.php';
use Dompdf\Dompdf;
$nom = $_POST['nom'];

$dompdf = new Dompdf();

$dompdf->set_option('isRemoteEnabled',true);

$html = file_get_contents("bepc.html");
$html = str_replace('[Nom]',htmlspecialchars($nom),$html);
$dompdf->setPaper('A4','landscape');
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("attestation",array("Attachment"=>0));
