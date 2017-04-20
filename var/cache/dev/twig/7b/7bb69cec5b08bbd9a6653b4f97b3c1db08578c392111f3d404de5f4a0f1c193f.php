<?php

/* WebProfilerBundle:Profiler:header.html.twig */
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
        $__internal_bf6040ad82139862308b63cc7483e1b9892d9ff59364fd924b3b1c8f5f4f9959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6040ad82139862308b63cc7483e1b9892d9ff59364fd924b3b1c8f5f4f9959->enter($__internal_bf6040ad82139862308b63cc7483e1b9892d9ff59364fd924b3b1c8f5f4f9959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ff4dc990e5fefe10f3a1a01677bf2f939770f48652c00889e2b74ea03a2c0f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4dc990e5fefe10f3a1a01677bf2f939770f48652c00889e2b74ea03a2c0f4e->enter($__internal_ff4dc990e5fefe10f3a1a01677bf2f939770f48652c00889e2b74ea03a2c0f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_bf6040ad82139862308b63cc7483e1b9892d9ff59364fd924b3b1c8f5f4f9959->leave($__internal_bf6040ad82139862308b63cc7483e1b9892d9ff59364fd924b3b1c8f5f4f9959_prof);

        
        $__internal_ff4dc990e5fefe10f3a1a01677bf2f939770f48652c00889e2b74ea03a2c0f4e->leave($__internal_ff4dc990e5fefe10f3a1a01677bf2f939770f48652c00889e2b74ea03a2c0f4e_prof);

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
