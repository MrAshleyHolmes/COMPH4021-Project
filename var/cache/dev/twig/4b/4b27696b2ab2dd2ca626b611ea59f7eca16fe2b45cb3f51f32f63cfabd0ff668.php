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
        $__internal_52b394fdb17ba4dd35d83f8ccd7e42c86482ce9bb60273d15d0389aeb72f3e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b394fdb17ba4dd35d83f8ccd7e42c86482ce9bb60273d15d0389aeb72f3e1b->enter($__internal_52b394fdb17ba4dd35d83f8ccd7e42c86482ce9bb60273d15d0389aeb72f3e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_e8eb4a58d00cbc990681685d79e154df864debd94e814716ec70d6b319516aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8eb4a58d00cbc990681685d79e154df864debd94e814716ec70d6b319516aeb->enter($__internal_e8eb4a58d00cbc990681685d79e154df864debd94e814716ec70d6b319516aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b394fdb17ba4dd35d83f8ccd7e42c86482ce9bb60273d15d0389aeb72f3e1b->leave($__internal_52b394fdb17ba4dd35d83f8ccd7e42c86482ce9bb60273d15d0389aeb72f3e1b_prof);

        
        $__internal_e8eb4a58d00cbc990681685d79e154df864debd94e814716ec70d6b319516aeb->leave($__internal_e8eb4a58d00cbc990681685d79e154df864debd94e814716ec70d6b319516aeb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_055d9cfa2216beb78559a933418b50466c5535aad74c8ed5c686aa284fea6c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055d9cfa2216beb78559a933418b50466c5535aad74c8ed5c686aa284fea6c93->enter($__internal_055d9cfa2216beb78559a933418b50466c5535aad74c8ed5c686aa284fea6c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f67c5df253aac619b12e573799b47bcf8fb637351ba24a42537547553506bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f67c5df253aac619b12e573799b47bcf8fb637351ba24a42537547553506bc9->enter($__internal_8f67c5df253aac619b12e573799b47bcf8fb637351ba24a42537547553506bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: user edit</h2>
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
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\" class=\"btn btn-default btn-lg\">Back to list</a>
    <input type=\"submit\" value=\"Save Changes\" class=\"btn btn-default btn-lg\">
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_password", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-lg\">Change Password</a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-default btn-lg\">
        ";
        // line 42
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    ";
        // line 45
        echo "        ";
        // line 46
        echo "            ";
        // line 47
        echo "        ";
        // line 48
        echo "        ";
        // line 49
        echo "            ";
        // line 50
        echo "        ";
        // line 51
        echo "        ";
        // line 52
        echo "            ";
        // line 53
        echo "                ";
        // line 54
        echo "            ";
        // line 55
        echo "        ";
        // line 56
        echo "    ";
        
        $__internal_8f67c5df253aac619b12e573799b47bcf8fb637351ba24a42537547553506bc9->leave($__internal_8f67c5df253aac619b12e573799b47bcf8fb637351ba24a42537547553506bc9_prof);

        
        $__internal_055d9cfa2216beb78559a933418b50466c5535aad74c8ed5c686aa284fea6c93->leave($__internal_055d9cfa2216beb78559a933418b50466c5535aad74c8ed5c686aa284fea6c93_prof);

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
        return array (  167 => 56,  165 => 55,  163 => 54,  161 => 53,  159 => 52,  157 => 51,  155 => 50,  153 => 49,  151 => 48,  149 => 47,  147 => 46,  145 => 45,  139 => 42,  134 => 39,  128 => 37,  126 => 36,  124 => 35,  122 => 34,  120 => 33,  115 => 30,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  58 => 10,  52 => 6,  43 => 5,  33 => 1,  31 => 2,  11 => 1,);
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
        <h2>Welcome to the Pages: user edit</h2>
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
    <a href=\"{{ path('admin_index') }}\" class=\"btn btn-default btn-lg\">Back to list</a>
    <input type=\"submit\" value=\"Save Changes\" class=\"btn btn-default btn-lg\">
    <a href=\"{{ path('admin_password', { 'id': user.id }) }}\" class=\"btn btn-default btn-lg\">Change Password</a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-default btn-lg\">
        {#<input type=\"submit\" value=\"Edit\" />#}
    {{ form_end(edit_form) }}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_index') }}\">Back to the list</a>#}
        {#</li>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_password', { 'id': user.id }) }}\">Change Password</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
                {#<input type=\"submit\" value=\"Delete\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    {#</ul>#}
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
