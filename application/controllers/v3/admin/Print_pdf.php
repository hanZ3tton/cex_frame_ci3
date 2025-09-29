<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Print_pdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('order_model');
    }

    function index($code, $type)
    {
        $dataOrder = $this->order_model->get_by_code($code)[0];
        if ($type == 1) {
            $this->domestic_print_a4($dataOrder);
        } else if ($type == 2) {
            $this->domestic_print_thermal($dataOrder);
        }
    }

    public function generateQrcode($code, $path)
    {
        $this->load->library('ciqrcode');
        $this->load->helper('url');
        if (!file_exists($path)) {
            if (!mkdir($path, 0755, true)) {
                die('Failed to create folders...');
            }
        }

        $filename = $code . ".png";
        $fileQrcode = $path . $filename;
        $savename = FCPATH . $fileQrcode;

        $params['data'] = $code;
        $params['level'] = 'H';
        $params['size'] = 50;
        $params['savename'] = $savename;
        $this->ciqrcode->generate($params);

        return $filename;
    }

    public function generateBarcode($code, $path)
    {
        $this->load->library('Ci_zend');
        $this->ci_zend->load('Zend/Barcode');
        if (!file_exists($path)) {
            if (!mkdir($path, 0755, true)) {
                die('Failed to create folders...');
            }
        }

        $generateBarcode = Zend_Barcode::draw('code128', 'image', array('text' => $code), array());
        $filenameBarcode = "{$code}.png";
        imagepng($generateBarcode, $path . $filenameBarcode);

        return $filenameBarcode;
    }


    function domestic_print_a4($data)
    {
        require_once APPPATH . '/third_party/fpdf/fpdf.php';
        require_once APPPATH . '/third_party/fpdi/fpdi.php';

        $account = $data->ship_account_number;
        $request_date = $data->tgl_kirim;
        $shipper_name = $data->ship_name;
        $shipper_phone = $data->ship_phone;
        $shipper_province = $data->ship_country;
        $shipper_city = $data->ship_city;
        $shipper_address = $data->ship_address;
        $shipper_postcode = $data->ship_postcode;
        $receiver_name = $data->rec_name;
        $receiver_phone =  $data->rec_phone;
        $receiver_province = $data->rec_country;
        $receiver_city = $data->rec_city;
        $receiver_address = $data->rec_address;
        $receiver_postcode = $data->rec_postcode;
        $total_weight = $data->weight . ' kg';
        $total_koli = $data->number_of_pieces;
        $airwaybill = $data->final_connote;
        $notes = $data->desc_of_goods;

        // Tentukan vendor berdasarkan account

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

        $path = 'uploads/domestic/shipment/qrcode/';
        $qrcode = $this->generateQrcode($airwaybill, $path);
        $pdf->Image($path . $qrcode, 150, 94, 26, 26);
        $path = 'uploads/domestic/shipment/barcode/';
        $barcode = $this->generateBarcode($airwaybill, $path);
        // $barcode = $this->barcode128->generate($airwaybill);
        $pdf->Image($path . $barcode, 30, 98, 100, 20);
        $pdf->Output($airwaybill . '.pdf', 'I');
    }

    public function domestic_print_thermal($data)
    {
        require_once APPPATH . '/third_party/fpdf/fpdf.php';
        require_once APPPATH . '/third_party/fpdi/fpdi.php';

        $account = $data->ship_account_number;
        $request_date = $data->tgl_kirim;
        $shipper_name = $data->ship_name;
        $shipper_phone = $data->ship_phone;
        $shipper_province = $data->ship_country;
        $shipper_city = $data->ship_city;
        $shipper_address = $data->ship_address;
        $shipper_postcode = $data->ship_postcode;
        $receiver_name = $data->rec_name;
        $receiver_phone =  $data->rec_phone;
        $receiver_province = $data->rec_country;
        $receiver_city = $data->rec_city;
        $receiver_address = $data->rec_address;
        $receiver_postcode = $data->rec_postcode;
        $total_weight = $data->weight . ' kg';
        $total_koli = $data->number_of_pieces;
        $airwaybill = $data->final_connote;
        $notes = $data->desc_of_goods;

        $pdf = new FPDI();
        $pdf->SetMargins(0, 0, 0, 0);
        $pdf->setSourceFile(APPPATH . '/third_party/pdf_template/domestics/themplate_resi_domestic_thermal_default.pdf');
        $tplIdx = $pdf->importPage(1);
        $pdf->AddPage('L', array('148', '105'));
        $pdf->useTemplate($tplIdx);
        $pdf->SetAutoPageBreak(false);


        // START BLOK CITY & PROVINCE
        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(64, 11);
        $pdf->Write(0, $shipper_city);

        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(64, 13);
        $pdf->MultiCell(39, 3, $shipper_province);

        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(103, 11);
        $pdf->Write(0, $receiver_city);

        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(103, 13);
        $pdf->MultiCell(39, 3, $receiver_province);

        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(64, 21);
        $pdf->Write(0, "Tanggal :" . DATE('d M Y', strtotime($request_date)));
        // END

        // START BLOK SENDER
        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(19, 33);
        $pdf->Write(0, $shipper_name . '(' . $account . ')');

        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(19, 37);
        $pdf->Write(0, $shipper_phone);

        $pdf->SetFont('Courier', 'B', 6);
        $pdf->SetXY(19, 39);
        $pdf->MultiCell(54, 3, $shipper_address);

        $pdf->SetFont('Courier', 'B', 7);
        $pdf->SetXY(23, 49);
        $pdf->Write(0, $shipper_postcode);
        // END

        // START BLOK RECIPENT
        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(91, 33);
        $pdf->Write(0, $receiver_name);

        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(91, 37);
        $pdf->Write(0, $receiver_phone);

        $pdf->SetFont('Courier', 'B', 6);
        $pdf->SetXY(91, 39);
        $pdf->MultiCell(54, 3, $receiver_address);

        $pdf->SetFont('Courier', 'B', 7);
        $pdf->SetXY(95, 49);
        $pdf->Write(0, $receiver_postcode);
        // END MULTICELL


        // START BLOK WEIGHT, KOLI, SHIPPING TYPE & DESCRIPTION
        $pdf->SetFont('Courier', 'B', 10);
        $pdf->SetXY(32, 57.5);
        $pdf->Write(0, $total_weight);

        $pdf->SetFont('Courier', 'B', 10);
        $pdf->SetXY(32, 61.5);
        $pdf->Write(0, $total_koli);

        $pdf->SetFont('Courier', 'B', 8);
        $pdf->SetXY(32, 64);
        $pdf->MultiCell(110, 3, $notes);
        // END

        $path = 'uploads/domestic/shipment/qrcode/';
        $qrcode = $this->generateQrcode($airwaybill, $path);
        $pdf->Image($path . $qrcode, 110, 76, 22, 22);
        $path = 'uploads/domestic/shipment/barcode/';
        $barcode = $this->generateBarcode($airwaybill, $path);
        $pdf->Image($path . $barcode, 20, 79, 79, 19);

        $pdf->Output($airwaybill . '.pdf', 'I');
    }
}
