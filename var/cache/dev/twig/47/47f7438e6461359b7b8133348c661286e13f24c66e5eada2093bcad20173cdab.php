<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f61bc259753d57728d5233f67c7c069c4b6a164c76bc944432063d68783ae361 extends Twig_Template
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
        $__internal_ae5dec902d84a6ba4bfd63b7009b41301a06f46ae6fe06e89259cfbfbdd03c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5dec902d84a6ba4bfd63b7009b41301a06f46ae6fe06e89259cfbfbdd03c17->enter($__internal_ae5dec902d84a6ba4bfd63b7009b41301a06f46ae6fe06e89259cfbfbdd03c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bc5d4e79502af3c350fb4547f4e94ccee4cb9545e2ff5e157c7edcb968e4ca55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5d4e79502af3c350fb4547f4e94ccee4cb9545e2ff5e157c7edcb968e4ca55->enter($__internal_bc5d4e79502af3c350fb4547f4e94ccee4cb9545e2ff5e157c7edcb968e4ca55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_ae5dec902d84a6ba4bfd63b7009b41301a06f46ae6fe06e89259cfbfbdd03c17->leave($__internal_ae5dec902d84a6ba4bfd63b7009b41301a06f46ae6fe06e89259cfbfbdd03c17_prof);

        
        $__internal_bc5d4e79502af3c350fb4547f4e94ccee4cb9545e2ff5e157c7edcb968e4ca55->leave($__internal_bc5d4e79502af3c350fb4547f4e94ccee4cb9545e2ff5e157c7edcb968e4ca55_prof);

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
