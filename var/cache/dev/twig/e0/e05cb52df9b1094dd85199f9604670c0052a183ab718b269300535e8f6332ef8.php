<?php

/* SyliusUiBundle:Menu:top.html.twig */
class __TwigTemplate_89b6304a9c94411237184145e9b76ad95c1f93624e2b396af8c6cf5c85f7b5e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusUiBundle:Menu:top.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'items' => array($this, 'block_items'),
            'item' => array($this, 'block_item'),
            'link' => array($this, 'block_link'),
            'transition' => array($this, 'block_transition'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bd5996e93b1b52dc96b02e1e3fed5032ba42677dc445d5acce315a47328fefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd5996e93b1b52dc96b02e1e3fed5032ba42677dc445d5acce315a47328fefa->enter($__internal_5bd5996e93b1b52dc96b02e1e3fed5032ba42677dc445d5acce315a47328fefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:top.html.twig"));

        $__internal_f03164b8fffc70fcc5e8df1c5fae85083e5297d01fc9ba3caab0f780b65d7d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03164b8fffc70fcc5e8df1c5fae85083e5297d01fc9ba3caab0f780b65d7d5b->enter($__internal_f03164b8fffc70fcc5e8df1c5fae85083e5297d01fc9ba3caab0f780b65d7d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:top.html.twig"));

        // line 3
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Menu:top.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd5996e93b1b52dc96b02e1e3fed5032ba42677dc445d5acce315a47328fefa->leave($__internal_5bd5996e93b1b52dc96b02e1e3fed5032ba42677dc445d5acce315a47328fefa_prof);

        
        $__internal_f03164b8fffc70fcc5e8df1c5fae85083e5297d01fc9ba3caab0f780b65d7d5b->leave($__internal_f03164b8fffc70fcc5e8df1c5fae85083e5297d01fc9ba3caab0f780b65d7d5b_prof);

    }

    // line 5
    public function block_root($context, array $blocks = array())
    {
        $__internal_93a022f392c2688e77fa0228944baf160c595412314d3f9d2313512f121382d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a022f392c2688e77fa0228944baf160c595412314d3f9d2313512f121382d9->enter($__internal_93a022f392c2688e77fa0228944baf160c595412314d3f9d2313512f121382d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_bfe6aa6e60102171f4a9ef19db7498538e5d6f412fc5351f76fd39efc71228de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe6aa6e60102171f4a9ef19db7498538e5d6f412fc5351f76fd39efc71228de->enter($__internal_bfe6aa6e60102171f4a9ef19db7498538e5d6f412fc5351f76fd39efc71228de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 6
        echo "    ";
        $context["id"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "column_id"), "method");
        // line 7
        echo "
    <div class=\"six wide right aligned column\"";
        // line 8
        if (($context["id"] ?? $this->getContext($context, "id"))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 9
        $this->displayBlock("items", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_bfe6aa6e60102171f4a9ef19db7498538e5d6f412fc5351f76fd39efc71228de->leave($__internal_bfe6aa6e60102171f4a9ef19db7498538e5d6f412fc5351f76fd39efc71228de_prof);

        
        $__internal_93a022f392c2688e77fa0228944baf160c595412314d3f9d2313512f121382d9->leave($__internal_93a022f392c2688e77fa0228944baf160c595412314d3f9d2313512f121382d9_prof);

    }

    // line 13
    public function block_items($context, array $blocks = array())
    {
        $__internal_bc557c265cd1e4a4429712d317b0df74dd961bf130eb3cb7956de3b70c1dc731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc557c265cd1e4a4429712d317b0df74dd961bf130eb3cb7956de3b70c1dc731->enter($__internal_bc557c265cd1e4a4429712d317b0df74dd961bf130eb3cb7956de3b70c1dc731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "items"));

        $__internal_2a611246b3c85df77ba962e78d7061e6ef62c98e774ec862a788c131a0e229e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a611246b3c85df77ba962e78d7061e6ef62c98e774ec862a788c131a0e229e7->enter($__internal_2a611246b3c85df77ba962e78d7061e6ef62c98e774ec862a788c131a0e229e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "items"));

        // line 14
        echo "    <div class=\"ui buttons\">
        ";
        // line 15
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
            // line 16
            echo "            ";
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
        // line 18
        echo "    </div>
";
        
        $__internal_2a611246b3c85df77ba962e78d7061e6ef62c98e774ec862a788c131a0e229e7->leave($__internal_2a611246b3c85df77ba962e78d7061e6ef62c98e774ec862a788c131a0e229e7_prof);

        
        $__internal_bc557c265cd1e4a4429712d317b0df74dd961bf130eb3cb7956de3b70c1dc731->leave($__internal_bc557c265cd1e4a4429712d317b0df74dd961bf130eb3cb7956de3b70c1dc731_prof);

    }

    // line 21
    public function block_item($context, array $blocks = array())
    {
        $__internal_c565d9872ee8b083a58fa98749d09601bd1eef844f3ef673c0268d4513de2014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c565d9872ee8b083a58fa98749d09601bd1eef844f3ef673c0268d4513de2014->enter($__internal_c565d9872ee8b083a58fa98749d09601bd1eef844f3ef673c0268d4513de2014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_622d76ba66ef199a568b148e5338b9e94db4c583a9cd1edbcafe2b1f0fd65ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622d76ba66ef199a568b148e5338b9e94db4c583a9cd1edbcafe2b1f0fd65ed5->enter($__internal_622d76ba66ef199a568b148e5338b9e94db4c583a9cd1edbcafe2b1f0fd65ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 22
        echo "    ";
        if (("edit" == $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "type"), "method"))) {
            // line 23
            echo "        ";
            echo $context["buttons"]->getedit($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()));
            echo "
    ";
        } elseif (("show" == $this->getAttribute(        // line 24
($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "type"), "method"))) {
            // line 25
            echo "        ";
            echo $context["buttons"]->getshow($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()));
            echo "
    ";
        } elseif (("delete" == $this->getAttribute(        // line 26
($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "type"), "method"))) {
            // line 27
            echo "        ";
            echo $context["buttons"]->getdelete($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), true, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "resource_id"), "method"));
            echo "
    ";
        } elseif (("transition" == $this->getAttribute(        // line 28
($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "type"), "method"))) {
            // line 29
            echo "        ";
            $this->displayBlock("transition", $context, $blocks);
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $this->displayBlock("link", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_622d76ba66ef199a568b148e5338b9e94db4c583a9cd1edbcafe2b1f0fd65ed5->leave($__internal_622d76ba66ef199a568b148e5338b9e94db4c583a9cd1edbcafe2b1f0fd65ed5_prof);

        
        $__internal_c565d9872ee8b083a58fa98749d09601bd1eef844f3ef673c0268d4513de2014->leave($__internal_c565d9872ee8b083a58fa98749d09601bd1eef844f3ef673c0268d4513de2014_prof);

    }

    // line 35
    public function block_link($context, array $blocks = array())
    {
        $__internal_0c2e6069394833bb56b3bab12a4d1230e797d6df8b4a73d4f601583cc174cf0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2e6069394833bb56b3bab12a4d1230e797d6df8b4a73d4f601583cc174cf0d->enter($__internal_0c2e6069394833bb56b3bab12a4d1230e797d6df8b4a73d4f601583cc174cf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        $__internal_f63e23725ced1784ac89f470d4f9dc817ac7ef6b43b53e4798721a593c82abe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63e23725ced1784ac89f470d4f9dc817ac7ef6b43b53e4798721a593c82abe3->enter($__internal_f63e23725ced1784ac89f470d4f9dc817ac7ef6b43b53e4798721a593c82abe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        // line 36
        echo "    ";
        $context["color"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttribute", array(0 => "color"), "method");
        // line 37
        echo "
    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\" class=\"ui ";
        if (($context["color"] ?? $this->getContext($context, "color"))) {
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo " ";
        }
        echo "labeled icon button\">
        ";
        // line 39
        $this->displayBlock("icon", $context, $blocks);
        echo "
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
        echo "
    </a>
";
        
        $__internal_f63e23725ced1784ac89f470d4f9dc817ac7ef6b43b53e4798721a593c82abe3->leave($__internal_f63e23725ced1784ac89f470d4f9dc817ac7ef6b43b53e4798721a593c82abe3_prof);

        
        $__internal_0c2e6069394833bb56b3bab12a4d1230e797d6df8b4a73d4f601583cc174cf0d->leave($__internal_0c2e6069394833bb56b3bab12a4d1230e797d6df8b4a73d4f601583cc174cf0d_prof);

    }

    // line 44
    public function block_transition($context, array $blocks = array())
    {
        $__internal_aa3edcae6c293341553509e5b44d31623ce71a65fd0897e7d443ca0f31e867cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3edcae6c293341553509e5b44d31623ce71a65fd0897e7d443ca0f31e867cf->enter($__internal_aa3edcae6c293341553509e5b44d31623ce71a65fd0897e7d443ca0f31e867cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "transition"));

        $__internal_2acc3036921472531a8023cfde126e2a083ce299c20c27383e3e37e25e47869c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acc3036921472531a8023cfde126e2a083ce299c20c27383e3e37e25e47869c->enter($__internal_2acc3036921472531a8023cfde126e2a083ce299c20c27383e3e37e25e47869c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "transition"));

        // line 45
        echo "    ";
        $context["color"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttribute", array(0 => "color"), "method");
        // line 46
        echo "
    <form action=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\" method=\"post\" style=\"float: right;\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui ";
        // line 49
        if (($context["color"] ?? $this->getContext($context, "color"))) {
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo " ";
        }
        echo "labeled icon loadable button\" type=\"submit\">
            ";
        // line 50
        $this->displayBlock("icon", $context, $blocks);
        echo "
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
        echo "
        </button>
    </form>
";
        
        $__internal_2acc3036921472531a8023cfde126e2a083ce299c20c27383e3e37e25e47869c->leave($__internal_2acc3036921472531a8023cfde126e2a083ce299c20c27383e3e37e25e47869c_prof);

        
        $__internal_aa3edcae6c293341553509e5b44d31623ce71a65fd0897e7d443ca0f31e867cf->leave($__internal_aa3edcae6c293341553509e5b44d31623ce71a65fd0897e7d443ca0f31e867cf_prof);

    }

    // line 56
    public function block_icon($context, array $blocks = array())
    {
        $__internal_c13b2a1c85ac4db648d6d9200675b5eaa7ec7219ed44e6dcbd139348b21b3cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13b2a1c85ac4db648d6d9200675b5eaa7ec7219ed44e6dcbd139348b21b3cde->enter($__internal_c13b2a1c85ac4db648d6d9200675b5eaa7ec7219ed44e6dcbd139348b21b3cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_351653cecc9d1a749b0bcb4a9d9ea32e3609884695f9142625bc072fbf155a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351653cecc9d1a749b0bcb4a9d9ea32e3609884695f9142625bc072fbf155a8d->enter($__internal_351653cecc9d1a749b0bcb4a9d9ea32e3609884695f9142625bc072fbf155a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        // line 57
        echo "    ";
        $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttribute", array(0 => "icon"), "method");
        // line 58
        echo "    ";
        if (($context["icon"] ?? $this->getContext($context, "icon"))) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "\"></i> ";
        }
        
        $__internal_351653cecc9d1a749b0bcb4a9d9ea32e3609884695f9142625bc072fbf155a8d->leave($__internal_351653cecc9d1a749b0bcb4a9d9ea32e3609884695f9142625bc072fbf155a8d_prof);

        
        $__internal_c13b2a1c85ac4db648d6d9200675b5eaa7ec7219ed44e6dcbd139348b21b3cde->leave($__internal_c13b2a1c85ac4db648d6d9200675b5eaa7ec7219ed44e6dcbd139348b21b3cde_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Menu:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 58,  289 => 57,  280 => 56,  266 => 51,  262 => 50,  255 => 49,  250 => 47,  247 => 46,  244 => 45,  235 => 44,  222 => 40,  218 => 39,  209 => 38,  206 => 37,  203 => 36,  194 => 35,  180 => 31,  174 => 29,  172 => 28,  167 => 27,  165 => 26,  160 => 25,  158 => 24,  153 => 23,  150 => 22,  141 => 21,  130 => 18,  113 => 16,  96 => 15,  93 => 14,  84 => 13,  71 => 9,  63 => 8,  60 => 7,  57 => 6,  48 => 5,  38 => 1,  36 => 3,  11 => 1,);
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

{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% block root %}
    {% set id = item.extra('column_id') %}

    <div class=\"six wide right aligned column\"{% if id %} id=\"{{ id }}\"{% endif %}>
        {{ block('items') }}
    </div>
{% endblock %}

{% block items %}
    <div class=\"ui buttons\">
        {% for item in item.children %}
            {{ block('item') }}
        {% endfor %}
    </div>
{% endblock %}

{% block item %}
    {% if 'edit' == item.attribute('type') %}
        {{ buttons.edit(item.uri, item.label) }}
    {% elseif 'show' == item.attribute('type') %}
        {{ buttons.show(item.uri, item.label) }}
    {% elseif 'delete' == item.attribute('type') %}
        {{ buttons.delete(item.uri, item.label|trans, true, item.attribute('resource_id')) }}
    {% elseif 'transition' == item.attribute('type') %}
        {{ block('transition') }}
    {% else %}
        {{ block('link') }}
    {% endif %}
{% endblock %}

{% block link %}
    {% set color = item.labelAttribute('color') %}

    <a href=\"{{ item.uri }}\" class=\"ui {% if color %}{{ color }} {% endif %}labeled icon button\">
        {{ block('icon') }}
        {{ item.label|trans }}
    </a>
{% endblock %}

{% block transition %}
    {% set color = item.labelAttribute('color') %}

    <form action=\"{{ item.uri }}\" method=\"post\" style=\"float: right;\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui {% if color %}{{ color }} {% endif %}labeled icon loadable button\" type=\"submit\">
            {{ block('icon') }}
            {{ item.label|trans }}
        </button>
    </form>
{% endblock %}

{% block icon %}
    {% set icon = item.labelAttribute('icon') %}
    {% if icon %}<i class=\"icon {{ icon }}\"></i> {% endif %}
{% endblock %}
", "SyliusUiBundle:Menu:top.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Menu/top.html.twig");
    }
}
