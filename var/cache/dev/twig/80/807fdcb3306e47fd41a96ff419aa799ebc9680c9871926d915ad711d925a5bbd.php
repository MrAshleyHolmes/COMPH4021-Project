<?php

/* user/register.html.twig */
class __TwigTemplate_751e467698cf22dcf14488f1e9b432f5ec1bc5da4ad1a2780b0796e125cb0722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
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
        $__internal_cbe549d4978f350cd46602da09bc0883aed9447cf76540d13994e03f40655f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe549d4978f350cd46602da09bc0883aed9447cf76540d13994e03f40655f4a->enter($__internal_cbe549d4978f350cd46602da09bc0883aed9447cf76540d13994e03f40655f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_4b21716fdaaa82eb8568e18ba991fad40c4dd634bfe7a9cc7504ae4ba881f847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b21716fdaaa82eb8568e18ba991fad40c4dd634bfe7a9cc7504ae4ba881f847->enter($__internal_4b21716fdaaa82eb8568e18ba991fad40c4dd634bfe7a9cc7504ae4ba881f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe549d4978f350cd46602da09bc0883aed9447cf76540d13994e03f40655f4a->leave($__internal_cbe549d4978f350cd46602da09bc0883aed9447cf76540d13994e03f40655f4a_prof);

        
        $__internal_4b21716fdaaa82eb8568e18ba991fad40c4dd634bfe7a9cc7504ae4ba881f847->leave($__internal_4b21716fdaaa82eb8568e18ba991fad40c4dd634bfe7a9cc7504ae4ba881f847_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_74e11dc347ba594a6ebfb72823277acfc365429bb9104923a566bf7ed3fb2e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e11dc347ba594a6ebfb72823277acfc365429bb9104923a566bf7ed3fb2e31->enter($__internal_74e11dc347ba594a6ebfb72823277acfc365429bb9104923a566bf7ed3fb2e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac2a6d7783d2273c4216f148b0fc76510e2f333cee8478816c5c77b4f432a4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2a6d7783d2273c4216f148b0fc76510e2f333cee8478816c5c77b4f432a4ba->enter($__internal_ac2a6d7783d2273c4216f148b0fc76510e2f333cee8478816c5c77b4f432a4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: register</h2>
    </div>

    <div class=\"form\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'label');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
        </div>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_ac2a6d7783d2273c4216f148b0fc76510e2f333cee8478816c5c77b4f432a4ba->leave($__internal_ac2a6d7783d2273c4216f148b0fc76510e2f333cee8478816c5c77b4f432a4ba_prof);

        
        $__internal_74e11dc347ba594a6ebfb72823277acfc365429bb9104923a566bf7ed3fb2e31->leave($__internal_74e11dc347ba594a6ebfb72823277acfc365429bb9104923a566bf7ed3fb2e31_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  128 => 34,  124 => 33,  120 => 32,  114 => 29,  110 => 28,  106 => 27,  100 => 24,  96 => 23,  92 => 22,  86 => 19,  82 => 18,  78 => 17,  72 => 14,  68 => 13,  64 => 12,  59 => 10,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
        <h2>Welcome to the Pages: register</h2>
    </div>

    <div class=\"form\">
        {{ form_start(form, {attr: {novalidate:\"novalidate\"}}) }}
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
        {{ form_end(form) }}
    </div>
{% endblock %}
", "user/register.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/register.html.twig");
    }
}
