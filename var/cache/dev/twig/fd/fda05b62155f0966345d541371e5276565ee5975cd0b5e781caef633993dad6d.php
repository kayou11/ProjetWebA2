<?php

/* SyliusUiBundle:Macro:table.html.twig */
class __TwigTemplate_170e896c3358996606d4726108745484ae4a1282a5c07071a08fa54c7b187309 extends Twig_Template
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
        $__internal_6f46622efea5e87f39a6e01eb483cf0d255efb47659978d4d3549b2a00c323cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f46622efea5e87f39a6e01eb483cf0d255efb47659978d4d3549b2a00c323cd->enter($__internal_6f46622efea5e87f39a6e01eb483cf0d255efb47659978d4d3549b2a00c323cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:table.html.twig"));

        $__internal_8dc592e52d201b693e580f3ebc9329008d700c5c771e7efbae41b4f5350dd963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc592e52d201b693e580f3ebc9329008d700c5c771e7efbae41b4f5350dd963->enter($__internal_8dc592e52d201b693e580f3ebc9329008d700c5c771e7efbae41b4f5350dd963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:table.html.twig"));

        // line 17
        echo "
";
        
        $__internal_6f46622efea5e87f39a6e01eb483cf0d255efb47659978d4d3549b2a00c323cd->leave($__internal_6f46622efea5e87f39a6e01eb483cf0d255efb47659978d4d3549b2a00c323cd_prof);

        
        $__internal_8dc592e52d201b693e580f3ebc9329008d700c5c771e7efbae41b4f5350dd963->leave($__internal_8dc592e52d201b693e580f3ebc9329008d700c5c771e7efbae41b4f5350dd963_prof);

    }

    // line 1
    public function getheaders($__grid__ = null, $__definition__ = null, $__requestAttributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "definition" => $__definition__,
            "requestAttributes" => $__requestAttributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a750131af66f356f818d682017fc2bda58c0ec3417081836928a1bab0ec1f4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a750131af66f356f818d682017fc2bda58c0ec3417081836928a1bab0ec1f4dc->enter($__internal_a750131af66f356f818d682017fc2bda58c0ec3417081836928a1bab0ec1f4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "headers"));

            $__internal_29aa627c9845351f2b893c555f0d5673500882254f6fe74701277b01c8e122ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_29aa627c9845351f2b893c555f0d5673500882254f6fe74701277b01c8e122ea->enter($__internal_29aa627c9845351f2b893c555f0d5673500882254f6fe74701277b01c8e122ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "headers"));

            // line 2
            echo "    ";
            $context["sorting"] = $this->loadTemplate("@SyliusUi/Macro/sorting.html.twig", "SyliusUiBundle:Macro:table.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy($this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "fields", array()), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 5
                echo "        ";
                if ($this->getAttribute($context["field"], "enabled", array())) {
                    // line 6
                    echo "            ";
                    if ($this->getAttribute($context["field"], "isSortable", array())) {
                        // line 7
                        echo "                ";
                        echo $context["sorting"]->gettableHeader(($context["grid"] ?? $this->getContext($context, "grid")), $context["field"], ($context["requestAttributes"] ?? $this->getContext($context, "requestAttributes")));
                        echo "
            ";
                    } else {
                        // line 9
                        echo "                <th class=\"sylius-table-column-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field"], "label", array())), "html", null, true);
                        echo "</th>
            ";
                    }
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "item", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "getActions", array(0 => "item"), "method")) > 0))) {
                // line 14
                echo "        <th class=\"sylius-table-column-actions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.actions"), "html", null, true);
                echo "</th>
    ";
            }
            
            $__internal_29aa627c9845351f2b893c555f0d5673500882254f6fe74701277b01c8e122ea->leave($__internal_29aa627c9845351f2b893c555f0d5673500882254f6fe74701277b01c8e122ea_prof);

            
            $__internal_a750131af66f356f818d682017fc2bda58c0ec3417081836928a1bab0ec1f4dc->leave($__internal_a750131af66f356f818d682017fc2bda58c0ec3417081836928a1bab0ec1f4dc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getrow($__grid__ = null, $__definition__ = null, $__row__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "definition" => $__definition__,
            "row" => $__row__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_34397ae9badb62557210b6b49dc8e559901c95b54a166abeac2e38999441f055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_34397ae9badb62557210b6b49dc8e559901c95b54a166abeac2e38999441f055->enter($__internal_34397ae9badb62557210b6b49dc8e559901c95b54a166abeac2e38999441f055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "row"));

            $__internal_16620f00307ca544ce7b9f4d21e1a2d373a3237b812b490ba3ed001bee5494fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_16620f00307ca544ce7b9f4d21e1a2d373a3237b812b490ba3ed001bee5494fd->enter($__internal_16620f00307ca544ce7b9f4d21e1a2d373a3237b812b490ba3ed001bee5494fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "row"));

            // line 19
            echo "    <tr class=\"item\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy($this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "enabledFields", array()), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 21
                echo "        <td>";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_field')->getCallable(), array(($context["grid"] ?? $this->getContext($context, "grid")), $context["field"], ($context["row"] ?? $this->getContext($context, "row"))));
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "item", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "getEnabledActions", array(0 => "item"), "method")) > 0))) {
                // line 24
                echo "        <td>
            <div class=\"ui buttons\">
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy($this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "getEnabledActions", array(0 => "item"), "method"), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 27
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array(($context["grid"] ?? $this->getContext($context, "grid")), $context["action"], ($context["row"] ?? $this->getContext($context, "row"))));
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </div>
            ";
                // line 30
                if (($this->getAttribute($this->getAttribute(($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "subitem", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "getEnabledActions", array(0 => "subitem"), "method")) > 0))) {
                    // line 31
                    echo "            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy($this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "getEnabledActions", array(0 => "subitem"), "method"), "position"));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 34
                        echo "                    ";
                        echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array(($context["grid"] ?? $this->getContext($context, "grid")), $context["action"], ($context["row"] ?? $this->getContext($context, "row"))));
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "            </div>
            ";
                }
                // line 38
                echo "        </td>
    ";
            }
            // line 40
            echo "    </tr>
";
            
            $__internal_16620f00307ca544ce7b9f4d21e1a2d373a3237b812b490ba3ed001bee5494fd->leave($__internal_16620f00307ca544ce7b9f4d21e1a2d373a3237b812b490ba3ed001bee5494fd_prof);

            
            $__internal_34397ae9badb62557210b6b49dc8e559901c95b54a166abeac2e38999441f055->leave($__internal_34397ae9badb62557210b6b49dc8e559901c95b54a166abeac2e38999441f055_prof);

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
        return "SyliusUiBundle:Macro:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 40,  205 => 38,  201 => 36,  192 => 34,  188 => 33,  184 => 31,  182 => 30,  179 => 29,  170 => 27,  166 => 26,  162 => 24,  159 => 23,  150 => 21,  146 => 20,  143 => 19,  123 => 18,  98 => 14,  95 => 13,  89 => 12,  86 => 11,  78 => 9,  72 => 7,  69 => 6,  66 => 5,  62 => 4,  59 => 3,  56 => 2,  36 => 1,  25 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro headers(grid, definition, requestAttributes) %}
    {% import '@SyliusUi/Macro/sorting.html.twig' as sorting %}

    {% for field in definition.fields|sort_by('position') %}
        {% if field.enabled %}
            {% if field.isSortable %}
                {{ sorting.tableHeader(grid, field, requestAttributes) }}
            {% else %}
                <th class=\"sylius-table-column-{{ field.name }}\">{{ field.label|trans }}</th>
            {% endif %}
        {% endif %}
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getActions('item')|length > 0 %}
        <th class=\"sylius-table-column-actions\">{{ 'sylius.ui.actions'|trans }}</th>
    {% endif %}
{% endmacro %}

{% macro row(grid, definition, row) %}
    <tr class=\"item\">
    {% for field in definition.enabledFields|sort_by('position') %}
        <td>{{ sylius_grid_render_field(grid, field, row) }}</td>
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getEnabledActions('item')|length > 0 %}
        <td>
            <div class=\"ui buttons\">
                {% for action in definition.getEnabledActions('item')|sort_by('position') %}
                    {{ sylius_grid_render_action(grid, action, row) }}
                {% endfor %}
            </div>
            {% if definition.actionGroups.subitem is defined and definition.getEnabledActions('subitem')|length > 0 %}
            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                {% for action in definition.getEnabledActions('subitem')|sort_by('position') %}
                    {{ sylius_grid_render_action(grid, action, row) }}
                {% endfor %}
            </div>
            {% endif %}
        </td>
    {% endif %}
    </tr>
{% endmacro %}
", "SyliusUiBundle:Macro:table.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/table.html.twig");
    }
}
