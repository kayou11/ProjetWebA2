<?php

/* SyliusThemeBundle:Collector:theme.html.twig */
class __TwigTemplate_39244d727782c38c02ee363ab8120127030fec6170578e481eec793c8856b34d extends Twig_Template
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
        $__internal_22eccfb457c468615fe7d7b5c7cbc5c9258ae8affe5c63ce4cfa7814d6c7f4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22eccfb457c468615fe7d7b5c7cbc5c9258ae8affe5c63ce4cfa7814d6c7f4ed->enter($__internal_22eccfb457c468615fe7d7b5c7cbc5c9258ae8affe5c63ce4cfa7814d6c7f4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusThemeBundle:Collector:theme.html.twig"));

        $__internal_e9443b49cb628c25ef942a11153c26389f1e6a42a0ad38beaa4a013cdbdbf67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9443b49cb628c25ef942a11153c26389f1e6a42a0ad38beaa4a013cdbdbf67f->enter($__internal_e9443b49cb628c25ef942a11153c26389f1e6a42a0ad38beaa4a013cdbdbf67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusThemeBundle:Collector:theme.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22eccfb457c468615fe7d7b5c7cbc5c9258ae8affe5c63ce4cfa7814d6c7f4ed->leave($__internal_22eccfb457c468615fe7d7b5c7cbc5c9258ae8affe5c63ce4cfa7814d6c7f4ed_prof);

        
        $__internal_e9443b49cb628c25ef942a11153c26389f1e6a42a0ad38beaa4a013cdbdbf67f->leave($__internal_e9443b49cb628c25ef942a11153c26389f1e6a42a0ad38beaa4a013cdbdbf67f_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f40e507c1fb6e66a1aaf2d65d988f513d42376708006687221bda69f0d99cb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40e507c1fb6e66a1aaf2d65d988f513d42376708006687221bda69f0d99cb64->enter($__internal_f40e507c1fb6e66a1aaf2d65d988f513d42376708006687221bda69f0d99cb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bc9f64e97948906ea9879c3fa3df43deb4c8a72e8bee05beb082de8668cd9676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9f64e97948906ea9879c3fa3df43deb4c8a72e8bee05beb082de8668cd9676->enter($__internal_bc9f64e97948906ea9879c3fa3df43deb4c8a72e8bee05beb082de8668cd9676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bc9f64e97948906ea9879c3fa3df43deb4c8a72e8bee05beb082de8668cd9676->leave($__internal_bc9f64e97948906ea9879c3fa3df43deb4c8a72e8bee05beb082de8668cd9676_prof);

        
        $__internal_f40e507c1fb6e66a1aaf2d65d988f513d42376708006687221bda69f0d99cb64->leave($__internal_f40e507c1fb6e66a1aaf2d65d988f513d42376708006687221bda69f0d99cb64_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8fb3c7d102ef9b233a5d64675853dfd4a8da327ef4a496d72faa859ef922842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8fb3c7d102ef9b233a5d64675853dfd4a8da327ef4a496d72faa859ef922842->enter($__internal_e8fb3c7d102ef9b233a5d64675853dfd4a8da327ef4a496d72faa859ef922842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae6e4c54796346c2a5b98739fc4da9638555b7fc592c34dbb34ab44458b1eb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6e4c54796346c2a5b98739fc4da9638555b7fc592c34dbb34ab44458b1eb2c->enter($__internal_ae6e4c54796346c2a5b98739fc4da9638555b7fc592c34dbb34ab44458b1eb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ae6e4c54796346c2a5b98739fc4da9638555b7fc592c34dbb34ab44458b1eb2c->leave($__internal_ae6e4c54796346c2a5b98739fc4da9638555b7fc592c34dbb34ab44458b1eb2c_prof);

        
        $__internal_e8fb3c7d102ef9b233a5d64675853dfd4a8da327ef4a496d72faa859ef922842->leave($__internal_e8fb3c7d102ef9b233a5d64675853dfd4a8da327ef4a496d72faa859ef922842_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e7272aaac952407109ab8d057b01eb2cac6487e64655aae9b4d930847f8b7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7272aaac952407109ab8d057b01eb2cac6487e64655aae9b4d930847f8b7c3->enter($__internal_1e7272aaac952407109ab8d057b01eb2cac6487e64655aae9b4d930847f8b7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9302122b78adb5c4a25f3af2d58bd32877793c4bfb201b8cb2d3ab7c2434345f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9302122b78adb5c4a25f3af2d58bd32877793c4bfb201b8cb2d3ab7c2434345f->enter($__internal_9302122b78adb5c4a25f3af2d58bd32877793c4bfb201b8cb2d3ab7c2434345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9302122b78adb5c4a25f3af2d58bd32877793c4bfb201b8cb2d3ab7c2434345f->leave($__internal_9302122b78adb5c4a25f3af2d58bd32877793c4bfb201b8cb2d3ab7c2434345f_prof);

        
        $__internal_1e7272aaac952407109ab8d057b01eb2cac6487e64655aae9b4d930847f8b7c3->leave($__internal_1e7272aaac952407109ab8d057b01eb2cac6487e64655aae9b4d930847f8b7c3_prof);

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
            $__internal_67c8c31c1ce6dae788a842fd7683ccb5b89fdaacd49307c739843216048be9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_67c8c31c1ce6dae788a842fd7683ccb5b89fdaacd49307c739843216048be9a7->enter($__internal_67c8c31c1ce6dae788a842fd7683ccb5b89fdaacd49307c739843216048be9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_b2f8bf8c4838edafd818abb023288fced2552fc26ccd8bc8af9f1ed4af31e678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b2f8bf8c4838edafd818abb023288fced2552fc26ccd8bc8af9f1ed4af31e678->enter($__internal_b2f8bf8c4838edafd818abb023288fced2552fc26ccd8bc8af9f1ed4af31e678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

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
            
            $__internal_b2f8bf8c4838edafd818abb023288fced2552fc26ccd8bc8af9f1ed4af31e678->leave($__internal_b2f8bf8c4838edafd818abb023288fced2552fc26ccd8bc8af9f1ed4af31e678_prof);

            
            $__internal_67c8c31c1ce6dae788a842fd7683ccb5b89fdaacd49307c739843216048be9a7->leave($__internal_67c8c31c1ce6dae788a842fd7683ccb5b89fdaacd49307c739843216048be9a7_prof);

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
", "SyliusThemeBundle:Collector:theme.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Resources/views/Collector/theme.html.twig");
    }
}
