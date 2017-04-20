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
        $__internal_b65c091ecc85efe3849a496e47800a48b7646fe5db13a1b90d98d215c93171e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65c091ecc85efe3849a496e47800a48b7646fe5db13a1b90d98d215c93171e7->enter($__internal_b65c091ecc85efe3849a496e47800a48b7646fe5db13a1b90d98d215c93171e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_fa4962d0b0107b4208692672c3e4225e828faeeff98b725dd77bf6a29acaa6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4962d0b0107b4208692672c3e4225e828faeeff98b725dd77bf6a29acaa6c7->enter($__internal_fa4962d0b0107b4208692672c3e4225e828faeeff98b725dd77bf6a29acaa6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_b65c091ecc85efe3849a496e47800a48b7646fe5db13a1b90d98d215c93171e7->leave($__internal_b65c091ecc85efe3849a496e47800a48b7646fe5db13a1b90d98d215c93171e7_prof);

        
        $__internal_fa4962d0b0107b4208692672c3e4225e828faeeff98b725dd77bf6a29acaa6c7->leave($__internal_fa4962d0b0107b4208692672c3e4225e828faeeff98b725dd77bf6a29acaa6c7_prof);

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
