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
        $__internal_3ce3b34d898b83cf3931d639eb7f30b23c22097fae6cfc926a43dfe760602157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce3b34d898b83cf3931d639eb7f30b23c22097fae6cfc926a43dfe760602157->enter($__internal_3ce3b34d898b83cf3931d639eb7f30b23c22097fae6cfc926a43dfe760602157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_69e8546b14874f0533f802d95facfb0f3c743ab281f13c735f2c41a2adfbbce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e8546b14874f0533f802d95facfb0f3c743ab281f13c735f2c41a2adfbbce6->enter($__internal_69e8546b14874f0533f802d95facfb0f3c743ab281f13c735f2c41a2adfbbce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3ce3b34d898b83cf3931d639eb7f30b23c22097fae6cfc926a43dfe760602157->leave($__internal_3ce3b34d898b83cf3931d639eb7f30b23c22097fae6cfc926a43dfe760602157_prof);

        
        $__internal_69e8546b14874f0533f802d95facfb0f3c743ab281f13c735f2c41a2adfbbce6->leave($__internal_69e8546b14874f0533f802d95facfb0f3c743ab281f13c735f2c41a2adfbbce6_prof);

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
