<?php

/* SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig */
class __TwigTemplate_06cecec620d3e24280b2556089337f540c6890ba4f17700a59160f9b39faf753 extends Twig_Template
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
        $__internal_345afa80e4404999b2d4745341f1c7f9ae19ec7ba2beadfa824a3cc7dfcdf4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345afa80e4404999b2d4745341f1c7f9ae19ec7ba2beadfa824a3cc7dfcdf4f9->enter($__internal_345afa80e4404999b2d4745341f1c7f9ae19ec7ba2beadfa824a3cc7dfcdf4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig"));

        $__internal_4f459d0e6510e4c30206c003afb21b341ced473283aac2e788d1509ac7deda26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f459d0e6510e4c30206c003afb21b341ced473283aac2e788d1509ac7deda26->enter($__internal_4f459d0e6510e4c30206c003afb21b341ced473283aac2e788d1509ac7deda26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig"));

        // line 1
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "exclusive", array())) {
            // line 2
            echo "    <div class=\"ui ribbon orange label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.exclusive"), "html", null, true);
            echo "</div>
    <br />
";
        }
        // line 5
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "couponBased", array())) {
            // line 6
            echo "    <div class=\"ui ribbon blue label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.coupon_based"), "html", null, true);
            echo "</div>
    <br />
";
        }
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "code", array()), "html", null, true);
        echo "
";
        
        $__internal_345afa80e4404999b2d4745341f1c7f9ae19ec7ba2beadfa824a3cc7dfcdf4f9->leave($__internal_345afa80e4404999b2d4745341f1c7f9ae19ec7ba2beadfa824a3cc7dfcdf4f9_prof);

        
        $__internal_4f459d0e6510e4c30206c003afb21b341ced473283aac2e788d1509ac7deda26->leave($__internal_4f459d0e6510e4c30206c003afb21b341ced473283aac2e788d1509ac7deda26_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  36 => 6,  34 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.exclusive %}
    <div class=\"ui ribbon orange label\">{{ 'sylius.ui.exclusive'|trans }}</div>
    <br />
{% endif %}
{% if data.couponBased %}
    <div class=\"ui ribbon blue label\">{{ 'sylius.ui.coupon_based'|trans }}</div>
    <br />
{% endif %}
{{ data.code }}
", "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig");
    }
}
