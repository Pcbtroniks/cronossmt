<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./application/vendor/autoload.php");
use Spipu\Html2Pdf\Html2Pdf;

class Html2pdfCI {

  public function generate($html)
  {
    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML($html);
    $html2pdf->output();
  }
}
