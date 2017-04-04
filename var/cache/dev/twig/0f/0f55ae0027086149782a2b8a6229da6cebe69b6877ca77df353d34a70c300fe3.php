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
        $__internal_ac3e60f1b3efaaa159aa4211778e1ffa170b32a88026ad4d45975c45561ef81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3e60f1b3efaaa159aa4211778e1ffa170b32a88026ad4d45975c45561ef81f->enter($__internal_ac3e60f1b3efaaa159aa4211778e1ffa170b32a88026ad4d45975c45561ef81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_7f854bded6402d120a58ac33b9d982683c0629662b1a329dafaa8efc3ed11fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f854bded6402d120a58ac33b9d982683c0629662b1a329dafaa8efc3ed11fc8->enter($__internal_7f854bded6402d120a58ac33b9d982683c0629662b1a329dafaa8efc3ed11fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3e60f1b3efaaa159aa4211778e1ffa170b32a88026ad4d45975c45561ef81f->leave($__internal_ac3e60f1b3efaaa159aa4211778e1ffa170b32a88026ad4d45975c45561ef81f_prof);

        
        $__internal_7f854bded6402d120a58ac33b9d982683c0629662b1a329dafaa8efc3ed11fc8->leave($__internal_7f854bded6402d120a58ac33b9d982683c0629662b1a329dafaa8efc3ed11fc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec99b9a4c1d535d8f4d41a2c2b9f0c971c3f0e77478bdf0ab535fa209ed2ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec99b9a4c1d535d8f4d41a2c2b9f0c971c3f0e77478bdf0ab535fa209ed2ac9->enter($__internal_6ec99b9a4c1d535d8f4d41a2c2b9f0c971c3f0e77478bdf0ab535fa209ed2ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7465e1a0f593c9fadbff069d161f2ed5cbec9b62e7b70ca771ef90f46a57f43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7465e1a0f593c9fadbff069d161f2ed5cbec9b62e7b70ca771ef90f46a57f43e->enter($__internal_7465e1a0f593c9fadbff069d161f2ed5cbec9b62e7b70ca771ef90f46a57f43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\"
                ";
        // line 18
        echo "                       class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\"
                       class=\"form-control\"/>
            </div>
            ";
        // line 30
        echo "
            <button type=\"submit\" class=\"btn btn-secondary\">login</button>
        </form>
    </div>
";
        
        $__internal_7465e1a0f593c9fadbff069d161f2ed5cbec9b62e7b70ca771ef90f46a57f43e->leave($__internal_7465e1a0f593c9fadbff069d161f2ed5cbec9b62e7b70ca771ef90f46a57f43e_prof);

        
        $__internal_6ec99b9a4c1d535d8f4d41a2c2b9f0c971c3f0e77478bdf0ab535fa209ed2ac9->leave($__internal_6ec99b9a4c1d535d8f4d41a2c2b9f0c971c3f0e77478bdf0ab535fa209ed2ac9_prof);

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
        return array (  82 => 30,  73 => 18,  66 => 13,  63 => 12,  60 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <form action=\"{{ path('login') }}\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\"
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

            <button type=\"submit\" class=\"btn btn-secondary\">login</button>
        </form>
    </div>
{% endblock %}", "security/login.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/security/login.html.twig");
    }
}
