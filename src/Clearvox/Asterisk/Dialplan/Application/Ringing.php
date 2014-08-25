<?php
namespace Clearvox\Asterisk\Dialplan\Application;

class Ringing implements ApplicationInterface
{
    use StandardApplicationTrait;

    /**
     * Should return the name of the application
     *
     * @return string
     */
    public function getName()
    {
        return 'Ringing';
    }

    /**
     * Should return the AppData. AppData is the string contents
     * between the () of the App.
     *
     * @return string
     */
    public function getData()
    {
        return '';
    }
}