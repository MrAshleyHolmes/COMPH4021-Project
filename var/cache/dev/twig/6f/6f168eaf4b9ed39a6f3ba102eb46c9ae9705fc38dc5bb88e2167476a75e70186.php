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
        $__internal_68cc071778c32f4b85af09558ffe313cc7993a7c7f4e3633fe6af07899bab60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cc071778c32f4b85af09558ffe313cc7993a7c7f4e3633fe6af07899bab60e->enter($__internal_68cc071778c32f4b85af09558ffe313cc7993a7c7f4e3633fe6af07899bab60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:task.html.twig"));

        $__internal_d544cd97927aaea86d3361cd613d52579be08f2ad124f918f0e92e089e55015c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d544cd97927aaea86d3361cd613d52579be08f2ad124f918f0e92e089e55015c->enter($__internal_d544cd97927aaea86d3361cd613d52579be08f2ad124f918f0e92e089e55015c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:task.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68cc071778c32f4b85af09558ffe313cc7993a7c7f4e3633fe6af07899bab60e->leave($__internal_68cc071778c32f4b85af09558ffe313cc7993a7c7f4e3633fe6af07899bab60e_prof);

        
        $__internal_d544cd97927aaea86d3361cd613d52579be08f2ad124f918f0e92e089e55015c->leave($__internal_d544cd97927aaea86d3361cd613d52579be08f2ad124f918f0e92e089e55015c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_032e327476aa2207980a325487701104b0cef527f19dc8035c21a58739f98968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032e327476aa2207980a325487701104b0cef527f19dc8035c21a58739f98968->enter($__internal_032e327476aa2207980a325487701104b0cef527f19dc8035c21a58739f98968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9083e48b88df07eb4b92e6bd2c933c3b24b82a56b8d4a11f43dc6ff7953f16b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9083e48b88df07eb4b92e6bd2c933c3b24b82a56b8d4a11f43dc6ff7953f16b7->enter($__internal_9083e48b88df07eb4b92e6bd2c933c3b24b82a56b8d4a11f43dc6ff7953f16b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h3>Tags</h3>
    </div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["tag"], "name", array()), 'row');
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
        
        $__internal_9083e48b88df07eb4b92e6bd2c933c3b24b82a56b8d4a11f43dc6ff7953f16b7->leave($__internal_9083e48b88df07eb4b92e6bd2c933c3b24b82a56b8d4a11f43dc6ff7953f16b7_prof);

        
        $__internal_032e327476aa2207980a325487701104b0cef527f19dc8035c21a58739f98968->leave($__internal_032e327476aa2207980a325487701104b0cef527f19dc8035c21a58739f98968_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef494057e1147d2efac1e3c87866b4d48c61ca7b9c82058706c7660834609447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef494057e1147d2efac1e3c87866b4d48c61ca7b9c82058706c7660834609447->enter($__internal_ef494057e1147d2efac1e3c87866b4d48c61ca7b9c82058706c7660834609447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_07c931447d074b2549aaf2e20341f5fc4971eb97a3022aeb4fefca3f37c22a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c931447d074b2549aaf2e20341f5fc4971eb97a3022aeb4fefca3f37c22a6e->enter($__internal_07c931447d074b2549aaf2e20341f5fc4971eb97a3022aeb4fefca3f37c22a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tags.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_07c931447d074b2549aaf2e20341f5fc4971eb97a3022aeb4fefca3f37c22a6e->leave($__internal_07c931447d074b2549aaf2e20341f5fc4971eb97a3022aeb4fefca3f37c22a6e_prof);

        
        $__internal_ef494057e1147d2efac1e3c87866b4d48c61ca7b9c82058706c7660834609447->leave($__internal_ef494057e1147d2efac1e3c87866b4d48c61ca7b9c82058706c7660834609447_prof);

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
        <h3>Tags</h3>
    </div>
{{ form_start(form) }}
    {# render the task's only field: description #}
    {{ form_row(form.description) }}

<ul class=\"tags\" data-prototype=\"{{ form_widget(form.tags.vars.prototype)|e('html_attr') }}\">
    {# iterate over each existing tag and render its only field: name #}
    {% for tag in form.tags %}
        <li>{{ form_row(tag.name) }}</li>
    {% endfor %}
</ul>
    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
{{ form_end(form) }}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/tags.js') }}\"></script>
{% endblock %}", "AppBundle:Task:task.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/src/AppBundle/Resources/views/Task/task.html.twig");
    }
}
