<?php

/* @Swiftmailer/Collector/swiftmailer.html.twig */
class __TwigTemplate_bcb0869e6fbbaf0f89c33af1fe81259ff147ffceecccb7e9490a6be037d66977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Swiftmailer/Collector/swiftmailer.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_462b8cbd1d2aa3c3a0758949071121d363a8544c350ffd96848d2851c0ecd573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462b8cbd1d2aa3c3a0758949071121d363a8544c350ffd96848d2851c0ecd573->enter($__internal_462b8cbd1d2aa3c3a0758949071121d363a8544c350ffd96848d2851c0ecd573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Swiftmailer/Collector/swiftmailer.html.twig"));

        $__internal_1a31dc77d0f8acac9e813cb389305e14748d559ee0698c48dfab239261ec8a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a31dc77d0f8acac9e813cb389305e14748d559ee0698c48dfab239261ec8a55->enter($__internal_1a31dc77d0f8acac9e813cb389305e14748d559ee0698c48dfab239261ec8a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Swiftmailer/Collector/swiftmailer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462b8cbd1d2aa3c3a0758949071121d363a8544c350ffd96848d2851c0ecd573->leave($__internal_462b8cbd1d2aa3c3a0758949071121d363a8544c350ffd96848d2851c0ecd573_prof);

        
        $__internal_1a31dc77d0f8acac9e813cb389305e14748d559ee0698c48dfab239261ec8a55->leave($__internal_1a31dc77d0f8acac9e813cb389305e14748d559ee0698c48dfab239261ec8a55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_467c28b107e54db7065b979b09b471bdb2a5db62588398287c10f63edd5f8431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467c28b107e54db7065b979b09b471bdb2a5db62588398287c10f63edd5f8431->enter($__internal_467c28b107e54db7065b979b09b471bdb2a5db62588398287c10f63edd5f8431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d986f456c2a7cf77621e8eca1151aaed3b71cecbb577f7353d3baab6cc597f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d986f456c2a7cf77621e8eca1151aaed3b71cecbb577f7353d3baab6cc597f4->enter($__internal_9d986f456c2a7cf77621e8eca1151aaed3b71cecbb577f7353d3baab6cc597f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array())) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 9
                echo "                <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-status\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array()), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@Swiftmailer/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "
        ";
            // line 17
            ob_start();
            // line 18
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array()), "html", null, true);
            echo "</span>
            </div>

            ";
            // line 23
            if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 24
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mailers", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 25
                    echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                    // line 26
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</b>
                        <span>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                    echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Is spooled?</b>
                        <span>";
                    // line 31
                    echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isSpool", array(0 => $context["name"]), "method")) ? ("yes") : ("no"));
                    echo "</span>
                    </div>

                    ";
                    // line 34
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 35
                        echo "                        <hr>
                    ";
                    }
                    // line 37
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            ";
            } else {
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mailers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 40
                    echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                    // line 41
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " mailer</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 42
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method"), 0)) : (0)), "html", null, true);
                    echo "</span>
                        &nbsp; (<small>";
                    // line 43
                    echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                    echo "</small>)
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            ";
            }
            // line 47
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 48
            echo "
        ";
            // line 49
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
            echo "
    ";
        }
        
        $__internal_9d986f456c2a7cf77621e8eca1151aaed3b71cecbb577f7353d3baab6cc597f4->leave($__internal_9d986f456c2a7cf77621e8eca1151aaed3b71cecbb577f7353d3baab6cc597f4_prof);

        
        $__internal_467c28b107e54db7065b979b09b471bdb2a5db62588398287c10f63edd5f8431->leave($__internal_467c28b107e54db7065b979b09b471bdb2a5db62588398287c10f63edd5f8431_prof);

    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ecffc752c80fbc900a6a8d978c1991a16b7ca9bb3f3202a4bb2c7d1517ea669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecffc752c80fbc900a6a8d978c1991a16b7ca9bb3f3202a4bb2c7d1517ea669->enter($__internal_1ecffc752c80fbc900a6a8d978c1991a16b7ca9bb3f3202a4bb2c7d1517ea669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c4300705fb285071e48e26627a45954d6d70436c3501fd2448eaee066a9ca013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4300705fb285071e48e26627a45954d6d70436c3501fd2448eaee066a9ca013->enter($__internal_c4300705fb285071e48e26627a45954d6d70436c3501fd2448eaee066a9ca013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 54
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 55
        echo "
    <span class=\"label ";
        // line 56
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array())) ? ("") : ("disabled"));
        echo "\">
        ";
        // line 57
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 58
            echo "            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Swiftmailer\" /></span>
        ";
        } else {
            // line 60
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@Swiftmailer/Collector/icon.svg");
            echo "</span>
        ";
        }
        // line 62
        echo "
        <strong>E-Mails</strong>
        ";
        // line 64
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array()) > 0)) {
            // line 65
            echo "            <span class=\"count\">
                <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 69
        echo "    </span>
";
        
        $__internal_c4300705fb285071e48e26627a45954d6d70436c3501fd2448eaee066a9ca013->leave($__internal_c4300705fb285071e48e26627a45954d6d70436c3501fd2448eaee066a9ca013_prof);

        
        $__internal_1ecffc752c80fbc900a6a8d978c1991a16b7ca9bb3f3202a4bb2c7d1517ea669->leave($__internal_1ecffc752c80fbc900a6a8d978c1991a16b7ca9bb3f3202a4bb2c7d1517ea669_prof);

    }

    // line 72
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a27184e6628b28f3efd050486894a9f1073584738261a9d897f57dbaff0109a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27184e6628b28f3efd050486894a9f1073584738261a9d897f57dbaff0109a9->enter($__internal_a27184e6628b28f3efd050486894a9f1073584738261a9d897f57dbaff0109a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8105285494ba269b6e92cc1eacf637b09248b129145427929da7f44fb6023c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8105285494ba269b6e92cc1eacf637b09248b129145427929da7f44fb6023c66->enter($__internal_8105285494ba269b6e92cc1eacf637b09248b129145427929da7f44fb6023c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 73
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 74
        echo "
    ";
        // line 75
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 76
            echo "        <style>
            h3 { margin-top: 2em; }
            h3 span { color: #999; font-weight: normal; }
            h3 small { color: #999; }
            h4 { font-size: 14px; font-weight: bold; }
            .card { background: #F5F5F5; margin: .5em 0 1em; padding: .5em; }
            .card .label { display: block; font-size: 13px; font-weight: bold; margin-bottom: .5em; }
            .card .card-block { margin-bottom: 1em; }
        </style>
    ";
        }
        // line 86
        echo "
    <h2>E-mails</h2>

    ";
        // line 89
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mailers", array())) {
            // line 90
            echo "        <div class=\"empty\">
            <p>No e-mail messages were sent.</p>
        </div>
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        if (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1) || (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mailers", array())) > 1))) {
            // line 96
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Mailer Name</th>
                    <th scope=\"col\">Num. of messages</th>
                    <th scope=\"col\">Messages status</th>
                    <th scope=\"col\">Notes</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mailers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 107
                echo "                    <tr>
                        <th class=\"font-normal\">";
                // line 108
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                        <td class=\"font-normal\">";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 110
                echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                echo "</td>
                        <td class=\"font-normal\">";
                // line 111
                echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isDefaultMailer", array(0 => $context["name"]), "method")) ? ("This is the default mailer") : (""));
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 117
            echo "        <div class=\"metrics\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mailers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 119
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                echo "</span>
                    <span class=\"label\">";
                // line 121
                echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                echo " ";
                echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messageCount", array(0 => $context["name"]), "method") == 1)) ? ("message") : ("messages"));
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "        </div>
    ";
        }
        // line 126
        echo "
    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mailers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 128
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mailers", array())) > 1)) {
                // line 129
                echo "            <h3>
                ";
                // line 130
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span>mailer</span>
                <small>";
                // line 131
                echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isDefaultMailer", array(0 => $context["name"]), "method")) ? ("(default app mailer)") : (""));
                echo "</small>
            </h3>
        ";
            }
            // line 134
            echo "
        ";
            // line 135
            if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array(0 => $context["name"]), "method")) {
                // line 136
                echo "            <div class=\"empty\">
                <p>No e-mail messages were sent.</p>
            </div>
        ";
            } else {
                // line 140
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array(0 => $context["name"]), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 141
                    echo "                ";
                    if (($this->getAttribute($context["loop"], "length", array()) > 1)) {
                        // line 142
                        echo "                    <h4>E-mail #";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo " details</h4>
                ";
                    } else {
                        // line 144
                        echo "                    <h4>E-mail details</h4>
                ";
                    }
                    // line 146
                    echo "
                <div class=\"card\">
                    <div class=\"card-block\">
                        <span class=\"label\">Message headers</span>
                        <pre>";
                    // line 150
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["message"], "headers", array()), "all", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        // line 151
                        echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "</pre>
                    </div>

                    <div class=\"card-block\">
                        <span class=\"label\">Message body</span>
                        <pre>";
                    // line 158
                    if (($this->getAttribute(($context["messagePart"] ?? null), "charset", array(), "any", true, true) && $this->getAttribute($context["message"], "charset", array()))) {
                        // line 159
                        echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["message"], "body", array()), "UTF-8", $this->getAttribute($context["message"], "charset", array())), "html", null, true);
                    } else {
                        // line 161
                        echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
                    }
                    // line 163
                    echo "</pre>
                    </div>

                    ";
                    // line 166
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["message"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["messagePart"]) {
                        if (twig_in_filter($this->getAttribute($context["messagePart"], "contentType", array()), array(0 => "text/plain", 1 => "text/html"))) {
                            // line 167
                            echo "                        <div class=\"card-block\">
                            <span class=\"label\">Alternative part (";
                            // line 168
                            echo twig_escape_filter($this->env, $this->getAttribute($context["messagePart"], "contentType", array()), "html", null, true);
                            echo ")</span>
                            <pre>";
                            // line 170
                            if (($this->getAttribute($context["messagePart"], "charset", array(), "any", true, true) && $this->getAttribute($context["messagePart"], "charset", array()))) {
                                // line 171
                                echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["messagePart"], "body", array()), "UTF-8", $this->getAttribute($context["messagePart"], "charset", array())), "html", null, true);
                            } else {
                                // line 173
                                echo twig_escape_filter($this->env, $this->getAttribute($context["messagePart"], "body", array()), "html", null, true);
                            }
                            // line 175
                            echo "</pre>
                        </div>
                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagePart'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 178
                    echo "
                    ";
                    // line 179
                    $context["attachments"] = $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "extractAttachments", array(0 => $context["message"]), "method");
                    // line 180
                    echo "                    ";
                    if (($context["attachments"] ?? $this->getContext($context, "attachments"))) {
                        // line 181
                        echo "                        <div class=\"card-block\">
                            <span class=\"label\">
                                ";
                        // line 183
                        if ((twig_length_filter($this->env, ($context["attachments"] ?? $this->getContext($context, "attachments"))) > 1)) {
                            // line 184
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["attachments"] ?? $this->getContext($context, "attachments"))), "html", null, true);
                            echo " Attachments
                                ";
                        } else {
                            // line 186
                            echo "                                    1 Attachment
                                ";
                        }
                        // line 188
                        echo "                            </span>

                            <ol>
                                ";
                        // line 191
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["attachments"] ?? $this->getContext($context, "attachments")));
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            // line 192
                            echo "                                    <li>
                                        Filename:
                                        ";
                            // line 194
                            echo twig_escape_filter($this->env, $this->getAttribute($context["attachment"], "filename", array()), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 197
                        echo "                            </ol>
                        </div>
                    ";
                    }
                    // line 200
                    echo "                </div>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "        ";
            }
            // line 203
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8105285494ba269b6e92cc1eacf637b09248b129145427929da7f44fb6023c66->leave($__internal_8105285494ba269b6e92cc1eacf637b09248b129145427929da7f44fb6023c66_prof);

        
        $__internal_a27184e6628b28f3efd050486894a9f1073584738261a9d897f57dbaff0109a9->leave($__internal_a27184e6628b28f3efd050486894a9f1073584738261a9d897f57dbaff0109a9_prof);

    }

    public function getTemplateName()
    {
        return "@Swiftmailer/Collector/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 203,  585 => 202,  570 => 200,  565 => 197,  556 => 194,  552 => 192,  548 => 191,  543 => 188,  539 => 186,  533 => 184,  531 => 183,  527 => 181,  524 => 180,  522 => 179,  519 => 178,  510 => 175,  507 => 173,  504 => 171,  502 => 170,  498 => 168,  495 => 167,  490 => 166,  485 => 163,  482 => 161,  479 => 159,  477 => 158,  470 => 152,  464 => 151,  460 => 150,  454 => 146,  450 => 144,  444 => 142,  441 => 141,  423 => 140,  417 => 136,  415 => 135,  412 => 134,  406 => 131,  402 => 130,  399 => 129,  396 => 128,  392 => 127,  389 => 126,  385 => 124,  374 => 121,  370 => 120,  367 => 119,  363 => 118,  360 => 117,  355 => 114,  346 => 111,  342 => 110,  338 => 109,  334 => 108,  331 => 107,  327 => 106,  315 => 96,  313 => 95,  310 => 94,  304 => 90,  302 => 89,  297 => 86,  285 => 76,  283 => 75,  280 => 74,  277 => 73,  268 => 72,  257 => 69,  251 => 66,  248 => 65,  246 => 64,  242 => 62,  236 => 60,  232 => 58,  230 => 57,  226 => 56,  223 => 55,  220 => 54,  211 => 53,  198 => 49,  195 => 48,  192 => 47,  189 => 46,  180 => 43,  176 => 42,  172 => 41,  169 => 40,  164 => 39,  161 => 38,  147 => 37,  143 => 35,  141 => 34,  135 => 31,  128 => 27,  124 => 26,  121 => 25,  103 => 24,  101 => 23,  95 => 20,  91 => 18,  89 => 17,  86 => 16,  83 => 15,  78 => 13,  73 => 12,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if collector.messageCount %}
        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-status\">{{ collector.messageCount }}</span>
            {% else %}
                {{ include('@Swiftmailer/Collector/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ collector.messageCount }}</span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.messageCount }}</span>
            </div>

            {% if profiler_markup_version == 1 %}
                {% for name in collector.mailers %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>{{ name }}</b>
                        <span>{{ collector.messageCount(name) }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Is spooled?</b>
                        <span>{{ collector.isSpool(name) ? 'yes' : 'no' }}</span>
                    </div>

                    {% if not loop.first %}
                        <hr>
                    {% endif %}
                {% endfor %}
            {% else %}
                {% for name in collector.mailers %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>{{ name }} mailer</b>
                        <span class=\"sf-toolbar-status\">{{ collector.messageCount(name)|default(0) }}</span>
                        &nbsp; (<small>{{ collector.isSpool(name) ? 'spooled' : 'sent' }}</small>)
                    </div>
                {% endfor %}
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <span class=\"label {{ collector.messageCount ? '' : 'disabled' }}\">
        {% if profiler_markup_version == 1 %}
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Swiftmailer\" /></span>
        {% else %}
            <span class=\"icon\">{{ include('@Swiftmailer/Collector/icon.svg') }}</span>
        {% endif %}

        <strong>E-Mails</strong>
        {% if collector.messageCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.messageCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}
        <style>
            h3 { margin-top: 2em; }
            h3 span { color: #999; font-weight: normal; }
            h3 small { color: #999; }
            h4 { font-size: 14px; font-weight: bold; }
            .card { background: #F5F5F5; margin: .5em 0 1em; padding: .5em; }
            .card .label { display: block; font-size: 13px; font-weight: bold; margin-bottom: .5em; }
            .card .card-block { margin-bottom: 1em; }
        </style>
    {% endif %}

    <h2>E-mails</h2>

    {% if not collector.mailers %}
        <div class=\"empty\">
            <p>No e-mail messages were sent.</p>
        </div>
    {% endif %}

    {% if profiler_markup_version == 1 or collector.mailers|length > 1 %}
        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Mailer Name</th>
                    <th scope=\"col\">Num. of messages</th>
                    <th scope=\"col\">Messages status</th>
                    <th scope=\"col\">Notes</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.mailers %}
                    <tr>
                        <th class=\"font-normal\">{{ name }}</th>
                        <td class=\"font-normal\">{{ collector.messageCount(name) }}</td>
                        <td class=\"font-normal\">{{ collector.isSpool(name) ? 'spooled' : 'sent' }}</td>
                        <td class=\"font-normal\">{{ collector.isDefaultMailer(name) ? 'This is the default mailer' }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"metrics\">
            {% for name in collector.mailers %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.messageCount(name) }}</span>
                    <span class=\"label\">{{ collector.isSpool(name) ? 'spooled' : 'sent' }} {{ collector.messageCount(name) == 1 ? 'message' : 'messages' }}</span>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {% for name in collector.mailers %}
        {% if collector.mailers|length > 1 %}
            <h3>
                {{ name }} <span>mailer</span>
                <small>{{ collector.isDefaultMailer(name) ? '(default app mailer)' }}</small>
            </h3>
        {% endif %}

        {% if not collector.messages(name) %}
            <div class=\"empty\">
                <p>No e-mail messages were sent.</p>
            </div>
        {% else %}
            {% for message in collector.messages(name) %}
                {% if loop.length > 1 %}
                    <h4>E-mail #{{ loop.index }} details</h4>
                {% else %}
                    <h4>E-mail details</h4>
                {% endif %}

                <div class=\"card\">
                    <div class=\"card-block\">
                        <span class=\"label\">Message headers</span>
                        <pre>{% for header in message.headers.all %}
                            {{- header -}}
                        {% endfor %}</pre>
                    </div>

                    <div class=\"card-block\">
                        <span class=\"label\">Message body</span>
                        <pre>
                            {%- if messagePart.charset is defined and message.charset %}
                                {{- message.body|convert_encoding('UTF-8', message.charset) }}
                            {%- else %}
                                {{- message.body }}
                            {%- endif -%}
                        </pre>
                    </div>

                    {% for messagePart in message.children if messagePart.contentType in ['text/plain', 'text/html'] %}
                        <div class=\"card-block\">
                            <span class=\"label\">Alternative part ({{ messagePart.contentType }})</span>
                            <pre>
                                {%- if messagePart.charset is defined and messagePart.charset %}
                                    {{- messagePart.body|convert_encoding('UTF-8', messagePart.charset) }}
                                {%- else %}
                                    {{- messagePart.body }}
                                {%- endif -%}
                            </pre>
                        </div>
                    {% endfor %}

                    {% set attachments = collector.extractAttachments(message) %}
                    {% if attachments %}
                        <div class=\"card-block\">
                            <span class=\"label\">
                                {% if attachments|length > 1 %}
                                    {{ attachments|length }} Attachments
                                {% else %}
                                    1 Attachment
                                {% endif %}
                            </span>

                            <ol>
                                {% for attachment in attachments %}
                                    <li>
                                        Filename:
                                        {{ attachment.filename }}
                                    </li>
                                {% endfor %}
                            </ol>
                        </div>
                    {% endif %}
                </div>
            {% endfor %}
        {% endif %}
    {% endfor %}
{% endblock %}
", "@Swiftmailer/Collector/swiftmailer.html.twig", "/Users/ashleyholmes/Sites/COMPH4021-Project/vendor/symfony/swiftmailer-bundle/Resources/views/Collector/swiftmailer.html.twig");
    }
}
