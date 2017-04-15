<?php

/* SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig */
class __TwigTemplate_0e1ebf58b20aadd055a8c29fb452e5af6987c9c202de0cdd882728e3c7f45810 extends Twig_Template
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
        $__internal_d16209be674c9525b89c25ab66532968f678e6a02a5696360999d4725e2f54cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16209be674c9525b89c25ab66532968f678e6a02a5696360999d4725e2f54cd->enter($__internal_d16209be674c9525b89c25ab66532968f678e6a02a5696360999d4725e2f54cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig"));

        $__internal_2db811bc076154b3623dc3b05ca772c9e90910384a074b7512231264c5d7fdd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db811bc076154b3623dc3b05ca772c9e90910384a074b7512231264c5d7fdd1->enter($__internal_2db811bc076154b3623dc3b05ca772c9e90910384a074b7512231264c5d7fdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig"));

        // line 1
        echo "<span class=\"ui yellow";
        if ((array_key_exists("attached", $context) && (($context["attached"] ?? $this->getContext($context, "attached")) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"adjust icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_d16209be674c9525b89c25ab66532968f678e6a02a5696360999d4725e2f54cd->leave($__internal_d16209be674c9525b89c25ab66532968f678e6a02a5696360999d4725e2f54cd_prof);

        
        $__internal_2db811bc076154b3623dc3b05ca772c9e90910384a074b7512231264c5d7fdd1->leave($__internal_2db811bc076154b3623dc3b05ca772c9e90910384a074b7512231264c5d7fdd1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig";
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
        return new Twig_Source("<span class=\"ui yellow{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"adjust icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/PaymentState/partially_paid.html.twig");
    }
}
