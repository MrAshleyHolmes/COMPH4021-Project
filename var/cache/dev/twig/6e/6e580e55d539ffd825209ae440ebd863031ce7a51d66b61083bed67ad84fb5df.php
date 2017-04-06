<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c22d97982730d0d4058b9bea1bb74a2f52595da1deb791b793bc1f9f9d92daa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_489227f07ab2c5440995bcd42232dc9a60554a92252a9a0fcc2c7605ce3420c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489227f07ab2c5440995bcd42232dc9a60554a92252a9a0fcc2c7605ce3420c6->enter($__internal_489227f07ab2c5440995bcd42232dc9a60554a92252a9a0fcc2c7605ce3420c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_807eb92e2d42a6a0adfca194dbedcb00d929a3f3c1ffca62a6bd6486353fc996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807eb92e2d42a6a0adfca194dbedcb00d929a3f3c1ffca62a6bd6486353fc996->enter($__internal_807eb92e2d42a6a0adfca194dbedcb00d929a3f3c1ffca62a6bd6486353fc996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489227f07ab2c5440995bcd42232dc9a60554a92252a9a0fcc2c7605ce3420c6->leave($__internal_489227f07ab2c5440995bcd42232dc9a60554a92252a9a0fcc2c7605ce3420c6_prof);

        
        $__internal_807eb92e2d42a6a0adfca194dbedcb00d929a3f3c1ffca62a6bd6486353fc996->leave($__internal_807eb92e2d42a6a0adfca194dbedcb00d929a3f3c1ffca62a6bd6486353fc996_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_900fb61b1b3232150359fc9317e6476f9e9a7150ce6bc0a07f95be1fe3e0ec36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900fb61b1b3232150359fc9317e6476f9e9a7150ce6bc0a07f95be1fe3e0ec36->enter($__internal_900fb61b1b3232150359fc9317e6476f9e9a7150ce6bc0a07f95be1fe3e0ec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be7a3b320950f532381cabf12ee6a2497023a2e0e085e1bdff5d3d9ee31869c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7a3b320950f532381cabf12ee6a2497023a2e0e085e1bdff5d3d9ee31869c5->enter($__internal_be7a3b320950f532381cabf12ee6a2497023a2e0e085e1bdff5d3d9ee31869c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_be7a3b320950f532381cabf12ee6a2497023a2e0e085e1bdff5d3d9ee31869c5->leave($__internal_be7a3b320950f532381cabf12ee6a2497023a2e0e085e1bdff5d3d9ee31869c5_prof);

        
        $__internal_900fb61b1b3232150359fc9317e6476f9e9a7150ce6bc0a07f95be1fe3e0ec36->leave($__internal_900fb61b1b3232150359fc9317e6476f9e9a7150ce6bc0a07f95be1fe3e0ec36_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0780ed5e918cc5996f6d51439721a0d8d67bfaa6962f8323d258959ade11406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0780ed5e918cc5996f6d51439721a0d8d67bfaa6962f8323d258959ade11406->enter($__internal_f0780ed5e918cc5996f6d51439721a0d8d67bfaa6962f8323d258959ade11406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af1be8b2bff63045edd99004a1a3ccd9d960d73d9ec5a7eef05213eec414e0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1be8b2bff63045edd99004a1a3ccd9d960d73d9ec5a7eef05213eec414e0f0->enter($__internal_af1be8b2bff63045edd99004a1a3ccd9d960d73d9ec5a7eef05213eec414e0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_af1be8b2bff63045edd99004a1a3ccd9d960d73d9ec5a7eef05213eec414e0f0->leave($__internal_af1be8b2bff63045edd99004a1a3ccd9d960d73d9ec5a7eef05213eec414e0f0_prof);

        
        $__internal_f0780ed5e918cc5996f6d51439721a0d8d67bfaa6962f8323d258959ade11406->leave($__internal_f0780ed5e918cc5996f6d51439721a0d8d67bfaa6962f8323d258959ade11406_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3114b82147183c2182a1aecfe863cb9598033ecc78cec8535905d5af3e5537e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3114b82147183c2182a1aecfe863cb9598033ecc78cec8535905d5af3e5537e->enter($__internal_a3114b82147183c2182a1aecfe863cb9598033ecc78cec8535905d5af3e5537e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ea16c290d36288fe66209b11d8ca3381ae06f9c19b16fae06742ed92c44c177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea16c290d36288fe66209b11d8ca3381ae06f9c19b16fae06742ed92c44c177->enter($__internal_0ea16c290d36288fe66209b11d8ca3381ae06f9c19b16fae06742ed92c44c177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0ea16c290d36288fe66209b11d8ca3381ae06f9c19b16fae06742ed92c44c177->leave($__internal_0ea16c290d36288fe66209b11d8ca3381ae06f9c19b16fae06742ed92c44c177_prof);

        
        $__internal_a3114b82147183c2182a1aecfe863cb9598033ecc78cec8535905d5af3e5537e->leave($__internal_a3114b82147183c2182a1aecfe863cb9598033ecc78cec8535905d5af3e5537e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
