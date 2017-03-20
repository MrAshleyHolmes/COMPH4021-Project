<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a80e33120e12cf206d939158a9143359b5d4985b55ab400d2822813c2dcb523e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c0e485d1ca726ba8741eb5e4b4989e11434001afe57c2517a43fe9dcb75293cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e485d1ca726ba8741eb5e4b4989e11434001afe57c2517a43fe9dcb75293cd->enter($__internal_c0e485d1ca726ba8741eb5e4b4989e11434001afe57c2517a43fe9dcb75293cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8c36985945d1b2713138953714bd915272f61538a75afbf977012e1cef4a8fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c36985945d1b2713138953714bd915272f61538a75afbf977012e1cef4a8fa9->enter($__internal_8c36985945d1b2713138953714bd915272f61538a75afbf977012e1cef4a8fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e485d1ca726ba8741eb5e4b4989e11434001afe57c2517a43fe9dcb75293cd->leave($__internal_c0e485d1ca726ba8741eb5e4b4989e11434001afe57c2517a43fe9dcb75293cd_prof);

        
        $__internal_8c36985945d1b2713138953714bd915272f61538a75afbf977012e1cef4a8fa9->leave($__internal_8c36985945d1b2713138953714bd915272f61538a75afbf977012e1cef4a8fa9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59f8d2af3d28ef1f2703f5b4b023fc48893481d1a481812143d7343779c615e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f8d2af3d28ef1f2703f5b4b023fc48893481d1a481812143d7343779c615e1->enter($__internal_59f8d2af3d28ef1f2703f5b4b023fc48893481d1a481812143d7343779c615e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef06aceb4433d214ab485231e437d433cad7fc63cb4fe218b9f55d5640069d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef06aceb4433d214ab485231e437d433cad7fc63cb4fe218b9f55d5640069d21->enter($__internal_ef06aceb4433d214ab485231e437d433cad7fc63cb4fe218b9f55d5640069d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef06aceb4433d214ab485231e437d433cad7fc63cb4fe218b9f55d5640069d21->leave($__internal_ef06aceb4433d214ab485231e437d433cad7fc63cb4fe218b9f55d5640069d21_prof);

        
        $__internal_59f8d2af3d28ef1f2703f5b4b023fc48893481d1a481812143d7343779c615e1->leave($__internal_59f8d2af3d28ef1f2703f5b4b023fc48893481d1a481812143d7343779c615e1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_843e8560794880c883ab2f9e796331b1026ca3b7643164480db9dee1497f5b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843e8560794880c883ab2f9e796331b1026ca3b7643164480db9dee1497f5b49->enter($__internal_843e8560794880c883ab2f9e796331b1026ca3b7643164480db9dee1497f5b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_065a04471bf131def462d9d817de41508f551b035a82694798d20809bbc56257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065a04471bf131def462d9d817de41508f551b035a82694798d20809bbc56257->enter($__internal_065a04471bf131def462d9d817de41508f551b035a82694798d20809bbc56257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_065a04471bf131def462d9d817de41508f551b035a82694798d20809bbc56257->leave($__internal_065a04471bf131def462d9d817de41508f551b035a82694798d20809bbc56257_prof);

        
        $__internal_843e8560794880c883ab2f9e796331b1026ca3b7643164480db9dee1497f5b49->leave($__internal_843e8560794880c883ab2f9e796331b1026ca3b7643164480db9dee1497f5b49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a77c57528e5c3e0995522107776faceb9d25c66234266ff45d4d29167cd53e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77c57528e5c3e0995522107776faceb9d25c66234266ff45d4d29167cd53e7e->enter($__internal_a77c57528e5c3e0995522107776faceb9d25c66234266ff45d4d29167cd53e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aeb13c7d1a29fc1e9227da9cc47ed01b06cabed5fbb10bbcf69feed6b501d7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb13c7d1a29fc1e9227da9cc47ed01b06cabed5fbb10bbcf69feed6b501d7d1->enter($__internal_aeb13c7d1a29fc1e9227da9cc47ed01b06cabed5fbb10bbcf69feed6b501d7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aeb13c7d1a29fc1e9227da9cc47ed01b06cabed5fbb10bbcf69feed6b501d7d1->leave($__internal_aeb13c7d1a29fc1e9227da9cc47ed01b06cabed5fbb10bbcf69feed6b501d7d1_prof);

        
        $__internal_a77c57528e5c3e0995522107776faceb9d25c66234266ff45d4d29167cd53e7e->leave($__internal_a77c57528e5c3e0995522107776faceb9d25c66234266ff45d4d29167cd53e7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
