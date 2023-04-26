<?php

echo "Hello World!\n";


class Main
{
    public function __construct()
    {
        echo "Main class\n";
    }

    /**
     * Just a test
     *
     * @param string $name
     * @return void
     */
    public function teste(string $name):void
    {}
}


(new Main())->teste("Marcos");

