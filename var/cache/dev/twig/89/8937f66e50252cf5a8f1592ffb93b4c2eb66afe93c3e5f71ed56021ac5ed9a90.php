<?php

/* SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig */
class __TwigTemplate_7041e5a57e7ab12a610f82cc71f649922c60b52658d5436369626e3522649b4a extends Twig_Template
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
        $__internal_406335eb4e5ea8b2daa2f90a33b3f54f6f7f10ef1815af551db8d1f085e43559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406335eb4e5ea8b2daa2f90a33b3f54f6f7f10ef1815af551db8d1f085e43559->enter($__internal_406335eb4e5ea8b2daa2f90a33b3f54f6f7f10ef1815af551db8d1f085e43559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig"));

        $__internal_8c73028a67ab73b1da911650964793beefbd13567b7df4651537fc6dc8178ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c73028a67ab73b1da911650964793beefbd13567b7df4651537fc6dc8178ecd->enter($__internal_8c73028a67ab73b1da911650964793beefbd13567b7df4651537fc6dc8178ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig"));

        // line 1
        echo "<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_406335eb4e5ea8b2daa2f90a33b3f54f6f7f10ef1815af551db8d1f085e43559->leave($__internal_406335eb4e5ea8b2daa2f90a33b3f54f6f7f10ef1815af551db8d1f085e43559_prof);

        
        $__internal_8c73028a67ab73b1da911650964793beefbd13567b7df4651537fc6dc8178ecd->leave($__internal_8c73028a67ab73b1da911650964793beefbd13567b7df4651537fc6dc8178ecd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig";
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
        return new Twig_Source("<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductReview/Label/Status/accepted.html.twig");
    }
}
