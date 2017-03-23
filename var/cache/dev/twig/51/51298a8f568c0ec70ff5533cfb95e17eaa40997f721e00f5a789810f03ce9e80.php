<?php

/* user/password.html.twig */
class __TwigTemplate_2252436186bae02addf284fad5b3b2c38d3fda8ecb3fea6779995036967524de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/password.html.twig", 1);
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
        $__internal_441208bc36fa5fb6cdf063c937d74b98cd23e0a493a672e7ec2f4087925354cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441208bc36fa5fb6cdf063c937d74b98cd23e0a493a672e7ec2f4087925354cf->enter($__internal_441208bc36fa5fb6cdf063c937d74b98cd23e0a493a672e7ec2f4087925354cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/password.html.twig"));

        $__internal_c7b495b1a21b9578f53eecfdaeff3e58d4f2493a414f0586191e6d97366ba444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b495b1a21b9578f53eecfdaeff3e58d4f2493a414f0586191e6d97366ba444->enter($__internal_c7b495b1a21b9578f53eecfdaeff3e58d4f2493a414f0586191e6d97366ba444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/password.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["password_form"] ?? $this->getContext($context, "password_form")), array(0 => "form/formthemeoverwrite.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_441208bc36fa5fb6cdf063c937d74b98cd23e0a493a672e7ec2f4087925354cf->leave($__internal_441208bc36fa5fb6cdf063c937d74b98cd23e0a493a672e7ec2f4087925354cf_prof);

        
        $__internal_c7b495b1a21b9578f53eecfdaeff3e58d4f2493a414f0586191e6d97366ba444->leave($__internal_c7b495b1a21b9578f53eecfdaeff3e58d4f2493a414f0586191e6d97366ba444_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_95ff1cc5db666a4bb646c8b6fa8b072f9c311db96561c621810348bc28ff60b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ff1cc5db666a4bb646c8b6fa8b072f9c311db96561c621810348bc28ff60b4->enter($__internal_95ff1cc5db666a4bb646c8b6fa8b072f9c311db96561c621810348bc28ff60b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9e25055c67b577dffa3d3d0bd83cdb30015290efad4a3cf2a7ff933f3af9141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e25055c67b577dffa3d3d0bd83cdb30015290efad4a3cf2a7ff933f3af9141->enter($__internal_f9e25055c67b577dffa3d3d0bd83cdb30015290efad4a3cf2a7ff933f3af9141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"jumbotron\">
        <h2>Change password for: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "<!-- Show how to get from user --></h2>
    </div>

    <div class=\"form\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["password_form"] ?? $this->getContext($context, "password_form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["password_form"] ?? $this->getContext($context, "password_form")), "password", array()), 'label');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["password_form"] ?? $this->getContext($context, "password_form")), "password", array()), 'widget');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["password_form"] ?? $this->getContext($context, "password_form")), "password", array()), 'errors');
        echo "
        </div>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["password_form"] ?? $this->getContext($context, "password_form")), 'form_end');
        echo "
    </div><!-- End .form -->
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
";
        
        $__internal_f9e25055c67b577dffa3d3d0bd83cdb30015290efad4a3cf2a7ff933f3af9141->leave($__internal_f9e25055c67b577dffa3d3d0bd83cdb30015290efad4a3cf2a7ff933f3af9141_prof);

        
        $__internal_95ff1cc5db666a4bb646c8b6fa8b072f9c311db96561c621810348bc28ff60b4->leave($__internal_95ff1cc5db666a4bb646c8b6fa8b072f9c311db96561c621810348bc28ff60b4_prof);

    }

    public function getTemplateName()
    {
        return "user/password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  82 => 16,  77 => 14,  73 => 13,  69 => 12,  64 => 10,  55 => 6,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme password_form 'form/formthemeoverwrite.html.twig' %}

{% block body %}
    <div class=\"jumbotron\">
        <h2>Change password for: {{ user.firstname }} {{ user.lastname }}<!-- Show how to get from user --></h2>
    </div>

    <div class=\"form\">
        {{ form_start(password_form, {attr: {novalidate:\"novalidate\"}}) }}
        <div class=\"form-group\">
            {{ form_label(password_form.password) }}
            {{ form_widget(password_form.password) }}
            {{ form_errors(password_form.password) }}
        </div>
        {{ form_end(password_form) }}
    </div><!-- End .form -->
    <a href=\"{{ path('admin_index') }}\">Back to the list</a>
{% endblock %}
", "user/password.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/password.html.twig");
    }
}
