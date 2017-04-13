<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d63aa586394d0e6f09d36dc966844367a36a365d254ee1745332c35779d550b3 extends Twig_Template
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
        $__internal_d03cd97df875e3a403e93f842d50314dd299e9a3d8c59f1fbaabdfa817bb9311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03cd97df875e3a403e93f842d50314dd299e9a3d8c59f1fbaabdfa817bb9311->enter($__internal_d03cd97df875e3a403e93f842d50314dd299e9a3d8c59f1fbaabdfa817bb9311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c75dbfaa71212b8801be92daa6b0f81c9073433913b982ac9854dbba3657f5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75dbfaa71212b8801be92daa6b0f81c9073433913b982ac9854dbba3657f5a1->enter($__internal_c75dbfaa71212b8801be92daa6b0f81c9073433913b982ac9854dbba3657f5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_d03cd97df875e3a403e93f842d50314dd299e9a3d8c59f1fbaabdfa817bb9311->leave($__internal_d03cd97df875e3a403e93f842d50314dd299e9a3d8c59f1fbaabdfa817bb9311_prof);

        
        $__internal_c75dbfaa71212b8801be92daa6b0f81c9073433913b982ac9854dbba3657f5a1->leave($__internal_c75dbfaa71212b8801be92daa6b0f81c9073433913b982ac9854dbba3657f5a1_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
