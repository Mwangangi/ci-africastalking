<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function test()
    {
        //mobile numbers of intended recipients
        $recipients = "07xxxxxxxx,+2547xxxxxxx";

        //your message goes here
        $message = "Life is beautiful. Keep smiling";

        $this->load->library('africastalking');

        try {
            // Thats it, hit send
            $results = $this->africastalking->sendMessage($recipients, $message);
            foreach ($results as $result) {
                // status is either "Success" or "error message"
                echo " Number: " . $result->number;
                echo " Status: " . $result->status;
                echo " MessageId: " . $result->messageId;
                echo " Cost: " . $result->cost . "\n";
                //you can do sth else here like log this info
            }
        } catch (AfricasTalking $e) {
            log("Encountered an error while sending: " . $e->getMessage());
            //notify user of error
        }
    }
}
