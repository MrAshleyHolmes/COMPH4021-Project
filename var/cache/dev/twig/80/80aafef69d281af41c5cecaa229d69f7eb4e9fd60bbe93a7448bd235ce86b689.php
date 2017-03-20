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
        $__internal_adcb502464a00ee00b8abec849a0e761252cc8c8f62780f0e9895900d019951b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adcb502464a00ee00b8abec849a0e761252cc8c8f62780f0e9895900d019951b->enter($__internal_adcb502464a00ee00b8abec849a0e761252cc8c8f62780f0e9895900d019951b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4f6bbedc974e596398322993aaf99c00b34e7b9febd9de0d81e9e99ac829012b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6bbedc974e596398322993aaf99c00b34e7b9febd9de0d81e9e99ac829012b->enter($__internal_4f6bbedc974e596398322993aaf99c00b34e7b9febd9de0d81e9e99ac829012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adcb502464a00ee00b8abec849a0e761252cc8c8f62780f0e9895900d019951b->leave($__internal_adcb502464a00ee00b8abec849a0e761252cc8c8f62780f0e9895900d019951b_prof);

        
        $__internal_4f6bbedc974e596398322993aaf99c00b34e7b9febd9de0d81e9e99ac829012b->leave($__internal_4f6bbedc974e596398322993aaf99c00b34e7b9febd9de0d81e9e99ac829012b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9df2c13b69bc2767eee113fa8c6d04de409d587c6fc36a0671e58d0fc477a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9df2c13b69bc2767eee113fa8c6d04de409d587c6fc36a0671e58d0fc477a7f->enter($__internal_e9df2c13b69bc2767eee113fa8c6d04de409d587c6fc36a0671e58d0fc477a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd59ac42fed0cad4fe52a6003da29c62cdd01cae783f6fdec5351fb39351167f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd59ac42fed0cad4fe52a6003da29c62cdd01cae783f6fdec5351fb39351167f->enter($__internal_fd59ac42fed0cad4fe52a6003da29c62cdd01cae783f6fdec5351fb39351167f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fd59ac42fed0cad4fe52a6003da29c62cdd01cae783f6fdec5351fb39351167f->leave($__internal_fd59ac42fed0cad4fe52a6003da29c62cdd01cae783f6fdec5351fb39351167f_prof);

        
        $__internal_e9df2c13b69bc2767eee113fa8c6d04de409d587c6fc36a0671e58d0fc477a7f->leave($__internal_e9df2c13b69bc2767eee113fa8c6d04de409d587c6fc36a0671e58d0fc477a7f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9e10dbf86162d4ef96c6fffdab50d4891c2d0b50607f66b1c5c22c4fd49b0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e10dbf86162d4ef96c6fffdab50d4891c2d0b50607f66b1c5c22c4fd49b0e2->enter($__internal_a9e10dbf86162d4ef96c6fffdab50d4891c2d0b50607f66b1c5c22c4fd49b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3655b65c79c4fbd7d51c9707cec7d701348a2355835b361e11ee03983983f1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3655b65c79c4fbd7d51c9707cec7d701348a2355835b361e11ee03983983f1c5->enter($__internal_3655b65c79c4fbd7d51c9707cec7d701348a2355835b361e11ee03983983f1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3655b65c79c4fbd7d51c9707cec7d701348a2355835b361e11ee03983983f1c5->leave($__internal_3655b65c79c4fbd7d51c9707cec7d701348a2355835b361e11ee03983983f1c5_prof);

        
        $__internal_a9e10dbf86162d4ef96c6fffdab50d4891c2d0b50607f66b1c5c22c4fd49b0e2->leave($__internal_a9e10dbf86162d4ef96c6fffdab50d4891c2d0b50607f66b1c5c22c4fd49b0e2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_46e72e846c3fda6175d1b51cff4fe6b250f8b682dfd1bc4bbf045e622238307f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e72e846c3fda6175d1b51cff4fe6b250f8b682dfd1bc4bbf045e622238307f->enter($__internal_46e72e846c3fda6175d1b51cff4fe6b250f8b682dfd1bc4bbf045e622238307f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddf72cac3789b0d71004117763840fd7c1d39a2ac12eb89803eed0d6a7b991d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf72cac3789b0d71004117763840fd7c1d39a2ac12eb89803eed0d6a7b991d9->enter($__internal_ddf72cac3789b0d71004117763840fd7c1d39a2ac12eb89803eed0d6a7b991d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ddf72cac3789b0d71004117763840fd7c1d39a2ac12eb89803eed0d6a7b991d9->leave($__internal_ddf72cac3789b0d71004117763840fd7c1d39a2ac12eb89803eed0d6a7b991d9_prof);

        
        $__internal_46e72e846c3fda6175d1b51cff4fe6b250f8b682dfd1bc4bbf045e622238307f->leave($__internal_46e72e846c3fda6175d1b51cff4fe6b250f8b682dfd1bc4bbf045e622238307f_prof);

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
