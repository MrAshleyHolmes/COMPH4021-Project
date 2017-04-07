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
        $__internal_d87a87f997941f6303c9ae8a35841732dae400fbddffdf545ec0048d820569ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87a87f997941f6303c9ae8a35841732dae400fbddffdf545ec0048d820569ac->enter($__internal_d87a87f997941f6303c9ae8a35841732dae400fbddffdf545ec0048d820569ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/password.html.twig"));

        $__internal_3df89b77356e71bdf78ff534e97bca1ea4b5e1060cec2c6ac2298d6e8675b72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df89b77356e71bdf78ff534e97bca1ea4b5e1060cec2c6ac2298d6e8675b72a->enter($__internal_3df89b77356e71bdf78ff534e97bca1ea4b5e1060cec2c6ac2298d6e8675b72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/password.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["password_form"] ?? $this->getContext($context, "password_form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d87a87f997941f6303c9ae8a35841732dae400fbddffdf545ec0048d820569ac->leave($__internal_d87a87f997941f6303c9ae8a35841732dae400fbddffdf545ec0048d820569ac_prof);

        
        $__internal_3df89b77356e71bdf78ff534e97bca1ea4b5e1060cec2c6ac2298d6e8675b72a->leave($__internal_3df89b77356e71bdf78ff534e97bca1ea4b5e1060cec2c6ac2298d6e8675b72a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_790b590bc446ff393a22cd4a0997a5e416c223c377490d3db4bedcffcc45148b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790b590bc446ff393a22cd4a0997a5e416c223c377490d3db4bedcffcc45148b->enter($__internal_790b590bc446ff393a22cd4a0997a5e416c223c377490d3db4bedcffcc45148b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b1c19ad7adb46a1fbafce5eb3188518379a92875e182c5e0b74bb95af040028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1c19ad7adb46a1fbafce5eb3188518379a92875e182c5e0b74bb95af040028->enter($__internal_1b1c19ad7adb46a1fbafce5eb3188518379a92875e182c5e0b74bb95af040028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" class=\"btn btn-default btn-lg\">Back to the list</a>
";
        
        $__internal_1b1c19ad7adb46a1fbafce5eb3188518379a92875e182c5e0b74bb95af040028->leave($__internal_1b1c19ad7adb46a1fbafce5eb3188518379a92875e182c5e0b74bb95af040028_prof);

        
        $__internal_790b590bc446ff393a22cd4a0997a5e416c223c377490d3db4bedcffcc45148b->leave($__internal_790b590bc446ff393a22cd4a0997a5e416c223c377490d3db4bedcffcc45148b_prof);

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
    <a href=\"{{ path('admin_index') }}\" class=\"btn btn-default btn-lg\">Back to the list</a>
{% endblock %}
", "user/password.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/password.html.twig");
    }
}
