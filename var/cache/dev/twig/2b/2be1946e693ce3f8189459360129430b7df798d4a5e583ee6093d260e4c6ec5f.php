<?php

/* user/new.html.twig */
class __TwigTemplate_dbb6e80a0eee355b47de43b57f7243b84ad81768c27262f21a5725ce351b6603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f40b2e91b36d1b7f4db43cc3b0895fa4fa83eff70eb91115e9f8a8f0a725fa03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40b2e91b36d1b7f4db43cc3b0895fa4fa83eff70eb91115e9f8a8f0a725fa03->enter($__internal_f40b2e91b36d1b7f4db43cc3b0895fa4fa83eff70eb91115e9f8a8f0a725fa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_b8c886543fce58de43389375356bf381ab2b96e6f9307cae7e83fa6ae9095305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c886543fce58de43389375356bf381ab2b96e6f9307cae7e83fa6ae9095305->enter($__internal_b8c886543fce58de43389375356bf381ab2b96e6f9307cae7e83fa6ae9095305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40b2e91b36d1b7f4db43cc3b0895fa4fa83eff70eb91115e9f8a8f0a725fa03->leave($__internal_f40b2e91b36d1b7f4db43cc3b0895fa4fa83eff70eb91115e9f8a8f0a725fa03_prof);

        
        $__internal_b8c886543fce58de43389375356bf381ab2b96e6f9307cae7e83fa6ae9095305->leave($__internal_b8c886543fce58de43389375356bf381ab2b96e6f9307cae7e83fa6ae9095305_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_addb61d95b180ee53cf86ed699f633c8cdfe3000c2a0c8dd36952eb31dcfa49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addb61d95b180ee53cf86ed699f633c8cdfe3000c2a0c8dd36952eb31dcfa49a->enter($__internal_addb61d95b180ee53cf86ed699f633c8cdfe3000c2a0c8dd36952eb31dcfa49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41dc1d78dc1a9c2061c639c3d1e86c9af1a4adc9cb3fcb43c2b3b311074ce461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dc1d78dc1a9c2061c639c3d1e86c9af1a4adc9cb3fcb43c2b3b311074ce461->enter($__internal_41dc1d78dc1a9c2061c639c3d1e86c9af1a4adc9cb3fcb43c2b3b311074ce461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"jumbotron\">
        <h2>User creation</h2>
    </div>

<div class=\"form\">
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 12
        echo "    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
    </div>
    <input type=\"submit\" value=\"Create\" class=\"btn btn-default btn-lg\">
    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\" class=\"btn btn-default btn-lg\">Back to list</a>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        // line 42
        echo "        ";
        // line 43
        echo "            ";
        // line 44
        echo "        ";
        // line 45
        echo "    ";
        
        $__internal_41dc1d78dc1a9c2061c639c3d1e86c9af1a4adc9cb3fcb43c2b3b311074ce461->leave($__internal_41dc1d78dc1a9c2061c639c3d1e86c9af1a4adc9cb3fcb43c2b3b311074ce461_prof);

        
        $__internal_addb61d95b180ee53cf86ed699f633c8cdfe3000c2a0c8dd36952eb31dcfa49a->leave($__internal_addb61d95b180ee53cf86ed699f633c8cdfe3000c2a0c8dd36952eb31dcfa49a_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  149 => 44,  147 => 43,  145 => 42,  140 => 39,  136 => 38,  130 => 35,  126 => 34,  122 => 33,  116 => 30,  112 => 29,  108 => 28,  102 => 25,  98 => 24,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  59 => 10,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme form 'form/formthemeoverwrite.html.twig' %}

{% block body %}
    <div class=\"jumbotron\">
        <h2>User creation</h2>
    </div>

<div class=\"form\">
    {{ form_start(form, {attr: {novalidate:\"novalidate\"}}) }}
    {#{{ form_widget(form) }}#}
    <div class=\"form-group\">
        {{ form_label(form.username) }}
        {{ form_widget(form.username) }}
        {{ form_errors(form.username) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.firstname) }}
        {{ form_widget(form.firstname) }}
        {{ form_errors(form.firstname) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.lastname) }}
        {{ form_widget(form.lastname) }}
        {{ form_errors(form.lastname) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.email) }}
        {{ form_widget(form.email) }}
        {{ form_errors(form.email) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.password) }}
        {{ form_widget(form.password) }}
        {{ form_errors(form.password) }}
    </div>
    <input type=\"submit\" value=\"Create\" class=\"btn btn-default btn-lg\">
    <a href=\"{{ path('admin_index') }}\" class=\"btn btn-default btn-lg\">Back to list</a>
    {{ form_end(form) }}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_index') }}\">Back to list</a>#}
        {#</li>#}
    {#</ul>#}
{% endblock %}

{#{% extends 'base.html.twig' %}#}

{#{% block body %}#}
    {#<h1>User creation</h1>#}

    {#{{ form_start(form) }}#}
        {#{{ form_widget(form) }}#}
        {#<input type=\"submit\" value=\"Create\" />#}
    {#{{ form_end(form) }}#}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_index') }}\">Back to the list</a>#}
        {#</li>#}
    {#</ul>#}
{#{% endblock %}#}
", "user/new.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/new.html.twig");
    }
}
