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
        $__internal_621a7095585df7954ac08a73e0bb1fffa9ae2830c5ef88f72b13422c1207170a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621a7095585df7954ac08a73e0bb1fffa9ae2830c5ef88f72b13422c1207170a->enter($__internal_621a7095585df7954ac08a73e0bb1fffa9ae2830c5ef88f72b13422c1207170a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2129dccc6a9be5c0f0ea7e48ac56eda4084faea1224941e0d7268d521d5a3645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2129dccc6a9be5c0f0ea7e48ac56eda4084faea1224941e0d7268d521d5a3645->enter($__internal_2129dccc6a9be5c0f0ea7e48ac56eda4084faea1224941e0d7268d521d5a3645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_621a7095585df7954ac08a73e0bb1fffa9ae2830c5ef88f72b13422c1207170a->leave($__internal_621a7095585df7954ac08a73e0bb1fffa9ae2830c5ef88f72b13422c1207170a_prof);

        
        $__internal_2129dccc6a9be5c0f0ea7e48ac56eda4084faea1224941e0d7268d521d5a3645->leave($__internal_2129dccc6a9be5c0f0ea7e48ac56eda4084faea1224941e0d7268d521d5a3645_prof);

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
