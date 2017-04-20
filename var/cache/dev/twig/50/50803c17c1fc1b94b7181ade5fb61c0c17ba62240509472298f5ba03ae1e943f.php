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
        $__internal_817d01063ac22a1b85b936911c25832839b833c4eca413d17d17cec8bd00a3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817d01063ac22a1b85b936911c25832839b833c4eca413d17d17cec8bd00a3b3->enter($__internal_817d01063ac22a1b85b936911c25832839b833c4eca413d17d17cec8bd00a3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bd99a41010b1e5f3cb69dad34bcb23dd97b1b28c8b814b69c7af3324e9440883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd99a41010b1e5f3cb69dad34bcb23dd97b1b28c8b814b69c7af3324e9440883->enter($__internal_bd99a41010b1e5f3cb69dad34bcb23dd97b1b28c8b814b69c7af3324e9440883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_817d01063ac22a1b85b936911c25832839b833c4eca413d17d17cec8bd00a3b3->leave($__internal_817d01063ac22a1b85b936911c25832839b833c4eca413d17d17cec8bd00a3b3_prof);

        
        $__internal_bd99a41010b1e5f3cb69dad34bcb23dd97b1b28c8b814b69c7af3324e9440883->leave($__internal_bd99a41010b1e5f3cb69dad34bcb23dd97b1b28c8b814b69c7af3324e9440883_prof);

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
