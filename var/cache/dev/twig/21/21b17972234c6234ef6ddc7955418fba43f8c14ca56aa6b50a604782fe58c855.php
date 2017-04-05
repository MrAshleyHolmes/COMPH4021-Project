<?php

/* security/mylogin.html.twig */
class __TwigTemplate_539e8bcf519522fcacb60ed985cce23bf9873128d99c21175d926353dc5cf465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/mylogin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee55c197e5096642506dfabecf2b1ec9dcd0656b5ec92677622fd36c9960a30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee55c197e5096642506dfabecf2b1ec9dcd0656b5ec92677622fd36c9960a30f->enter($__internal_ee55c197e5096642506dfabecf2b1ec9dcd0656b5ec92677622fd36c9960a30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/mylogin.html.twig"));

        $__internal_9544cba695cc9698879210e74176f0c5e5b8b33b18d7cbaef6ec5e94f9a33b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9544cba695cc9698879210e74176f0c5e5b8b33b18d7cbaef6ec5e94f9a33b05->enter($__internal_9544cba695cc9698879210e74176f0c5e5b8b33b18d7cbaef6ec5e94f9a33b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/mylogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee55c197e5096642506dfabecf2b1ec9dcd0656b5ec92677622fd36c9960a30f->leave($__internal_ee55c197e5096642506dfabecf2b1ec9dcd0656b5ec92677622fd36c9960a30f_prof);

        
        $__internal_9544cba695cc9698879210e74176f0c5e5b8b33b18d7cbaef6ec5e94f9a33b05->leave($__internal_9544cba695cc9698879210e74176f0c5e5b8b33b18d7cbaef6ec5e94f9a33b05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccadfa15ed6a51bc06a60890e97bc80a7fcfc62aa3cd88f5cdb17f928c08500f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccadfa15ed6a51bc06a60890e97bc80a7fcfc62aa3cd88f5cdb17f928c08500f->enter($__internal_ccadfa15ed6a51bc06a60890e97bc80a7fcfc62aa3cd88f5cdb17f928c08500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84bb2842a11e846e459509859fb7feb082504c19124087075940f8f5e16854c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bb2842a11e846e459509859fb7feb082504c19124087075940f8f5e16854c7->enter($__internal_84bb2842a11e846e459509859fb7feb082504c19124087075940f8f5e16854c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>My login!</h2>
    </div>
";
        
        $__internal_84bb2842a11e846e459509859fb7feb082504c19124087075940f8f5e16854c7->leave($__internal_84bb2842a11e846e459509859fb7feb082504c19124087075940f8f5e16854c7_prof);

        
        $__internal_ccadfa15ed6a51bc06a60890e97bc80a7fcfc62aa3cd88f5cdb17f928c08500f->leave($__internal_ccadfa15ed6a51bc06a60890e97bc80a7fcfc62aa3cd88f5cdb17f928c08500f_prof);

    }

    public function getTemplateName()
    {
        return "security/mylogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"jumbotron\">
        <h2>My login!</h2>
    </div>
{% endblock %}", "security/mylogin.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/security/mylogin.html.twig");
    }
}
