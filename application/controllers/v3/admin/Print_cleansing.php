<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Print_cleansing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
    function index()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'CEX CLEANSING', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(90, 6, 'Nama Pegawai', 1, 0, 'C');
        $pdf->Cell(120, 6, 'Alamat', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Telp', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $order = $this->db->get('tb_order_member')->result();
        $no = 0;
        foreach ($order as $data) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(90, 6, $data->ship_name, 1, 0);
            $pdf->Cell(120, 6, $data->ship_address, 1, 0);
            $pdf->Cell(40, 6, $data->ship_phone, 1, 1);
        }
        $pdf->Output();
    }
}
