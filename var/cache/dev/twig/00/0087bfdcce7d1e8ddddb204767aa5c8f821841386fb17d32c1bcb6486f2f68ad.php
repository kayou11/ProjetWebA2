<?php

/* SyliusAdminBundle:Product/Grid/Field:image.html.twig */
class __TwigTemplate_8bbe3926e5f6ed91eaa194bbba950c73ad864e7a13318daa26a8244ae0e187ff extends Twig_Template
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
        $__internal_3c39f0260eb7c82adc5827957d501fe7eb4e020d3cde0b4744f17a41326204a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c39f0260eb7c82adc5827957d501fe7eb4e020d3cde0b4744f17a41326204a3->enter($__internal_3c39f0260eb7c82adc5827957d501fe7eb4e020d3cde0b4744f17a41326204a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:image.html.twig"));

        $__internal_df942f7998e8f3ca0ad493b6d74b8b1c0ba69e0025c23e288ac3493e65079196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df942f7998e8f3ca0ad493b6d74b8b1c0ba69e0025c23e288ac3493e65079196->enter($__internal_df942f7998e8f3ca0ad493b6d74b8b1c0ba69e0025c23e288ac3493e65079196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:image.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "SyliusAdminBundle:Product/Grid/Field:image.html.twig", 1)->display(array_merge($context, array("product" => ($context["data"] ?? $this->getContext($context, "data")))));
        
        $__internal_3c39f0260eb7c82adc5827957d501fe7eb4e020d3cde0b4744f17a41326204a3->leave($__internal_3c39f0260eb7c82adc5827957d501fe7eb4e020d3cde0b4744f17a41326204a3_prof);

        
        $__internal_df942f7998e8f3ca0ad493b6d74b8b1c0ba69e0025c23e288ac3493e65079196->leave($__internal_df942f7998e8f3ca0ad493b6d74b8b1c0ba69e0025c23e288ac3493e65079196_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Field:image.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': data} %}
", "SyliusAdminBundle:Product/Grid/Field:image.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Grid/Field/image.html.twig");
    }
}
