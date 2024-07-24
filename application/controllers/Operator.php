<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Operator_Model');
        $this->load->helper('url');
        $this->load->library('form_validation');

        // Cek login di konstruktor
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
    }

    public function index()
    {
    if (!$this->session->userdata('email')) {
        redirect('login'); 
    }
    
    $this->load->model('Operator_Model'); // Load your model for handling surat data
    $email = $this->session->userdata('email');
    
    // Get user information (add more as needed)
    $data['user'] = $this->db->get_where('users', ['usr' => $email])->row_array();
    
    // Get list of surat (letters) from the Surat_Model
    $data['surat'] = $this->Operator_Model->get_all_surat(); // Fetch all surat
    
    // Load view with the collected data
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('operator/index', $data); // Ensure this view is created to display surat
    $this->load->view('template/footer');
    }


    public function dashboard() {
        $data['title'] = 'Daftar Surat';
        $data['surat'] = $this->Operator_Model->get_all_surat();

        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('operator/index', $data);
        $this->load->view('template/footer');
    }

    public function insert_surat() {
        $data['title'] = 'Tambah Surat';

        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('operator/insert_surat', $data);
        $this->load->view('template/footer');
    }

    public function save_surat() {
        $this->form_validation->set_rules('no_disposisi', 'No Disposisi', 'required');
        $this->form_validation->set_rules('no_surat', 'No Surat', 'required');
        $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('tgl_input', 'Tanggal Input', 'required');
        $this->form_validation->set_rules('tgl_disposisi', 'Tanggal Disposisi', 'required');
        $this->form_validation->set_rules('tgl_dilaksanakan', 'Tanggal Dilaksanakan', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('asal', 'Asal', 'required');
        $this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required');
        $this->form_validation->set_rules('berkas', 'Berkas', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Surat';
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('operator/insert_surat', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'no_disposisi' => $this->input->post('no_disposisi'),
                'no_surat' => $this->input->post('no_surat'),
                'tgl_surat' => $this->input->post('tgl_surat'),
                'tgl_input' => $this->input->post('tgl_input'),
                'tgl_disposisi' => $this->input->post('tgl_disposisi'),
                'tgl_dilaksanakan' => $this->input->post('tgl_dilaksanakan'),
                'perihal' => $this->input->post('perihal'),
                'asal' => $this->input->post('asal'),
                'jenis_surat' => $this->input->post('jenis_surat'),
                'berkas' => $this->input->post('berkas'),
                'status' => $this->input->post('status')
            );

            $this->Operator_Model->insert_surat($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Surat berhasil ditambahkan.</div>');
            redirect('operator/index');
        }
    }

	public function update_surat($id)
	{
    if (!$this->session->userdata('email')) {
        redirect('login');
    }

    $data['title'] = 'Update Surat';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['surat'] = $this->Operator_Model->get_surat_by_id($id);

    if (empty($data['surat'])) {
        show_404();
    }

    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('operator/update_surat', $data);
    $this->load->view('template/footer');
	}	

	public function update_surat_action()
	{
    $this->form_validation->set_rules('no_disposisi', 'No Disposisi', 'required');
    $this->form_validation->set_rules('no_surat', 'No Surat', 'required');
    $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required');
    $this->form_validation->set_rules('tgl_input', 'Tanggal Input', 'required');
    $this->form_validation->set_rules('tgl_disposisi', 'Tanggal Disposisi', 'required');
    $this->form_validation->set_rules('tgl_dilaksanakan', 'Tanggal Dilaksanakan', 'required');
    $this->form_validation->set_rules('perihal', 'Perihal', 'required');
    $this->form_validation->set_rules('asal', 'Asal', 'required');
    $this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required');
    $this->form_validation->set_rules('berkas', 'Berkas', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');

    if ($this->form_validation->run() == FALSE) {
        $id = $this->input->post('id');
        $data['title'] = 'Update Surat';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['surat'] = $this->Operator_Model->get_surat_by_id($id);

        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('operator/update_surat', $data);
        $this->load->view('template/footer');
    } else {
        $id = $this->input->post('id');
        $data = array(
            'no_disposisi' => $this->input->post('no_disposisi'),
            'no_surat' => $this->input->post('no_surat'),
            'tgl_surat' => $this->input->post('tgl_surat'),
            'tgl_input' => $this->input->post('tgl_input'),
            'tgl_disposisi' => $this->input->post('tgl_disposisi'),
            'tgl_dilaksanakan' => $this->input->post('tgl_dilaksanakan'),
            'perihal' => $this->input->post('perihal'),
            'asal' => $this->input->post('asal'),
            'jenis_surat' => $this->input->post('jenis_surat'),
            'berkas' => $this->input->post('berkas'),
            'status' => $this->input->post('status')
        );

        $this->Operator_Model->update_surat($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Surat berhasil diperbarui.</div>');
        redirect('operator/index');
    }
	}

}
