<?php
require'dompdf/dompdf/vendor/autoload.php';
use Dompdf\Dompdf;
$nom = $_POST['nom'];
$mention = $_POST['mention'];

$dompdf = new Dompdf();

$dompdf->set_option('isRemoteEnabled',true);

$html = file_get_contents("bac.html");
$html = str_replace('[Nom]',htmlspecialchars($nom),$html);
$html = str_replace('[mention]',htmlspecialchars($mention),$html);
$dompdf->setPaper('A4','landscape');
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("attestation",array("Attachment"=>0));
