<?php

/* SyliusUiBundle:Macro:headers.html.twig */
class __TwigTemplate_b9125d5d9157a53f8464e4b6011c55cc36706291c20725966cf8762df5728ce8 extends Twig_Template
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
        $__internal_b9c1f978b82e6ffe90202806987444d1868f8c5f30693cdf9a124f676a01c365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c1f978b82e6ffe90202806987444d1868f8c5f30693cdf9a124f676a01c365->enter($__internal_b9c1f978b82e6ffe90202806987444d1868f8c5f30693cdf9a124f676a01c365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:headers.html.twig"));

        $__internal_8e5941ab96ee9f46ea1dfba053d0f3aebbcedb180d4b2b4c7e4b12cc30f05bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5941ab96ee9f46ea1dfba053d0f3aebbcedb180d4b2b4c7e4b12cc30f05bda->enter($__internal_8e5941ab96ee9f46ea1dfba053d0f3aebbcedb180d4b2b4c7e4b12cc30f05bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:headers.html.twig"));

        
        $__internal_b9c1f978b82e6ffe90202806987444d1868f8c5f30693cdf9a124f676a01c365->leave($__internal_b9c1f978b82e6ffe90202806987444d1868f8c5f30693cdf9a124f676a01c365_prof);

        
        $__internal_8e5941ab96ee9f46ea1dfba053d0f3aebbcedb180d4b2b4c7e4b12cc30f05bda->leave($__internal_8e5941ab96ee9f46ea1dfba053d0f3aebbcedb180d4b2b4c7e4b12cc30f05bda_prof);

    }

    // line 1
    public function getdefault($__header__ = null, $__icon__ = null, $__subheader__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "header" => $__header__,
            "icon" => $__icon__,
            "subheader" => $__subheader__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f11390576c537479eddd868611147a53517017552db55084a3aa64da8e1fd004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f11390576c537479eddd868611147a53517017552db55084a3aa64da8e1fd004->enter($__internal_f11390576c537479eddd868611147a53517017552db55084a3aa64da8e1fd004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_026f5b19544cc3a661a08ca9f7a92dea5f66eee440bb928c9b7b71681648c00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_026f5b19544cc3a661a08ca9f7a92dea5f66eee440bb928c9b7b71681648c00b->enter($__internal_026f5b19544cc3a661a08ca9f7a92dea5f66eee440bb928c9b7b71681648c00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "<h1 class=\"ui header\">
    ";
            // line 3
            if ( !twig_test_empty(($context["icon"] ?? $this->getContext($context, "icon")))) {
                // line 4
                echo "    <i class=\"circular ";
                echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
                echo " icon\"></i>
    ";
            }
            // line 6
            echo "    <div class=\"content\">
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["header"] ?? $this->getContext($context, "header")), "html", null, true);
            echo "
        ";
            // line 8
            if ( !twig_test_empty(($context["subheader"] ?? $this->getContext($context, "subheader")))) {
                // line 9
                echo "        <div class=\"sub header\">";
                echo twig_escape_filter($this->env, ($context["subheader"] ?? $this->getContext($context, "subheader")), "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    </div>
</h1>
";
            
            $__internal_026f5b19544cc3a661a08ca9f7a92dea5f66eee440bb928c9b7b71681648c00b->leave($__internal_026f5b19544cc3a661a08ca9f7a92dea5f66eee440bb928c9b7b71681648c00b_prof);

            
            $__internal_f11390576c537479eddd868611147a53517017552db55084a3aa64da8e1fd004->leave($__internal_f11390576c537479eddd868611147a53517017552db55084a3aa64da8e1fd004_prof);

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
        return "SyliusUiBundle:Macro:headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  73 => 9,  71 => 8,  67 => 7,  64 => 6,  58 => 4,  56 => 3,  53 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(header, icon, subheader) %}
<h1 class=\"ui header\">
    {% if icon is not empty %}
    <i class=\"circular {{ icon }} icon\"></i>
    {% endif %}
    <div class=\"content\">
        {{ header }}
        {% if subheader is not empty %}
        <div class=\"sub header\">{{ subheader }}</div>
        {% endif %}
    </div>
</h1>
{% endmacro %}
", "SyliusUiBundle:Macro:headers.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/headers.html.twig");
    }
}
