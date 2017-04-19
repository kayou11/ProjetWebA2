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
        $__internal_5b837c3b3e0c0f83c3c031a805d5efa882f159a2445e3d4748cca9974e844e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b837c3b3e0c0f83c3c031a805d5efa882f159a2445e3d4748cca9974e844e7d->enter($__internal_5b837c3b3e0c0f83c3c031a805d5efa882f159a2445e3d4748cca9974e844e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_94f7b484247b1d487bb6685811e6ff2fa9fb559bd75f528931ed2bb718c182a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f7b484247b1d487bb6685811e6ff2fa9fb559bd75f528931ed2bb718c182a8->enter($__internal_94f7b484247b1d487bb6685811e6ff2fa9fb559bd75f528931ed2bb718c182a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_5b837c3b3e0c0f83c3c031a805d5efa882f159a2445e3d4748cca9974e844e7d->leave($__internal_5b837c3b3e0c0f83c3c031a805d5efa882f159a2445e3d4748cca9974e844e7d_prof);

        
        $__internal_94f7b484247b1d487bb6685811e6ff2fa9fb559bd75f528931ed2bb718c182a8->leave($__internal_94f7b484247b1d487bb6685811e6ff2fa9fb559bd75f528931ed2bb718c182a8_prof);

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
