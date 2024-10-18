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
		echo 'Bismillah Triger Perhitungan K - MEDOIDS CAHYA<br>';

		$data = $this->mAnalisis->variabel();

		//menampilkan sample data iterasi 1
		$data_limit1 = $this->mAnalisis->triger_limit1();
		foreach ($data_limit1 as $key => $value) {
			// $n[] = $value->nama_produk;
			$r[] = $value->recency;
			$f[] = $value->frequency;
			$m[] = $value->monetary;

			echo $value->id_pelanggan . '|' . $value->recency . '|' . $value->frequency . '|' . $value->monetary;
			echo '<br>';
		}
		echo '<hr>';
		echo '<table border="1"';


		$no = 1;
		$tot_kedekatan1 = 0;
		foreach ($data as $key => $value) {
			//rumus euclidean
			$c1 = round(sqrt(pow($r[0] - $value->recency, 2) + pow($f[0] - $value->frequency, 2) + pow($m[0] - $value->monetary, 2)), 3);
			$c2 = round(sqrt(pow($r[1] - $value->recency, 2) + pow($f[1] - $value->frequency, 2) + pow($m[1] - $value->monetary, 2)), 3);

			//mencari nilai min antara c1 dengan c2
			$min1 = min($c1, $c2);

			//menjumlahkan nilai min iterasi 1
			$tot_kedekatan1 += $min1;
			
			if ($min1 == $c1) {
				$cluster1[] = '1';
				$a = '1';
			} else {
				$cluster1[] = '2';
				$a = '2';
			}
			$pel1[] = $value->id_pelanggan;
			echo '<tr>';
			echo '<td>' . $no++ . '</td>';
			echo '<td>' . $value->id_pelanggan . '</td>';
			echo '<td>' . $c1 . '</td>';
			echo '<td>' .  $c2 . '</td>';
			echo '<td> Min. ' .  $min1 . '</td>';
			echo '<td>' .  $a . '</td></tr>';
		}
		// echo $tot_kedekatan1;
		echo '</table>';


		//iterasi 2
		echo '<hr>';

		echo '<table border="1"';

		//mengambil sample data iterasi 2
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
			//rumus euclidean
			$c12 = round(sqrt(pow($r2[0] - $value->recency, 2) + pow($f2[0] - $value->frequency, 2) + pow($m2[0] - $value->monetary, 2)), 3);
			$c22 = round(sqrt(pow($r2[1] - $value->recency, 2) + pow($f2[1] - $value->frequency, 2) + pow($m2[1] - $value->monetary, 2)), 3);
			$min2 = min($c12, $c22);
			$tot_kedekatan2 += $min2;
			if ($min2 == $c12) {
				$cluster2[] = '1';
				$b = '1';
			} else {
				$cluster2[] = '2';
				$b = '2';
			}
			$pel2[] = $value->id_pelanggan;
			// echo 'No.' . $no++ . '| ' . $c12 . ' | ' . $c22 . ' Min : ' . $min;

			echo '<tr>';
			echo '<td>' . $no++ . '</td>';
			echo '<td>' . $value->id_pelanggan . '</td>';
			echo '<td>' . $c12 . '</td>';
			echo '<td>' .  $c22 . '</td>';
			echo '<td> Min. ' .  $min2 . '</td>';
			echo '<td>' .  $b . '</td></tr>';
		}
		echo '</table>';
		// echo $tot_kedekatan2;
		// echo '<br>';


		//rumus simpangan (S)
		$s = $tot_kedekatan2 - $tot_kedekatan1;
		echo 's:' . $s;
		echo '<br>';

		if ($s > 0) {
			for ($i = 0; $i < sizeof($cluster1); $i++) {
				echo $cluster1[$i] . '|' . $pel1[$i];
				echo '<br>';

				$hasil[] = $cluster1[$i];
				$id_pel[] = $pel1[$i];
			}
		} else {
			for ($i = 0; $i < sizeof($cluster2); $i++) {
				echo $cluster2[$i] . '|' . $pel2[$i];
				echo '<br>';

				$hasil[] = $cluster2[$i];
				$id_pel[] = $pel2[$i];
			}
		}

		//update level member pelanggan
		for ($dt = 0; $dt < sizeof($hasil); $dt++) {
			$data = array(
				'level_member' => $hasil[$dt]
			);
			$this->db->where('id_pelanggan', $id_pel[$dt]);
			$this->db->update('pelanggan', $data);
		}
	}
}
/* End of file cAnalisisDummy.php */
