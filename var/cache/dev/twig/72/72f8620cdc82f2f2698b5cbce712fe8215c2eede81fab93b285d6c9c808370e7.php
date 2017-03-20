<?php

/* base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44aeda74bff53fa48a877f6848bb18155bd946781d3fca2b522245d1062267c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44aeda74bff53fa48a877f6848bb18155bd946781d3fca2b522245d1062267c3->enter($__internal_44aeda74bff53fa48a877f6848bb18155bd946781d3fca2b522245d1062267c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_59247a50c774c556c127a5375191a8df2df0215ca81af1acb3a9baf7e73269b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59247a50c774c556c127a5375191a8df2df0215ca81af1acb3a9baf7e73269b1->enter($__internal_59247a50c774c556c127a5375191a8df2df0215ca81af1acb3a9baf7e73269b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Web App</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
            <ul class=\"nav navbar-right navbar-nav\">
                <li class=\"\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Admin</a></li>
                <li class=\"\"><a href=\"#\">Register</a></li>
                <li class=\"\"><a href=\"#\">Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "</body>
</html>

";
        // line 88
        echo "    ";
        // line 89
        echo "        ";
        // line 90
        echo "        ";
        // line 91
        echo "        ";
        // line 92
        echo "        ";
        // line 93
        echo "    ";
        // line 94
        echo "    ";
        // line 95
        echo "        ";
        // line 96
        echo "        ";
        // line 97
        echo "    ";
        
        $__internal_44aeda74bff53fa48a877f6848bb18155bd946781d3fca2b522245d1062267c3->leave($__internal_44aeda74bff53fa48a877f6848bb18155bd946781d3fca2b522245d1062267c3_prof);

        
        $__internal_59247a50c774c556c127a5375191a8df2df0215ca81af1acb3a9baf7e73269b1->leave($__internal_59247a50c774c556c127a5375191a8df2df0215ca81af1acb3a9baf7e73269b1_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd2b9a2cc66123bd7901d5743681d757e7f10708ac27807e3d3dcf8f7890492d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2b9a2cc66123bd7901d5743681d757e7f10708ac27807e3d3dcf8f7890492d->enter($__internal_cd2b9a2cc66123bd7901d5743681d757e7f10708ac27807e3d3dcf8f7890492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fe3ea6ce601799d2f6871351a38effd571154bc23f35197053cc2578ff77344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe3ea6ce601799d2f6871351a38effd571154bc23f35197053cc2578ff77344->enter($__internal_5fe3ea6ce601799d2f6871351a38effd571154bc23f35197053cc2578ff77344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_5fe3ea6ce601799d2f6871351a38effd571154bc23f35197053cc2578ff77344->leave($__internal_5fe3ea6ce601799d2f6871351a38effd571154bc23f35197053cc2578ff77344_prof);

        
        $__internal_cd2b9a2cc66123bd7901d5743681d757e7f10708ac27807e3d3dcf8f7890492d->leave($__internal_cd2b9a2cc66123bd7901d5743681d757e7f10708ac27807e3d3dcf8f7890492d_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b046c02b217df640269a01634d1f6af13e007890c60defc1e040605475ab63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b046c02b217df640269a01634d1f6af13e007890c60defc1e040605475ab63c->enter($__internal_6b046c02b217df640269a01634d1f6af13e007890c60defc1e040605475ab63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_320206f10b09db99f47e128d29393eb9039254a1f9ab08d1c7cf029d72419454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320206f10b09db99f47e128d29393eb9039254a1f9ab08d1c7cf029d72419454->enter($__internal_320206f10b09db99f47e128d29393eb9039254a1f9ab08d1c7cf029d72419454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_320206f10b09db99f47e128d29393eb9039254a1f9ab08d1c7cf029d72419454->leave($__internal_320206f10b09db99f47e128d29393eb9039254a1f9ab08d1c7cf029d72419454_prof);

        
        $__internal_6b046c02b217df640269a01634d1f6af13e007890c60defc1e040605475ab63c->leave($__internal_6b046c02b217df640269a01634d1f6af13e007890c60defc1e040605475ab63c_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_314ef44c3d677f8018b41559b7a5773fc497654b6b911d48d4aaa2033f5bd1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314ef44c3d677f8018b41559b7a5773fc497654b6b911d48d4aaa2033f5bd1c7->enter($__internal_314ef44c3d677f8018b41559b7a5773fc497654b6b911d48d4aaa2033f5bd1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f70e0fd7adb8f1c3ecea78efb0601913f33ec289f8411c3fc326aeb3a5a07017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70e0fd7adb8f1c3ecea78efb0601913f33ec289f8411c3fc326aeb3a5a07017->enter($__internal_f70e0fd7adb8f1c3ecea78efb0601913f33ec289f8411c3fc326aeb3a5a07017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "    ";
        // line 66
        echo "        ";
        // line 67
        echo "        ";
        // line 68
        echo "    ";
        // line 69
        echo "    ";
        
        $__internal_f70e0fd7adb8f1c3ecea78efb0601913f33ec289f8411c3fc326aeb3a5a07017->leave($__internal_f70e0fd7adb8f1c3ecea78efb0601913f33ec289f8411c3fc326aeb3a5a07017_prof);

        
        $__internal_314ef44c3d677f8018b41559b7a5773fc497654b6b911d48d4aaa2033f5bd1c7->leave($__internal_314ef44c3d677f8018b41559b7a5773fc497654b6b911d48d4aaa2033f5bd1c7_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a28e6292bf7158dca9afbed9176bec86c1ab5c916cb310da029d67be1890fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a28e6292bf7158dca9afbed9176bec86c1ab5c916cb310da029d67be1890fb9->enter($__internal_7a28e6292bf7158dca9afbed9176bec86c1ab5c916cb310da029d67be1890fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a34f1f2b9ed3746b726086858ef5f4f0a03be3cfebb1438708eb38abf8bbfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a34f1f2b9ed3746b726086858ef5f4f0a03be3cfebb1438708eb38abf8bbfaa->enter($__internal_0a34f1f2b9ed3746b726086858ef5f4f0a03be3cfebb1438708eb38abf8bbfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_0a34f1f2b9ed3746b726086858ef5f4f0a03be3cfebb1438708eb38abf8bbfaa->leave($__internal_0a34f1f2b9ed3746b726086858ef5f4f0a03be3cfebb1438708eb38abf8bbfaa_prof);

        
        $__internal_7a28e6292bf7158dca9afbed9176bec86c1ab5c916cb310da029d67be1890fb9->leave($__internal_7a28e6292bf7158dca9afbed9176bec86c1ab5c916cb310da029d67be1890fb9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 77,  223 => 76,  213 => 69,  211 => 68,  209 => 67,  207 => 66,  205 => 65,  196 => 64,  184 => 22,  174 => 14,  165 => 13,  147 => 12,  137 => 97,  135 => 96,  133 => 95,  131 => 94,  129 => 93,  127 => 92,  125 => 91,  123 => 90,  121 => 89,  119 => 88,  114 => 83,  112 => 76,  104 => 70,  102 => 64,  90 => 55,  82 => 50,  75 => 46,  51 => 24,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>

    <title>{% block title %}Web App!{% endblock %}</title>
    {% block stylesheets %}

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('styles/main.css') }}\" rel=\"stylesheet\">
    {% endblock %}
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Web App</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"{{ path('homepage') }}\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
            <ul class=\"nav navbar-right navbar-nav\">
                <li class=\"\"><a href=\"{{ path('admin_index') }}\">Admin</a></li>
                <li class=\"\"><a href=\"#\">Register</a></li>
                <li class=\"\"><a href=\"#\">Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    {% block body %}
    {#<div class=\"starter-template\">#}
        {#<h1>Bootstrap starter template</h1>#}
        {#<p class=\"lead\">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>#}
    {#</div>#}
    {% endblock %}
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{% block javascripts %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
{% endblock %}
</body>
</html>

{#<!DOCTYPE html>#}
{#<html>#}
    {#<head>#}
        {#<meta charset=\"UTF-8\" />#}
        {#<title>{% block title %}Welcome!{% endblock %}</title>#}
        {#{% block stylesheets %}{% endblock %}#}
        {#<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />#}
    {#</head>#}
    {#<body>#}
        {#{% block body %}{% endblock %}#}
        {#{% block javascripts %}{% endblock %}#}
    {#</body>#}
{#</html>#}
", "base.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/base.html.twig");
    }
}
