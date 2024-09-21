<?php

namespace app\Controllers\HouseholdControllers;

class LoginController
{

    public function get()
    {
        $this->common();
        $this->render();
    }

    public function post()
    {
        $this->common();
    }

    private function common()
    {
        echo "loginControllerです。";
    }

}
?>
