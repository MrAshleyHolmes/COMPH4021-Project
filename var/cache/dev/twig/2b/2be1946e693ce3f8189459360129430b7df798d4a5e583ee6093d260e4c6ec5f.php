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
        $__internal_d97e22e09751949a8b8c0b7103155ef3a584adf09c2e33e54ef9b0a0bdb74cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97e22e09751949a8b8c0b7103155ef3a584adf09c2e33e54ef9b0a0bdb74cb8->enter($__internal_d97e22e09751949a8b8c0b7103155ef3a584adf09c2e33e54ef9b0a0bdb74cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_450c9733d965f003b20ed95752df95f9f68599d579658fcd2d24d972d1196b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450c9733d965f003b20ed95752df95f9f68599d579658fcd2d24d972d1196b57->enter($__internal_450c9733d965f003b20ed95752df95f9f68599d579658fcd2d24d972d1196b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d97e22e09751949a8b8c0b7103155ef3a584adf09c2e33e54ef9b0a0bdb74cb8->leave($__internal_d97e22e09751949a8b8c0b7103155ef3a584adf09c2e33e54ef9b0a0bdb74cb8_prof);

        
        $__internal_450c9733d965f003b20ed95752df95f9f68599d579658fcd2d24d972d1196b57->leave($__internal_450c9733d965f003b20ed95752df95f9f68599d579658fcd2d24d972d1196b57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44df7df394e28a7f9d5b604bc7b62f64252f3f95ab8e996185f4569b4646e27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44df7df394e28a7f9d5b604bc7b62f64252f3f95ab8e996185f4569b4646e27d->enter($__internal_44df7df394e28a7f9d5b604bc7b62f64252f3f95ab8e996185f4569b4646e27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b22a472f56dfe02e825a951eb6656d3b4821ed49cd9b85b92e770e199073947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b22a472f56dfe02e825a951eb6656d3b4821ed49cd9b85b92e770e199073947->enter($__internal_4b22a472f56dfe02e825a951eb6656d3b4821ed49cd9b85b92e770e199073947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4b22a472f56dfe02e825a951eb6656d3b4821ed49cd9b85b92e770e199073947->leave($__internal_4b22a472f56dfe02e825a951eb6656d3b4821ed49cd9b85b92e770e199073947_prof);

        
        $__internal_44df7df394e28a7f9d5b604bc7b62f64252f3f95ab8e996185f4569b4646e27d->leave($__internal_44df7df394e28a7f9d5b604bc7b62f64252f3f95ab8e996185f4569b4646e27d_prof);

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
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/new.html.twig");
    }
}
