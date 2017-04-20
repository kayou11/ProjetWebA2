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
        $__internal_794152acb370bfc18948fef4477e8e0ea8165056ff5164c5de53d915a99eff6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794152acb370bfc18948fef4477e8e0ea8165056ff5164c5de53d915a99eff6e->enter($__internal_794152acb370bfc18948fef4477e8e0ea8165056ff5164c5de53d915a99eff6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d525ae790218d607c881612c2a90f42b49e129caa8134808ab49eb9a191c26ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d525ae790218d607c881612c2a90f42b49e129caa8134808ab49eb9a191c26ce->enter($__internal_d525ae790218d607c881612c2a90f42b49e129caa8134808ab49eb9a191c26ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_794152acb370bfc18948fef4477e8e0ea8165056ff5164c5de53d915a99eff6e->leave($__internal_794152acb370bfc18948fef4477e8e0ea8165056ff5164c5de53d915a99eff6e_prof);

        
        $__internal_d525ae790218d607c881612c2a90f42b49e129caa8134808ab49eb9a191c26ce->leave($__internal_d525ae790218d607c881612c2a90f42b49e129caa8134808ab49eb9a191c26ce_prof);

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
