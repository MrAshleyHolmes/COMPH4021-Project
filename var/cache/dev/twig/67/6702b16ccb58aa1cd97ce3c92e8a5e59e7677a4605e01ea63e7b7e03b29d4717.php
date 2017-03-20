<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_198b338338ccc1ff5e08087bb3ef351d86ce1b36773aa0d2df137da0a69b9386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b7d6adf3aefe427e513ed7cf4d98dd8bb0cabc69ebf83f6b9ab19bd76b47db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7d6adf3aefe427e513ed7cf4d98dd8bb0cabc69ebf83f6b9ab19bd76b47db0->enter($__internal_5b7d6adf3aefe427e513ed7cf4d98dd8bb0cabc69ebf83f6b9ab19bd76b47db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_acb154cf571ac708f6ad7f71be4fa97fadd7313feb741c181b75feb86ecd7e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb154cf571ac708f6ad7f71be4fa97fadd7313feb741c181b75feb86ecd7e62->enter($__internal_acb154cf571ac708f6ad7f71be4fa97fadd7313feb741c181b75feb86ecd7e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b7d6adf3aefe427e513ed7cf4d98dd8bb0cabc69ebf83f6b9ab19bd76b47db0->leave($__internal_5b7d6adf3aefe427e513ed7cf4d98dd8bb0cabc69ebf83f6b9ab19bd76b47db0_prof);

        
        $__internal_acb154cf571ac708f6ad7f71be4fa97fadd7313feb741c181b75feb86ecd7e62->leave($__internal_acb154cf571ac708f6ad7f71be4fa97fadd7313feb741c181b75feb86ecd7e62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_295a02f60eb249bb9b3c2abb271b68c649d0a173c976529960d0fd3c6fee58fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295a02f60eb249bb9b3c2abb271b68c649d0a173c976529960d0fd3c6fee58fc->enter($__internal_295a02f60eb249bb9b3c2abb271b68c649d0a173c976529960d0fd3c6fee58fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_721e8d1a71a2b7a64b0096a318432f6fbe9c1ed2ecf910ac110d50859b08e969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721e8d1a71a2b7a64b0096a318432f6fbe9c1ed2ecf910ac110d50859b08e969->enter($__internal_721e8d1a71a2b7a64b0096a318432f6fbe9c1ed2ecf910ac110d50859b08e969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_721e8d1a71a2b7a64b0096a318432f6fbe9c1ed2ecf910ac110d50859b08e969->leave($__internal_721e8d1a71a2b7a64b0096a318432f6fbe9c1ed2ecf910ac110d50859b08e969_prof);

        
        $__internal_295a02f60eb249bb9b3c2abb271b68c649d0a173c976529960d0fd3c6fee58fc->leave($__internal_295a02f60eb249bb9b3c2abb271b68c649d0a173c976529960d0fd3c6fee58fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
