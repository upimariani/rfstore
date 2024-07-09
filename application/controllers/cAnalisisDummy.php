<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisisDummy extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		echo 'Bismillah Triger Perhitungan Tahun Sebelumnya';

		$data = $this->mAnalisis->variabel();
		$data_limit1 = $this->mAnalisis->triger_limit2();
		foreach ($data_limit1 as $key => $value) {
			// $n[] = $value->nama_produk;
			$r[] = $value->recency;
			$f[] = $value->frequency;
			$m[] = $value->monetary;

			echo $value->id_pelanggan . '|' . $value->recency . '|' . $value->frequency . '|' . $value->monetary;
			echo '<br>';
		}
		echo '<hr>';
		$no = 1;
		$tot_kedekatan1 = 0;
		foreach ($data as $key => $value) {

			$c1 = round(sqrt(pow($r[1] - $value->recency, 2) + pow($f[1] - $value->frequency, 2) + pow($m[1] - $value->monetary, 2)), 3);
			$c2 = round(sqrt(pow($r[0] - $value->recency, 2) + pow($f[0] - $value->frequency, 2) + pow($m[0] - $value->monetary, 2)), 3);
			$min = min($c1, $c2);
			$tot_kedekatan1 += $min;
			if ($min == $c1) {
				$cluster1[] = '1';
			} else {
				$cluster1[] = '2';
			}
			echo 'No.' . $no++ . '| ' . $c1 . ' | ' . $c2 . ' Min : ' . $min;
			echo '<br>';
		}
		// echo $tot_kedekatan1;



		//iterasi 2
		echo '<hr>';
		$data_limit2 = $this->mAnalisis->triger_limit2();
		foreach ($data_limit2 as $key => $value) {
			// $n[] = $value->nama_produk;
			$r2[] = $value->recency;
			$f2[] = $value->frequency;
			$m2[] = $value->monetary;

			echo $value->id_pelanggan . '|' . $value->recency . '|' . $value->frequency . '|' . $value->monetary;
			echo '<br>';
		}
		echo '<hr>';
		$no = 1;
		$tot_kedekatan2 = 0;
		foreach ($data as $key => $value) {
			$c12 = round(sqrt(pow($r2[1] - $value->recency, 2) + pow($f2[1] - $value->frequency, 2) + pow($m2[1] - $value->monetary, 2)), 3);
			$c22 = round(sqrt(pow($r2[0] - $value->recency, 2) + pow($f2[0] - $value->frequency, 2) + pow($m2[0] - $value->monetary, 2)), 3);
			$min = min($c1, $c2);
			$tot_kedekatan2 += $min;
			if ($min == $c12) {
				$cluster2[] = '1';
			} else {
				$cluster2[] = '2';
			}
			echo 'No.' . $no++ . '| ' . $c12 . ' | ' . $c22 . ' Min : ' . $min;
			echo '<br>';
		}
		// echo $tot_kedekatan2;
		// echo '<br>';


		//rumus simpangan (S)
		$s = $tot_kedekatan2 - $tot_kedekatan1;
		echo 's:' . $s;
		echo '<br>';

		if ($s > 0) {
			for ($i = 0; $i < sizeof($cluster1); $i++) {
				echo $cluster1[$i];
			}
		} else {
			for ($i = 0; $i < sizeof($cluster2); $i++) {
				echo $cluster2[$i];
			}
		}
	}
}
/* End of file cAnalisisDummy.php */
