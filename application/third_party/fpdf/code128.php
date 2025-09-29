<?php

/*******************************************************************************
* Script :  PDF_Code128
* Version : 1.2
* Date :    2016-01-31
* Auteur :  Roland Gautier
*
* Version   Date        Detail
* 1.2       2016-01-31  Compatibility with FPDF 1.8
* 1.1       2015-04-10  128 control characters FNC1 to FNC4 accepted
* 1.0       2008-05-20  First release
*
* Code128($x, $y, $code, $w, $h)
*     $x,$y :     angle supérieur gauche du code à barre
*                 upper left corner of the barcode
*     $code :     le code à créer
*                 ascii text to convert to barcode
*     $w :        largeur hors tout du code dans l'unité courante
*                 (prévoir 5 à 15 mm de blanc à droite et à gauche)
*                 barcode total width (current unit)
*                 (keep 5 to 15 mm white on left and right sides)
*     $h :        hauteur hors tout du code dans l'unité courante
*                 barcode total height (current unit)
*
* Commutation des jeux ABC automatique et optimisée
* Automatic and optimized A/B/C sets selection and switching
*
*
*   128 barcode control characters
*   ASCII   Aset            Bset        [ne pas utiliser][do not use]
*   ---------------------------
*   200     FNC3            FNC3
*   201     FNC2            FNC2
*   202     ShiftA          ShiftB
*   203     [SwitchToCset]  [SwitchToCset]
*   204     [SwitchToBset]  FNC4
*   205     FNC4            [SwitchToAset]
*   206     FNC1            FNC1
*******************************************************************************/
include('Barcode.php'); 
require('fpdf.php'); 
class eFPDF extends FPDF{ 
    function TextWithRotation($x, $y, $txt, $txt_angle, $font_angle=0) 
    { 
        $font_angle+=90+$txt_angle; 
        $txt_angle*=M_PI/180; 
        $font_angle*=M_PI/180; 
    
        $txt_dx=cos($txt_angle); 
        $txt_dy=sin($txt_angle); 
        $font_dx=cos($font_angle); 
        $font_dy=sin($font_angle); 
    
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',$txt_dx,$txt_dy,$font_dx,$font_dy,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt)); 
        if ($this->ColorFlag) 
            $s='q '.$this->TextColor.' '.$s.' Q'; 
        $this->_out($s); 
    } 
  } 
?>