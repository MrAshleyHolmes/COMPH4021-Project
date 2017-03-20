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
        $__internal_27778c04bdffc8021bfa6dbbe1ccf7dd3c63d58b548ad99008b82b612a7d1e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27778c04bdffc8021bfa6dbbe1ccf7dd3c63d58b548ad99008b82b612a7d1e8f->enter($__internal_27778c04bdffc8021bfa6dbbe1ccf7dd3c63d58b548ad99008b82b612a7d1e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ecced4816a3847d33b6e4f75c4e5aa755867b0cd124a2e5d3e07672f42036824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecced4816a3847d33b6e4f75c4e5aa755867b0cd124a2e5d3e07672f42036824->enter($__internal_ecced4816a3847d33b6e4f75c4e5aa755867b0cd124a2e5d3e07672f42036824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27778c04bdffc8021bfa6dbbe1ccf7dd3c63d58b548ad99008b82b612a7d1e8f->leave($__internal_27778c04bdffc8021bfa6dbbe1ccf7dd3c63d58b548ad99008b82b612a7d1e8f_prof);

        
        $__internal_ecced4816a3847d33b6e4f75c4e5aa755867b0cd124a2e5d3e07672f42036824->leave($__internal_ecced4816a3847d33b6e4f75c4e5aa755867b0cd124a2e5d3e07672f42036824_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62694a9744e2eb267c6a09e06c45469bb1f22b45624797363dca43c63203d18d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62694a9744e2eb267c6a09e06c45469bb1f22b45624797363dca43c63203d18d->enter($__internal_62694a9744e2eb267c6a09e06c45469bb1f22b45624797363dca43c63203d18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aebd8453ad8cd3c018419137610289c3828d2d5c326c4078f4078b4844d88c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebd8453ad8cd3c018419137610289c3828d2d5c326c4078f4078b4844d88c0c->enter($__internal_aebd8453ad8cd3c018419137610289c3828d2d5c326c4078f4078b4844d88c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_aebd8453ad8cd3c018419137610289c3828d2d5c326c4078f4078b4844d88c0c->leave($__internal_aebd8453ad8cd3c018419137610289c3828d2d5c326c4078f4078b4844d88c0c_prof);

        
        $__internal_62694a9744e2eb267c6a09e06c45469bb1f22b45624797363dca43c63203d18d->leave($__internal_62694a9744e2eb267c6a09e06c45469bb1f22b45624797363dca43c63203d18d_prof);

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
