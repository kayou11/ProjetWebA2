<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c5fa664f2551f041592c7f340fcb42a9a4e03e43527975a727d435af3fc54ccb extends Twig_Template
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
        $__internal_a4d51bacf7826e1e15f327615c3aaff3d6bd7394b9b968d6b7b5da651adb22dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d51bacf7826e1e15f327615c3aaff3d6bd7394b9b968d6b7b5da651adb22dc->enter($__internal_a4d51bacf7826e1e15f327615c3aaff3d6bd7394b9b968d6b7b5da651adb22dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6da8ea50322c34b9a3f2450087336e0605ec4731bac3488735ca8a1383b7f470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da8ea50322c34b9a3f2450087336e0605ec4731bac3488735ca8a1383b7f470->enter($__internal_6da8ea50322c34b9a3f2450087336e0605ec4731bac3488735ca8a1383b7f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_a4d51bacf7826e1e15f327615c3aaff3d6bd7394b9b968d6b7b5da651adb22dc->leave($__internal_a4d51bacf7826e1e15f327615c3aaff3d6bd7394b9b968d6b7b5da651adb22dc_prof);

        
        $__internal_6da8ea50322c34b9a3f2450087336e0605ec4731bac3488735ca8a1383b7f470->leave($__internal_6da8ea50322c34b9a3f2450087336e0605ec4731bac3488735ca8a1383b7f470_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
