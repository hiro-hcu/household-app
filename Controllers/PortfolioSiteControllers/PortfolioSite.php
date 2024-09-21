<?php

namespace app\Controllers\PortfolioSiteControllers;

class PortfolioSite
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
	    echo "PortfolioSiteです。";
    }
    private function render()
    {
        $htmlFile = '/var/www/html/index.html';

	if (file_exists($htmlFile)) {
	    echo "HTMLファイル読んでいます。ki";
            readfile($htmlFile);
        } else {
            echo "HTMLファイルが見つかりません。";
	}
	exit();
    }
}
?>
