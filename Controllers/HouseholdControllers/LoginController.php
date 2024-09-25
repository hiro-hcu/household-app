<?php

namespace app\Controllers\HouseholdControllers;

class LoginController
{

    public function get()
    {
        $this->common();
        $this->render();
        exit();
    }

    public function post()
    {
        echo "method: post <br>";
        $this->login();
        exit();
    }

    private function common()
    {
        echo "loginControllersです。";
        echo __DIR__;
    }

    //htmlファイルの読み込み
    private function render()
    {

        if (isset($_SESSION['user_id'])) {
            // SESSION[user_id]に値入っていればログインしたとみなす
            echo "既にログインしています";
            echo "セッション維持ID: " . $_SESSION['user_id'] . "<br/>";
            header("Location: dash_bord");
            exit();
        } 

        $htmlFile = '/var/www/Views/HouseHoldViews/Login.html';

        if (file_exists($htmlFile)) {
            echo "HTMLファイル読んでいます。";
            readfile($htmlFile);
        } else {
            echo "HTMLファイルが見つかりません。";
        }
        exit();
    }

    private function login()
    {
        //session_start();

         
        
        //メールアドレスとパスワードを取得
        $mail_address = htmlspecialchars($_POST["mail_address"], ENT_QUOTES);
        $password = htmlspecialchars($_POST["password"], ENT_QUOTES);
        
        //パスワードをハッシュ化
        $password_hash = hash("sha256", $password);

        echo "{mail_address}: {$mail_address} <br>";
        echo "{password}: {$password_hash} <br>";

        //MySQLに接続
        $mysqli = new \mysqli('localhost', 'hirotada', 'hirotada', 'household');

        if ($mysqli->connect_error) {
            echo $mysqli->connect_error;
            exit();
        }

        $sql = "SELECT * FROM trx_users WHERE mail_address=? && password=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ss', $mail_address, $password_hash);

        $stmt->execute();
        $result = $stmt->get_result();
        $user_data = $result->fetch_assoc();

        //dbにユーザーデータが存在している場合
        if (!is_null($user_data)) {
            $_SESSION['user_id'] = $user_data['id'];
            echo "<br>user_id: {$user_data['id']}です。 <br/>";
            // 切断
            $stmt->close();
            $mysqli->close();

            echo "loginできたよ!!!!!<br>";
            header("Location: dash_bord");
            exit();

        }else{
            echo "そのようなユーザはいません。 <br>";
        }


        $stmt->close();
        $mysqli->close();
        

    }

}
?>