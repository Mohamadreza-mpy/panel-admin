<?php
namespace App\Library;
use Illuminate\Support\Facades\Config;


class SendSms
{
    public function __construct()
    {
        $this->username = Config::get('sms.username');
        $this->password = Config::get('sms.password');
        $this->send_number = Config::get('sms.send_number');
    }

    public function sendPattern($pattern_code,$to,$data,){
        //dd($this->username, urlencode($this->password), $this->send_number);
        $url = "https://ippanel.com/patterns/pattern?username=" . $this->username . "&password=" . urlencode($this->password) . "&from=$this->send_number&to=" . json_encode($to) . "&input_data=" . urlencode(json_encode($data)) . "&pattern_code=$pattern_code";
        $handler = curl_init($url);
        curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($handler, CURLOPT_POSTFIELDS, $data);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($handler);
        
        \Log::info($response);
        return $response;
    }
}




?>
