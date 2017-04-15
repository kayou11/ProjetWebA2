<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_01be9393f18acf14e4f3889697ea501a34fd71488f2ac6142db617547fc28d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0c1c35069ccae9c1d51e1a8b13d67682b35a55300bceaa0551cb54281ecb02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c1c35069ccae9c1d51e1a8b13d67682b35a55300bceaa0551cb54281ecb02c->enter($__internal_b0c1c35069ccae9c1d51e1a8b13d67682b35a55300bceaa0551cb54281ecb02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $__internal_2e12fd184ddd0574a6faf8b7471f9d5506a1cfdb92848159dbcc452fbfac9398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e12fd184ddd0574a6faf8b7471f9d5506a1cfdb92848159dbcc452fbfac9398->enter($__internal_2e12fd184ddd0574a6faf8b7471f9d5506a1cfdb92848159dbcc452fbfac9398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c1c35069ccae9c1d51e1a8b13d67682b35a55300bceaa0551cb54281ecb02c->leave($__internal_b0c1c35069ccae9c1d51e1a8b13d67682b35a55300bceaa0551cb54281ecb02c_prof);

        
        $__internal_2e12fd184ddd0574a6faf8b7471f9d5506a1cfdb92848159dbcc452fbfac9398->leave($__internal_2e12fd184ddd0574a6faf8b7471f9d5506a1cfdb92848159dbcc452fbfac9398_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_4d05811f3a28a81288f8cc79c1814ff2cf3a1bef8eb4cfb0dc12ef89642c2e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d05811f3a28a81288f8cc79c1814ff2cf3a1bef8eb4cfb0dc12ef89642c2e65->enter($__internal_4d05811f3a28a81288f8cc79c1814ff2cf3a1bef8eb4cfb0dc12ef89642c2e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_690669dc5a30df4c5ca472454d4800985d7486abbb5b0729469ca1f835242836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690669dc5a30df4c5ca472454d4800985d7486abbb5b0729469ca1f835242836->enter($__internal_690669dc5a30df4c5ca472454d4800985d7486abbb5b0729469ca1f835242836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_690669dc5a30df4c5ca472454d4800985d7486abbb5b0729469ca1f835242836->leave($__internal_690669dc5a30df4c5ca472454d4800985d7486abbb5b0729469ca1f835242836_prof);

        
        $__internal_4d05811f3a28a81288f8cc79c1814ff2cf3a1bef8eb4cfb0dc12ef89642c2e65->leave($__internal_4d05811f3a28a81288f8cc79c1814ff2cf3a1bef8eb4cfb0dc12ef89642c2e65_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_5dc8ed3d1756bb112e4522836beabb235fe87b4a528eb63ad6520a633e832d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc8ed3d1756bb112e4522836beabb235fe87b4a528eb63ad6520a633e832d1b->enter($__internal_5dc8ed3d1756bb112e4522836beabb235fe87b4a528eb63ad6520a633e832d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_c1ccc8ffe46907df69dd3e183d13ed66dfd9f50364c1a6ee9667d0acefc9e3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ccc8ffe46907df69dd3e183d13ed66dfd9f50364c1a6ee9667d0acefc9e3ce->enter($__internal_c1ccc8ffe46907df69dd3e183d13ed66dfd9f50364c1a6ee9667d0acefc9e3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 29
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 30
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 33
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 36
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 40
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_c1ccc8ffe46907df69dd3e183d13ed66dfd9f50364c1a6ee9667d0acefc9e3ce->leave($__internal_c1ccc8ffe46907df69dd3e183d13ed66dfd9f50364c1a6ee9667d0acefc9e3ce_prof);

        
        $__internal_5dc8ed3d1756bb112e4522836beabb235fe87b4a528eb63ad6520a633e832d1b->leave($__internal_5dc8ed3d1756bb112e4522836beabb235fe87b4a528eb63ad6520a633e832d1b_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_308c64f789a8e80742ac8e7836abe791d64eaa1409b2b092f9b1ee9b09cb6a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308c64f789a8e80742ac8e7836abe791d64eaa1409b2b092f9b1ee9b09cb6a9b->enter($__internal_308c64f789a8e80742ac8e7836abe791d64eaa1409b2b092f9b1ee9b09cb6a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_d227addb0b5eab4321bada0be4bf27b22d038520011ba195b48195b96511e216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d227addb0b5eab4321bada0be4bf27b22d038520011ba195b48195b96511e216->enter($__internal_d227addb0b5eab4321bada0be4bf27b22d038520011ba195b48195b96511e216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_d227addb0b5eab4321bada0be4bf27b22d038520011ba195b48195b96511e216->leave($__internal_d227addb0b5eab4321bada0be4bf27b22d038520011ba195b48195b96511e216_prof);

        
        $__internal_308c64f789a8e80742ac8e7836abe791d64eaa1409b2b092f9b1ee9b09cb6a9b->leave($__internal_308c64f789a8e80742ac8e7836abe791d64eaa1409b2b092f9b1ee9b09cb6a9b_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_78efeb6689b5e885393a5de939a200462f3382d4fde8dcfda8fab3b018ff5d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78efeb6689b5e885393a5de939a200462f3382d4fde8dcfda8fab3b018ff5d7d->enter($__internal_78efeb6689b5e885393a5de939a200462f3382d4fde8dcfda8fab3b018ff5d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_bc24d347d9047cca35625aa555e8e423a2ce2a6aa6cfe8c4d442e6ffc306f0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc24d347d9047cca35625aa555e8e423a2ce2a6aa6cfe8c4d442e6ffc306f0f7->enter($__internal_bc24d347d9047cca35625aa555e8e423a2ce2a6aa6cfe8c4d442e6ffc306f0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_bc24d347d9047cca35625aa555e8e423a2ce2a6aa6cfe8c4d442e6ffc306f0f7->leave($__internal_bc24d347d9047cca35625aa555e8e423a2ce2a6aa6cfe8c4d442e6ffc306f0f7_prof);

        
        $__internal_78efeb6689b5e885393a5de939a200462f3382d4fde8dcfda8fab3b018ff5d7d->leave($__internal_78efeb6689b5e885393a5de939a200462f3382d4fde8dcfda8fab3b018ff5d7d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
