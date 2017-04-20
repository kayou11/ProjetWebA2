<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7c37f62ab846655981f1116b1feb1f379ace898ea56b0535c20a3a1f45801965 extends Twig_Template
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
        $__internal_0e1b6345653dd3588856edcbed0e0dfc4e1c40f732cf974bfc49d66d97551fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1b6345653dd3588856edcbed0e0dfc4e1c40f732cf974bfc49d66d97551fdd->enter($__internal_0e1b6345653dd3588856edcbed0e0dfc4e1c40f732cf974bfc49d66d97551fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_0a30984d836a44770e5f4ddca5b7dc452213e71b115700b86c4a237ac41177c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a30984d836a44770e5f4ddca5b7dc452213e71b115700b86c4a237ac41177c8->enter($__internal_0a30984d836a44770e5f4ddca5b7dc452213e71b115700b86c4a237ac41177c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0e1b6345653dd3588856edcbed0e0dfc4e1c40f732cf974bfc49d66d97551fdd->leave($__internal_0e1b6345653dd3588856edcbed0e0dfc4e1c40f732cf974bfc49d66d97551fdd_prof);

        
        $__internal_0a30984d836a44770e5f4ddca5b7dc452213e71b115700b86c4a237ac41177c8->leave($__internal_0a30984d836a44770e5f4ddca5b7dc452213e71b115700b86c4a237ac41177c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
