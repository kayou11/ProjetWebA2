<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_fdf5f9d6f7cd2ab5fdfe3faebee26b3b611fffb29ffc3d546e14a1bc389ddb95 extends Twig_Template
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
        $__internal_a3eccc616453c5b67eef366907fee442a775395f1c192295f889231c7e9126b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3eccc616453c5b67eef366907fee442a775395f1c192295f889231c7e9126b9->enter($__internal_a3eccc616453c5b67eef366907fee442a775395f1c192295f889231c7e9126b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_8e7390620d3e675d0010303439d1721a64aa345595a6bfcf2baf56d8db259e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7390620d3e675d0010303439d1721a64aa345595a6bfcf2baf56d8db259e62->enter($__internal_8e7390620d3e675d0010303439d1721a64aa345595a6bfcf2baf56d8db259e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a3eccc616453c5b67eef366907fee442a775395f1c192295f889231c7e9126b9->leave($__internal_a3eccc616453c5b67eef366907fee442a775395f1c192295f889231c7e9126b9_prof);

        
        $__internal_8e7390620d3e675d0010303439d1721a64aa345595a6bfcf2baf56d8db259e62->leave($__internal_8e7390620d3e675d0010303439d1721a64aa345595a6bfcf2baf56d8db259e62_prof);

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
