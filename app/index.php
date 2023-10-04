<?php



class App {
    public String $uri;
    public ViewManager $view_manager;
    public $page_info_list;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->view_manager = new ViewManager();

        $this->page_info_list = [
            new PageInfo("/", "ホーム"),
            new PageInfo("column", "読み物"),
            new PageInfo("contact", "問い合わせ"),
            new PageInfo("event", "イベント"),
            new PageInfo("first-visitor", "初めての方へ"),
            new PageInfo("price", "料金表"),
            new PageInfo("service", "サービス"),
        ];
    }

}

class PageInfo {
    public String $path;
    public String $name;

    public function __construct(String $path, String $name)
    {
        $this->path = $path;
        $this->name = $name;
    }
}

class PageMetaInfo {
    public String $_title = "手技処 気楽庵";
    public String $_lang = "ja";

    function title () {
        echo $this->_title;
    }

    function lang () {
        echo $this->_title;
    }
}

class ViewManager {

    function head (PageMetaInfo $_page_meta_info) {
        $page_meta_info = $_page_meta_info;
        include($_SERVER['DOCUMENT_ROOT'] . "/app/__components/head.php");
    }

    function tail () {
        echo "</html>";
    }

    function display_component (String $component_name) {

        include($_SERVER['DOCUMENT_ROOT'] . "/app/__components/{$component_name}.php");
    }

    function display_bread_crumnb (String $page_path, String $page_name) {
        $page_path;
        $page_name;
        include($_SERVER['DOCUMENT_ROOT'] . "/app/__components/breadcrumb.php");
    }
}

class Util {

    public static function is_true ($value) {
        return in_array($value, [0, "0", False, "", null]) ? false : boolval($value);
    }

}
// 初期化
$app = new App();