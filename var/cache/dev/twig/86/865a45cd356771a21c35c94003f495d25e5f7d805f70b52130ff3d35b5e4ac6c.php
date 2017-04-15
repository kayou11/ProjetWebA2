<?php

/* SyliusAdminBundle:ProductVariant:_menu.html.twig */
class __TwigTemplate_ee5cc06bbc98724c54a58bc5ed23a7c88833881abb8a487186dff4b256848817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusAdminBundle:ProductVariant:_menu.html.twig", 1);
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
        $__internal_9356af22e08cb5647d856c3f5f26bfca545c1b1d951fe8ee1e4946633a96f270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9356af22e08cb5647d856c3f5f26bfca545c1b1d951fe8ee1e4946633a96f270->enter($__internal_9356af22e08cb5647d856c3f5f26bfca545c1b1d951fe8ee1e4946633a96f270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:_menu.html.twig"));

        $__internal_0f77ecaa052f07bd5e26aaa52e166741246b405376ccf1938a31a9372770209e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f77ecaa052f07bd5e26aaa52e166741246b405376ccf1938a31a9372770209e->enter($__internal_0f77ecaa052f07bd5e26aaa52e166741246b405376ccf1938a31a9372770209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:_menu.html.twig"));

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
        
        $__internal_9356af22e08cb5647d856c3f5f26bfca545c1b1d951fe8ee1e4946633a96f270->leave($__internal_9356af22e08cb5647d856c3f5f26bfca545c1b1d951fe8ee1e4946633a96f270_prof);

        
        $__internal_0f77ecaa052f07bd5e26aaa52e166741246b405376ccf1938a31a9372770209e->leave($__internal_0f77ecaa052f07bd5e26aaa52e166741246b405376ccf1938a31a9372770209e_prof);

    }

    // line 9
    public function block_list($context, array $blocks = array())
    {
        $__internal_c750fddbae177fb983d0ac48af94fbf18cc6d006d48aeb118be80bab27a0e71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c750fddbae177fb983d0ac48af94fbf18cc6d006d48aeb118be80bab27a0e71d->enter($__internal_c750fddbae177fb983d0ac48af94fbf18cc6d006d48aeb118be80bab27a0e71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_ff4a3a060372498ce8d11b3766610b55f943b48afb25edcc8c4d79fe9fd14110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4a3a060372498ce8d11b3766610b55f943b48afb25edcc8c4d79fe9fd14110->enter($__internal_ff4a3a060372498ce8d11b3766610b55f943b48afb25edcc8c4d79fe9fd14110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
            $this->loadTemplate($this->getAttribute($context["item"], "attribute", array(0 => "template"), "method"), "SyliusAdminBundle:ProductVariant:_menu.html.twig", 23)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")), "product_variant" => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "product_variant", array()))));
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
        
        $__internal_ff4a3a060372498ce8d11b3766610b55f943b48afb25edcc8c4d79fe9fd14110->leave($__internal_ff4a3a060372498ce8d11b3766610b55f943b48afb25edcc8c4d79fe9fd14110_prof);

        
        $__internal_c750fddbae177fb983d0ac48af94fbf18cc6d006d48aeb118be80bab27a0e71d->leave($__internal_c750fddbae177fb983d0ac48af94fbf18cc6d006d48aeb118be80bab27a0e71d_prof);

    }

    // line 30
    public function block_item($context, array $blocks = array())
    {
        $__internal_d99caf4930fd669ef59ea518258c02a7f19dc54dcce29f7ecbea7f53a9dc9a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99caf4930fd669ef59ea518258c02a7f19dc54dcce29f7ecbea7f53a9dc9a30->enter($__internal_d99caf4930fd669ef59ea518258c02a7f19dc54dcce29f7ecbea7f53a9dc9a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_79e05e0c3fa7fe6f33403f3e288c6ded54011a0777905cd45b9c948c573d102c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e05e0c3fa7fe6f33403f3e288c6ded54011a0777905cd45b9c948c573d102c->enter($__internal_79e05e0c3fa7fe6f33403f3e288c6ded54011a0777905cd45b9c948c573d102c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_79e05e0c3fa7fe6f33403f3e288c6ded54011a0777905cd45b9c948c573d102c->leave($__internal_79e05e0c3fa7fe6f33403f3e288c6ded54011a0777905cd45b9c948c573d102c_prof);

        
        $__internal_d99caf4930fd669ef59ea518258c02a7f19dc54dcce29f7ecbea7f53a9dc9a30->leave($__internal_d99caf4930fd669ef59ea518258c02a7f19dc54dcce29f7ecbea7f53a9dc9a30_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant:_menu.html.twig";
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
                {% include item.attribute('template') with {'form': form, 'product_variant': options.product_variant} %}
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
", "SyliusAdminBundle:ProductVariant:_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/_menu.html.twig");
    }
}
