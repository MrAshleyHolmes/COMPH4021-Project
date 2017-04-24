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
        $__internal_d3d9eb93c1af37f4c4dc1c857e6dc6cba87fbf4bae44db2c7d91514a7f05fe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d9eb93c1af37f4c4dc1c857e6dc6cba87fbf4bae44db2c7d91514a7f05fe44->enter($__internal_d3d9eb93c1af37f4c4dc1c857e6dc6cba87fbf4bae44db2c7d91514a7f05fe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3c72815dae0ebd9019770a809f26b4ccabf6cb9eb35cc560735ed24b1033c1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c72815dae0ebd9019770a809f26b4ccabf6cb9eb35cc560735ed24b1033c1b0->enter($__internal_3c72815dae0ebd9019770a809f26b4ccabf6cb9eb35cc560735ed24b1033c1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3d9eb93c1af37f4c4dc1c857e6dc6cba87fbf4bae44db2c7d91514a7f05fe44->leave($__internal_d3d9eb93c1af37f4c4dc1c857e6dc6cba87fbf4bae44db2c7d91514a7f05fe44_prof);

        
        $__internal_3c72815dae0ebd9019770a809f26b4ccabf6cb9eb35cc560735ed24b1033c1b0->leave($__internal_3c72815dae0ebd9019770a809f26b4ccabf6cb9eb35cc560735ed24b1033c1b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4188bee0abde96053e579b46691d5ad0e3e49256a2e3d6014cf76f9f669562b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4188bee0abde96053e579b46691d5ad0e3e49256a2e3d6014cf76f9f669562b->enter($__internal_c4188bee0abde96053e579b46691d5ad0e3e49256a2e3d6014cf76f9f669562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_07983895fef6e4befeecceb40671009add09c4e495fb30f024ca92144c70d04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07983895fef6e4befeecceb40671009add09c4e495fb30f024ca92144c70d04c->enter($__internal_07983895fef6e4befeecceb40671009add09c4e495fb30f024ca92144c70d04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_07983895fef6e4befeecceb40671009add09c4e495fb30f024ca92144c70d04c->leave($__internal_07983895fef6e4befeecceb40671009add09c4e495fb30f024ca92144c70d04c_prof);

        
        $__internal_c4188bee0abde96053e579b46691d5ad0e3e49256a2e3d6014cf76f9f669562b->leave($__internal_c4188bee0abde96053e579b46691d5ad0e3e49256a2e3d6014cf76f9f669562b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cd36b72018f8e6df35f2a61a5c67c424c38587a2ba50b779a4272f4dea068f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd36b72018f8e6df35f2a61a5c67c424c38587a2ba50b779a4272f4dea068f4->enter($__internal_0cd36b72018f8e6df35f2a61a5c67c424c38587a2ba50b779a4272f4dea068f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6eb744471ba33c0847a2a235ab0b3e323228a3af9bfa05551a039cc40172e8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb744471ba33c0847a2a235ab0b3e323228a3af9bfa05551a039cc40172e8a8->enter($__internal_6eb744471ba33c0847a2a235ab0b3e323228a3af9bfa05551a039cc40172e8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6eb744471ba33c0847a2a235ab0b3e323228a3af9bfa05551a039cc40172e8a8->leave($__internal_6eb744471ba33c0847a2a235ab0b3e323228a3af9bfa05551a039cc40172e8a8_prof);

        
        $__internal_0cd36b72018f8e6df35f2a61a5c67c424c38587a2ba50b779a4272f4dea068f4->leave($__internal_0cd36b72018f8e6df35f2a61a5c67c424c38587a2ba50b779a4272f4dea068f4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f1beb86d91486a3084eec429f33af4700240eae763055547eff5139c82d6230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1beb86d91486a3084eec429f33af4700240eae763055547eff5139c82d6230->enter($__internal_6f1beb86d91486a3084eec429f33af4700240eae763055547eff5139c82d6230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06f7463d27e80904349eaf571f325048c9a896c3407b47e1687cc6d474545e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f7463d27e80904349eaf571f325048c9a896c3407b47e1687cc6d474545e98->enter($__internal_06f7463d27e80904349eaf571f325048c9a896c3407b47e1687cc6d474545e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_06f7463d27e80904349eaf571f325048c9a896c3407b47e1687cc6d474545e98->leave($__internal_06f7463d27e80904349eaf571f325048c9a896c3407b47e1687cc6d474545e98_prof);

        
        $__internal_6f1beb86d91486a3084eec429f33af4700240eae763055547eff5139c82d6230->leave($__internal_6f1beb86d91486a3084eec429f33af4700240eae763055547eff5139c82d6230_prof);

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
