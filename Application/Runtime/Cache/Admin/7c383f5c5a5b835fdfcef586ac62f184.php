<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Public/images/title-logo.gif">

    <title>列表-所属分类</title>

    <!-- Bootstrap core CSS -->
    <link href="/Public/css/bootstrap.css" rel="stylesheet">
    <link href="/Public/css/package/layout.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/css/font-awesome.min.css">
    <link href="/Public/css/square/square.css" rel="stylesheet">
    <link href="/Public/css/Zebra_dialog-master/zebra_dialog.css" rel="stylesheet">
    <!--[if IE 7]>
    <link rel="stylesheet" href="/Public/css/font-awesome-ie7.min.css">
    <![endif]-->
    <!-- Custom styles for this template -->
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>
    <!-- Fixed navbar header.导航栏 -->
    <required file="Admin@Public/menu" />

<div class="main-container">
      <div class="projects-header page-header">
          <h3 class="clearfix">
              <div class="pull-left"><i class="icon-list"> </i> 列表  </div>
              <a class="btn btn-primary pull-right" href="/Admin/Blog/addinfo" role="button">
              <i class="icon-trash icon-plus"></i> 添加 </a> 
          </h3>
        <!-- top opreat bar.导航栏 -->
        
<div class="alert alert-info">
  <label>状态：</label>
   <?php if($status==''||$status==null||$status==3): ?><a href="/Admin/Blog/listall/status/3" class="btn btn-info">
        <?php else: ?> <a href="/Admin/Blog/listall/status/3" class="btn btn-link"><?php endif; ?>
        全部 (<?php echo ($statusCount["allCount"]); ?>)</a>
   <?php if($status==0&&$status!=''&&$status!=null): ?><a href="/Admin/Blog/listall/status/0 " class="btn btn-info">
        <?php else: ?> <a href="/Admin/Blog/listall/status/0" class="btn btn-link"><?php endif; ?>
      <i class="icon-spinner"></i> 审核  (<?php echo ($statusCount["auditCount"]); ?>)</a>
    <?php if($status==1 ): ?><a href="/Admin/Blog/listall/status/1" class="btn btn-info">
        <?php else: ?> <a href="/Admin/Blog/listall/status/1" class="btn btn-link"><?php endif; ?>
      <i class="icon-unlock"></i> Enable  (<?php echo ($statusCount["enableCount"]); ?>)</a>
    <?php if($status==2 ): ?><a href="/Admin/Blog/listall/status/2" class="btn btn-info">
        <?php else: ?> <a href="/Admin/Blog/listall/status/2" class="btn btn-link"><?php endif; ?>
      <i class="icon-lock"></i> Disable  (<?php echo ($statusCount["disableCount"]); ?>)</a>
</div>
      </div>
    <div class="form-horizontal" role="form">
        <!-- top opreat bar.导航栏 -->
      <div class="form-group">
  <div class="checkbox-all">
    <div class="input-group ">
      <span class="input-group-addon">
        <input type="checkbox" name="checkbox_all" value="0">
      </span>
      <span class="form-control">选择全部</span>
    </div>
  </div>
  <?php if($status==0||$status==2): ?><a class="btn btn-default checkbox-opreat disabled" href="javascript:checkChanges('/Admin/Blog/checkChanges?status=1','确定批量设置为 Enable？')">
    <i class="icon-unlock"></i> Enable</a>
    <?php else: endif; ?>
  <?php if($status==0||$status==1): ?><a class="btn btn-default checkbox-opreat disabled" href="javascript:checkDialogs('/Admin/Blog/checkDeletes?status=2','确定批量设置为 Disable？')">
    <i class="icon-lock"></i> Disable</a>
    <?php else: endif; ?>
      <a class="btn btn-default checkbox-opreat disabled" href="javascript:checkDialogs('/Admin/Blog/checkDeletes','确定删除所选择数据？')">
    <i class="icon-trash"></i> Delete</a>
    <?php echo ($page); ?> 
</div>
        
      <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th class="col-md-0"></th>
                <th class="col-md-3">标题</th>
                <th class="col-md-2">标签</th>
                <th class="col-md-2">地址</th>
                <th class="col-md-1">状态</th>
                <th class="col-md-3">操作</th>
              </tr>
            </thead>
            <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td class="col-md-0"><input type="checkbox" name="checkbox_id" value="<?php echo ($vo["dbid"]); ?>"></td>
                <td class="col-md-3"><?php echo ($vo["title"]); ?></td>
                <td class="col-md-3">
                  <?php  $arrTags=array(); $tagStrs=""; $tagStr=$vo["tags"];if($tagStr!=null&&$tagStr!=""){ $arrTags=explode(",", $tagStr); } for ($i=0; $i <count($arrTags); $i++) { $labelType = array("default","primary","info","success","danger","warning"); $typeId=mt_rand(0,5); echo "<span class='label label-".$labelType[$typeId]."'>".$arrTags[$i]."</span> "; }?>
                </td>
                <td class="col-md-2"><?php echo ($vo["request_url"]); ?></td>
                <td class="col-md-1">&nbsp;
                   <?php switch($vo["status"]): case "0": ?><i class="icon-spinner"></i><?php break;?>
                    <?php case "1": ?><i class="icon-unlock"></i><?php break;?>
                    <?php case "2": ?><i class="icon-lock"></i><?php break;?>
                    <?php default: endswitch;?>
                </td>
                <td class="col-md-3">
    <a class="btn btn-default" href="/Admin/Blog/editinfo?_id=<?php echo ($vo["dbid"]); ?>"><i class="icon-edit"></i></a>
    <?php if($vo["status"] != 1): ?><a class="btn btn-success" href="javascript:checkDialog('/Admin/Blog/changeStatus?dbid=<?php echo ($vo["dbid"]); ?>&status=1','确定设置为 Enable？')"><i class="icon-unlock"></i></a><?php endif; ?>
    <?php if($vo["status"] != 2): ?><a class="btn btn-warning" href="javascript:checkDialog('/Admin/Blog/changeStatus?dbid=<?php echo ($vo["dbid"]); ?>&status=2','确定设置为 Disable？')"><i class="icon-lock"></i></a><?php endif; ?>
    <a class="btn btn-danger" href="javascript:checkDialog('/Admin/Blog/changeStatus?dbid=<?php echo ($vo["dbid"]); ?>&status=2','确定选择删除？')"><i class="icon-trash"></i></a>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
            </tbody>
          </table>
      </div>

            <!-- top opreat bar.导航栏 -->
         <div class="form-group">
  <div class="checkbox-all">
    <div class="input-group ">
      <span class="input-group-addon">
        <input type="checkbox" name="checkbox_all" value="0">
      </span>
      <span class="form-control">选择全部</span>
    </div>
  </div>
  <?php if($status==0||$status==2): ?><a class="btn btn-default checkbox-opreat disabled" href="javascript:checkChanges('/Admin/Blog/checkChanges?status=1','确定批量设置为 Enable？')">
    <i class="icon-unlock"></i> Enable</a>
    <?php else: endif; ?>
  <?php if($status==0||$status==1): ?><a class="btn btn-default checkbox-opreat disabled" href="javascript:checkDialogs('/Admin/Blog/checkDeletes?status=2','确定批量设置为 Disable？')">
    <i class="icon-lock"></i> Disable</a>
    <?php else: endif; ?>
      <a class="btn btn-default checkbox-opreat disabled" href="javascript:checkDialogs('/Admin/Blog/checkDeletes','确定删除所选择数据？')">
    <i class="icon-trash"></i> Delete</a>
    <?php echo ($page); ?> 
</div>
        </div>
  </div> 
</div>    
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.js"></script>
    <script src="/Public/js/package/admin.all.js"></script>
    <script src="/Public/js/package/jquery.scrollUp.min.js"></script>
    <script src="/Public/js/package/icheck.js"></script>
    <script src="/Public/js/Zebra_dialog-master/zebra_dialog.js"></script>  
    <a id="scrollUp" href="#top" title="" style="position: fixed; z-index: 2147483647; display: none;"> </a>
    <script type="text/javascript">
      $(function(){
         ifDeletBtn();
      });
    </script>
  </body>
</html>