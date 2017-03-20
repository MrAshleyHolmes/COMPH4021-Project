<?php

/* user/edit.html.twig */
class __TwigTemplate_6551cbcea8e4ce7e8be00210bf07adec8304f2d5182833473a09739d0dc9426b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_cc55b3d94d705ecbdd7721c70167aa380d4594f7a633b598afe096f9c387f188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc55b3d94d705ecbdd7721c70167aa380d4594f7a633b598afe096f9c387f188->enter($__internal_cc55b3d94d705ecbdd7721c70167aa380d4594f7a633b598afe096f9c387f188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_dfd17fa155a1676620a905ec64d55fff57208c5e8af996a8d4cc43b30f49cede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd17fa155a1676620a905ec64d55fff57208c5e8af996a8d4cc43b30f49cede->enter($__internal_dfd17fa155a1676620a905ec64d55fff57208c5e8af996a8d4cc43b30f49cede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc55b3d94d705ecbdd7721c70167aa380d4594f7a633b598afe096f9c387f188->leave($__internal_cc55b3d94d705ecbdd7721c70167aa380d4594f7a633b598afe096f9c387f188_prof);

        
        $__internal_dfd17fa155a1676620a905ec64d55fff57208c5e8af996a8d4cc43b30f49cede->leave($__internal_dfd17fa155a1676620a905ec64d55fff57208c5e8af996a8d4cc43b30f49cede_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3730e7a82c3f2e1b29c3a47e7bb7a244bfc5f48e60f615a4d686a8f34c18fd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3730e7a82c3f2e1b29c3a47e7bb7a244bfc5f48e60f615a4d686a8f34c18fd8b->enter($__internal_3730e7a82c3f2e1b29c3a47e7bb7a244bfc5f48e60f615a4d686a8f34c18fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6a3c8ae7ac5346c0d9147f2d8e5758a22f66a2db92b98006e7f58edb574c3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a3c8ae7ac5346c0d9147f2d8e5758a22f66a2db92b98006e7f58edb574c3d1->enter($__internal_a6a3c8ae7ac5346c0d9147f2d8e5758a22f66a2db92b98006e7f58edb574c3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
        <h2>User edit</h2>
    </div>

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 12
        echo "    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'widget');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
    </div>
    ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        // line 36
        echo "    ";
        // line 37
        echo "        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a6a3c8ae7ac5346c0d9147f2d8e5758a22f66a2db92b98006e7f58edb574c3d1->leave($__internal_a6a3c8ae7ac5346c0d9147f2d8e5758a22f66a2db92b98006e7f58edb574c3d1_prof);

        
        $__internal_3730e7a82c3f2e1b29c3a47e7bb7a244bfc5f48e60f615a4d686a8f34c18fd8b->leave($__internal_3730e7a82c3f2e1b29c3a47e7bb7a244bfc5f48e60f615a4d686a8f34c18fd8b_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 47,  144 => 45,  138 => 42,  131 => 38,  128 => 37,  126 => 36,  124 => 35,  122 => 34,  120 => 33,  115 => 30,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  58 => 10,  52 => 6,  43 => 5,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme edit_form 'form/formthemeoverwrite.html.twig' %}
{#{% form_theme edit_form 'AppBundle:Form:formthemeoverwrite.html.twig' %}#}

{% block body %}
    <div class=\"jumbotron\">
        <h2>User edit</h2>
    </div>

    {{ form_start(edit_form) }}
        {#{{ form_widget(edit_form) }}#}
    <div class=\"form-group\">
        {{ form_label(edit_form.username) }}
        {{ form_widget(edit_form.username) }}
        {{ form_errors(edit_form.username) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.firstname) }}
        {{ form_widget(edit_form.firstname) }}
        {{ form_errors(edit_form.firstname) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.lastname) }}
        {{ form_widget(edit_form.lastname) }}
        {{ form_errors(edit_form.lastname) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.email) }}
        {{ form_widget(edit_form.email) }}
        {{ form_errors(edit_form.email) }}
    </div>
    {#<div class=\"form-group\">#}
        {#{{ form_label(edit_form.password) }}#}
        {#{{ form_widget(edit_form.password) }}#}
        {#{{ form_errors(edit_form.password) }}#}
    {#</div>#}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}

{#{% extends 'base.html.twig' %}#}

{#{% block body %}#}
    {#<h1>User edit</h1>#}

    {#{{ form_start(edit_form) }}#}
    {#{{ form_widget(edit_form) }}#}
    {#<input type=\"submit\" value=\"Edit\" />#}
    {#{{ form_end(edit_form) }}#}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_index') }}\">Back to the list</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
            {#<input type=\"submit\" value=\"Delete\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    {#</ul>#}
{#{% endblock %}#}
", "user/edit.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/edit.html.twig");
    }
}
