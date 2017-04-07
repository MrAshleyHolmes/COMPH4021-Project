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
        $__internal_c61a0e793f4b3b6343ad0f7f6bc4ed2cc0bbbc305b1b6d43edb7d592db5e2cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61a0e793f4b3b6343ad0f7f6bc4ed2cc0bbbc305b1b6d43edb7d592db5e2cd8->enter($__internal_c61a0e793f4b3b6343ad0f7f6bc4ed2cc0bbbc305b1b6d43edb7d592db5e2cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_121cd58adc03d201d418089b9d30662755e5d9b1d331a0eae64639a0580521f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121cd58adc03d201d418089b9d30662755e5d9b1d331a0eae64639a0580521f0->enter($__internal_121cd58adc03d201d418089b9d30662755e5d9b1d331a0eae64639a0580521f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c61a0e793f4b3b6343ad0f7f6bc4ed2cc0bbbc305b1b6d43edb7d592db5e2cd8->leave($__internal_c61a0e793f4b3b6343ad0f7f6bc4ed2cc0bbbc305b1b6d43edb7d592db5e2cd8_prof);

        
        $__internal_121cd58adc03d201d418089b9d30662755e5d9b1d331a0eae64639a0580521f0->leave($__internal_121cd58adc03d201d418089b9d30662755e5d9b1d331a0eae64639a0580521f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_246cf2023374807dce0cff52ea4e2eb68edebc0d84e98aaad9851347bdc4c255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246cf2023374807dce0cff52ea4e2eb68edebc0d84e98aaad9851347bdc4c255->enter($__internal_246cf2023374807dce0cff52ea4e2eb68edebc0d84e98aaad9851347bdc4c255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e5ae71088318df3aa8bd8e87f42df9ecb0663613fe41a2bd8d6dd64fc16d277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5ae71088318df3aa8bd8e87f42df9ecb0663613fe41a2bd8d6dd64fc16d277->enter($__internal_7e5ae71088318df3aa8bd8e87f42df9ecb0663613fe41a2bd8d6dd64fc16d277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: login page</h2>
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
        echo "
    ";
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "success"), "method")) {
            // line 14
            echo "        <div class=\"alert alert-success\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "                ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </div>
    ";
        }
        // line 20
        echo "
    <div class=\"form\">
        <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"email\">Username or Email:</label>
                ";
        // line 26
        echo "                <input type=\"text\" id=\"email\" name=\"_email\"
                ";
        // line 28
        echo "                       class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\"
                       class=\"form-control\"/>
            </div>
            ";
        // line 40
        echo "
            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >

            <button type=\"submit\" class=\"btn btn-secondary\">login<i class=\"fa fa-lock\" aria-hidden=\"true\"></i></button>
        </form>
    </div>
";
        
        $__internal_7e5ae71088318df3aa8bd8e87f42df9ecb0663613fe41a2bd8d6dd64fc16d277->leave($__internal_7e5ae71088318df3aa8bd8e87f42df9ecb0663613fe41a2bd8d6dd64fc16d277_prof);

        
        $__internal_246cf2023374807dce0cff52ea4e2eb68edebc0d84e98aaad9851347bdc4c255->leave($__internal_246cf2023374807dce0cff52ea4e2eb68edebc0d84e98aaad9851347bdc4c255_prof);

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
        return array (  114 => 42,  110 => 40,  101 => 28,  98 => 26,  92 => 22,  88 => 20,  84 => 18,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Welcome to the Pages: login page</h2>
    </div>

    {% if error %}
        <div class=\"alert alert-danger\" role=\"alert\">We have no match for that user and password</div>
        {#<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
    {% endif %}

    {% if app.session.flashbag.has('success') %}
        <div class=\"alert alert-success\">
            {% for message in app.session.flashbag.get('success') %}
                {{ message }}
            {% endfor %}
        </div>
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
