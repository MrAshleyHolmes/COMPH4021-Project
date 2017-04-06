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
        $__internal_a6000fde4ab76ef7fb6d1f30ee5f7f13b3cb44768967faec598212adbe91f559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6000fde4ab76ef7fb6d1f30ee5f7f13b3cb44768967faec598212adbe91f559->enter($__internal_a6000fde4ab76ef7fb6d1f30ee5f7f13b3cb44768967faec598212adbe91f559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_5c8792eed61148b283826bb9bfec1511bbe70207144b734fe3265f9cb77c0d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8792eed61148b283826bb9bfec1511bbe70207144b734fe3265f9cb77c0d5f->enter($__internal_5c8792eed61148b283826bb9bfec1511bbe70207144b734fe3265f9cb77c0d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6000fde4ab76ef7fb6d1f30ee5f7f13b3cb44768967faec598212adbe91f559->leave($__internal_a6000fde4ab76ef7fb6d1f30ee5f7f13b3cb44768967faec598212adbe91f559_prof);

        
        $__internal_5c8792eed61148b283826bb9bfec1511bbe70207144b734fe3265f9cb77c0d5f->leave($__internal_5c8792eed61148b283826bb9bfec1511bbe70207144b734fe3265f9cb77c0d5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb4cac6a82fdca2ae0915d2244fe46fd36dc5e1d82058b41b8de73408017e38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4cac6a82fdca2ae0915d2244fe46fd36dc5e1d82058b41b8de73408017e38a->enter($__internal_bb4cac6a82fdca2ae0915d2244fe46fd36dc5e1d82058b41b8de73408017e38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3418707471a012a9093115976b3cb6d4d50b4ae464d706f4924a05bea1cfc630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3418707471a012a9093115976b3cb6d4d50b4ae464d706f4924a05bea1cfc630->enter($__internal_3418707471a012a9093115976b3cb6d4d50b4ae464d706f4924a05bea1cfc630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3418707471a012a9093115976b3cb6d4d50b4ae464d706f4924a05bea1cfc630->leave($__internal_3418707471a012a9093115976b3cb6d4d50b4ae464d706f4924a05bea1cfc630_prof);

        
        $__internal_bb4cac6a82fdca2ae0915d2244fe46fd36dc5e1d82058b41b8de73408017e38a->leave($__internal_bb4cac6a82fdca2ae0915d2244fe46fd36dc5e1d82058b41b8de73408017e38a_prof);

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
