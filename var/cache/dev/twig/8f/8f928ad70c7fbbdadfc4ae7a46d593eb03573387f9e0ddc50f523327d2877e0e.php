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
        $__internal_ec665df3f93933a0ea5e2c8562ca5616b0392ba9f99fdfc61a847e57e7c9440a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec665df3f93933a0ea5e2c8562ca5616b0392ba9f99fdfc61a847e57e7c9440a->enter($__internal_ec665df3f93933a0ea5e2c8562ca5616b0392ba9f99fdfc61a847e57e7c9440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_48985fd15a425dc3c5432ae19b5d3b5eaee579426d73f5a222f52b7d8385ec91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48985fd15a425dc3c5432ae19b5d3b5eaee579426d73f5a222f52b7d8385ec91->enter($__internal_48985fd15a425dc3c5432ae19b5d3b5eaee579426d73f5a222f52b7d8385ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ec665df3f93933a0ea5e2c8562ca5616b0392ba9f99fdfc61a847e57e7c9440a->leave($__internal_ec665df3f93933a0ea5e2c8562ca5616b0392ba9f99fdfc61a847e57e7c9440a_prof);

        
        $__internal_48985fd15a425dc3c5432ae19b5d3b5eaee579426d73f5a222f52b7d8385ec91->leave($__internal_48985fd15a425dc3c5432ae19b5d3b5eaee579426d73f5a222f52b7d8385ec91_prof);

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
