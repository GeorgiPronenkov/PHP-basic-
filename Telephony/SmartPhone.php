<?php

spl_autoload_register();
class SmartPhone implements I_Call, I_Browse
{
    /**
     * @param string $phoneNumber
     * @return string
     * @throws Exception
     */
    public function call(string $phoneNumber): string
    {
        if (! ctype_digit($phoneNumber)) {
            throw new Exception('Invalid number');
        }
        return "Calling...{$phoneNumber}";
    }

    /**
     * @param string $url
     * @return string
     * @throws Exception
     */
    public function browse(string $url): string
    {
        if (preg_match_all("/[0-9]+/", $url)) {
            throw new Exception('Invalid url!\\n');
        }
        return "Browsing: {$url}!";
    }
}

$numbers = explode(' ', readline());
$sites = explode(' ', readline());

$phone = new SmartPhone();
foreach ($numbers as $number) {
    try {
        echo $phone->call($number);
    } catch (Exception $ex) {
        echo $ex->getMessage('');
    }
}

foreach ($sites as $site) {
    try {
        echo $phone->browse($site);
    } catch (Exception $ex) {
        echo $ex->getMessage('');
    }
}
