<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {

    public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }

    //查询class所有，并以单选按钮显示出来
   public function website_all(){
	 	$websiteStr = "";
    	$Website = M('Website');
    	$count = $Website->count();
    	$data = $Website->select();
    	for ($i=1; $i <$count ; $i++) { 
    		$websiteStr.= "<a href='javascript:systemWebsite(\"".$data[$i]['dbid']."\",\"".$data[$i]['name']."\",\"".$data[$i]['link']."\")' class='btn btn-default'>".$data[$i]['name']."</a> ";
    	}
    	return $websiteStr;
    }
    public function tags_all(){
        $tagStr = "";
        $Tag = M('Tag');
        $tags = $Tag->where('status=1')->select();
        $count =count($tags);
        if($count>0){
            foreach ($tags as $tag) {
                $tagStr.= "<a href='".$tag['dbid']."' class='btn btn-warning btn-mgr-1'>".$tag['tag']."</a>"; 
            }
        }
        return $tagStr;
    }
}