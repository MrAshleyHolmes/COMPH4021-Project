<?php

/* user/show.html.twig */
class __TwigTemplate_f33d150d9c30fa10148c92eb4add46e344c63a601268b32aef7aa7f4dd5a87df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_6de73e47b0c9ef7bd38cbcef14b871f3c08f2fd7467ec18fe6e5cff3009c842c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de73e47b0c9ef7bd38cbcef14b871f3c08f2fd7467ec18fe6e5cff3009c842c->enter($__internal_6de73e47b0c9ef7bd38cbcef14b871f3c08f2fd7467ec18fe6e5cff3009c842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_8cc7d237e1239b42397c2b27950eabd1a6206cb1cd9ca393d4cd9f7fcc41a5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc7d237e1239b42397c2b27950eabd1a6206cb1cd9ca393d4cd9f7fcc41a5ad->enter($__internal_8cc7d237e1239b42397c2b27950eabd1a6206cb1cd9ca393d4cd9f7fcc41a5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de73e47b0c9ef7bd38cbcef14b871f3c08f2fd7467ec18fe6e5cff3009c842c->leave($__internal_6de73e47b0c9ef7bd38cbcef14b871f3c08f2fd7467ec18fe6e5cff3009c842c_prof);

        
        $__internal_8cc7d237e1239b42397c2b27950eabd1a6206cb1cd9ca393d4cd9f7fcc41a5ad->leave($__internal_8cc7d237e1239b42397c2b27950eabd1a6206cb1cd9ca393d4cd9f7fcc41a5ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2818e208b8cf11eee5647949a4de4aa977e3e3205b5c3f28e02b90f2d1246ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2818e208b8cf11eee5647949a4de4aa977e3e3205b5c3f28e02b90f2d1246ff->enter($__internal_a2818e208b8cf11eee5647949a4de4aa977e3e3205b5c3f28e02b90f2d1246ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e632958211989e6eac4b5141a3351ac9077fa216059efab01309fb9c9e815f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e632958211989e6eac4b5141a3351ac9077fa216059efab01309fb9c9e815f23->enter($__internal_e632958211989e6eac4b5141a3351ac9077fa216059efab01309fb9c9e815f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: user</h2>
    </div>

    ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "danger"), "method")) {
            // line 9
            echo "        <div class=\"alert alert-danger\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "success"), "method")) {
            // line 17
            echo "        <div class=\"alert alert-success\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "                ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
    ";
        }
        // line 23
        echo "
    <table class=\"records_list table table-bordered table-striped\">
        <tbody>
        ";
        // line 27
        echo "            ";
        // line 28
        echo "            ";
        // line 29
        echo "        ";
        // line 30
        echo "        <tr>
            <th>Username</th>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        // line 49
        echo "        ";
        // line 50
        echo "        </tbody>
    </table>

    ";
        // line 54
        echo "        ";
        // line 55
        echo "    ";
        // line 56
        echo "
    <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\" class=\"btn btn-default btn-lg\">Back to list <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>

    ";
        // line 59
        if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array()))) {
            // line 60
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-lg\">Edit</a>
        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_password", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-lg\">Change Password</a>
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-default btn-lg\">
    ";
        }
        // line 64
        echo "
    ";
        // line 66
        echo "        ";
        // line 67
        echo "            ";
        // line 68
        echo "        ";
        // line 69
        echo "        ";
        // line 70
        echo "            ";
        // line 71
        echo "        ";
        // line 72
        echo "        ";
        // line 73
        echo "            ";
        // line 74
        echo "        ";
        // line 75
        echo "        ";
        // line 76
        echo "            ";
        // line 77
        echo "            ";
        // line 78
        echo "            ";
        // line 79
        echo "        ";
        // line 80
        echo "    ";
        
        $__internal_e632958211989e6eac4b5141a3351ac9077fa216059efab01309fb9c9e815f23->leave($__internal_e632958211989e6eac4b5141a3351ac9077fa216059efab01309fb9c9e815f23_prof);

        
        $__internal_a2818e208b8cf11eee5647949a4de4aa977e3e3205b5c3f28e02b90f2d1246ff->leave($__internal_a2818e208b8cf11eee5647949a4de4aa977e3e3205b5c3f28e02b90f2d1246ff_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 80,  208 => 79,  206 => 78,  204 => 77,  202 => 76,  200 => 75,  198 => 74,  196 => 73,  194 => 72,  192 => 71,  190 => 70,  188 => 69,  186 => 68,  184 => 67,  182 => 66,  179 => 64,  173 => 61,  168 => 60,  166 => 59,  161 => 57,  158 => 56,  156 => 55,  154 => 54,  149 => 50,  147 => 49,  145 => 48,  143 => 47,  138 => 44,  131 => 40,  124 => 36,  117 => 32,  113 => 30,  111 => 29,  109 => 28,  107 => 27,  102 => 23,  98 => 21,  89 => 19,  85 => 18,  82 => 17,  80 => 16,  77 => 15,  73 => 13,  64 => 11,  60 => 10,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Welcome to the Pages: user</h2>
    </div>

    {% if app.session.flashbag.has('danger') %}
        <div class=\"alert alert-danger\">
        {% for message in app.session.flashbag.get('danger') %}
            {{ message }}
        {% endfor %}
        </div>
    {% endif %}

    {% if app.session.flashbag.has('success') %}
        <div class=\"alert alert-success\">
            {% for message in app.session.flashbag.get('success') %}
                {{ message }}
            {% endfor %}
        </div>
    {% endif %}

    <table class=\"records_list table table-bordered table-striped\">
        <tbody>
        {#<tr>#}
            {#<th>Id</th>#}
            {#<td>{{ user.id }}</td>#}
        {#</tr>#}
        <tr>
            <th>Username</th>
            <td>{{ user.username }}</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>{{ user.firstname }}</td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td>{{ user.lastname }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ user.email }}</td>
        </tr>
        {#<tr>#}
            {#<th>Password</th>#}
            {#<td>{{ user.password }}</td>#}
        {#</tr>#}
        </tbody>
    </table>

    {#{% if 'ROLE_SUPER_ADMIN' not in user.roles %}#}
        {#<a href=\"{{ path('admin_edit', { 'id': user.id }) }}\" class=\"btn btn-default btn-lg\">Edit</a>#}
    {#{% endif %}#}

    <a href=\"{{ path('admin_index') }}\" class=\"btn btn-default btn-lg\">Back to list <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>

    {% if 'ROLE_SUPER_ADMIN' not in user.roles %}
        <a href=\"{{ path('admin_edit', { 'id': user.id }) }}\" class=\"btn btn-default btn-lg\">Edit</a>
        <a href=\"{{ path('admin_password', { 'id': user.id }) }}\" class=\"btn btn-default btn-lg\">Change Password</a>
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-default btn-lg\">
    {% endif %}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_index') }}\">Back to the list</a>#}
        {#</li>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_edit', { 'id': user.id }) }}\">Edit</a>#}
        {#</li>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_password', { 'id': user.id }) }}\">Change Password</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
            {#<input type=\"submit\" value=\"Delete\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    {#</ul>#}
{% endblock %}

{#{% extends 'base.html.twig' %}#}

{#{% block body %}#}
    {#<h1>User</h1>#}

    {#<table>#}
        {#<tbody>#}
            {#<tr>#}
                {#<th>Id</th>#}
                {#<td>{{ user.id }}</td>#}
            {#</tr>#}
            {#<tr>#}
                {#<th>Username</th>#}
                {#<td>{{ user.username }}</td>#}
            {#</tr>#}
            {#<tr>#}
                {#<th>Firstname</th>#}
                {#<td>{{ user.firstname }}</td>#}
            {#</tr>#}
            {#<tr>#}
                {#<th>Lastname</th>#}
                {#<td>{{ user.lastname }}</td>#}
            {#</tr>#}
            {#<tr>#}
                {#<th>Email</th>#}
                {#<td>{{ user.email }}</td>#}
            {#</tr>#}
            {#<tr>#}
                {#<th>Password</th>#}
                {#<td>{{ user.password }}</td>#}
            {#</tr>#}
        {#</tbody>#}
    {#</table>#}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_index') }}\">Back to the list</a>#}
        {#</li>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_edit', { 'id': user.id }) }}\">Edit</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
                {#<input type=\"submit\" value=\"Delete\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    {#</ul>#}
{#{% endblock %}#}
", "user/show.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/app/Resources/views/user/show.html.twig");
    }
}
