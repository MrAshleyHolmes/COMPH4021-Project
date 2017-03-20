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
        $__internal_531fb40746474e1dc1d66d5bce865ee791158529249ff50ab922a66d4c384ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531fb40746474e1dc1d66d5bce865ee791158529249ff50ab922a66d4c384ead->enter($__internal_531fb40746474e1dc1d66d5bce865ee791158529249ff50ab922a66d4c384ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_83b8ce33f4d1595fe6235233f7cc87768da93c33435f20be415c2cc7177a94ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b8ce33f4d1595fe6235233f7cc87768da93c33435f20be415c2cc7177a94ba->enter($__internal_83b8ce33f4d1595fe6235233f7cc87768da93c33435f20be415c2cc7177a94ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_531fb40746474e1dc1d66d5bce865ee791158529249ff50ab922a66d4c384ead->leave($__internal_531fb40746474e1dc1d66d5bce865ee791158529249ff50ab922a66d4c384ead_prof);

        
        $__internal_83b8ce33f4d1595fe6235233f7cc87768da93c33435f20be415c2cc7177a94ba->leave($__internal_83b8ce33f4d1595fe6235233f7cc87768da93c33435f20be415c2cc7177a94ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17744cbfadd016d8ac525d9510422d7a88b30dce8c0579a84920baacd154ab24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17744cbfadd016d8ac525d9510422d7a88b30dce8c0579a84920baacd154ab24->enter($__internal_17744cbfadd016d8ac525d9510422d7a88b30dce8c0579a84920baacd154ab24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_234c266438e578d7b54ddfcbd9dd2026428ff9f18cd7015578ada1831729f6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234c266438e578d7b54ddfcbd9dd2026428ff9f18cd7015578ada1831729f6af->enter($__internal_234c266438e578d7b54ddfcbd9dd2026428ff9f18cd7015578ada1831729f6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>User edit</h2>
    </div>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 10
        echo "    <div class=\"form-group\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'widget');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastname", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
    </div>
    ";
        // line 31
        echo "        ";
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        // line 34
        echo "    ";
        // line 35
        echo "        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_234c266438e578d7b54ddfcbd9dd2026428ff9f18cd7015578ada1831729f6af->leave($__internal_234c266438e578d7b54ddfcbd9dd2026428ff9f18cd7015578ada1831729f6af_prof);

        
        $__internal_17744cbfadd016d8ac525d9510422d7a88b30dce8c0579a84920baacd154ab24->leave($__internal_17744cbfadd016d8ac525d9510422d7a88b30dce8c0579a84920baacd154ab24_prof);

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
        return array (  146 => 45,  141 => 43,  135 => 40,  128 => 36,  125 => 35,  123 => 34,  121 => 33,  119 => 32,  117 => 31,  112 => 28,  108 => 27,  104 => 26,  98 => 23,  94 => 22,  90 => 21,  84 => 18,  80 => 17,  76 => 16,  70 => 13,  66 => 12,  62 => 11,  59 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
