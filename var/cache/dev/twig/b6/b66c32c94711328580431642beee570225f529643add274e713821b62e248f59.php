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
        $__internal_5158c43c7c0ad14ae199c79f0c6f4e6c6621ac683f46672220553f083ccb399a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5158c43c7c0ad14ae199c79f0c6f4e6c6621ac683f46672220553f083ccb399a->enter($__internal_5158c43c7c0ad14ae199c79f0c6f4e6c6621ac683f46672220553f083ccb399a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_157cbad23c16ceb8119e1416c11b0f7aaa86f9bc12bdc3a981b073074c162f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157cbad23c16ceb8119e1416c11b0f7aaa86f9bc12bdc3a981b073074c162f95->enter($__internal_157cbad23c16ceb8119e1416c11b0f7aaa86f9bc12bdc3a981b073074c162f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5158c43c7c0ad14ae199c79f0c6f4e6c6621ac683f46672220553f083ccb399a->leave($__internal_5158c43c7c0ad14ae199c79f0c6f4e6c6621ac683f46672220553f083ccb399a_prof);

        
        $__internal_157cbad23c16ceb8119e1416c11b0f7aaa86f9bc12bdc3a981b073074c162f95->leave($__internal_157cbad23c16ceb8119e1416c11b0f7aaa86f9bc12bdc3a981b073074c162f95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db4a1f857ea50b70734c78c88f7588a05f26cc3c264b1616b5d6999f5f0c624c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4a1f857ea50b70734c78c88f7588a05f26cc3c264b1616b5d6999f5f0c624c->enter($__internal_db4a1f857ea50b70734c78c88f7588a05f26cc3c264b1616b5d6999f5f0c624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92ad7869497c4579c24a7d73528838ce9edb54c0351521e36359e45bce389508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ad7869497c4579c24a7d73528838ce9edb54c0351521e36359e45bce389508->enter($__internal_92ad7869497c4579c24a7d73528838ce9edb54c0351521e36359e45bce389508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92ad7869497c4579c24a7d73528838ce9edb54c0351521e36359e45bce389508->leave($__internal_92ad7869497c4579c24a7d73528838ce9edb54c0351521e36359e45bce389508_prof);

        
        $__internal_db4a1f857ea50b70734c78c88f7588a05f26cc3c264b1616b5d6999f5f0c624c->leave($__internal_db4a1f857ea50b70734c78c88f7588a05f26cc3c264b1616b5d6999f5f0c624c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9e59d0d6deef8587a3f03ad9c25c7eb0eee33485ae6364f71f48a377026eb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e59d0d6deef8587a3f03ad9c25c7eb0eee33485ae6364f71f48a377026eb49->enter($__internal_a9e59d0d6deef8587a3f03ad9c25c7eb0eee33485ae6364f71f48a377026eb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78a6b026edf15541e3c58326801d147c4de273e1da88fdc2fc7de30b661ea7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a6b026edf15541e3c58326801d147c4de273e1da88fdc2fc7de30b661ea7c9->enter($__internal_78a6b026edf15541e3c58326801d147c4de273e1da88fdc2fc7de30b661ea7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78a6b026edf15541e3c58326801d147c4de273e1da88fdc2fc7de30b661ea7c9->leave($__internal_78a6b026edf15541e3c58326801d147c4de273e1da88fdc2fc7de30b661ea7c9_prof);

        
        $__internal_a9e59d0d6deef8587a3f03ad9c25c7eb0eee33485ae6364f71f48a377026eb49->leave($__internal_a9e59d0d6deef8587a3f03ad9c25c7eb0eee33485ae6364f71f48a377026eb49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87f80bd7bf6be052be928ff7259e6859244dd497f06169ea1c1ed364ccab612b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f80bd7bf6be052be928ff7259e6859244dd497f06169ea1c1ed364ccab612b->enter($__internal_87f80bd7bf6be052be928ff7259e6859244dd497f06169ea1c1ed364ccab612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e21dc276b46d89ee0bbaac9912da50869b7d54e62909c78e94b1751562363b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e21dc276b46d89ee0bbaac9912da50869b7d54e62909c78e94b1751562363b6->enter($__internal_9e21dc276b46d89ee0bbaac9912da50869b7d54e62909c78e94b1751562363b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e21dc276b46d89ee0bbaac9912da50869b7d54e62909c78e94b1751562363b6->leave($__internal_9e21dc276b46d89ee0bbaac9912da50869b7d54e62909c78e94b1751562363b6_prof);

        
        $__internal_87f80bd7bf6be052be928ff7259e6859244dd497f06169ea1c1ed364ccab612b->leave($__internal_87f80bd7bf6be052be928ff7259e6859244dd497f06169ea1c1ed364ccab612b_prof);

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
