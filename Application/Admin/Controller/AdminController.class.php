<?php
namespace Admin\Controller;

use Think\Controller;
class AdminController extends Controller{
    private $AdminModel;
    public function __construct(){
        parent::__construct();
        $this->AdminModel = M();
    }
    /**
     * 登录验证
     */
    public function login(){
        $uid = I("uid");
        $pwd = I("pwd");
        //登录的是管理员
        if ($uid == 1001){
            $res = $this->AdminModel->table("yb_admin")->where("uid = '$uid'")->select();
            $u = $res[0];
            if ($pwd == $res[0]['pwd']){
                $rows = $this->AdminModel->table("yb_admin_menus")->select();
                //保存登录用户信息
                $_SESSION['u']=$u;
                $this->assign("rows",$rows);
                $this->display(welcome);
            }else {
                redirect('http://www.yuanrb.com/index.php/Home/IndexPage/indexLoad',2,'密码错误！');
            }
        }
        //登录是用户
    }
    /**
     * 查看所有新闻内容
     */
    public function searchArticle($channel_id,$stitle='',$stime='',$pageNo=1,$pageSize=10){
        $query = array();
        if ($stitle != "" && $stitle != null){
            $query['title'] = array("LIKE","%$stitle%");
        }
        if ($stime != "" && $stime != null){
            $query['time'] = array("LIKE","%$query%");
        }
        $total=$this->AdminModel->where($query)->table("yb_article")->where("channel_id = '$channel_id'")->count();
        $rows = $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->where($query)->page($pageNo,$pageSize)->order("time desc")->select();
        $page = array("total"=>$total,"rows"=>$rows,"pageNo"=>$pageNo,"pageSize"=>$pageSize,"scontent"=>$stitle,"stime"=>$stime,"channel_id"=>$channel_id);
        $this->assign("page",$page);
        $this->display(newsManage);
    }
    /**
     * 删除某条新闻
     * @param unknown $no
     */
    public function deleteArticle($no,$channel_id){
        $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->where("id = '$no'")->delete();
        
    }
    /**
     * 查询一条新闻
     * @param unknown $no
     */
    public function searchArticleOne($no,$channel_id){
        $rows = $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->where("id = '$no'")->select();
        $this->ajaxReturn($rows);
    }
    /**
     * 新增修改新闻
     * 
     */
    public function addArticle($ctr,$channel_id,$title,$summary,$img_url,$newsId,$content,$time){
        $data = array(
            'channel_id'=>$channel_id,
            'content'=>$content,
            'title'=>$title,
            'summary'=>$summary,
            'img_url'=>$img_url,
            'time'=>$time
        );
        if ($ctr > 0){
            $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->field("content,title,summary,img_url,time,channel_id")->add($data);
            $this->searchArticle($channel_id);
        }else {
            $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->field("content,title,summary,img_url,time")->where("id='$newsId'")->save($data);
            $this->searchArticle($channel_id);
        }
    }
}

?>