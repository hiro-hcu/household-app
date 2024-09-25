<?php

namespace app\Controllers\HouseholdControllers;

class EntryIncomeController
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
        echo "EntryIncomeControllerです。";
    }

}
?>