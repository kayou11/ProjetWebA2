<?php

/* SyliusUiBundle:Macro:pagination.html.twig */
class __TwigTemplate_5b3788e7fccb06fb443cd4e2be9a836327990fd0e77a99179c7a0c78ef64e635 extends Twig_Template
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
        $__internal_8f65f9d8b550fb6abfaccb00f15e2dbb88ad0b7ed86476d939d3daad6d5932f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f65f9d8b550fb6abfaccb00f15e2dbb88ad0b7ed86476d939d3daad6d5932f3->enter($__internal_8f65f9d8b550fb6abfaccb00f15e2dbb88ad0b7ed86476d939d3daad6d5932f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:pagination.html.twig"));

        $__internal_8909ddf79f7eb7eda1855fdc75f744dc6c88d2740dbfd05f896d2859c014b659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8909ddf79f7eb7eda1855fdc75f744dc6c88d2740dbfd05f896d2859c014b659->enter($__internal_8909ddf79f7eb7eda1855fdc75f744dc6c88d2740dbfd05f896d2859c014b659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:pagination.html.twig"));

        // line 6
        echo "
";
        
        $__internal_8f65f9d8b550fb6abfaccb00f15e2dbb88ad0b7ed86476d939d3daad6d5932f3->leave($__internal_8f65f9d8b550fb6abfaccb00f15e2dbb88ad0b7ed86476d939d3daad6d5932f3_prof);

        
        $__internal_8909ddf79f7eb7eda1855fdc75f744dc6c88d2740dbfd05f896d2859c014b659->leave($__internal_8909ddf79f7eb7eda1855fdc75f744dc6c88d2740dbfd05f896d2859c014b659_prof);

    }

    // line 1
    public function getsimple($__paginator__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_014888aba2ebe1806861a12707de90131ec259ec65ce5d62d1be1d07fb8ed204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_014888aba2ebe1806861a12707de90131ec259ec65ce5d62d1be1d07fb8ed204->enter($__internal_014888aba2ebe1806861a12707de90131ec259ec65ce5d62d1be1d07fb8ed204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "simple"));

            $__internal_6a3bc6c917f68e3a42b01f07acc5ca406a283a0594fccc67b676c848a3e73397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6a3bc6c917f68e3a42b01f07acc5ca406a283a0594fccc67b676c848a3e73397->enter($__internal_6a3bc6c917f68e3a42b01f07acc5ca406a283a0594fccc67b676c848a3e73397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "simple"));

            // line 2
            echo "    ";
            if ($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "haveToPaginate", array(), "method")) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta(($context["paginator"] ?? $this->getContext($context, "paginator")), "semantic_ui_translated", ((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? $this->getContext($context, "options")), array())) : (array())));
                echo "
    ";
            }
            
            $__internal_6a3bc6c917f68e3a42b01f07acc5ca406a283a0594fccc67b676c848a3e73397->leave($__internal_6a3bc6c917f68e3a42b01f07acc5ca406a283a0594fccc67b676c848a3e73397_prof);

            
            $__internal_014888aba2ebe1806861a12707de90131ec259ec65ce5d62d1be1d07fb8ed204->leave($__internal_014888aba2ebe1806861a12707de90131ec259ec65ce5d62d1be1d07fb8ed204_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getperPage($__paginator__ = null, $__paginationLimits__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "paginationLimits" => $__paginationLimits__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_992e008176b7e677622d0ee1f4c13ef7d5afe6806ceda124fbb349462eb8d5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_992e008176b7e677622d0ee1f4c13ef7d5afe6806ceda124fbb349462eb8d5ce->enter($__internal_992e008176b7e677622d0ee1f4c13ef7d5afe6806ceda124fbb349462eb8d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "perPage"));

            $__internal_fff3957dfab184e718043ed93905a16853cf1483d07fc9a6751b808a9740d86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fff3957dfab184e718043ed93905a16853cf1483d07fc9a6751b808a9740d86f->enter($__internal_fff3957dfab184e718043ed93905a16853cf1483d07fc9a6751b808a9740d86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "perPage"));

            // line 8
            echo "    <div class=\"ui simple fluid dropdown item\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.show"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "maxPerPage", array()), "html", null, true);
            echo "
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paginationLimits"] ?? $this->getContext($context, "paginationLimits")));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                if (($context["limit"] != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "maxPerPage", array()))) {
                    // line 13
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("limit" => $context["limit"])));
                    // line 14
                    echo "            <a class=\"item\" href=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                    echo "</a>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
    </div>
";
            
            $__internal_fff3957dfab184e718043ed93905a16853cf1483d07fc9a6751b808a9740d86f->leave($__internal_fff3957dfab184e718043ed93905a16853cf1483d07fc9a6751b808a9740d86f_prof);

            
            $__internal_992e008176b7e677622d0ee1f4c13ef7d5afe6806ceda124fbb349462eb8d5ce->leave($__internal_992e008176b7e677622d0ee1f4c13ef7d5afe6806ceda124fbb349462eb8d5ce_prof);

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
        return "SyliusUiBundle:Macro:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 16,  121 => 14,  118 => 13,  113 => 12,  105 => 9,  102 => 8,  83 => 7,  58 => 3,  55 => 2,  36 => 1,  25 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro simple(paginator, options) %}
    {% if paginator.haveToPaginate() %}
        {{ pagerfanta(paginator, 'semantic_ui_translated', options|default({})) }}
    {% endif %}
{% endmacro %}

{% macro perPage(paginator, paginationLimits) %}
    <div class=\"ui simple fluid dropdown item\">
        {{ 'sylius.ui.show'|trans }} {{ paginator.maxPerPage }}
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
        {% for limit in paginationLimits if limit != paginator.maxPerPage %}
            {% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge({'limit': limit})) %}
            <a class=\"item\" href=\"{{ path }}\">{{ limit }}</a>
        {% endfor %}
        </div>
    </div>
{% endmacro %}
", "SyliusUiBundle:Macro:pagination.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/pagination.html.twig");
    }
}
