<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';



class Mypdf extends TCPDF

{


  public $company = null;

  public $doctype = null;

  public $ref_number = 0;

  public $trans_number = 0;

  public $fspr_number = 0;



  function __construct($company)

  {

    parent::__construct();



    $this->SetCreator(PDF_CREATOR);

    $this->SetAuthor('Doc Generator');



    // set margins

    $this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP / 2, PDF_MARGIN_RIGHT);

    $this->setPageOrientation('P', true, 10);

    $this->SetFont('dejavusans', '', 8); // set the font



    $this->setHeaderMargin(PDF_MARGIN_HEADER);

    $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM - 10);



    $this->SetPrintHeader(true);

    $this->SetPrintFooter(true);



    $this->setFontSubsetting(false);



    $this->company = $company['company'];

    $this->fspr_number = $company['fspr'];

    $this->trans = null;

    $this->docref = null;

    $this->hasPartner = null;
  }



  public function getCompany()

  {

    return $this->company;
  }

  public function setCompany($s)

  {

    $this->company = $s;
  }





  //Page header

  public function Header()

  {

    $image = base_url() . 'resources/1/logo-only.png';

    $this->SetX(0);

    $this->SetFillColor(68, 84, 106);

    $this->Cell(18, 18, '', 0, 0, 'L', true);

    $this->writeHtmlCell(21, 18, 24, 6, '<img src="' . $image . '" width="55">');

    $this->SetFont('helvetica', 'B', 16);

    $this->SetTextColor(68, 84, 106);



    $header_title = isset($_SESSION['header_title']) ? $_SESSION['header_title'] : "";



    $prev = $this->getY();

    $this->setXY($this->getX(), 14);

    $this->Cell(147, 13, $header_title, 0, 0, 'R');



    $this->setXY($this->getX(), $prev - 1);

    $this->SetFillColor(46, 116, 185);

    $this->Cell(18, 18, '', 0, 0, 'L', true);

    $this->setTopMargin(30);
  }



  // Page footer

  public function Footer()

  {

    // Position at 15 mm from bottom

    $this->SetY(-15);

    // Set font

    $this->SetFont('helvetica', '', 8);

    $this->SetTextColor(100, 149, 237);



    // Page number

    $image = base_url() . 'resources/1/logo.png';

    $this->Image($image, 18, 280, 0, 10, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

    $this->Cell(0, 10, 'www.eliteinsure.co.nz | Page ' . $this->getAliasNumPage(), 0, false, 'R', 0, '', 0, false, 'T', 'M');

    //$this->Cell(0, 10, 'www.eliteinsure.co.nz | Page'.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');

  }
}
