<?php

/* SyliusUiBundle:Macro:sorting.html.twig */
class __TwigTemplate_432f83a137499feb49b66e58f468ee6b5f61b8eed2fe47f8f6d217379f717680 extends Twig_Template
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
        $__internal_6a565edc5591f565f51f483b11811f63f76ca0c0ebd72ac45c18e72048cd73fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a565edc5591f565f51f483b11811f63f76ca0c0ebd72ac45c18e72048cd73fd->enter($__internal_6a565edc5591f565f51f483b11811f63f76ca0c0ebd72ac45c18e72048cd73fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:sorting.html.twig"));

        $__internal_77ede4c5d4db462096168c06a0426496d3e563a92f1488a978f23f531d4aa150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ede4c5d4db462096168c06a0426496d3e563a92f1488a978f23f531d4aa150->enter($__internal_77ede4c5d4db462096168c06a0426496d3e563a92f1488a978f23f531d4aa150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:sorting.html.twig"));

        // line 15
        echo "
";
        
        $__internal_6a565edc5591f565f51f483b11811f63f76ca0c0ebd72ac45c18e72048cd73fd->leave($__internal_6a565edc5591f565f51f483b11811f63f76ca0c0ebd72ac45c18e72048cd73fd_prof);

        
        $__internal_77ede4c5d4db462096168c06a0426496d3e563a92f1488a978f23f531d4aa150->leave($__internal_77ede4c5d4db462096168c06a0426496d3e563a92f1488a978f23f531d4aa150_prof);

    }

    // line 1
    public function gettableHeader($__grid__ = null, $__field__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "field" => $__field__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_30651508088e271e642862ed0583743e780a87e304f8ef68cc4556dcd3005b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_30651508088e271e642862ed0583743e780a87e304f8ef68cc4556dcd3005b4a->enter($__internal_30651508088e271e642862ed0583743e780a87e304f8ef68cc4556dcd3005b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tableHeader"));

            $__internal_eec09bacb5983be06ab96a54e0df60cee77136610c0d5033381d59877e4b7ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_eec09bacb5983be06ab96a54e0df60cee77136610c0d5033381d59877e4b7ac3->enter($__internal_eec09bacb5983be06ab96a54e0df60cee77136610c0d5033381d59877e4b7ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tableHeader"));

            // line 2
            echo "    ";
            $context["__internal_94a20e31634f198cc7c6c1994893892ab584a8934aa398e93bcf272c0390e2ad"] = $this;
            // line 3
            echo "    ";
            $context["order"] = $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "getSortingOrder", array(0 => $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "name", array())), "method");
            // line 4
            echo "
    ";
            // line 5
            if ($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "isSortedBy", array(0 => $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "name", array())), "method")) {
                // line 6
                echo "        <th class=\"sortable sorted ";
                echo (((($context["order"] ?? $this->getContext($context, "order")) == "desc")) ? ("descending") : ("ascending"));
                echo " sylius-table-column-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "name", array()), "html", null, true);
                echo "\">
            <a href=\"";
                // line 7
                echo $context["__internal_94a20e31634f198cc7c6c1994893892ab584a8934aa398e93bcf272c0390e2ad"]->getlink($this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "name", array()), ($context["attributes"] ?? $this->getContext($context, "attributes")), (((($context["order"] ?? $this->getContext($context, "order")) == "desc")) ? ("asc") : ("desc")), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "parameters", array()), "all", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "label", array())), "html", null, true);
                echo "</a>
        </th>
    ";
            } else {
                // line 10
                echo "        <th class=\"sortable sylius-table-column-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "name", array()), "html", null, true);
                echo "\">
            <a href=\"";
                // line 11
                echo $context["__internal_94a20e31634f198cc7c6c1994893892ab584a8934aa398e93bcf272c0390e2ad"]->getlink($this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "name", array()), ($context["attributes"] ?? $this->getContext($context, "attributes")), ($context["order"] ?? $this->getContext($context, "order")), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "parameters", array()), "all", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "label", array())), "html", null, true);
                echo "<i class=\"sort icon\"></i></a>
        </th>
    ";
            }
            
            $__internal_eec09bacb5983be06ab96a54e0df60cee77136610c0d5033381d59877e4b7ac3->leave($__internal_eec09bacb5983be06ab96a54e0df60cee77136610c0d5033381d59877e4b7ac3_prof);

            
            $__internal_30651508088e271e642862ed0583743e780a87e304f8ef68cc4556dcd3005b4a->leave($__internal_30651508088e271e642862ed0583743e780a87e304f8ef68cc4556dcd3005b4a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getlink($__fieldName__ = null, $__attributes__ = null, $__order__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldName" => $__fieldName__,
            "attributes" => $__attributes__,
            "order" => $__order__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3125d7f1d3756e277f2e68090c557d57ca4bc46a0b948f952d40b1c4e2a2312d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3125d7f1d3756e277f2e68090c557d57ca4bc46a0b948f952d40b1c4e2a2312d->enter($__internal_3125d7f1d3756e277f2e68090c557d57ca4bc46a0b948f952d40b1c4e2a2312d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            $__internal_ab36611676c1c1fedb448f1dd1856e7aa9e395d195f70f04fb23fd4484ced70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ab36611676c1c1fedb448f1dd1856e7aa9e395d195f70f04fb23fd4484ced70d->enter($__internal_ab36611676c1c1fedb448f1dd1856e7aa9e395d195f70f04fb23fd4484ced70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 17
            echo "    ";
            $context["params"] = twig_array_merge($this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "get", array(0 => "_route_params"), "method"), ($context["parameters"] ?? $this->getContext($context, "parameters")));
            // line 18
            echo "    ";
            $context["sorting"] = array("sorting" => array(($context["fieldName"] ?? $this->getContext($context, "fieldName")) => ($context["order"] ?? $this->getContext($context, "order"))));
            // line 19
            echo "
    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge(($context["params"] ?? $this->getContext($context, "params")), ($context["sorting"] ?? $this->getContext($context, "sorting"))), array("page" => 1))), "html", null, true);
            echo "
";
            
            $__internal_ab36611676c1c1fedb448f1dd1856e7aa9e395d195f70f04fb23fd4484ced70d->leave($__internal_ab36611676c1c1fedb448f1dd1856e7aa9e395d195f70f04fb23fd4484ced70d_prof);

            
            $__internal_3125d7f1d3756e277f2e68090c557d57ca4bc46a0b948f952d40b1c4e2a2312d->leave($__internal_3125d7f1d3756e277f2e68090c557d57ca4bc46a0b948f952d40b1c4e2a2312d_prof);

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
        return "SyliusUiBundle:Macro:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 20,  141 => 19,  138 => 18,  135 => 17,  114 => 16,  87 => 11,  82 => 10,  74 => 7,  67 => 6,  65 => 5,  62 => 4,  59 => 3,  56 => 2,  36 => 1,  25 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro tableHeader(grid, field, attributes) %}
    {% from _self import link %}
    {% set order = grid.getSortingOrder(field.name) %}

    {% if grid.isSortedBy(field.name) %}
        <th class=\"sortable sorted {{ order == 'desc' ? 'descending' : 'ascending' }} sylius-table-column-{{ field.name }}\">
            <a href=\"{{ link(field.name, attributes, (order == 'desc' ? 'asc' : 'desc'), grid.parameters.all) }}\">{{ field.label|trans }}</a>
        </th>
    {% else %}
        <th class=\"sortable sylius-table-column-{{ field.name }}\">
            <a href=\"{{ link(field.name, attributes, order, grid.parameters.all) }}\">{{ field.label|trans }}<i class=\"sort icon\"></i></a>
        </th>
    {% endif %}
{% endmacro %}

{% macro link(fieldName, attributes, order, parameters) %}
    {% set params = attributes.get('_route_params')|merge(parameters) %}
    {% set sorting = {'sorting': {(fieldName): (order)}} %}

    {{ path(attributes.get('_route'), params|merge(sorting)|merge({'page': 1})) }}
{% endmacro %}
", "SyliusUiBundle:Macro:sorting.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/sorting.html.twig");
    }
}
