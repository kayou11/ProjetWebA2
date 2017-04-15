<?php

/* SyliusAdminBundle:Order/Show:_customer.html.twig */
class __TwigTemplate_2e057e17ac8a00e92a6e80b57fa3d8df15e9a0c3cbcd004266e88564a6f8c762 extends Twig_Template
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
        $__internal_8483c19974cbdbd5834af49a9ad4e1b1fbc5999196666eb74390d0bcc064536b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8483c19974cbdbd5834af49a9ad4e1b1fbc5999196666eb74390d0bcc064536b->enter($__internal_8483c19974cbdbd5834af49a9ad4e1b1fbc5999196666eb74390d0bcc064536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_customer.html.twig"));

        $__internal_eab0009cbb68057d533d990ea4c513380097b5cbc13dba878e55efd591a00e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab0009cbb68057d533d990ea4c513380097b5cbc13dba878e55efd591a00e02->enter($__internal_eab0009cbb68057d533d990ea4c513380097b5cbc13dba878e55efd591a00e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_customer.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Customer/_info.html.twig", "SyliusAdminBundle:Order/Show:_customer.html.twig", 1)->display($context);
        
        $__internal_8483c19974cbdbd5834af49a9ad4e1b1fbc5999196666eb74390d0bcc064536b->leave($__internal_8483c19974cbdbd5834af49a9ad4e1b1fbc5999196666eb74390d0bcc064536b_prof);

        
        $__internal_eab0009cbb68057d533d990ea4c513380097b5cbc13dba878e55efd591a00e02->leave($__internal_eab0009cbb68057d533d990ea4c513380097b5cbc13dba878e55efd591a00e02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_customer.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Customer/_info.html.twig' %}
", "SyliusAdminBundle:Order/Show:_customer.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_customer.html.twig");
    }
}
