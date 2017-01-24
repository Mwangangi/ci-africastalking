# ci-africastalking

ci-africastalking is a Codeigniter Library for [AfricasTalking API](https://www.africastalking.com/) forked from [Mwangangi's repository](https://github.com/Mwangangi/ci-africastalking).

### Installation
  - Download the ZIP file
  - Move config/africastalking.php into your CI config directory
  - Move the third_party/AfricasTalkingGateway.php into your CI third_party directory or download a fresh copy from the [Official Docs page](http://docs.africastalking.com/).
  - Move the library into your library folder.
  - Update the africastalking.php config file with your correct setings

### Usage
Loading the library:
> $this->load->library('africastalking');

Calling Gateway methods from within your Controllers:

> //Using the default sender ID
> 
>$this->africastalking->sendMessage($recipients, $message); 
> 
>//Send using custom SenderId
> 
> $this->africastalking->sendMessage($recipients, $message,$sender_id); 
> etc

### Bugs And Feature Requests
Kindly open a new issue here iff none already exists.

### Todo:

* Convert the library into a wrapper to allow for easier more robust integration
* Add queueing of calls, sms, airtime, payments, checking airtime balance, etc
* Error checking:- Checking if curl is installed, etc

Big thanks to [Mwangangi](https://github.com/Mwangangi/ci-africastalking) and the amazing team at Africa's Talking
