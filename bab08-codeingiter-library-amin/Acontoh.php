<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acontoh extends CI_Controller
{
#==================================================================================================
##-------------------------------------------------------------------------------------------------
	public function __construct()
	{
		parent::__construct();
		# load dari folder application/libraries untuk session
		$this->load->library('Sesi');
		//$this->load->library('Kebenaran');
		//Kebenaran::kawalKeluar();
		# load dari folder application/models
		$this->load->model('acontoh_model');
		//$this->load->model('***_model');
		# load dari folder application/helper
		$this->load->helper('aminkawal');
		$this->load->helper('aminpapar');
		$this->load->helper('aminborang');
		# load dari folder application/libraries
		$this->load->library('AminInput');
		$this->load->library('aminborangw3css');
		# load dari folder application/views
		//$this->load->view('aviews_function_global');
		$this->folderView = $this->uri->segment(1,0);# berasaskan nama class semasa
	}
##-------------------------------------------------------------------------------------------------
	function menuAsasV01($namaFungsi, $papar = '0')
	{
		//echo '<hr>Nama class :' . __METHOD__ . '|';
		# set pembolehubah utama
		$class = $this->uri->segment(1,0);
		$fungsi = $this->uri->segment(2,0);
		# semak $papar
		if($papar == '0'):
			return array($class,$fungsi);
		else:
			echo '<hr>Nama class :' . $namaFungsi . '<hr>';
			echo '<a href=' . base_url() . $class . '>Index</a><hr>';
			//echo '<a href=' . base_url() . '>Keluar</a><hr>';
			return array($class,$fungsi);
		endif;
		#
	}
##-------------------------------------------------------------------------------------------------
	function menuAsasV02($namaFungsi, $papar = '0')
	{
		//echo '<hr>Nama class :' . __METHOD__ . '|';
		# set pembolehubah utama
		$c1 = $this->uri->segment(1,0);// class
		$c2 = $this->uri->segment(2,0);// fungsi / method
		$c3 = $this->uri->segment(3,0);// nilai pembolehubah
		$c4 = $this->uri->segment(4,0);// nilai pembolehubah
		$data = [];//untuk kegunaan dalam papar fail View
		# semak $papar
		if($papar == '0'):
			return array($c1,$c2,$c3,$c4,$data);
		else:
			echo '<hr>Nama class :' . $namaFungsi . '<hr>';
			echo '<a href=' . base_url() . $c1 . '>Index</a><hr>';
			//echo '<a href=' . base_url() . '>Keluar</a><hr>';
			return array($c1,$c2,$c3,$c4,$data);
		endif;
		#
	}
##-------------------------------------------------------------------------------------------------
	function logout()
	{
		//$this->menuAsasSahaja(__METHOD__);//echo 'Anda Ingin Keluar???';
		Sesi::destroy();
		redirect();
	}
##-------------------------------------------------------------------------------------------------
	function semakDebug($c1,$c2,$c3,$c4,$data,$codeTable = null,$meta = null)
	{
		semakPembolehubah($c1,'c1');
		semakPembolehubah($c2,'c2');
		if(isset($c3)) semakPembolehubah($c3,'c3');
		if(isset($c4)) semakPembolehubah($c4,'c4');
		if(isset($data)) semakPembolehubah($data,'data');
		if(isset($codeTable)) semakPembolehubah($codeTable,'codeTable');
		if(isset($meta)) semakPembolehubah($meta,'meta');
	}
##-------------------------------------------------------------------------------------------------
	function masukDataUtama($data,$c1,$c2)
	{
		$data['c'] = array($c1,$c2);
		$data['menu'] = $c1 . '/' . $c2;
		$data['homeURL'] = base_url() . $c1 . '/dashboard/';
		$data['logoutUrl'] = base_url() . $c1 . '/logout/';
		$data['title'] = huruf('Besar_Depan',$c1 . '-' . $c2);

		return $data;
	}
##-------------------------------------------------------------------------------------------------
###################################################################################################
###################################################################################################
#--------------------------------------------------------------------------------------------------
	public function index()
	{
		# istihar pembolehubah - 0=dpt data, 1=papar $c1::$c2
		list($c1,$c2,$c3,$c4,$data) = $this->menuAsasV02(__METHOD__, 0);
		$pergi = $c1 . '/lists/page/1';
		//echo 'redirect(\'' . $pergi . '\')';
		redirect($pergi);
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	public function lists()
	{
		# istihar pembolehubah - 0=dpt data, 1=papar $c1::$c2
		list($c1,$c2,$c3,$c4,$data) = $this->menuAsasV02(__METHOD__, 0);
		# panggil model/database
		$data = $this->pilihJadualV00($data,'welcome',$c2,$c3,$c4);
		# debug pembolehubah //$this->semakDebug($c1,$c2,$c3,$c4,$data);
		# papar fail
		$data = $this->masukDataUtama($data,$c1,$c2);
		//semakPembolehubah($data,'dataAkhir');# semak data akhir
		$this->load->view($data['content'], $data);//*/
	}
#--------------------------------------------------------------------------------------------------
	public function pilihJadualV00($data,$c1,$c2,$c3,$c4 = 1)
	{
		//$this->menuAsasV02(__METHOD__, 1);
		$groupList = $codeTable = $meta = null;
		if($c3 === 'page')
		{
			# debug nilai awal echo 'awal<br>'; $this->semakDebug($c1,$c2,$c3,$c4,$data);
			# set pembolehubah sql 1 --------------------------------------------------------------
			$tajuk = 'Lists Course';
			$jadual = 'kod02_products';
			$medan = 'productCode idSubjek, productName title,'
			. ' concat_ws(" to ", DATE_FORMAT(tarikhmula, "%d-%m-%Y"),'
			. '	DATE_FORMAT(tarikhtamat, "%d-%m-%Y") ) `tempoh`,'
			. ' productDescription `Course Description`';
			$id = null;
			# buat kiraan page dalam table
			$limitpage = [30,$c4];
			$jumLimit = $this->table_model->getCountV02($jadual,$limitpage);
			# sql ke 1 ----------------------------------------------------------------------------
			//$sql = $this->table_model->sqlKompleks03($jadual,$medan);
			$sql = $this->table_model->sqlKompleks04($medan,$jadual,$id,$jumLimit);
			list($data['senarai'][$tajuk],$data['meta'][$tajuk])
				= $this->table_model->jalankanSqlKompleks($sql);
			$data['jumLimit'] = $jumLimit;
			# debug sql //semakPembolehubah($sql,'sql kali 01');
			$data['content'] = $c1 . '/01-list-subject';
			#--------------------------------------------------------------------------------------
		}
		else
		{
			# debug nilai awal echo 'awal<br>'; $this->semakDebug($c1,$c2,$c3,$c4,$data);
			# set pembolehubah sql 2 --------------------------------------------------------------
			$jadual = 'Course Description';
			$jadualAB = 'kod02_products A LEFT JOIN kod02_bidang B';
			$id[] = ['medan' => 'productCode', 'cari' => $c4];
			$joinId = ' A.codeCategory = B.kod';
			$medan = 'productCode idSubjek, productName title, codeInstructor Instructor,'
			. 'B.keterangan Categories, tarikhMula `StartDate`, tarikhTamat `EndDate`,'
			. 'hargaAsal price, hargaDiskaun priceafterdiskaun,'
			. 'productDescription `Course Description`';
			# sql ke 2 ----------------------------------------------------------------------------
			$sql = $this->table_model->sqlKompleks03($medan,$jadualAB,$joinId,$id);
			list($data['senarai'][$jadual],$data['meta'][$jadual])
				= $this->table_model->jalankanSqlKompleks($sql);
			# debug sql //semakPembolehubah($sql,'sql kali 02');
			$data['content'] = $c1 . '/02-subject-detail';
			#--------------------------------------------------------------------------------------
		}
		//$this->semakDebug($c1,$c2,$c3,$c4,$data,$codeTable,$meta,$groupList);

		return $data;
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#==================================================================================================
}