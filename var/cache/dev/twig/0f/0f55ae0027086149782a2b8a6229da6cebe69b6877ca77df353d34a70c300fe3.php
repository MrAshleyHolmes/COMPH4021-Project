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
        $__internal_70b60ec5c964c61a8c051c9b9176bc77984ccf20d203eec0226accf6d61e7ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b60ec5c964c61a8c051c9b9176bc77984ccf20d203eec0226accf6d61e7ec7->enter($__internal_70b60ec5c964c61a8c051c9b9176bc77984ccf20d203eec0226accf6d61e7ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_3e53789e3b0368e09f50371f84da60063e7e6bb13f35523659e610137ff3d71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e53789e3b0368e09f50371f84da60063e7e6bb13f35523659e610137ff3d71d->enter($__internal_3e53789e3b0368e09f50371f84da60063e7e6bb13f35523659e610137ff3d71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b60ec5c964c61a8c051c9b9176bc77984ccf20d203eec0226accf6d61e7ec7->leave($__internal_70b60ec5c964c61a8c051c9b9176bc77984ccf20d203eec0226accf6d61e7ec7_prof);

        
        $__internal_3e53789e3b0368e09f50371f84da60063e7e6bb13f35523659e610137ff3d71d->leave($__internal_3e53789e3b0368e09f50371f84da60063e7e6bb13f35523659e610137ff3d71d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d4ad57c672eddee9954782a651feb933f03adb469b4e237c6f6112b24186b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4ad57c672eddee9954782a651feb933f03adb469b4e237c6f6112b24186b77->enter($__internal_2d4ad57c672eddee9954782a651feb933f03adb469b4e237c6f6112b24186b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dd6a9bfe8d6f7aa354cffb070635495c47c0c089418a90071c70d7c71b6c942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd6a9bfe8d6f7aa354cffb070635495c47c0c089418a90071c70d7c71b6c942->enter($__internal_4dd6a9bfe8d6f7aa354cffb070635495c47c0c089418a90071c70d7c71b6c942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <button type=\"submit\" class=\"btn btn-secondary\">login<span class=\"fa fa-lock\"></span></button>
        </form>
    </div>
";
        
        $__internal_4dd6a9bfe8d6f7aa354cffb070635495c47c0c089418a90071c70d7c71b6c942->leave($__internal_4dd6a9bfe8d6f7aa354cffb070635495c47c0c089418a90071c70d7c71b6c942_prof);

        
        $__internal_2d4ad57c672eddee9954782a651feb933f03adb469b4e237c6f6112b24186b77->leave($__internal_2d4ad57c672eddee9954782a651feb933f03adb469b4e237c6f6112b24186b77_prof);

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

            <button type=\"submit\" class=\"btn btn-secondary\">login<span class=\"fa fa-lock\"></span></button>
        </form>
    </div>
{% endblock %}", "security/login.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/security/login.html.twig");
    }
}
