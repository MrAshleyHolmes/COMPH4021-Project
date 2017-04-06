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
        $__internal_829f9590d0ddedf12d82da61386e77a579b2c9c2df1fae1a82e1ee73367c5971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829f9590d0ddedf12d82da61386e77a579b2c9c2df1fae1a82e1ee73367c5971->enter($__internal_829f9590d0ddedf12d82da61386e77a579b2c9c2df1fae1a82e1ee73367c5971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_269a64f37c38d66e9fb3d65bee5b052cf50e4db9f7ab07e3e2d92ef322e56dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269a64f37c38d66e9fb3d65bee5b052cf50e4db9f7ab07e3e2d92ef322e56dae->enter($__internal_269a64f37c38d66e9fb3d65bee5b052cf50e4db9f7ab07e3e2d92ef322e56dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_829f9590d0ddedf12d82da61386e77a579b2c9c2df1fae1a82e1ee73367c5971->leave($__internal_829f9590d0ddedf12d82da61386e77a579b2c9c2df1fae1a82e1ee73367c5971_prof);

        
        $__internal_269a64f37c38d66e9fb3d65bee5b052cf50e4db9f7ab07e3e2d92ef322e56dae->leave($__internal_269a64f37c38d66e9fb3d65bee5b052cf50e4db9f7ab07e3e2d92ef322e56dae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f501bcb6613980b5b11cfbefeee0ac7a7084e3570e5cc82dcc0657980114522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f501bcb6613980b5b11cfbefeee0ac7a7084e3570e5cc82dcc0657980114522->enter($__internal_9f501bcb6613980b5b11cfbefeee0ac7a7084e3570e5cc82dcc0657980114522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d0a0c912d1acf6afa3964aa65545bcdb2a3b5a69a6231abb881bebabda02348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0a0c912d1acf6afa3964aa65545bcdb2a3b5a69a6231abb881bebabda02348->enter($__internal_2d0a0c912d1acf6afa3964aa65545bcdb2a3b5a69a6231abb881bebabda02348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages:login page</h2>
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
            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >

            <button type=\"submit\" class=\"btn btn-secondary\">login<i class=\"fa fa-lock\" aria-hidden=\"true\"></i></button>
        </form>
    </div>
";
        
        $__internal_2d0a0c912d1acf6afa3964aa65545bcdb2a3b5a69a6231abb881bebabda02348->leave($__internal_2d0a0c912d1acf6afa3964aa65545bcdb2a3b5a69a6231abb881bebabda02348_prof);

        
        $__internal_9f501bcb6613980b5b11cfbefeee0ac7a7084e3570e5cc82dcc0657980114522->leave($__internal_9f501bcb6613980b5b11cfbefeee0ac7a7084e3570e5cc82dcc0657980114522_prof);

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
        return array (  88 => 33,  84 => 31,  75 => 19,  72 => 17,  66 => 13,  63 => 12,  60 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Welcome to the Pages:login page</h2>
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

            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"{{ csrf_token('authenticate') }}\"
            >

            <button type=\"submit\" class=\"btn btn-secondary\">login<i class=\"fa fa-lock\" aria-hidden=\"true\"></i></button>
        </form>
    </div>
{% endblock %}", "security/login.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/security/login.html.twig");
    }
}
