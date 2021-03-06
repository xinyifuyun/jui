<!DOCTYPE html>
<html lang="zh-cn">
<head>
    @include('/Home/Public/intoHead')
    <link href="/Plugins/jquery/plugins/SuperSlide/style.css" rel="stylesheet">
    <script src="/Plugins/jquery/plugins/SuperSlide/jquery.SuperSlide.2.1.js"></script>
    <title>{:C('siteName')}</title>
</head>
<body>
@include('/Home/Public/header')

<div class="container " style="margin-top:80px;">

    <div class="row">

        <div class="col-md-8">

            <div class="foucebox" style="margin:0 auto">
                <!-- 大图 -->
                <div  class="bd">
                    <volist name="thumbnailList" id="tVo">
                        <div  class="showDiv">
                            <h2><a href="/article-{$tVo.cat_id}-{$tVo.id}.html">{$tVo.title}</a></h2>
                            <a href="/article-{$tVo.cat_id}-{$tVo.id}.html"><img src="{$tVo.thumbnail}" ></a>
                            <div class="foucebox_bg"></div>
                            <div>
                                <h2><a href="/article-{$tVo.cat_id}-{$tVo.id}.html">{$tVo.title}</a></h2>
                                <p>{$tVo.summary}</p>
                            </div>
                        </div>
                    </volist>
                </div>
                <!-- 小图 -->
                <div class="hd">
                    <ul>
                        <volist name="thumbnailList" id="tVo">
                            <li><a href="/article-{$tVo.cat_id}-{$tVo.id}.html"><img src="{$tVo.thumbnail}"><span class="txt">{$tVo.title}</span><span class="txt_bg"></span><span class="mask"></span></a></li>
                        </volist>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".foucebox").slide({ effect:"fold", autoPlay:true, delayTime:300, startFun:function(i){
                    //下面代码控制文字显示
                    jQuery(".foucebox .showDiv").eq(i).find("h2").css({display:"none",bottom:0}).animate({opacity:"show",bottom:"60px"},300);
                    jQuery(".foucebox .showDiv").eq(i).find("p").css({display:"none",bottom:0}).animate({opacity:"show",bottom:"10px"},300);
                }
                });
            </script>

            <p></p>

            <div class="row">
                <volist name="topCate" id="vo">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h4 class="panel-title"><i class="fa fa-fire"></i> <a href="/index-{$vo.fid}-{$vo.cat_id}.html">{$vo.name}</a></h4></div>
                            <div class="list-group">
                                <volist name="vo.article" id="articleVo">
                                    <a href="/article-{$articleVo.cat_id}-{$articleVo.id}.html" class="list-group-item">{$articleVo.title|cutStr="28"}</a>
                                </volist>
                            </div>
                        </div>
                    </div>
                </volist>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">

            <form class="form-group" action="{:U('Article/search')}">
                <div class="form-group input-group">
                    <input type="text" name="keyWords" class="form-control" placeholder="请输入标题/内容关键词" value="{$_GET['kw']}">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default submit"><i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </form>

            <div class="panel panel-red">
                <div class="panel-heading"><h4 class="panel-title"><i class="fa fa-fire"></i> 热门文章</h4></div>
                <div class="list-group">
                    <list model="Article" fields="id,cat_id,title" limit="15" order="click DESC">
                        <a href="/article-{$cat_id}-{$id}.html" class="list-group-item">{$title}</a>
                    </list>
                </div>
            </div>

        </div>
    </div>
</div>
@include('/Home/Public/footer')


</body>
</html>