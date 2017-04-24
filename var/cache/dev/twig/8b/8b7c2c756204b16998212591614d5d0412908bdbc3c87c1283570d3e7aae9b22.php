<?php

/* AppBundle:Pages:contact.html.twig */
class __TwigTemplate_8cb5f166ee35f539ab31c911b6fe456ab2eda85343ed9388ff6a6bd759a3a675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Pages:contact.html.twig", 1);
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
        $__internal_8e2c028195e3fc98a8993f8cd7f3e92ae8cb97e66ad76d052a67d7ac2b1fd742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2c028195e3fc98a8993f8cd7f3e92ae8cb97e66ad76d052a67d7ac2b1fd742->enter($__internal_8e2c028195e3fc98a8993f8cd7f3e92ae8cb97e66ad76d052a67d7ac2b1fd742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:contact.html.twig"));

        $__internal_71f3007bbe4c11b36f2f48776f7e98d46c0ff85ffb39cdc817f12d21d1806039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f3007bbe4c11b36f2f48776f7e98d46c0ff85ffb39cdc817f12d21d1806039->enter($__internal_71f3007bbe4c11b36f2f48776f7e98d46c0ff85ffb39cdc817f12d21d1806039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2c028195e3fc98a8993f8cd7f3e92ae8cb97e66ad76d052a67d7ac2b1fd742->leave($__internal_8e2c028195e3fc98a8993f8cd7f3e92ae8cb97e66ad76d052a67d7ac2b1fd742_prof);

        
        $__internal_71f3007bbe4c11b36f2f48776f7e98d46c0ff85ffb39cdc817f12d21d1806039->leave($__internal_71f3007bbe4c11b36f2f48776f7e98d46c0ff85ffb39cdc817f12d21d1806039_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec859e2149f8b00087d26a98a86cd179f6b3681ca3138fbd2501d245a86418a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec859e2149f8b00087d26a98a86cd179f6b3681ca3138fbd2501d245a86418a4->enter($__internal_ec859e2149f8b00087d26a98a86cd179f6b3681ca3138fbd2501d245a86418a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec280a469a4998e9d12731c106b523f0109985c885c30a1d961120ff70e29364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec280a469a4998e9d12731c106b523f0109985c885c30a1d961120ff70e29364->enter($__internal_ec280a469a4998e9d12731c106b523f0109985c885c30a1d961120ff70e29364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:contact";
        
        $__internal_ec280a469a4998e9d12731c106b523f0109985c885c30a1d961120ff70e29364->leave($__internal_ec280a469a4998e9d12731c106b523f0109985c885c30a1d961120ff70e29364_prof);

        
        $__internal_ec859e2149f8b00087d26a98a86cd179f6b3681ca3138fbd2501d245a86418a4->leave($__internal_ec859e2149f8b00087d26a98a86cd179f6b3681ca3138fbd2501d245a86418a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ebc909c0bb423319f5fe0141cfc85954e0c38aabc88a3fa2ab8ea325c7ec50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebc909c0bb423319f5fe0141cfc85954e0c38aabc88a3fa2ab8ea325c7ec50f->enter($__internal_3ebc909c0bb423319f5fe0141cfc85954e0c38aabc88a3fa2ab8ea325c7ec50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67e256ec30bc0793a217a9f3ab76a177e4fe246463eed0f875fc7fab2c3b6567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e256ec30bc0793a217a9f3ab76a177e4fe246463eed0f875fc7fab2c3b6567->enter($__internal_67e256ec30bc0793a217a9f3ab76a177e4fe246463eed0f875fc7fab2c3b6567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
<h2>Welcome to the Pages:contact page</h2>
    </div>
";
        
        $__internal_67e256ec30bc0793a217a9f3ab76a177e4fe246463eed0f875fc7fab2c3b6567->leave($__internal_67e256ec30bc0793a217a9f3ab76a177e4fe246463eed0f875fc7fab2c3b6567_prof);

        
        $__internal_3ebc909c0bb423319f5fe0141cfc85954e0c38aabc88a3fa2ab8ea325c7ec50f->leave($__internal_3ebc909c0bb423319f5fe0141cfc85954e0c38aabc88a3fa2ab8ea325c7ec50f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pages:contact.html.twig";
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

{% block title %}AppBundle:Pages:contact{% endblock %}

{% block body %}
    <div class=\"jumbotron\">
<h2>Welcome to the Pages:contact page</h2>
    </div>
{% endblock %}
", "AppBundle:Pages:contact.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/src/AppBundle/Resources/views/Pages/contact.html.twig");
    }
}
