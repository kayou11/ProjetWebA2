<?php

/* SyliusAdminBundle:Product/Attribute:attributeValues.html.twig */
class __TwigTemplate_d917137448007068db640e9827a4f670c1df835a763d89436ee23e73c4c1c1b2 extends Twig_Template
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
        $__internal_706453deebd7e08d0bedcc08e8b52638476dce201a90d838445799d50852ebbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706453deebd7e08d0bedcc08e8b52638476dce201a90d838445799d50852ebbc->enter($__internal_706453deebd7e08d0bedcc08e8b52638476dce201a90d838445799d50852ebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig"));

        $__internal_f89c05be8508591f308ec2dda75e4cd99d2182431baefe21b03792e80764eb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89c05be8508591f308ec2dda75e4cd99d2182431baefe21b03792e80764eb29->enter($__internal_f89c05be8508591f308ec2dda75e4cd99d2182431baefe21b03792e80764eb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig"));

        // line 1
        $context["subject"] = twig_replace_filter($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array()), array("_attribute" => ""));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forms"] ?? $this->getContext($context, "forms")));
        foreach ($context['_seq'] as $context["code"] => $context["localeCodes"]) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["localeCodes"]);
            foreach ($context['_seq'] as $context["localeCode"] => $context["form"]) {
                // line 4
                echo "        <div class=\"attribute\" data-id=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
            ";
                // line 5
                $context["id"] = twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($context["form"], "vars", array()), "label", array()), " ", "_"));
                // line 6
                echo "            ";
                if (twig_in_filter("type_checkbox", $this->getAttribute($this->getAttribute($context["form"], "vars", array()), "cache_key", array()))) {
                    // line 7
                    echo "                ";
                    echo $this->getAttribute($this, "checkboxField", array(0 => $context["form"], 1 => ($context["count"] ?? $this->getContext($context, "count")), 2 => ($context["id"] ?? $this->getContext($context, "id")), 3 => ($context["subject"] ?? $this->getContext($context, "subject")), 4 => $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array())), "method");
                    echo "
            ";
                } else {
                    // line 9
                    echo "                ";
                    echo $this->getAttribute($this, "textField", array(0 => $context["form"], 1 => ($context["count"] ?? $this->getContext($context, "count")), 2 => ($context["id"] ?? $this->getContext($context, "id")), 3 => ($context["subject"] ?? $this->getContext($context, "subject")), 4 => $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array())), "method");
                    echo "
            ";
                }
                // line 11
                echo "            <input type=\"hidden\"
                   name=\"sylius_product[attributes][";
                // line 12
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "][attribute]\"
                   id=\"sylius_product_attributes_";
                // line 13
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "_attribute\"
                   value=\"";
                // line 14
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"/>
            <input type=\"hidden\"
                   name=\"sylius_product[attributes][";
                // line 16
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "][localeCode]\"
                   id=\"sylius_product_attributes_";
                // line 17
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "_localeCode\"
                   value=\"";
                // line 18
                echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
                echo "\"/>
            ";
                // line 19
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 20
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['localeCodes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
        // line 40
        echo "
";
        // line 50
        echo "
";
        
        $__internal_706453deebd7e08d0bedcc08e8b52638476dce201a90d838445799d50852ebbc->leave($__internal_706453deebd7e08d0bedcc08e8b52638476dce201a90d838445799d50852ebbc_prof);

        
        $__internal_f89c05be8508591f308ec2dda75e4cd99d2182431baefe21b03792e80764eb29->leave($__internal_f89c05be8508591f308ec2dda75e4cd99d2182431baefe21b03792e80764eb29_prof);

    }

    // line 24
    public function getformField($__item__ = null, $__count__ = null, $__id__ = null, $__prefix__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "count" => $__count__,
            "id" => $__id__,
            "prefix" => $__prefix__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_92aeda32a09bb470f492646f612642385a85d98f1e6b1bb9f4b7694b5406bbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_92aeda32a09bb470f492646f612642385a85d98f1e6b1bb9f4b7694b5406bbb4->enter($__internal_92aeda32a09bb470f492646f612642385a85d98f1e6b1bb9f4b7694b5406bbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "formField"));

            $__internal_f888bd3e2c7f0edb470fc66e6123f68f17d94f50cc1e79b167f352e6d86b42f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f888bd3e2c7f0edb470fc66e6123f68f17d94f50cc1e79b167f352e6d86b42f4->enter($__internal_f888bd3e2c7f0edb470fc66e6123f68f17d94f50cc1e79b167f352e6d86b42f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "formField"));

            // line 25
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array())) > 0)) {
                // line 26
                echo "        ";
                $context["prefix"] = ((($context["prefix"] ?? $this->getContext($context, "prefix")) . "_") . $this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "vars", array()), "name", array()));
                // line 27
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 28
                    echo "            ";
                    echo $this->getAttribute($this, "formField", array(0 => $context["child"], 1 => ($context["count"] ?? $this->getContext($context, "count")), 2 => ($context["id"] ?? $this->getContext($context, "id")), 3 => ($context["prefix"] ?? $this->getContext($context, "prefix"))), "method");
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    ";
            } elseif (($this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "vars", array()), "name", array()) != "_token")) {
                // line 31
                echo "        ";
                $context["namePrefix"] = twig_replace_filter(($context["prefix"] ?? $this->getContext($context, "prefix")), array("_" => "]["));
                // line 32
                echo "        ";
                $context["dataName"] = ((((((((($context["applicationName"] ?? $this->getContext($context, "applicationName")) . "_") . ($context["subject"] ?? $this->getContext($context, "subject"))) . "[attributes][") . ($context["count"] ?? $this->getContext($context, "count"))) . ($context["namePrefix"] ?? $this->getContext($context, "namePrefix"))) . "][") . $this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "vars", array()), "name", array())) . "]");
                // line 33
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["item"] ?? null), "vars", array(), "any", false, true), "multiple", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "vars", array()), "multiple", array()))) {
                    // line 34
                    echo "            ";
                    $context["dataName"] = (($context["dataName"] ?? $this->getContext($context, "dataName")) . "[]");
                    // line 35
                    echo "        ";
                }
                // line 36
                echo "
        ";
                // line 37
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["item"] ?? $this->getContext($context, "item")), 'widget', array("id" => ($context["id"] ?? $this->getContext($context, "id")), "attr" => array("data-name" => ($context["dataName"] ?? $this->getContext($context, "dataName")))));
                echo "
    ";
            }
            
            $__internal_f888bd3e2c7f0edb470fc66e6123f68f17d94f50cc1e79b167f352e6d86b42f4->leave($__internal_f888bd3e2c7f0edb470fc66e6123f68f17d94f50cc1e79b167f352e6d86b42f4_prof);

            
            $__internal_92aeda32a09bb470f492646f612642385a85d98f1e6b1bb9f4b7694b5406bbb4->leave($__internal_92aeda32a09bb470f492646f612642385a85d98f1e6b1bb9f4b7694b5406bbb4_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function gettextField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e7c7c1aabb829b248841373e04cfda859a99ebf513a0b2c46ab808c3209d2abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e7c7c1aabb829b248841373e04cfda859a99ebf513a0b2c46ab808c3209d2abb->enter($__internal_e7c7c1aabb829b248841373e04cfda859a99ebf513a0b2c46ab808c3209d2abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textField"));

            $__internal_21fef506f821f82d850513bb31c5812bd6a1516e32def75635ef5a4e3ea0f04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_21fef506f821f82d850513bb31c5812bd6a1516e32def75635ef5a4e3ea0f04d->enter($__internal_21fef506f821f82d850513bb31c5812bd6a1516e32def75635ef5a4e3ea0f04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textField"));

            // line 42
            echo "    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "label", array()), "html", null, true);
            echo "</div>
        ";
            // line 44
            echo $this->getAttribute($this, "formField", array(0 => ($context["form"] ?? $this->getContext($context, "form")), 1 => ($context["count"] ?? $this->getContext($context, "count")), 2 => ($context["id"] ?? $this->getContext($context, "id")), 3 => "", 4 => ($context["subject"] ?? $this->getContext($context, "subject")), 5 => ($context["applicationName"] ?? $this->getContext($context, "applicationName"))), "method");
            echo "
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
            echo "
        </button>
    </div>
";
            
            $__internal_21fef506f821f82d850513bb31c5812bd6a1516e32def75635ef5a4e3ea0f04d->leave($__internal_21fef506f821f82d850513bb31c5812bd6a1516e32def75635ef5a4e3ea0f04d_prof);

            
            $__internal_e7c7c1aabb829b248841373e04cfda859a99ebf513a0b2c46ab808c3209d2abb->leave($__internal_e7c7c1aabb829b248841373e04cfda859a99ebf513a0b2c46ab808c3209d2abb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getcheckboxField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_913d576d151c12c1a624a10cd6403a54500f42c844f255aa9aac7ad7bf6a9c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_913d576d151c12c1a624a10cd6403a54500f42c844f255aa9aac7ad7bf6a9c55->enter($__internal_913d576d151c12c1a624a10cd6403a54500f42c844f255aa9aac7ad7bf6a9c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkboxField"));

            $__internal_c6608cd9c24dbe719a5aa32516f6b0a5f85522b07add357194b49ded28fdd7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c6608cd9c24dbe719a5aa32516f6b0a5f85522b07add357194b49ded28fdd7fe->enter($__internal_c6608cd9c24dbe719a5aa32516f6b0a5f85522b07add357194b49ded28fdd7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkboxField"));

            // line 52
            echo "    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        ";
            // line 53
            echo $this->getAttribute($this, "formField", array(0 => ($context["form"] ?? $this->getContext($context, "form")), 1 => ($context["count"] ?? $this->getContext($context, "count")), 2 => ($context["id"] ?? $this->getContext($context, "id")), 3 => "", 4 => ($context["subject"] ?? $this->getContext($context, "subject")), 5 => ($context["applicationName"] ?? $this->getContext($context, "applicationName"))), "method");
            echo "
        <label>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
            echo "
    </button>
";
            
            $__internal_c6608cd9c24dbe719a5aa32516f6b0a5f85522b07add357194b49ded28fdd7fe->leave($__internal_c6608cd9c24dbe719a5aa32516f6b0a5f85522b07add357194b49ded28fdd7fe_prof);

            
            $__internal_913d576d151c12c1a624a10cd6403a54500f42c844f255aa9aac7ad7bf6a9c55->leave($__internal_913d576d151c12c1a624a10cd6403a54500f42c844f255aa9aac7ad7bf6a9c55_prof);

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
        return "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 57,  292 => 54,  288 => 53,  285 => 52,  263 => 51,  238 => 46,  233 => 44,  229 => 43,  226 => 42,  204 => 41,  180 => 37,  177 => 36,  174 => 35,  171 => 34,  168 => 33,  165 => 32,  162 => 31,  159 => 30,  150 => 28,  145 => 27,  142 => 26,  139 => 25,  116 => 24,  105 => 50,  102 => 40,  99 => 23,  88 => 20,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  69 => 14,  65 => 13,  61 => 12,  58 => 11,  52 => 9,  46 => 7,  43 => 6,  41 => 5,  36 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set subject = metadata.name|replace({'_attribute': ''}) %}
{% for code, localeCodes in forms %}
    {% for localeCode, form in localeCodes %}
        <div class=\"attribute\" data-id=\"{{ code }}\">
            {% set id = form.vars.label|replace(' ', '_')|lower %}
            {% if 'type_checkbox' in form.vars.cache_key %}
                {{ _self.checkboxField(form, count, id, subject, metadata.applicationName) }}
            {% else %}
                {{ _self.textField(form, count, id, subject, metadata.applicationName) }}
            {% endif %}
            <input type=\"hidden\"
                   name=\"sylius_product[attributes][{{ count }}][attribute]\"
                   id=\"sylius_product_attributes_{{ count }}_attribute\"
                   value=\"{{ code }}\"/>
            <input type=\"hidden\"
                   name=\"sylius_product[attributes][{{ count }}][localeCode]\"
                   id=\"sylius_product_attributes_{{ count }}_localeCode\"
                   value=\"{{ localeCode }}\"/>
            {% set count = count + 1 %}
        </div>
    {% endfor %}
{% endfor %}

{% macro formField(item, count, id, prefix, subject, applicationName) %}
    {% if item.children|length > 0 %}
        {% set prefix = prefix~'_'~item.vars.name %}
        {% for child in item.children %}
            {{ _self.formField(child, count, id, prefix) }}
        {% endfor %}
    {% elseif item.vars.name != '_token' %}
        {% set namePrefix = prefix|replace({'_': ']['}) %}
        {% set dataName = applicationName~'_'~subject~'[attributes]['~count~namePrefix~']['~item.vars.name~']' %}
        {% if item.vars.multiple is defined and item.vars.multiple %}
            {% set dataName = dataName~'[]' %}
        {% endif %}

        {{ form_widget(item, {'id': id, 'attr': {'data-name': dataName }}) }}
    {% endif %}
{% endmacro %}

{% macro textField(form, count, id, subject, applicationName) %}
    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">{{ form.vars.label }}</div>
        {{ _self.formField(form, count, id, '', subject, applicationName) }}
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
        </button>
    </div>
{% endmacro %}

{% macro checkboxField(form, count, id, subject, applicationName) %}
    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        {{ _self.formField(form, count, id, '', subject, applicationName) }}
        <label>{{ form.vars.label }}</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
    </button>
{% endmacro %}
", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributeValues.html.twig");
    }
}
