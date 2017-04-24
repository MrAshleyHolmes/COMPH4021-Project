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
        $__internal_13d864f8814e03009b13b5820df61375f7ce96fd55a283f500adb88fdf6389e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d864f8814e03009b13b5820df61375f7ce96fd55a283f500adb88fdf6389e8->enter($__internal_13d864f8814e03009b13b5820df61375f7ce96fd55a283f500adb88fdf6389e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ba89d296c73643936c132ac0b3887dce69cca1477375185b986a461cb950e58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba89d296c73643936c132ac0b3887dce69cca1477375185b986a461cb950e58b->enter($__internal_ba89d296c73643936c132ac0b3887dce69cca1477375185b986a461cb950e58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d864f8814e03009b13b5820df61375f7ce96fd55a283f500adb88fdf6389e8->leave($__internal_13d864f8814e03009b13b5820df61375f7ce96fd55a283f500adb88fdf6389e8_prof);

        
        $__internal_ba89d296c73643936c132ac0b3887dce69cca1477375185b986a461cb950e58b->leave($__internal_ba89d296c73643936c132ac0b3887dce69cca1477375185b986a461cb950e58b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f380e380e4beed91498efb798abced2b10b744d0abf8a80880585bc1acb4b4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f380e380e4beed91498efb798abced2b10b744d0abf8a80880585bc1acb4b4e9->enter($__internal_f380e380e4beed91498efb798abced2b10b744d0abf8a80880585bc1acb4b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a33addd31a5b393f15b6f97614f70679d89b68e4ffa751ca71ec99171d6cdac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33addd31a5b393f15b6f97614f70679d89b68e4ffa751ca71ec99171d6cdac1->enter($__internal_a33addd31a5b393f15b6f97614f70679d89b68e4ffa751ca71ec99171d6cdac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a33addd31a5b393f15b6f97614f70679d89b68e4ffa751ca71ec99171d6cdac1->leave($__internal_a33addd31a5b393f15b6f97614f70679d89b68e4ffa751ca71ec99171d6cdac1_prof);

        
        $__internal_f380e380e4beed91498efb798abced2b10b744d0abf8a80880585bc1acb4b4e9->leave($__internal_f380e380e4beed91498efb798abced2b10b744d0abf8a80880585bc1acb4b4e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc6f46183f2ea96a523ed531a43508b759abf1fbe4aa4a60e0e59b77653fcd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6f46183f2ea96a523ed531a43508b759abf1fbe4aa4a60e0e59b77653fcd7d->enter($__internal_cc6f46183f2ea96a523ed531a43508b759abf1fbe4aa4a60e0e59b77653fcd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c992723fd2281deb8ef6306b46f27c332ce35f8cd3c6173bd029f42858ef8a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c992723fd2281deb8ef6306b46f27c332ce35f8cd3c6173bd029f42858ef8a24->enter($__internal_c992723fd2281deb8ef6306b46f27c332ce35f8cd3c6173bd029f42858ef8a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c992723fd2281deb8ef6306b46f27c332ce35f8cd3c6173bd029f42858ef8a24->leave($__internal_c992723fd2281deb8ef6306b46f27c332ce35f8cd3c6173bd029f42858ef8a24_prof);

        
        $__internal_cc6f46183f2ea96a523ed531a43508b759abf1fbe4aa4a60e0e59b77653fcd7d->leave($__internal_cc6f46183f2ea96a523ed531a43508b759abf1fbe4aa4a60e0e59b77653fcd7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_088aebe32e69bb5e89b3ef11d9c73d7bea6c46959ddc251b1d9d12c8cc9e144c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088aebe32e69bb5e89b3ef11d9c73d7bea6c46959ddc251b1d9d12c8cc9e144c->enter($__internal_088aebe32e69bb5e89b3ef11d9c73d7bea6c46959ddc251b1d9d12c8cc9e144c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b23fe4af2885b283354c6c60939857588817f688993763fa563f34c93e592724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23fe4af2885b283354c6c60939857588817f688993763fa563f34c93e592724->enter($__internal_b23fe4af2885b283354c6c60939857588817f688993763fa563f34c93e592724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b23fe4af2885b283354c6c60939857588817f688993763fa563f34c93e592724->leave($__internal_b23fe4af2885b283354c6c60939857588817f688993763fa563f34c93e592724_prof);

        
        $__internal_088aebe32e69bb5e89b3ef11d9c73d7bea6c46959ddc251b1d9d12c8cc9e144c->leave($__internal_088aebe32e69bb5e89b3ef11d9c73d7bea6c46959ddc251b1d9d12c8cc9e144c_prof);

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
