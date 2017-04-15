<?php

/* SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig */
class __TwigTemplate_fd50ff5dfbcae7a940298eba329bb7ed486780f229c05a725801f828cb2d8269 extends Twig_Template
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
        $__internal_338081cb679ec152730b13b115fd39fa908773f7475f1a272b7ee0951fe000de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338081cb679ec152730b13b115fd39fa908773f7475f1a272b7ee0951fe000de->enter($__internal_338081cb679ec152730b13b115fd39fa908773f7475f1a272b7ee0951fe000de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig"));

        $__internal_d62f5fa731cc7a7af526cc0f00e8f4739b6c3aebc04decf28e5f2ef286a9f614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62f5fa731cc7a7af526cc0f00e8f4739b6c3aebc04decf28e5f2ef286a9f614->enter($__internal_d62f5fa731cc7a7af526cc0f00e8f4739b6c3aebc04decf28e5f2ef286a9f614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig"));

        // line 1
        echo "<span class=\"ui green";
        if ((array_key_exists("attached", $context) && (($context["attached"] ?? $this->getContext($context, "attached")) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"plane icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_338081cb679ec152730b13b115fd39fa908773f7475f1a272b7ee0951fe000de->leave($__internal_338081cb679ec152730b13b115fd39fa908773f7475f1a272b7ee0951fe000de_prof);

        
        $__internal_d62f5fa731cc7a7af526cc0f00e8f4739b6c3aebc04decf28e5f2ef286a9f614->leave($__internal_d62f5fa731cc7a7af526cc0f00e8f4739b6c3aebc04decf28e5f2ef286a9f614_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui green{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"plane icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/ShippingState/shipped.html.twig");
    }
}
