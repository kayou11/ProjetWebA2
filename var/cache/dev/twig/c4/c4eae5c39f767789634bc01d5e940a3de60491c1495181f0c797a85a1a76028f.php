<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cc45e6af8495cc25a9833a6184840ad5b28ccbcd4aba528a7c41b3675b29b3d1 extends Twig_Template
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
        $__internal_98c739b2f93f01f0e778a6a9baec6daff1af86c3cfd0384e7b17fa0fdc9482c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c739b2f93f01f0e778a6a9baec6daff1af86c3cfd0384e7b17fa0fdc9482c5->enter($__internal_98c739b2f93f01f0e778a6a9baec6daff1af86c3cfd0384e7b17fa0fdc9482c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d1ff61ae0d17373fcc954bd09947ff8dcd2585557fae57a29e3ba35706b4bc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ff61ae0d17373fcc954bd09947ff8dcd2585557fae57a29e3ba35706b4bc0f->enter($__internal_d1ff61ae0d17373fcc954bd09947ff8dcd2585557fae57a29e3ba35706b4bc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_98c739b2f93f01f0e778a6a9baec6daff1af86c3cfd0384e7b17fa0fdc9482c5->leave($__internal_98c739b2f93f01f0e778a6a9baec6daff1af86c3cfd0384e7b17fa0fdc9482c5_prof);

        
        $__internal_d1ff61ae0d17373fcc954bd09947ff8dcd2585557fae57a29e3ba35706b4bc0f->leave($__internal_d1ff61ae0d17373fcc954bd09947ff8dcd2585557fae57a29e3ba35706b4bc0f_prof);

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
