<?php

/* SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig */
class __TwigTemplate_98ebc82b6a4bbdf01fc54341135835ef706fe1ad8ca29aba0684f8b201215208 extends Twig_Template
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
        $__internal_b0b152ece5537ea4a27475441e923c74dde7ba2395e2bd30e5c4063c31063005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b152ece5537ea4a27475441e923c74dde7ba2395e2bd30e5c4063c31063005->enter($__internal_b0b152ece5537ea4a27475441e923c74dde7ba2395e2bd30e5c4063c31063005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig"));

        $__internal_fbd0f1f0be35f58c98dd455dc575f9b00d7a2b61bc3c1aab369ec2bd1197b242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd0f1f0be35f58c98dd455dc575f9b00d7a2b61bc3c1aab369ec2bd1197b242->enter($__internal_fbd0f1f0be35f58c98dd455dc575f9b00d7a2b61bc3c1aab369ec2bd1197b242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig"));

        // line 1
        echo "<div style=\"width: 100%; text-align: center;\">
    <div class=\"ui input position\" style=\"width: 50px;\">
        <input type='text' value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "position", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()), "html", null, true);
        echo "\" class=\"sylius-product-variant-position\" style=\"text-align: center;\" />
    </div>
</div>
";
        
        $__internal_b0b152ece5537ea4a27475441e923c74dde7ba2395e2bd30e5c4063c31063005->leave($__internal_b0b152ece5537ea4a27475441e923c74dde7ba2395e2bd30e5c4063c31063005_prof);

        
        $__internal_fbd0f1f0be35f58c98dd455dc575f9b00d7a2b61bc3c1aab369ec2bd1197b242->leave($__internal_fbd0f1f0be35f58c98dd455dc575f9b00d7a2b61bc3c1aab369ec2bd1197b242_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig";
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
        return new Twig_Source("<div style=\"width: 100%; text-align: center;\">
    <div class=\"ui input position\" style=\"width: 50px;\">
        <input type='text' value=\"{{ data.position }}\" data-id=\"{{ data.id }}\" class=\"sylius-product-variant-position\" style=\"text-align: center;\" />
    </div>
</div>
", "SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/position.html.twig");
    }
}
