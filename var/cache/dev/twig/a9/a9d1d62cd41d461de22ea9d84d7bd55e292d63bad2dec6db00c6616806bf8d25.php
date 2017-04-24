<?php

/* AppBundle:Pages:about.html.twig */
class __TwigTemplate_71117be4d0785f74bf23da16efcc6477350080cf845505c0c80d7adaba9af70a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Pages:about.html.twig", 1);
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
        $__internal_1ac5916bd4c7dac1950caa90999d1854e06e3774b8179859a0204985a375bb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac5916bd4c7dac1950caa90999d1854e06e3774b8179859a0204985a375bb66->enter($__internal_1ac5916bd4c7dac1950caa90999d1854e06e3774b8179859a0204985a375bb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:about.html.twig"));

        $__internal_44f77662a18b75a134ab3713b402cef624e9af9a41a46e63e6022312c8b34c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f77662a18b75a134ab3713b402cef624e9af9a41a46e63e6022312c8b34c02->enter($__internal_44f77662a18b75a134ab3713b402cef624e9af9a41a46e63e6022312c8b34c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac5916bd4c7dac1950caa90999d1854e06e3774b8179859a0204985a375bb66->leave($__internal_1ac5916bd4c7dac1950caa90999d1854e06e3774b8179859a0204985a375bb66_prof);

        
        $__internal_44f77662a18b75a134ab3713b402cef624e9af9a41a46e63e6022312c8b34c02->leave($__internal_44f77662a18b75a134ab3713b402cef624e9af9a41a46e63e6022312c8b34c02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f25c78d00253195f7a62b4f997db341661f01882522f61ec876fce748e5ce516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25c78d00253195f7a62b4f997db341661f01882522f61ec876fce748e5ce516->enter($__internal_f25c78d00253195f7a62b4f997db341661f01882522f61ec876fce748e5ce516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7349d2d6c3457f189efe1588b213fe400156836abfba233efc9f71453252740b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7349d2d6c3457f189efe1588b213fe400156836abfba233efc9f71453252740b->enter($__internal_7349d2d6c3457f189efe1588b213fe400156836abfba233efc9f71453252740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:about";
        
        $__internal_7349d2d6c3457f189efe1588b213fe400156836abfba233efc9f71453252740b->leave($__internal_7349d2d6c3457f189efe1588b213fe400156836abfba233efc9f71453252740b_prof);

        
        $__internal_f25c78d00253195f7a62b4f997db341661f01882522f61ec876fce748e5ce516->leave($__internal_f25c78d00253195f7a62b4f997db341661f01882522f61ec876fce748e5ce516_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_94298e1a8e9e181e3821c93835ad927f48b1a548f1bd8ce5bee56207f81ba892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94298e1a8e9e181e3821c93835ad927f48b1a548f1bd8ce5bee56207f81ba892->enter($__internal_94298e1a8e9e181e3821c93835ad927f48b1a548f1bd8ce5bee56207f81ba892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87a275b43d6f4dc1d1136928a189756b9c50b5cdf62429d4eb3a7bda39d4d4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a275b43d6f4dc1d1136928a189756b9c50b5cdf62429d4eb3a7bda39d4d4d0->enter($__internal_87a275b43d6f4dc1d1136928a189756b9c50b5cdf62429d4eb3a7bda39d4d4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
<h2>Welcome to the Pages:about page</h2>
    </div>
";
        
        $__internal_87a275b43d6f4dc1d1136928a189756b9c50b5cdf62429d4eb3a7bda39d4d4d0->leave($__internal_87a275b43d6f4dc1d1136928a189756b9c50b5cdf62429d4eb3a7bda39d4d4d0_prof);

        
        $__internal_94298e1a8e9e181e3821c93835ad927f48b1a548f1bd8ce5bee56207f81ba892->leave($__internal_94298e1a8e9e181e3821c93835ad927f48b1a548f1bd8ce5bee56207f81ba892_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pages:about.html.twig";
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

{% block title %}AppBundle:Pages:about{% endblock %}

{% block body %}
    <div class=\"jumbotron\">
<h2>Welcome to the Pages:about page</h2>
    </div>
{% endblock %}
", "AppBundle:Pages:about.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/src/AppBundle/Resources/views/Pages/about.html.twig");
    }
}
