<?php

namespace app\Controllers;

class NotFoundController
{

    public function get()
    {
        $this->common();
    }

    public function post()
    {
        $this->common();
    }

    private function common()
    {
        echo "404 - Page not found";
    }

}
?>