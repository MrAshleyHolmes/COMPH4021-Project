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
        $__internal_82c21d22a3dd5015f08d73f17b033fd2f5ed891f770aa0c4cd97d1ed81289f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c21d22a3dd5015f08d73f17b033fd2f5ed891f770aa0c4cd97d1ed81289f98->enter($__internal_82c21d22a3dd5015f08d73f17b033fd2f5ed891f770aa0c4cd97d1ed81289f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ac548f69399802a8850f681bb8d00e08d1cc3c6fd03f83316e68b391926599f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac548f69399802a8850f681bb8d00e08d1cc3c6fd03f83316e68b391926599f0->enter($__internal_ac548f69399802a8850f681bb8d00e08d1cc3c6fd03f83316e68b391926599f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 56
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
                ";
        } else {
            // line 58
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
            echo "\">Admin</a></li>
                <li><a href=\"#\">Register</a></li>
                <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_route");
            echo "\">Login</a></li>
                ";
        }
        // line 62
        echo "            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "</body>
</html>

";
        // line 92
        echo "    ";
        // line 93
        echo "        ";
        // line 94
        echo "        ";
        // line 95
        echo "        ";
        // line 96
        echo "        ";
        // line 97
        echo "    ";
        // line 98
        echo "    ";
        // line 99
        echo "        ";
        // line 100
        echo "        ";
        // line 101
        echo "    ";
        
        $__internal_82c21d22a3dd5015f08d73f17b033fd2f5ed891f770aa0c4cd97d1ed81289f98->leave($__internal_82c21d22a3dd5015f08d73f17b033fd2f5ed891f770aa0c4cd97d1ed81289f98_prof);

        
        $__internal_ac548f69399802a8850f681bb8d00e08d1cc3c6fd03f83316e68b391926599f0->leave($__internal_ac548f69399802a8850f681bb8d00e08d1cc3c6fd03f83316e68b391926599f0_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac3066db67368d9822a257ea1d5027b1390c73cf7c003475f0c170020a8318f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3066db67368d9822a257ea1d5027b1390c73cf7c003475f0c170020a8318f8->enter($__internal_ac3066db67368d9822a257ea1d5027b1390c73cf7c003475f0c170020a8318f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3e86cfb69aad210ad972f6f169c2f5b5902134d779e3ca10262e1b9310498b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e86cfb69aad210ad972f6f169c2f5b5902134d779e3ca10262e1b9310498b6->enter($__internal_d3e86cfb69aad210ad972f6f169c2f5b5902134d779e3ca10262e1b9310498b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_d3e86cfb69aad210ad972f6f169c2f5b5902134d779e3ca10262e1b9310498b6->leave($__internal_d3e86cfb69aad210ad972f6f169c2f5b5902134d779e3ca10262e1b9310498b6_prof);

        
        $__internal_ac3066db67368d9822a257ea1d5027b1390c73cf7c003475f0c170020a8318f8->leave($__internal_ac3066db67368d9822a257ea1d5027b1390c73cf7c003475f0c170020a8318f8_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6574ae871767ece832388428507c7242a8266151834633262a66ca1f3f48b0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6574ae871767ece832388428507c7242a8266151834633262a66ca1f3f48b0cf->enter($__internal_6574ae871767ece832388428507c7242a8266151834633262a66ca1f3f48b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_85cc5712e5c4149c67f42ba4992511482db3995b66734c3801dfb4f18923a44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cc5712e5c4149c67f42ba4992511482db3995b66734c3801dfb4f18923a44e->enter($__internal_85cc5712e5c4149c67f42ba4992511482db3995b66734c3801dfb4f18923a44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_85cc5712e5c4149c67f42ba4992511482db3995b66734c3801dfb4f18923a44e->leave($__internal_85cc5712e5c4149c67f42ba4992511482db3995b66734c3801dfb4f18923a44e_prof);

        
        $__internal_6574ae871767ece832388428507c7242a8266151834633262a66ca1f3f48b0cf->leave($__internal_6574ae871767ece832388428507c7242a8266151834633262a66ca1f3f48b0cf_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f77c3e327937cd63b3e4d7c44f6578bfdce0114978096dfe48e69c49e81acb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f77c3e327937cd63b3e4d7c44f6578bfdce0114978096dfe48e69c49e81acb2->enter($__internal_0f77c3e327937cd63b3e4d7c44f6578bfdce0114978096dfe48e69c49e81acb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47ce40f17025521c0f899afbed295febe64c5e614bf5c3597d650c9c3826263c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ce40f17025521c0f899afbed295febe64c5e614bf5c3597d650c9c3826263c->enter($__internal_47ce40f17025521c0f899afbed295febe64c5e614bf5c3597d650c9c3826263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "    ";
        // line 70
        echo "        ";
        // line 71
        echo "        ";
        // line 72
        echo "    ";
        // line 73
        echo "    ";
        
        $__internal_47ce40f17025521c0f899afbed295febe64c5e614bf5c3597d650c9c3826263c->leave($__internal_47ce40f17025521c0f899afbed295febe64c5e614bf5c3597d650c9c3826263c_prof);

        
        $__internal_0f77c3e327937cd63b3e4d7c44f6578bfdce0114978096dfe48e69c49e81acb2->leave($__internal_0f77c3e327937cd63b3e4d7c44f6578bfdce0114978096dfe48e69c49e81acb2_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35954177692890c33af9e7691d9f39307d8847558574466cb46a22d41676c0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35954177692890c33af9e7691d9f39307d8847558574466cb46a22d41676c0e1->enter($__internal_35954177692890c33af9e7691d9f39307d8847558574466cb46a22d41676c0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc1f1bf671cde787de0f89a9e822faebea49a44582b882899241c77df07d2f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1f1bf671cde787de0f89a9e822faebea49a44582b882899241c77df07d2f64->enter($__internal_dc1f1bf671cde787de0f89a9e822faebea49a44582b882899241c77df07d2f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_dc1f1bf671cde787de0f89a9e822faebea49a44582b882899241c77df07d2f64->leave($__internal_dc1f1bf671cde787de0f89a9e822faebea49a44582b882899241c77df07d2f64_prof);

        
        $__internal_35954177692890c33af9e7691d9f39307d8847558574466cb46a22d41676c0e1->leave($__internal_35954177692890c33af9e7691d9f39307d8847558574466cb46a22d41676c0e1_prof);

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
        return array (  247 => 81,  238 => 80,  228 => 73,  226 => 72,  224 => 71,  222 => 70,  220 => 69,  211 => 68,  199 => 22,  189 => 14,  180 => 13,  162 => 12,  152 => 101,  150 => 100,  148 => 99,  146 => 98,  144 => 97,  142 => 96,  140 => 95,  138 => 94,  136 => 93,  134 => 92,  129 => 87,  127 => 80,  119 => 74,  117 => 68,  109 => 62,  104 => 60,  98 => 58,  92 => 56,  90 => 55,  82 => 50,  75 => 46,  51 => 24,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li><a href=\"{{ path('logout') }}\">Logout</a></li>
                {% else %}
                <li><a href=\"{{ path('admin_index') }}\">Admin</a></li>
                <li><a href=\"#\">Register</a></li>
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
