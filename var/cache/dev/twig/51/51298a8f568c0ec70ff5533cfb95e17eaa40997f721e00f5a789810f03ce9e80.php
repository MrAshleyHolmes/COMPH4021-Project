<?php

/* user/password.html.twig */
class __TwigTemplate_2252436186bae02addf284fad5b3b2c38d3fda8ecb3fea6779995036967524de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/password.html.twig", 1);
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
        $__internal_5f8415a2e3946dc91593cf3abcfbed17438c3f213f0de49c55cc6eee4660346e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8415a2e3946dc91593cf3abcfbed17438c3f213f0de49c55cc6eee4660346e->enter($__internal_5f8415a2e3946dc91593cf3abcfbed17438c3f213f0de49c55cc6eee4660346e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/password.html.twig"));

        $__internal_aead16612ddfd962bdca369717a0338d67fb5d981d2e7cc11075addd435313b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aead16612ddfd962bdca369717a0338d67fb5d981d2e7cc11075addd435313b0->enter($__internal_aead16612ddfd962bdca369717a0338d67fb5d981d2e7cc11075addd435313b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/password.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["password_form"] ?? $this->getContext($context, "password_form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f8415a2e3946dc91593cf3abcfbed17438c3f213f0de49c55cc6eee4660346e->leave($__internal_5f8415a2e3946dc91593cf3abcfbed17438c3f213f0de49c55cc6eee4660346e_prof);

        
        $__internal_aead16612ddfd962bdca369717a0338d67fb5d981d2e7cc11075addd435313b0->leave($__internal_aead16612ddfd962bdca369717a0338d67fb5d981d2e7cc11075addd435313b0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_66426e164315817096ec9b3c27c544aaebc14cbeca36a796df86751c66cecce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66426e164315817096ec9b3c27c544aaebc14cbeca36a796df86751c66cecce5->enter($__internal_66426e164315817096ec9b3c27c544aaebc14cbeca36a796df86751c66cecce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d80355120fef497de4439654396b6c308317a591b73294b042aa2c03f1038d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d80355120fef497de4439654396b6c308317a591b73294b042aa2c03f1038d6->enter($__internal_7d80355120fef497de4439654396b6c308317a591b73294b042aa2c03f1038d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"jumbotron\">
        <h2>Change password for: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "<!-- Show how to get from user --></h2>
    </div>

    <div class=\"form\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["password_form"] ?? $this->getContext($context, "password_form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["password_form"] ?? $this->getContext($context, "password_form")), "password", array()), 'label');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["password_form"] ?? $this->getContext($context, "password_form")), "password", array()), 'widget');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["password_form"] ?? $this->getContext($context, "password_form")), "password", array()), 'errors');
        echo "
        </div>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["password_form"] ?? $this->getContext($context, "password_form")), 'form_end');
        echo "
    </div><!-- End .form -->
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\" class=\"btn btn-default btn-lg\">Back to list</a>
";
        
        $__internal_7d80355120fef497de4439654396b6c308317a591b73294b042aa2c03f1038d6->leave($__internal_7d80355120fef497de4439654396b6c308317a591b73294b042aa2c03f1038d6_prof);

        
        $__internal_66426e164315817096ec9b3c27c544aaebc14cbeca36a796df86751c66cecce5->leave($__internal_66426e164315817096ec9b3c27c544aaebc14cbeca36a796df86751c66cecce5_prof);

    }

    public function getTemplateName()
    {
        return "user/password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  82 => 16,  77 => 14,  73 => 13,  69 => 12,  64 => 10,  55 => 6,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme password_form 'form/formthemeoverwrite.html.twig' %}

{% block body %}
    <div class=\"jumbotron\">
        <h2>Change password for: {{ user.firstname }} {{ user.lastname }}<!-- Show how to get from user --></h2>
    </div>

    <div class=\"form\">
        {{ form_start(password_form, {attr: {novalidate:\"novalidate\"}}) }}
        <div class=\"form-group\">
            {{ form_label(password_form.password) }}
            {{ form_widget(password_form.password) }}
            {{ form_errors(password_form.password) }}
        </div>
        {{ form_end(password_form) }}
    </div><!-- End .form -->
    <a href=\"{{ path('admin_index') }}\" class=\"btn btn-default btn-lg\">Back to list</a>
{% endblock %}
", "user/password.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/password.html.twig");
    }
}
