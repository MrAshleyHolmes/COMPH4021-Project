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
        $__internal_5effed401e3baaaf57cdf91094610c15874cb04cb6a87280293cdfed403c26ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5effed401e3baaaf57cdf91094610c15874cb04cb6a87280293cdfed403c26ec->enter($__internal_5effed401e3baaaf57cdf91094610c15874cb04cb6a87280293cdfed403c26ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_310032e5c9496894d4ce038af3e26d36e17b93b4c20ed2e5969c82580e6c0f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310032e5c9496894d4ce038af3e26d36e17b93b4c20ed2e5969c82580e6c0f5d->enter($__internal_310032e5c9496894d4ce038af3e26d36e17b93b4c20ed2e5969c82580e6c0f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo "\">Covers</a></li>
                    <li><a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_pages_task");
            echo "\">Tasks</a></li>
                ";
        }
        // line 58
        echo "            </ul>
            <ul class=\"nav navbar-right navbar-nav\">
                ";
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 61
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
            echo "\">Admin</a></li>
                ";
        }
        // line 63
        echo "
                ";
        // line 64
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 65
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
                ";
        } else {
            // line 67
            echo "                <li><a href=\"/register\">Register</a></li>
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 77
            echo "        <div class=\"alert alert-success\">
            ";
            // line 78
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "</body>
</html>

";
        // line 106
        echo "    ";
        // line 107
        echo "        ";
        // line 108
        echo "        ";
        // line 109
        echo "        ";
        // line 110
        echo "        ";
        // line 111
        echo "    ";
        // line 112
        echo "    ";
        // line 113
        echo "        ";
        // line 114
        echo "        ";
        // line 115
        echo "    ";
        
        $__internal_5effed401e3baaaf57cdf91094610c15874cb04cb6a87280293cdfed403c26ec->leave($__internal_5effed401e3baaaf57cdf91094610c15874cb04cb6a87280293cdfed403c26ec_prof);

        
        $__internal_310032e5c9496894d4ce038af3e26d36e17b93b4c20ed2e5969c82580e6c0f5d->leave($__internal_310032e5c9496894d4ce038af3e26d36e17b93b4c20ed2e5969c82580e6c0f5d_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_721f91aa01d9860453295efc3559402364b05f6c375fcc7f0b90346b6fc4b4e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721f91aa01d9860453295efc3559402364b05f6c375fcc7f0b90346b6fc4b4e6->enter($__internal_721f91aa01d9860453295efc3559402364b05f6c375fcc7f0b90346b6fc4b4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_709d51f958290ead6fcfd8b60cdcfb010fa03a55cd7c0a485de2515ac89c0146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709d51f958290ead6fcfd8b60cdcfb010fa03a55cd7c0a485de2515ac89c0146->enter($__internal_709d51f958290ead6fcfd8b60cdcfb010fa03a55cd7c0a485de2515ac89c0146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_709d51f958290ead6fcfd8b60cdcfb010fa03a55cd7c0a485de2515ac89c0146->leave($__internal_709d51f958290ead6fcfd8b60cdcfb010fa03a55cd7c0a485de2515ac89c0146_prof);

        
        $__internal_721f91aa01d9860453295efc3559402364b05f6c375fcc7f0b90346b6fc4b4e6->leave($__internal_721f91aa01d9860453295efc3559402364b05f6c375fcc7f0b90346b6fc4b4e6_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec8064cb04bc9a5481150038730c4da72a567871b376cf88aa296ed5970ede26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8064cb04bc9a5481150038730c4da72a567871b376cf88aa296ed5970ede26->enter($__internal_ec8064cb04bc9a5481150038730c4da72a567871b376cf88aa296ed5970ede26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dfd1c2cef634d170ca407a79a611331f4ec48c9eef0e53cf14c58fd394652141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd1c2cef634d170ca407a79a611331f4ec48c9eef0e53cf14c58fd394652141->enter($__internal_dfd1c2cef634d170ca407a79a611331f4ec48c9eef0e53cf14c58fd394652141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dfd1c2cef634d170ca407a79a611331f4ec48c9eef0e53cf14c58fd394652141->leave($__internal_dfd1c2cef634d170ca407a79a611331f4ec48c9eef0e53cf14c58fd394652141_prof);

        
        $__internal_ec8064cb04bc9a5481150038730c4da72a567871b376cf88aa296ed5970ede26->leave($__internal_ec8064cb04bc9a5481150038730c4da72a567871b376cf88aa296ed5970ede26_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_012da96eb93184c728b0c17cbe7e5ade6a8dcf9707b15fa269cdb31c36314ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012da96eb93184c728b0c17cbe7e5ade6a8dcf9707b15fa269cdb31c36314ccd->enter($__internal_012da96eb93184c728b0c17cbe7e5ade6a8dcf9707b15fa269cdb31c36314ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de104dd94802b510ff344d397228674ba987db3cba82a758d1fabe39eeb144cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de104dd94802b510ff344d397228674ba987db3cba82a758d1fabe39eeb144cb->enter($__internal_de104dd94802b510ff344d397228674ba987db3cba82a758d1fabe39eeb144cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "    ";
        // line 83
        echo "        ";
        // line 84
        echo "        ";
        // line 85
        echo "    ";
        // line 86
        echo "    ";
        
        $__internal_de104dd94802b510ff344d397228674ba987db3cba82a758d1fabe39eeb144cb->leave($__internal_de104dd94802b510ff344d397228674ba987db3cba82a758d1fabe39eeb144cb_prof);

        
        $__internal_012da96eb93184c728b0c17cbe7e5ade6a8dcf9707b15fa269cdb31c36314ccd->leave($__internal_012da96eb93184c728b0c17cbe7e5ade6a8dcf9707b15fa269cdb31c36314ccd_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1070bdaf0848e1e5dca2b9647bfc40fd44312148bd51609ec7063bc29256e0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1070bdaf0848e1e5dca2b9647bfc40fd44312148bd51609ec7063bc29256e0c4->enter($__internal_1070bdaf0848e1e5dca2b9647bfc40fd44312148bd51609ec7063bc29256e0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_146688adc2fd5d95248451a3626c037c980f2cc4a967a57819ca66d1506cf700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146688adc2fd5d95248451a3626c037c980f2cc4a967a57819ca66d1506cf700->enter($__internal_146688adc2fd5d95248451a3626c037c980f2cc4a967a57819ca66d1506cf700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_146688adc2fd5d95248451a3626c037c980f2cc4a967a57819ca66d1506cf700->leave($__internal_146688adc2fd5d95248451a3626c037c980f2cc4a967a57819ca66d1506cf700_prof);

        
        $__internal_1070bdaf0848e1e5dca2b9647bfc40fd44312148bd51609ec7063bc29256e0c4->leave($__internal_1070bdaf0848e1e5dca2b9647bfc40fd44312148bd51609ec7063bc29256e0c4_prof);

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
        return array (  296 => 94,  287 => 93,  277 => 86,  275 => 85,  273 => 84,  271 => 83,  269 => 82,  260 => 81,  248 => 22,  238 => 14,  229 => 13,  211 => 12,  201 => 115,  199 => 114,  197 => 113,  195 => 112,  193 => 111,  191 => 110,  189 => 109,  187 => 108,  185 => 107,  183 => 106,  178 => 101,  176 => 93,  168 => 87,  165 => 81,  156 => 78,  153 => 77,  149 => 76,  141 => 70,  136 => 68,  133 => 67,  127 => 65,  125 => 64,  122 => 63,  116 => 61,  114 => 60,  110 => 58,  105 => 56,  100 => 55,  98 => 54,  94 => 53,  90 => 52,  86 => 51,  82 => 50,  75 => 46,  51 => 24,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
                    <li><a href=\"{{ path('app_pages_orders') }}\">Covers</a></li>
                    <li><a href=\"{{ path('app_pages_task') }}\">Tasks</a></li>
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
    {% for msg in app.session.flashBag.get('success') %}
        <div class=\"alert alert-success\">
            {{ msg }}
        </div>
    {% endfor %}
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
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
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
