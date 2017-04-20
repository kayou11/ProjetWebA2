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
        $__internal_1247c1ca8e9c928c9061f5be4f4ea91f0554189bc55b4f52d665d62ec3a9f9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1247c1ca8e9c928c9061f5be4f4ea91f0554189bc55b4f52d665d62ec3a9f9de->enter($__internal_1247c1ca8e9c928c9061f5be4f4ea91f0554189bc55b4f52d665d62ec3a9f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b178a107f0b72641028d25fc77d9779c0b24d7f102d13cf30293d374320e8996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b178a107f0b72641028d25fc77d9779c0b24d7f102d13cf30293d374320e8996->enter($__internal_b178a107f0b72641028d25fc77d9779c0b24d7f102d13cf30293d374320e8996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_1247c1ca8e9c928c9061f5be4f4ea91f0554189bc55b4f52d665d62ec3a9f9de->leave($__internal_1247c1ca8e9c928c9061f5be4f4ea91f0554189bc55b4f52d665d62ec3a9f9de_prof);

        
        $__internal_b178a107f0b72641028d25fc77d9779c0b24d7f102d13cf30293d374320e8996->leave($__internal_b178a107f0b72641028d25fc77d9779c0b24d7f102d13cf30293d374320e8996_prof);

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
