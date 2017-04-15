<?php

/* SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig */
class __TwigTemplate_24b64d2a17561e83b41b4b3cf9f13b39d49d2ae1c3b58188b5d7fa5f3b2a39bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusUiBundle:Form:theme.html.twig", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusUiBundle:Form:theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18cafb693f46984006d73d0ced5f8b69b5db4ce47f2f6f38c497b408b41a0420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18cafb693f46984006d73d0ced5f8b69b5db4ce47f2f6f38c497b408b41a0420->enter($__internal_18cafb693f46984006d73d0ced5f8b69b5db4ce47f2f6f38c497b408b41a0420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig"));

        $__internal_a0e924ccae5e3bc0d08f1996db87afc51680fba962395e46e8618a9a1292a0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e924ccae5e3bc0d08f1996db87afc51680fba962395e46e8618a9a1292a0f0->enter($__internal_a0e924ccae5e3bc0d08f1996db87afc51680fba962395e46e8618a9a1292a0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18cafb693f46984006d73d0ced5f8b69b5db4ce47f2f6f38c497b408b41a0420->leave($__internal_18cafb693f46984006d73d0ced5f8b69b5db4ce47f2f6f38c497b408b41a0420_prof);

        
        $__internal_a0e924ccae5e3bc0d08f1996db87afc51680fba962395e46e8618a9a1292a0f0->leave($__internal_a0e924ccae5e3bc0d08f1996db87afc51680fba962395e46e8618a9a1292a0f0_prof);

    }

    // line 3
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_ed2fa8162beb1091731859ea5d07438867cb90fa03b724f9b5ec4c8afaa12e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2fa8162beb1091731859ea5d07438867cb90fa03b724f9b5ec4c8afaa12e96->enter($__internal_ed2fa8162beb1091731859ea5d07438867cb90fa03b724f9b5ec4c8afaa12e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_bc13a5936f5759de74fd434307ff47e0e283d0bbf227b89a030ab385602830a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc13a5936f5759de74fd434307ff47e0e283d0bbf227b89a030ab385602830a4->enter($__internal_bc13a5936f5759de74fd434307ff47e0e283d0bbf227b89a030ab385602830a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig", 4);
        // line 5
        echo "
    <div class=\"ui top attached tabular menu\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "translations", array()));
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
        foreach ($context['_seq'] as $context["localeCode"] => $context["translationForm"]) {
            // line 8
            echo "            <a class=\"item";
            if ((0 == $this->getAttribute($context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
            echo "\">
                ";
            // line 9
            echo $context["flags"]->getfromLocaleCode($context["localeCode"]);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["localeCode"])), "html", null, true);
            echo "
            </a>
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
        unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "translations", array()));
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
        foreach ($context['_seq'] as $context["localeCode"] => $context["translationForm"]) {
            // line 15
            echo "        <div class=\"ui bottom attached tab segment";
            if ((0 == $this->getAttribute($context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
            echo "\">
            ";
            // line 16
            ob_start();
            // line 17
            echo "                ";
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
                // line 18
                echo "                    ";
                if (($context["localeCode"] == $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "localeCode", array()), "vars", array()), "value", array()))) {
                    // line 19
                    echo "                        ";
                    echo $this->getAttribute($this, "collection_item", array(0 => $context["child"], 1 => ($context["allow_delete"] ?? $this->getContext($context, "allow_delete")), 2 => ($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label")), 3 => $this->getAttribute($context["loop"], "index0", array())), "method");
                    echo "
                    ";
                }
                // line 21
                echo "                ";
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
            // line 22
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 23
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bc13a5936f5759de74fd434307ff47e0e283d0bbf227b89a030ab385602830a4->leave($__internal_bc13a5936f5759de74fd434307ff47e0e283d0bbf227b89a030ab385602830a4_prof);

        
        $__internal_ed2fa8162beb1091731859ea5d07438867cb90fa03b724f9b5ec4c8afaa12e96->leave($__internal_ed2fa8162beb1091731859ea5d07438867cb90fa03b724f9b5ec4c8afaa12e96_prof);

    }

    // line 27
    public function getcollection_item($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
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
            $__internal_586a661a27c2901a06d1b8ba682302ce1b36049630f5041818982ac336b426d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_586a661a27c2901a06d1b8ba682302ce1b36049630f5041818982ac336b426d5->enter($__internal_586a661a27c2901a06d1b8ba682302ce1b36049630f5041818982ac336b426d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_2526b4eb61235ae3b218c9050751d96b22ade35f3c3a10a05689d7e28c883267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2526b4eb61235ae3b218c9050751d96b22ade35f3c3a10a05689d7e28c883267->enter($__internal_2526b4eb61235ae3b218c9050751d96b22ade35f3c3a10a05689d7e28c883267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 28
            echo "    <div class=\"attribute\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "attribute", array()), "code", array()), "html", null, true);
            echo "\">
        ";
            // line 29
            $context["id"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array());
            // line 30
            echo "        ";
            if (twig_in_filter("checkbox", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), "value", array()), "vars", array()), "block_prefixes", array()))) {
                // line 31
                echo "            <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                ";
                // line 32
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "value", array()), 'widget');
                echo "
                <label>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "attribute", array()), "name", array()), "html", null, true);
                echo "</label>
            </div>
            <button class=\"ui red right labeled icon button\" style=\"float: right;\">
                <i class=\"remove icon\"></i> ";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
                echo "
            </button>
        ";
            } else {
                // line 39
                echo "            <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                <div class=\"ui label\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "attribute", array()), "name", array()), "html", null, true);
                echo "</div>
                ";
                // line 41
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "value", array()), 'widget');
                echo "
                <button class=\"ui red right labeled icon button\">
                    <i class=\"remove icon\"></i> ";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
                echo "
                </button>
            </div>
            ";
                // line 46
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "value", array()), 'errors');
                echo "
        ";
            }
            // line 48
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "attribute", array()), "code", array()), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localeCode", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localeCode", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localeCode", array()), "vars", array()), "value", array()), "html", null, true);
            echo "\"/>
    </div>
";
            
            $__internal_2526b4eb61235ae3b218c9050751d96b22ade35f3c3a10a05689d7e28c883267->leave($__internal_2526b4eb61235ae3b218c9050751d96b22ade35f3c3a10a05689d7e28c883267_prof);

            
            $__internal_586a661a27c2901a06d1b8ba682302ce1b36049630f5041818982ac336b426d5->leave($__internal_586a661a27c2901a06d1b8ba682302ce1b36049630f5041818982ac336b426d5_prof);

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
        return "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 49,  272 => 48,  267 => 46,  261 => 43,  256 => 41,  252 => 40,  249 => 39,  243 => 36,  237 => 33,  233 => 32,  230 => 31,  227 => 30,  225 => 29,  220 => 28,  199 => 27,  176 => 23,  173 => 22,  159 => 21,  153 => 19,  150 => 18,  132 => 17,  130 => 16,  121 => 15,  104 => 14,  100 => 12,  81 => 9,  72 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusUiBundle:Form:theme.html.twig' %}

{% block collection_widget -%}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui top attached tabular menu\">
        {% for localeCode, translationForm in attr.translations %}
            <a class=\"item{% if 0 == loop.index0 %} active{% endif %}\" data-tab=\"{{ localeCode }}\">
                {{ flags.fromLocaleCode(localeCode) }} {{ localeCode|sylius_locale_name }}
            </a>
        {% endfor %}
    </div>

    {% for localeCode, translationForm in attr.translations %}
        <div class=\"ui bottom attached tab segment{% if 0 == loop.index0 %} active{% endif %}\" data-tab=\"{{ localeCode }}\">
            {% spaceless %}
                {% for child in form %}
                    {% if localeCode == child.localeCode.vars.value %}
                        {{ _self.collection_item(child, allow_delete, button_delete_label, loop.index0) }}
                    {% endif %}
                {% endfor %}
            {% endspaceless %}
        </div>
    {% endfor %}
{%- endblock collection_widget %}

{% macro collection_item(form, allow_delete, button_delete_label, index) %}
    <div class=\"attribute\" data-id=\"{{ form.vars.data.attribute.code }}\">
        {% set id = form.vars.id %}
        {% if 'checkbox' in form.children.value.vars.block_prefixes %}
            <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                {{ form_widget(form.value) }}
                <label>{{ form.vars.value.attribute.name }}</label>
            </div>
            <button class=\"ui red right labeled icon button\" style=\"float: right;\">
                <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
            </button>
        {% else %}
            <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                <div class=\"ui label\">{{ form.vars.value.attribute.name }}</div>
                {{ form_widget(form.value) }}
                <button class=\"ui red right labeled icon button\">
                    <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
                </button>
            </div>
            {{ form_errors(form.value) }}
        {% endif %}
        <input type=\"hidden\" name=\"{{ form.attribute.vars.full_name }}\" id=\"{{ form.attribute.vars.id }}\" value=\"{{ form.vars.data.attribute.code }}\"/>
        <input type=\"hidden\" name=\"{{ form.localeCode.vars.full_name }}\" id=\"{{ form.localeCode.vars.id }}\" value=\"{{ form.localeCode.vars.value }}\"/>
    </div>
{% endmacro %}
", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributesCollection.html.twig");
    }
}
