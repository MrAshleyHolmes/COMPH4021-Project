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
        $__internal_95ccd1598a9e5948f3786c395f88114cbcc95a5ac785029753b222b950e6fd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ccd1598a9e5948f3786c395f88114cbcc95a5ac785029753b222b950e6fd9c->enter($__internal_95ccd1598a9e5948f3786c395f88114cbcc95a5ac785029753b222b950e6fd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c0b7ebc08722c909719b10908c9150d6e145a880f6f24142180ebe68dc21fb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b7ebc08722c909719b10908c9150d6e145a880f6f24142180ebe68dc21fb01->enter($__internal_c0b7ebc08722c909719b10908c9150d6e145a880f6f24142180ebe68dc21fb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95ccd1598a9e5948f3786c395f88114cbcc95a5ac785029753b222b950e6fd9c->leave($__internal_95ccd1598a9e5948f3786c395f88114cbcc95a5ac785029753b222b950e6fd9c_prof);

        
        $__internal_c0b7ebc08722c909719b10908c9150d6e145a880f6f24142180ebe68dc21fb01->leave($__internal_c0b7ebc08722c909719b10908c9150d6e145a880f6f24142180ebe68dc21fb01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70ad21afd96e0d140cc4f5acf47fa39cf8f99d6f8dd0e4ab24af31aecfde6f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ad21afd96e0d140cc4f5acf47fa39cf8f99d6f8dd0e4ab24af31aecfde6f96->enter($__internal_70ad21afd96e0d140cc4f5acf47fa39cf8f99d6f8dd0e4ab24af31aecfde6f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aae4cb8a2b0e338eebae3a6612b46e555d90e2a280eca1baaa03035470373e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae4cb8a2b0e338eebae3a6612b46e555d90e2a280eca1baaa03035470373e5c->enter($__internal_aae4cb8a2b0e338eebae3a6612b46e555d90e2a280eca1baaa03035470373e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aae4cb8a2b0e338eebae3a6612b46e555d90e2a280eca1baaa03035470373e5c->leave($__internal_aae4cb8a2b0e338eebae3a6612b46e555d90e2a280eca1baaa03035470373e5c_prof);

        
        $__internal_70ad21afd96e0d140cc4f5acf47fa39cf8f99d6f8dd0e4ab24af31aecfde6f96->leave($__internal_70ad21afd96e0d140cc4f5acf47fa39cf8f99d6f8dd0e4ab24af31aecfde6f96_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_596a6048da2c7020e3e08bb1c6091d56375d751314d0b8e102cd66c0aade7cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596a6048da2c7020e3e08bb1c6091d56375d751314d0b8e102cd66c0aade7cf6->enter($__internal_596a6048da2c7020e3e08bb1c6091d56375d751314d0b8e102cd66c0aade7cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3b080129412c1316669d4dd2883b68f421185632a680de4ce32defdd577d71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b080129412c1316669d4dd2883b68f421185632a680de4ce32defdd577d71a->enter($__internal_a3b080129412c1316669d4dd2883b68f421185632a680de4ce32defdd577d71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3b080129412c1316669d4dd2883b68f421185632a680de4ce32defdd577d71a->leave($__internal_a3b080129412c1316669d4dd2883b68f421185632a680de4ce32defdd577d71a_prof);

        
        $__internal_596a6048da2c7020e3e08bb1c6091d56375d751314d0b8e102cd66c0aade7cf6->leave($__internal_596a6048da2c7020e3e08bb1c6091d56375d751314d0b8e102cd66c0aade7cf6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d36ca3130a51a91994ad5b51ea801f39d47d28005a783e06ac3c5253ee51415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d36ca3130a51a91994ad5b51ea801f39d47d28005a783e06ac3c5253ee51415->enter($__internal_4d36ca3130a51a91994ad5b51ea801f39d47d28005a783e06ac3c5253ee51415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d3d6ec7508ebf835a849aae6185afbcf0f40b7b93f8c32c98fd1c37c55f0a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3d6ec7508ebf835a849aae6185afbcf0f40b7b93f8c32c98fd1c37c55f0a4a->enter($__internal_6d3d6ec7508ebf835a849aae6185afbcf0f40b7b93f8c32c98fd1c37c55f0a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d3d6ec7508ebf835a849aae6185afbcf0f40b7b93f8c32c98fd1c37c55f0a4a->leave($__internal_6d3d6ec7508ebf835a849aae6185afbcf0f40b7b93f8c32c98fd1c37c55f0a4a_prof);

        
        $__internal_4d36ca3130a51a91994ad5b51ea801f39d47d28005a783e06ac3c5253ee51415->leave($__internal_4d36ca3130a51a91994ad5b51ea801f39d47d28005a783e06ac3c5253ee51415_prof);

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
