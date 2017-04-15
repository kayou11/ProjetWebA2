<?php

/* SyliusAdminBundle:Product/Grid/Field:position.html.twig */
class __TwigTemplate_51494d3d7741922f5cc3cdec2fb11720b30901bf4a5adb70603a29486647b2cb extends Twig_Template
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
        $__internal_8623420a1ddfa04cab02c5be91b1e2b15e368855e1c6e75c924e468d88b7084c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8623420a1ddfa04cab02c5be91b1e2b15e368855e1c6e75c924e468d88b7084c->enter($__internal_8623420a1ddfa04cab02c5be91b1e2b15e368855e1c6e75c924e468d88b7084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:position.html.twig"));

        $__internal_6e83cdb0d624b1a3edd70e4bd0c546d3ce87218b9a5b66e06c8f5ac795c3a14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e83cdb0d624b1a3edd70e4bd0c546d3ce87218b9a5b66e06c8f5ac795c3a14f->enter($__internal_6e83cdb0d624b1a3edd70e4bd0c546d3ce87218b9a5b66e06c8f5ac795c3a14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:position.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Product/_position.html.twig", "SyliusAdminBundle:Product/Grid/Field:position.html.twig", 1)->display(array_merge($context, array("product" => ($context["data"] ?? $this->getContext($context, "data")), "taxonId" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "taxonId"), "method"))));
        
        $__internal_8623420a1ddfa04cab02c5be91b1e2b15e368855e1c6e75c924e468d88b7084c->leave($__internal_8623420a1ddfa04cab02c5be91b1e2b15e368855e1c6e75c924e468d88b7084c_prof);

        
        $__internal_6e83cdb0d624b1a3edd70e4bd0c546d3ce87218b9a5b66e06c8f5ac795c3a14f->leave($__internal_6e83cdb0d624b1a3edd70e4bd0c546d3ce87218b9a5b66e06c8f5ac795c3a14f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Field:position.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Product/_position.html.twig' with {'product': data, 'taxonId': app.request.get('taxonId')} %}
", "SyliusAdminBundle:Product/Grid/Field:position.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Grid/Field/position.html.twig");
    }
}
