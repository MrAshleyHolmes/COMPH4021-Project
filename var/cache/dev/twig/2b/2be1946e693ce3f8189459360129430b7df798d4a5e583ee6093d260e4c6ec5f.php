<?php

/* user/task.html.twig */
class __TwigTemplate_dbb6e80a0eee355b47de43b57f7243b84ad81768c27262f21a5725ce351b6603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/task.html.twig", 1);
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
        $__internal_690713c089d9546070510b45018835fd2497035d0a7f77d3e894f74670bcdbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690713c089d9546070510b45018835fd2497035d0a7f77d3e894f74670bcdbb1->enter($__internal_690713c089d9546070510b45018835fd2497035d0a7f77d3e894f74670bcdbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/task.html.twig"));

        $__internal_11badf084a60b6bbe1090ea2c79f98ed2c649ffb20d3796f886f498bbf7002d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11badf084a60b6bbe1090ea2c79f98ed2c649ffb20d3796f886f498bbf7002d8->enter($__internal_11badf084a60b6bbe1090ea2c79f98ed2c649ffb20d3796f886f498bbf7002d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/task.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690713c089d9546070510b45018835fd2497035d0a7f77d3e894f74670bcdbb1->leave($__internal_690713c089d9546070510b45018835fd2497035d0a7f77d3e894f74670bcdbb1_prof);

        
        $__internal_11badf084a60b6bbe1090ea2c79f98ed2c649ffb20d3796f886f498bbf7002d8->leave($__internal_11badf084a60b6bbe1090ea2c79f98ed2c649ffb20d3796f886f498bbf7002d8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_63e279566aabb253036aa50a050f5ff31f4c987fd9bee38ad431917ac6d3b3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e279566aabb253036aa50a050f5ff31f4c987fd9bee38ad431917ac6d3b3e5->enter($__internal_63e279566aabb253036aa50a050f5ff31f4c987fd9bee38ad431917ac6d3b3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38dcc85fc22a67828e7153b9097ece68b6e4200d00ab083ac0361f2547bf3869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38dcc85fc22a67828e7153b9097ece68b6e4200d00ab083ac0361f2547bf3869->enter($__internal_38dcc85fc22a67828e7153b9097ece68b6e4200d00ab083ac0361f2547bf3869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: user creation</h2>
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
    </div>

    ";
        // line 43
        echo "        ";
        // line 44
        echo "            ";
        // line 45
        echo "        ";
        // line 46
        echo "    ";
        
        $__internal_38dcc85fc22a67828e7153b9097ece68b6e4200d00ab083ac0361f2547bf3869->leave($__internal_38dcc85fc22a67828e7153b9097ece68b6e4200d00ab083ac0361f2547bf3869_prof);

        
        $__internal_63e279566aabb253036aa50a050f5ff31f4c987fd9bee38ad431917ac6d3b3e5->leave($__internal_63e279566aabb253036aa50a050f5ff31f4c987fd9bee38ad431917ac6d3b3e5_prof);

    }

    public function getTemplateName()
    {
        return "user/task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  150 => 45,  148 => 44,  146 => 43,  140 => 39,  136 => 38,  130 => 35,  126 => 34,  122 => 33,  116 => 30,  112 => 29,  108 => 28,  102 => 25,  98 => 24,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  59 => 10,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
        <h2>Welcome to the Pages: user creation</h2>
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
    </div>

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
", "user/task.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/task.html.twig");
    }
}
