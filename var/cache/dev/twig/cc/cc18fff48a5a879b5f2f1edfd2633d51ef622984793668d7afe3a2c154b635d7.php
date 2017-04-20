<?php

/* CoreSphereConsoleBundle:Console:terminal.html.twig */
class __TwigTemplate_05142968bc1ca80f22f5389823dd8d45049de0ffc4c0ee59b3fca585fc110c65 extends Twig_Template
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
        $__internal_5fcd4f458107e817dc22ebdca88255dab07ab84e816e75f3bc41ff76221b6349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcd4f458107e817dc22ebdca88255dab07ab84e816e75f3bc41ff76221b6349->enter($__internal_5fcd4f458107e817dc22ebdca88255dab07ab84e816e75f3bc41ff76221b6349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        $__internal_a8d94805db654f724446e8d31fe683dbd6163c4db05ddfbbb8c159f3923400cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d94805db654f724446e8d31fe683dbd6163c4db05ddfbbb8c159f3923400cc->enter($__internal_a8d94805db654f724446e8d31fe683dbd6163c4db05ddfbbb8c159f3923400cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["working_dir"]) || array_key_exists("working_dir", $context) ? $context["working_dir"] : (function () { throw new Twig_Error_Runtime('Variable "working_dir" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["environment"]) || array_key_exists("environment", $context) ? $context["environment"] : (function () { throw new Twig_Error_Runtime('Variable "environment" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
        
        $__internal_5fcd4f458107e817dc22ebdca88255dab07ab84e816e75f3bc41ff76221b6349->leave($__internal_5fcd4f458107e817dc22ebdca88255dab07ab84e816e75f3bc41ff76221b6349_prof);

        
        $__internal_a8d94805db654f724446e8d31fe683dbd6163c4db05ddfbbb8c159f3923400cc->leave($__internal_a8d94805db654f724446e8d31fe683dbd6163c4db05ddfbbb8c159f3923400cc_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:terminal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ 'coresphere_console.headline.index'|trans }}</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>
        <span class=\"console_env_info\">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
", "CoreSphereConsoleBundle:Console:terminal.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/coresphere/console-bundle/Resources/views/Console/terminal.html.twig");
    }
}
