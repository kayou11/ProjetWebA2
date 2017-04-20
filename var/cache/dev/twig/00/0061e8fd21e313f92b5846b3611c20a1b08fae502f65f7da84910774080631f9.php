<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a0d2644f5e177d5c820d48df36b4f79a50bf3e0ecca441d788bdc9f324c571dc extends Twig_Template
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
        $__internal_8a941346e00f00f01faf1c997cfcd63723f1a2ab8c6adfd1fe9c437df21e7bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a941346e00f00f01faf1c997cfcd63723f1a2ab8c6adfd1fe9c437df21e7bd2->enter($__internal_8a941346e00f00f01faf1c997cfcd63723f1a2ab8c6adfd1fe9c437df21e7bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b948149f13c49fb87afb1f3ce2897d0fe3bb0ddc296a00519339688f0fe13a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b948149f13c49fb87afb1f3ce2897d0fe3bb0ddc296a00519339688f0fe13a60->enter($__internal_b948149f13c49fb87afb1f3ce2897d0fe3bb0ddc296a00519339688f0fe13a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_8a941346e00f00f01faf1c997cfcd63723f1a2ab8c6adfd1fe9c437df21e7bd2->leave($__internal_8a941346e00f00f01faf1c997cfcd63723f1a2ab8c6adfd1fe9c437df21e7bd2_prof);

        
        $__internal_b948149f13c49fb87afb1f3ce2897d0fe3bb0ddc296a00519339688f0fe13a60->leave($__internal_b948149f13c49fb87afb1f3ce2897d0fe3bb0ddc296a00519339688f0fe13a60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
