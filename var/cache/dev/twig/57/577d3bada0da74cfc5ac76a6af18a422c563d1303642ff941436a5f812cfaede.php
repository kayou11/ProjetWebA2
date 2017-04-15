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
        $__internal_5efbfccf90de7d078326e2a45c52ab61f239b2c1e62ac42c0aa531fd732b14b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efbfccf90de7d078326e2a45c52ab61f239b2c1e62ac42c0aa531fd732b14b8->enter($__internal_5efbfccf90de7d078326e2a45c52ab61f239b2c1e62ac42c0aa531fd732b14b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusThemeBundle:Collector:theme.html.twig"));

        $__internal_0dc8fcfe6043a5e0802b1a38739d45300203bad44be6bb895618bcc2f2a35367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc8fcfe6043a5e0802b1a38739d45300203bad44be6bb895618bcc2f2a35367->enter($__internal_0dc8fcfe6043a5e0802b1a38739d45300203bad44be6bb895618bcc2f2a35367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusThemeBundle:Collector:theme.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5efbfccf90de7d078326e2a45c52ab61f239b2c1e62ac42c0aa531fd732b14b8->leave($__internal_5efbfccf90de7d078326e2a45c52ab61f239b2c1e62ac42c0aa531fd732b14b8_prof);

        
        $__internal_0dc8fcfe6043a5e0802b1a38739d45300203bad44be6bb895618bcc2f2a35367->leave($__internal_0dc8fcfe6043a5e0802b1a38739d45300203bad44be6bb895618bcc2f2a35367_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e37350ff2d0d19ddb350ce65c2d64c1a5ff75f2a30fec8e23f5eca63762883fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37350ff2d0d19ddb350ce65c2d64c1a5ff75f2a30fec8e23f5eca63762883fd->enter($__internal_e37350ff2d0d19ddb350ce65c2d64c1a5ff75f2a30fec8e23f5eca63762883fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c24cc6581f1e37a30382e4ece6292978b3965fa55f129f10a38878ec12caf536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24cc6581f1e37a30382e4ece6292978b3965fa55f129f10a38878ec12caf536->enter($__internal_c24cc6581f1e37a30382e4ece6292978b3965fa55f129f10a38878ec12caf536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c24cc6581f1e37a30382e4ece6292978b3965fa55f129f10a38878ec12caf536->leave($__internal_c24cc6581f1e37a30382e4ece6292978b3965fa55f129f10a38878ec12caf536_prof);

        
        $__internal_e37350ff2d0d19ddb350ce65c2d64c1a5ff75f2a30fec8e23f5eca63762883fd->leave($__internal_e37350ff2d0d19ddb350ce65c2d64c1a5ff75f2a30fec8e23f5eca63762883fd_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32fd6d14ccbde11f739881e360508b9a3a839156ddefcde99d678238e51acd89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fd6d14ccbde11f739881e360508b9a3a839156ddefcde99d678238e51acd89->enter($__internal_32fd6d14ccbde11f739881e360508b9a3a839156ddefcde99d678238e51acd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e250a80c54f05c20d1856a2237a80c8f11cfabe3f3e1c507afbed7f17f0bb08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e250a80c54f05c20d1856a2237a80c8f11cfabe3f3e1c507afbed7f17f0bb08c->enter($__internal_e250a80c54f05c20d1856a2237a80c8f11cfabe3f3e1c507afbed7f17f0bb08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e250a80c54f05c20d1856a2237a80c8f11cfabe3f3e1c507afbed7f17f0bb08c->leave($__internal_e250a80c54f05c20d1856a2237a80c8f11cfabe3f3e1c507afbed7f17f0bb08c_prof);

        
        $__internal_32fd6d14ccbde11f739881e360508b9a3a839156ddefcde99d678238e51acd89->leave($__internal_32fd6d14ccbde11f739881e360508b9a3a839156ddefcde99d678238e51acd89_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8505d7ab336c93e47097cfd1a510a132add7b3f991f428b8c3bd6013ea72d663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8505d7ab336c93e47097cfd1a510a132add7b3f991f428b8c3bd6013ea72d663->enter($__internal_8505d7ab336c93e47097cfd1a510a132add7b3f991f428b8c3bd6013ea72d663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_238fbbbeef987b76b0a293ce8768f8b18cd055a2a3a78aeec3a026415a206243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238fbbbeef987b76b0a293ce8768f8b18cd055a2a3a78aeec3a026415a206243->enter($__internal_238fbbbeef987b76b0a293ce8768f8b18cd055a2a3a78aeec3a026415a206243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_238fbbbeef987b76b0a293ce8768f8b18cd055a2a3a78aeec3a026415a206243->leave($__internal_238fbbbeef987b76b0a293ce8768f8b18cd055a2a3a78aeec3a026415a206243_prof);

        
        $__internal_8505d7ab336c93e47097cfd1a510a132add7b3f991f428b8c3bd6013ea72d663->leave($__internal_8505d7ab336c93e47097cfd1a510a132add7b3f991f428b8c3bd6013ea72d663_prof);

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
            $__internal_a2dccc4a41250c3c6ef759b5144d92e13f9cccbedfd86a4258e8de026c736572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a2dccc4a41250c3c6ef759b5144d92e13f9cccbedfd86a4258e8de026c736572->enter($__internal_a2dccc4a41250c3c6ef759b5144d92e13f9cccbedfd86a4258e8de026c736572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_56fbba56467ce90e871df197ac5df3d011f9e08e32795f86495a48e547f4c4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_56fbba56467ce90e871df197ac5df3d011f9e08e32795f86495a48e547f4c4b3->enter($__internal_56fbba56467ce90e871df197ac5df3d011f9e08e32795f86495a48e547f4c4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

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
            
            $__internal_56fbba56467ce90e871df197ac5df3d011f9e08e32795f86495a48e547f4c4b3->leave($__internal_56fbba56467ce90e871df197ac5df3d011f9e08e32795f86495a48e547f4c4b3_prof);

            
            $__internal_a2dccc4a41250c3c6ef759b5144d92e13f9cccbedfd86a4258e8de026c736572->leave($__internal_a2dccc4a41250c3c6ef759b5144d92e13f9cccbedfd86a4258e8de026c736572_prof);

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
