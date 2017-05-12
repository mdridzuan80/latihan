<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    if( ! function_exists('auth_hlp_userId'))
    {
        function hlp_auth_userinfo($field = 'username')
        {
            $CI =& get_instance();

            if(is_array($field))
            {
                $data = [];
                foreach($field as $val)
                {
                    $user = $CI->ion_auth->user()->row();
                    $data[$val] = $user->{$val};
                }
                return $data;
            }
            return $CI->ion_auth->user()->row()->{$field};
        }
    }

    if( ! function_exists('auth_hlp_is_logged'))
    {
        function hlp_auth_is_logged()
        {
            $CI =& get_instance();
            return $CI->ion_auth->logged_in();
        }
    }
