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
        $__internal_146fbe458657e4e1b6c3edc2de44a0e375f098919a7f3a43603895df530eff68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146fbe458657e4e1b6c3edc2de44a0e375f098919a7f3a43603895df530eff68->enter($__internal_146fbe458657e4e1b6c3edc2de44a0e375f098919a7f3a43603895df530eff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_a55ba9b31fd479bcb79eaa709e0efed422a62284b027c8b142a9d54a33dd2cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55ba9b31fd479bcb79eaa709e0efed422a62284b027c8b142a9d54a33dd2cb9->enter($__internal_a55ba9b31fd479bcb79eaa709e0efed422a62284b027c8b142a9d54a33dd2cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146fbe458657e4e1b6c3edc2de44a0e375f098919a7f3a43603895df530eff68->leave($__internal_146fbe458657e4e1b6c3edc2de44a0e375f098919a7f3a43603895df530eff68_prof);

        
        $__internal_a55ba9b31fd479bcb79eaa709e0efed422a62284b027c8b142a9d54a33dd2cb9->leave($__internal_a55ba9b31fd479bcb79eaa709e0efed422a62284b027c8b142a9d54a33dd2cb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f42217690529b918dd7af9921544e92a05a976545aaa2ab90eae31c0c71aec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f42217690529b918dd7af9921544e92a05a976545aaa2ab90eae31c0c71aec4->enter($__internal_2f42217690529b918dd7af9921544e92a05a976545aaa2ab90eae31c0c71aec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_544969533dac593f3475f5c78f55e1d017bc18972ba24b29740012763c0b8adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544969533dac593f3475f5c78f55e1d017bc18972ba24b29740012763c0b8adb->enter($__internal_544969533dac593f3475f5c78f55e1d017bc18972ba24b29740012763c0b8adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>User</h2>
    </div>

    <table class=\"records_list table table-bordered table-striped\">
        <tbody>
        ";
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        // line 13
        echo "        ";
        // line 14
        echo "        <tr>
            <th>Username</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 31
        echo "            ";
        // line 32
        echo "            ";
        // line 33
        echo "        ";
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
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
        
        $__internal_544969533dac593f3475f5c78f55e1d017bc18972ba24b29740012763c0b8adb->leave($__internal_544969533dac593f3475f5c78f55e1d017bc18972ba24b29740012763c0b8adb_prof);

        
        $__internal_2f42217690529b918dd7af9921544e92a05a976545aaa2ab90eae31c0c71aec4->leave($__internal_2f42217690529b918dd7af9921544e92a05a976545aaa2ab90eae31c0c71aec4_prof);

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
        return array (  123 => 47,  118 => 45,  112 => 42,  106 => 39,  99 => 34,  97 => 33,  95 => 32,  93 => 31,  88 => 28,  81 => 24,  74 => 20,  67 => 16,  63 => 14,  61 => 13,  59 => 12,  57 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>User</h2>
    </div>

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

    <ul>
        <li>
            <a href=\"{{ path('admin_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_edit', { 'id': user.id }) }}\">Edit</a>
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
