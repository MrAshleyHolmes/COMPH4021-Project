<?php

/* user/edit.html.twig */
class __TwigTemplate_6551cbcea8e4ce7e8be00210bf07adec8304f2d5182833473a09739d0dc9426b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_46bbb3facb88ac2edbcf08b093d36ffabf8d1cee2374c5ca327602d9e8531480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bbb3facb88ac2edbcf08b093d36ffabf8d1cee2374c5ca327602d9e8531480->enter($__internal_46bbb3facb88ac2edbcf08b093d36ffabf8d1cee2374c5ca327602d9e8531480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_46f60d651afb548e282ab7542294c51589a57f275972974f19724f14d490ce74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f60d651afb548e282ab7542294c51589a57f275972974f19724f14d490ce74->enter($__internal_46f60d651afb548e282ab7542294c51589a57f275972974f19724f14d490ce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46bbb3facb88ac2edbcf08b093d36ffabf8d1cee2374c5ca327602d9e8531480->leave($__internal_46bbb3facb88ac2edbcf08b093d36ffabf8d1cee2374c5ca327602d9e8531480_prof);

        
        $__internal_46f60d651afb548e282ab7542294c51589a57f275972974f19724f14d490ce74->leave($__internal_46f60d651afb548e282ab7542294c51589a57f275972974f19724f14d490ce74_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_12f3146576a2e7e8480f94a70a0bc7b06895f88eaee967ab57315c89fcee8f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f3146576a2e7e8480f94a70a0bc7b06895f88eaee967ab57315c89fcee8f10->enter($__internal_12f3146576a2e7e8480f94a70a0bc7b06895f88eaee967ab57315c89fcee8f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd8d5c5c88809b07f7aa89c2f74ac4b1aed637ea0662dd311854b7de0ba5592e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8d5c5c88809b07f7aa89c2f74ac4b1aed637ea0662dd311854b7de0ba5592e->enter($__internal_dd8d5c5c88809b07f7aa89c2f74ac4b1aed637ea0662dd311854b7de0ba5592e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
        <h2>User edit</h2>
    </div>

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 12
        echo "    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'widget');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
    </div>
    ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        // line 36
        echo "    ";
        // line 37
        echo "        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_password", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary\">Change Password</a>
        </li>
        <li>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dd8d5c5c88809b07f7aa89c2f74ac4b1aed637ea0662dd311854b7de0ba5592e->leave($__internal_dd8d5c5c88809b07f7aa89c2f74ac4b1aed637ea0662dd311854b7de0ba5592e_prof);

        
        $__internal_12f3146576a2e7e8480f94a70a0bc7b06895f88eaee967ab57315c89fcee8f10->leave($__internal_12f3146576a2e7e8480f94a70a0bc7b06895f88eaee967ab57315c89fcee8f10_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  150 => 48,  144 => 45,  138 => 42,  131 => 38,  128 => 37,  126 => 36,  124 => 35,  122 => 34,  120 => 33,  115 => 30,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  58 => 10,  52 => 6,  43 => 5,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme edit_form 'form/formthemeoverwrite.html.twig' %}
{#{% form_theme edit_form 'AppBundle:Form:formthemeoverwrite.html.twig' %}#}

{% block body %}
    <div class=\"jumbotron\">
        <h2>User edit</h2>
    </div>

    {{ form_start(edit_form) }}
        {#{{ form_widget(edit_form) }}#}
    <div class=\"form-group\">
        {{ form_label(edit_form.username) }}
        {{ form_widget(edit_form.username) }}
        {{ form_errors(edit_form.username) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.firstname) }}
        {{ form_widget(edit_form.firstname) }}
        {{ form_errors(edit_form.firstname) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.lastname) }}
        {{ form_widget(edit_form.lastname) }}
        {{ form_errors(edit_form.lastname) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.email) }}
        {{ form_widget(edit_form.email) }}
        {{ form_errors(edit_form.email) }}
    </div>
    {#<div class=\"form-group\">#}
        {#{{ form_label(edit_form.password) }}#}
        {#{{ form_widget(edit_form.password) }}#}
        {#{{ form_errors(edit_form.password) }}#}
    {#</div>#}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_password', { 'id': user.id }) }}\" class=\"btn btn-secondary\">Change Password</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}

{#{% extends 'base.html.twig' %}#}

{#{% block body %}#}
    {#<h1>User edit</h1>#}

    {#{{ form_start(edit_form) }}#}
    {#{{ form_widget(edit_form) }}#}
    {#<input type=\"submit\" value=\"Edit\" />#}
    {#{{ form_end(edit_form) }}#}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_index') }}\">Back to the list</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
            {#<input type=\"submit\" value=\"Delete\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    {#</ul>#}
{#{% endblock %}#}
", "user/edit.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/edit.html.twig");
    }
}
