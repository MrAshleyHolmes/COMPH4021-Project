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
        $__internal_5cad1be087d014eb5a37ef08475e0e94dfc78789b935e1c801949b1e1c89c12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cad1be087d014eb5a37ef08475e0e94dfc78789b935e1c801949b1e1c89c12c->enter($__internal_5cad1be087d014eb5a37ef08475e0e94dfc78789b935e1c801949b1e1c89c12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7fe8ed18f1fcdecf1577bedbf436b0f61ad90d6a7d8f81c20ae435dfa0de0a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8ed18f1fcdecf1577bedbf436b0f61ad90d6a7d8f81c20ae435dfa0de0a25->enter($__internal_7fe8ed18f1fcdecf1577bedbf436b0f61ad90d6a7d8f81c20ae435dfa0de0a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 76
            echo "        <div class=\"alert alert-success\">
            ";
            // line 77
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "</body>
</html>

";
        // line 105
        echo "    ";
        // line 106
        echo "        ";
        // line 107
        echo "        ";
        // line 108
        echo "        ";
        // line 109
        echo "        ";
        // line 110
        echo "    ";
        // line 111
        echo "    ";
        // line 112
        echo "        ";
        // line 113
        echo "        ";
        // line 114
        echo "    ";
        
        $__internal_5cad1be087d014eb5a37ef08475e0e94dfc78789b935e1c801949b1e1c89c12c->leave($__internal_5cad1be087d014eb5a37ef08475e0e94dfc78789b935e1c801949b1e1c89c12c_prof);

        
        $__internal_7fe8ed18f1fcdecf1577bedbf436b0f61ad90d6a7d8f81c20ae435dfa0de0a25->leave($__internal_7fe8ed18f1fcdecf1577bedbf436b0f61ad90d6a7d8f81c20ae435dfa0de0a25_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_98e232aa946ee0a6bf3380065666ac8cce98712af67e10dfce2d5d5cc649216d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e232aa946ee0a6bf3380065666ac8cce98712af67e10dfce2d5d5cc649216d->enter($__internal_98e232aa946ee0a6bf3380065666ac8cce98712af67e10dfce2d5d5cc649216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce1351622e74ffea53fd4b926cebc86347b42fb45d108253e04667300b194441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1351622e74ffea53fd4b926cebc86347b42fb45d108253e04667300b194441->enter($__internal_ce1351622e74ffea53fd4b926cebc86347b42fb45d108253e04667300b194441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_ce1351622e74ffea53fd4b926cebc86347b42fb45d108253e04667300b194441->leave($__internal_ce1351622e74ffea53fd4b926cebc86347b42fb45d108253e04667300b194441_prof);

        
        $__internal_98e232aa946ee0a6bf3380065666ac8cce98712af67e10dfce2d5d5cc649216d->leave($__internal_98e232aa946ee0a6bf3380065666ac8cce98712af67e10dfce2d5d5cc649216d_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23d71f283bfc79914f75971480bd318644d502f957b7fbb038033905f6794d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d71f283bfc79914f75971480bd318644d502f957b7fbb038033905f6794d2b->enter($__internal_23d71f283bfc79914f75971480bd318644d502f957b7fbb038033905f6794d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac0d8f02e2a2cd77ba74126b63125c949de198e068d5d6e8b2c9f1e77bf927f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0d8f02e2a2cd77ba74126b63125c949de198e068d5d6e8b2c9f1e77bf927f5->enter($__internal_ac0d8f02e2a2cd77ba74126b63125c949de198e068d5d6e8b2c9f1e77bf927f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ac0d8f02e2a2cd77ba74126b63125c949de198e068d5d6e8b2c9f1e77bf927f5->leave($__internal_ac0d8f02e2a2cd77ba74126b63125c949de198e068d5d6e8b2c9f1e77bf927f5_prof);

        
        $__internal_23d71f283bfc79914f75971480bd318644d502f957b7fbb038033905f6794d2b->leave($__internal_23d71f283bfc79914f75971480bd318644d502f957b7fbb038033905f6794d2b_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5972a5532639aa7b7bae76c3d7f19f8788adad10a116c5df4b843be8c34861a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5972a5532639aa7b7bae76c3d7f19f8788adad10a116c5df4b843be8c34861a->enter($__internal_f5972a5532639aa7b7bae76c3d7f19f8788adad10a116c5df4b843be8c34861a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8ac9cbf036e7a51ce0e574b606230e92b14b4f6de5cd25ee7458caa0b791a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ac9cbf036e7a51ce0e574b606230e92b14b4f6de5cd25ee7458caa0b791a3e->enter($__internal_f8ac9cbf036e7a51ce0e574b606230e92b14b4f6de5cd25ee7458caa0b791a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 81
        echo "    ";
        // line 82
        echo "        ";
        // line 83
        echo "        ";
        // line 84
        echo "    ";
        // line 85
        echo "    ";
        
        $__internal_f8ac9cbf036e7a51ce0e574b606230e92b14b4f6de5cd25ee7458caa0b791a3e->leave($__internal_f8ac9cbf036e7a51ce0e574b606230e92b14b4f6de5cd25ee7458caa0b791a3e_prof);

        
        $__internal_f5972a5532639aa7b7bae76c3d7f19f8788adad10a116c5df4b843be8c34861a->leave($__internal_f5972a5532639aa7b7bae76c3d7f19f8788adad10a116c5df4b843be8c34861a_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34cb6297ae94c8fcd86c79e36b3582af6bb108e1f2b9fcc1c51cad7d09ad35e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34cb6297ae94c8fcd86c79e36b3582af6bb108e1f2b9fcc1c51cad7d09ad35e6->enter($__internal_34cb6297ae94c8fcd86c79e36b3582af6bb108e1f2b9fcc1c51cad7d09ad35e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c6197d252b00a492967a6a037f85e1b2ec7671f55ad77ebc3da670588f554657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6197d252b00a492967a6a037f85e1b2ec7671f55ad77ebc3da670588f554657->enter($__internal_c6197d252b00a492967a6a037f85e1b2ec7671f55ad77ebc3da670588f554657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_c6197d252b00a492967a6a037f85e1b2ec7671f55ad77ebc3da670588f554657->leave($__internal_c6197d252b00a492967a6a037f85e1b2ec7671f55ad77ebc3da670588f554657_prof);

        
        $__internal_34cb6297ae94c8fcd86c79e36b3582af6bb108e1f2b9fcc1c51cad7d09ad35e6->leave($__internal_34cb6297ae94c8fcd86c79e36b3582af6bb108e1f2b9fcc1c51cad7d09ad35e6_prof);

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
        return array (  292 => 93,  283 => 92,  273 => 85,  271 => 84,  269 => 83,  267 => 82,  265 => 81,  256 => 80,  244 => 22,  234 => 14,  225 => 13,  207 => 12,  197 => 114,  195 => 113,  193 => 112,  191 => 111,  189 => 110,  187 => 109,  185 => 108,  183 => 107,  181 => 106,  179 => 105,  174 => 100,  172 => 92,  164 => 86,  161 => 80,  152 => 77,  149 => 76,  145 => 75,  137 => 69,  132 => 67,  129 => 66,  123 => 64,  121 => 63,  118 => 62,  112 => 60,  110 => 59,  106 => 57,  100 => 55,  98 => 54,  94 => 53,  90 => 52,  86 => 51,  82 => 50,  75 => 46,  51 => 24,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
