<?php

/* SyliusUiBundle:Menu:sidebar.html.twig */
class __TwigTemplate_ca3ab99c86617e7d7b6809e62902047fad5027bedea156be738b4eb004368f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusUiBundle:Menu:sidebar.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_331b994c469c25b05ed92f27c9c430e95fbe6c831887cf3f3f9bab574bc53dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331b994c469c25b05ed92f27c9c430e95fbe6c831887cf3f3f9bab574bc53dd7->enter($__internal_331b994c469c25b05ed92f27c9c430e95fbe6c831887cf3f3f9bab574bc53dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:sidebar.html.twig"));

        $__internal_6eab7952c1f41578de4ee96dc463b04bed58a410d2c99a94e96f965ca830a246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eab7952c1f41578de4ee96dc463b04bed58a410d2c99a94e96f965ca830a246->enter($__internal_6eab7952c1f41578de4ee96dc463b04bed58a410d2c99a94e96f965ca830a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331b994c469c25b05ed92f27c9c430e95fbe6c831887cf3f3f9bab574bc53dd7->leave($__internal_331b994c469c25b05ed92f27c9c430e95fbe6c831887cf3f3f9bab574bc53dd7_prof);

        
        $__internal_6eab7952c1f41578de4ee96dc463b04bed58a410d2c99a94e96f965ca830a246->leave($__internal_6eab7952c1f41578de4ee96dc463b04bed58a410d2c99a94e96f965ca830a246_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_434bf76521ebdcdb4ee3bd9e8bcd55216a019ec45bc6cf3a1d6ebafa008d4a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434bf76521ebdcdb4ee3bd9e8bcd55216a019ec45bc6cf3a1d6ebafa008d4a2a->enter($__internal_434bf76521ebdcdb4ee3bd9e8bcd55216a019ec45bc6cf3a1d6ebafa008d4a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_01dd5269c85eb6d0feb0fe51921d544a41df367112a208dd43b0dc043512c583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dd5269c85eb6d0feb0fe51921d544a41df367112a208dd43b0dc043512c583->enter($__internal_01dd5269c85eb6d0feb0fe51921d544a41df367112a208dd43b0dc043512c583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_01dd5269c85eb6d0feb0fe51921d544a41df367112a208dd43b0dc043512c583->leave($__internal_01dd5269c85eb6d0feb0fe51921d544a41df367112a208dd43b0dc043512c583_prof);

        
        $__internal_434bf76521ebdcdb4ee3bd9e8bcd55216a019ec45bc6cf3a1d6ebafa008d4a2a->leave($__internal_434bf76521ebdcdb4ee3bd9e8bcd55216a019ec45bc6cf3a1d6ebafa008d4a2a_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_c6faa6d8aa34b5d66a30dcb7f48e76ff40d5cf839795f69d04e2a689a9ce9bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6faa6d8aa34b5d66a30dcb7f48e76ff40d5cf839795f69d04e2a689a9ce9bc9->enter($__internal_c6faa6d8aa34b5d66a30dcb7f48e76ff40d5cf839795f69d04e2a689a9ce9bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_5824499375eca83fcc0b8718ea88cf16c940977f41a87af996d15eea5a024be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5824499375eca83fcc0b8718ea88cf16c940977f41a87af996d15eea5a024be8->enter($__internal_5824499375eca83fcc0b8718ea88cf16c940977f41a87af996d15eea5a024be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 11
        $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
        // line 12
        if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
            // line 13
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
        } elseif ($this->getAttribute(        // line 14
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
            // line 15
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
        }
        // line 17
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
            // line 18
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
        }
        // line 20
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
            // line 21
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
        }
        // line 23
        echo "
";
        // line 25
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
            // line 26
            echo "    ";
            if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                // line 27
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                // line 28
                echo "    ";
            }
        } elseif ( !twig_test_empty($this->getAttribute(        // line 29
($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
            // line 30
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
        }
        // line 33
        $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
        // line 34
        if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
            // line 35
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
        }
        // line 37
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) === 1)) {
            // line 38
            echo "<div class=\"item ";
            if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "class", array()), "html", null, true);
            }
            echo "\">
    <div class=\"header\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
            echo "</div>
    <div class=\"menu\">
        ";
            // line 41
            $this->displayBlock("list", $context, $blocks);
            echo "
    </div>
</div>
";
        } else {
            // line 45
            echo "<a class=\"item ";
            if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "class", array()), "html", null, true);
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
            echo "\">
    ";
            // line 46
            $this->displayBlock("icon", $context, $blocks);
            echo "
    ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
            echo "
</a>
";
        }
        
        $__internal_5824499375eca83fcc0b8718ea88cf16c940977f41a87af996d15eea5a024be8->leave($__internal_5824499375eca83fcc0b8718ea88cf16c940977f41a87af996d15eea5a024be8_prof);

        
        $__internal_c6faa6d8aa34b5d66a30dcb7f48e76ff40d5cf839795f69d04e2a689a9ce9bc9->leave($__internal_c6faa6d8aa34b5d66a30dcb7f48e76ff40d5cf839795f69d04e2a689a9ce9bc9_prof);

    }

    // line 52
    public function block_icon($context, array $blocks = array())
    {
        $__internal_13040211be1d8ab6383a11dff67f533de59862b9fe4d485a50f176ceefba270d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13040211be1d8ab6383a11dff67f533de59862b9fe4d485a50f176ceefba270d->enter($__internal_13040211be1d8ab6383a11dff67f533de59862b9fe4d485a50f176ceefba270d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_21b04c07b978eee1bb39ae55838e49bfc9f9dd448a15a1cec26612d674b3dafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b04c07b978eee1bb39ae55838e49bfc9f9dd448a15a1cec26612d674b3dafe->enter($__internal_21b04c07b978eee1bb39ae55838e49bfc9f9dd448a15a1cec26612d674b3dafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        // line 53
        $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttribute", array(0 => "icon"), "method");
        // line 54
        if (($context["icon"] ?? $this->getContext($context, "icon"))) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "\"></i> ";
        }
        
        $__internal_21b04c07b978eee1bb39ae55838e49bfc9f9dd448a15a1cec26612d674b3dafe->leave($__internal_21b04c07b978eee1bb39ae55838e49bfc9f9dd448a15a1cec26612d674b3dafe_prof);

        
        $__internal_13040211be1d8ab6383a11dff67f533de59862b9fe4d485a50f176ceefba270d->leave($__internal_13040211be1d8ab6383a11dff67f533de59862b9fe4d485a50f176ceefba270d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Menu:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 54,  205 => 53,  196 => 52,  182 => 47,  178 => 46,  169 => 45,  162 => 41,  157 => 39,  150 => 38,  148 => 37,  145 => 35,  143 => 34,  141 => 33,  138 => 30,  136 => 29,  133 => 28,  131 => 27,  128 => 26,  126 => 25,  123 => 23,  120 => 21,  118 => 20,  115 => 18,  113 => 17,  110 => 15,  108 => 14,  106 => 13,  104 => 12,  102 => 11,  93 => 9,  68 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block list %}
{% for item in item.children %}
    {{ block('item') }}
{% endfor %}
{% endblock %}

{% block item %}
{# building the class of the item #}
{%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
{%- if matcher.isCurrent(item) %}
    {%- set classes = classes|merge([options.currentClass]) %}
{%- elseif matcher.isAncestor(item, options.matchingDepth) %}
    {%- set classes = classes|merge([options.ancestorClass]) %}
{%- endif %}
{%- if item.actsLikeFirst %}
    {%- set classes = classes|merge([options.firstClass]) %}
{%- endif %}
{%- if item.actsLikeLast %}
    {%- set classes = classes|merge([options.lastClass]) %}
{%- endif %}

{# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
{% if item.hasChildren and options.depth is not same as(0) %}
    {% if options.branch_class is not empty and item.displayChildren %}
        {%- set classes = classes|merge([options.branch_class]) %}
    {% endif %}
{% elseif options.leaf_class is not empty %}
    {%- set classes = classes|merge([options.leaf_class]) %}
{%- endif %}

{%- set attributes = item.attributes %}
{%- if classes is not empty %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
{%- endif %}
{% if item.level is same as(1) %}
<div class=\"item {% if attributes.class is defined %}{{ attributes.class }}{% endif %}\">
    <div class=\"header\">{{ item.label|trans }}</div>
    <div class=\"menu\">
        {{ block('list') }}
    </div>
</div>
{% else %}
<a class=\"item {% if attributes.class is defined %}{{ attributes.class }}{% endif %}\" href=\"{{ item.uri }}\">
    {{ block('icon') }}
    {{ item.label|trans }}
</a>
{% endif %}
{% endblock %}

{% block icon %}
{% set icon = item.labelAttribute('icon') %}
{% if icon %}<i class=\"icon {{ icon }}\"></i> {% endif %}
{% endblock %}

", "SyliusUiBundle:Menu:sidebar.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Menu/sidebar.html.twig");
    }
}
