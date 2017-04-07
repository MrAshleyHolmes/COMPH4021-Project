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
        $__internal_32c53902ae8c795f02d844d8fcd4566fcc0f374220bd648548f62b6c1a9112ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c53902ae8c795f02d844d8fcd4566fcc0f374220bd648548f62b6c1a9112ec->enter($__internal_32c53902ae8c795f02d844d8fcd4566fcc0f374220bd648548f62b6c1a9112ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_877d1eb03cc72f0fa778088a219ae33700edbd18ba70980bb9d5429c4d0dbe94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877d1eb03cc72f0fa778088a219ae33700edbd18ba70980bb9d5429c4d0dbe94->enter($__internal_877d1eb03cc72f0fa778088a219ae33700edbd18ba70980bb9d5429c4d0dbe94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <li><a href=\"";
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
            echo "\">Generate</a></li>
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
            echo "                    ";
            // line 67
            echo "                    <li><a href=\"/register\">Register</a></li>
                    <li><a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_route");
            echo "\">Login</a></li>
                ";
        }
        // line 70
        echo "            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "</body>
</html>

";
        // line 100
        echo "    ";
        // line 101
        echo "        ";
        // line 102
        echo "        ";
        // line 103
        echo "        ";
        // line 104
        echo "        ";
        // line 105
        echo "    ";
        // line 106
        echo "    ";
        // line 107
        echo "        ";
        // line 108
        echo "        ";
        // line 109
        echo "    ";
        
        $__internal_32c53902ae8c795f02d844d8fcd4566fcc0f374220bd648548f62b6c1a9112ec->leave($__internal_32c53902ae8c795f02d844d8fcd4566fcc0f374220bd648548f62b6c1a9112ec_prof);

        
        $__internal_877d1eb03cc72f0fa778088a219ae33700edbd18ba70980bb9d5429c4d0dbe94->leave($__internal_877d1eb03cc72f0fa778088a219ae33700edbd18ba70980bb9d5429c4d0dbe94_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_96fcc5eb09444979b45ccb41a51030d4d817c462596b5a8b70346266fb421963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96fcc5eb09444979b45ccb41a51030d4d817c462596b5a8b70346266fb421963->enter($__internal_96fcc5eb09444979b45ccb41a51030d4d817c462596b5a8b70346266fb421963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_545cac20110586fc259e8e48fee561366ef4f49a89800aa35599d212b691d7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545cac20110586fc259e8e48fee561366ef4f49a89800aa35599d212b691d7cb->enter($__internal_545cac20110586fc259e8e48fee561366ef4f49a89800aa35599d212b691d7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_545cac20110586fc259e8e48fee561366ef4f49a89800aa35599d212b691d7cb->leave($__internal_545cac20110586fc259e8e48fee561366ef4f49a89800aa35599d212b691d7cb_prof);

        
        $__internal_96fcc5eb09444979b45ccb41a51030d4d817c462596b5a8b70346266fb421963->leave($__internal_96fcc5eb09444979b45ccb41a51030d4d817c462596b5a8b70346266fb421963_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74b7513b79c57a9cabb20bcb4491c3c27532a5d527f5bc996ce8c25bbcf2d66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b7513b79c57a9cabb20bcb4491c3c27532a5d527f5bc996ce8c25bbcf2d66b->enter($__internal_74b7513b79c57a9cabb20bcb4491c3c27532a5d527f5bc996ce8c25bbcf2d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_039fcf3af70e747984eeae1067e56c22baf2d8756af8ef796aa12253a7ee613c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039fcf3af70e747984eeae1067e56c22baf2d8756af8ef796aa12253a7ee613c->enter($__internal_039fcf3af70e747984eeae1067e56c22baf2d8756af8ef796aa12253a7ee613c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_039fcf3af70e747984eeae1067e56c22baf2d8756af8ef796aa12253a7ee613c->leave($__internal_039fcf3af70e747984eeae1067e56c22baf2d8756af8ef796aa12253a7ee613c_prof);

        
        $__internal_74b7513b79c57a9cabb20bcb4491c3c27532a5d527f5bc996ce8c25bbcf2d66b->leave($__internal_74b7513b79c57a9cabb20bcb4491c3c27532a5d527f5bc996ce8c25bbcf2d66b_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b8445ef13d0910301d071e54436a4cb5effc5fc76c665fb1922c00503e5351b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8445ef13d0910301d071e54436a4cb5effc5fc76c665fb1922c00503e5351b->enter($__internal_7b8445ef13d0910301d071e54436a4cb5effc5fc76c665fb1922c00503e5351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a2ed8b361aba65471d6a9f19f37e47ec0b930ce4b33803a1052409a2c36776d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2ed8b361aba65471d6a9f19f37e47ec0b930ce4b33803a1052409a2c36776d->enter($__internal_9a2ed8b361aba65471d6a9f19f37e47ec0b930ce4b33803a1052409a2c36776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "    ";
        // line 78
        echo "        ";
        // line 79
        echo "        ";
        // line 80
        echo "    ";
        // line 81
        echo "    ";
        
        $__internal_9a2ed8b361aba65471d6a9f19f37e47ec0b930ce4b33803a1052409a2c36776d->leave($__internal_9a2ed8b361aba65471d6a9f19f37e47ec0b930ce4b33803a1052409a2c36776d_prof);

        
        $__internal_7b8445ef13d0910301d071e54436a4cb5effc5fc76c665fb1922c00503e5351b->leave($__internal_7b8445ef13d0910301d071e54436a4cb5effc5fc76c665fb1922c00503e5351b_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6083e5f5010847de097445366e2a08e04225c5d4638477f64ccb8c483661c28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6083e5f5010847de097445366e2a08e04225c5d4638477f64ccb8c483661c28d->enter($__internal_6083e5f5010847de097445366e2a08e04225c5d4638477f64ccb8c483661c28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e044d9f9361b41cfaca4fabf57fa3ded624155886668756ada7451ac811fb409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e044d9f9361b41cfaca4fabf57fa3ded624155886668756ada7451ac811fb409->enter($__internal_e044d9f9361b41cfaca4fabf57fa3ded624155886668756ada7451ac811fb409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_e044d9f9361b41cfaca4fabf57fa3ded624155886668756ada7451ac811fb409->leave($__internal_e044d9f9361b41cfaca4fabf57fa3ded624155886668756ada7451ac811fb409_prof);

        
        $__internal_6083e5f5010847de097445366e2a08e04225c5d4638477f64ccb8c483661c28d->leave($__internal_6083e5f5010847de097445366e2a08e04225c5d4638477f64ccb8c483661c28d_prof);

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
        return array (  277 => 89,  268 => 88,  258 => 81,  256 => 80,  254 => 79,  252 => 78,  250 => 77,  241 => 76,  229 => 22,  219 => 14,  210 => 13,  192 => 12,  182 => 109,  180 => 108,  178 => 107,  176 => 106,  174 => 105,  172 => 104,  170 => 103,  168 => 102,  166 => 101,  164 => 100,  159 => 95,  157 => 88,  149 => 82,  147 => 76,  139 => 70,  134 => 68,  131 => 67,  129 => 66,  123 => 64,  121 => 63,  118 => 62,  112 => 60,  110 => 59,  106 => 57,  100 => 55,  98 => 54,  94 => 53,  90 => 52,  86 => 51,  82 => 50,  75 => 46,  51 => 24,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
                <li><a href=\"{{ path('homepage') }}\">Home</a></li>
                <li><a href=\"{{ path('app_pages_about') }}\">About</a></li>
                <li><a href=\"{{ path('app_pages_contact') }}\">Contact</a></li>
                <li><a href=\"{{ path('app_pages_profile') }}\">Profile</a></li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li><a href=\"{{ path('app_pages_orders') }}\">Generate</a></li>
                {% endif %}
            </ul>
            <ul class=\"nav navbar-right navbar-nav\">
                {% if is_granted('ROLE_SUPER_ADMIN') %}
                <li><a href=\"{{ path('admin_index') }}\">Admin</a></li>
                {% endif %}

                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li><a href=\"{{ path('logout') }}\">Logout</a></li>
                {% else %}
                    {#<li><a href=\"{{ path('admin_index') }}\">Admin</a></li>#}
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
