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
        $__internal_1193c2de479bf587fafecc2775b77902b4fea4e0d5b06b5a0e69d8ba033812d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1193c2de479bf587fafecc2775b77902b4fea4e0d5b06b5a0e69d8ba033812d2->enter($__internal_1193c2de479bf587fafecc2775b77902b4fea4e0d5b06b5a0e69d8ba033812d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dd89070e8a75d2756ad265bf6e8793ff09ceda039a60d0426868adad1248d465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd89070e8a75d2756ad265bf6e8793ff09ceda039a60d0426868adad1248d465->enter($__internal_dd89070e8a75d2756ad265bf6e8793ff09ceda039a60d0426868adad1248d465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1193c2de479bf587fafecc2775b77902b4fea4e0d5b06b5a0e69d8ba033812d2->leave($__internal_1193c2de479bf587fafecc2775b77902b4fea4e0d5b06b5a0e69d8ba033812d2_prof);

        
        $__internal_dd89070e8a75d2756ad265bf6e8793ff09ceda039a60d0426868adad1248d465->leave($__internal_dd89070e8a75d2756ad265bf6e8793ff09ceda039a60d0426868adad1248d465_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_16dbd408e4100ef583bcfad929e4e1f99f2df7edbe2a23c1d4ba7c643cdf9654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16dbd408e4100ef583bcfad929e4e1f99f2df7edbe2a23c1d4ba7c643cdf9654->enter($__internal_16dbd408e4100ef583bcfad929e4e1f99f2df7edbe2a23c1d4ba7c643cdf9654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16a053d81bdd2e3d3b900174e81fbd64be0ac028405a34af2cf1fcacee5c7d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a053d81bdd2e3d3b900174e81fbd64be0ac028405a34af2cf1fcacee5c7d3a->enter($__internal_16a053d81bdd2e3d3b900174e81fbd64be0ac028405a34af2cf1fcacee5c7d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_16a053d81bdd2e3d3b900174e81fbd64be0ac028405a34af2cf1fcacee5c7d3a->leave($__internal_16a053d81bdd2e3d3b900174e81fbd64be0ac028405a34af2cf1fcacee5c7d3a_prof);

        
        $__internal_16dbd408e4100ef583bcfad929e4e1f99f2df7edbe2a23c1d4ba7c643cdf9654->leave($__internal_16dbd408e4100ef583bcfad929e4e1f99f2df7edbe2a23c1d4ba7c643cdf9654_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fa39ce49d5631fc2497eefd397748b33555c78dd9201bcb04539a58b12ee3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa39ce49d5631fc2497eefd397748b33555c78dd9201bcb04539a58b12ee3c4->enter($__internal_5fa39ce49d5631fc2497eefd397748b33555c78dd9201bcb04539a58b12ee3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8738d01cf30ebe29c029b74cf212992b5b83b764d05cd0d5264f59e961e135b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8738d01cf30ebe29c029b74cf212992b5b83b764d05cd0d5264f59e961e135b->enter($__internal_a8738d01cf30ebe29c029b74cf212992b5b83b764d05cd0d5264f59e961e135b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a8738d01cf30ebe29c029b74cf212992b5b83b764d05cd0d5264f59e961e135b->leave($__internal_a8738d01cf30ebe29c029b74cf212992b5b83b764d05cd0d5264f59e961e135b_prof);

        
        $__internal_5fa39ce49d5631fc2497eefd397748b33555c78dd9201bcb04539a58b12ee3c4->leave($__internal_5fa39ce49d5631fc2497eefd397748b33555c78dd9201bcb04539a58b12ee3c4_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a99df1f901567e1836fcbdb7bf3d2c68f4208a5746522278f8d2ece9161fe18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a99df1f901567e1836fcbdb7bf3d2c68f4208a5746522278f8d2ece9161fe18->enter($__internal_8a99df1f901567e1836fcbdb7bf3d2c68f4208a5746522278f8d2ece9161fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eda8c386ccf1582f32651efa42cdf3aa4de46abe28fb21887de5660c212381a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda8c386ccf1582f32651efa42cdf3aa4de46abe28fb21887de5660c212381a7->enter($__internal_eda8c386ccf1582f32651efa42cdf3aa4de46abe28fb21887de5660c212381a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eda8c386ccf1582f32651efa42cdf3aa4de46abe28fb21887de5660c212381a7->leave($__internal_eda8c386ccf1582f32651efa42cdf3aa4de46abe28fb21887de5660c212381a7_prof);

        
        $__internal_8a99df1f901567e1836fcbdb7bf3d2c68f4208a5746522278f8d2ece9161fe18->leave($__internal_8a99df1f901567e1836fcbdb7bf3d2c68f4208a5746522278f8d2ece9161fe18_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61d25a39476cfb55ba7d584931935f0a10c86c79b1f284639f6381c9ab4e453b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d25a39476cfb55ba7d584931935f0a10c86c79b1f284639f6381c9ab4e453b->enter($__internal_61d25a39476cfb55ba7d584931935f0a10c86c79b1f284639f6381c9ab4e453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4ac4ccb100c36ded959a4e86f996266bb9380e3637c9749412be7192b7c76fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac4ccb100c36ded959a4e86f996266bb9380e3637c9749412be7192b7c76fd6->enter($__internal_4ac4ccb100c36ded959a4e86f996266bb9380e3637c9749412be7192b7c76fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_4ac4ccb100c36ded959a4e86f996266bb9380e3637c9749412be7192b7c76fd6->leave($__internal_4ac4ccb100c36ded959a4e86f996266bb9380e3637c9749412be7192b7c76fd6_prof);

        
        $__internal_61d25a39476cfb55ba7d584931935f0a10c86c79b1f284639f6381c9ab4e453b->leave($__internal_61d25a39476cfb55ba7d584931935f0a10c86c79b1f284639f6381c9ab4e453b_prof);

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
