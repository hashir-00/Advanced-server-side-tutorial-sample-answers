<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Movies extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('movieview');
    }

    public function search() {
        $genre = $this->input->post('genre');
        $this->load->model('Moviemodel');
        $data['movies'] = $this->Moviemodel->getByGenre($genre);
        $this->load->view('resultview', $data);
    }

    public function allmovies() {
        $this->load->model('Moviemodel');
        $data['movies'] = $this->Moviemodel->getAllMovies();
        $this->load->view('allview', $data);
    }
}
?>
