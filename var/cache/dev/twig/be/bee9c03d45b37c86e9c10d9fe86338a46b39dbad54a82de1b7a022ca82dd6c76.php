<?php

/* SyliusUiBundle:Grid:_default.html.twig */
class __TwigTemplate_7b5796d548f6648a2529a9c8b19cefcdd7e53e3e3fee2b805164b832928fc135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4866d6c9d769ac7df2ae861c18fc08eb9460156cfabf6f7832c6cdb3ee6961f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4866d6c9d769ac7df2ae861c18fc08eb9460156cfabf6f7832c6cdb3ee6961f3->enter($__internal_4866d6c9d769ac7df2ae861c18fc08eb9460156cfabf6f7832c6cdb3ee6961f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid:_default.html.twig"));

        $__internal_e38503762a0f14cbcfd2019210f8544d1559f3d7578bf3bec9456ed0e1caf73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38503762a0f14cbcfd2019210f8544d1559f3d7578bf3bec9456ed0e1caf73f->enter($__internal_e38503762a0f14cbcfd2019210f8544d1559f3d7578bf3bec9456ed0e1caf73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid:_default.html.twig"));

        // line 1
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "SyliusUiBundle:Grid:_default.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid:_default.html.twig", 2);
        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusUiBundle:Grid:_default.html.twig", 3);
        // line 4
        $context["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "SyliusUiBundle:Grid:_default.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        $context["definition"] = $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "definition", array());
        // line 7
        $context["data"] = $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "data", array());
        // line 8
        echo "
";
        // line 9
        $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 10
        echo "
";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "enabledFilters", array())) > 0)) {
            // line 12
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            Filters
        </div>
        <div class=\"content active\">
            <form method=\"get\" action=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
            echo "\" class=\"ui loadable form\">
                <div class=\"two fields\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy($this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "enabledFilters", array()), "position"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ($this->getAttribute($context["filter"], "enabled", array())) {
                    // line 22
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), array(($context["grid"] ?? $this->getContext($context, "grid")), $context["filter"]));
                    echo "

                    ";
                    // line 24
                    if (($this->getAttribute($context["loop"], "index0", array()) % 2)) {
                        // line 25
                        echo "                        </div>
                        <div class=\"two fields\">
                    ";
                    }
                    // line 28
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </div>
                ";
            // line 30
            echo $context["buttons"]->getfilter();
            echo "
                ";
            // line 31
            echo $context["buttons"]->getresetFilters(($context["path"] ?? $this->getContext($context, "path")));
            echo "
            </form>
        </div>
    </div>
";
        }
        // line 36
        echo "
<div class=\"ui segment\">
    ";
        // line 38
        if (((twig_length_filter($this->env, $this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "limits", array())) > 1) && (twig_length_filter($this->env, ($context["data"] ?? $this->getContext($context, "data"))) > min($this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "limits", array()))))) {
            // line 39
            echo "    <div class=\"ui two column fluid stackable grid\">
        <div class=\"fourteen wide column\">
            ";
            // line 41
            echo $context["pagination"]->getsimple(($context["data"] ?? $this->getContext($context, "data")));
            echo "
        </div>
        <div class=\"two wide column\">
            <div class=\"ui fluid one item menu sylius-paginate\">
                ";
            // line 45
            echo $context["pagination"]->getperPage(($context["data"] ?? $this->getContext($context, "data")), $this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "limits", array()));
            echo "
            </div>
        </div>
    </div>
    ";
        } else {
            // line 50
            echo "        ";
            echo $context["pagination"]->getsimple(($context["data"] ?? $this->getContext($context, "data")));
            echo "
    ";
        }
        // line 52
        echo "    ";
        if ((twig_length_filter($this->env, ($context["data"] ?? $this->getContext($context, "data"))) > 0)) {
            // line 53
            echo "        <table class=\"ui sortable stackable celled table\">
            <thead>
            <tr>
                ";
            // line 56
            echo $context["table"]->getheaders(($context["grid"] ?? $this->getContext($context, "grid")), ($context["definition"] ?? $this->getContext($context, "definition")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()));
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 61
                echo "                ";
                echo $context["table"]->getrow(($context["grid"] ?? $this->getContext($context, "grid")), ($context["definition"] ?? $this->getContext($context, "definition")), $context["row"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 66
            echo "        ";
            echo $context["messages"]->getinfo("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 68
        echo "    ";
        echo $context["pagination"]->getsimple(($context["data"] ?? $this->getContext($context, "data")));
        echo "
</div>
";
        
        $__internal_4866d6c9d769ac7df2ae861c18fc08eb9460156cfabf6f7832c6cdb3ee6961f3->leave($__internal_4866d6c9d769ac7df2ae861c18fc08eb9460156cfabf6f7832c6cdb3ee6961f3_prof);

        
        $__internal_e38503762a0f14cbcfd2019210f8544d1559f3d7578bf3bec9456ed0e1caf73f->leave($__internal_e38503762a0f14cbcfd2019210f8544d1559f3d7578bf3bec9456ed0e1caf73f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid:_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 68,  177 => 66,  172 => 63,  163 => 61,  159 => 60,  152 => 56,  147 => 53,  144 => 52,  138 => 50,  130 => 45,  123 => 41,  119 => 39,  117 => 38,  113 => 36,  105 => 31,  101 => 30,  98 => 29,  88 => 28,  83 => 25,  81 => 24,  75 => 22,  64 => 21,  59 => 19,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  38 => 7,  36 => 6,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}
{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/table.html.twig' as table %}

{% set definition = grid.definition %}
{% set data = grid.data %}

{% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}

{% if definition.enabledFilters|length > 0 %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            Filters
        </div>
        <div class=\"content active\">
            <form method=\"get\" action=\"{{ path }}\" class=\"ui loadable form\">
                <div class=\"two fields\">
                {% for filter in definition.enabledFilters|sort_by('position') if filter.enabled %}
                    {{ sylius_grid_render_filter(grid, filter) }}

                    {% if loop.index0 % 2 %}
                        </div>
                        <div class=\"two fields\">
                    {% endif %}
                {% endfor %}
                </div>
                {{ buttons.filter() }}
                {{ buttons.resetFilters(path) }}
            </form>
        </div>
    </div>
{% endif %}

<div class=\"ui segment\">
    {% if definition.limits|length > 1 and data|length > min(definition.limits) %}
    <div class=\"ui two column fluid stackable grid\">
        <div class=\"fourteen wide column\">
            {{ pagination.simple(data) }}
        </div>
        <div class=\"two wide column\">
            <div class=\"ui fluid one item menu sylius-paginate\">
                {{ pagination.perPage(data, definition.limits) }}
            </div>
        </div>
    </div>
    {% else %}
        {{ pagination.simple(data) }}
    {% endif %}
    {% if data|length > 0 %}
        <table class=\"ui sortable stackable celled table\">
            <thead>
            <tr>
                {{ table.headers(grid, definition, app.request.attributes) }}
            </tr>
            </thead>
            <tbody>
            {% for row in data %}
                {{ table.row(grid, definition, row) }}
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
    {{ pagination.simple(data) }}
</div>
", "SyliusUiBundle:Grid:_default.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/_default.html.twig");
    }
}
