<?php

/* security/login.html.twig */
class __TwigTemplate_12f9825b1d022b39d19cebfa5445879f7fc0ec3ecbfb7092e4f368a7cdcdf3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_ffb1962d40312cc059ea21c879f702fb1968959dee108a9354ae63c1ad2395d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb1962d40312cc059ea21c879f702fb1968959dee108a9354ae63c1ad2395d9->enter($__internal_ffb1962d40312cc059ea21c879f702fb1968959dee108a9354ae63c1ad2395d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_e581e736d8aef6541af8fc391f4d0050082fa492c87f07f3f35cfb380629bf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e581e736d8aef6541af8fc391f4d0050082fa492c87f07f3f35cfb380629bf6b->enter($__internal_e581e736d8aef6541af8fc391f4d0050082fa492c87f07f3f35cfb380629bf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb1962d40312cc059ea21c879f702fb1968959dee108a9354ae63c1ad2395d9->leave($__internal_ffb1962d40312cc059ea21c879f702fb1968959dee108a9354ae63c1ad2395d9_prof);

        
        $__internal_e581e736d8aef6541af8fc391f4d0050082fa492c87f07f3f35cfb380629bf6b->leave($__internal_e581e736d8aef6541af8fc391f4d0050082fa492c87f07f3f35cfb380629bf6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f11be5054960a0d72178613f08a675afe58c73b060da16d605dc21098c4e626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f11be5054960a0d72178613f08a675afe58c73b060da16d605dc21098c4e626->enter($__internal_0f11be5054960a0d72178613f08a675afe58c73b060da16d605dc21098c4e626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f836f8c64627de2f73ee8abb7c202c374d765112ae7f634a0578a10206e4a6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f836f8c64627de2f73ee8abb7c202c374d765112ae7f634a0578a10206e4a6a5->enter($__internal_f836f8c64627de2f73ee8abb7c202c374d765112ae7f634a0578a10206e4a6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>Please login!</h2>
    </div>

    ";
        // line 8
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "        <div class=\"alert alert-danger\" role=\"alert\">We have no match for that user and password</div>
        ";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div class=\"form\">
        <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"email\">Username or Email:</label>
                ";
        // line 17
        echo "                <input type=\"text\" id=\"email\" name=\"_email\"
                ";
        // line 19
        echo "                       class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\"
                       class=\"form-control\"/>
            </div>
            ";
        // line 31
        echo "
            <button type=\"submit\" class=\"btn btn-secondary\">login<i class=\"fa fa-lock\" aria-hidden=\"true\"></i></button>
        </form>
    </div>
";
        
        $__internal_f836f8c64627de2f73ee8abb7c202c374d765112ae7f634a0578a10206e4a6a5->leave($__internal_f836f8c64627de2f73ee8abb7c202c374d765112ae7f634a0578a10206e4a6a5_prof);

        
        $__internal_0f11be5054960a0d72178613f08a675afe58c73b060da16d605dc21098c4e626->leave($__internal_0f11be5054960a0d72178613f08a675afe58c73b060da16d605dc21098c4e626_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  75 => 19,  72 => 17,  66 => 13,  63 => 12,  60 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"jumbotron\">
        <h2>Please login!</h2>
    </div>

    {% if error %}
        <div class=\"alert alert-danger\" role=\"alert\">We have no match for that user and password</div>
        {#<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
    {% endif %}
    <div class=\"form\">
        <form action=\"{{ path('login_check') }}\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"email\">Username or Email:</label>
                {#<label for=\"username\">Username:</label>#}
                <input type=\"text\" id=\"email\" name=\"_email\"
                {#<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"#}
                       class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\"
                       class=\"form-control\"/>
            </div>
            {#
                If you want to control the URL the user
                is redirected to on success (more details below)
                <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
            #}

            <button type=\"submit\" class=\"btn btn-secondary\">login<i class=\"fa fa-lock\" aria-hidden=\"true\"></i></button>
        </form>
    </div>
{% endblock %}", "security/login.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/security/login.html.twig");
    }
}
