<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fccd204e8d540791841b4a2b6a5398b283971800cd9f03e32918a32c79d36355 extends Twig_Template
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
        $__internal_f95727b2246cc591502b265056a1bc02f47b2c0fc53f7b2fe95a97af27843457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95727b2246cc591502b265056a1bc02f47b2c0fc53f7b2fe95a97af27843457->enter($__internal_f95727b2246cc591502b265056a1bc02f47b2c0fc53f7b2fe95a97af27843457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c7955a20ded9676c843cd33e0e8f5f75a53671a13452513a91b1c7ec04f228b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7955a20ded9676c843cd33e0e8f5f75a53671a13452513a91b1c7ec04f228b9->enter($__internal_c7955a20ded9676c843cd33e0e8f5f75a53671a13452513a91b1c7ec04f228b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f95727b2246cc591502b265056a1bc02f47b2c0fc53f7b2fe95a97af27843457->leave($__internal_f95727b2246cc591502b265056a1bc02f47b2c0fc53f7b2fe95a97af27843457_prof);

        
        $__internal_c7955a20ded9676c843cd33e0e8f5f75a53671a13452513a91b1c7ec04f228b9->leave($__internal_c7955a20ded9676c843cd33e0e8f5f75a53671a13452513a91b1c7ec04f228b9_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
