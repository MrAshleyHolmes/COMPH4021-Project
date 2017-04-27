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
        $__internal_0cabe8fa7e74f455e36ef10d036bd8f0309aa5b10300dda645ffbf43d7bc3bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cabe8fa7e74f455e36ef10d036bd8f0309aa5b10300dda645ffbf43d7bc3bc9->enter($__internal_0cabe8fa7e74f455e36ef10d036bd8f0309aa5b10300dda645ffbf43d7bc3bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:orders.html.twig"));

        $__internal_4f24cd956d2be81dfaedc3d9bf735b26e530ce63c89afc0c154b60d846961e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f24cd956d2be81dfaedc3d9bf735b26e530ce63c89afc0c154b60d846961e30->enter($__internal_4f24cd956d2be81dfaedc3d9bf735b26e530ce63c89afc0c154b60d846961e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cabe8fa7e74f455e36ef10d036bd8f0309aa5b10300dda645ffbf43d7bc3bc9->leave($__internal_0cabe8fa7e74f455e36ef10d036bd8f0309aa5b10300dda645ffbf43d7bc3bc9_prof);

        
        $__internal_4f24cd956d2be81dfaedc3d9bf735b26e530ce63c89afc0c154b60d846961e30->leave($__internal_4f24cd956d2be81dfaedc3d9bf735b26e530ce63c89afc0c154b60d846961e30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a68497abdc68ea7fb38c3154f9a22baca08bf6ce6a6c4d68bc129a46ca1c1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a68497abdc68ea7fb38c3154f9a22baca08bf6ce6a6c4d68bc129a46ca1c1f6->enter($__internal_2a68497abdc68ea7fb38c3154f9a22baca08bf6ce6a6c4d68bc129a46ca1c1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_683c30604969f752e998948fa984148065dee01d5029fcbcc98b968ac25783cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683c30604969f752e998948fa984148065dee01d5029fcbcc98b968ac25783cc->enter($__internal_683c30604969f752e998948fa984148065dee01d5029fcbcc98b968ac25783cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:generate";
        
        $__internal_683c30604969f752e998948fa984148065dee01d5029fcbcc98b968ac25783cc->leave($__internal_683c30604969f752e998948fa984148065dee01d5029fcbcc98b968ac25783cc_prof);

        
        $__internal_2a68497abdc68ea7fb38c3154f9a22baca08bf6ce6a6c4d68bc129a46ca1c1f6->leave($__internal_2a68497abdc68ea7fb38c3154f9a22baca08bf6ce6a6c4d68bc129a46ca1c1f6_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b6a990dc9875562b92d10040725d760c091e296f778ed68417d452721f0b71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6a990dc9875562b92d10040725d760c091e296f778ed68417d452721f0b71f->enter($__internal_8b6a990dc9875562b92d10040725d760c091e296f778ed68417d452721f0b71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_af6a2669e96c10d6d8decba5a8c906476a48ed0ad188def7099acb37c55b611a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6a2669e96c10d6d8decba5a8c906476a48ed0ad188def7099acb37c55b611a->enter($__internal_af6a2669e96c10d6d8decba5a8c906476a48ed0ad188def7099acb37c55b611a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_af6a2669e96c10d6d8decba5a8c906476a48ed0ad188def7099acb37c55b611a->leave($__internal_af6a2669e96c10d6d8decba5a8c906476a48ed0ad188def7099acb37c55b611a_prof);

        
        $__internal_8b6a990dc9875562b92d10040725d760c091e296f778ed68417d452721f0b71f->leave($__internal_8b6a990dc9875562b92d10040725d760c091e296f778ed68417d452721f0b71f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_92c0c93e2d5b7d7b230ea6cf01a1687abd0086e1f5e1271cd23ac8b9b5c4eacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c0c93e2d5b7d7b230ea6cf01a1687abd0086e1f5e1271cd23ac8b9b5c4eacf->enter($__internal_92c0c93e2d5b7d7b230ea6cf01a1687abd0086e1f5e1271cd23ac8b9b5c4eacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c224497800d285cca0cd00c5cd60dfdef35410ac975e5825eefeefb8891a6142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c224497800d285cca0cd00c5cd60dfdef35410ac975e5825eefeefb8891a6142->enter($__internal_c224497800d285cca0cd00c5cd60dfdef35410ac975e5825eefeefb8891a6142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"jumbotron\">
        <h2>Welcome to the Pages: Cover Page</h2>
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
            <div class=\"tab-pane\" id=\"5a\">
                <h3>Step 5</h3>
                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "examinerInstructions", array()), 'row', array("label" => "Examiner Instructions"));
        // line 122
        echo "
                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "firstInstruction", array()), 'row', array("label" => "Examiner Instructions"));
        // line 125
        echo "
                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "secondInstruction", array()), 'row', array("label" => "Examiner Instructions"));
        // line 128
        echo "
                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "thirdInstruction", array()), 'row', array("label" => "Examiner Instructions"));
        // line 131
        echo "
                ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["examForm"] ?? $this->getContext($context, "examForm")), "fourthInstruction", array()), 'row', array("label" => "Examiner Instructions"));
        // line 134
        echo "
                <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
                ";
        // line 136
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["examForm"] ?? $this->getContext($context, "examForm")), 'form_end');
        echo "
                ";
        // line 138
        echo "            </div>
        </div>
    </div>


    ";
        // line 144
        echo "    ";
        // line 145
        echo "
    ";
        // line 147
        echo "        ";
        // line 148
        echo "            ";
        // line 149
        echo "                ";
        // line 150
        echo "            ";
        // line 151
        echo "            ";
        // line 152
        echo "            ";
        // line 153
        echo "            ";
        // line 154
        echo "            ";
        // line 155
        echo "        ";
        // line 156
        echo "
        ";
        // line 158
        echo "            ";
        // line 159
        echo "                ";
        // line 160
        echo "            ";
        // line 161
        echo "            ";
        // line 162
        echo "                ";
        // line 163
        echo "            ";
        // line 164
        echo "            ";
        // line 165
        echo "                ";
        // line 166
        echo "            ";
        // line 167
        echo "        ";
        // line 168
        echo "    ";
        // line 169
        echo "
    <hr>

    ";
        // line 173
        echo "    ";
        // line 174
        echo "        ";
        // line 175
        echo "            ";
        // line 176
        echo "                ";
        // line 177
        echo "            ";
        // line 178
        echo "            ";
        // line 179
        echo "            ";
        // line 180
        echo "            ";
        // line 181
        echo "            ";
        // line 182
        echo "            ";
        // line 183
        echo "            ";
        // line 184
        echo "        ";
        // line 185
        echo "
        ";
        // line 187
        echo "            ";
        // line 188
        echo "                ";
        // line 189
        echo "            ";
        // line 190
        echo "            ";
        // line 191
        echo "                ";
        // line 192
        echo "            ";
        // line 193
        echo "            ";
        // line 194
        echo "                ";
        // line 195
        echo "            ";
        // line 196
        echo "            ";
        // line 197
        echo "                ";
        // line 198
        echo "            ";
        // line 199
        echo "        ";
        // line 200
        echo "    ";
        
        $__internal_c224497800d285cca0cd00c5cd60dfdef35410ac975e5825eefeefb8891a6142->leave($__internal_c224497800d285cca0cd00c5cd60dfdef35410ac975e5825eefeefb8891a6142_prof);

        
        $__internal_92c0c93e2d5b7d7b230ea6cf01a1687abd0086e1f5e1271cd23ac8b9b5c4eacf->leave($__internal_92c0c93e2d5b7d7b230ea6cf01a1687abd0086e1f5e1271cd23ac8b9b5c4eacf_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2ab3da562f05057376ff637f40166b7da2af2b81eba27808187e32671f82565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ab3da562f05057376ff637f40166b7da2af2b81eba27808187e32671f82565->enter($__internal_c2ab3da562f05057376ff637f40166b7da2af2b81eba27808187e32671f82565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04edcf977f95c8dce8b0672a9f229c2715dc420a6838a8bf20f0d40cfde60ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04edcf977f95c8dce8b0672a9f229c2715dc420a6838a8bf20f0d40cfde60ec7->enter($__internal_04edcf977f95c8dce8b0672a9f229c2715dc420a6838a8bf20f0d40cfde60ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 204
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
        
        $__internal_04edcf977f95c8dce8b0672a9f229c2715dc420a6838a8bf20f0d40cfde60ec7->leave($__internal_04edcf977f95c8dce8b0672a9f229c2715dc420a6838a8bf20f0d40cfde60ec7_prof);

        
        $__internal_c2ab3da562f05057376ff637f40166b7da2af2b81eba27808187e32671f82565->leave($__internal_c2ab3da562f05057376ff637f40166b7da2af2b81eba27808187e32671f82565_prof);

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
        return array (  413 => 204,  404 => 203,  394 => 200,  392 => 199,  390 => 198,  388 => 197,  386 => 196,  384 => 195,  382 => 194,  380 => 193,  378 => 192,  376 => 191,  374 => 190,  372 => 189,  370 => 188,  368 => 187,  365 => 185,  363 => 184,  361 => 183,  359 => 182,  357 => 181,  355 => 180,  353 => 179,  351 => 178,  349 => 177,  347 => 176,  345 => 175,  343 => 174,  341 => 173,  336 => 169,  334 => 168,  332 => 167,  330 => 166,  328 => 165,  326 => 164,  324 => 163,  322 => 162,  320 => 161,  318 => 160,  316 => 159,  314 => 158,  311 => 156,  309 => 155,  307 => 154,  305 => 153,  303 => 152,  301 => 151,  299 => 150,  297 => 149,  295 => 148,  293 => 147,  290 => 145,  288 => 144,  281 => 138,  277 => 136,  273 => 134,  271 => 132,  268 => 131,  266 => 129,  263 => 128,  261 => 126,  258 => 125,  256 => 123,  253 => 122,  251 => 120,  246 => 117,  242 => 115,  238 => 113,  236 => 111,  233 => 110,  231 => 108,  228 => 107,  226 => 105,  223 => 104,  221 => 102,  218 => 101,  216 => 99,  211 => 96,  208 => 94,  206 => 92,  203 => 91,  201 => 89,  198 => 88,  196 => 86,  191 => 83,  188 => 81,  186 => 79,  183 => 78,  181 => 76,  178 => 75,  176 => 73,  170 => 69,  167 => 67,  165 => 65,  162 => 64,  160 => 62,  156 => 61,  151 => 60,  146 => 58,  144 => 57,  141 => 55,  100 => 16,  94 => 12,  85 => 11,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
        <h2>Welcome to the Pages: Cover Page</h2>
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
            <div class=\"tab-pane\" id=\"5a\">
                <h3>Step 5</h3>
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
