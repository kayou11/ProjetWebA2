<?php

/* SyliusAdminBundle:Channel/Grid/Field:code.html.twig */
class __TwigTemplate_90b76dec815daa0cd3e442e6e315db3656753212efd6eaa75180771577ea0491 extends Twig_Template
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
        $__internal_0de79e3b86b8d59a8613304b9a1c91b818c78ce95ea64be915146dbcb31860b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de79e3b86b8d59a8613304b9a1c91b818c78ce95ea64be915146dbcb31860b1->enter($__internal_0de79e3b86b8d59a8613304b9a1c91b818c78ce95ea64be915146dbcb31860b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel/Grid/Field:code.html.twig"));

        $__internal_adb7b03a63026ae38f3a91a8f415de6cf1a68dc307a35faabedd3460d888de31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb7b03a63026ae38f3a91a8f415de6cf1a68dc307a35faabedd3460d888de31->enter($__internal_adb7b03a63026ae38f3a91a8f415de6cf1a68dc307a35faabedd3460d888de31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel/Grid/Field:code.html.twig"));

        // line 1
        echo "<span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "color", array()), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "code", array()), "html", null, true);
        echo "
";
        
        $__internal_0de79e3b86b8d59a8613304b9a1c91b818c78ce95ea64be915146dbcb31860b1->leave($__internal_0de79e3b86b8d59a8613304b9a1c91b818c78ce95ea64be915146dbcb31860b1_prof);

        
        $__internal_adb7b03a63026ae38f3a91a8f415de6cf1a68dc307a35faabedd3460d888de31->leave($__internal_adb7b03a63026ae38f3a91a8f415de6cf1a68dc307a35faabedd3460d888de31_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Channel/Grid/Field:code.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ data.color }}\"></span> {{ data.code }}
", "SyliusAdminBundle:Channel/Grid/Field:code.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Channel/Grid/Field/code.html.twig");
    }
}
