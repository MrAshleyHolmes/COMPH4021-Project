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
        $__internal_0ef0d87db61395fbc29b0db0305e94fe7bad0f4e4e090a2981f1dca5cec76169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef0d87db61395fbc29b0db0305e94fe7bad0f4e4e090a2981f1dca5cec76169->enter($__internal_0ef0d87db61395fbc29b0db0305e94fe7bad0f4e4e090a2981f1dca5cec76169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_ce655d8cc7592192e5258659a9d43a3a3818b606543af4c6f18e416226e6513e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce655d8cc7592192e5258659a9d43a3a3818b606543af4c6f18e416226e6513e->enter($__internal_ce655d8cc7592192e5258659a9d43a3a3818b606543af4c6f18e416226e6513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ef0d87db61395fbc29b0db0305e94fe7bad0f4e4e090a2981f1dca5cec76169->leave($__internal_0ef0d87db61395fbc29b0db0305e94fe7bad0f4e4e090a2981f1dca5cec76169_prof);

        
        $__internal_ce655d8cc7592192e5258659a9d43a3a3818b606543af4c6f18e416226e6513e->leave($__internal_ce655d8cc7592192e5258659a9d43a3a3818b606543af4c6f18e416226e6513e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_476c28216a28c7b3c22f79ac20b00681498d09380380637dadcfb7350c49893f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476c28216a28c7b3c22f79ac20b00681498d09380380637dadcfb7350c49893f->enter($__internal_476c28216a28c7b3c22f79ac20b00681498d09380380637dadcfb7350c49893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b89fba0df0ae1e3583e69b2ede741df505e2df3e3d2d8626ecfacfafae24efe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89fba0df0ae1e3583e69b2ede741df505e2df3e3d2d8626ecfacfafae24efe0->enter($__internal_b89fba0df0ae1e3583e69b2ede741df505e2df3e3d2d8626ecfacfafae24efe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <input type=\"submit\" value=\"Create\" />
    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b89fba0df0ae1e3583e69b2ede741df505e2df3e3d2d8626ecfacfafae24efe0->leave($__internal_b89fba0df0ae1e3583e69b2ede741df505e2df3e3d2d8626ecfacfafae24efe0_prof);

        
        $__internal_476c28216a28c7b3c22f79ac20b00681498d09380380637dadcfb7350c49893f->leave($__internal_476c28216a28c7b3c22f79ac20b00681498d09380380637dadcfb7350c49893f_prof);

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
        return array (  143 => 42,  136 => 38,  130 => 35,  126 => 34,  122 => 33,  116 => 30,  112 => 29,  108 => 28,  102 => 25,  98 => 24,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  59 => 10,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_index') }}\">Back to the list</a>
        </li>
    </ul>
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
