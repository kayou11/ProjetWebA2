<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f4757d910e1e9f43293184564b3a1a9e096b11c568a92450f62afd1c630f60e1 extends Twig_Template
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
        $__internal_2686e265287b302959b0897fbe5e56855b3a14e50d5e816e694d8d88d820b3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2686e265287b302959b0897fbe5e56855b3a14e50d5e816e694d8d88d820b3c6->enter($__internal_2686e265287b302959b0897fbe5e56855b3a14e50d5e816e694d8d88d820b3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_077a00a6deaf95bc2d8e2fa2d71d233566ced2bcb493de3ed06416acb6354722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077a00a6deaf95bc2d8e2fa2d71d233566ced2bcb493de3ed06416acb6354722->enter($__internal_077a00a6deaf95bc2d8e2fa2d71d233566ced2bcb493de3ed06416acb6354722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_2686e265287b302959b0897fbe5e56855b3a14e50d5e816e694d8d88d820b3c6->leave($__internal_2686e265287b302959b0897fbe5e56855b3a14e50d5e816e694d8d88d820b3c6_prof);

        
        $__internal_077a00a6deaf95bc2d8e2fa2d71d233566ced2bcb493de3ed06416acb6354722->leave($__internal_077a00a6deaf95bc2d8e2fa2d71d233566ced2bcb493de3ed06416acb6354722_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
