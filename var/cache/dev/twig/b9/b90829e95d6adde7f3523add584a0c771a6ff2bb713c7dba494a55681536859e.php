<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_20b755cc64ba04a7de6b988545f2f522aa4991692a1bd059e8afa88b1a6de0ac extends Twig_Template
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
        $__internal_dbc58afce09a2cd8425f6b5a3d59b12faef00a5744c42c4351120e87dc014788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc58afce09a2cd8425f6b5a3d59b12faef00a5744c42c4351120e87dc014788->enter($__internal_dbc58afce09a2cd8425f6b5a3d59b12faef00a5744c42c4351120e87dc014788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a596d08d146f5604800982c117dafdc144a4c36d078009f63692f7e1e52a86c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a596d08d146f5604800982c117dafdc144a4c36d078009f63692f7e1e52a86c8->enter($__internal_a596d08d146f5604800982c117dafdc144a4c36d078009f63692f7e1e52a86c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dbc58afce09a2cd8425f6b5a3d59b12faef00a5744c42c4351120e87dc014788->leave($__internal_dbc58afce09a2cd8425f6b5a3d59b12faef00a5744c42c4351120e87dc014788_prof);

        
        $__internal_a596d08d146f5604800982c117dafdc144a4c36d078009f63692f7e1e52a86c8->leave($__internal_a596d08d146f5604800982c117dafdc144a4c36d078009f63692f7e1e52a86c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
