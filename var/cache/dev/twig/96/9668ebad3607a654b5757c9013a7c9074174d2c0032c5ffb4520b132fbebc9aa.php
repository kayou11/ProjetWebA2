<?php

/* @SyliusUi/_flashes.html.twig */
class __TwigTemplate_cbe28e4bacca153d67c058f3fa27ead4481291cdd7e9716dffe042fc31a251b1 extends Twig_Template
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
        $__internal_1330f1ee03ac6fcddce79be3ad4f4a61334d2fc8d9a3249732b815348e6204d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1330f1ee03ac6fcddce79be3ad4f4a61334d2fc8d9a3249732b815348e6204d0->enter($__internal_1330f1ee03ac6fcddce79be3ad4f4a61334d2fc8d9a3249732b815348e6204d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_flashes.html.twig"));

        $__internal_40b0056ff25714e0251dacacb095f21e36d3f56ba59b3477085882e4cc115a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b0056ff25714e0251dacacb095f21e36d3f56ba59b3477085882e4cc115a37->enter($__internal_40b0056ff25714e0251dacacb095f21e36d3f56ba59b3477085882e4cc115a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_flashes.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 3
                echo "        ";
                if (("error" == $context["type"])) {
                    // line 4
                    echo "            ";
                    $context["result"] = "negative";
                    // line 5
                    echo "            ";
                    $context["icon"] = "remove";
                    // line 6
                    echo "        ";
                }
                // line 7
                echo "        ";
                if (("info" == $context["type"])) {
                    // line 8
                    echo "            ";
                    $context["result"] = "info";
                    // line 9
                    echo "            ";
                    $context["icon"] = "info";
                    // line 10
                    echo "        ";
                }
                // line 11
                echo "        <div class=\"ui icon ";
                echo twig_escape_filter($this->env, ((array_key_exists("result", $context)) ? (_twig_default_filter(($context["result"] ?? $this->getContext($context, "result")), "positive")) : ("positive")), "html", null, true);
                echo " message\" id=\"sylius-flash-messages\">
            <i class=\"close icon\"></i>
            <i class=\"";
                // line 13
                echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "checkmark")) : ("checkmark")), "html", null, true);
                echo " icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    ";
                // line 16
                $context["header"] = ("sylius.ui." . $context["type"]);
                // line 17
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
                echo "
                </div>
                <p>
                ";
                // line 20
                if (twig_test_iterable($context["flash"])) {
                    // line 21
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["flash"], "message", array()), $this->getAttribute($context["flash"], "parameters", array()), "flashes"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 23
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flash"], array(), "flashes"), "html", null, true);
                    echo "
                ";
                }
                // line 25
                echo "                </p>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1330f1ee03ac6fcddce79be3ad4f4a61334d2fc8d9a3249732b815348e6204d0->leave($__internal_1330f1ee03ac6fcddce79be3ad4f4a61334d2fc8d9a3249732b815348e6204d0_prof);

        
        $__internal_40b0056ff25714e0251dacacb095f21e36d3f56ba59b3477085882e4cc115a37->leave($__internal_40b0056ff25714e0251dacacb095f21e36d3f56ba59b3477085882e4cc115a37_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/_flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  87 => 23,  81 => 21,  79 => 20,  72 => 17,  70 => 16,  64 => 13,  58 => 11,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  34 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for type in ['success', 'error', 'info', 'warning'] %}
    {% for flash in app.session.flashbag.get(type) %}
        {% if 'error' == type %}
            {% set result = 'negative' %}
            {% set icon = 'remove' %}
        {% endif %}
        {% if 'info' == type %}
            {% set result = 'info' %}
            {% set icon = 'info' %}
        {% endif %}
        <div class=\"ui icon {{ result|default('positive') }} message\" id=\"sylius-flash-messages\">
            <i class=\"close icon\"></i>
            <i class=\"{{ icon|default('checkmark') }} icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    {% set header = 'sylius.ui.'~type %}
                    {{ header|trans }}
                </div>
                <p>
                {% if flash is iterable %}
                    {{ flash.message|trans(flash.parameters, 'flashes') }}
                {% else %}
                    {{ flash|trans({}, 'flashes') }}
                {% endif %}
                </p>
            </div>
        </div>
    {% endfor %}
{% endfor %}
", "@SyliusUi/_flashes.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/_flashes.html.twig");
    }
}
