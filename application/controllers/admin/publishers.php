<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publishers extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');

        $this->load->model('books/model_book_publishers', 'model_book_publishers');
	    $this->load->model('model_administrators', 'model_administrators');
	    $this->load->model('model_countries', 'model_countries');
    }

    public function index( $cur_page = 0 ) {

	    $results = $this->model_book_publishers->search( 'admin/publishers/' , 3, $cur_page );

        //	smarty variables
	    $this->smarty->assign( 'results', $results );
	    $this->smarty->assign( 'administrators', $this->model_administrators->getAll() );
	    $this->smarty->assign( 'countries', $this->model_countries->getAll() );
        $this -> smarty -> assign('content', $this -> smarty -> fetch('admin/' . $this -> router -> fetch_class() . '/index.htm'));
        $this -> smarty -> display('admin/main.htm');
    }

	public function create() {

		if ( $post = $this->input->post() ) {

			$data = $this->model_book_publishers->create( $post );

			if ( intval($data['id']) > 0 ) {

				redirect( '/admin/publishers/update/'.$data['id'], 'refresh' );

			} else {

				$this -> smarty -> assign('post', $post);

			}
		}

		//	smarty variables
		$this->smarty->assign('data', $data);
		$this->smarty->assign( 'administrators', $this->model_administrators->getAll() );
		$this->smarty->assign( 'countries', $this->model_countries->getAll() );
		$this -> smarty -> assign('content', $this -> smarty -> fetch('admin/' . $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('admin/main.htm');
	}

	public function update( $id = 0 ) {

		//CHECK RECORD
		$data   = $this->model_book_publishers->getById( $id );
		if ( !$data ) {
			redirect( '/admin/publishers/create', 'refresh' );
		}

		//	smarty variables
		$this->smarty->assign('data', $data);
		$this->smarty->assign( 'administrators', $this->model_administrators->getAll() );
		$this->smarty->assign( 'countries', $this->model_countries->getAll() );
		$this -> smarty -> assign('content', $this -> smarty -> fetch('admin/' . $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('admin/main.htm');
	}

	public function update_ajax( $id = 0 ) {


var_dump('test');


        if ($this -> input -> is_ajax_request()) {

            $post		= $this->input->post();

            $json		= $this->model_book_publishers->update( $post, $id );

        } else {

            $json	= array(
                'status'	=> false,
                'message'	=> 'This is not AJAX request.'
            );
        }

        print_r(json_encode($json));
        exit ;

	}

}