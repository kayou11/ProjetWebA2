<?php

/* SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig */
class __TwigTemplate_7a772e5ce66712e08b40dfe406f13a34f718685e144dbc060c88e5643ae2527c extends Twig_Template
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
        $__internal_466218c675a58e34ac3e20c2e461e3f9a94ff864491ca69489d9bdb334f9230d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466218c675a58e34ac3e20c2e461e3f9a94ff864491ca69489d9bdb334f9230d->enter($__internal_466218c675a58e34ac3e20c2e461e3f9a94ff864491ca69489d9bdb334f9230d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig"));

        $__internal_8c9a0d631399c2740d7234e56912188ac0a611ce912db18f02c60030a128e620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9a0d631399c2740d7234e56912188ac0a611ce912db18f02c60030a128e620->enter($__internal_8c9a0d631399c2740d7234e56912188ac0a611ce912db18f02c60030a128e620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig"));

        // line 1
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "isTracked", array())) {
            // line 2
            echo "<div class=\"ui ";
            echo ((($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "onHand", array()) > 0)) ? ("green") : ("red"));
            echo " icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "onHand", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.available_on_hand"), "html", null, true);
            echo "
    ";
            // line 5
            if (($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "onHold", array()) > 0)) {
                // line 6
                echo "    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "onHold", array()), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reserved"), "html", null, true);
                echo "
    </div>
    ";
            }
            // line 10
            echo "</div>
";
        } else {
            // line 12
            echo "    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.not_tracked"), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_466218c675a58e34ac3e20c2e461e3f9a94ff864491ca69489d9bdb334f9230d->leave($__internal_466218c675a58e34ac3e20c2e461e3f9a94ff864491ca69489d9bdb334f9230d_prof);

        
        $__internal_8c9a0d631399c2740d7234e56912188ac0a611ce912db18f02c60030a128e620->leave($__internal_8c9a0d631399c2740d7234e56912188ac0a611ce912db18f02c60030a128e620_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  60 => 12,  56 => 10,  46 => 7,  43 => 6,  41 => 5,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.isTracked %}
<div class=\"ui {{ data.onHand > 0 ? 'green' : 'red' }} icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHand }}</span> {{ 'sylius.ui.available_on_hand'|trans }}
    {% if data.onHold > 0 %}
    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHold }}</span> {{ 'sylius.ui.reserved'|trans }}
    </div>
    {% endif %}
</div>
{% else %}
    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        {{ 'sylius.ui.not_tracked'|trans }}
    </span>
{% endif %}
", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/inventory.html.twig");
    }
}
