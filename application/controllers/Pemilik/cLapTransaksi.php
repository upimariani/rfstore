<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLapTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi_admin()
		);
		$this->load->view('Pemilik/Layouts/head');
		$this->load->view('Pemilik/Layouts/header');
		$this->load->view('Pemilik/Layouts/aside');
		$this->load->view('Pemilik/vLapTransaksi', $data);
		$this->load->view('Pemilik/Layouts/footer');
	}
	public function cetak_transaksi()
	{
		$bulan = $this->input->post('periode');
		$tahun = $this->input->post('tahun');

		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);
		// $pdf->Image('asset/logo.jpg', 3, 3, 50);
		$pdf->Cell(200, 40, 'LAPORAN TRANSAKSI BULANAN', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(30, 7, 'Id Transaksi', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(70, 7, '	Atas Nama', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Total Bayar', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;


		$data = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan WHERE MONTH(tgl_transaksi)='" . $bulan . "' AND YEAR(tgl_transaksi)='" . $tahun . "'")->result();
		foreach ($data as $key => $value) {


			$pdf->Cell(30, 6, $value->id_transaksi, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->tgl_transaksi, 1, 0);
			$pdf->Cell(70, 6, $value->nama_pelanggan, 1, 0);
			$pdf->Cell(40, 6, 'Rp.' . number_format($value->total_transaksi), 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cLapTransaksi.php */
