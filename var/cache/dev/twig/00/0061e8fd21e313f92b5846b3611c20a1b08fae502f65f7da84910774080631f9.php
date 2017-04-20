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
        $__internal_e6d2296f8b8594d2297b3be9163fdcf5a60b636dd53cf32d6576e46946a66c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d2296f8b8594d2297b3be9163fdcf5a60b636dd53cf32d6576e46946a66c39->enter($__internal_e6d2296f8b8594d2297b3be9163fdcf5a60b636dd53cf32d6576e46946a66c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_285d2339d7934a0598a2babbbb8a183e08b7f7e0dec30568d588599485ed3c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285d2339d7934a0598a2babbbb8a183e08b7f7e0dec30568d588599485ed3c90->enter($__internal_285d2339d7934a0598a2babbbb8a183e08b7f7e0dec30568d588599485ed3c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_e6d2296f8b8594d2297b3be9163fdcf5a60b636dd53cf32d6576e46946a66c39->leave($__internal_e6d2296f8b8594d2297b3be9163fdcf5a60b636dd53cf32d6576e46946a66c39_prof);

        
        $__internal_285d2339d7934a0598a2babbbb8a183e08b7f7e0dec30568d588599485ed3c90->leave($__internal_285d2339d7934a0598a2babbbb8a183e08b7f7e0dec30568d588599485ed3c90_prof);

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
