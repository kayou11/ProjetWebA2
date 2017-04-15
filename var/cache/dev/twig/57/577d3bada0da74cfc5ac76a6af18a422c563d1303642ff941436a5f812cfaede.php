<?php

/* SyliusThemeBundle:Collector:theme.html.twig */
class __TwigTemplate_8782fefa85efe476588cb054c6f2934518d95196f1fc2a6c5a152a9d66b5f2b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "SyliusThemeBundle:Collector:theme.html.twig", 1);
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
        $__internal_c67107fde9de362333180fde2b79bea295462fc1ffc9177464d986e701d0c2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67107fde9de362333180fde2b79bea295462fc1ffc9177464d986e701d0c2e1->enter($__internal_c67107fde9de362333180fde2b79bea295462fc1ffc9177464d986e701d0c2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusThemeBundle:Collector:theme.html.twig"));

        $__internal_9bec90cfab83069c5b9160fc075cdebf3349fe770a423b535b03b9fff2c5cc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bec90cfab83069c5b9160fc075cdebf3349fe770a423b535b03b9fff2c5cc1d->enter($__internal_9bec90cfab83069c5b9160fc075cdebf3349fe770a423b535b03b9fff2c5cc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusThemeBundle:Collector:theme.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c67107fde9de362333180fde2b79bea295462fc1ffc9177464d986e701d0c2e1->leave($__internal_c67107fde9de362333180fde2b79bea295462fc1ffc9177464d986e701d0c2e1_prof);

        
        $__internal_9bec90cfab83069c5b9160fc075cdebf3349fe770a423b535b03b9fff2c5cc1d->leave($__internal_9bec90cfab83069c5b9160fc075cdebf3349fe770a423b535b03b9fff2c5cc1d_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15a7ab88815a34084b87801e86929ead1188590f76338a0263995094e2380555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a7ab88815a34084b87801e86929ead1188590f76338a0263995094e2380555->enter($__internal_15a7ab88815a34084b87801e86929ead1188590f76338a0263995094e2380555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96150a55ffa19ab1797043bfb4ec3bc20f90486882e79907e6b2064344947e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96150a55ffa19ab1797043bfb4ec3bc20f90486882e79907e6b2064344947e41->enter($__internal_96150a55ffa19ab1797043bfb4ec3bc20f90486882e79907e6b2064344947e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "themes", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@SyliusTheme/Collector/Icon/theme.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "usedTheme", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "usedTheme", array()), twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "themes", array())))) : (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "themes", array())))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>All themes</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "themes", array())), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Used themes</b>
                <span class=\"sf-toolbar-status\">";
            // line 20
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "usedThemes", array())), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig");
            echo "
    ";
        }
        
        $__internal_96150a55ffa19ab1797043bfb4ec3bc20f90486882e79907e6b2064344947e41->leave($__internal_96150a55ffa19ab1797043bfb4ec3bc20f90486882e79907e6b2064344947e41_prof);

        
        $__internal_15a7ab88815a34084b87801e86929ead1188590f76338a0263995094e2380555->leave($__internal_15a7ab88815a34084b87801e86929ead1188590f76338a0263995094e2380555_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3655544956ba63641388023601bfa711a10102dba0bb6ec731f71444103db212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3655544956ba63641388023601bfa711a10102dba0bb6ec731f71444103db212->enter($__internal_3655544956ba63641388023601bfa711a10102dba0bb6ec731f71444103db212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_52dbe5d2c9fadf25e147a7abdf62e6891b56c12d380c149067c85ed6ee813a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dbe5d2c9fadf25e147a7abdf62e6891b56c12d380c149067c85ed6ee813a6d->enter($__internal_52dbe5d2c9fadf25e147a7abdf62e6891b56c12d380c149067c85ed6ee813a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label ";
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "usedThemes", array()))) {
            echo "disabled";
        }
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_include($this->env, $context, "@SyliusTheme/Collector/Icon/theme.svg");
        echo "</span>
        <strong>Themes</strong>
        <span class=\"count\">
            <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "usedThemes", array())), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_52dbe5d2c9fadf25e147a7abdf62e6891b56c12d380c149067c85ed6ee813a6d->leave($__internal_52dbe5d2c9fadf25e147a7abdf62e6891b56c12d380c149067c85ed6ee813a6d_prof);

        
        $__internal_3655544956ba63641388023601bfa711a10102dba0bb6ec731f71444103db212->leave($__internal_3655544956ba63641388023601bfa711a10102dba0bb6ec731f71444103db212_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e48c595039ca2f8b5041f27dfcf2e7c9239d62ed93e3879ef3abc53962316821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48c595039ca2f8b5041f27dfcf2e7c9239d62ed93e3879ef3abc53962316821->enter($__internal_e48c595039ca2f8b5041f27dfcf2e7c9239d62ed93e3879ef3abc53962316821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7182e4a6024e332ccf495ba403ca9d91718833e6723b6b9a0aeb4fbe5aa30c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7182e4a6024e332ccf495ba403ca9d91718833e6723b6b9a0aeb4fbe5aa30c23->enter($__internal_7182e4a6024e332ccf495ba403ca9d91718833e6723b6b9a0aeb4fbe5aa30c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    <h2>Theme Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "usedThemes", array())), "html", null, true);
        echo "</span>
            <span class=\"label\">Used themes</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 48
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "themes", array())), "html", null, true);
        echo "</span>
            <span class=\"label\">All themes</span>
        </div>
    </div>

    <h2>Themes List</h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Used <span class=\"badge\">";
        // line 57
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "usedThemes", array())), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes used.
                </p>

                ";
        // line 64
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "usedThemes", array()))) {
            // line 65
            echo "                    <div class=\"empty\">
                        <p>No themes were used.</p>
                    </div>
                ";
        } else {
            // line 69
            echo "                    ";
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "usedThemes", array()));
            echo "
                ";
        }
        // line 71
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">All <span class=\"badge\">";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "themes", array())), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes found.
                </p>

                ";
        // line 82
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "themes", array()))) {
            // line 83
            echo "                    <div class=\"empty\">
                        <p>No themes were found.</p>
                    </div>
                ";
        } else {
            // line 87
            echo "                    ";
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "themes", array()));
            echo "
                ";
        }
        // line 89
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_7182e4a6024e332ccf495ba403ca9d91718833e6723b6b9a0aeb4fbe5aa30c23->leave($__internal_7182e4a6024e332ccf495ba403ca9d91718833e6723b6b9a0aeb4fbe5aa30c23_prof);

        
        $__internal_e48c595039ca2f8b5041f27dfcf2e7c9239d62ed93e3879ef3abc53962316821->leave($__internal_e48c595039ca2f8b5041f27dfcf2e7c9239d62ed93e3879ef3abc53962316821_prof);

    }

    // line 94
    public function getrender_table($__themes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "themes" => $__themes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1382c22b2a0d97005a0703dc08e9df7cce7ee30fc093955447f6b7ea88267423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1382c22b2a0d97005a0703dc08e9df7cce7ee30fc093955447f6b7ea88267423->enter($__internal_1382c22b2a0d97005a0703dc08e9df7cce7ee30fc093955447f6b7ea88267423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_1a9af4c596a419fef27639753534b751e8bc5f7dc95fb04e7cafa13bd3e912c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1a9af4c596a419fef27639753534b751e8bc5f7dc95fb04e7cafa13bd3e912c7->enter($__internal_1a9af4c596a419fef27639753534b751e8bc5f7dc95fb04e7cafa13bd3e912c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 95
            echo "    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? $this->getContext($context, "themes")));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 105
                echo "            <tr>
                <td class=\"font-normal text-small text-bold\">";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "path", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "description", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "        </tbody>
    </table>
";
            
            $__internal_1a9af4c596a419fef27639753534b751e8bc5f7dc95fb04e7cafa13bd3e912c7->leave($__internal_1a9af4c596a419fef27639753534b751e8bc5f7dc95fb04e7cafa13bd3e912c7_prof);

            
            $__internal_1382c22b2a0d97005a0703dc08e9df7cce7ee30fc093955447f6b7ea88267423->leave($__internal_1382c22b2a0d97005a0703dc08e9df7cce7ee30fc093955447f6b7ea88267423_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusThemeBundle:Collector:theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 111,  291 => 108,  287 => 107,  283 => 106,  280 => 105,  276 => 104,  265 => 95,  247 => 94,  234 => 89,  228 => 87,  222 => 83,  220 => 82,  210 => 75,  204 => 71,  198 => 69,  192 => 65,  190 => 64,  180 => 57,  168 => 48,  160 => 43,  154 => 39,  145 => 38,  131 => 33,  125 => 30,  118 => 29,  109 => 28,  96 => 24,  93 => 23,  87 => 20,  79 => 15,  75 => 13,  73 => 12,  70 => 11,  65 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% import _self as helper %}

{% block toolbar %}
    {% if collector.themes is not empty %}
        {% set icon %}
            {{ include('@SyliusTheme/Collector/Icon/theme.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.usedTheme|default(collector.themes|length) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>All themes</b>
                <span class=\"sf-toolbar-status\">{{ collector.themes|length }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Used themes</b>
                <span class=\"sf-toolbar-status\">{{ collector.usedThemes|length }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig') }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.usedThemes is empty %}disabled{% endif %}\">
        <span class=\"icon\">{{ include('@SyliusTheme/Collector/Icon/theme.svg') }}</span>
        <strong>Themes</strong>
        <span class=\"count\">
            <span>{{ collector.usedThemes|length }}</span>
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>Theme Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.usedThemes|length }}</span>
            <span class=\"label\">Used themes</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.themes|length }}</span>
            <span class=\"label\">All themes</span>
        </div>
    </div>

    <h2>Themes List</h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Used <span class=\"badge\">{{ collector.usedThemes|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes used.
                </p>

                {% if collector.usedThemes is empty %}
                    <div class=\"empty\">
                        <p>No themes were used.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(collector.usedThemes) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">All <span class=\"badge\">{{ collector.themes|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes found.
                </p>

                {% if collector.themes is empty %}
                    <div class=\"empty\">
                        <p>No themes were found.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(collector.themes) }}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% macro render_table(themes) %}
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        {% for theme in themes %}
            <tr>
                <td class=\"font-normal text-small text-bold\">{{ theme.name }}</td>
                <td class=\"font-normal text-small\">{{ theme.path }}</td>
                <td class=\"font-normal text-small\">{{ theme.description }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "SyliusThemeBundle:Collector:theme.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Resources/views/Collector/theme.html.twig");
    }
}
