<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d89a44cd41959c4e6909152eaf2e3dfff1473c6a10401e0303351e085b5c084f extends Twig_Template
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
        $__internal_8e7bea35311db1047c46899b1db4f1aefea57d86a7c556aa53259de20a44b339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7bea35311db1047c46899b1db4f1aefea57d86a7c556aa53259de20a44b339->enter($__internal_8e7bea35311db1047c46899b1db4f1aefea57d86a7c556aa53259de20a44b339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_27d515fc7b3a0663bc8b8a8ff89dc5a751662967d56fdb3cde5694e9af682159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d515fc7b3a0663bc8b8a8ff89dc5a751662967d56fdb3cde5694e9af682159->enter($__internal_27d515fc7b3a0663bc8b8a8ff89dc5a751662967d56fdb3cde5694e9af682159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_8e7bea35311db1047c46899b1db4f1aefea57d86a7c556aa53259de20a44b339->leave($__internal_8e7bea35311db1047c46899b1db4f1aefea57d86a7c556aa53259de20a44b339_prof);

        
        $__internal_27d515fc7b3a0663bc8b8a8ff89dc5a751662967d56fdb3cde5694e9af682159->leave($__internal_27d515fc7b3a0663bc8b8a8ff89dc5a751662967d56fdb3cde5694e9af682159_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
