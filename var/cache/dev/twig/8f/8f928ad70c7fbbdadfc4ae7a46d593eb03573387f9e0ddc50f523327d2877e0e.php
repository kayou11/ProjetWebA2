<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ac7138e5ed5cbf390940bfef66e77248fa94b197932be7793f9875a35256fa10 extends Twig_Template
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
        $__internal_3831d090a4118df62bd1144fb7e622c3fdf53f4e41ee46a1fdfe19634fd3e942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3831d090a4118df62bd1144fb7e622c3fdf53f4e41ee46a1fdfe19634fd3e942->enter($__internal_3831d090a4118df62bd1144fb7e622c3fdf53f4e41ee46a1fdfe19634fd3e942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_75f2347d0eed0ee3f5e699822d008c73a9b63de314a7d858491a0a76cf26e2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f2347d0eed0ee3f5e699822d008c73a9b63de314a7d858491a0a76cf26e2f1->enter($__internal_75f2347d0eed0ee3f5e699822d008c73a9b63de314a7d858491a0a76cf26e2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_3831d090a4118df62bd1144fb7e622c3fdf53f4e41ee46a1fdfe19634fd3e942->leave($__internal_3831d090a4118df62bd1144fb7e622c3fdf53f4e41ee46a1fdfe19634fd3e942_prof);

        
        $__internal_75f2347d0eed0ee3f5e699822d008c73a9b63de314a7d858491a0a76cf26e2f1->leave($__internal_75f2347d0eed0ee3f5e699822d008c73a9b63de314a7d858491a0a76cf26e2f1_prof);

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
