<?php

/* form/formthemeoverwrite.html.twig */
class __TwigTemplate_96892718ff66e60dffb65d0e938a0a4057400fd99810e3823afaab99f357a9f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4694f3da52f4dd9f69ce72fbfb93629ff904f2597c5d930d0ae86e2b70edc1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4694f3da52f4dd9f69ce72fbfb93629ff904f2597c5d930d0ae86e2b70edc1e1->enter($__internal_4694f3da52f4dd9f69ce72fbfb93629ff904f2597c5d930d0ae86e2b70edc1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/formthemeoverwrite.html.twig"));

        $__internal_15d84a64950ebb484169a390563676803c0b6eb954baa6ca008f590e6431e742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d84a64950ebb484169a390563676803c0b6eb954baa6ca008f590e6431e742->enter($__internal_15d84a64950ebb484169a390563676803c0b6eb954baa6ca008f590e6431e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/formthemeoverwrite.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        // line 15
        echo "    ";
        // line 16
        echo "        ";
        // line 17
        echo "            ";
        // line 18
        echo "                        ";
        // line 19
        echo "            ";
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        // line 22
        echo "            ";
        // line 23
        echo "                ";
        // line 24
        echo "            ";
        // line 25
        echo "        ";
        // line 26
        echo "    ";
        // line 28
        echo "
";
        // line 30
        echo "    ";
        // line 31
        echo "        ";
        // line 32
        echo "            ";
        // line 33
        echo "                ";
        // line 34
        echo "            ";
        // line 35
        echo "        ";
        // line 36
        echo "    ";
        
        $__internal_4694f3da52f4dd9f69ce72fbfb93629ff904f2597c5d930d0ae86e2b70edc1e1->leave($__internal_4694f3da52f4dd9f69ce72fbfb93629ff904f2597c5d930d0ae86e2b70edc1e1_prof);

        
        $__internal_15d84a64950ebb484169a390563676803c0b6eb954baa6ca008f590e6431e742->leave($__internal_15d84a64950ebb484169a390563676803c0b6eb954baa6ca008f590e6431e742_prof);

    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_633db6d35362af0d0582299222a751cd8906ed2e22f9faee4b06eb531b188429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633db6d35362af0d0582299222a751cd8906ed2e22f9faee4b06eb531b188429->enter($__internal_633db6d35362af0d0582299222a751cd8906ed2e22f9faee4b06eb531b188429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5763ca1783239144eb5ccb4e79047d2b1df1935eb1de82e1c5c70cfc7964c775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5763ca1783239144eb5ccb4e79047d2b1df1935eb1de82e1c5c70cfc7964c775->enter($__internal_5763ca1783239144eb5ccb4e79047d2b1df1935eb1de82e1c5c70cfc7964c775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 2
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 3
            echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                        aria-hidden=\"true\">&times;</span></button>
            <strong>Error!</strong>&nbsp;";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</div>";
        }
        
        $__internal_5763ca1783239144eb5ccb4e79047d2b1df1935eb1de82e1c5c70cfc7964c775->leave($__internal_5763ca1783239144eb5ccb4e79047d2b1df1935eb1de82e1c5c70cfc7964c775_prof);

        
        $__internal_633db6d35362af0d0582299222a751cd8906ed2e22f9faee4b06eb531b188429->leave($__internal_633db6d35362af0d0582299222a751cd8906ed2e22f9faee4b06eb531b188429_prof);

    }

    public function getTemplateName()
    {
        return "form/formthemeoverwrite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 10,  97 => 8,  93 => 7,  88 => 3,  86 => 2,  77 => 1,  67 => 36,  65 => 35,  63 => 34,  61 => 33,  59 => 32,  57 => 31,  55 => 30,  52 => 28,  50 => 26,  48 => 25,  46 => 24,  44 => 23,  42 => 22,  40 => 21,  38 => 20,  36 => 19,  34 => 18,  32 => 17,  30 => 16,  28 => 15,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                        aria-hidden=\"true\">&times;</span></button>
            <strong>Error!</strong>&nbsp;
            {%- for error in errors -%}
                {{ error.message }}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock form_errors -%}

{#{%- block form_errors -%}#}
    {#{%- if errors|length > 0 -%}#}
        {#<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">#}
            {#<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span#}
                        {#aria-hidden=\"true\">&times;</span></button>#}
            {#<strong>Warning!</strong> Better check yourself, you're not looking too good.#}
        {#</div>#}
        {#<ul>#}
            {#{%- for error in errors -%}#}
                {#<li>{{ error.message }}</li>#}
            {#{%- endfor -%}#}
        {#</ul>#}
    {#{%- endif -%}#}
{#{%- endblock form_errors -%}#}

{#{%- block form_errors -%}#}
    {#{%- if errors|length > 0 -%}#}
        {#<ul>#}
            {#{%- for error in errors -%}#}
                {#<li>{{ error.message }}</li>#}
            {#{%- endfor -%}#}
        {#</ul>#}
    {#{%- endif -%}#}
{#{%- endblock form_errors -%}#}", "form/formthemeoverwrite.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/form/formthemeoverwrite.html.twig");
    }
}
