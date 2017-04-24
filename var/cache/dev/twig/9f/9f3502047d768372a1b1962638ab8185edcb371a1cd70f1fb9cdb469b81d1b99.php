<?php

/* AppBundle:Pages:orders.html.twig */
class __TwigTemplate_7bacdfbcc20b1febf728085d903e4f91041376f9b83a76878a2b828b694833dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Pages:orders.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91e91a4c96fe21d9cc75e615211c2f2b32fbba66b4a90563be76ab0efbd14ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e91a4c96fe21d9cc75e615211c2f2b32fbba66b4a90563be76ab0efbd14ce1->enter($__internal_91e91a4c96fe21d9cc75e615211c2f2b32fbba66b4a90563be76ab0efbd14ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:orders.html.twig"));

        $__internal_5aa876a1e5b3180bed67f9183ba2777a34335a97bdad6dca3f0f7629a811d875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa876a1e5b3180bed67f9183ba2777a34335a97bdad6dca3f0f7629a811d875->enter($__internal_5aa876a1e5b3180bed67f9183ba2777a34335a97bdad6dca3f0f7629a811d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e91a4c96fe21d9cc75e615211c2f2b32fbba66b4a90563be76ab0efbd14ce1->leave($__internal_91e91a4c96fe21d9cc75e615211c2f2b32fbba66b4a90563be76ab0efbd14ce1_prof);

        
        $__internal_5aa876a1e5b3180bed67f9183ba2777a34335a97bdad6dca3f0f7629a811d875->leave($__internal_5aa876a1e5b3180bed67f9183ba2777a34335a97bdad6dca3f0f7629a811d875_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e29764b085d1e4dd17753b92fac9596d7304e3ce4d5b25b51e7b0e00d894b833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29764b085d1e4dd17753b92fac9596d7304e3ce4d5b25b51e7b0e00d894b833->enter($__internal_e29764b085d1e4dd17753b92fac9596d7304e3ce4d5b25b51e7b0e00d894b833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e226726af251d3242c95b3b8c4eb0e1e48fc19ae5c6f0c0b26be2e4a83f72b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e226726af251d3242c95b3b8c4eb0e1e48fc19ae5c6f0c0b26be2e4a83f72b34->enter($__internal_e226726af251d3242c95b3b8c4eb0e1e48fc19ae5c6f0c0b26be2e4a83f72b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:generate";
        
        $__internal_e226726af251d3242c95b3b8c4eb0e1e48fc19ae5c6f0c0b26be2e4a83f72b34->leave($__internal_e226726af251d3242c95b3b8c4eb0e1e48fc19ae5c6f0c0b26be2e4a83f72b34_prof);

        
        $__internal_e29764b085d1e4dd17753b92fac9596d7304e3ce4d5b25b51e7b0e00d894b833->leave($__internal_e29764b085d1e4dd17753b92fac9596d7304e3ce4d5b25b51e7b0e00d894b833_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_173dea0284b13dca4ec5d4714cff458bc2cb7bd1b7b8ed6eecc819bf8dccabbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173dea0284b13dca4ec5d4714cff458bc2cb7bd1b7b8ed6eecc819bf8dccabbd->enter($__internal_173dea0284b13dca4ec5d4714cff458bc2cb7bd1b7b8ed6eecc819bf8dccabbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2bcf7dea6e3fe7b47bf0fc3bde7ef92fa9109e16c81f5477c0a8e7a250030fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcf7dea6e3fe7b47bf0fc3bde7ef92fa9109e16c81f5477c0a8e7a250030fe9->enter($__internal_2bcf7dea6e3fe7b47bf0fc3bde7ef92fa9109e16c81f5477c0a8e7a250030fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_2bcf7dea6e3fe7b47bf0fc3bde7ef92fa9109e16c81f5477c0a8e7a250030fe9->leave($__internal_2bcf7dea6e3fe7b47bf0fc3bde7ef92fa9109e16c81f5477c0a8e7a250030fe9_prof);

        
        $__internal_173dea0284b13dca4ec5d4714cff458bc2cb7bd1b7b8ed6eecc819bf8dccabbd->leave($__internal_173dea0284b13dca4ec5d4714cff458bc2cb7bd1b7b8ed6eecc819bf8dccabbd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a96a44fb76d096651a363454678c46dcf5f012ca250e9595e73f8dea34f0e7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96a44fb76d096651a363454678c46dcf5f012ca250e9595e73f8dea34f0e7b0->enter($__internal_a96a44fb76d096651a363454678c46dcf5f012ca250e9595e73f8dea34f0e7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47870e7798415552906ff89a86db76fb5e5f6c3bc4198df41a5319a53a2351b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47870e7798415552906ff89a86db76fb5e5f6c3bc4198df41a5319a53a2351b1->enter($__internal_47870e7798415552906ff89a86db76fb5e5f6c3bc4198df41a5319a53a2351b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: generate page</h2>
    </div>

    <div class=\"container\"><h1><img src=\"./";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\"> INSTITUTE OF TECHNOLOGY BLANCHARDSTOWN</h1></div>
    <div id=\"exTab1\" class=\"container\">
        <ul class=\"nav nav-pills\">
            <li class=\"active\">
                <a href=\"#1a\" data-toggle=\"tab\">Step 1</a>
            </li>
            <li>
                <a href=\"#2a\" data-toggle=\"tab\">Step 2</a>
            </li>
            <li>
                <a href=\"#3a\" data-toggle=\"tab\">Step 3</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 4</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 5</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 6</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 7</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 8</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 9</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 10</a>
            </li>
        </ul>

        <div class=\"tab-content clearfix\">
            <div class=\"tab-pane active\" id=\"1a\">
                <h3>Step 1</h3>
                ";
        // line 55
        echo "                <div class=\"row\">
                    ";
        // line 57
        echo "                        ";
        // line 58
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["examForm"] ?? $this->getContext($context, "examForm")), 'form_start');
        echo "
                        ";
        // line 60
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "year", array()), 'row');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "semester", array()), 'row');
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "dateExamination", array()), 'row', array("label" => "Date of Examination"));
        // line 64
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "timeExamination", array()), 'row', array("label" => "Time of Examination"));
        // line 67
        echo "
                    ";
        // line 69
        echo "                </div>
            </div>
            <div class=\"tab-pane\" id=\"2a\">
                <h3>Step 2</h3>
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "progCode", array()), 'row', array("label" => "Program Code"));
        // line 75
        echo "
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "progTitle", array()), 'row', array("label" => "Program Title"));
        // line 78
        echo "
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "modCode", array()), 'row', array("label" => "Module Code"));
        // line 81
        echo "
                ";
        // line 83
        echo "            </div>
            <div class=\"tab-pane\" id=\"3a\">
                <h3>Step 3</h3>
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "modTitle", array()), 'row', array("label" => "Module Title"));
        // line 88
        echo "
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "internalExaminer", array()), 'row', array("label" => "Internal Examiner(s):"));
        // line 91
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "externalExaminer", array()), 'row', array("label" => "External Examiner(s):"));
        // line 94
        echo "
                ";
        // line 96
        echo "            </div>
            <div class=\"tab-pane\" id=\"4a\">
                <h3>Step 4</h3>
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "examinerInstructions", array()), 'row', array("label" => "Examiner Instructions"));
        // line 101
        echo "
                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "firstInstruction", array()), 'row', array("label" => "Examiner Instructions"));
        // line 104
        echo "
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "secondInstruction", array()), 'row', array("label" => "Examiner Instructions"));
        // line 107
        echo "
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "thirdInstruction", array()), 'row', array("label" => "Examiner Instructions"));
        // line 110
        echo "
                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "fourthInstruction", array()), 'row', array("label" => "Examiner Instructions"));
        // line 113
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
                        ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["examForm"] ?? $this->getContext($context, "examForm")), 'form_end');
        echo "
                ";
        // line 117
        echo "            </div>
        </div>
    </div>


    ";
        // line 123
        echo "    ";
        // line 124
        echo "
    ";
        // line 126
        echo "        ";
        // line 127
        echo "            ";
        // line 128
        echo "                ";
        // line 129
        echo "            ";
        // line 130
        echo "            ";
        // line 131
        echo "            ";
        // line 132
        echo "            ";
        // line 133
        echo "            ";
        // line 134
        echo "        ";
        // line 135
        echo "
        ";
        // line 137
        echo "            ";
        // line 138
        echo "                ";
        // line 139
        echo "            ";
        // line 140
        echo "            ";
        // line 141
        echo "                ";
        // line 142
        echo "            ";
        // line 143
        echo "            ";
        // line 144
        echo "                ";
        // line 145
        echo "            ";
        // line 146
        echo "        ";
        // line 147
        echo "    ";
        // line 148
        echo "
    <hr>

    ";
        // line 152
        echo "    ";
        // line 153
        echo "        ";
        // line 154
        echo "            ";
        // line 155
        echo "                ";
        // line 156
        echo "            ";
        // line 157
        echo "            ";
        // line 158
        echo "            ";
        // line 159
        echo "            ";
        // line 160
        echo "            ";
        // line 161
        echo "            ";
        // line 162
        echo "            ";
        // line 163
        echo "        ";
        // line 164
        echo "
        ";
        // line 166
        echo "            ";
        // line 167
        echo "                ";
        // line 168
        echo "            ";
        // line 169
        echo "            ";
        // line 170
        echo "                ";
        // line 171
        echo "            ";
        // line 172
        echo "            ";
        // line 173
        echo "                ";
        // line 174
        echo "            ";
        // line 175
        echo "            ";
        // line 176
        echo "                ";
        // line 177
        echo "            ";
        // line 178
        echo "        ";
        // line 179
        echo "    ";
        
        $__internal_47870e7798415552906ff89a86db76fb5e5f6c3bc4198df41a5319a53a2351b1->leave($__internal_47870e7798415552906ff89a86db76fb5e5f6c3bc4198df41a5319a53a2351b1_prof);

        
        $__internal_a96a44fb76d096651a363454678c46dcf5f012ca250e9595e73f8dea34f0e7b0->leave($__internal_a96a44fb76d096651a363454678c46dcf5f012ca250e9595e73f8dea34f0e7b0_prof);

    }

    // line 182
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6afa8dbecb6c28a62cc14f034022ef1042f02f4d9367079ef21d4fc2a4edcbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6afa8dbecb6c28a62cc14f034022ef1042f02f4d9367079ef21d4fc2a4edcbf->enter($__internal_e6afa8dbecb6c28a62cc14f034022ef1042f02f4d9367079ef21d4fc2a4edcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8367bb51551e020dfc5a7087d647e2cdc717f137bedd8f89eef0e7c1fc15629d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8367bb51551e020dfc5a7087d647e2cdc717f137bedd8f89eef0e7c1fc15629d->enter($__internal_8367bb51551e020dfc5a7087d647e2cdc717f137bedd8f89eef0e7c1fc15629d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 183
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
    <script>
        jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
";
        
        $__internal_8367bb51551e020dfc5a7087d647e2cdc717f137bedd8f89eef0e7c1fc15629d->leave($__internal_8367bb51551e020dfc5a7087d647e2cdc717f137bedd8f89eef0e7c1fc15629d_prof);

        
        $__internal_e6afa8dbecb6c28a62cc14f034022ef1042f02f4d9367079ef21d4fc2a4edcbf->leave($__internal_e6afa8dbecb6c28a62cc14f034022ef1042f02f4d9367079ef21d4fc2a4edcbf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pages:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 183,  369 => 182,  359 => 179,  357 => 178,  355 => 177,  353 => 176,  351 => 175,  349 => 174,  347 => 173,  345 => 172,  343 => 171,  341 => 170,  339 => 169,  337 => 168,  335 => 167,  333 => 166,  330 => 164,  328 => 163,  326 => 162,  324 => 161,  322 => 160,  320 => 159,  318 => 158,  316 => 157,  314 => 156,  312 => 155,  310 => 154,  308 => 153,  306 => 152,  301 => 148,  299 => 147,  297 => 146,  295 => 145,  293 => 144,  291 => 143,  289 => 142,  287 => 141,  285 => 140,  283 => 139,  281 => 138,  279 => 137,  276 => 135,  274 => 134,  272 => 133,  270 => 132,  268 => 131,  266 => 130,  264 => 129,  262 => 128,  260 => 127,  258 => 126,  255 => 124,  253 => 123,  246 => 117,  242 => 115,  238 => 113,  236 => 111,  233 => 110,  231 => 108,  228 => 107,  226 => 105,  223 => 104,  221 => 102,  218 => 101,  216 => 99,  211 => 96,  208 => 94,  206 => 92,  203 => 91,  201 => 89,  198 => 88,  196 => 86,  191 => 83,  188 => 81,  186 => 79,  183 => 78,  181 => 76,  178 => 75,  176 => 73,  170 => 69,  167 => 67,  165 => 65,  162 => 64,  160 => 62,  156 => 61,  151 => 60,  146 => 58,  144 => 57,  141 => 55,  100 => 16,  94 => 12,  85 => 11,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Pages:generate{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: generate page</h2>
    </div>

    <div class=\"container\"><h1><img src=\"./{{ asset('apple-touch-icon.png') }}\"> INSTITUTE OF TECHNOLOGY BLANCHARDSTOWN</h1></div>
    <div id=\"exTab1\" class=\"container\">
        <ul class=\"nav nav-pills\">
            <li class=\"active\">
                <a href=\"#1a\" data-toggle=\"tab\">Step 1</a>
            </li>
            <li>
                <a href=\"#2a\" data-toggle=\"tab\">Step 2</a>
            </li>
            <li>
                <a href=\"#3a\" data-toggle=\"tab\">Step 3</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 4</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 5</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 6</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 7</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 8</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 9</a>
            </li>
            <li>
                <a href=\"#4a\" data-toggle=\"tab\">Step 10</a>
            </li>
        </ul>

        <div class=\"tab-content clearfix\">
            <div class=\"tab-pane active\" id=\"1a\">
                <h3>Step 1</h3>
                {#<h3>Content's background color is the same for the tab</h3>#}
                <div class=\"row\">
                    {#<div class=\"col-xs-12\">#}
                        {#<h1>Something New</h1>#}
                        {{ form_start(examForm) }}
                        {#{{ form_widget(examForm) }}#}
                    {{ form_row(examForm.year) }}
                    {{ form_row(examForm.semester) }}
                    {{ form_row(examForm.dateExamination, {
                            'label': 'Date of Examination'
                    }) }}
                    {{ form_row(examForm.timeExamination, {
                        'label': 'Time of Examination'
                    }) }}
                    {#</div>#}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"2a\">
                <h3>Step 2</h3>
                    {{ form_row(examForm.progCode, {
                        'label': 'Program Code'
                    }) }}
                    {{ form_row(examForm.progTitle, {
                        'label': 'Program Title'
                    }) }}
                    {{ form_row(examForm.modCode, {
                        'label': 'Module Code'
                    }) }}
                {#<h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>#}
            </div>
            <div class=\"tab-pane\" id=\"3a\">
                <h3>Step 3</h3>
                    {{ form_row(examForm.modTitle, {
                        'label': 'Module Title'
                    }) }}
                    {{ form_row(examForm.internalExaminer, {
                        'label': 'Internal Examiner(s):'
                    }) }}
                    {{ form_row(examForm.externalExaminer, {
                        'label': 'External Examiner(s):'
                    }) }}
                {#<h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>#}
            </div>
            <div class=\"tab-pane\" id=\"4a\">
                <h3>Step 4</h3>
                    {{ form_row(examForm.examinerInstructions, {
                        'label': 'Examiner Instructions'
                    }) }}
                    {{ form_row(examForm.firstInstruction, {
                        'label': 'Examiner Instructions'
                    }) }}
                    {{ form_row(examForm.secondInstruction, {
                        'label': 'Examiner Instructions'
                    }) }}
                    {{ form_row(examForm.thirdInstruction, {
                        'label': 'Examiner Instructions'
                    }) }}
                    {{ form_row(examForm.fourthInstruction, {
                        'label': 'Examiner Instructions'
                    }) }}
                    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
                        {{ form_end(examForm) }}
                {#<h3>We use css to change the background color of the content to be equal to the tab</h3>#}
            </div>
        </div>
    </div>


    {#<hr>#}
    {#<div class=\"container\"><h2>Example tab 2 (using standard nav-tabs)</h2></div>#}

    {#<div id=\"exTab2\" class=\"container\">#}
        {#<ul class=\"nav nav-tabs\">#}
            {#<li class=\"active\">#}
                {#<a  href=\"#1\" data-toggle=\"tab\">Overview</a>#}
            {#</li>#}
            {#<li><a href=\"#2\" data-toggle=\"tab\">Without clearfix</a>#}
            {#</li>#}
            {#<li><a href=\"#3\" data-toggle=\"tab\">Solution</a>#}
            {#</li>#}
        {#</ul>#}

        {#<div class=\"tab-content \">#}
            {#<div class=\"tab-pane active\" id=\"1\">#}
                {#<h3>Standard tab panel created on bootstrap using nav-tabs</h3>#}
            {#</div>#}
            {#<div class=\"tab-pane\" id=\"2\">#}
                {#<h3>Notice the gap between the content and tab after applying a background color</h3>#}
            {#</div>#}
            {#<div class=\"tab-pane\" id=\"3\">#}
                {#<h3>add clearfix to tab-content (see the css)</h3>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}

    <hr>

    {#<div class=\"container\"><h2>Example 3 </h2></div>#}
    {#<div id=\"exTab3\" class=\"container\">#}
        {#<ul  class=\"nav nav-pills\">#}
            {#<li class=\"active\">#}
                {#<a  href=\"#1b\" data-toggle=\"tab\">Overview</a>#}
            {#</li>#}
            {#<li><a href=\"#2b\" data-toggle=\"tab\">Using nav-pills</a>#}
            {#</li>#}
            {#<li><a href=\"#3b\" data-toggle=\"tab\">Applying clearfix</a>#}
            {#</li>#}
            {#<li><a href=\"#4a\" data-toggle=\"tab\">Background color</a>#}
            {#</li>#}
        {#</ul>#}

        {#<div class=\"tab-content clearfix\">#}
            {#<div class=\"tab-pane active\" id=\"1b\">#}
                {#<h3>Same as example 1 but we have now styled the tab's corner</h3>#}
            {#</div>#}
            {#<div class=\"tab-pane\" id=\"2b\">#}
                {#<h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>#}
            {#</div>#}
            {#<div class=\"tab-pane\" id=\"3b\">#}
                {#<h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>#}
            {#</div>#}
            {#<div class=\"tab-pane\" id=\"4b\">#}
                {#<h3>We use css to change the background color of the content to be equal to the tab</h3>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
    <script>
        jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
{% endblock %}
", "AppBundle:Pages:orders.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/src/AppBundle/Resources/views/Pages/orders.html.twig");
    }
}
