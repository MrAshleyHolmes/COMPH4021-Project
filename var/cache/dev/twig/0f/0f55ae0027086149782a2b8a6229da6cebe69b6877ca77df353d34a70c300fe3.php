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
        $__internal_0932400b5061cc52d3009991db30f2b81d4c1429e5f70eb35d16f2be5888eafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0932400b5061cc52d3009991db30f2b81d4c1429e5f70eb35d16f2be5888eafb->enter($__internal_0932400b5061cc52d3009991db30f2b81d4c1429e5f70eb35d16f2be5888eafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_7abcf9d546839c0a3808066198ceb9871190b5d75a2518b98b325f17287e5a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abcf9d546839c0a3808066198ceb9871190b5d75a2518b98b325f17287e5a68->enter($__internal_7abcf9d546839c0a3808066198ceb9871190b5d75a2518b98b325f17287e5a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0932400b5061cc52d3009991db30f2b81d4c1429e5f70eb35d16f2be5888eafb->leave($__internal_0932400b5061cc52d3009991db30f2b81d4c1429e5f70eb35d16f2be5888eafb_prof);

        
        $__internal_7abcf9d546839c0a3808066198ceb9871190b5d75a2518b98b325f17287e5a68->leave($__internal_7abcf9d546839c0a3808066198ceb9871190b5d75a2518b98b325f17287e5a68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44fad36f0695df4ddc742fcd8be18dc77a49013d05ca57527e281c944af6af55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fad36f0695df4ddc742fcd8be18dc77a49013d05ca57527e281c944af6af55->enter($__internal_44fad36f0695df4ddc742fcd8be18dc77a49013d05ca57527e281c944af6af55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e04bd91e0e6f42a6ac04b9d287326837afe027a44f4a55a34e09a1078018cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e04bd91e0e6f42a6ac04b9d287326837afe027a44f4a55a34e09a1078018cba->enter($__internal_0e04bd91e0e6f42a6ac04b9d287326837afe027a44f4a55a34e09a1078018cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>Please login!</h2>
    </div>

    ";
        // line 8
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "        ";
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "    <div class=\"form\">
        <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                ";
        // line 16
        echo "                <label for=\"username\">Username:</label>
                ";
        // line 18
        echo "                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                       class=\"form-control\"/>
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
        
        $__internal_0e04bd91e0e6f42a6ac04b9d287326837afe027a44f4a55a34e09a1078018cba->leave($__internal_0e04bd91e0e6f42a6ac04b9d287326837afe027a44f4a55a34e09a1078018cba_prof);

        
        $__internal_44fad36f0695df4ddc742fcd8be18dc77a49013d05ca57527e281c944af6af55->leave($__internal_44fad36f0695df4ddc742fcd8be18dc77a49013d05ca57527e281c944af6af55_prof);

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
        return array (  88 => 31,  76 => 18,  73 => 16,  68 => 13,  65 => 12,  59 => 10,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        {#<div class=\"alert alert-danger\" role=\"alert\">We have no match for that user and password</div>#}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"form\">
        <form action=\"{{ path('login_check') }}\" method=\"post\">
            <div class=\"form-group\">
                {#<label for=\"username\">Username or Email:</label>#}
                <label for=\"username\">Username:</label>
                {#<input type=\"text\" id=\"email\" name=\"_email\"#}
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
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
