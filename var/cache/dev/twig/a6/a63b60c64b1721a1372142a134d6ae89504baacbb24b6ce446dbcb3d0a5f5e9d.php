<?php

/* SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig */
class __TwigTemplate_a52d26ddfad64a463854c1dcd12849317f40071eecf0e9c0917f8c9b2cd66517 extends Twig_Template
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
        $__internal_97b7d78d01381af2e2f68bf1a50983d70b87478a734c991bf0424afb2ba540a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b7d78d01381af2e2f68bf1a50983d70b87478a734c991bf0424afb2ba540a3->enter($__internal_97b7d78d01381af2e2f68bf1a50983d70b87478a734c991bf0424afb2ba540a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig"));

        $__internal_f8c829fcc6a070532abaf999d7cd31c75ce91bb5573566248ca7351a06db18f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c829fcc6a070532abaf999d7cd31c75ce91bb5573566248ca7351a06db18f4->enter($__internal_f8c829fcc6a070532abaf999d7cd31c75ce91bb5573566248ca7351a06db18f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig"));

        // line 1
        echo "<span class=\"ui purple";
        if ((array_key_exists("attached", $context) && (($context["attached"] ?? $this->getContext($context, "attached")) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"reply all icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_97b7d78d01381af2e2f68bf1a50983d70b87478a734c991bf0424afb2ba540a3->leave($__internal_97b7d78d01381af2e2f68bf1a50983d70b87478a734c991bf0424afb2ba540a3_prof);

        
        $__internal_f8c829fcc6a070532abaf999d7cd31c75ce91bb5573566248ca7351a06db18f4->leave($__internal_f8c829fcc6a070532abaf999d7cd31c75ce91bb5573566248ca7351a06db18f4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig";
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
        return new Twig_Source("<span class=\"ui purple{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"reply all icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/PaymentState/refunded.html.twig");
    }
}
