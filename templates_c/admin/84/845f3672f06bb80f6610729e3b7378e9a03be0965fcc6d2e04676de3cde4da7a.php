<?php

/* index.html */
class __TwigTemplate_7db9a8b08d86fc0060be94ae35b66bbdbfb9f324263ee393820178d63949f18a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>后台管理模板</title>
\t\t<meta name=\"renderer\" content=\"webkit\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t\t<meta name=\"format-detection\" content=\"telephone=no\">

\t\t<link rel=\"stylesheet\" href=\"plugins/layui/css/layui.css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"css/global.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" href=\"plugins/font-awesome/css/font-awesome.min.css\">

\t</head>

\t<body>
\t111111111111ccccccccc
\t\t<div class=\"layui-layout layui-layout-admin\">
\t\t\t<div class=\"layui-header header header-demo\">
\t\t\t\t<div class=\"layui-main\">
\t\t\t\t\t<div class=\"admin-login-box\">
\t\t\t\t\t\t<a class=\"logo\" style=\"left: 0;\" href=\"http://beginner.zhengjinfan.cn/demo/beginner_admin/\">
\t\t\t\t\t\t\t<span style=\"font-size: 22px;\">BeginnerAdmin</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"admin-side-toggle\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"layui-nav admin-header-item\">
\t\t\t\t\t\t<li class=\"layui-nav-item\">
\t\t\t\t\t\t\t<a href=\"javascript:;\">清除缓存</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"layui-nav-item\">
\t\t\t\t\t\t\t<a href=\"javascript:;\">浏览网站</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"layui-nav-item\" id=\"video1\">
\t\t\t\t\t\t\t<a href=\"javascript:;\">视频</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"layui-nav-item\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"admin-header-user\">
\t\t\t\t\t\t\t\t<img src=\"images/0.jpg\" />
\t\t\t\t\t\t\t\t<span>beginner</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<dl class=\"layui-nav-child\">
\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> 个人信息</a>
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\"><i class=\"fa fa-gear\" aria-hidden=\"true\"></i> 设置</a>
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t<dd id=\"lock\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\" style=\"padding-right: 3px;padding-left: 1px;\"></i> 锁屏 (Alt+L)
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t<a href=\"login.html\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> 注销</a>
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"layui-nav admin-header-item-mobile\">
\t\t\t\t\t\t<li class=\"layui-nav-item\">
\t\t\t\t\t\t\t<a href=\"login.html\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> 注销</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-side layui-bg-black\" id=\"admin-side\">
\t\t\t\t<div class=\"layui-side-scroll\" id=\"admin-navbar-side\" lay-filter=\"side\"></div>
\t\t\t</div>
\t\t\t<div class=\"layui-body\" style=\"bottom: 0;border-left: solid 2px #1AA094;\" id=\"admin-body\">
\t\t\t\t<div class=\"layui-tab admin-nav-card layui-tab-brief\" lay-filter=\"admin-tab\">
\t\t\t\t\t<ul class=\"layui-tab-title\">
\t\t\t\t\t\t<li class=\"layui-this\">
\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<cite>控制面板</cite>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"layui-tab-content\" style=\"min-height: 150px; padding: 5px 0 0 0;\">
\t\t\t\t\t\t<div class=\"layui-tab-item layui-show\">
\t\t\t\t\t\t\t<iframe src=\"main.html\"></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-footer footer footer-demo\" id=\"admin-footer\">
\t\t\t\t<div class=\"layui-main\">
\t\t\t\t\t<p>2016 &copy;
\t\t\t\t\t\t<a href=\"http://beginner.zhengjinfan.cn/demo/beginner_admin/\">beginner.zhengjinfan.cn</a> LGPL license
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"site-tree-mobile layui-hide\">
\t\t\t\t<i class=\"layui-icon\">&#xe602;</i>
\t\t\t</div>
\t\t\t<div class=\"site-mobile-shade\"></div>
\t\t\t
\t\t\t<!--锁屏模板 start-->
\t\t\t<script type=\"text/template\" id=\"lock-temp\">
\t\t\t\t<div class=\"admin-header-lock\" id=\"lock-box\">
\t\t\t\t\t<div class=\"admin-header-lock-img\">
\t\t\t\t\t\t<img src=\"images/0.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"admin-header-lock-name\" id=\"lockUserName\">beginner</div>
\t\t\t\t\t<input type=\"text\" class=\"admin-header-lock-input\" value=\"输入密码解锁..\" name=\"lockPwd\" id=\"lockPwd\" />
\t\t\t\t\t<button class=\"layui-btn layui-btn-small\" id=\"unlock\">解锁</button>
\t\t\t\t</div>
\t\t\t</script>
\t\t\t<!--锁屏模板 end -->
\t\t\t
\t\t\t<script type=\"text/javascript\" src=\"plugins/layui/layui.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"datas/nav.js\"></script>
\t\t\t<script src=\"js/index.js\"></script>
\t\t\t<script>
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar \$ = layui.jquery,
\t\t\t\t\t\tlayer = layui.layer;

\t\t\t\t\t\$('#video1').on('click', function() {
\t\t\t\t\t\tlayer.open({
\t\t\t\t\t\t\ttitle: 'YouTube',
\t\t\t\t\t\t\tmaxmin: true,
\t\t\t\t\t\t\ttype: 2,
\t\t\t\t\t\t\tcontent: 'video.html',
\t\t\t\t\t\t\tarea: ['800px', '500px']
\t\t\t\t\t\t});
\t\t\t\t\t});

\t\t\t\t});
\t\t\t</script>
\t\t</div>
\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/data/web/www.blog.com/templates/admin/index.html");
    }
}
