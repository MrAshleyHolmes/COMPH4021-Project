<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_6d8d364c4971c96f64c078329fc7bb5f43ed00eb8ba74b067cc559d174637b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e0bc8dc56985078c990088ddaa191eeb376ead5d9b3a3184a7ecef2b4c9df77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0bc8dc56985078c990088ddaa191eeb376ead5d9b3a3184a7ecef2b4c9df77->enter($__internal_9e0bc8dc56985078c990088ddaa191eeb376ead5d9b3a3184a7ecef2b4c9df77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_3a8d84a96b5af403429b102a74d6008205b1d15ad69b66c9462a4d8a84436814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8d84a96b5af403429b102a74d6008205b1d15ad69b66c9462a4d8a84436814->enter($__internal_3a8d84a96b5af403429b102a74d6008205b1d15ad69b66c9462a4d8a84436814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_9e0bc8dc56985078c990088ddaa191eeb376ead5d9b3a3184a7ecef2b4c9df77->leave($__internal_9e0bc8dc56985078c990088ddaa191eeb376ead5d9b3a3184a7ecef2b4c9df77_prof);

        
        $__internal_3a8d84a96b5af403429b102a74d6008205b1d15ad69b66c9462a4d8a84436814->leave($__internal_3a8d84a96b5af403429b102a74d6008205b1d15ad69b66c9462a4d8a84436814_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
