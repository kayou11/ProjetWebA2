<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0ac72769340d76edaeba319b4f9d6890ed919e6a4ea24e0876092345f8053c8d extends Twig_Template
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
        $__internal_e03fcd8f729b10a329b4ef1a10de45d03ad39738b862abf9d3a14542cbb97f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03fcd8f729b10a329b4ef1a10de45d03ad39738b862abf9d3a14542cbb97f4b->enter($__internal_e03fcd8f729b10a329b4ef1a10de45d03ad39738b862abf9d3a14542cbb97f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_92d0faaac33cae6865bd6bc6caa60d0cabfed1f7378824eac1f198cbd0b42d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d0faaac33cae6865bd6bc6caa60d0cabfed1f7378824eac1f198cbd0b42d7a->enter($__internal_92d0faaac33cae6865bd6bc6caa60d0cabfed1f7378824eac1f198cbd0b42d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e03fcd8f729b10a329b4ef1a10de45d03ad39738b862abf9d3a14542cbb97f4b->leave($__internal_e03fcd8f729b10a329b4ef1a10de45d03ad39738b862abf9d3a14542cbb97f4b_prof);

        
        $__internal_92d0faaac33cae6865bd6bc6caa60d0cabfed1f7378824eac1f198cbd0b42d7a->leave($__internal_92d0faaac33cae6865bd6bc6caa60d0cabfed1f7378824eac1f198cbd0b42d7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
