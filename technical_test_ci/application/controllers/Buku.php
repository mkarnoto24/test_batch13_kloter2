<?php

Class Buku extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Main_model','main');
    }
    
    //menampilkan semua buku
    function index()
    {
        $query = "SELECT b.*,c.name as nm_kategori FROM books as b JOIN categories as c ON b.category_id=c.id";
        $data['book'] = $this->main->show_by_query($query)->result_array();
        $this->load->view('book/show_all',$data);
    }
    
    //tampilkan produk per kategori, field ditampilkan nama kategori, nama buku, stock

    function show_by_categories()
    {
        $this->load->view('book/show_by_kategori');
        
    }
    
    //tampilak detail buku berdasarkan id
    
    function show_by_idbook()
    {
        
    }
}
