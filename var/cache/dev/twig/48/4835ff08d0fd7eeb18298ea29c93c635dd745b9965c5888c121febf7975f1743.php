<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_59fb802d58d5cf954be0037b540380460a0fb5a9d9fc2b3af4728c8d576b1118 extends Twig_Template
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
        $__internal_6ea8608ed4a1492cebefd212ee494f28352442c9ead218e41e49407fd483cd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea8608ed4a1492cebefd212ee494f28352442c9ead218e41e49407fd483cd5a->enter($__internal_6ea8608ed4a1492cebefd212ee494f28352442c9ead218e41e49407fd483cd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c22d6404fda9a1eb47a1b4dfd2ffbb8a6ff56d176ee217f188476c9cad5a65ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22d6404fda9a1eb47a1b4dfd2ffbb8a6ff56d176ee217f188476c9cad5a65ef->enter($__internal_c22d6404fda9a1eb47a1b4dfd2ffbb8a6ff56d176ee217f188476c9cad5a65ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_6ea8608ed4a1492cebefd212ee494f28352442c9ead218e41e49407fd483cd5a->leave($__internal_6ea8608ed4a1492cebefd212ee494f28352442c9ead218e41e49407fd483cd5a_prof);

        
        $__internal_c22d6404fda9a1eb47a1b4dfd2ffbb8a6ff56d176ee217f188476c9cad5a65ef->leave($__internal_c22d6404fda9a1eb47a1b4dfd2ffbb8a6ff56d176ee217f188476c9cad5a65ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
