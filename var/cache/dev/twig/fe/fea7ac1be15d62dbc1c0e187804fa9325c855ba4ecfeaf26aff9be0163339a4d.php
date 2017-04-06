<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1b841a0b3139e957cd3754c62f4e119376d531a1c42b9608dee6998931ac60ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06aec562a02f9553eab0483f774028b26258f2e18500afb4625de19f4d0d29b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06aec562a02f9553eab0483f774028b26258f2e18500afb4625de19f4d0d29b4->enter($__internal_06aec562a02f9553eab0483f774028b26258f2e18500afb4625de19f4d0d29b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_860392293bcfcef19b42f4c8c69677ace35ae5262bc14018a59b1b503c4b1729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860392293bcfcef19b42f4c8c69677ace35ae5262bc14018a59b1b503c4b1729->enter($__internal_860392293bcfcef19b42f4c8c69677ace35ae5262bc14018a59b1b503c4b1729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_06aec562a02f9553eab0483f774028b26258f2e18500afb4625de19f4d0d29b4->leave($__internal_06aec562a02f9553eab0483f774028b26258f2e18500afb4625de19f4d0d29b4_prof);

        
        $__internal_860392293bcfcef19b42f4c8c69677ace35ae5262bc14018a59b1b503c4b1729->leave($__internal_860392293bcfcef19b42f4c8c69677ace35ae5262bc14018a59b1b503c4b1729_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
