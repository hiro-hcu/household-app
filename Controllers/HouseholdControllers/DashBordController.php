<?php

namespace app\Controllers\HouseholdControllers;

class DashBordController
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
        echo "DashBordControllerです。";
    }

    private function render()
    {
        $htmlFile = '/var/www/Views/HouseHoldViews/DashBord.php';
        if (file_exists($htmlFile)) {
            echo "DashBord.phpファイル読んでいます。";
            readfile($htmlFile);
        } else {
            echo "ファイルが見つかりません。";
        }
        exit();
    }

}
?>