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
        $__internal_6d9960a95a3e119af0461b20a210c9fa25b624fac540ad13ded812b22ba6e63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9960a95a3e119af0461b20a210c9fa25b624fac540ad13ded812b22ba6e63c->enter($__internal_6d9960a95a3e119af0461b20a210c9fa25b624fac540ad13ded812b22ba6e63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_ee2cdd0f30300deaa27e399457b26605d754af9a78ed2e4c9b4f631542c129c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2cdd0f30300deaa27e399457b26605d754af9a78ed2e4c9b4f631542c129c8->enter($__internal_ee2cdd0f30300deaa27e399457b26605d754af9a78ed2e4c9b4f631542c129c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9960a95a3e119af0461b20a210c9fa25b624fac540ad13ded812b22ba6e63c->leave($__internal_6d9960a95a3e119af0461b20a210c9fa25b624fac540ad13ded812b22ba6e63c_prof);

        
        $__internal_ee2cdd0f30300deaa27e399457b26605d754af9a78ed2e4c9b4f631542c129c8->leave($__internal_ee2cdd0f30300deaa27e399457b26605d754af9a78ed2e4c9b4f631542c129c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75980a6f452329c8f50b44bb8898ef3c835dac5328430783f5880713f819e769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75980a6f452329c8f50b44bb8898ef3c835dac5328430783f5880713f819e769->enter($__internal_75980a6f452329c8f50b44bb8898ef3c835dac5328430783f5880713f819e769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c654e66b914f6bedec8e774139a1e2da593520f51546ae779605892828bfb6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c654e66b914f6bedec8e774139a1e2da593520f51546ae779605892828bfb6a8->enter($__internal_c654e66b914f6bedec8e774139a1e2da593520f51546ae779605892828bfb6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: users list</h2>
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
        echo "            <th>Actions</th>
            ";
        // line 19
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "            <tr>
                ";
            // line 25
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                ";
            // line 27
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                ";
            // line 31
            echo "                <td>
                    ";
            // line 32
            if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($context["user"], "roles", array()))) {
                // line 33
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-lg\">Show</a>
                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-lg\">Edit</a>
                    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_password", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-lg\">Change Password</a>
                    ";
                // line 37
                echo "                        ";
                // line 38
                echo "                            ";
                // line 39
                echo "                        ";
                // line 40
                echo "                        ";
                // line 41
                echo "                            ";
                // line 42
                echo "                        ";
                // line 43
                echo "                        ";
                // line 44
                echo "                            ";
                // line 45
                echo "                        ";
                // line 46
                echo "                    ";
                // line 47
                echo "                    ";
            }
            // line 48
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_new");
        echo "\" class=\"btn btn-default btn-lg\">Create new user</a>

    ";
        // line 57
        echo "        ";
        // line 58
        echo "            ";
        // line 59
        echo "        ";
        // line 60
        echo "    ";
        
        $__internal_c654e66b914f6bedec8e774139a1e2da593520f51546ae779605892828bfb6a8->leave($__internal_c654e66b914f6bedec8e774139a1e2da593520f51546ae779605892828bfb6a8_prof);

        
        $__internal_75980a6f452329c8f50b44bb8898ef3c835dac5328430783f5880713f819e769->leave($__internal_75980a6f452329c8f50b44bb8898ef3c835dac5328430783f5880713f819e769_prof);

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
        return array (  162 => 60,  160 => 59,  158 => 58,  156 => 57,  151 => 54,  146 => 51,  138 => 48,  135 => 47,  133 => 46,  131 => 45,  129 => 44,  127 => 43,  125 => 42,  123 => 41,  121 => 40,  119 => 39,  117 => 38,  115 => 37,  111 => 35,  107 => 34,  102 => 33,  100 => 32,  97 => 31,  93 => 29,  89 => 28,  84 => 27,  79 => 25,  76 => 23,  72 => 22,  67 => 19,  64 => 17,  58 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Welcome to the Pages: users list</h2>
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
            <th>Actions</th>
            {#<th colspan = \"2\">Actions</th>#}
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                {#<td>{{ user.id }}</td>#}
                <td>{{ user.username }}</td>
                {#<td><a href=\"{{ path('admin_show', { 'id': user.id }) }}\">{{ user.username }}</a></td>#}
                <td>{{ user.firstname }}</td>
                <td>{{ user.lastname }}</td>
                <td>{{ user.email }}</td>
                {#<td>{{ user.password }}</td>#}
                <td>
                    {% if 'ROLE_SUPER_ADMIN' not in user.roles %}
                    <a href=\"{{ path('admin_show', { 'id': user.id }) }}\" class=\"btn btn-default btn-lg\">Show</a>
                    <a href=\"{{ path('admin_edit', { 'id': user.id }) }}\" class=\"btn btn-default btn-lg\">Edit</a>
                    <a href=\"{{ path('admin_password', { 'id': user.id }) }}\" class=\"btn btn-default btn-lg\">Change Password</a>
                    {#<ul>#}
                        {#<li>#}
                            {#<a href=\"{{ path('admin_show', { 'id': user.id }) }}\">show</a>#}
                        {#</li>#}
                        {#<li>#}
                            {#<a href=\"{{ path('admin_edit', { 'id': user.id }) }}\">edit</a>#}
                        {#</li>#}
                        {#<li>#}
                            {#<a href=\"{{ path('admin_password', { 'id': user.id }) }}\">Change Password</a>#}
                        {#</li>#}
                    {#</ul>#}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('admin_new') }}\" class=\"btn btn-default btn-lg\">Create new user</a>

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('admin_new') }}\">Create a new user</a>#}
        {#</li>#}
    {#</ul>#}
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
