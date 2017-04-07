<?php

/* AppBundle:Pages:generate.html.twig */
class __TwigTemplate_b662369bb6bde285ef9a87487f3ae566d556c983b828bb0ada590570017e3f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Pages:generate.html.twig", 1);
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
        $__internal_828d47a2e00a8d9b45582ce2f2ce5e2f5bf4798d05e4aedb046c439c6a915110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828d47a2e00a8d9b45582ce2f2ce5e2f5bf4798d05e4aedb046c439c6a915110->enter($__internal_828d47a2e00a8d9b45582ce2f2ce5e2f5bf4798d05e4aedb046c439c6a915110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:generate.html.twig"));

        $__internal_574411884c04ae166f5bb29144bd320bd674a5fb48473311ca80a89ad75f3909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574411884c04ae166f5bb29144bd320bd674a5fb48473311ca80a89ad75f3909->enter($__internal_574411884c04ae166f5bb29144bd320bd674a5fb48473311ca80a89ad75f3909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:generate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_828d47a2e00a8d9b45582ce2f2ce5e2f5bf4798d05e4aedb046c439c6a915110->leave($__internal_828d47a2e00a8d9b45582ce2f2ce5e2f5bf4798d05e4aedb046c439c6a915110_prof);

        
        $__internal_574411884c04ae166f5bb29144bd320bd674a5fb48473311ca80a89ad75f3909->leave($__internal_574411884c04ae166f5bb29144bd320bd674a5fb48473311ca80a89ad75f3909_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3d6722cf87515c540391f9f048a8a866607df9d8c58865b52246d45972f23d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d6722cf87515c540391f9f048a8a866607df9d8c58865b52246d45972f23d2->enter($__internal_c3d6722cf87515c540391f9f048a8a866607df9d8c58865b52246d45972f23d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abde753d0a6c3b393b9c46c056106e01ba723bdb4161023b44874c8b7a99358e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abde753d0a6c3b393b9c46c056106e01ba723bdb4161023b44874c8b7a99358e->enter($__internal_abde753d0a6c3b393b9c46c056106e01ba723bdb4161023b44874c8b7a99358e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:generate";
        
        $__internal_abde753d0a6c3b393b9c46c056106e01ba723bdb4161023b44874c8b7a99358e->leave($__internal_abde753d0a6c3b393b9c46c056106e01ba723bdb4161023b44874c8b7a99358e_prof);

        
        $__internal_c3d6722cf87515c540391f9f048a8a866607df9d8c58865b52246d45972f23d2->leave($__internal_c3d6722cf87515c540391f9f048a8a866607df9d8c58865b52246d45972f23d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_53db9d9ab627553358fa2c439e6403813bf4f58bb91c3b7b49f355c33c6cf94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53db9d9ab627553358fa2c439e6403813bf4f58bb91c3b7b49f355c33c6cf94e->enter($__internal_53db9d9ab627553358fa2c439e6403813bf4f58bb91c3b7b49f355c33c6cf94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc0bc9b9f789d23a3a838b606ffa2517ed0cc8ab2ba444a91601e451124c7885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0bc9b9f789d23a3a838b606ffa2517ed0cc8ab2ba444a91601e451124c7885->enter($__internal_fc0bc9b9f789d23a3a838b606ffa2517ed0cc8ab2ba444a91601e451124c7885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
<h2>Welcome to the Pages:generate page</h2>
    </div>
";
        
        $__internal_fc0bc9b9f789d23a3a838b606ffa2517ed0cc8ab2ba444a91601e451124c7885->leave($__internal_fc0bc9b9f789d23a3a838b606ffa2517ed0cc8ab2ba444a91601e451124c7885_prof);

        
        $__internal_53db9d9ab627553358fa2c439e6403813bf4f58bb91c3b7b49f355c33c6cf94e->leave($__internal_53db9d9ab627553358fa2c439e6403813bf4f58bb91c3b7b49f355c33c6cf94e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pages:generate.html.twig";
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
", "AppBundle:Pages:generate.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/src/AppBundle/Resources/views/Pages/generate.html.twig");
    }
}
