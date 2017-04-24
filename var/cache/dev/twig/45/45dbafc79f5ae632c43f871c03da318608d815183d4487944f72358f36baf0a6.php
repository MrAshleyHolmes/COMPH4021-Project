<?php

/* AppBundle:Pages:profile.html.twig */
class __TwigTemplate_c4816c16aac83bdc25865d1d86a19a9dc4a5a6f37d08df5c2104a0c9f72c71cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Pages:profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed7c08d7a61d02be07d33f2a9690265219769e8ba285b6b59db47c4903bf89f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7c08d7a61d02be07d33f2a9690265219769e8ba285b6b59db47c4903bf89f7->enter($__internal_ed7c08d7a61d02be07d33f2a9690265219769e8ba285b6b59db47c4903bf89f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:profile.html.twig"));

        $__internal_4c27f9395fe3b46fc05c6e0e2403c0d65752ef773eadbb33a96fbab327cf80ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c27f9395fe3b46fc05c6e0e2403c0d65752ef773eadbb33a96fbab327cf80ff->enter($__internal_4c27f9395fe3b46fc05c6e0e2403c0d65752ef773eadbb33a96fbab327cf80ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed7c08d7a61d02be07d33f2a9690265219769e8ba285b6b59db47c4903bf89f7->leave($__internal_ed7c08d7a61d02be07d33f2a9690265219769e8ba285b6b59db47c4903bf89f7_prof);

        
        $__internal_4c27f9395fe3b46fc05c6e0e2403c0d65752ef773eadbb33a96fbab327cf80ff->leave($__internal_4c27f9395fe3b46fc05c6e0e2403c0d65752ef773eadbb33a96fbab327cf80ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ff053b37906da3a4fea282ba7aa9aa24880acbe0d01ffa355588f7184dc599e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff053b37906da3a4fea282ba7aa9aa24880acbe0d01ffa355588f7184dc599e->enter($__internal_5ff053b37906da3a4fea282ba7aa9aa24880acbe0d01ffa355588f7184dc599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_faaab3dfd9e0584daa1bf64dc8b9d256eadb32e6b5b17bba7faca2997504a63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faaab3dfd9e0584daa1bf64dc8b9d256eadb32e6b5b17bba7faca2997504a63e->enter($__internal_faaab3dfd9e0584daa1bf64dc8b9d256eadb32e6b5b17bba7faca2997504a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:profile";
        
        $__internal_faaab3dfd9e0584daa1bf64dc8b9d256eadb32e6b5b17bba7faca2997504a63e->leave($__internal_faaab3dfd9e0584daa1bf64dc8b9d256eadb32e6b5b17bba7faca2997504a63e_prof);

        
        $__internal_5ff053b37906da3a4fea282ba7aa9aa24880acbe0d01ffa355588f7184dc599e->leave($__internal_5ff053b37906da3a4fea282ba7aa9aa24880acbe0d01ffa355588f7184dc599e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63a63630d71d1cce3a2cbc8cf3c2d87d365225cac319783ca84ba8523d05ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63a63630d71d1cce3a2cbc8cf3c2d87d365225cac319783ca84ba8523d05ccd->enter($__internal_e63a63630d71d1cce3a2cbc8cf3c2d87d365225cac319783ca84ba8523d05ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_baf640d4bfa5ff7b3f9a990c7f8ec7199d11306132455d5fa0698b1ba4b6c7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf640d4bfa5ff7b3f9a990c7f8ec7199d11306132455d5fa0698b1ba4b6c7e7->enter($__internal_baf640d4bfa5ff7b3f9a990c7f8ec7199d11306132455d5fa0698b1ba4b6c7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
<h2>Welcome to the Pages:profile page</h2>
    </div>
";
        
        $__internal_baf640d4bfa5ff7b3f9a990c7f8ec7199d11306132455d5fa0698b1ba4b6c7e7->leave($__internal_baf640d4bfa5ff7b3f9a990c7f8ec7199d11306132455d5fa0698b1ba4b6c7e7_prof);

        
        $__internal_e63a63630d71d1cce3a2cbc8cf3c2d87d365225cac319783ca84ba8523d05ccd->leave($__internal_e63a63630d71d1cce3a2cbc8cf3c2d87d365225cac319783ca84ba8523d05ccd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pages:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Pages:profile{% endblock %}

{% block body %}
    <div class=\"jumbotron\">
<h2>Welcome to the Pages:profile page</h2>
    </div>
{% endblock %}
", "AppBundle:Pages:profile.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/src/AppBundle/Resources/views/Pages/profile.html.twig");
    }
}
