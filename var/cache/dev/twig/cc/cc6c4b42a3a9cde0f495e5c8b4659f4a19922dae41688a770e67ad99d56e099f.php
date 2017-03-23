<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6c8f98ad5d7b90883be1077a30832d9fcc474350e73672138617f67dda13e08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bf89b9331d9782e34fbc0be18bce065ab6f801ede90046a6426d445652ef8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf89b9331d9782e34fbc0be18bce065ab6f801ede90046a6426d445652ef8c3->enter($__internal_3bf89b9331d9782e34fbc0be18bce065ab6f801ede90046a6426d445652ef8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2fc5dd5d44ea2c623ebda32112708f8a48851fe69d2857f9c2c8d7baea0f86c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc5dd5d44ea2c623ebda32112708f8a48851fe69d2857f9c2c8d7baea0f86c3->enter($__internal_2fc5dd5d44ea2c623ebda32112708f8a48851fe69d2857f9c2c8d7baea0f86c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf89b9331d9782e34fbc0be18bce065ab6f801ede90046a6426d445652ef8c3->leave($__internal_3bf89b9331d9782e34fbc0be18bce065ab6f801ede90046a6426d445652ef8c3_prof);

        
        $__internal_2fc5dd5d44ea2c623ebda32112708f8a48851fe69d2857f9c2c8d7baea0f86c3->leave($__internal_2fc5dd5d44ea2c623ebda32112708f8a48851fe69d2857f9c2c8d7baea0f86c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a460b82f52f3bcde00666092c636e552626fc5d8d4087034e5d797ff94b4226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a460b82f52f3bcde00666092c636e552626fc5d8d4087034e5d797ff94b4226->enter($__internal_3a460b82f52f3bcde00666092c636e552626fc5d8d4087034e5d797ff94b4226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd4b1d2dd8b96a8d78855342ff427f8f1262c3896ea627d7824839eef0647a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4b1d2dd8b96a8d78855342ff427f8f1262c3896ea627d7824839eef0647a6e->enter($__internal_fd4b1d2dd8b96a8d78855342ff427f8f1262c3896ea627d7824839eef0647a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fd4b1d2dd8b96a8d78855342ff427f8f1262c3896ea627d7824839eef0647a6e->leave($__internal_fd4b1d2dd8b96a8d78855342ff427f8f1262c3896ea627d7824839eef0647a6e_prof);

        
        $__internal_3a460b82f52f3bcde00666092c636e552626fc5d8d4087034e5d797ff94b4226->leave($__internal_3a460b82f52f3bcde00666092c636e552626fc5d8d4087034e5d797ff94b4226_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ee2882666d3a05f2b69d176de54cc828926870cb0d1473db93161eef5916009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee2882666d3a05f2b69d176de54cc828926870cb0d1473db93161eef5916009->enter($__internal_3ee2882666d3a05f2b69d176de54cc828926870cb0d1473db93161eef5916009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_935a89579c5f5aed913c4626c7fc5ce92ff26192680923e2716bd4362cf3c5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935a89579c5f5aed913c4626c7fc5ce92ff26192680923e2716bd4362cf3c5c4->enter($__internal_935a89579c5f5aed913c4626c7fc5ce92ff26192680923e2716bd4362cf3c5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_935a89579c5f5aed913c4626c7fc5ce92ff26192680923e2716bd4362cf3c5c4->leave($__internal_935a89579c5f5aed913c4626c7fc5ce92ff26192680923e2716bd4362cf3c5c4_prof);

        
        $__internal_3ee2882666d3a05f2b69d176de54cc828926870cb0d1473db93161eef5916009->leave($__internal_3ee2882666d3a05f2b69d176de54cc828926870cb0d1473db93161eef5916009_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
