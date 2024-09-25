<?php

#echo "index.php<br> ";

define('__ROOT__', dirname(__FILE__));

require_once __DIR__ . "/vendor/autoload.php";
require_once(__DIR__.'/Controllers/Route/Route.php');

session_start();

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($request, '/');

#echo "ルートパス「{$path}」";

$routes = [
    new Route("","PortfolioSiteControllers\\PortfolioSite"),
    new Route("login", "HouseholdControllers\\LoginController"),
    new Route("logout", "HouseholdControllers\\LogoutController"),
    new Route("dash_bord", "HouseholdControllers\\DashBordController"),
    new Route("entry_income", "HouseholdControllers\\EntryIncomeController"),
    new Route("entry_expence", "HouseholdControllers\\EntryExpenceController"),

];

$matched_route = null;
foreach ($routes as $route) {
    if ($route->getPath() === $path) {
        $matched_route = $route;
        break;
    }
}


//クラスから値を取得できた場合
if(!is_null($matched_route)){
    $controller_name = $matched_route->getController();

    // 未ログインかつクラスの第3引数がtrueの場合
    if(!isset($_SESSION["user_id"])&& $matched_route->getLoginRequire()){
        $controller_name = "AuthonrizedErrorController";
    }
}else{
    //routeが定義されていない場合は404エラーページ
    $controller_name = "NotFoundController";
}

$controller_name = "app\\Controllers\\{$controller_name}";

#echo "<br>{controller_name}: {$controller_name} <br>";


if (class_exists($controller_name)) {
    echo "Controller class {$controller_name} is found! <br>";
    $controller = new $controller_name();

    echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
    //exit();
    // リクエストメソッドがget or postを判定して適切なメソッドを呼び出す
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $controller->get();
    }elseif($_SERVER['REQUEST_METHOD']=='POST'){
        $controller->post();
    }else{
        echo "Unsupported request method! <br>";
    }
    $controller->get();
} else {
    echo "Controller class {$controller_name} is not found!";
}