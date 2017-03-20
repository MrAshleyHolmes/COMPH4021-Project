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
        $__internal_a6e0de5a7378b032ee4896d3b85c9f4faf366ac81a166abc2b8d2c0817d67209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e0de5a7378b032ee4896d3b85c9f4faf366ac81a166abc2b8d2c0817d67209->enter($__internal_a6e0de5a7378b032ee4896d3b85c9f4faf366ac81a166abc2b8d2c0817d67209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1ab1959834bb946117f07a517378b2009d0019b48ad626d098296cfa6f71a897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab1959834bb946117f07a517378b2009d0019b48ad626d098296cfa6f71a897->enter($__internal_1ab1959834bb946117f07a517378b2009d0019b48ad626d098296cfa6f71a897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e0de5a7378b032ee4896d3b85c9f4faf366ac81a166abc2b8d2c0817d67209->leave($__internal_a6e0de5a7378b032ee4896d3b85c9f4faf366ac81a166abc2b8d2c0817d67209_prof);

        
        $__internal_1ab1959834bb946117f07a517378b2009d0019b48ad626d098296cfa6f71a897->leave($__internal_1ab1959834bb946117f07a517378b2009d0019b48ad626d098296cfa6f71a897_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ec647f9f0f364f97613a2ad3158c4b9054bf41c3aec580fbcbc69f25dfa4167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec647f9f0f364f97613a2ad3158c4b9054bf41c3aec580fbcbc69f25dfa4167->enter($__internal_7ec647f9f0f364f97613a2ad3158c4b9054bf41c3aec580fbcbc69f25dfa4167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b57228654942fcff133bba779fc08c9966bf949829fd9fe57e97391d8bd50340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57228654942fcff133bba779fc08c9966bf949829fd9fe57e97391d8bd50340->enter($__internal_b57228654942fcff133bba779fc08c9966bf949829fd9fe57e97391d8bd50340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b57228654942fcff133bba779fc08c9966bf949829fd9fe57e97391d8bd50340->leave($__internal_b57228654942fcff133bba779fc08c9966bf949829fd9fe57e97391d8bd50340_prof);

        
        $__internal_7ec647f9f0f364f97613a2ad3158c4b9054bf41c3aec580fbcbc69f25dfa4167->leave($__internal_7ec647f9f0f364f97613a2ad3158c4b9054bf41c3aec580fbcbc69f25dfa4167_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3e6120bce2bf73f4528178470f53625bc18d69b333757a7998749988038fbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e6120bce2bf73f4528178470f53625bc18d69b333757a7998749988038fbf0->enter($__internal_b3e6120bce2bf73f4528178470f53625bc18d69b333757a7998749988038fbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_040214f15c8f1e363c47d557d6e906b62abe4406a01f0bbeeb2b5cdbe131c65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040214f15c8f1e363c47d557d6e906b62abe4406a01f0bbeeb2b5cdbe131c65a->enter($__internal_040214f15c8f1e363c47d557d6e906b62abe4406a01f0bbeeb2b5cdbe131c65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_040214f15c8f1e363c47d557d6e906b62abe4406a01f0bbeeb2b5cdbe131c65a->leave($__internal_040214f15c8f1e363c47d557d6e906b62abe4406a01f0bbeeb2b5cdbe131c65a_prof);

        
        $__internal_b3e6120bce2bf73f4528178470f53625bc18d69b333757a7998749988038fbf0->leave($__internal_b3e6120bce2bf73f4528178470f53625bc18d69b333757a7998749988038fbf0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bd9e7b3eadd76e64e6eac6deed39e4d07fb2f4234031b65dff64dd1f4930d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd9e7b3eadd76e64e6eac6deed39e4d07fb2f4234031b65dff64dd1f4930d4c->enter($__internal_8bd9e7b3eadd76e64e6eac6deed39e4d07fb2f4234031b65dff64dd1f4930d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd6772b077806a5a0852af93f8b818191dec9bcdbf657a51074124d865930139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6772b077806a5a0852af93f8b818191dec9bcdbf657a51074124d865930139->enter($__internal_dd6772b077806a5a0852af93f8b818191dec9bcdbf657a51074124d865930139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_dd6772b077806a5a0852af93f8b818191dec9bcdbf657a51074124d865930139->leave($__internal_dd6772b077806a5a0852af93f8b818191dec9bcdbf657a51074124d865930139_prof);

        
        $__internal_8bd9e7b3eadd76e64e6eac6deed39e4d07fb2f4234031b65dff64dd1f4930d4c->leave($__internal_8bd9e7b3eadd76e64e6eac6deed39e4d07fb2f4234031b65dff64dd1f4930d4c_prof);

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
