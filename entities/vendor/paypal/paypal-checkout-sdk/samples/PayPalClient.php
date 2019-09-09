<?php

namespace Sample;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient
{
    /**
     * Returns PayPal HTTP client instance with environment which has access
     * credentials context. This can be used invoke PayPal API's provided the
     * credentials have the access to do so.
     */
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }
    
    /**
     * Setting up and Returns PayPal SDK environment with PayPal Access credentials.
     * For demo purpose, we are using SandboxEnvironment. In production this will be
     * LiveEnvironment.
     */
    public static function environment()
    {
        $clientId = getenv("CLIENT_ID") ?: "AR-JCZ6dVRTXcz-lQ92RDR6nKxpLSEPAVapiWfEMBohbUEQ3M4m1W48JiRd9iFM2-41F5bO9bol1AdUZ";
        $clientSecret = getenv("CLIENT_SECRET") ?: "EDKbIWZavaaq14KYjdnUYV0D-Gnhu37cm_kyXGTo-I95jylgQIPb39h3vaJI6yz-O0cLMyCCj5pL2uwp";
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}