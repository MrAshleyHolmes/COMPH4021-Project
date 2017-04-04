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
        $__internal_c193ea5506a63c47b0f2561e62ccc608a14177b9a126e397504a194d7ffbc480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c193ea5506a63c47b0f2561e62ccc608a14177b9a126e397504a194d7ffbc480->enter($__internal_c193ea5506a63c47b0f2561e62ccc608a14177b9a126e397504a194d7ffbc480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_34df412d8c6cedd9f84e6b36832fbc54bc3289672581279fb41f1c7bd4a6405b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34df412d8c6cedd9f84e6b36832fbc54bc3289672581279fb41f1c7bd4a6405b->enter($__internal_34df412d8c6cedd9f84e6b36832fbc54bc3289672581279fb41f1c7bd4a6405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <li class=\"\"><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login</a></li>
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
        
        $__internal_c193ea5506a63c47b0f2561e62ccc608a14177b9a126e397504a194d7ffbc480->leave($__internal_c193ea5506a63c47b0f2561e62ccc608a14177b9a126e397504a194d7ffbc480_prof);

        
        $__internal_34df412d8c6cedd9f84e6b36832fbc54bc3289672581279fb41f1c7bd4a6405b->leave($__internal_34df412d8c6cedd9f84e6b36832fbc54bc3289672581279fb41f1c7bd4a6405b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_6814c4ac420f7eb1e88adc44ccfdb3538c0a0937d4aa30967dd12295e4e09f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6814c4ac420f7eb1e88adc44ccfdb3538c0a0937d4aa30967dd12295e4e09f80->enter($__internal_6814c4ac420f7eb1e88adc44ccfdb3538c0a0937d4aa30967dd12295e4e09f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0bedb64a428597a32d629acac346235ddae624dca6d95215b98ce1a982209033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bedb64a428597a32d629acac346235ddae624dca6d95215b98ce1a982209033->enter($__internal_0bedb64a428597a32d629acac346235ddae624dca6d95215b98ce1a982209033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_0bedb64a428597a32d629acac346235ddae624dca6d95215b98ce1a982209033->leave($__internal_0bedb64a428597a32d629acac346235ddae624dca6d95215b98ce1a982209033_prof);

        
        $__internal_6814c4ac420f7eb1e88adc44ccfdb3538c0a0937d4aa30967dd12295e4e09f80->leave($__internal_6814c4ac420f7eb1e88adc44ccfdb3538c0a0937d4aa30967dd12295e4e09f80_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64a37c47b513909d74f812a1d208549638305aa9fb5ad1a8c8392021c22b8534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a37c47b513909d74f812a1d208549638305aa9fb5ad1a8c8392021c22b8534->enter($__internal_64a37c47b513909d74f812a1d208549638305aa9fb5ad1a8c8392021c22b8534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9fa9ef70a84c3c358dbf8856645a856da3efc9a68f2297026cd00c04d736744e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa9ef70a84c3c358dbf8856645a856da3efc9a68f2297026cd00c04d736744e->enter($__internal_9fa9ef70a84c3c358dbf8856645a856da3efc9a68f2297026cd00c04d736744e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9fa9ef70a84c3c358dbf8856645a856da3efc9a68f2297026cd00c04d736744e->leave($__internal_9fa9ef70a84c3c358dbf8856645a856da3efc9a68f2297026cd00c04d736744e_prof);

        
        $__internal_64a37c47b513909d74f812a1d208549638305aa9fb5ad1a8c8392021c22b8534->leave($__internal_64a37c47b513909d74f812a1d208549638305aa9fb5ad1a8c8392021c22b8534_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_5860e648156fa2101ca1ac34ef23c35470d8c4897253b4509c910ecfad3e30a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5860e648156fa2101ca1ac34ef23c35470d8c4897253b4509c910ecfad3e30a3->enter($__internal_5860e648156fa2101ca1ac34ef23c35470d8c4897253b4509c910ecfad3e30a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f72c99ad6f566730f3e27f15a295d4875d8a4f95cea63bbab88aae4e88720cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72c99ad6f566730f3e27f15a295d4875d8a4f95cea63bbab88aae4e88720cba->enter($__internal_f72c99ad6f566730f3e27f15a295d4875d8a4f95cea63bbab88aae4e88720cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f72c99ad6f566730f3e27f15a295d4875d8a4f95cea63bbab88aae4e88720cba->leave($__internal_f72c99ad6f566730f3e27f15a295d4875d8a4f95cea63bbab88aae4e88720cba_prof);

        
        $__internal_5860e648156fa2101ca1ac34ef23c35470d8c4897253b4509c910ecfad3e30a3->leave($__internal_5860e648156fa2101ca1ac34ef23c35470d8c4897253b4509c910ecfad3e30a3_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86a772a613c1517207067d58af387ef680600088a2f330dd7e5dea7c9a05c84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a772a613c1517207067d58af387ef680600088a2f330dd7e5dea7c9a05c84a->enter($__internal_86a772a613c1517207067d58af387ef680600088a2f330dd7e5dea7c9a05c84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_010d9a7fe77c6baeda8070cd1eb2e463041e4a74d56b61e84446e90fd17b41f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010d9a7fe77c6baeda8070cd1eb2e463041e4a74d56b61e84446e90fd17b41f3->enter($__internal_010d9a7fe77c6baeda8070cd1eb2e463041e4a74d56b61e84446e90fd17b41f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_010d9a7fe77c6baeda8070cd1eb2e463041e4a74d56b61e84446e90fd17b41f3->leave($__internal_010d9a7fe77c6baeda8070cd1eb2e463041e4a74d56b61e84446e90fd17b41f3_prof);

        
        $__internal_86a772a613c1517207067d58af387ef680600088a2f330dd7e5dea7c9a05c84a->leave($__internal_86a772a613c1517207067d58af387ef680600088a2f330dd7e5dea7c9a05c84a_prof);

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
        return array (  235 => 77,  226 => 76,  216 => 69,  214 => 68,  212 => 67,  210 => 66,  208 => 65,  199 => 64,  187 => 22,  177 => 14,  168 => 13,  150 => 12,  140 => 97,  138 => 96,  136 => 95,  134 => 94,  132 => 93,  130 => 92,  128 => 91,  126 => 90,  124 => 89,  122 => 88,  117 => 83,  115 => 76,  107 => 70,  105 => 64,  95 => 57,  90 => 55,  82 => 50,  75 => 46,  51 => 24,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
                <li class=\"\"><a href=\"{{ path('login') }}\">Login</a></li>
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
