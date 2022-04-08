<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
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
    $this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP / 2, PDF_MARGIN_RIGHT);
    $this->setPageOrientation('P', true, 10);
    $this->SetFont('dejavusans', '', 8); // set the font

    $this->setHeaderMargin(PDF_MARGIN_HEADER);
    $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM - 10);

    $this->SetPrintHeader(false);
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

    if ($this->company == 2) {
      // Add up with logo
      $image = base_url() . "resources/1/letterhead.png";
      $this->Image($image, 10, 4, 189, 0, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

      // Add up the date stamp
      $this->SetFont('helvetica', 'N', 8);
      $this->Cell(0, 15, date("Y/m/d"), 0, false, 'C', 0, '', 0, false, 'M', 'M');

      $this->setY(45);
    } else if ($this->company == 3) {
      // Just the logo
      $image = base_url() . "resources/2/letterhead.png";
      $this->Image($image, 125, 4, 0, 23, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }
  }

  // Page footer
  public function Footer()
  {

    // Position at 15 mm from bottom
    $this->SetY(-12);
    // Set font
    $this->SetFont('helvetica', 'N', 8);

    $currentNumber = $this->getNumPages();
    $doctype = $this->doctype;
    $hasPartner = $this->hasPartner;





    if (($currentNumber == "1" || $currentNumber == 1) && $doctype != "disclosure") {
    } else if ($doctype == "disclosure") {
      //kevin031121
      $image = base_url() . "resources/1/logo.png";
      $this->Image($image,  8, 280, 0, 10, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
      $text = "www.eliteinsure.co.nz | Page " . ($currentNumber);
      $this->Cell(0, 10, $text, 0, false, 'R', 0, '', 0, false, 'T', 'M');
    } else {
      // Page number
      $currentNumber--;



      $text = "Page " . ($currentNumber);
      $text = $text . " | " . $this->company->firm_name;

      if ($this->company->idfirm == 3) {
        $text = $text . " | Company No: 3069025 | FSP No: " . $this->fspr_number;
      } else if ($this->company->idfirm == 2) {
        $text = $text . " | Company No: 5898228 | FSP No: " . $this->fspr_number;
      }

      //kevin031121
      $image = base_url() . "resources/1/logo.png";
      $this->Image($image,  8, 280, 0, 10, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
      // $text = " www.eliteinsure.co.nz                                          \t                                             " . ($currentNumber);
      $text = "www.eliteinsure.co.nz | Page " . ($currentNumber);
      //kevin031121


      if ($doctype == 'factfind') {
        $this->Image($image,  8, 280, 0, 10, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        if ($hasPartner) {
          $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13, 14, 15, 16, 17, 18);
        } else {
          $arr = array(1, 2, 3, 4, 5, 6, 7, 9, 10, 11);
        }

        if (in_array($currentNumber, $arr)) {




          if ($hasPartner && $currentNumber == 7) {

            $this->Cell(110, 10, 'Income & Expenses not disclosed are outside of Advice Consideration. ', 0, false, 'C', 0, '', 0, false, 'T', 'M');
          } elseif ($hasPartner && $currentNumber == 8) {
            $this->Cell(110, 10, 'Assets & Liabilities not disclosed are outside of Advice Consideration. ', 0, false, 'C', 0, '', 0, false, 'T', 'M');
          } elseif (!$hasPartner && $currentNumber == 4) {
            $this->Cell(110, 10, 'Income & Expenses not disclosed are outside of Advice Consideration. ', 0, false, 'C', 0, '', 0, false, 'T', 'M');
          } elseif (!$hasPartner && $currentNumber == 5) {
            $this->Cell(110, 10, 'Assets & Liabilities not disclosed are outside of Advice Consideration. ', 0, false, 'C', 0, '', 0, false, 'T', 'M');
          } else {

            $this->Cell(110, 10, 'Information requested in the blank text boxes are not disclosed. ', 0, false, 'C', 0, '', 0, false, 'T', 'M');
          }
        }
      }

      $this->Cell(0, 10, $text, 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
  }
}
