<?php

/* SyliusAdminBundle:ProductReview/Label/Status:new.html.twig */
class __TwigTemplate_df227e7b9a7b618bb6fae282971e4a572eda2eef21d411ae8f5df8b6c7204576 extends Twig_Template
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
        $__internal_9b477ecaee47ceb86f694daf09b7a6260712a8618bdff2db16390ef0e3aeb824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b477ecaee47ceb86f694daf09b7a6260712a8618bdff2db16390ef0e3aeb824->enter($__internal_9b477ecaee47ceb86f694daf09b7a6260712a8618bdff2db16390ef0e3aeb824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:new.html.twig"));

        $__internal_fc4d32105b6db45dcf5e958e166b2d7b2d6591f929dd7da441eea34ec6f1264e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4d32105b6db45dcf5e958e166b2d7b2d6591f929dd7da441eea34ec6f1264e->enter($__internal_fc4d32105b6db45dcf5e958e166b2d7b2d6591f929dd7da441eea34ec6f1264e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:new.html.twig"));

        // line 1
        echo "<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_9b477ecaee47ceb86f694daf09b7a6260712a8618bdff2db16390ef0e3aeb824->leave($__internal_9b477ecaee47ceb86f694daf09b7a6260712a8618bdff2db16390ef0e3aeb824_prof);

        
        $__internal_fc4d32105b6db45dcf5e958e166b2d7b2d6591f929dd7da441eea34ec6f1264e->leave($__internal_fc4d32105b6db45dcf5e958e166b2d7b2d6591f929dd7da441eea34ec6f1264e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview/Label/Status:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:ProductReview/Label/Status:new.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductReview/Label/Status/new.html.twig");
    }
}
