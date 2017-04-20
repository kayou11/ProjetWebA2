<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f8e83aee46fdc214445f489bc6994b025e05fa5ed2e7f74700390ebaa554be0d extends Twig_Template
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
        $__internal_c903e83ba505361fa395b186343c949d199cd9ea37d0243f8ab41b78e214a36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c903e83ba505361fa395b186343c949d199cd9ea37d0243f8ab41b78e214a36f->enter($__internal_c903e83ba505361fa395b186343c949d199cd9ea37d0243f8ab41b78e214a36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5f9a684fe53a3d18f0f03b2cc2d94a0a59a8fd5e93612a0e97e23097d976adbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9a684fe53a3d18f0f03b2cc2d94a0a59a8fd5e93612a0e97e23097d976adbd->enter($__internal_5f9a684fe53a3d18f0f03b2cc2d94a0a59a8fd5e93612a0e97e23097d976adbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_c903e83ba505361fa395b186343c949d199cd9ea37d0243f8ab41b78e214a36f->leave($__internal_c903e83ba505361fa395b186343c949d199cd9ea37d0243f8ab41b78e214a36f_prof);

        
        $__internal_5f9a684fe53a3d18f0f03b2cc2d94a0a59a8fd5e93612a0e97e23097d976adbd->leave($__internal_5f9a684fe53a3d18f0f03b2cc2d94a0a59a8fd5e93612a0e97e23097d976adbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
