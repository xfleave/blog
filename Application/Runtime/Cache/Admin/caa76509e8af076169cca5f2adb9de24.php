<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/blog/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/blog/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/blog/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/blog/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/blog/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/blog/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/blog/index.php/Admin/Cate/lists">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="/blog/index.php/Admin/Index/login">退出</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
<div class="container clearfix">
    <!--left-->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                <ul class="sub-menu">
                    <li><a href="/blog/index.php/Admin/Cate/lists"><i class="icon-font">&#xe008;</i>栏目管理</a></li>
                    <li><a href="/blog/index.php/Admin/First/lists"><i class="icon-font">&#xe005;</i>首页管理</a></li>
                    <li><a href="/blog/index.php/Admin/Article/lists"><i class="icon-font">&#xe006;</i>文章管理</a></li>
                    <li><a href="/blog/index.php/Admin/About/lists"><i class="icon-font">&#xe004;</i>关于管理</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                <ul class="sub-menu">
                    <li><a href="/blog/index.php/Admin/Cate/system"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                    <li><a href="/blog/index.php/Admin/Cate/system"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                    <li><a href="/blog/index.php/Admin/Cate/system"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                    <li><a href="/blog/index.php/Admin/Cate/system"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span
                    class="crumb-step">&gt;</span><span
                    class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option>
                                    <option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id=""
                                       type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/blog/index.php/Admin/First/add"><i class="icon-font"></i>新增首页</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>标题</th>
                            <td>图片</td>
                            <th>内容</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($firsts)): $i = 0; $__LIST__ = $firsts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                <!--                            <td>
                                                                <input name="ids[]" value="59" type="hidden">
                                                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                                                            </td>-->
                                <td><?php echo ($f["f_id"]); ?></td>
                                <td title="<?php echo ($f["f_title"]); ?>"><a target="_blank" href="#"
                                                            title="<?php echo ($f["f_title"]); ?>"><?php echo ($f["f_title"]); ?></a> …
                                </td>
                                <td>

                                    <?php if($f['f_pic'] != null): ?><img src="/blog/<?php echo ($f["f_pic"]); ?>" height="35"/>
                                        <?php else: ?>
                                        暂无图片<?php endif; ?>
                                </td>
                                <td><?php echo ($f["f_content"]); ?></td>
                                <td>
                                    date("Y-m-d H:i:s",<?php echo ($f["time"]); ?>)
                                </td>
                                <td>
                                    <a class="link-update" href="#">修改</a>
                                    <a class="link-del" href="/blog/index.php/Admin/First/del/id/<?php echo ($f["f_id"]); ?>"
                                       onclick="return confirm('你要删除 <?php echo ($f["f_title"]); ?> 吗?');">删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>