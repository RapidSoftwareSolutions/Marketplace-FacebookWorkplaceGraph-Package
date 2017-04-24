<?php
namespace Models;

class facebookAuth
{
    public static function getImpersonateToken($memberId, $apiUrl ,$client, $accessToken)
    {
        $query_str = $apiUrl . "/$memberId";

        try {
            $resp = $client->get($query_str, [
                'headers' => [
                    'Authorization' => "Bearer ".$accessToken,
                ],
                'query' => array('fields'=>'impersonate_token')
            ]);

            $responseBody = $resp->getBody()->getContents();



            if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
                return json_decode($responseBody)->impersonate_token;
            } else {
                $result['callback'] = 'error';
                $result['contextWrites']['to']['status_code'] = 'API_ERROR';
                $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
                die();
            }
        } catch (\GuzzleHttp\Exception\ClientException $exception) {

            $responseBody = $exception->getResponse()->getBody()->getContents();
            if(empty(json_decode($responseBody))) {
                $out = $responseBody;
            } else {
                $out = json_decode($responseBody);
            }
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = $out;

        }


    }
}