<?php

/* SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig */
class __TwigTemplate_559f304e0e390f5efa2f4969f226d8f62e80fdafd2e0953f6154bff6f2785e0e extends Twig_Template
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
        $__internal_cb103189e1c412d8ef05d1574622b9ff9b31e4aa82c9dff71eab5cee5fdc7ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb103189e1c412d8ef05d1574622b9ff9b31e4aa82c9dff71eab5cee5fdc7ff2->enter($__internal_cb103189e1c412d8ef05d1574622b9ff9b31e4aa82c9dff71eab5cee5fdc7ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig"));

        $__internal_28f527c9adafdfe52c3f68708ae417b4a50c5f3d81721b105978c5effda1cda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f527c9adafdfe52c3f68708ae417b4a50c5f3d81721b105978c5effda1cda6->enter($__internal_28f527c9adafdfe52c3f68708ae417b4a50c5f3d81721b105978c5effda1cda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig"));

        // line 1
        echo "<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_cb103189e1c412d8ef05d1574622b9ff9b31e4aa82c9dff71eab5cee5fdc7ff2->leave($__internal_cb103189e1c412d8ef05d1574622b9ff9b31e4aa82c9dff71eab5cee5fdc7ff2_prof);

        
        $__internal_28f527c9adafdfe52c3f68708ae417b4a50c5f3d81721b105978c5effda1cda6->leave($__internal_28f527c9adafdfe52c3f68708ae417b4a50c5f3d81721b105978c5effda1cda6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig";
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
        return new Twig_Source("<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductReview/Label/Status/rejected.html.twig");
    }
}
