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
        $__internal_79ee4472c91287bf43cfc6374237a86a4ac31f15e64b6335588ebfd34886ba61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ee4472c91287bf43cfc6374237a86a4ac31f15e64b6335588ebfd34886ba61->enter($__internal_79ee4472c91287bf43cfc6374237a86a4ac31f15e64b6335588ebfd34886ba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d38a37a86def1f033f586dee8580ae7be2875fd507397ed0f6b9366ff545f9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38a37a86def1f033f586dee8580ae7be2875fd507397ed0f6b9366ff545f9d4->enter($__internal_d38a37a86def1f033f586dee8580ae7be2875fd507397ed0f6b9366ff545f9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ee4472c91287bf43cfc6374237a86a4ac31f15e64b6335588ebfd34886ba61->leave($__internal_79ee4472c91287bf43cfc6374237a86a4ac31f15e64b6335588ebfd34886ba61_prof);

        
        $__internal_d38a37a86def1f033f586dee8580ae7be2875fd507397ed0f6b9366ff545f9d4->leave($__internal_d38a37a86def1f033f586dee8580ae7be2875fd507397ed0f6b9366ff545f9d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6229b21a7f73aa316c5c821873247a447817fe8b91c82c0bb722678c7f45c601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6229b21a7f73aa316c5c821873247a447817fe8b91c82c0bb722678c7f45c601->enter($__internal_6229b21a7f73aa316c5c821873247a447817fe8b91c82c0bb722678c7f45c601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc06c664aad67975c70e9213499dd3e4689a95d63008cc4b090a46ebbde8e8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc06c664aad67975c70e9213499dd3e4689a95d63008cc4b090a46ebbde8e8f7->enter($__internal_bc06c664aad67975c70e9213499dd3e4689a95d63008cc4b090a46ebbde8e8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bc06c664aad67975c70e9213499dd3e4689a95d63008cc4b090a46ebbde8e8f7->leave($__internal_bc06c664aad67975c70e9213499dd3e4689a95d63008cc4b090a46ebbde8e8f7_prof);

        
        $__internal_6229b21a7f73aa316c5c821873247a447817fe8b91c82c0bb722678c7f45c601->leave($__internal_6229b21a7f73aa316c5c821873247a447817fe8b91c82c0bb722678c7f45c601_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a4f100a0f432c6e9ba9ecf50df68c04aa56e470adb4cfd59b7a122f35d344c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4f100a0f432c6e9ba9ecf50df68c04aa56e470adb4cfd59b7a122f35d344c9->enter($__internal_3a4f100a0f432c6e9ba9ecf50df68c04aa56e470adb4cfd59b7a122f35d344c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f86e27acf0a7e5a3b09f2b48cda913f163f4e05475ceed03d5f265e4133508a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f86e27acf0a7e5a3b09f2b48cda913f163f4e05475ceed03d5f265e4133508a->enter($__internal_1f86e27acf0a7e5a3b09f2b48cda913f163f4e05475ceed03d5f265e4133508a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1f86e27acf0a7e5a3b09f2b48cda913f163f4e05475ceed03d5f265e4133508a->leave($__internal_1f86e27acf0a7e5a3b09f2b48cda913f163f4e05475ceed03d5f265e4133508a_prof);

        
        $__internal_3a4f100a0f432c6e9ba9ecf50df68c04aa56e470adb4cfd59b7a122f35d344c9->leave($__internal_3a4f100a0f432c6e9ba9ecf50df68c04aa56e470adb4cfd59b7a122f35d344c9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65151da113cfd4518f930787e9afac993973d4c7df3a8f3d9c9b78b1c6f42726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65151da113cfd4518f930787e9afac993973d4c7df3a8f3d9c9b78b1c6f42726->enter($__internal_65151da113cfd4518f930787e9afac993973d4c7df3a8f3d9c9b78b1c6f42726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c635add1c816c6b7c0229318d849781b6fa254fe81d4a05871273d133163aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c635add1c816c6b7c0229318d849781b6fa254fe81d4a05871273d133163aff->enter($__internal_6c635add1c816c6b7c0229318d849781b6fa254fe81d4a05871273d133163aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6c635add1c816c6b7c0229318d849781b6fa254fe81d4a05871273d133163aff->leave($__internal_6c635add1c816c6b7c0229318d849781b6fa254fe81d4a05871273d133163aff_prof);

        
        $__internal_65151da113cfd4518f930787e9afac993973d4c7df3a8f3d9c9b78b1c6f42726->leave($__internal_65151da113cfd4518f930787e9afac993973d4c7df3a8f3d9c9b78b1c6f42726_prof);

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
