<?php

/* SyliusAdminBundle:PaymentMethod:_form.html.twig */
class __TwigTemplate_435a3f1524c2c76f97470c7a31c104ca8b9eb8772a14cf5a788c422d1bdb4df8 extends Twig_Template
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
        $__internal_cf4a90205901274839bb2c35c938c935cf7b37ae1d935213ee65c963e5b40942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4a90205901274839bb2c35c938c935cf7b37ae1d935213ee65c963e5b40942->enter($__internal_cf4a90205901274839bb2c35c938c935cf7b37ae1d935213ee65c963e5b40942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod:_form.html.twig"));

        $__internal_6df929c2c0d104e84cdd0ab70315319606bc4bd719dea93f934e6bd7a078594e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df929c2c0d104e84cdd0ab70315319606bc4bd719dea93f934e6bd7a078594e->enter($__internal_6df929c2c0d104e84cdd0ab70315319606bc4bd719dea93f934e6bd7a078594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod:_form.html.twig"));

        // line 1
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:PaymentMethod:_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details"), "html", null, true);
        echo "</h4>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"two fields\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "position", array()), 'row');
        echo "
    </div>
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'row');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "channels", array()), 'row');
        echo "
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.gateway_configuration"), "html", null, true);
        echo "</h4>
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gatewayConfig", array()), "factoryName", array()), 'row');
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "gatewayConfig", array(), "any", false, true), "config", array(), "any", true, true)) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gatewayConfig", array()), "config", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 22
                echo "            ";
                if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                    echo "<div class=\"two fields\">";
                }
                // line 23
                echo "            ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
            ";
                // line 24
                if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                    echo "</div>";
                }
                // line 25
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
        // line 27
        echo "</div>

<div class=\"ui styled fluid accordion\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()));
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
        foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
            // line 31
            echo "        <div class=\"title";
            if ((0 == $this->getAttribute($context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 33
            echo $context["flags"]->getfromLocaleCode($context["locale"]);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
            echo "
        </div>
        <div class=\"content";
            // line 35
            if ((0 == $this->getAttribute($context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\">
            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["translationForm"], "name", array()), 'row');
            echo "
            ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["translationForm"], "description", array()), 'row');
            echo "
            <div class=\"ui compact message\">
                <p>
                    <i class=\"icon info circle\"></i> ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.the_instructions_below_will_be_displayed_to_the_customer"), "html", null, true);
            echo ".
                </p>
            </div>
            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["translationForm"], "instructions", array()), 'row');
            echo "
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
";
        
        $__internal_cf4a90205901274839bb2c35c938c935cf7b37ae1d935213ee65c963e5b40942->leave($__internal_cf4a90205901274839bb2c35c938c935cf7b37ae1d935213ee65c963e5b40942_prof);

        
        $__internal_6df929c2c0d104e84cdd0ab70315319606bc4bd719dea93f934e6bd7a078594e->leave($__internal_6df929c2c0d104e84cdd0ab70315319606bc4bd719dea93f934e6bd7a078594e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PaymentMethod:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 46,  184 => 43,  178 => 40,  172 => 37,  168 => 36,  162 => 35,  155 => 33,  147 => 31,  130 => 30,  125 => 27,  122 => 26,  108 => 25,  104 => 24,  99 => 23,  94 => 22,  76 => 21,  74 => 20,  70 => 19,  66 => 18,  59 => 14,  55 => 13,  50 => 11,  46 => 10,  40 => 7,  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

{{ form_errors(form) }}

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h4>
    {{ form_errors(form) }}

    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.position) }}
    </div>
    {{ form_row(form.enabled) }}
    {{ form_row(form.channels) }}
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.gateway_configuration'|trans }}</h4>
    {{ form_row(form.gatewayConfig.factoryName) }}
    {% if form.gatewayConfig.config is defined %}
        {% for field in form.gatewayConfig.config %}
            {% if loop.index is odd %}<div class=\"two fields\">{% endif %}
            {{ form_row(field) }}
            {% if loop.index is even %}</div>{% endif %}
        {% endfor %}
    {% endif %}
</div>

<div class=\"ui styled fluid accordion\">
    {% for locale, translationForm in form.translations %}
        <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
            <i class=\"dropdown icon\"></i>
            {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
        </div>
        <div class=\"content{% if 0 == loop.index0 %} active{% endif %}\">
            {{ form_row(translationForm.name) }}
            {{ form_row(translationForm.description) }}
            <div class=\"ui compact message\">
                <p>
                    <i class=\"icon info circle\"></i> {{ 'sylius.ui.the_instructions_below_will_be_displayed_to_the_customer'|trans }}.
                </p>
            </div>
            {{ form_row(translationForm.instructions) }}
        </div>
    {% endfor %}
</div>
", "SyliusAdminBundle:PaymentMethod:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PaymentMethod/_form.html.twig");
    }
}
