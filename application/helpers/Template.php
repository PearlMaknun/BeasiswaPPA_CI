<?php
class Template {
	protected $t_ci;

	function __construct() {
			$this->t_ci = &get_instance(); //Untuk Memanggil function load, dll dari CI. ex: $this->load, $this->model, dll
		}

		function views($template = NULL, $data = NULL) {
			if ($template != NULL) {
				// head
				$data['_meta'] 					= $this->t_ci->load->view('_template/_meta', $data, TRUE);
				$data['_css'] 					= $this->t_ci->load->view('_template/_css', $data, TRUE);
				
				// Header
				$data['_nav'] 					= $this->t_ci->load->view('_template/_nav', $data, TRUE);
				$data['_header'] 				= $this->t_ci->load->view('_template/_header', $data, TRUE);
				
				//Sidebar
				$data['_sidebar'] 				= $this->t_ci->load->view('_template/_sidebar', $data, TRUE);
				
				//Content
				$data['_headerContent'] 	= $this->t_ci->load->view('_template/_headerContent', $data, TRUE);
				$data['_mainContent'] 		= $this->t_ci->load->view($template, $data, TRUE);
				$data['_content'] 				= $this->t_ci->load->view('_template/_content', $data, TRUE);
				
				//Footer
				$data['_footer'] 				= $this->t_ci->load->view('_template/_footer', $data, TRUE);
				
				//JS
				$data['_js'] 					= $this->t_ci->load->view('_template/_js', $data, TRUE);

				echo $data['_template'] 		= $this->t_ci->load->view('_template/_template', $data, TRUE);
			}
		}
	}
	?>