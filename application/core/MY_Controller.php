<?php
    class MY_Controller extends CI_Controller
    {

        protected $must_login = 'all'; // all method must login or set array for certain method

        public function __construct()
        {
            parent::__construct();

            if( ! is_array($this->must_login))
            {
                if ($this->must_login === 'all' && ! hlp_auth_is_logged())
        		{
        			// redirect them to the login page
        			redirect('auth/login', 'refresh');
        		}
            }
            else
            {
                if(in_array($this->router->method, $this->must_login))
                {
                    if ( ! hlp_auth_is_logged())
            		{
            			// redirect them to the login page
            			redirect('auth/login', 'refresh');
            		}
                }
            }
        }

        protected function render_view($src, $data = NULL)
        {
            $tpl["content"] = $this->load->view($src, $data, TRUE);
            $this->load->view('layout/master', $tpl);
        }
    }
