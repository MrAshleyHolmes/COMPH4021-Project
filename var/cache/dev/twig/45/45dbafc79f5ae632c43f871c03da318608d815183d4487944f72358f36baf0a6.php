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
        $__internal_535f878c36f03072b9090a3a645f09cdd6d71c458db37a4edc2cc15827cee611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535f878c36f03072b9090a3a645f09cdd6d71c458db37a4edc2cc15827cee611->enter($__internal_535f878c36f03072b9090a3a645f09cdd6d71c458db37a4edc2cc15827cee611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:profile.html.twig"));

        $__internal_68791b215c11eb227a235685a4b09fa1dfb055ac0ace4459e17344aadad15e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68791b215c11eb227a235685a4b09fa1dfb055ac0ace4459e17344aadad15e41->enter($__internal_68791b215c11eb227a235685a4b09fa1dfb055ac0ace4459e17344aadad15e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_535f878c36f03072b9090a3a645f09cdd6d71c458db37a4edc2cc15827cee611->leave($__internal_535f878c36f03072b9090a3a645f09cdd6d71c458db37a4edc2cc15827cee611_prof);

        
        $__internal_68791b215c11eb227a235685a4b09fa1dfb055ac0ace4459e17344aadad15e41->leave($__internal_68791b215c11eb227a235685a4b09fa1dfb055ac0ace4459e17344aadad15e41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5494481770a1357d1c2e709e87896b027c457d70524809e271b5d1e055d7af9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5494481770a1357d1c2e709e87896b027c457d70524809e271b5d1e055d7af9e->enter($__internal_5494481770a1357d1c2e709e87896b027c457d70524809e271b5d1e055d7af9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_832a3bf5ee06637b2bff3afeaa9ccaf0ac0159fb8a702e9e71e34cdc4e2ac7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832a3bf5ee06637b2bff3afeaa9ccaf0ac0159fb8a702e9e71e34cdc4e2ac7eb->enter($__internal_832a3bf5ee06637b2bff3afeaa9ccaf0ac0159fb8a702e9e71e34cdc4e2ac7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:profile";
        
        $__internal_832a3bf5ee06637b2bff3afeaa9ccaf0ac0159fb8a702e9e71e34cdc4e2ac7eb->leave($__internal_832a3bf5ee06637b2bff3afeaa9ccaf0ac0159fb8a702e9e71e34cdc4e2ac7eb_prof);

        
        $__internal_5494481770a1357d1c2e709e87896b027c457d70524809e271b5d1e055d7af9e->leave($__internal_5494481770a1357d1c2e709e87896b027c457d70524809e271b5d1e055d7af9e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_03918280a300530efede397752f17f8d76618a467bc45a493f34ce40611e5272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03918280a300530efede397752f17f8d76618a467bc45a493f34ce40611e5272->enter($__internal_03918280a300530efede397752f17f8d76618a467bc45a493f34ce40611e5272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cbc7b991b88b1618057d10eb174c90a5b13e8d2577acfc862a9ba70782c30df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbc7b991b88b1618057d10eb174c90a5b13e8d2577acfc862a9ba70782c30df->enter($__internal_9cbc7b991b88b1618057d10eb174c90a5b13e8d2577acfc862a9ba70782c30df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
<h2>Welcome to the Pages:profile page</h2>
    </div>
";
        
        $__internal_9cbc7b991b88b1618057d10eb174c90a5b13e8d2577acfc862a9ba70782c30df->leave($__internal_9cbc7b991b88b1618057d10eb174c90a5b13e8d2577acfc862a9ba70782c30df_prof);

        
        $__internal_03918280a300530efede397752f17f8d76618a467bc45a493f34ce40611e5272->leave($__internal_03918280a300530efede397752f17f8d76618a467bc45a493f34ce40611e5272_prof);

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
