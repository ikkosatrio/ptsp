<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('auth')){
			redirect('auth');
		}
		$this->blade->sebarno('ctrl', $this);
		
		$this->load->model('m_config');
		$this->load->model('m_banding');
		$this->load->model('m_kategoripenilaian');
		$this->load->model('m_subkategori');
        $this->load->model('m_kategorijbt');
		$this->load->model('m_penilaianptsp');
        $this->load->model('m_admin');
		$this->load->library('session');
		$this->data['config'] 			= $this->m_config->ambil('config',1)->row();
		
	}

	public function index()
	{
		$data 		= $this->data;
		$data['menu'] = "dashboard";
		echo $this->blade->nggambar('admin.home',$data);
	}

	// Start Config
	public function config ($type=null){
		$data         = $this->data;
		// $data         = $this->data;
		$data['menu'] = "config";

		if ($this->input->is_ajax_request()) {

			switch ($type) {

				case 'update':

					$logoname 		= $data['config']->logo;
					$iconname 		= $data['config']->icon;

					if (!empty($_FILES['logo']['name'])) {
						$upload 	= $this->upload('./assets/images/website/config/logo/','logo','logo');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$logoname 	= $upload['msg']['file_name'];
						if(!empty($logoname)){remFile(base_url().'assets/images/website/config/logo/'.$data['config']->logo);}
					}

					if (!empty($_FILES['icon']['name'])) {
						$upload 	= $this->upload('./assets/images/website/config/icon/','icon','icon');
						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$iconname 	= $upload['msg']['file_name'];
						if(!empty($iconname)){remFile(base_url().'assets/images/website/config/icon/'.$data['config']->icon);}
					}

					$id             = 1;
					$name           = $this->input->post('name');
					$email          = $this->input->post('email');
					$phone          = $this->input->post('phone');
					$facebook       = $this->input->post('facebook');
					$instagram      = $this->input->post('instagram');
					$address        = $this->input->post('address');
					$description    = $this->input->post('description');
					$meta_deskripsi = $this->input->post('meta_deskripsi');
					$meta_keyword   = $this->input->post('meta_keyword');

					$data = array(
						'name'           => $name,
						'email'          => $email,
						'phone'          => $phone,
						'facebook'       => $facebook,
						'instagram'      => $instagram,
						'address'        => $address,
						'description'    => $description,
						'icon'           => $iconname,
						'logo'           => $logoname,
						'meta_deskripsi' => $meta_deskripsi,
						'meta_keyword'   => $meta_keyword
					);

					$where = array(
						'id' => $id
					);

					if($this->m_config->update_data($where,$data,'config')){
						echo goResult(true,"Data Telah Di Perbarui");
						return;
					}

					break;

				default:
					echo goResult(false,"Konfigurasi Telah Di Simpan");
					return;
					break;
			}
		   return;
		}

		echo $this->blade->nggambar('admin.config.index',$data);
		return;
	}
	// End Config


	//Kategori Penilaian
    public function penilaian($url=null,$id=null)
    {
        $data             = $this->data;
        $data['menu']     = "kategori";
        $data['penilaian'] = $this->m_penilaianptsp->tampil_data('penilaianptsp')->result();

        $kategoris = $this->m_kategoripenilaian->tampil_data('kategoripenilaian')->result();

        $arrKat = array();
        foreach ($kategoris as $key => $kat) {
        	$where = array(
        		"id_kategori" => $kat->id_kategori,
        	);
        	$kat->subkategori = $this->m_subkategori->detail($where,"subkatpenilaian")->result();
        	$arrKat[] = $kat;
        }

        $data['kategoris']  = $arrKat;
        if ($url=="create") {
            $data['type']			= "create";
            echo $this->blade->nggambar('admin.penilaian.content',$data);
            return;
        }
        else if ($url=="detail" && $id!=null) {
            $data['type']			= "detail";
            $kategoris = $this->m_kategoripenilaian->tampil_data('kategoripenilaian')->result();

            $arrKat = array();
            foreach ($kategoris as $row){
                $where = array(
                    'id_kategori' => $row->id_kategori,
                );
                $row->skormaximal = $this->m_kategoripenilaian->maxskor($where,'subkatpenilaian') * 10;
                $where2 = array(
                    'penilaianptsp.id_penilaian' => $id,
                    'kategoripenilaian.id_kategori' => $row->id_kategori,
                );
                $row->skorperolehan = $this->m_penilaianptsp->perolehan($where2,'penilaianptsp')->row()->nilai;
                $arrKat[] = $row;
            }

        }else if ($url == "created" && $this->input->is_ajax_request() == true) {

            $userid     	= $this->session->userdata('id');
            $triwulan     	= $this->input->post('triwulan');

            $data = array(
                'id_admin'      => $userid,
                'triwulan'       =>1,
            );

            if($idpenilaian = $this->m_penilaianptsp->input_data($data,'penilaianptsp') ){
                $subkat = $this->m_subkategori->tampil_data('subkatpenilaian')->result();
                foreach ($subkat as $sub){
                    $nilai = "";
                    $kendala = "";
                    if($this->input->post('nilai-'.$sub->id_subkat)){
                        $nilai = $this->input->post('nilai-'.$sub->id_subkat);
                    }
                    if($this->input->post('kendala-'.$sub->id_subkat)){
                        $kendala = $this->input->post('kendala-'.$sub->id_subkat);
                    }

                    if($nilai){
                        $data2 = array(
                            'id_penilaian'      => $idpenilaian,
                            'nilai'       => $nilai,
                            'id_subkat' => $sub->id_subkat,
                        );
                        $this->m_penilaianptsp->input_data($data2,'detailpenilaian');
                    }
                }
            }

            echo goResult(true,"Data Telah Di Tambahkan");
            return;




        }
        else if ($url=="update" && $id!=null) {
            $data['type']    = "update";
            $where           = array('id_kategori' => $id);
            $data['kategori'] = $this->m_kategoripenilaian->detail($where,'kategoripenilaian')->row();
            echo $this->blade->nggambar('admin.kategoripenilaian.content',$data);
        }
        else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
            $where           = array('id_kategori' => $id);

            $kode_kat     	= $this->input->post('kode_kat');
            $nama_kat     	= $this->input->post('nama_kat');
            $deskripsi  = $this->input->post('deskripsi');

            $data = array(
            	'kode_kat'      => $kode_kat,
                'nama_kat'       => $nama_kat,
                'deskripsi_kat'   => $deskripsi,
            );

            if($this->m_kategoripenilaian->update_data($where,$data,'kategoripenilaian')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="deleted" && $id != null) {
            $where           = array('id_kategori' => $id);
            if ($this->m_kategoripenilaian->hapus_data($where,'kategoripenilaian')) {

            }
            redirect('superuser/kategoripenilaian/');
        }
        else {
            echo $this->blade->nggambar('admin.penilaian.index',$data);
            return;
        }
    }
    //end Kategori Penilaian
	
	

    //Banding
    public function banding($url=null,$id=null)
    {
    	$data             = $this->data;
        $data['menu']     = "banding";
        $data['banding'] = $this->m_banding->tampil_data('banding')->result();

        if ($url=="create") {
            $data['type']			= "create";
            echo $this->blade->nggambar('admin.banding.content',$data);
            return;
        }
        else if ($url == "created" && $this->input->is_ajax_request() == true) {

        	$id_banding     	= $this->input->post('id_banding');
        	$no_perkara     	= $this->input->post('no_perkara');
        	$asal_pa     	= $this->input->post('asal_pa');
        	$tgl_terima_berkas     	= $this->input->post('tgl_terima_berkas');
        	$no_surat_pta     	= $this->input->post('no_surat_pta');
        	$bulan_pta     	= $this->input->post('bulan_pta');
        	$tgl_surat_pta_m     	= $this->input->post('tgl_surat_pta_m');
        	$tgl_surat_pta_h     	= $this->input->post('tgl_surat_pta_h');
        	$nama_pb     	= $this->input->post('nama_pb');
        	$semula_pb     	= $this->input->post('semula_pb');
        	$umur_pb     	= $this->input->post('umur_pb');
        	$agama_pb     	= $this->input->post('agama_pb');
        	$pendidikan_pb     	= $this->input->post('pendidikan_pb');
        	$pekerjaan_pb     	= $this->input->post('pekerjaan_pb');
        	$alamat_pb     	= $this->input->post('alamat_pb');
        	$nama_kh_pb     	= $this->input->post('nama_kh_pb');
        	$umur_kh_pb     	= $this->input->post('umur_kh_pb');
        	$agama_kh_pb     	= $this->input->post('agama_kh_pb');
        	$pekerjaan_kh_pb     	= $this->input->post('pekerjaan_kh_pb');
        	$alamat_kh_pb     	= $this->input->post('alamat_kh_pb');
        	$nama_tb     	= $this->input->post('nama_tb');
        	$semula_tb     	= $this->input->post('semula_tb');
        	$umur_tb     	= $this->input->post('umur_tb');
        	$agama_tb     	= $this->input->post('agama_tb');
        	$pendidikan_tb     	= $this->input->post('pendidikan_tb');
        	$pekerjaan_tb     	= $this->input->post('pekerjaan_tb');
        	$alamat_tb     	= $this->input->post('alamat_tb');
        	$nama_kh_tb    	= $this->input->post('nama_kh_tb');
        	$umur_kh_tb     	= $this->input->post('umur_kh_tb');
        	$agama_kh_tb     	= $this->input->post('agama_kh_tb');
        	$pekerjaan_kh_tb     	= $this->input->post('pekerjaan_kh_tb');
        	$alamat_kh_tb     	= $this->input->post('alamat_kh_tb');
        	$tgl_putus_pa     	= $this->input->post('tgl_putus_pa');
			$no_perkara_pa     	= $this->input->post('no_perkara_pa');
			$amar_pa     	= $this->input->post('amar_pa');
			$ketua_majelis_pa     	= $this->input->post('ketua_majelis_pa');
			$hakim_agg_pa1    	= $this->input->post('hakim_agg_pa1');
			$hakim_agg_pa2    	= $this->input->post('hakim_agg_pa2');
			$pp_pa    	= $this->input->post('pp_pa');
			$tgl_akta_banding    	= $this->input->post('tgl_akta_banding');
			$jenis_pkr    	= $this->input->post('jenis_pkr');
			$kode_pa    	= $this->input->post('kode_pa');
			$no_sp_pa    	= $this->input->post('no_sp_pa');
			$bulan_sp_pa    	= $this->input->post('bulan_sp_pa');
			$tgl_sp_pa    	= $this->input->post('tgl_sp_pa');
			$pmh    	= $this->input->post('pmh');
			$ketua_majelis_pta    	= $this->input->post('ketua_majelis_pta');
			$kode_hm    	= $this->input->post('kode_hm');
			$hakim_agg_pta1    	= $this->input->post('hakim_agg_pta1');
			$kode_ha1    	= $this->input->post('kode_ha1');
			$hakim_agg_pta2    	= $this->input->post('hakim_agg_pta2');
			$kode_ha2    	= $this->input->post('kode_ha2');
			$pp_pta    	= $this->input->post('pp_pta');
			$kode_pp_pta    	= $this->input->post('kode_pp_pta');
			$penunjukkan_pp_pta    	= $this->input->post('penunjukkan_pp_pta');
			$tgl_berkas_diterima_majelis    	= $this->input->post('tgl_berkas_diterima_majelis');
			$tgl_phs    	= $this->input->post('tgl_phs');
			$tgl_putus_banding    	= $this->input->post('tgl_putus_banding');
			$amar_banding    	= $this->input->post('amar_banding');
			$tgl_minutasi    	= $this->input->post('tgl_minutasi');
			$tgl_kirim_berkas    	= $this->input->post('tgl_kirim_berkas');
			$tgl_upload    	= $this->input->post('tgl_upload');

            $data = array(
            	'id_banding'      => $id_banding,
                'no_perkara'       => $no_perkara,
                'tgl_terima_berkas'   => $tgl_terima_berkas,
                'asal_pa'   => $asal_pa,
                'no_surat_pta'   => $no_surat_pta,
                'bulan_pta'   => $bulan_pta,
                'tgl_surat_pta_m'   => $tgl_surat_pta_m,
                'tgl_surat_pta_h'   => $tgl_surat_pta_h,
                'nama_pb'   => $nama_pb,
                'semula_pb'   => $semula_pb,
                'umur_pb'   => $umur_pb,
                'agama_pb'   => $agama_pb,
                'pendidikan_pb'   => $pendidikan_pb,
                'pekerjaan_pb'   => $pekerjaan_pb,
                'alamat_pb'   => $alamat_pb,
                'nama_kh_pb'   => $nama_kh_pb,
                'umur_kh_pb'   => $umur_kh_pb,
                'agama_kh_pb'   => $agama_kh_pb,
                'pekerjaan_kh_pb'   => $pekerjaan_kh_pb,
                'alamat_kh_pb'   => $alamat_kh_pb,
                'nama_tb'   => $nama_tb,
                'semula_tb'   => $semula_tb,
                'umur_tb'   => $umur_tb,
                'agama_tb'   => $agama_tb,
                'pendidikan_tb'   => $pendidikan_tb,
                'pekerjaan_tb'   => $pekerjaan_tb,
                'alamat_tb'   => $alamat_tb,
                'nama_kh_tb'   => $nama_kh_tb,
                'umur_kh_tb'   => $umur_kh_tb,
                'agama_kh_tb'   => $agama_kh_tb,
                'pekerjaan_kh_tb'   => $pekerjaan_kh_tb,
                'alamat_kh_tb'   => $alamat_kh_tb,
                'tgl_putus_pa'   => $tgl_putus_pa,
				'no_perkara_pa'   => $no_perkara_pa,
				'amar_pa'   => $amar_pa,
				'ketua_majelis_pa'   => $ketua_majelis_pa,
				'hakim_agg_pa1'   => $hakim_agg_pa1,
				'hakim_agg_pa2'   => $hakim_agg_pa2,
				'pp_pa'   => $pp_pa,
				'tgl_akta_banding'   => $tgl_akta_banding,
				'jenis_pkr'   => $jenis_pkr,
				'kode_pa'   => $kode_pa,
				'no_sp_pa'   => $no_sp_pa,
				'bulan_sp_pa'   => $bulan_sp_pa,
				'tgl_sp_pa'   => $tgl_sp_pa,
				'pmh'   => $pmh,
				'ketua_majelis_pta'   => $ketua_majelis_pta,
				'kode_hm'   => $kode_hm,
				'hakim_agg_pta1'   => $hakim_agg_pta1,
				'kode_ha1'   => $kode_ha1,
				'hakim_agg_pta2'   => $hakim_agg_pta2,
				'kode_ha2'   => $kode_ha2,
				'pp_pta'   => $pp_pta,
				'kode_pp_pta'   => $kode_pp_pta,
				'penunjukkan_pp_pta'   => $penunjukkan_pp_pta,
				'tgl_berkas_diterima_majelis'   => $tgl_berkas_diterima_majelis,
				'tgl_phs'   => $tgl_phs,
				'tgl_putus_banding'   => $tgl_putus_banding,
				'amar_banding'   => $amar_banding,
				'tgl_minutasi'   => $tgl_minutasi,
				'tgl_kirim_berkas'   => $tgl_kirim_berkas,
				'tgl_upload'   => $tgl_upload,




            );

            if($this->m_banding->input_data($data,'banding')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="update" && $id!=null) {
            $data['type']    = "update";
            $where           = array('id_banding' => $id);
            $data['banding'] = $this->m_banding->detail($where,'banding')->row();
            echo $this->blade->nggambar('admin.banding.content',$data);
        }
        else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
            $where           = array('id_banding' => $id);

            $id_banding     	= $this->input->post('id_banding');
        	$no_perkara     	= $this->input->post('no_perkara');
        	$asal_pa     	= $this->input->post('asal_pa');
        	$tgl_terima_berkas     	= $this->input->post('tgl_terima_berkas');
        	$no_surat_pta     	= $this->input->post('no_surat_pta');
        	$bulan_pta     	= $this->input->post('bulan_pta');
        	$tgl_surat_pta_m     	= $this->input->post('tgl_surat_pta_m');
        	$tgl_surat_pta_h     	= $this->input->post('tgl_surat_pta_h');
        	$nama_pb     	= $this->input->post('nama_pb');
        	$semula_pb     	= $this->input->post('semula_pb');
        	$umur_pb     	= $this->input->post('umur_pb');
        	$agama_pb     	= $this->input->post('agama_pb');
        	$pendidikan_pb     	= $this->input->post('pendidikan_pb');
        	$pekerjaan_pb     	= $this->input->post('pekerjaan_pb');
        	$alamat_pb     	= $this->input->post('alamat_pb');
        	$nama_kh_pb     	= $this->input->post('nama_kh_pb');
        	$umur_kh_pb     	= $this->input->post('umur_kh_pb');
        	$agama_kh_pb     	= $this->input->post('agama_kh_pb');
        	$pekerjaan_kh_pb     	= $this->input->post('pekerjaan_kh_pb');
        	$alamat_kh_pb     	= $this->input->post('alamat_kh_pb');
        	$nama_tb     	= $this->input->post('nama_tb');
        	$semula_tb     	= $this->input->post('semula_tb');
        	$umur_tb     	= $this->input->post('umur_tb');
        	$agama_tb     	= $this->input->post('agama_tb');
        	$pendidikan_tb     	= $this->input->post('pendidikan_tb');
        	$pekerjaan_tb     	= $this->input->post('pekerjaan_tb');
        	$alamat_tb     	= $this->input->post('alamat_tb');
        	$nama_kh_tb    	= $this->input->post('nama_kh_tb');
        	$umur_kh_tb     	= $this->input->post('umur_kh_tb');
        	$agama_kh_tb     	= $this->input->post('agama_kh_tb');
        	$pekerjaan_kh_tb     	= $this->input->post('pekerjaan_kh_tb');
        	$alamat_kh_tb     	= $this->input->post('alamat_kh_tb');
        	$tgl_putus_pa     	= $this->input->post('tgl_putus_pa');
			$no_perkara_pa     	= $this->input->post('no_perkara_pa');
			$amar_pa     	= $this->input->post('amar_pa');
			$ketua_majelis_pa     	= $this->input->post('ketua_majelis_pa');
			$hakim_agg_pa1    	= $this->input->post('hakim_agg_pa1');
			$hakim_agg_pa2    	= $this->input->post('hakim_agg_pa2');
			$pp_pa    	= $this->input->post('pp_pa');
			$tgl_akta_banding    	= $this->input->post('tgl_akta_banding');
			$jenis_pkr    	= $this->input->post('jenis_pkr');
			$kode_pa    	= $this->input->post('kode_pa');
			$no_sp_pa    	= $this->input->post('no_sp_pa');
			$bulan_sp_pa    	= $this->input->post('bulan_sp_pa');
			$tgl_sp_pa    	= $this->input->post('tgl_sp_pa');
			$pmh    	= $this->input->post('pmh');
			$ketua_majelis_pta    	= $this->input->post('ketua_majelis_pta');
			$kode_hm    	= $this->input->post('kode_hm');
			$hakim_agg_pta1    	= $this->input->post('hakim_agg_pta1');
			$kode_ha1    	= $this->input->post('kode_ha1');
			$hakim_agg_pta2    	= $this->input->post('hakim_agg_pta2');
			$kode_ha2    	= $this->input->post('kode_ha2');
			$pp_pta    	= $this->input->post('pp_pta');
			$kode_pp_pta    	= $this->input->post('kode_pp_pta');
			$penunjukkan_pp_pta    	= $this->input->post('penunjukkan_pp_pta');
			$tgl_berkas_diterima_majelis    	= $this->input->post('tgl_berkas_diterima_majelis');
			$tgl_phs    	= $this->input->post('tgl_phs');
			$tgl_putus_banding    	= $this->input->post('tgl_putus_banding');
			$amar_banding    	= $this->input->post('amar_banding');
			$tgl_minutasi    	= $this->input->post('tgl_minutasi');
			$tgl_kirim_berkas    	= $this->input->post('tgl_kirim_berkas');
			$tgl_upload    	= $this->input->post('tgl_upload');

            $data = array(
            	'id_banding'      => $id_banding,
                'no_perkara'       => $no_perkara,
                'tgl_terima_berkas'   => $tgl_terima_berkas,
                'asal_pa'   => $asal_pa,
                'no_surat_pta'   => $no_surat_pta,
                'bulan_pta'   => $bulan_pta,
                'tgl_surat_pta_m'   => $tgl_surat_pta_m,
                'tgl_surat_pta_h'   => $tgl_surat_pta_h,
                'nama_pb'   => $nama_pb,
                'semula_pb'   => $semula_pb,
                'umur_pb'   => $umur_pb,
                'agama_pb'   => $agama_pb,
                'pendidikan_pb'   => $pendidikan_pb,
                'pekerjaan_pb'   => $pekerjaan_pb,
                'alamat_pb'   => $alamat_pb,
                'nama_kh_pb'   => $nama_kh_pb,
                'umur_kh_pb'   => $umur_kh_pb,
                'agama_kh_pb'   => $agama_kh_pb,
                'pekerjaan_kh_pb'   => $pekerjaan_kh_pb,
                'alamat_kh_pb'   => $alamat_kh_pb,
                'nama_tb'   => $nama_tb,
                'semula_tb'   => $semula_tb,
                'umur_tb'   => $umur_tb,
                'agama_tb'   => $agama_tb,
                'pendidikan_tb'   => $pendidikan_tb,
                'pekerjaan_tb'   => $pekerjaan_tb,
                'alamat_tb'   => $alamat_tb,
                'nama_kh_tb'   => $nama_kh_tb,
                'umur_kh_tb'   => $umur_kh_tb,
                'agama_kh_tb'   => $agama_kh_tb,
                'pekerjaan_kh_tb'   => $pekerjaan_kh_tb,
                'alamat_kh_tb'   => $alamat_kh_tb,
                'tgl_putus_pa'   => $tgl_putus_pa,
				'no_perkara_pa'   => $no_perkara_pa,
				'amar_pa'   => $amar_pa,
				'ketua_majelis_pa'   => $ketua_majelis_pa,
				'hakim_agg_pa1'   => $hakim_agg_pa1,
				'hakim_agg_pa2'   => $hakim_agg_pa2,
				'pp_pa'   => $pp_pa,
				'tgl_akta_banding'   => $tgl_akta_banding,
				'jenis_pkr'   => $jenis_pkr,
				'kode_pa'   => $kode_pa,
				'no_sp_pa'   => $no_sp_pa,
				'bulan_sp_pa'   => $bulan_sp_pa,
				'tgl_sp_pa'   => $tgl_sp_pa,
				'pmh'   => $pmh,
				'ketua_majelis_pta'   => $ketua_majelis_pta,
				'kode_hm'   => $kode_hm,
				'hakim_agg_pta1'   => $hakim_agg_pta1,
				'kode_ha1'   => $kode_ha1,
				'hakim_agg_pta2'   => $hakim_agg_pta2,
				'kode_ha2'   => $kode_ha2,
				'pp_pta'   => $pp_pta,
				'kode_pp_pta'   => $kode_pp_pta,
				'penunjukkan_pp_pta'   => $penunjukkan_pp_pta,
				'tgl_berkas_diterima_majelis'   => $tgl_berkas_diterima_majelis,
				'tgl_phs'   => $tgl_phs,
				'tgl_putus_banding'   => $tgl_putus_banding,
				'amar_banding'   => $amar_banding,
				'tgl_minutasi'   => $tgl_minutasi,
				'tgl_kirim_berkas'   => $tgl_kirim_berkas,
				'tgl_upload'   => $tgl_upload,
            );

            if($this->m_banding->update_data($where,$data,'banding')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="deleted" && $id != null) {
            $where           = array('id_banding' => $id);
            if ($this->m_banding->hapus_data($where,'banding')) {

            }
            redirect('superuser/banding/');
        }
        else {
            echo $this->blade->nggambar('admin.banding.index',$data);
            return;
        }
    }
    //end Banding

      //Kategori Penilaian
    public function kategoripenilaian($url=null,$id=null)
    {
        $data             = $this->data;
        $data['menu']     = "kategori";
        $data['kategori'] = $this->m_kategoripenilaian->tampil_data('kategoripenilaian')->result();

        if ($url=="create") {
            $data['type']			= "create";
            echo $this->blade->nggambar('admin.kategoripenilaian.content',$data);
            return;
        }
        else if ($url == "created" && $this->input->is_ajax_request() == true) {

        	$kode_kat     	= $this->input->post('kode_kat');
            $nama_kat     	= $this->input->post('nama_kat');
            $deskripsi  = $this->input->post('deskripsi');

            $data = array(
            	'kode_kat'      => $kode_kat,
                'nama_kat'       => $nama_kat,
                'deskripsi_kat'   => $deskripsi,
            );

            if($this->m_kategoripenilaian->input_data($data,'kategoripenilaian')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="update" && $id!=null) {
            $data['type']    = "update";
            $where           = array('id_kategori' => $id);
            $data['kategori'] = $this->m_kategoripenilaian->detail($where,'kategoripenilaian')->row();
            echo $this->blade->nggambar('admin.kategoripenilaian.content',$data);
        }
        else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
            $where           = array('id_kategori' => $id);

            $kode_kat     	= $this->input->post('kode_kat');
            $nama_kat     	= $this->input->post('nama_kat');
            $deskripsi  = $this->input->post('deskripsi');

            $data = array(
            	'kode_kat'      => $kode_kat,
                'nama_kat'       => $nama_kat,
                'deskripsi_kat'   => $deskripsi,
            );

            if($this->m_kategoripenilaian->update_data($where,$data,'kategoripenilaian')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="deleted" && $id != null) {
            $where           = array('id_kategori' => $id);
            if ($this->m_kategoripenilaian->hapus_data($where,'kategoripenilaian')) {

            }
            redirect('superuser/kategoripenilaian/');
        }
        else {
            echo $this->blade->nggambar('admin.kategoripenilaian.index',$data);
            return;
        }
    }
    //end Kategori Penilaian

//Kategorijbt

public function kategorijbt($url=null,$id=null)
    {
        $data             = $this->data;
        $data['menu']     = "kategorijbt";
        $data['kategorijbt'] = $this->m_kategorijbt->tampil_data('jabatan')->result();

        if ($url=="create") {
            $data['type']           = "create";
            echo $this->blade->nggambar('admin.jabatan.content',$data);
            return;
        }
        else if ($url == "created" && $this->input->is_ajax_request() == true) {

           
            $nama_jbt       = $this->input->post('nama_jbt');
            $desk_jbt       = $this->input->post('desk_jbt');


            $data = array(
              
                'nama_jbt'       => $nama_jbt,
                'desk_jbt'       => $desk_jbt,
            );

            if($this->m_kategorijbt->input_data($data,'jabatan')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="update" && $id!=null) {
            $data['type']    = "update";
            $where           = array('id_jbt' => $id);
            $data['kategorijbt'] = $this->m_kategoripenilaian->detail($where,'jabatan')->row();
            echo $this->blade->nggambar('admin.jabatan.content',$data);
        }
        else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
            $where           = array('id_jbt' => $id);

            
            $nama_jbt       = $this->input->post('nama_jbt');
            $desk_jbt       = $this->input->post('desk_jbt');

            $data = array(
                'nama_jbt'       => $nama_jbt,
                'desk_jbt'       => $desk_jbt,
            );

            if($this->m_kategorijbt->update_data($where,$data,'jabatan')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="deleted" && $id != null) {
            $where           = array('id_jbt' => $id);
            if ($this->m_kategoripenilaian->hapus_data($where,'jabatan')) {

            }
            redirect('superuser/kategorijbt/');
        }
        else {
            echo $this->blade->nggambar('admin.jabatan.index',$data);
            return;
        }
    }
    // --------------------------------- End Kategorijbt
	

// --------------------------------- Start Admin
    public function admin($url=null,$id=null)
    {
        $data             = $this->data;
        $data['menu']     = "admin";
        $data['admin'] = $this->m_admin->tampil_data('admin')->result();
        $data['kategorijbt'] = $this->m_kategorijbt->tampil_data('jabatan')->result();

        if ($url=="create") {
            $data['type']           = "create";

            echo $this->blade->nggambar('admin.admin.content',$data);
            return;
        }
        else if ($url == "created" && $this->input->is_ajax_request() == true) {

            $user        = $this->input->post('user');
            $pass        = $this->input->post('pass');
            $posisi  = $this->input->post('posisi');
            $kategorijbt  = $this->input->post('kategorijbt');

            $data = array(
                'user'       => $user,
                'pass'       => $pass,
                'posisi'   => $posisi,
                'id_jbt'=> $kategorijbt,
            );

            if($this->m_admin->input_data($data,'admin')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="update" && $id!=null) {
            $data['type']    = "update";
            $where           = array('id' => $id);
            $data['admin'] = $this->m_subkategori->detail($where,'admin')->row();
            echo $this->blade->nggambar('admin.admin.content',$data);
        }
        else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
            $where           = array('id' => $id);

            $user        = $this->input->post('user');
            $pass        = $this->input->post('pass');
            $posisi  = $this->input->post('posisi');
            $kategorijbt  = $this->input->post('kategorijbt');


            $data = array(
                 'user'       => $user,
                'pass'       => $pass,
                'posisi'   => $posisi,
                'id_jbt'=> $kategorijbt,
            );

            if($this->m_admin->update_data($where,$data,'admin')){
                echo goResult(true,"Data Telah Di Tambahkan");
                return;
            }
        }
        else if ($url=="deleted" && $id != null) {
            $where           = array('id_subkat' => $id);
            if ($this->m_admin->hapus_data($where,'admin')) {

            }
            redirect('superuser/admin/');
        }
        else {
            echo $this->blade->nggambar('admin.admin.index',$data);
            return;
        }
    }
    // --------------------------------- End Admin


	// --------------------------------- Start SUBKAtegori
	public function subkategori($url=null,$id=null)
	{
		$data             = $this->data;
		$data['menu']     = "subkategori";
		$data['subkategori'] = $this->m_subkategori->tampil_data('subkatpenilaian')->result();
		$data['kategori'] = $this->m_kategoripenilaian->tampil_data('kategoripenilaian')->result();

		if ($url=="create") {
			$data['type']			= "create";

			echo $this->blade->nggambar('admin.subkategori.content',$data);
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true) {

			$kode_subkat     	= $this->input->post('kode_subkat');
			$nama_subkat     	= $this->input->post('nama_subkat');
			$deskripsi  = $this->input->post('deskripsi');
			$kategori  = $this->input->post('kategori');

			$data = array(
				'kode_subkat'       => $kode_subkat,
				'nama_subkat'       => $nama_subkat,
				'deskripsi_subkat'   => $deskripsi,
				'id_kategori'=> $kategori,
			);

			if($this->m_subkategori->input_data($data,'subkatpenilaian')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null) {
			$data['type']    = "update";
			$where           = array('id_subkat' => $id);
			$data['subkategori'] = $this->m_subkategori->detail($where,'subkatpenilaian')->row();
			echo $this->blade->nggambar('admin.subkategori.content',$data);
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
			$where           = array('id_subkat' => $id);

			$kode_subkat     	= $this->input->post('kode_subkat');
			$nama_subkat     	= $this->input->post('nama_subkat');
			$deskripsi  = $this->input->post('deskripsi');
			$kategori  = $this->input->post('kategori');


			$data = array(
				'kode_subkat'       => $kode_subkat,
				'nama_subkat'       => $nama_subkat,
				'deskripsi_subkat'   => $deskripsi,
				'id_kategori'=> $kategori,
			);

			if($this->m_subkategori->update_data($where,$data,'subkatpenilaian')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="deleted" && $id != null) {
			$where           = array('id_subkat' => $id);
			if ($this->m_subkategori->hapus_data($where,'subkatpenilaian')) {

			}
			redirect('superuser/subkategori/');
		}
		else {
			echo $this->blade->nggambar('admin.subkategori.index',$data);
			return;
		}
	}
	// --------------------------------- End SUBKAtegori

	

	//---------------------------------------------------------------------
	//--------------------------------------------------------fungsi global
	private function upload($dir,$name ='userfile',$filename=null){
		$config['upload_path']      = $dir;
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']         = 8000;
        $config['encrypt_name'] 	= FALSE;
        $config['file_name'] 		= $filename;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($name))
        {
        		$data['auth'] 	= false;
                $data['msg'] 	= $this->upload->display_errors();
                return $data;
        }
        else
        {
        		$data['auth']	= true;
        		$data['msg']	= $this->upload->data();
        		return $data;
        }
	}

	private function upload_files($path,$files){

        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'gif|jpg|png|jpeg',
            'max_size'		=> '10000',
            'overwrite'     => false,
            'encrypt_name'  => FALSE
        );

        $this->load->library('upload', $config);

        $images 		= array();
        $data['msg']	= array();
        $data['auth']	= false;
        foreach ($files['name'] as $key => $image) {
			$_FILES['images[]']['name']     = $files['name'][$key];
			$_FILES['images[]']['type']     = $files['type'][$key];
			$_FILES['images[]']['tmp_name'] = $files['tmp_name'][$key];
			$_FILES['images[]']['error']    = $files['error'][$key];
			$_FILES['images[]']['size']     = $files['size'][$key];

			$value 		= str_replace(' ', '_', $_FILES['images[]']['name']);
            $config['file_name'] 		= $value;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
            	$data['auth']		= true;
            	array_push($data['msg'],$this->upload->data());
            } else {
            	$data['auth']		= ($data['auth']==true) ? true : false;
            	array_push($data['msg'],$this->upload->display_errors());
            }
        }

        return $data;
    }

    private function isImage($file){
		if ((($_FILES[$file]['type'] == 'image/gif') || ($_FILES[$file]['type'] == 'image/jpeg') || ($_FILES[$file]['type'] == 'image/png'))){
			return true;
		}
		else {
			return false;
		}
	}
}
