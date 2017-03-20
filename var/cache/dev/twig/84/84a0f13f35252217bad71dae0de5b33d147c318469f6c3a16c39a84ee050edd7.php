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
        $__internal_cfdc28a87725044668cd4fe00b1cfe1ae07efb69b0b52f4a6c5ca5aa1bb7a603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdc28a87725044668cd4fe00b1cfe1ae07efb69b0b52f4a6c5ca5aa1bb7a603->enter($__internal_cfdc28a87725044668cd4fe00b1cfe1ae07efb69b0b52f4a6c5ca5aa1bb7a603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_05168ebd7bcdea3db393c2cbcf50745a4e40daf9ebdb2e2841a411863c045f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05168ebd7bcdea3db393c2cbcf50745a4e40daf9ebdb2e2841a411863c045f28->enter($__internal_05168ebd7bcdea3db393c2cbcf50745a4e40daf9ebdb2e2841a411863c045f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfdc28a87725044668cd4fe00b1cfe1ae07efb69b0b52f4a6c5ca5aa1bb7a603->leave($__internal_cfdc28a87725044668cd4fe00b1cfe1ae07efb69b0b52f4a6c5ca5aa1bb7a603_prof);

        
        $__internal_05168ebd7bcdea3db393c2cbcf50745a4e40daf9ebdb2e2841a411863c045f28->leave($__internal_05168ebd7bcdea3db393c2cbcf50745a4e40daf9ebdb2e2841a411863c045f28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fadaa292813d9c9659a53d49e5dde5a578c7adac551f3d91fc72e24d152b9006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadaa292813d9c9659a53d49e5dde5a578c7adac551f3d91fc72e24d152b9006->enter($__internal_fadaa292813d9c9659a53d49e5dde5a578c7adac551f3d91fc72e24d152b9006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eec85b99282595ffef29b140afaf0de8d8c419342ef3132162abfd7b89d72fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec85b99282595ffef29b140afaf0de8d8c419342ef3132162abfd7b89d72fa3->enter($__internal_eec85b99282595ffef29b140afaf0de8d8c419342ef3132162abfd7b89d72fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>Users list</h2>
    </div>

    <table class=\"records_list table table-bordered table-striped\">
        <thead>
        <tr>
            ";
        // line 12
        echo "            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            ";
        // line 17
        echo "            <th colspan = \"2\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "            <tr>
                ";
            // line 24
            echo "                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                ";
            // line 29
            echo "                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
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
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_eec85b99282595ffef29b140afaf0de8d8c419342ef3132162abfd7b89d72fa3->leave($__internal_eec85b99282595ffef29b140afaf0de8d8c419342ef3132162abfd7b89d72fa3_prof);

        
        $__internal_fadaa292813d9c9659a53d49e5dde5a578c7adac551f3d91fc72e24d152b9006->leave($__internal_fadaa292813d9c9659a53d49e5dde5a578c7adac551f3d91fc72e24d152b9006_prof);

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
        return array (  126 => 46,  119 => 41,  107 => 35,  101 => 32,  96 => 29,  92 => 27,  88 => 26,  84 => 25,  77 => 24,  74 => 22,  70 => 21,  64 => 17,  58 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Users list</h2>
    </div>

    <table class=\"records_list table table-bordered table-striped\">
        <thead>
        <tr>
            {#<th>Id</th>#}
            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            {#<th>Password</th>#}
            <th colspan = \"2\">Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                {#<td>{{ user.id }}</td>#}
                <td><a href=\"{{ path('admin_show', { 'id': user.id }) }}\">{{ user.username }}</a></td>
                <td>{{ user.firstname }}</td>
                <td>{{ user.lastname }}</td>
                <td>{{ user.email }}</td>
                {#<td>{{ user.password }}</td>#}
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

{#{% extends 'base.html.twig' %}#}

{#{% block body %}#}
    {#<h1>Users list</h1>#}

    {#<table>#}
        {#<thead>#}
            {#<tr>#}
                {#<th>Id</th>#}
                {#<th>Username</th>#}
                {#<th>Firstname</th>#}
                {#<th>Lastname</th>#}
                {#<th>Email</th>#}
                {#<th>Password</th>#}
                {#<th>Actions</th>#}
            {#</tr>#}
        {#</thead>#}
        {#<tbody>#}
        {#{% for user in users %}#}
            {#<tr>#}
                {#<td><a href=\"{{ path('admin_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>#}
                {#<td>{{ user.username }}</td>#}
                {#<td>{{ user.firstname }}</td>#}
                {#<td>{{ user.lastname }}</td>#}
                {#<td>{{ user.email }}</td>#}
                {#<td>{{ user.password }}</td>#}
                {#<td>#}
                    {#<ul>#}
                        {#<li>#}
                            {#<a href=\"{{ path('admin_show', { 'id': user.id }) }}\">show</a>#}
                        {#</li>#}
                        {#<li>#}
                            {#<a href=\"{{ path('admin_edit', { 'id': user.id }) }}\">edit</a>#}
                        {#</li>#}
                    {#</ul>#}
                {#</td>#}
            {#</tr>#}
        {#{% endfor %}#}
        {#</tbody>#}
    {#</table>#}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_new') }}\">Create a new user</a>#}
        {#</li>#}
    {#</ul>#}
{#{% endblock %}#}
", "user/index.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/index.html.twig");
    }
}
