<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/AfricasTalkingGateway.php';

class Africastalking extends AfricasTalkingGateway
{
    private $CI;            //incase we may need to use the Codeigniter Instance
    
    public function __construct()
    {
        $this->CI = & get_instance();        
        $this->CI->load->config('africastalking', TRUE);    //Name collisions may occur
        $config = $this->CI->config->item('africastalking');
        
        parent::__construct($config['username'], $config['apiKey']);        
    }
}