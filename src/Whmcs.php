<?php
namespace AymanElmalah\Whmcs;

class Whmcs
{
    /**
     * Execute api curl request
     *
     * @params string $action
     * @params array $post_fields
     *
     * @return response
     */
    public function curl($action, $post_fields) {
        $post_fields = array_merge($post_fields, ['username' => config('whmcs.username'), 'password' => md5(config('whmcs.password')), 'action' => $action]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, config('whmcs.url'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    /**
     * Execute api local api request
     *
     * @params string $action
     * @params array $post_fields
     * @params string $admin_username
     *
     * @return response
     */
    public function localApi($action, $post_fields) {
        $response = localAPI($action, $post_fields, config('whmcs.username'));

        return $response;
    }
}
