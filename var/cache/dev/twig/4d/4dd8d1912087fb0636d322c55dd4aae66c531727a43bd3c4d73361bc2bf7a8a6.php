<?php

/* SyliusResourceBundle::forms.html.twig */
class __TwigTemplate_0c4a324507432605999e985b7a388cd61d7a703a327d01fca706738f77abc494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e2cd954092665a9adb8b11375ac4d21baa71543e72cfaa28b81398be5022e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2cd954092665a9adb8b11375ac4d21baa71543e72cfaa28b81398be5022e70->enter($__internal_2e2cd954092665a9adb8b11375ac4d21baa71543e72cfaa28b81398be5022e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle::forms.html.twig"));

        $__internal_337b93b7a2130af8c067d37a7e24f52bd23ca17a4af31c515b54dd1203974053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337b93b7a2130af8c067d37a7e24f52bd23ca17a4af31c515b54dd1203974053->enter($__internal_337b93b7a2130af8c067d37a7e24f52bd23ca17a4af31c515b54dd1203974053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle::forms.html.twig"));

        // line 1
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 39
        echo "
";
        
        $__internal_2e2cd954092665a9adb8b11375ac4d21baa71543e72cfaa28b81398be5022e70->leave($__internal_2e2cd954092665a9adb8b11375ac4d21baa71543e72cfaa28b81398be5022e70_prof);

        
        $__internal_337b93b7a2130af8c067d37a7e24f52bd23ca17a4af31c515b54dd1203974053->leave($__internal_337b93b7a2130af8c067d37a7e24f52bd23ca17a4af31c515b54dd1203974053_prof);

    }

    // line 1
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_596e5c92a3d00f65269684c3b17357ff60fb4f3fa26d98e6ad3c900b4a01b337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596e5c92a3d00f65269684c3b17357ff60fb4f3fa26d98e6ad3c900b4a01b337->enter($__internal_596e5c92a3d00f65269684c3b17357ff60fb4f3fa26d98e6ad3c900b4a01b337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_a29eda5324b98d9ea9767b07612d0865d38e4718e0d2ea7feabffa0007822b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29eda5324b98d9ea9767b07612d0865d38e4718e0d2ea7feabffa0007822b7d->enter($__internal_a29eda5324b98d9ea9767b07612d0865d38e4718e0d2ea7feabffa0007822b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 2
        $context["__internal_d4c0b474a236fa9749a62546e47ec2484f6d7d7c87e1899ddcd33f535d40c41d"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "SyliusResourceBundle::forms.html.twig", 2);
        // line 3
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()))) : ("")) . " controls collection-widget")));
        // line 4
        echo "
    ";
        // line 5
        ob_start();
        // line 6
        echo "        <div data-form-type=\"collection\"
             ";
        // line 7
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
             ";
        // line 8
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? $this->getContext($context, "allow_add")))) {
            // line 9
            echo "             data-prototype='";
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collectionItem", array(0 => ($context["prototype"] ?? $this->getContext($context, "prototype")), 1 => ($context["allow_delete"] ?? $this->getContext($context, "allow_delete")), 2 => ($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label")), 3 => "__name__"), "method"));
            echo "'";
        }
        // line 10
        echo ">

            ";
        // line 12
        echo $context["__internal_d4c0b474a236fa9749a62546e47ec2484f6d7d7c87e1899ddcd33f535d40c41d"]->geterror($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
        echo "

            ";
        // line 14
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter(($context["prototypes"] ?? $this->getContext($context, "prototypes")))) : ("")))) {
            // line 15
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prototypes"] ?? $this->getContext($context, "prototypes")));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 16
                echo "                    <input type=\"hidden\"
                           data-form-prototype=\"";
                // line 17
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                           value=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this, "collectionItem", array(0 => $context["subPrototype"], 1 => ($context["allow_delete"] ?? $this->getContext($context, "allow_delete")), 2 => ($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label")), 3 => "__name__"), "method"));
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            <div data-form-collection=\"list\"
                 class=\"row collection-list\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 25
            echo "                    ";
            echo $this->getAttribute($this, "collectionItem", array(0 => $context["child"], 1 => ($context["allow_delete"] ?? $this->getContext($context, "allow_delete")), 2 => ($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label")), 3 => $this->getAttribute($context["loop"], "index0", array())), "method");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>

            ";
        // line 29
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? $this->getContext($context, "allow_add")))) {
            // line 30
            echo "                <a href=\"#\" class=\"btn btn-success btn-block\"
                   data-form-collection=\"add\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["button_add_label"] ?? $this->getContext($context, "button_add_label"))), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 36
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a29eda5324b98d9ea9767b07612d0865d38e4718e0d2ea7feabffa0007822b7d->leave($__internal_a29eda5324b98d9ea9767b07612d0865d38e4718e0d2ea7feabffa0007822b7d_prof);

        
        $__internal_596e5c92a3d00f65269684c3b17357ff60fb4f3fa26d98e6ad3c900b4a01b337->leave($__internal_596e5c92a3d00f65269684c3b17357ff60fb4f3fa26d98e6ad3c900b4a01b337_prof);

    }

    // line 40
    public function getcollectionItem($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "allow_delete" => $__allow_delete__,
            "button_delete_label" => $__button_delete_label__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2ba20b1d01c86ccf31f53df0c867ca1ee9f01b7b948ec71373d03fec579f6794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2ba20b1d01c86ccf31f53df0c867ca1ee9f01b7b948ec71373d03fec579f6794->enter($__internal_2ba20b1d01c86ccf31f53df0c867ca1ee9f01b7b948ec71373d03fec579f6794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collectionItem"));

            $__internal_fe7a09bb120057e1fe3a4e799183950a420d7fb5b869a1f3ce316d7984030bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fe7a09bb120057e1fe3a4e799183950a420d7fb5b869a1f3ce316d7984030bf8->enter($__internal_fe7a09bb120057e1fe3a4e799183950a420d7fb5b869a1f3ce316d7984030bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collectionItem"));

            // line 41
            echo "    ";
            ob_start();
            // line 42
            echo "        <div data-form-collection=\"item\"
             data-form-collection-index=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
            echo "\"
             class=\"collection-item\">
            <div class=\"collection-box";
            // line 45
            if ((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 1)) {
                echo " unique-field";
            }
            echo "\">
                ";
            // line 46
            if (($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) {
                // line 47
                echo "                    <p class=\"text-right\">
                        <a href=\"#\" data-form-collection=\"delete\" class=\"btn btn-danger\">
                            <i class=\"glyphicon glyphicon-remove collection-button-remove\"></i>
                            ";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label"))), "html", null, true);
                echo "
                        </a>
                    </p>
                ";
            }
            // line 54
            echo "                ";
            if ( !twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()))) {
                // line 55
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
                echo "
                ";
            } else {
                // line 57
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
                echo "
                ";
            }
            // line 59
            echo "            </div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_fe7a09bb120057e1fe3a4e799183950a420d7fb5b869a1f3ce316d7984030bf8->leave($__internal_fe7a09bb120057e1fe3a4e799183950a420d7fb5b869a1f3ce316d7984030bf8_prof);

            
            $__internal_2ba20b1d01c86ccf31f53df0c867ca1ee9f01b7b948ec71373d03fec579f6794->leave($__internal_2ba20b1d01c86ccf31f53df0c867ca1ee9f01b7b948ec71373d03fec579f6794_prof);

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
        return "SyliusResourceBundle::forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 59,  235 => 57,  229 => 55,  226 => 54,  219 => 50,  214 => 47,  212 => 46,  206 => 45,  201 => 43,  198 => 42,  195 => 41,  174 => 40,  162 => 36,  156 => 33,  151 => 30,  149 => 29,  145 => 27,  128 => 25,  111 => 24,  106 => 21,  103 => 20,  95 => 18,  91 => 17,  88 => 16,  83 => 15,  81 => 14,  76 => 12,  72 => 10,  67 => 9,  65 => 8,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  39 => 1,  28 => 39,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block collection_widget -%}
    {% from 'SyliusResourceBundle:Macros:notification.html.twig' import error %}
    {% set attr = attr|merge({'class': attr.class|default ~ ' controls collection-widget'}) %}

    {% spaceless %}
        <div data-form-type=\"collection\"
             {{ block('widget_container_attributes') }}
             {% if prototype is defined and allow_add %}
             data-prototype='{{ _self.collectionItem(prototype, allow_delete, button_delete_label, '__name__')|e }}'
             {%- endif -%}>

            {{ error(form.vars.errors) }}

            {% if prototypes|default is iterable %}
                {% for key, subPrototype in prototypes %}
                    <input type=\"hidden\"
                           data-form-prototype=\"{{ key }}\"
                           value=\"{{ _self.collectionItem(subPrototype, allow_delete, button_delete_label, '__name__')|e }}\" />
                {% endfor %}
            {% endif %}

            <div data-form-collection=\"list\"
                 class=\"row collection-list\">
                {% for child in form %}
                    {{ _self.collectionItem(child, allow_delete, button_delete_label, loop.index0) }}
                {% endfor %}
            </div>

            {% if prototype is defined and allow_add %}
                <a href=\"#\" class=\"btn btn-success btn-block\"
                   data-form-collection=\"add\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    {{ button_add_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endspaceless %}
{%- endblock collection_widget %}

{% macro collectionItem(form, allow_delete, button_delete_label, index) %}
    {% spaceless %}
        <div data-form-collection=\"item\"
             data-form-collection-index=\"{{ index }}\"
             class=\"collection-item\">
            <div class=\"collection-box{% if form|length == 1 %} unique-field{% endif %}\">
                {% if allow_delete %}
                    <p class=\"text-right\">
                        <a href=\"#\" data-form-collection=\"delete\" class=\"btn btn-danger\">
                            <i class=\"glyphicon glyphicon-remove collection-button-remove\"></i>
                            {{ button_delete_label|trans }}
                        </a>
                    </p>
                {% endif %}
                {% if not form.children|length %}
                    {{ form_widget(form) }}
                {% else %}
                    {{ form_rest(form) }}
                {% endif %}
            </div>
        </div>
    {% endspaceless %}
{% endmacro %}
", "SyliusResourceBundle::forms.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views/forms.html.twig");
    }
}
