<?php

/* user/index.html.twig */
class __TwigTemplate_37c491d8e69eecc37cbc36eca7f08c19e960d82bef15abda10792ad3779f27d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_be14d9f844171462951b5a3ea21fda77eee67fcc37b76fa0979db26733ffb8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be14d9f844171462951b5a3ea21fda77eee67fcc37b76fa0979db26733ffb8b1->enter($__internal_be14d9f844171462951b5a3ea21fda77eee67fcc37b76fa0979db26733ffb8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_4ec3982381eba2264429064cbab9a4c0a7cfc790907e2d1e31943923f6d80d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec3982381eba2264429064cbab9a4c0a7cfc790907e2d1e31943923f6d80d8f->enter($__internal_4ec3982381eba2264429064cbab9a4c0a7cfc790907e2d1e31943923f6d80d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be14d9f844171462951b5a3ea21fda77eee67fcc37b76fa0979db26733ffb8b1->leave($__internal_be14d9f844171462951b5a3ea21fda77eee67fcc37b76fa0979db26733ffb8b1_prof);

        
        $__internal_4ec3982381eba2264429064cbab9a4c0a7cfc790907e2d1e31943923f6d80d8f->leave($__internal_4ec3982381eba2264429064cbab9a4c0a7cfc790907e2d1e31943923f6d80d8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5055d7256a26c78ea12d206e8250b0eae2d96d4564aab3969ebf6d40527a38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5055d7256a26c78ea12d206e8250b0eae2d96d4564aab3969ebf6d40527a38f->enter($__internal_b5055d7256a26c78ea12d206e8250b0eae2d96d4564aab3969ebf6d40527a38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2742cf4bc0699a2b6b16a303865f356f9e6c8ed237501c510188fd92c9feaad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2742cf4bc0699a2b6b16a303865f356f9e6c8ed237501c510188fd92c9feaad6->enter($__internal_2742cf4bc0699a2b6b16a303865f356f9e6c8ed237501c510188fd92c9feaad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_2742cf4bc0699a2b6b16a303865f356f9e6c8ed237501c510188fd92c9feaad6->leave($__internal_2742cf4bc0699a2b6b16a303865f356f9e6c8ed237501c510188fd92c9feaad6_prof);

        
        $__internal_b5055d7256a26c78ea12d206e8250b0eae2d96d4564aab3969ebf6d40527a38f->leave($__internal_b5055d7256a26c78ea12d206e8250b0eae2d96d4564aab3969ebf6d40527a38f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('admin_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.username }}</td>
                <td>{{ user.firstname }}</td>
                <td>{{ user.lastname }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.password }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/index.html.twig");
    }
}
