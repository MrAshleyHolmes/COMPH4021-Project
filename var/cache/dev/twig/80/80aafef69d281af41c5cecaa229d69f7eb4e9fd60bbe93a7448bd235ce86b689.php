<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_66ba52351e2fef3eb59a79d7329e5e4e3899c555378d35355092ac7e16409afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b82f15ad9518dab242acca9ec6dc0cf0264e3cf8a9747e60bc32b066a7340d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b82f15ad9518dab242acca9ec6dc0cf0264e3cf8a9747e60bc32b066a7340d->enter($__internal_13b82f15ad9518dab242acca9ec6dc0cf0264e3cf8a9747e60bc32b066a7340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7f6ecf34a6fcc8d50a9cbd979fe22c022aa9e60d4067267c3544353b9baf5d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6ecf34a6fcc8d50a9cbd979fe22c022aa9e60d4067267c3544353b9baf5d2b->enter($__internal_7f6ecf34a6fcc8d50a9cbd979fe22c022aa9e60d4067267c3544353b9baf5d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b82f15ad9518dab242acca9ec6dc0cf0264e3cf8a9747e60bc32b066a7340d->leave($__internal_13b82f15ad9518dab242acca9ec6dc0cf0264e3cf8a9747e60bc32b066a7340d_prof);

        
        $__internal_7f6ecf34a6fcc8d50a9cbd979fe22c022aa9e60d4067267c3544353b9baf5d2b->leave($__internal_7f6ecf34a6fcc8d50a9cbd979fe22c022aa9e60d4067267c3544353b9baf5d2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b450e03d692f8458db5c2520886569130c83883aff7cfe20713ba8c2e97289cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b450e03d692f8458db5c2520886569130c83883aff7cfe20713ba8c2e97289cf->enter($__internal_b450e03d692f8458db5c2520886569130c83883aff7cfe20713ba8c2e97289cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea985e7128924178eda5b2ca0cf5a68f80db0edb446403bf58be0e7683aeeecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea985e7128924178eda5b2ca0cf5a68f80db0edb446403bf58be0e7683aeeecb->enter($__internal_ea985e7128924178eda5b2ca0cf5a68f80db0edb446403bf58be0e7683aeeecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ea985e7128924178eda5b2ca0cf5a68f80db0edb446403bf58be0e7683aeeecb->leave($__internal_ea985e7128924178eda5b2ca0cf5a68f80db0edb446403bf58be0e7683aeeecb_prof);

        
        $__internal_b450e03d692f8458db5c2520886569130c83883aff7cfe20713ba8c2e97289cf->leave($__internal_b450e03d692f8458db5c2520886569130c83883aff7cfe20713ba8c2e97289cf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_41e5bdfa7a83a965890c115dd901cc939e254d0cbaac3645f7428dbf96362d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e5bdfa7a83a965890c115dd901cc939e254d0cbaac3645f7428dbf96362d3b->enter($__internal_41e5bdfa7a83a965890c115dd901cc939e254d0cbaac3645f7428dbf96362d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_946da2e29e263d92a7604b17f3e28231fd3b77eea83bb5748651191a85ec5a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946da2e29e263d92a7604b17f3e28231fd3b77eea83bb5748651191a85ec5a32->enter($__internal_946da2e29e263d92a7604b17f3e28231fd3b77eea83bb5748651191a85ec5a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_946da2e29e263d92a7604b17f3e28231fd3b77eea83bb5748651191a85ec5a32->leave($__internal_946da2e29e263d92a7604b17f3e28231fd3b77eea83bb5748651191a85ec5a32_prof);

        
        $__internal_41e5bdfa7a83a965890c115dd901cc939e254d0cbaac3645f7428dbf96362d3b->leave($__internal_41e5bdfa7a83a965890c115dd901cc939e254d0cbaac3645f7428dbf96362d3b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_34f61f3a409db33db968b3bcbc84a22e4b7697ff93791d034cc3b41507dab040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f61f3a409db33db968b3bcbc84a22e4b7697ff93791d034cc3b41507dab040->enter($__internal_34f61f3a409db33db968b3bcbc84a22e4b7697ff93791d034cc3b41507dab040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55d0419864b903342006f80d32111822af571fa5ff83ecbf64c9abd902e16b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d0419864b903342006f80d32111822af571fa5ff83ecbf64c9abd902e16b19->enter($__internal_55d0419864b903342006f80d32111822af571fa5ff83ecbf64c9abd902e16b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_55d0419864b903342006f80d32111822af571fa5ff83ecbf64c9abd902e16b19->leave($__internal_55d0419864b903342006f80d32111822af571fa5ff83ecbf64c9abd902e16b19_prof);

        
        $__internal_34f61f3a409db33db968b3bcbc84a22e4b7697ff93791d034cc3b41507dab040->leave($__internal_34f61f3a409db33db968b3bcbc84a22e4b7697ff93791d034cc3b41507dab040_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
