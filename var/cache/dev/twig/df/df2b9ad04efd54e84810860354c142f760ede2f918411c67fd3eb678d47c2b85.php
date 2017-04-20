<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_372b470d80822bb1ca1f507ccd7d64b73fc0d0a74a2ebbe984839d4d90b4df42 extends Twig_Template
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
        $__internal_05d0225d5bf73f83dc640fd02b97ee63234cedbd2db2507d60fa61bd925afe84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d0225d5bf73f83dc640fd02b97ee63234cedbd2db2507d60fa61bd925afe84->enter($__internal_05d0225d5bf73f83dc640fd02b97ee63234cedbd2db2507d60fa61bd925afe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e65089cc11d68c59e140e43cd2d88408de50153425e2f99b20833eaa8a20af53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65089cc11d68c59e140e43cd2d88408de50153425e2f99b20833eaa8a20af53->enter($__internal_e65089cc11d68c59e140e43cd2d88408de50153425e2f99b20833eaa8a20af53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_05d0225d5bf73f83dc640fd02b97ee63234cedbd2db2507d60fa61bd925afe84->leave($__internal_05d0225d5bf73f83dc640fd02b97ee63234cedbd2db2507d60fa61bd925afe84_prof);

        
        $__internal_e65089cc11d68c59e140e43cd2d88408de50153425e2f99b20833eaa8a20af53->leave($__internal_e65089cc11d68c59e140e43cd2d88408de50153425e2f99b20833eaa8a20af53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
