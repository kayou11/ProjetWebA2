<?php

/* SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig */
class __TwigTemplate_b85da8addcc7c6c933ac7f8a556e6b82b06e1a9f584e5375b94a031c32b9b81e extends Twig_Template
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
        $__internal_cf29203253962fc807a13765321b86950ca3e73de6fb541ca4cb1a8a5370ecc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf29203253962fc807a13765321b86950ca3e73de6fb541ca4cb1a8a5370ecc2->enter($__internal_cf29203253962fc807a13765321b86950ca3e73de6fb541ca4cb1a8a5370ecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig"));

        $__internal_7512a0dcaba74bfaa77231050c072b65f52a106f347683650879070ccce73a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7512a0dcaba74bfaa77231050c072b65f52a106f347683650879070ccce73a0f->enter($__internal_7512a0dcaba74bfaa77231050c072b65f52a106f347683650879070ccce73a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig"));

        // line 1
        echo "<span class=\"ui yellow";
        if ((array_key_exists("attached", $context) && (($context["attached"] ?? $this->getContext($context, "attached")) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_cf29203253962fc807a13765321b86950ca3e73de6fb541ca4cb1a8a5370ecc2->leave($__internal_cf29203253962fc807a13765321b86950ca3e73de6fb541ca4cb1a8a5370ecc2_prof);

        
        $__internal_7512a0dcaba74bfaa77231050c072b65f52a106f347683650879070ccce73a0f->leave($__internal_7512a0dcaba74bfaa77231050c072b65f52a106f347683650879070ccce73a0f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig";
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
    <i class=\"ban icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/PaymentState/cancelled.html.twig");
    }
}
