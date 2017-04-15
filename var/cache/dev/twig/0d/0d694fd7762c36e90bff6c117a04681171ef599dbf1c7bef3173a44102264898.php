<?php

/* @SyliusShop/Menu/_localeSwitch.html.twig */
class __TwigTemplate_4dc7ed3602f158a75634aa10bdc79880357858860c33d9c11fe6d040ed37e8e1 extends Twig_Template
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
        $__internal_c58abbaf546dfeffb25c1070916c27d6776d0b1bba411952adb6483b69540f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58abbaf546dfeffb25c1070916c27d6776d0b1bba411952adb6483b69540f3f->enter($__internal_c58abbaf546dfeffb25c1070916c27d6776d0b1bba411952adb6483b69540f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_localeSwitch.html.twig"));

        $__internal_c9e6b3832d237b2068709c8e3fe5dcf95bc814693bad9870ad0a15b37e36cb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e6b3832d237b2068709c8e3fe5dcf95bc814693bad9870ad0a15b37e36cb72->enter($__internal_c9e6b3832d237b2068709c8e3fe5dcf95bc814693bad9870ad0a15b37e36cb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_localeSwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["locales"] ?? $this->getContext($context, "locales"))) > 1)) {
            // line 2
            echo "    <div class=\"ui pointing dropdown link item\" id=\"sylius-locale-selector\">
        <span class=\"text sylius-active-locale\">";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array(($context["active"] ?? $this->getContext($context, "active")))), "html", null, true);
            echo "</span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? $this->getContext($context, "locales")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 7
                echo "                ";
                if ( !($context["code"] === ($context["active"] ?? $this->getContext($context, "active")))) {
                    // line 8
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_switch_locale", array("code" => $context["code"])), "html", null, true);
                    echo "\" class=\"item sylius-available-locale\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["code"])), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
";
        }
        
        $__internal_c58abbaf546dfeffb25c1070916c27d6776d0b1bba411952adb6483b69540f3f->leave($__internal_c58abbaf546dfeffb25c1070916c27d6776d0b1bba411952adb6483b69540f3f_prof);

        
        $__internal_c9e6b3832d237b2068709c8e3fe5dcf95bc814693bad9870ad0a15b37e36cb72->leave($__internal_c9e6b3832d237b2068709c8e3fe5dcf95bc814693bad9870ad0a15b37e36cb72_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Menu/_localeSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 12,  48 => 9,  43 => 8,  40 => 7,  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if locales|length > 1 %}
    <div class=\"ui pointing dropdown link item\" id=\"sylius-locale-selector\">
        <span class=\"text sylius-active-locale\">{{ active|sylius_locale_name }}</span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            {% for code in locales %}
                {% if code is not same as(active) %}
                    <a href=\"{{ path('sylius_shop_switch_locale', {'code': code}) }}\" class=\"item sylius-available-locale\">
                        {{ code|sylius_locale_name }}
                    </a>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}
", "@SyliusShop/Menu/_localeSwitch.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Menu/_localeSwitch.html.twig");
    }
}
