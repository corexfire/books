<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_books');
    }

    public function index(){
            $data['data'] = $this->M_books->get_all_book();
            $this->load->view('books',$data);
    }

    public function form(){
        
        $id = $this->input->post('id');
        if($id)
            $data['data'] = $this->M_books->select_where($id)->row();
        else
        $data['data'] = null;

        $data['types'] = $this->M_books->get_all_type();
        $this->load->view('forms',$data);
    }

    public function add(){
        $title = $this->input->post('title');
        $author = $this->input->post('author');
        $date = $this->input->post('date');
        $pages = $this->input->post('pages');
        $type = $this->input->post('type');

        $data=array(
            'title' => $title,
            'author' =>$author,
            'date_published' => $date,
            'number_of_pages' => $pages,
            'id_type' => $type
        );

        $insert = $this->M_books->insert_all($data);
        if($insert){
            redirect('/');
        }
        
    }

    public function update(){
        $id=$this->input->post('id');
        $title = $this->input->post('title');
        $author = $this->input->post('author');
        $date = $this->input->post('date');
        $pages = $this->input->post('pages');
        $type = $this->input->post('type');

        $data=array(
            'title' => $title,
            'author' =>$author,
            'date_published' => $date,
            'number_of_pages' => $pages,
            'id_type' => $type
        );

        $insert = $this->M_books->update($data,$id);
        if($insert){
            redirect('/');
        }
        
    }

    public function delete(){
        $id = $this->input->post("id");
        $delete = $this->M_books->delete('id',$id);
        if($delete){
            redirect('/');
        }
    }

}