<?php
namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Mail;


class ServiceController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function digital()
    {
        return view('service.digital');
    }

    public function competitor()
    {
        return view('service.competitor');
    }

    public function discount()
    {
        return view('service.discount');
    }

    public function florida()
    {
        return view('service.florida');
    }

    public function attorney()
    {
        return view('service.attorney');
    }

    public function es_digital()
    {
        return view('service.es_digital');
    }

    public function es_discount()
    {
        return view('service.es_discount');
    }

    public function send_email() 
    {
        $data = ['message' => request('content')];
        $html = view('email.index', $data)->render();

        $param = array(
            'personalizations'=> array( array(
                    "to"=> array( array( "email" => "msp@360bizvue.net" ))
            )),
            "from" => array( "email" => "360bizvue@360bizvue.com" ),
            "subject" => "This is from 360Bizvue",
            "content" => array(
                array(
                    "type" => "text/html",
                    "value" => $html
                )
            )
        );

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($param),
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer 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",
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($response, true);
    }
}