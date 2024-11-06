<?php
namespace App\Services\Location;

class LocationService
{
    private static $currentUser = null;
    public function getUserInfo($ip = null)
    {
        if (! self::$currentUser) {
            self::$currentUser = geoip($ip);
        }
        return self::$currentUser;
    }

    private function formatUserInfo()
    {
        // $user = $this->getUserInfo();
        // return collect([
        //     'ip' => $user['ip'],
        //     'iso_code' => $user[''],
        //     'country' => 'United States',
        //     'city' => 'New Haven',
        //     'state' => 'CT',
        //     'state_name' => 'Connecticut',
        //     'postal_code' => '06510',
        //     'lat' => 41.28,
        //     'lon' => -72.88,
        //     'timezone' => 'America/New_York',
        //     'continent' => 'NA',
        //     'currency' => 'USD',
        // ]);
    }
}