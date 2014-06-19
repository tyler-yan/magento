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

    <title>编辑-内容管理</title>

    <!-- Bootstrap core CSS -->
    <link href="/Public/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="/Public/css/font-awesome-ie7.min.css">
    <![endif]-->
    <link href="/Public/css/square/square.css" rel="stylesheet">
   
    <link href="/Public/css/package/layout.css" rel="stylesheet">
    <link href="/Public/css/package/jquery.tagsinput.css" rel="stylesheet">
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
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><i class="main-logo"> </i><span class="main-logo-font">Admin</span></a>
            </div>

            <div class="navbar-collapse collapse">
              <!-- 获取当前的模块操作 -->
              <?php  $controller=explode('/','/Admin/Web/editinfo?_id=17')[2];?>

              <ul class="nav navbar-nav">
                <?php if($controller=='Index'||$controller=='index'): ?><li class="active">
                  <?php else: ?> <li><?php endif; ?>
                  <a href="/Admin/Index/index"><i class="icon-home"></i> 首页</a></li>
                <?php if($controller=='Web' ): ?><li class="active dropdown">
                  <?php else: ?> <li class="dropdown"><?php endif; ?> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 内容 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Admin/Web/addinfo"><i class="icon-plus"></i>&nbsp;&nbsp; 添加</a></li>
                    <li class="divider"></li>
                    <li><a href="/Admin/Web/listall/status/0/type/0"><i class="icon-spinner"></i>&nbsp;&nbsp; 审核</a></li>
                    <li><a href="/Admin/Web/listall/status/1/type/0"><i class="icon-unlock"></i>&nbsp;&nbsp;Enalbe</a></li>
                    <li><a href="/Admin/Web/listall/status/2/type/0"><i class="icon-lock"></i>&nbsp;&nbsp; Disable</a></li>
                  </ul>
                </li>
                <?php if($controller=='Tag' ): ?><li class="active dropdown">
                  <?php else: ?> <li class="dropdown"><?php endif; ?> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 标签 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Admin/Tag/addinfo"><i class="icon-plus"></i>&nbsp;&nbsp; 添加</a></li>
                    <li class="divider"></li>
                    <li><a href="/Admin/Tag/listall/status/0"><i class="icon-spinner"></i>&nbsp;&nbsp; 审核</a></li>
                    <li><a href="/Admin/Tag/listall/status/1"><i class="icon-unlock"></i>&nbsp;&nbsp;Enalbe</a></li>
                    <li><a href="/Admin/Tag/listall/status/2"><i class="icon-lock"></i>&nbsp;&nbsp; Disable</a></li>
                  </ul>
                </li>
                 <?php if($controller=='Website' ): ?><li class="active dropdown">
                  <?php else: ?> <li class="dropdown"><?php endif; ?> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 网站 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Admin/Website/addinfo"><i class="icon-plus"></i>&nbsp;&nbsp; 添加</a></li>
                    <li class="divider"></li>
                    <li><a href="/Admin/Website/listall/status/0"><i class="icon-spinner"></i>&nbsp;&nbsp; 审核</a></li>
                    <li><a href="/Admin/Website/listall/status/1"><i class="icon-unlock"></i>&nbsp;&nbsp;Enalbe</a></li>
                    <li><a href="/Admin/Website/listall/status/2"><i class="icon-lock"></i>&nbsp;&nbsp; Disable</a></li>
                  </ul>
                </li>
                <?php if($controller=='Blog' ): ?><li class="active dropdown">
                  <?php else: ?> <li class="dropdown"><?php endif; ?> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 博客 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Admin/Blog/addinfo"><i class="icon-plus"></i>&nbsp;&nbsp; 添加</a></li>
                    <li class="divider"></li>
                    <li><a href="/Admin/Blog/listall/status/0"><i class="icon-spinner"></i>&nbsp;&nbsp; 审核</a></li>
                    <li><a href="/Admin/Blog/listall/status/1"><i class="icon-unlock"></i>&nbsp;&nbsp;Enalbe</a></li>
                    <li><a href="/Admin/Blog/listall/status/2"><i class="icon-lock"></i>&nbsp;&nbsp; Disable</a></li>
                     <li class="divider"></li>
                    <li><a href="/Admin/Blog/listall/status/2"><i class="icon-folder-close-alt"></i> 所属分类</a></li>
                  </ul>
                </li>
               <?php if($controller=='User' ): ?><li class="active dropdown">
                  <?php else: ?> <li class="dropdown"><?php endif; ?> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 用户 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Admin/User/addinfo"><i class="icon-plus"></i>&nbsp;&nbsp; 添加</a></li>
                    <li class="divider"></li>
                    <li><a href="/Admin/User/listall/status/0/type/0"><i class="icon-spinner"></i>&nbsp;&nbsp; 审核</a></li>
                    <li><a href="/Admin/User/listall/status/1/type/0"><i class="icon-unlock"></i>&nbsp;&nbsp;Enalbe</a></li>
                    <li><a href="/Admin/User/listall/status/2/type/0"><i class="icon-lock"></i>&nbsp;&nbsp; Disable</a></li>
                  </ul>
                </li>
                
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user-md"></i> <?php echo $_SESSION['admin']['name']?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-wrench"></i>&nbsp;&nbsp; 设置</a></li>
                    <li class="divider"></li>
                    <li><a href="/Admin/Web/loginOut"><i class="icon-off"></i>&nbsp;&nbsp; 退出</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
          
    </div>

   <div class="main-container">

      <div class="projects-header page-header">
          <h3><i class="icon-edit"></i> 编辑</h3>
      </div>

      <!-- 添加表单 -->
      <form id="form-addInfo" class="form-horizontal" role="form" action="/Admin/Web/saveInfo" >
        <br>
        <input type="hidden"  name="dbid" value="<?php echo ($web["dbid"]); ?>" />
        <div class="form-group">
          <label class="col-sm-2 control-label input-lg">标题</label>
          <div class="col-sm-7">
            <input type="text" class="form-control input-lg" name="title" placeholder="@热门话题/标题" datatype="*4-32" errormsg="<i class='icon-warning-sign'></i> 标题在4~32位之间"  value="<?php echo ($web["title"]); ?>" nullmsg="<i class='icon-warning-sign'></i> 请填写信息！" />
          </div>
          <div class="Validform_checktip">
             <div class="info">标题至少4个字符,最多32个字符<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
          </div>
        </div>

        <br>

        <div class="form-group">
          <label for="inputType3" class="col-sm-2 control-label input-lg">类型</label>
          <div class="col-sm-1 input-lg">
            <div class="input-group ">
              <span class="input-group-addon">
                <input type="radio" name="type" value="1" <?php if($web==null||$web[type]==1) echo "checked";?> >
              </span>
              <span class="form-control input-lg">视频</span>
            </div><!-- /input-group -->
          </div>
          <div class="col-sm-1 input-lg">
            <div class="input-group ">
              <span class="input-group-addon">
                <input type="radio" name="type" value="2" <?php if($web!=null&&$web[type]==2) echo "checked";?> >
              </span>
              <span class="form-control input-lg">图片</span>
            </div><!-- /input-group -->
          </div>
          <div class="col-sm-1 input-lg">
            <div class="input-group">
              <span class="input-group-addon">
                <input type="radio" name="type" value="3" <?php if($web!=null&&$web[type]==3) echo "checked";?> >
              </span>
              <span class="form-control input-lg">文字</span>
            </div><!-- /input-group -->
          </div>
          <div class="col-sm-1 input-lg">
            <div class="input-group">
              <span class="input-group-addon">
                <input type="radio" name="type" value="4" <?php if($web!=null&&$web[type]==4) echo "checked";?> >
              </span>
              <span class="form-control input-lg">音乐</span>
            </div><!-- /input-group -->
          </div>
          
        </div>

        <br>
        
        <div class="form-group">
          <label for="inputIntroduction3" class="col-sm-2 control-label input-lg" placeholder="分享介绍">描述</label>
          <div class="col-sm-7">
            <textarea name="introduction" class="form-control" rows="3"  datatype="*4-120" errormsg="<i class='icon-warning-sign'></i> 描述在4~120位之间" nullmsg="<i class='icon-warning-sign'></i> 请填写信息！"><?php echo ($web["introduction"]); ?></textarea>
          </div>
          <div class="Validform_checktip">
             <div class="info">描述至少4个字符,最多120个字符<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
          </div>
        </div>

        <br>

        <div class="form-group">
          <label for="inputLink3" class="col-sm-2 control-label input-lg">链接</label>
          <div class="col-sm-7">
             <textarea name="source_link" class="form-control" rows="2" placeholder="http://www." datatype="url" errormsg="<i class='icon-warning-sign'></i> 网页链接无效" nullmsg="<i class='icon-warning-sign'></i> 请填写信息！"><?php echo ($web["source_link"]); ?></textarea>
          </div>
           <div class="Validform_checktip">
             <div class="info">复制粘贴有效网页链接<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
          </div>
        </div>

        <br>
        
         <div class="form-group">
          <label for="inputLink3" class="col-sm-2 control-label input-lg">来源</label>
          <input type="hidden" id="website_id"  name="source_web" value="<?php echo ($web["source_web"]); ?>" />
          <div class="col-sm-2">
              <input type="text" class="form-control input-lg" id="website_name" placeholder="网站" readonly="readonly" value="<?php echo ($web["website"]["name"]); ?>" />
          </div>
         <div class="col-sm-5 input-lg">
            <div class="input-group ">
              <input  type="text" class="form-control input-lg" id="website_link"  placeholder="http://www." readonly="readonly" value="<?php echo ($web["website"]["link"]); ?>"/>
              <a class="input-group-addon" title="添加热门网站" id="btn-addTag" data-toggle="modal" data-target="#sourceModal"><i class="icon-circle-arrow-up"></i></a>
            </div><!-- /input-group -->
          </div>
           <div class="Validform_checktip">
             <div class="info">复制粘贴有效网页链接<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
          </div>
        </div>

        <br>
        
         <div class="form-group" id="form-lable">
          <label for="inputTag3" class="col-sm-2 control-label input-lg">标签</label>                 
          <div class="col-sm-7 input-lg">
              <input id="tags" type="text" class="form-control input-lg" name="tags" value="<?php echo ($web["tags"]); ?>"  placeholder="输入标签" />
          </div>

        </div>

       <br>
       <div class="form-group">
          <label for="inputLink3" class="col-sm-2 control-label input-lg">封面</label>
          <div class="col-sm-3" id="net_img">            
              <textarea name="image_url" class="form-control" rows="7" id="image_url" datatype="url" errormsg="<i class='icon-warning-sign'></i> 图片链接无效" nullmsg="<i class='icon-warning-sign'></i> 请填写信息！"><?php echo ($web["image_url"]); ?></textarea>
          </div>
           <div class="col-sm-0">            
               <button type="button" onclick="showUrlImg()" class="btn btn-info btn-lg btn-mg-1"><i class="icon-circle-arrow-right"></i> 预览</button>
              
          </div>
          <div class="col-sm-3">            
               <img id="image_show" src="<?php echo ($web["image_url"]); ?>" class="img-thumbnail img-size-1"/>
          </div>
        </div>

        <br>

        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-4">
             <button type="reset" class="btn btn-default btn-lg" onclick="window.history.back()"><i class="icon-repeat"></i> 取消</button>
            &nbsp;&nbsp;&nbsp;   
            <button id="btn_sub" type="button" class="btn btn-success btn-lg" onclick=""><i class="icon-circle-arrow-right"></i> 确定</button>
          </div>
        </div>
      </form>
      
    </div>    
    
<div class="modal fade" id="sourceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">添加网页来源网站</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#system" data-toggle="tab">系统选择</a></li>
          <li><a href="#custom" data-toggle="tab">自定义</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="system">
            </br>
            <?php $source = R('Public/website_all'); echo $source; ?>
          </div>
          <div class="tab-pane" id="custom">
              <form id="form-addWebsite" class="form-horizontal">
              </br>
                <div class="form-group">
                  <div class="col-sm-4">
                      <input type="text" class="form-control input-lg" id="website-name" placeholder="网站 1~6字符"/>
                      <p class="Validform_checktip Validform_wrong hide"><i class='icon-warning-sign'></i>  请输入有效网站.</p>
                  </div>
                 <div class="col-sm-8 input-lg">
                    <div class="input-group">
                      <input  type="text" class="form-control input-lg" id="website-link" value="" placeholder="http://www." />
                      <a class="input-group-addon" title="添加热门网站" id="btn-addTag" href="javascript:customWebsite('/Admin/Web/customWebsite');"><i class="icon-plus-sign"></i></a>
                    </div>
                    <p class="Validform_checktip Validform_wrong hide"><i class='icon-warning-sign'></i>  请输入有效网址.</p>
                  </div>
                </div>

              </form>  
          </div>
        </div>
      </div>
      <div class="modal-footer">

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.js"></script>
    <script src="/Public/js/package/admin.all.js"></script>
    <script src="/Public/js/package/web.all.js"></script>
    <script src="/Public/js/package/jquery.scrollUp.min.js"></script>
    <script src="/Public/js/package/icheck.js"></script> 
    <script src="/Public/js/package/validform_v5.3.2_min.js"></script>
    <script src="/Public/js/package/jquery.tagsinput.js"></script>   
    <a id="scrollUp" href="#top" title="" style="position: fixed; z-index: 2147483647; display: none;"> </a>
    <script type="text/javascript">
      $('#tags').tagsInput({
        'height':'52px', //设置高度
        'width':'100%',  //设置宽度
         onAddTag:function(tag){
          var tags = $(this).val();
        },
        onRemoveTag:function(tag){
          var tags2 = $(this).val();
        },
      });
    </script>
  </body>
</html>