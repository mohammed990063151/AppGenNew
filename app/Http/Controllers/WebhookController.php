<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Salla\OAuth2\Client\Provider\Salla;

class WebhookController extends Controller
{
    public function handle(Request $request){

        $provider = new Salla([
            'clientId'     => '21dcaa144ad4807e1132a0be3c26dca5', // The client ID assigned to you by Salla
            'clientSecret' => 'a0d88f3d870efe82fc3e177c4440364c', // The client password assigned to you by Salla
            'redirectUri'  => 'https://appgen.themsc.net/admin/webhook', // the url for current page in your service
        ]);

        // info('web hook is verfiy jksa is a good man');
        // info("$request");
        try{

            $token = $provider->getAccessToken('authorization_code', [
                'code' => $_GET['code']
            ]);

            //
            // ## Access Token
            //
            // You should store the access token
            // which may use in authenticated requests against the Salla's API
            echo 'Access Token: '.$token->getToken()."<br>";


            $response = $provider->fetchResource(
                'GET',
                'https://api.salla.dev/admin/v2/orders',
                $token->getToken()
            );
            dd($response);
            // var_export($response);

        }
        catch(\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e){
            exit($e->getMessage());
        }
        return $request;
    }
}
