<?php

/* AppBundle:Task:task.html.twig */
class __TwigTemplate_5131299516de7a441cdc75b134c3208c1f9fd7acc222a00369813f57e9271534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:task.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83d228291b69d4efa005aadff8ea1e52cdcee3cbd3030da690931092f183e2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d228291b69d4efa005aadff8ea1e52cdcee3cbd3030da690931092f183e2f4->enter($__internal_83d228291b69d4efa005aadff8ea1e52cdcee3cbd3030da690931092f183e2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:task.html.twig"));

        $__internal_3ffdaab995954d71ab5e26dbb7a1aaf344d4f8a8b71200e5524e508dad26947f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffdaab995954d71ab5e26dbb7a1aaf344d4f8a8b71200e5524e508dad26947f->enter($__internal_3ffdaab995954d71ab5e26dbb7a1aaf344d4f8a8b71200e5524e508dad26947f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:task.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d228291b69d4efa005aadff8ea1e52cdcee3cbd3030da690931092f183e2f4->leave($__internal_83d228291b69d4efa005aadff8ea1e52cdcee3cbd3030da690931092f183e2f4_prof);

        
        $__internal_3ffdaab995954d71ab5e26dbb7a1aaf344d4f8a8b71200e5524e508dad26947f->leave($__internal_3ffdaab995954d71ab5e26dbb7a1aaf344d4f8a8b71200e5524e508dad26947f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee17fdc50f871fd00c136bcb8dfcbf18fb4ac91fb828b111ff08d10bb26e1f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee17fdc50f871fd00c136bcb8dfcbf18fb4ac91fb828b111ff08d10bb26e1f5b->enter($__internal_ee17fdc50f871fd00c136bcb8dfcbf18fb4ac91fb828b111ff08d10bb26e1f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37fb73b76577f9e3c5ad5ae38d1002f9e3f583d259e5da1969c74e8f285212a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fb73b76577f9e3c5ad5ae38d1002f9e3f583d259e5da1969c74e8f285212a9->enter($__internal_37fb73b76577f9e3c5ad5ae38d1002f9e3f583d259e5da1969c74e8f285212a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: Question Page</h2>
    </div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "question", array()), 'row');
        echo "

<ul class=\"tags\" data-prototype=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
    ";
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 14
            echo "        <li>";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["tag"], "part", array()), 'row');
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_37fb73b76577f9e3c5ad5ae38d1002f9e3f583d259e5da1969c74e8f285212a9->leave($__internal_37fb73b76577f9e3c5ad5ae38d1002f9e3f583d259e5da1969c74e8f285212a9_prof);

        
        $__internal_ee17fdc50f871fd00c136bcb8dfcbf18fb4ac91fb828b111ff08d10bb26e1f5b->leave($__internal_ee17fdc50f871fd00c136bcb8dfcbf18fb4ac91fb828b111ff08d10bb26e1f5b_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_974a761e5cf2f2119e8e8854c91dc2c746f2097382a9d907e8f57da8f2793dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974a761e5cf2f2119e8e8854c91dc2c746f2097382a9d907e8f57da8f2793dde->enter($__internal_974a761e5cf2f2119e8e8854c91dc2c746f2097382a9d907e8f57da8f2793dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0f147bcfd84af5788237222f0622aa281ff26b85d2082dc892b272dd028d977a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f147bcfd84af5788237222f0622aa281ff26b85d2082dc892b272dd028d977a->enter($__internal_0f147bcfd84af5788237222f0622aa281ff26b85d2082dc892b272dd028d977a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tags.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0f147bcfd84af5788237222f0622aa281ff26b85d2082dc892b272dd028d977a->leave($__internal_0f147bcfd84af5788237222f0622aa281ff26b85d2082dc892b272dd028d977a_prof);

        
        $__internal_974a761e5cf2f2119e8e8854c91dc2c746f2097382a9d907e8f57da8f2793dde->leave($__internal_974a761e5cf2f2119e8e8854c91dc2c746f2097382a9d907e8f57da8f2793dde_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  109 => 23,  100 => 22,  87 => 18,  83 => 16,  74 => 14,  69 => 13,  65 => 11,  59 => 9,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: Question Page</h2>
    </div>
{{ form_start(form) }}
    {# render the task's only field: description #}
    {{ form_row(form.question) }}

<ul class=\"tags\" data-prototype=\"{{ form_widget(form.tags.vars.prototype)|e('html_attr') }}\">
    {# iterate over each existing tag and render its only field: name #}
    {% for tag in form.tags %}
        <li>{{ form_row(tag.part) }}</li>
    {% endfor %}
</ul>
    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
{{ form_end(form) }}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/tags.js') }}\"></script>
{% endblock %}
", "AppBundle:Task:task.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/src/AppBundle/Resources/views/Task/task.html.twig");
    }
}
