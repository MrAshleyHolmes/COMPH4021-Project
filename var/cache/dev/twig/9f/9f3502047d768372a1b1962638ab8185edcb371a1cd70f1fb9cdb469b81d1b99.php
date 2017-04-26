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
        $__internal_7d95f8492eeb38878c4e8de7dda16ad1a90129d39137c83b7dcedae64381d617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d95f8492eeb38878c4e8de7dda16ad1a90129d39137c83b7dcedae64381d617->enter($__internal_7d95f8492eeb38878c4e8de7dda16ad1a90129d39137c83b7dcedae64381d617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:orders.html.twig"));

        $__internal_b6e9132cbb9b6c7a1d81eee2796648ff5543890b17d88a316b486f877e67f411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e9132cbb9b6c7a1d81eee2796648ff5543890b17d88a316b486f877e67f411->enter($__internal_b6e9132cbb9b6c7a1d81eee2796648ff5543890b17d88a316b486f877e67f411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pages:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d95f8492eeb38878c4e8de7dda16ad1a90129d39137c83b7dcedae64381d617->leave($__internal_7d95f8492eeb38878c4e8de7dda16ad1a90129d39137c83b7dcedae64381d617_prof);

        
        $__internal_b6e9132cbb9b6c7a1d81eee2796648ff5543890b17d88a316b486f877e67f411->leave($__internal_b6e9132cbb9b6c7a1d81eee2796648ff5543890b17d88a316b486f877e67f411_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f734f7b432f8403cc3b28681e116451b779c7fabde7271ff9b64c36c012f6894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f734f7b432f8403cc3b28681e116451b779c7fabde7271ff9b64c36c012f6894->enter($__internal_f734f7b432f8403cc3b28681e116451b779c7fabde7271ff9b64c36c012f6894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7233df10765a0a641a4bab2a40d9186f26eca3cdd8272fd115f4ede98518bbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7233df10765a0a641a4bab2a40d9186f26eca3cdd8272fd115f4ede98518bbf8->enter($__internal_7233df10765a0a641a4bab2a40d9186f26eca3cdd8272fd115f4ede98518bbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Pages:generate";
        
        $__internal_7233df10765a0a641a4bab2a40d9186f26eca3cdd8272fd115f4ede98518bbf8->leave($__internal_7233df10765a0a641a4bab2a40d9186f26eca3cdd8272fd115f4ede98518bbf8_prof);

        
        $__internal_f734f7b432f8403cc3b28681e116451b779c7fabde7271ff9b64c36c012f6894->leave($__internal_f734f7b432f8403cc3b28681e116451b779c7fabde7271ff9b64c36c012f6894_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2709f0d44237da11b4cea8429d2c6b611791dcde9e4d701f450042863d187678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2709f0d44237da11b4cea8429d2c6b611791dcde9e4d701f450042863d187678->enter($__internal_2709f0d44237da11b4cea8429d2c6b611791dcde9e4d701f450042863d187678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d59d05f61ed35fdc5ad3cb0401720e670565b3141a06af9f255986c180ed6f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59d05f61ed35fdc5ad3cb0401720e670565b3141a06af9f255986c180ed6f00->enter($__internal_d59d05f61ed35fdc5ad3cb0401720e670565b3141a06af9f255986c180ed6f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_d59d05f61ed35fdc5ad3cb0401720e670565b3141a06af9f255986c180ed6f00->leave($__internal_d59d05f61ed35fdc5ad3cb0401720e670565b3141a06af9f255986c180ed6f00_prof);

        
        $__internal_2709f0d44237da11b4cea8429d2c6b611791dcde9e4d701f450042863d187678->leave($__internal_2709f0d44237da11b4cea8429d2c6b611791dcde9e4d701f450042863d187678_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d70618a34f7bed93cbe1f847d25a6a9cdd53add27187df561d81819c61a1b640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70618a34f7bed93cbe1f847d25a6a9cdd53add27187df561d81819c61a1b640->enter($__internal_d70618a34f7bed93cbe1f847d25a6a9cdd53add27187df561d81819c61a1b640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e5eb73e211868b57a55afde65d62e2bebdf97b4efd2b31e2da82bfe3825126e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5eb73e211868b57a55afde65d62e2bebdf97b4efd2b31e2da82bfe3825126e->enter($__internal_2e5eb73e211868b57a55afde65d62e2bebdf97b4efd2b31e2da82bfe3825126e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e5eb73e211868b57a55afde65d62e2bebdf97b4efd2b31e2da82bfe3825126e->leave($__internal_2e5eb73e211868b57a55afde65d62e2bebdf97b4efd2b31e2da82bfe3825126e_prof);

        
        $__internal_d70618a34f7bed93cbe1f847d25a6a9cdd53add27187df561d81819c61a1b640->leave($__internal_d70618a34f7bed93cbe1f847d25a6a9cdd53add27187df561d81819c61a1b640_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98f84ca2cf5c60e76a96aef76beaca93419395ec5eedb298edaec9e73eeb4f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f84ca2cf5c60e76a96aef76beaca93419395ec5eedb298edaec9e73eeb4f2e->enter($__internal_98f84ca2cf5c60e76a96aef76beaca93419395ec5eedb298edaec9e73eeb4f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3fc8b6e63cbf15e0c5c62f50a024a0ed0476f3cfa4ee3325577575845b3f5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fc8b6e63cbf15e0c5c62f50a024a0ed0476f3cfa4ee3325577575845b3f5fd->enter($__internal_b3fc8b6e63cbf15e0c5c62f50a024a0ed0476f3cfa4ee3325577575845b3f5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b3fc8b6e63cbf15e0c5c62f50a024a0ed0476f3cfa4ee3325577575845b3f5fd->leave($__internal_b3fc8b6e63cbf15e0c5c62f50a024a0ed0476f3cfa4ee3325577575845b3f5fd_prof);

        
        $__internal_98f84ca2cf5c60e76a96aef76beaca93419395ec5eedb298edaec9e73eeb4f2e->leave($__internal_98f84ca2cf5c60e76a96aef76beaca93419395ec5eedb298edaec9e73eeb4f2e_prof);

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
