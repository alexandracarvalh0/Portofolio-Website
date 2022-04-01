<?php
  header('Content-Type: application/download');
  header('Content-Disposition: attachment; filename="CV.pdf"');
  header("Content-Length: " . filesize("CV.pdf"));
  $fp = fopen("CV.pdf", "r");
  fpassthru($fp);
  fclose($fp);
?>