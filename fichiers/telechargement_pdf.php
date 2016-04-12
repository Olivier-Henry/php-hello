<?php

$pdfPath = "pdf/support-php.pdf";
$fileName = "coursPHP.pdf";

header("content-type; application/pdf");
header("content-disposition: attachement; filename=$fileName");


readfile($pdfPath);
