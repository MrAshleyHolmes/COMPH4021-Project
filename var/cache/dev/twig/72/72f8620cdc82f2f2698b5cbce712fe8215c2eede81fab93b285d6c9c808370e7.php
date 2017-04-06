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
        $__internal_02e88a37f46a33ee4eb04ca52db84d49ae69817ae329979045725b0062f804c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e88a37f46a33ee4eb04ca52db84d49ae69817ae329979045725b0062f804c3->enter($__internal_02e88a37f46a33ee4eb04ca52db84d49ae69817ae329979045725b0062f804c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_141e3bd963925442f094a91474d0e7e64e526e8f4f4f1f2fe3936fdbfc322370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141e3bd963925442f094a91474d0e7e64e526e8f4f4f1f2fe3936fdbfc322370->enter($__internal_141e3bd963925442f094a91474d0e7e64e526e8f4f4f1f2fe3936fdbfc322370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_pages_about");
        echo "\">About</a></li>
                <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_pages_contact");
        echo "\">Contact</a></li>
                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_pages_profile");
        echo "\">Profile</a></li>
                ";
        // line 54
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_pages_orders");
            echo "\">Orders</a></li>
                ";
        }
        // line 57
        echo "            </ul>
            <ul class=\"nav navbar-right navbar-nav\">
                ";
        // line 59
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 60
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
            echo "\">Admin</a></li>
                ";
        }
        // line 62
        echo "
                ";
        // line 63
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 64
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
                ";
        } else {
            // line 66
            echo "                <li><a href=\"/register\">Register</a></li>
                <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_route");
            echo "\">Login</a></li>
                ";
        }
        // line 69
        echo "            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "</body>
</html>

";
        // line 99
        echo "    ";
        // line 100
        echo "        ";
        // line 101
        echo "        ";
        // line 102
        echo "        ";
        // line 103
        echo "        ";
        // line 104
        echo "    ";
        // line 105
        echo "    ";
        // line 106
        echo "        ";
        // line 107
        echo "        ";
        // line 108
        echo "    ";
        
        $__internal_02e88a37f46a33ee4eb04ca52db84d49ae69817ae329979045725b0062f804c3->leave($__internal_02e88a37f46a33ee4eb04ca52db84d49ae69817ae329979045725b0062f804c3_prof);

        
        $__internal_141e3bd963925442f094a91474d0e7e64e526e8f4f4f1f2fe3936fdbfc322370->leave($__internal_141e3bd963925442f094a91474d0e7e64e526e8f4f4f1f2fe3936fdbfc322370_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdf77cac188494528e5c99c47737ab57939724b18a0b509c0dfaa4a3236fff88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf77cac188494528e5c99c47737ab57939724b18a0b509c0dfaa4a3236fff88->enter($__internal_bdf77cac188494528e5c99c47737ab57939724b18a0b509c0dfaa4a3236fff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3135d47c4208767ebf04ca418035df45972d3678833e64a07fb48312853dff65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3135d47c4208767ebf04ca418035df45972d3678833e64a07fb48312853dff65->enter($__internal_3135d47c4208767ebf04ca418035df45972d3678833e64a07fb48312853dff65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_3135d47c4208767ebf04ca418035df45972d3678833e64a07fb48312853dff65->leave($__internal_3135d47c4208767ebf04ca418035df45972d3678833e64a07fb48312853dff65_prof);

        
        $__internal_bdf77cac188494528e5c99c47737ab57939724b18a0b509c0dfaa4a3236fff88->leave($__internal_bdf77cac188494528e5c99c47737ab57939724b18a0b509c0dfaa4a3236fff88_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f26ed365e5bbce8de877cdef6513c9b53b9f40a564907dbd9113f16edfc5ebd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26ed365e5bbce8de877cdef6513c9b53b9f40a564907dbd9113f16edfc5ebd2->enter($__internal_f26ed365e5bbce8de877cdef6513c9b53b9f40a564907dbd9113f16edfc5ebd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d55ac37453543c2a7e3e274ac015959187c9920fe98abaf700771ef717d24bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d55ac37453543c2a7e3e274ac015959187c9920fe98abaf700771ef717d24bb->enter($__internal_4d55ac37453543c2a7e3e274ac015959187c9920fe98abaf700771ef717d24bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4d55ac37453543c2a7e3e274ac015959187c9920fe98abaf700771ef717d24bb->leave($__internal_4d55ac37453543c2a7e3e274ac015959187c9920fe98abaf700771ef717d24bb_prof);

        
        $__internal_f26ed365e5bbce8de877cdef6513c9b53b9f40a564907dbd9113f16edfc5ebd2->leave($__internal_f26ed365e5bbce8de877cdef6513c9b53b9f40a564907dbd9113f16edfc5ebd2_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ef3cec333251f15bf326af3fc6c77fe5f1a7c053faea479df0bf20c01fec1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef3cec333251f15bf326af3fc6c77fe5f1a7c053faea479df0bf20c01fec1af->enter($__internal_1ef3cec333251f15bf326af3fc6c77fe5f1a7c053faea479df0bf20c01fec1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12326119bc59af246fe3f074975d5eddc0d7ba04d90d5a0ae05833e5c43e3c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12326119bc59af246fe3f074975d5eddc0d7ba04d90d5a0ae05833e5c43e3c27->enter($__internal_12326119bc59af246fe3f074975d5eddc0d7ba04d90d5a0ae05833e5c43e3c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "    ";
        // line 77
        echo "        ";
        // line 78
        echo "        ";
        // line 79
        echo "    ";
        // line 80
        echo "    ";
        
        $__internal_12326119bc59af246fe3f074975d5eddc0d7ba04d90d5a0ae05833e5c43e3c27->leave($__internal_12326119bc59af246fe3f074975d5eddc0d7ba04d90d5a0ae05833e5c43e3c27_prof);

        
        $__internal_1ef3cec333251f15bf326af3fc6c77fe5f1a7c053faea479df0bf20c01fec1af->leave($__internal_1ef3cec333251f15bf326af3fc6c77fe5f1a7c053faea479df0bf20c01fec1af_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_334e0a73a542bab74ed4e9d87b6e4041f1e4f0fbfafc80325a9676d4b8c50272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334e0a73a542bab74ed4e9d87b6e4041f1e4f0fbfafc80325a9676d4b8c50272->enter($__internal_334e0a73a542bab74ed4e9d87b6e4041f1e4f0fbfafc80325a9676d4b8c50272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0eb22650d7630d681fe1d2daa101e254f3867650d54bbeeb0b2ad6ede790727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0eb22650d7630d681fe1d2daa101e254f3867650d54bbeeb0b2ad6ede790727->enter($__internal_f0eb22650d7630d681fe1d2daa101e254f3867650d54bbeeb0b2ad6ede790727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_f0eb22650d7630d681fe1d2daa101e254f3867650d54bbeeb0b2ad6ede790727->leave($__internal_f0eb22650d7630d681fe1d2daa101e254f3867650d54bbeeb0b2ad6ede790727_prof);

        
        $__internal_334e0a73a542bab74ed4e9d87b6e4041f1e4f0fbfafc80325a9676d4b8c50272->leave($__internal_334e0a73a542bab74ed4e9d87b6e4041f1e4f0fbfafc80325a9676d4b8c50272_prof);

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
        return array (  275 => 88,  266 => 87,  256 => 80,  254 => 79,  252 => 78,  250 => 77,  248 => 76,  239 => 75,  227 => 22,  217 => 14,  208 => 13,  190 => 12,  180 => 108,  178 => 107,  176 => 106,  174 => 105,  172 => 104,  170 => 103,  168 => 102,  166 => 101,  164 => 100,  162 => 99,  157 => 94,  155 => 87,  147 => 81,  145 => 75,  137 => 69,  132 => 67,  129 => 66,  123 => 64,  121 => 63,  118 => 62,  112 => 60,  110 => 59,  106 => 57,  100 => 55,  98 => 54,  94 => 53,  90 => 52,  86 => 51,  82 => 50,  75 => 46,  51 => 24,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
                <li><a href=\"{{ path('app_pages_about') }}\">About</a></li>
                <li><a href=\"{{ path('app_pages_contact') }}\">Contact</a></li>
                <li><a href=\"{{ path('app_pages_profile') }}\">Profile</a></li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li><a href=\"{{ path('app_pages_orders') }}\">Orders</a></li>
                {% endif %}
            </ul>
            <ul class=\"nav navbar-right navbar-nav\">
                {% if is_granted('ROLE_SUPER_ADMIN') %}
                <li><a href=\"{{ path('admin_index') }}\">Admin</a></li>
                {% endif %}

                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li><a href=\"{{ path('logout') }}\">Logout</a></li>
                {% else %}
                <li><a href=\"/register\">Register</a></li>
                <li><a href=\"{{ path('login_route') }}\">Login</a></li>
                {% endif %}
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
