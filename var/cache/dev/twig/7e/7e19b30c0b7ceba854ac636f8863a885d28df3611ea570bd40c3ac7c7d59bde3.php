<?php

/* SyliusAdminBundle:Order/Grid/Field:number.html.twig */
class __TwigTemplate_0a7a19e2b49f536d753681739a1db49da1c6201986a7727ccecf7ed5fbde366a extends Twig_Template
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
        $__internal_6d2651ff928655efb7acd839e68600144bcb49388b6c5feb16211ede52705b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2651ff928655efb7acd839e68600144bcb49388b6c5feb16211ede52705b75->enter($__internal_6d2651ff928655efb7acd839e68600144bcb49388b6c5feb16211ede52705b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:number.html.twig"));

        $__internal_9a2641c4cd7b877342b087cf4979de591de95b6b9a4534d65ae28f8e722e4a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2641c4cd7b877342b087cf4979de591de95b6b9a4534d65ae28f8e722e4a46->enter($__internal_9a2641c4cd7b877342b087cf4979de591de95b6b9a4534d65ae28f8e722e4a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:number.html.twig"));

        // line 1
        echo "#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "number", array()), "html", null, true);
        echo "
";
        
        $__internal_6d2651ff928655efb7acd839e68600144bcb49388b6c5feb16211ede52705b75->leave($__internal_6d2651ff928655efb7acd839e68600144bcb49388b6c5feb16211ede52705b75_prof);

        
        $__internal_9a2641c4cd7b877342b087cf4979de591de95b6b9a4534d65ae28f8e722e4a46->leave($__internal_9a2641c4cd7b877342b087cf4979de591de95b6b9a4534d65ae28f8e722e4a46_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Grid/Field:number.html.twig";
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
        return new Twig_Source("#{{ data.number }}
", "SyliusAdminBundle:Order/Grid/Field:number.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Grid/Field/number.html.twig");
    }
}
