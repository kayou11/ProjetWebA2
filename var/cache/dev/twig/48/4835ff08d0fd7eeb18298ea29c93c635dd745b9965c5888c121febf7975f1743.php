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
        $__internal_da4cd8a52011c174be1254fa87c22bacae4ba64def8e6bb5957e819442478b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4cd8a52011c174be1254fa87c22bacae4ba64def8e6bb5957e819442478b29->enter($__internal_da4cd8a52011c174be1254fa87c22bacae4ba64def8e6bb5957e819442478b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d74267ea003a01a82a3472b6ac9f78752488ab470e570997349645f7ffaf24c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74267ea003a01a82a3472b6ac9f78752488ab470e570997349645f7ffaf24c7->enter($__internal_d74267ea003a01a82a3472b6ac9f78752488ab470e570997349645f7ffaf24c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_da4cd8a52011c174be1254fa87c22bacae4ba64def8e6bb5957e819442478b29->leave($__internal_da4cd8a52011c174be1254fa87c22bacae4ba64def8e6bb5957e819442478b29_prof);

        
        $__internal_d74267ea003a01a82a3472b6ac9f78752488ab470e570997349645f7ffaf24c7->leave($__internal_d74267ea003a01a82a3472b6ac9f78752488ab470e570997349645f7ffaf24c7_prof);

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
