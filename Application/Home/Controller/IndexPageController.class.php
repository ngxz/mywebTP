<?php
namespace Home\Controller;

use Think\Controller;
class IndexPageController extends Controller{
    private $IndexPageModel;
    public function __construct(){
        parent::__construct();
        $this->IndexPageModel = M();
    }
    /**
     * 加载首页内容
     */
    public function indexLoad(){
        $news = $this->IndexPageModel->table("yb_article")->where("channel_id = 1")->limit(5)->order("time desc")->select();
        $artic = $this->IndexPageModel->table("yb_article")->where("channel_id = 1")->select();
        $rows = array("news"=>$news,"artic"=>$artic);
        $this->assign("rows",$rows);
        $this->display(index);
    }
    
}

?>