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
        $__internal_d99ab1a09c57663981cff7358b3752f222b890c49d46e3c6d86b14be196b92c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99ab1a09c57663981cff7358b3752f222b890c49d46e3c6d86b14be196b92c0->enter($__internal_d99ab1a09c57663981cff7358b3752f222b890c49d46e3c6d86b14be196b92c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_465bda635ae24b8da484e4a8c83d528277416333e236d309abb746b6880e21a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465bda635ae24b8da484e4a8c83d528277416333e236d309abb746b6880e21a3->enter($__internal_465bda635ae24b8da484e4a8c83d528277416333e236d309abb746b6880e21a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d99ab1a09c57663981cff7358b3752f222b890c49d46e3c6d86b14be196b92c0->leave($__internal_d99ab1a09c57663981cff7358b3752f222b890c49d46e3c6d86b14be196b92c0_prof);

        
        $__internal_465bda635ae24b8da484e4a8c83d528277416333e236d309abb746b6880e21a3->leave($__internal_465bda635ae24b8da484e4a8c83d528277416333e236d309abb746b6880e21a3_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_c51d09a5a502ef669c8c13296102ca40ee18da2e28878fe5f912fbbb7b2d12dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51d09a5a502ef669c8c13296102ca40ee18da2e28878fe5f912fbbb7b2d12dc->enter($__internal_c51d09a5a502ef669c8c13296102ca40ee18da2e28878fe5f912fbbb7b2d12dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1da27a851eb1ffc858709209e3c67b51fd38750b6a7641f9dae4725681811b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da27a851eb1ffc858709209e3c67b51fd38750b6a7641f9dae4725681811b03->enter($__internal_1da27a851eb1ffc858709209e3c67b51fd38750b6a7641f9dae4725681811b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web App!";
        
        $__internal_1da27a851eb1ffc858709209e3c67b51fd38750b6a7641f9dae4725681811b03->leave($__internal_1da27a851eb1ffc858709209e3c67b51fd38750b6a7641f9dae4725681811b03_prof);

        
        $__internal_c51d09a5a502ef669c8c13296102ca40ee18da2e28878fe5f912fbbb7b2d12dc->leave($__internal_c51d09a5a502ef669c8c13296102ca40ee18da2e28878fe5f912fbbb7b2d12dc_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8a2b5c310ee14199dc82c837bcc9ef8bd66ba75ddc11bbb80e8ce631ff1fe5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a2b5c310ee14199dc82c837bcc9ef8bd66ba75ddc11bbb80e8ce631ff1fe5d->enter($__internal_a8a2b5c310ee14199dc82c837bcc9ef8bd66ba75ddc11bbb80e8ce631ff1fe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b4293279af595c1ba6356ce0f6983c5a64d395208623285e65e6e1de4aa25767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4293279af595c1ba6356ce0f6983c5a64d395208623285e65e6e1de4aa25767->enter($__internal_b4293279af595c1ba6356ce0f6983c5a64d395208623285e65e6e1de4aa25767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b4293279af595c1ba6356ce0f6983c5a64d395208623285e65e6e1de4aa25767->leave($__internal_b4293279af595c1ba6356ce0f6983c5a64d395208623285e65e6e1de4aa25767_prof);

        
        $__internal_a8a2b5c310ee14199dc82c837bcc9ef8bd66ba75ddc11bbb80e8ce631ff1fe5d->leave($__internal_a8a2b5c310ee14199dc82c837bcc9ef8bd66ba75ddc11bbb80e8ce631ff1fe5d_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b198e43ab7e63e5a7f38989279b7a829de7eba94d76e99da5072bcc42830752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b198e43ab7e63e5a7f38989279b7a829de7eba94d76e99da5072bcc42830752->enter($__internal_7b198e43ab7e63e5a7f38989279b7a829de7eba94d76e99da5072bcc42830752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72cc2aea8078f396251e3be106319413242a6c0808d23891c4cdb8d5499f367a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cc2aea8078f396251e3be106319413242a6c0808d23891c4cdb8d5499f367a->enter($__internal_72cc2aea8078f396251e3be106319413242a6c0808d23891c4cdb8d5499f367a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_72cc2aea8078f396251e3be106319413242a6c0808d23891c4cdb8d5499f367a->leave($__internal_72cc2aea8078f396251e3be106319413242a6c0808d23891c4cdb8d5499f367a_prof);

        
        $__internal_7b198e43ab7e63e5a7f38989279b7a829de7eba94d76e99da5072bcc42830752->leave($__internal_7b198e43ab7e63e5a7f38989279b7a829de7eba94d76e99da5072bcc42830752_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d3614c233d44b521071ef3470557e60d492bf0e1d650599b2e9d63b4a94edeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3614c233d44b521071ef3470557e60d492bf0e1d650599b2e9d63b4a94edeb->enter($__internal_5d3614c233d44b521071ef3470557e60d492bf0e1d650599b2e9d63b4a94edeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_28e66b099ea7f0140fa601c382f0c86c73b1edc1f967acec45e68db65be3bb7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e66b099ea7f0140fa601c382f0c86c73b1edc1f967acec45e68db65be3bb7b->enter($__internal_28e66b099ea7f0140fa601c382f0c86c73b1edc1f967acec45e68db65be3bb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_28e66b099ea7f0140fa601c382f0c86c73b1edc1f967acec45e68db65be3bb7b->leave($__internal_28e66b099ea7f0140fa601c382f0c86c73b1edc1f967acec45e68db65be3bb7b_prof);

        
        $__internal_5d3614c233d44b521071ef3470557e60d492bf0e1d650599b2e9d63b4a94edeb->leave($__internal_5d3614c233d44b521071ef3470557e60d492bf0e1d650599b2e9d63b4a94edeb_prof);

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
