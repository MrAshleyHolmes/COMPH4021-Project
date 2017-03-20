<?php

/* user/new.html.twig */
class __TwigTemplate_dbb6e80a0eee355b47de43b57f7243b84ad81768c27262f21a5725ce351b6603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_046e33460bcc9a7bc39abf266b13d81756d545d58a13bb6f39d76c1b580ddad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046e33460bcc9a7bc39abf266b13d81756d545d58a13bb6f39d76c1b580ddad5->enter($__internal_046e33460bcc9a7bc39abf266b13d81756d545d58a13bb6f39d76c1b580ddad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_410a6721a33ec3011fe65ea5744d97886f2f8fb991e4ece2504ee26c4e07c7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410a6721a33ec3011fe65ea5744d97886f2f8fb991e4ece2504ee26c4e07c7d4->enter($__internal_410a6721a33ec3011fe65ea5744d97886f2f8fb991e4ece2504ee26c4e07c7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046e33460bcc9a7bc39abf266b13d81756d545d58a13bb6f39d76c1b580ddad5->leave($__internal_046e33460bcc9a7bc39abf266b13d81756d545d58a13bb6f39d76c1b580ddad5_prof);

        
        $__internal_410a6721a33ec3011fe65ea5744d97886f2f8fb991e4ece2504ee26c4e07c7d4->leave($__internal_410a6721a33ec3011fe65ea5744d97886f2f8fb991e4ece2504ee26c4e07c7d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc4052dc9d56d2bcb6b7a5cbe29be29fff2a9170dafc796dd7196bed9f0f47f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4052dc9d56d2bcb6b7a5cbe29be29fff2a9170dafc796dd7196bed9f0f47f9->enter($__internal_cc4052dc9d56d2bcb6b7a5cbe29be29fff2a9170dafc796dd7196bed9f0f47f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0214c8575a4aeedd120032bb3c1eec07011cc418cfeb7ca235c5eee6656ecd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0214c8575a4aeedd120032bb3c1eec07011cc418cfeb7ca235c5eee6656ecd7->enter($__internal_f0214c8575a4aeedd120032bb3c1eec07011cc418cfeb7ca235c5eee6656ecd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>User creation</h2>
    </div>

<div class=\"form\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 11
        echo "    <div class=\"form-group\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'label');
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
    </div>
    <input type=\"submit\" value=\"Create\" />
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f0214c8575a4aeedd120032bb3c1eec07011cc418cfeb7ca235c5eee6656ecd7->leave($__internal_f0214c8575a4aeedd120032bb3c1eec07011cc418cfeb7ca235c5eee6656ecd7_prof);

        
        $__internal_cc4052dc9d56d2bcb6b7a5cbe29be29fff2a9170dafc796dd7196bed9f0f47f9->leave($__internal_cc4052dc9d56d2bcb6b7a5cbe29be29fff2a9170dafc796dd7196bed9f0f47f9_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  133 => 37,  127 => 34,  123 => 33,  119 => 32,  113 => 29,  109 => 28,  105 => 27,  99 => 24,  95 => 23,  91 => 22,  85 => 19,  81 => 18,  77 => 17,  71 => 14,  67 => 13,  63 => 12,  60 => 11,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>User creation</h2>
    </div>

<div class=\"form\">
    {{ form_start(form, {attr: {novalidate:\"novalidate\"}}) }}
    {#{{ form_widget(form) }}#}
    <div class=\"form-group\">
        {{ form_label(form.username) }}
        {{ form_widget(form.username) }}
        {{ form_errors(form.username) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.firstname) }}
        {{ form_widget(form.firstname) }}
        {{ form_errors(form.firstname) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.lastname) }}
        {{ form_widget(form.lastname) }}
        {{ form_errors(form.lastname) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.email) }}
        {{ form_widget(form.email) }}
        {{ form_errors(form.email) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.password) }}
        {{ form_widget(form.password) }}
        {{ form_errors(form.password) }}
    </div>
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}

{#{% extends 'base.html.twig' %}#}

{#{% block body %}#}
    {#<h1>User creation</h1>#}

    {#{{ form_start(form) }}#}
        {#{{ form_widget(form) }}#}
        {#<input type=\"submit\" value=\"Create\" />#}
    {#{{ form_end(form) }}#}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_index') }}\">Back to the list</a>#}
        {#</li>#}
    {#</ul>#}
{#{% endblock %}#}
", "user/new.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/new.html.twig");
    }
}
