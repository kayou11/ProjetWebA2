<?php

/* SyliusShopBundle:Common/Form:_address.html.twig */
class __TwigTemplate_97309c9c7a5bfa8fb0ab070de19b1cab9871b730749e5319673abefb994c51bc extends Twig_Template
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
        $__internal_3d39dcc616b421bba491b1f2659e846de60f29f8f38527b2b8ab087b96ff6c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d39dcc616b421bba491b1f2659e846de60f29f8f38527b2b8ab087b96ff6c01->enter($__internal_3d39dcc616b421bba491b1f2659e846de60f29f8f38527b2b8ab087b96ff6c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_address.html.twig"));

        $__internal_5f462aa4be00e0faf860e980646ccba0275c5036e7cedc8884f43c1ab5b15692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f462aa4be00e0faf860e980646ccba0275c5036e7cedc8884f43c1ab5b15692->enter($__internal_5f462aa4be00e0faf860e980646ccba0275c5036e7cedc8884f43c1ab5b15692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_address.html.twig"));

        // line 1
        echo "<div class=\"two fields\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
</div>
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'row');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "street", array()), 'row');
        echo "

";
        // line 8
        $this->loadTemplate("@SyliusShop/Common/Form/_countryCode.html.twig", "SyliusShopBundle:Common/Form:_address.html.twig", 8)->display(array_merge($context, array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "countryCode", array()))));
        // line 9
        echo "
<div class=\"province-container field\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_ajax_render_province_form");
        echo "\">
    ";
        // line 11
        if ($this->getAttribute(($context["form"] ?? null), "provinceCode", array(), "any", true, true)) {
            // line 12
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "provinceCode", array()), 'row', array("attr" => array("class" => "ui dropdown")));
            echo "
    ";
        } elseif ($this->getAttribute(        // line 13
($context["form"] ?? null), "provinceName", array(), "any", true, true)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "provinceName", array()), 'row');
            echo "
    ";
        }
        // line 16
        echo "</div>

";
        // line 18
        if ($this->getAttribute(($context["form"] ?? null), "provinceCode", array(), "any", true, true)) {
            // line 19
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
";
        }
        // line 21
        echo "
<div class=\"two fields\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postcode", array()), 'row');
        echo "
</div>
";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phoneNumber", array()), 'row');
        echo "
";
        
        $__internal_3d39dcc616b421bba491b1f2659e846de60f29f8f38527b2b8ab087b96ff6c01->leave($__internal_3d39dcc616b421bba491b1f2659e846de60f29f8f38527b2b8ab087b96ff6c01_prof);

        
        $__internal_5f462aa4be00e0faf860e980646ccba0275c5036e7cedc8884f43c1ab5b15692->leave($__internal_5f462aa4be00e0faf860e980646ccba0275c5036e7cedc8884f43c1ab5b15692_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Form:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  90 => 24,  86 => 23,  82 => 21,  76 => 19,  74 => 18,  70 => 16,  64 => 14,  62 => 13,  57 => 12,  55 => 11,  51 => 10,  48 => 9,  46 => 8,  41 => 6,  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"two fields\">
    {{ form_row(form.firstName) }}
    {{ form_row(form.lastName) }}
</div>
{{ form_row(form.company) }}
{{ form_row(form.street) }}

{% include '@SyliusShop/Common/Form/_countryCode.html.twig' with {'form': form.countryCode} %}

<div class=\"province-container field\" data-url=\"{{ path('sylius_shop_ajax_render_province_form') }}\">
    {% if form.provinceCode is defined %}
        {{ form_row(form.provinceCode, {'attr': {'class': 'ui dropdown'}}) }}
    {% elseif form.provinceName is defined %}
        {{ form_row(form.provinceName) }}
    {% endif %}
</div>

{% if form.provinceCode is defined %}
    {{ form_errors(form) }}
{% endif %}

<div class=\"two fields\">
    {{ form_row(form.city) }}
    {{ form_row(form.postcode) }}
</div>
{{ form_row(form.phoneNumber) }}
", "SyliusShopBundle:Common/Form:_address.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Form/_address.html.twig");
    }
}
