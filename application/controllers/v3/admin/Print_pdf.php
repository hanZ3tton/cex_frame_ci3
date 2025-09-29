<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Print_pdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Barcode128');
    }
    function index()
    {
        require_once APPPATH . '/third_party/fpdf/fpdf.php';
        require_once APPPATH . '/third_party/fpdi/fpdi.php';

        $account = 'CEX0001';
        $request_date = '2024-06-25';
        $shipper_name = 'John Doe';
        $shipper_phone = '1234567890';
        $shipper_province = 'Province';
        $shipper_city = 'City';
        $shipper_address = 'Address';
        $shipper_postcode = '12345';
        $receiver_name = 'Jane Doe';
        $receiver_phone = '0987654321';
        $receiver_province = 'Province';
        $receiver_city = 'City';
        $receiver_address = 'Address';
        $receiver_postcode = '54321';
        $total_weight = '10 kg';
        $total_koli = '2';
        $airwaybill = 'AWB123456';
        $notes = 'Handle with care';

        $pdf = new FPDI();
        $pdf->SetMargins(0, 0, 0, 0);
        $pdf->setSourceFile(APPPATH . '/third_party/pdf_template/domestics/themplate_resi_domestic_a4_default.pdf');
        $tplIdx = $pdf->importPage(1);
        $pdf->AddPage('P');
        $pdf->useTemplate($tplIdx);

        // START BLOK CITY OF ORIGIN & DESTINATION
        $pdf->SetFont('Courier', 'B', 10);
        $pdf->SetXY(94, 13);
        $pdf->Write(0, $shipper_city);

        $pdf->SetFont('Courier', 'B', 10);
        $pdf->SetXY(94, 16);
        $pdf->MultiCell(45, 3, $shipper_province);

        $pdf->SetFont('Courier', 'B', 10);
        $pdf->SetXY(150, 13);
        $pdf->Write(0, $receiver_city);

        $pdf->SetFont('Courier', 'B', 10);
        $pdf->SetXY(150, 16);
        $pdf->MultiCell(45, 3, $receiver_province);

        $pdf->SetFont('Courier', 'B', 10);
        $pdf->SetXY(94, 34);
        $pdf->Write(0, "Tanggal :" . DATE('d M Y', strtotime($request_date)));
        // END

        // START BLOK SENDER
        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(28, 47);
        $pdf->Write(0, $shipper_name . '(' . $account . ')');

        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(28, 51);
        $pdf->Write(0, $shipper_phone);

        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(28, 53.5);
        $pdf->MultiCell(70, 3, $shipper_address);

        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(28, 67);
        $pdf->Write(0, $shipper_postcode);
        // END

        // START BLOK RECIPIENT
        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(127, 47);
        $pdf->Write(0, $receiver_name);

        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(127, 51);
        $pdf->Write(0, $receiver_phone);

        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(127, 53.5);
        $pdf->MultiCell(70, 3, $receiver_address);

        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(129, 67);
        $pdf->Write(0, $receiver_postcode);
        // END MULTICELL

        // START BLOK WEIGHT, KOLI, SHIPPING TYPE & DESCRIPTION
        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(40, 76);
        $pdf->Write(0, $total_weight);

        $pdf->SetFont('Courier', 'B', 9);
        $pdf->SetXY(40, 80);
        $pdf->Write(0, $total_koli);

        $pdf->SetFont('Courier', 'B', 10);
        $pdf->SetXY(40, 83);
        $pdf->MultiCell(155, 3, $notes);
        // END

        // $path = 'uploads/domestic/shipment/qrcode/';
        // $qrcode = $this->generateQrcode($airwaybill, $path);
        // $pdf->Image($path . $qrcode, 150, 94, 26, 26);
        // $path = 'uploads/domestic/shipment/barcode/';
        // $barcode = $this->generateBarcode($airwaybill, $path);
        // $barcode = $this->barcode128->generate($airwaybill);
        // $pdf->Image($path . $barcode, 30, 98, 100, 20);
        $pdf->Output($airwaybill . '.pdf', 'I');
    }
}
