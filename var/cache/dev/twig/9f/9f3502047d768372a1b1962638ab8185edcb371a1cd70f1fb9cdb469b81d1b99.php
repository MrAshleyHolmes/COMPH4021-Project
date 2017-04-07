<?php

/* AppBundle:Pages:orders.html.twig */
class __TwigTemplate_7bacdfbcc20b1febf728085d903e4f91041376f9b83a76878a2b828b694833dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Pages:orders.html.twig", 1);
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
        $__internal_13b07410d5ba487fd00e707a13b9faf0fbd4668e011a3beae5b439d60c83fc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b07410d5ba487fd00e707a13b9faf0fbd4668e011a3beae5b439d60c83fc55->enter($__internal_13b07410d5ba487fd00e707a13b9faf0fbd4668e011a3beae5b439d60c83fc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:orders.html.twig"));

        $__internal_2a366f38e6ae388d3edd6bad6b2381e9bfd9f2e73ab529cef3114f71503db0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a366f38e6ae388d3edd6bad6b2381e9bfd9f2e73ab529cef3114f71503db0d1->enter($__internal_2a366f38e6ae388d3edd6bad6b2381e9bfd9f2e73ab529cef3114f71503db0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b07410d5ba487fd00e707a13b9faf0fbd4668e011a3beae5b439d60c83fc55->leave($__internal_13b07410d5ba487fd00e707a13b9faf0fbd4668e011a3beae5b439d60c83fc55_prof);

        
        $__internal_2a366f38e6ae388d3edd6bad6b2381e9bfd9f2e73ab529cef3114f71503db0d1->leave($__internal_2a366f38e6ae388d3edd6bad6b2381e9bfd9f2e73ab529cef3114f71503db0d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c837638d53579a7f33cf4ecbd7978bb1e8904305f842bc122d127f60ffc865e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c837638d53579a7f33cf4ecbd7978bb1e8904305f842bc122d127f60ffc865e3->enter($__internal_c837638d53579a7f33cf4ecbd7978bb1e8904305f842bc122d127f60ffc865e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_697ad0953fd6eaf111a52620c355ce18f45ae73d80752a292ecc98c478dbe720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697ad0953fd6eaf111a52620c355ce18f45ae73d80752a292ecc98c478dbe720->enter($__internal_697ad0953fd6eaf111a52620c355ce18f45ae73d80752a292ecc98c478dbe720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:generate";
        
        $__internal_697ad0953fd6eaf111a52620c355ce18f45ae73d80752a292ecc98c478dbe720->leave($__internal_697ad0953fd6eaf111a52620c355ce18f45ae73d80752a292ecc98c478dbe720_prof);

        
        $__internal_c837638d53579a7f33cf4ecbd7978bb1e8904305f842bc122d127f60ffc865e3->leave($__internal_c837638d53579a7f33cf4ecbd7978bb1e8904305f842bc122d127f60ffc865e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81bf75ed95ccf54cc82b9f1f17e630258a75c6784fa6acd0d3d3c3c35034e0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bf75ed95ccf54cc82b9f1f17e630258a75c6784fa6acd0d3d3c3c35034e0ba->enter($__internal_81bf75ed95ccf54cc82b9f1f17e630258a75c6784fa6acd0d3d3c3c35034e0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d53c5b7e4bbc8aa25662694c736993d5b413344714eb629253bc4b84d95fe4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53c5b7e4bbc8aa25662694c736993d5b413344714eb629253bc4b84d95fe4fd->enter($__internal_d53c5b7e4bbc8aa25662694c736993d5b413344714eb629253bc4b84d95fe4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
<h2>Welcome to the Pages:generate page</h2>
    </div>
";
        
        $__internal_d53c5b7e4bbc8aa25662694c736993d5b413344714eb629253bc4b84d95fe4fd->leave($__internal_d53c5b7e4bbc8aa25662694c736993d5b413344714eb629253bc4b84d95fe4fd_prof);

        
        $__internal_81bf75ed95ccf54cc82b9f1f17e630258a75c6784fa6acd0d3d3c3c35034e0ba->leave($__internal_81bf75ed95ccf54cc82b9f1f17e630258a75c6784fa6acd0d3d3c3c35034e0ba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pages:orders.html.twig";
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

{% block title %}AppBundle:Pages:generate{% endblock %}

{% block body %}
    <div class=\"jumbotron\">
<h2>Welcome to the Pages:generate page</h2>
    </div>
{% endblock %}
", "AppBundle:Pages:orders.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/src/AppBundle/Resources/views/Pages/orders.html.twig");
    }
}
