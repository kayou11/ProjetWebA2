<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_06764d2c0423c6035fa16c5ea720562d9625b795be62953f20bdd3ba32ab02b9 extends Twig_Template
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
        $__internal_231661efcb50f1fc60a04a7b7a2e56095bdaee52037f5e6b552776f5059b5307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231661efcb50f1fc60a04a7b7a2e56095bdaee52037f5e6b552776f5059b5307->enter($__internal_231661efcb50f1fc60a04a7b7a2e56095bdaee52037f5e6b552776f5059b5307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6ac15f150862daff66d8d2219abba6d44c84dc63847fb116873ed0e9c67e8aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac15f150862daff66d8d2219abba6d44c84dc63847fb116873ed0e9c67e8aa2->enter($__internal_6ac15f150862daff66d8d2219abba6d44c84dc63847fb116873ed0e9c67e8aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_231661efcb50f1fc60a04a7b7a2e56095bdaee52037f5e6b552776f5059b5307->leave($__internal_231661efcb50f1fc60a04a7b7a2e56095bdaee52037f5e6b552776f5059b5307_prof);

        
        $__internal_6ac15f150862daff66d8d2219abba6d44c84dc63847fb116873ed0e9c67e8aa2->leave($__internal_6ac15f150862daff66d8d2219abba6d44c84dc63847fb116873ed0e9c67e8aa2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
