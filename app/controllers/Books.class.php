<?php

class Books extends Controller
{

    public function __construct()
    {
        $this->bookModel = $this->model('Book'); //new Book
    }

    public function index()
    {
        //get the Books
        $books = $this->bookModel->getBooks();
        
            $data = [
                'books' => $books
            ];
            $this->view('index', $data);
       
    }

    public function add()
    {
        

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'name' => $_POST['name'],
                    'author' => $_POST['author'],
                    'published' => $_POST['published'],
                    'price' => $_POST['price'],
                    'name_err' => '',
                    'published_err' => '',
                    'price_err' => '',
                    'author_err' => '',
                ];
                if (empty($data['published'])) $data['published_err'] = 'Please fill the published year ';
                if (empty($data['name'])) $data['name_err'] = 'Please fill the name ';
                if (empty($data['price'])) $data['price_err'] = 'Please fill the price ';
                if (empty($data['author'])) $data['author_err'] = 'Please fill your book author';


                if (empty($data['name_err']) && empty($data['author_err']) && empty($data['price_err']) && empty($data['published_err'])) {
                        
                    if ($this->bookModel->addBook($data)) {
                       
                        //add book success 
                        redirect('index');
                    } else {
                        die("something went wrong!!");
                        
                    }
                } else {
                    
                    $this->view("add", $data);
                }
            } else {

                $data = [
                    'name' => '',
                    'author' => '',
                    'published' => '',
                    'price' => '',
                    'name_err' => '',
                    'published_err' => '',
                    'price_err' => '',
                    'author_err' => '',
                ];

                $this->view("add", $data);
            }

    }

}
