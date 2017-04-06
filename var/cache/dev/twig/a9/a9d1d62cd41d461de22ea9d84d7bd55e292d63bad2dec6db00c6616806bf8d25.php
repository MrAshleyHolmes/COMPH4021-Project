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
        $__internal_614ad22f89153ea305a4179d9dc8c5a61d66985e4f69462c76b5d9960cd589ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614ad22f89153ea305a4179d9dc8c5a61d66985e4f69462c76b5d9960cd589ce->enter($__internal_614ad22f89153ea305a4179d9dc8c5a61d66985e4f69462c76b5d9960cd589ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:about.html.twig"));

        $__internal_4a8a7af492566bd139861c39a7ec4d07a5548815f1b509a9570ce837b1bef3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8a7af492566bd139861c39a7ec4d07a5548815f1b509a9570ce837b1bef3f4->enter($__internal_4a8a7af492566bd139861c39a7ec4d07a5548815f1b509a9570ce837b1bef3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_614ad22f89153ea305a4179d9dc8c5a61d66985e4f69462c76b5d9960cd589ce->leave($__internal_614ad22f89153ea305a4179d9dc8c5a61d66985e4f69462c76b5d9960cd589ce_prof);

        
        $__internal_4a8a7af492566bd139861c39a7ec4d07a5548815f1b509a9570ce837b1bef3f4->leave($__internal_4a8a7af492566bd139861c39a7ec4d07a5548815f1b509a9570ce837b1bef3f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e417436d3cc0a01a05c80b3a8abe6657a7cee1a534969287f649ce233b56fbf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e417436d3cc0a01a05c80b3a8abe6657a7cee1a534969287f649ce233b56fbf7->enter($__internal_e417436d3cc0a01a05c80b3a8abe6657a7cee1a534969287f649ce233b56fbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed07a5347c8671571acadedd21f78ec9fc5e4152b43b9aa11ab5200614b6c2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed07a5347c8671571acadedd21f78ec9fc5e4152b43b9aa11ab5200614b6c2a6->enter($__internal_ed07a5347c8671571acadedd21f78ec9fc5e4152b43b9aa11ab5200614b6c2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:about";
        
        $__internal_ed07a5347c8671571acadedd21f78ec9fc5e4152b43b9aa11ab5200614b6c2a6->leave($__internal_ed07a5347c8671571acadedd21f78ec9fc5e4152b43b9aa11ab5200614b6c2a6_prof);

        
        $__internal_e417436d3cc0a01a05c80b3a8abe6657a7cee1a534969287f649ce233b56fbf7->leave($__internal_e417436d3cc0a01a05c80b3a8abe6657a7cee1a534969287f649ce233b56fbf7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_534c48668967a900b05eeef42b1c3cfa5081170ff759f8edd6064154d6a9a720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534c48668967a900b05eeef42b1c3cfa5081170ff759f8edd6064154d6a9a720->enter($__internal_534c48668967a900b05eeef42b1c3cfa5081170ff759f8edd6064154d6a9a720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d44a5eab62f73577302c7cbf9c716e1c7844ed4694988288aced1b0ecb0c7e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44a5eab62f73577302c7cbf9c716e1c7844ed4694988288aced1b0ecb0c7e28->enter($__internal_d44a5eab62f73577302c7cbf9c716e1c7844ed4694988288aced1b0ecb0c7e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
<h2>Welcome to the Pages:about page</h2>
    </div>
";
        
        $__internal_d44a5eab62f73577302c7cbf9c716e1c7844ed4694988288aced1b0ecb0c7e28->leave($__internal_d44a5eab62f73577302c7cbf9c716e1c7844ed4694988288aced1b0ecb0c7e28_prof);

        
        $__internal_534c48668967a900b05eeef42b1c3cfa5081170ff759f8edd6064154d6a9a720->leave($__internal_534c48668967a900b05eeef42b1c3cfa5081170ff759f8edd6064154d6a9a720_prof);

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
