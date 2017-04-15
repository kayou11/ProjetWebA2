<?php

/* SyliusUiBundle:Macro:flags.html.twig */
class __TwigTemplate_ae9728f1abbf70c56b9764ec1d486978d2ca535a1349e882987b6c294e203712 extends Twig_Template
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
        $__internal_67ea39376b8753bebb8ffcb3ef7a91d30f5d658f5a5305d0e5e090242b4dc5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ea39376b8753bebb8ffcb3ef7a91d30f5d658f5a5305d0e5e090242b4dc5cf->enter($__internal_67ea39376b8753bebb8ffcb3ef7a91d30f5d658f5a5305d0e5e090242b4dc5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:flags.html.twig"));

        $__internal_53a54b0c43551af97e87529cc9077405fcafa150762ef38cecde0ba7b88c83fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a54b0c43551af97e87529cc9077405fcafa150762ef38cecde0ba7b88c83fb->enter($__internal_53a54b0c43551af97e87529cc9077405fcafa150762ef38cecde0ba7b88c83fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:flags.html.twig"));

        // line 4
        echo "
";
        // line 9
        echo "
";
        
        $__internal_67ea39376b8753bebb8ffcb3ef7a91d30f5d658f5a5305d0e5e090242b4dc5cf->leave($__internal_67ea39376b8753bebb8ffcb3ef7a91d30f5d658f5a5305d0e5e090242b4dc5cf_prof);

        
        $__internal_53a54b0c43551af97e87529cc9077405fcafa150762ef38cecde0ba7b88c83fb->leave($__internal_53a54b0c43551af97e87529cc9077405fcafa150762ef38cecde0ba7b88c83fb_prof);

    }

    // line 1
    public function getfromCountryCode($__country_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "country_code" => $__country_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_37edbec456588b06e4c306b1fceb668c6b23e7110af17120cdbfe882ac954648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_37edbec456588b06e4c306b1fceb668c6b23e7110af17120cdbfe882ac954648->enter($__internal_37edbec456588b06e4c306b1fceb668c6b23e7110af17120cdbfe882ac954648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromCountryCode"));

            $__internal_12306cca0079a7900edf1ec272458b705ee4db3b74451fc2863f748858fd9188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_12306cca0079a7900edf1ec272458b705ee4db3b74451fc2863f748858fd9188->enter($__internal_12306cca0079a7900edf1ec272458b705ee4db3b74451fc2863f748858fd9188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromCountryCode"));

            // line 2
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["country_code"] ?? $this->getContext($context, "country_code"))), "html", null, true);
            echo " flag\"></i>
";
            
            $__internal_12306cca0079a7900edf1ec272458b705ee4db3b74451fc2863f748858fd9188->leave($__internal_12306cca0079a7900edf1ec272458b705ee4db3b74451fc2863f748858fd9188_prof);

            
            $__internal_37edbec456588b06e4c306b1fceb668c6b23e7110af17120cdbfe882ac954648->leave($__internal_37edbec456588b06e4c306b1fceb668c6b23e7110af17120cdbfe882ac954648_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getfromLocaleCode($__locale_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "locale_code" => $__locale_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aa5cd3fbd51ecdc8208324a978a32d591df55083c152c1673740749f5717cd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_aa5cd3fbd51ecdc8208324a978a32d591df55083c152c1673740749f5717cd74->enter($__internal_aa5cd3fbd51ecdc8208324a978a32d591df55083c152c1673740749f5717cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromLocaleCode"));

            $__internal_c43726934f2a2ac52432f8a0b4e500012d89b87bd29233f303845080d70158d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c43726934f2a2ac52432f8a0b4e500012d89b87bd29233f303845080d70158d4->enter($__internal_c43726934f2a2ac52432f8a0b4e500012d89b87bd29233f303845080d70158d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromLocaleCode"));

            // line 6
            echo "    ";
            $context["flags"] = $this;
            // line 7
            echo "    ";
            echo $context["flags"]->getfromCountryCode(twig_slice($this->env, ($context["locale_code"] ?? $this->getContext($context, "locale_code")), 3, 2));
            echo "
";
            
            $__internal_c43726934f2a2ac52432f8a0b4e500012d89b87bd29233f303845080d70158d4->leave($__internal_c43726934f2a2ac52432f8a0b4e500012d89b87bd29233f303845080d70158d4_prof);

            
            $__internal_aa5cd3fbd51ecdc8208324a978a32d591df55083c152c1673740749f5717cd74->leave($__internal_aa5cd3fbd51ecdc8208324a978a32d591df55083c152c1673740749f5717cd74_prof);

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
        return "SyliusUiBundle:Macro:flags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 7,  99 => 6,  81 => 5,  57 => 2,  39 => 1,  28 => 9,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro fromCountryCode(country_code) %}
    <i class=\"{{ country_code|lower }} flag\"></i>
{% endmacro %}

{% macro fromLocaleCode(locale_code) %}
    {% import _self as flags %}
    {{ flags.fromCountryCode(locale_code|slice(3, 2)) }}
{% endmacro %}

", "SyliusUiBundle:Macro:flags.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/flags.html.twig");
    }
}
