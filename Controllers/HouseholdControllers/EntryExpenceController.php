<?php

namespace app\Controllers\HouseholdControllers;

class EntryExpenceController
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
        echo "EntryExpenceControllerです。";
    }

}
?>