<?php
namespace Models;

class facebookAuth
{
    public static function getImpersonateToken($memberId, $apiUrl ,$client, $accessToken)
    {
        $query_str = $apiUrl . "/$memberId";
        $resp = $client->get($query_str, [
            'headers' => [
                'Authorization' => "Bearer ".$accessToken,
            ],
            'query' => array('fields'=>'impersonate_token')
        ]);

        $responseBody = $resp->getBody()->getContents();

        return json_decode($responseBody)->impersonate_token;
    }
}