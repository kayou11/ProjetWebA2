<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2eb4144a5d04926b1eac3d3eeede07e8498c2d262906acc4cc85419e488704a4 extends Twig_Template
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
        $__internal_7d00736edb60b76e480138aea994090e57208bb5378a3129f4e8e5f6c1e336a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d00736edb60b76e480138aea994090e57208bb5378a3129f4e8e5f6c1e336a7->enter($__internal_7d00736edb60b76e480138aea994090e57208bb5378a3129f4e8e5f6c1e336a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ae525772a808de5188b984a156bcc0ef2c10fc8023b236a5cb07b1e67cee59ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae525772a808de5188b984a156bcc0ef2c10fc8023b236a5cb07b1e67cee59ab->enter($__internal_ae525772a808de5188b984a156bcc0ef2c10fc8023b236a5cb07b1e67cee59ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7d00736edb60b76e480138aea994090e57208bb5378a3129f4e8e5f6c1e336a7->leave($__internal_7d00736edb60b76e480138aea994090e57208bb5378a3129f4e8e5f6c1e336a7_prof);

        
        $__internal_ae525772a808de5188b984a156bcc0ef2c10fc8023b236a5cb07b1e67cee59ab->leave($__internal_ae525772a808de5188b984a156bcc0ef2c10fc8023b236a5cb07b1e67cee59ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
