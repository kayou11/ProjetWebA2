<?php

/* SyliusAdminBundle:Product:_menu.html.twig */
class __TwigTemplate_9e2f6b4b74e5dece028ac7370bec55d4ffbd57d5bc549af100ac66bff61e9cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusAdminBundle:Product:_menu.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ffa12c87b296e6dda3cd3ef9d5bcfdd5426430445b833344f24c6b954e2bf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffa12c87b296e6dda3cd3ef9d5bcfdd5426430445b833344f24c6b954e2bf3f->enter($__internal_8ffa12c87b296e6dda3cd3ef9d5bcfdd5426430445b833344f24c6b954e2bf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_menu.html.twig"));

        $__internal_232daf213f13c95985d39dd87e6680c95b53a0415f21909160846de512a2ab5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232daf213f13c95985d39dd87e6680c95b53a0415f21909160846de512a2ab5d->enter($__internal_232daf213f13c95985d39dd87e6680c95b53a0415f21909160846de512a2ab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_menu.html.twig"));

        // line 3
        if (twig_in_filter("create", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            // line 4
            $context["action"] = "create";
        } else {
            // line 6
            $context["action"] = "update";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ffa12c87b296e6dda3cd3ef9d5bcfdd5426430445b833344f24c6b954e2bf3f->leave($__internal_8ffa12c87b296e6dda3cd3ef9d5bcfdd5426430445b833344f24c6b954e2bf3f_prof);

        
        $__internal_232daf213f13c95985d39dd87e6680c95b53a0415f21909160846de512a2ab5d->leave($__internal_232daf213f13c95985d39dd87e6680c95b53a0415f21909160846de512a2ab5d_prof);

    }

    // line 9
    public function block_list($context, array $blocks = array())
    {
        $__internal_a1e467a7474924545ef366dfc826f0d3ce5af3268ccdeb32caf36554a202f095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e467a7474924545ef366dfc826f0d3ce5af3268ccdeb32caf36554a202f095->enter($__internal_a1e467a7474924545ef366dfc826f0d3ce5af3268ccdeb32caf36554a202f095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_add8da197552e3ef386bc6f74f583b083f1ba38cb9a249c044748e79b2ab12dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add8da197552e3ef386bc6f74f583b083f1ba38cb9a249c044748e79b2ab12dd->enter($__internal_add8da197552e3ef386bc6f74f583b083f1ba38cb9a249c044748e79b2ab12dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 10
        $context["form"] = $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "form", array());
        // line 11
        echo "<div class=\"ui stackable grid sylius-tabular-form\">
    <div class=\"three wide column\">
        <div class=\"ui large fluid vertical menu\">
            ";
        // line 14
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
            // line 15
            echo "                ";
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
        // line 17
        echo "        </div>
    </div>
    <div class=\"thirteen wide column\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"ui segment\">
            ";
        // line 22
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
            // line 23
            echo "                ";
            $this->loadTemplate($this->getAttribute($context["item"], "attribute", array(0 => "template"), "method"), "SyliusAdminBundle:Product:_menu.html.twig", 23)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")), "product" => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "product", array()))));
            // line 24
            echo "            ";
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
        // line 25
        echo "        </div>
    </div>
</div>
";
        
        $__internal_add8da197552e3ef386bc6f74f583b083f1ba38cb9a249c044748e79b2ab12dd->leave($__internal_add8da197552e3ef386bc6f74f583b083f1ba38cb9a249c044748e79b2ab12dd_prof);

        
        $__internal_a1e467a7474924545ef366dfc826f0d3ce5af3268ccdeb32caf36554a202f095->leave($__internal_a1e467a7474924545ef366dfc826f0d3ce5af3268ccdeb32caf36554a202f095_prof);

    }

    // line 30
    public function block_item($context, array $blocks = array())
    {
        $__internal_8d4bb8a73489ff127f8a29ebc4df917b4b7829b51a2630cbfcec8bbc0f747434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4bb8a73489ff127f8a29ebc4df917b4b7829b51a2630cbfcec8bbc0f747434->enter($__internal_8d4bb8a73489ff127f8a29ebc4df917b4b7829b51a2630cbfcec8bbc0f747434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_fa497c81e34ff5a4b4f555efa5d435d0136c0cf3c70124b1a3972fbdcc402530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa497c81e34ff5a4b4f555efa5d435d0136c0cf3c70124b1a3972fbdcc402530->enter($__internal_fa497c81e34ff5a4b4f555efa5d435d0136c0cf3c70124b1a3972fbdcc402530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 31
        $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
        // line 32
        $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
        // line 33
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
            // line 34
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "active"));
        }
        // line 36
        if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
            // line 37
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
        }
        // line 39
        echo "    <a class=\"item";
        if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "class", array()), "html", null, true);
        }
        echo "\" data-tab=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "name", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
        echo "</a>
";
        
        $__internal_fa497c81e34ff5a4b4f555efa5d435d0136c0cf3c70124b1a3972fbdcc402530->leave($__internal_fa497c81e34ff5a4b4f555efa5d435d0136c0cf3c70124b1a3972fbdcc402530_prof);

        
        $__internal_8d4bb8a73489ff127f8a29ebc4df917b4b7829b51a2630cbfcec8bbc0f747434->leave($__internal_8d4bb8a73489ff127f8a29ebc4df917b4b7829b51a2630cbfcec8bbc0f747434_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 39,  177 => 37,  175 => 36,  172 => 34,  170 => 33,  168 => 32,  166 => 31,  157 => 30,  144 => 25,  130 => 24,  127 => 23,  110 => 22,  105 => 20,  100 => 17,  83 => 15,  66 => 14,  61 => 11,  59 => 10,  50 => 9,  40 => 1,  37 => 6,  34 => 4,  32 => 3,  11 => 1,);
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

{% if 'create' in app.request.attributes.get('_route') %}
    {% set action = 'create' %}
{% else %}
    {% set action = 'update' %}
{% endif %}

{% block list %}
{% set form = (options.form) %}
<div class=\"ui stackable grid sylius-tabular-form\">
    <div class=\"three wide column\">
        <div class=\"ui large fluid vertical menu\">
            {% for item in item.children %}
                {{ block('item') }}
            {% endfor %}
        </div>
    </div>
    <div class=\"thirteen wide column\">
        {{ form_errors(form) }}
        <div class=\"ui segment\">
            {% for item in item.children %}
                {% include item.attribute('template') with {'form': form, 'product': options.product} %}
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}

{% block item %}
    {%- set attributes = item.attributes %}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge(['active']) %}
    {%- endif %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    <a class=\"item{% if attributes.class is defined %} {{ attributes.class }}{% endif %}\" data-tab=\"{{ item.name }}\">{{ item.label|trans }}</a>
{% endblock %}
", "SyliusAdminBundle:Product:_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_menu.html.twig");
    }
}
