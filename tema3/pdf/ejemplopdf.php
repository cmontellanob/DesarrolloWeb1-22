<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
$mpdf->SetHTMLHeader('
<div style="text-align: right; font-weight: bold;">
    My document
</div>');
$mpdf->SetHTMLFooter('
<table width="100%">
    <tr>
        <td width="33%">{DATE j-m-Y}</td>
        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
        <td width="33%" style="text-align: right;">My document</td>
    </tr>
</table>');

$mpdf->WriteHTML('<h1>Hola Mundo</h1>
<div> segunda linea</>');
$mpdf->Output();

?>