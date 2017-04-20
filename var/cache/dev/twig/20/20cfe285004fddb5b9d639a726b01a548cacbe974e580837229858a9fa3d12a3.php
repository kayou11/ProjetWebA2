<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_670dfc5ef48f7077cc0133c2c9fe9962d9464ead649e98b5a5307cc8a39a86c3 extends Twig_Template
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
        $__internal_ca6b7e38a954ed983ffb6a2e6b6264ca43e01adaf0029f4ca0a8e665fa1563a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6b7e38a954ed983ffb6a2e6b6264ca43e01adaf0029f4ca0a8e665fa1563a0->enter($__internal_ca6b7e38a954ed983ffb6a2e6b6264ca43e01adaf0029f4ca0a8e665fa1563a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9d0bb65532fea2857125c129c1e639e4864b1a6d5d4b8fcdbce9cf0cde60e3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0bb65532fea2857125c129c1e639e4864b1a6d5d4b8fcdbce9cf0cde60e3fd->enter($__internal_9d0bb65532fea2857125c129c1e639e4864b1a6d5d4b8fcdbce9cf0cde60e3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_ca6b7e38a954ed983ffb6a2e6b6264ca43e01adaf0029f4ca0a8e665fa1563a0->leave($__internal_ca6b7e38a954ed983ffb6a2e6b6264ca43e01adaf0029f4ca0a8e665fa1563a0_prof);

        
        $__internal_9d0bb65532fea2857125c129c1e639e4864b1a6d5d4b8fcdbce9cf0cde60e3fd->leave($__internal_9d0bb65532fea2857125c129c1e639e4864b1a6d5d4b8fcdbce9cf0cde60e3fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
