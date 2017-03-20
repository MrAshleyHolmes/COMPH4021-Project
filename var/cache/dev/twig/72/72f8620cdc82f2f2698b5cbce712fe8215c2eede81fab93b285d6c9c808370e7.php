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
        $__internal_997ba8fe32b0cff30d621f084a795f057e8558ed1e895a219031c18d04738aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997ba8fe32b0cff30d621f084a795f057e8558ed1e895a219031c18d04738aaf->enter($__internal_997ba8fe32b0cff30d621f084a795f057e8558ed1e895a219031c18d04738aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_db8d63762c69186dfee91fed421d6bd12f6e71f47ae1f572010d6515a245f85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8d63762c69186dfee91fed421d6bd12f6e71f47ae1f572010d6515a245f85f->enter($__internal_db8d63762c69186dfee91fed421d6bd12f6e71f47ae1f572010d6515a245f85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <li class=\"\"><a href=\"#\">Register</a></li>
                <li class=\"\"><a href=\"#\">Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "</body>
</html>

";
        // line 87
        echo "    ";
        // line 88
        echo "        ";
        // line 89
        echo "        ";
        // line 90
        echo "        ";
        // line 91
        echo "        ";
        // line 92
        echo "    ";
        // line 93
        echo "    ";
        // line 94
        echo "        ";
        // line 95
        echo "        ";
        // line 96
        echo "    ";
        
        $__internal_997ba8fe32b0cff30d621f084a795f057e8558ed1e895a219031c18d04738aaf->leave($__internal_997ba8fe32b0cff30d621f084a795f057e8558ed1e895a219031c18d04738aaf_prof);

        
        $__internal_db8d63762c69186dfee91fed421d6bd12f6e71f47ae1f572010d6515a245f85f->leave($__internal_db8d63762c69186dfee91fed421d6bd12f6e71f47ae1f572010d6515a245f85f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_285177eb9f571e31eb28a63e620a1b647599bdcad74e7091db30a65b142b3aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285177eb9f571e31eb28a63e620a1b647599bdcad74e7091db30a65b142b3aac->enter($__internal_285177eb9f571e31eb28a63e620a1b647599bdcad74e7091db30a65b142b3aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0289cb85bc5cba483340424a5153d381f3a527d68e7abc7571db593d6ffb7754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0289cb85bc5cba483340424a5153d381f3a527d68e7abc7571db593d6ffb7754->enter($__internal_0289cb85bc5cba483340424a5153d381f3a527d68e7abc7571db593d6ffb7754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_0289cb85bc5cba483340424a5153d381f3a527d68e7abc7571db593d6ffb7754->leave($__internal_0289cb85bc5cba483340424a5153d381f3a527d68e7abc7571db593d6ffb7754_prof);

        
        $__internal_285177eb9f571e31eb28a63e620a1b647599bdcad74e7091db30a65b142b3aac->leave($__internal_285177eb9f571e31eb28a63e620a1b647599bdcad74e7091db30a65b142b3aac_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b65311e1b62b9aea43b1e7247fa94b94c98dc6600a8527fd0aed0cde86b8ed11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65311e1b62b9aea43b1e7247fa94b94c98dc6600a8527fd0aed0cde86b8ed11->enter($__internal_b65311e1b62b9aea43b1e7247fa94b94c98dc6600a8527fd0aed0cde86b8ed11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8c672f86a22f69b9a0b7f4e2f50f52716c6919be83e23845d35e06c77114aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c672f86a22f69b9a0b7f4e2f50f52716c6919be83e23845d35e06c77114aa7->enter($__internal_d8c672f86a22f69b9a0b7f4e2f50f52716c6919be83e23845d35e06c77114aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d8c672f86a22f69b9a0b7f4e2f50f52716c6919be83e23845d35e06c77114aa7->leave($__internal_d8c672f86a22f69b9a0b7f4e2f50f52716c6919be83e23845d35e06c77114aa7_prof);

        
        $__internal_b65311e1b62b9aea43b1e7247fa94b94c98dc6600a8527fd0aed0cde86b8ed11->leave($__internal_b65311e1b62b9aea43b1e7247fa94b94c98dc6600a8527fd0aed0cde86b8ed11_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_a42fa8bfe3f27bbb773c605269e19dbd20fafdeef6a67a136ef8c23a0d61c3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42fa8bfe3f27bbb773c605269e19dbd20fafdeef6a67a136ef8c23a0d61c3cb->enter($__internal_a42fa8bfe3f27bbb773c605269e19dbd20fafdeef6a67a136ef8c23a0d61c3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b48fbcfc0577a87b9a1158ed0829475b62179f6dc947806ceb56e585b5678236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48fbcfc0577a87b9a1158ed0829475b62179f6dc947806ceb56e585b5678236->enter($__internal_b48fbcfc0577a87b9a1158ed0829475b62179f6dc947806ceb56e585b5678236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "    ";
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        // line 67
        echo "    ";
        // line 68
        echo "    ";
        
        $__internal_b48fbcfc0577a87b9a1158ed0829475b62179f6dc947806ceb56e585b5678236->leave($__internal_b48fbcfc0577a87b9a1158ed0829475b62179f6dc947806ceb56e585b5678236_prof);

        
        $__internal_a42fa8bfe3f27bbb773c605269e19dbd20fafdeef6a67a136ef8c23a0d61c3cb->leave($__internal_a42fa8bfe3f27bbb773c605269e19dbd20fafdeef6a67a136ef8c23a0d61c3cb_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e51924a2264c0e55af4a1dd4a4aab1e49238f287bbdca15569ab0bf29b7f466b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51924a2264c0e55af4a1dd4a4aab1e49238f287bbdca15569ab0bf29b7f466b->enter($__internal_e51924a2264c0e55af4a1dd4a4aab1e49238f287bbdca15569ab0bf29b7f466b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_be8bb4e262f9802f1ee99e37fc95c44ec00212911ba18f519179c21cbd5cdecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8bb4e262f9802f1ee99e37fc95c44ec00212911ba18f519179c21cbd5cdecc->enter($__internal_be8bb4e262f9802f1ee99e37fc95c44ec00212911ba18f519179c21cbd5cdecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_be8bb4e262f9802f1ee99e37fc95c44ec00212911ba18f519179c21cbd5cdecc->leave($__internal_be8bb4e262f9802f1ee99e37fc95c44ec00212911ba18f519179c21cbd5cdecc_prof);

        
        $__internal_e51924a2264c0e55af4a1dd4a4aab1e49238f287bbdca15569ab0bf29b7f466b->leave($__internal_e51924a2264c0e55af4a1dd4a4aab1e49238f287bbdca15569ab0bf29b7f466b_prof);

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
        return array (  228 => 76,  219 => 75,  209 => 68,  207 => 67,  205 => 66,  203 => 65,  201 => 64,  192 => 63,  180 => 22,  170 => 14,  161 => 13,  143 => 12,  133 => 96,  131 => 95,  129 => 94,  127 => 93,  125 => 92,  123 => 91,  121 => 90,  119 => 89,  117 => 88,  115 => 87,  110 => 82,  108 => 75,  100 => 69,  98 => 63,  82 => 50,  75 => 46,  51 => 24,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
