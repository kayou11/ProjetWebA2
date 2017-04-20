<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6cbea2afacffdd00304a3bec5331d24e4d1cd98a631284dddac078028e5478b extends Twig_Template
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
        $__internal_6839b54d3299b2d35787afdb5802bd03e327779a6d332ca615d66120e52c3eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6839b54d3299b2d35787afdb5802bd03e327779a6d332ca615d66120e52c3eca->enter($__internal_6839b54d3299b2d35787afdb5802bd03e327779a6d332ca615d66120e52c3eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_746ec7366c5179cea44d585eb112a9ec117f9e4749a149f86f12a7bfa7defccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746ec7366c5179cea44d585eb112a9ec117f9e4749a149f86f12a7bfa7defccd->enter($__internal_746ec7366c5179cea44d585eb112a9ec117f9e4749a149f86f12a7bfa7defccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_6839b54d3299b2d35787afdb5802bd03e327779a6d332ca615d66120e52c3eca->leave($__internal_6839b54d3299b2d35787afdb5802bd03e327779a6d332ca615d66120e52c3eca_prof);

        
        $__internal_746ec7366c5179cea44d585eb112a9ec117f9e4749a149f86f12a7bfa7defccd->leave($__internal_746ec7366c5179cea44d585eb112a9ec117f9e4749a149f86f12a7bfa7defccd_prof);

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
