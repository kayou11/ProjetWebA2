<?php

/* SyliusAdminBundle:Common/Form:_address.html.twig */
class __TwigTemplate_b92ade8e9e48680b16717903d7747d0f51a979c11fec1c9c9b087577cdbc4946 extends Twig_Template
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
        $__internal_96cd0dd5a302c39744ecd1d6e4e0d9027aec495dcc1d9f3fe15cb7b3fc85ecee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cd0dd5a302c39744ecd1d6e4e0d9027aec495dcc1d9f3fe15cb7b3fc85ecee->enter($__internal_96cd0dd5a302c39744ecd1d6e4e0d9027aec495dcc1d9f3fe15cb7b3fc85ecee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Form:_address.html.twig"));

        $__internal_f12813537dad3b7f8127577d607384d88ed3408867f0fb87aaef62d448c44956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12813537dad3b7f8127577d607384d88ed3408867f0fb87aaef62d448c44956->enter($__internal_f12813537dad3b7f8127577d607384d88ed3408867f0fb87aaef62d448c44956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Form:_address.html.twig"));

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
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "countryCode", array()), 'row');
        echo "
<div class=\"province-container field\" data-url=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_render_province_form");
        echo "\">
    ";
        // line 9
        if ($this->getAttribute(($context["form"] ?? null), "provinceCode", array(), "any", true, true)) {
            // line 10
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "provinceCode", array()), 'row', array("attr" => array("class" => "ui dropdown")));
            echo "
    ";
        }
        // line 12
        echo "</div>
<div class=\"two fields\">
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postcode", array()), 'row');
        echo "
</div>
";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phoneNumber", array()), 'row');
        echo "
";
        
        $__internal_96cd0dd5a302c39744ecd1d6e4e0d9027aec495dcc1d9f3fe15cb7b3fc85ecee->leave($__internal_96cd0dd5a302c39744ecd1d6e4e0d9027aec495dcc1d9f3fe15cb7b3fc85ecee_prof);

        
        $__internal_f12813537dad3b7f8127577d607384d88ed3408867f0fb87aaef62d448c44956->leave($__internal_f12813537dad3b7f8127577d607384d88ed3408867f0fb87aaef62d448c44956_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common/Form:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  69 => 15,  65 => 14,  61 => 12,  55 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
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
{{ form_row(form.countryCode) }}
<div class=\"province-container field\" data-url=\"{{ path('sylius_admin_ajax_render_province_form') }}\">
    {% if form.provinceCode is defined %}
        {{ form_row(form.provinceCode, {'attr': {'class': 'ui dropdown'}}) }}
    {% endif %}
</div>
<div class=\"two fields\">
    {{ form_row(form.city) }}
    {{ form_row(form.postcode) }}
</div>
{{ form_row(form.phoneNumber) }}
", "SyliusAdminBundle:Common/Form:_address.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Common/Form/_address.html.twig");
    }
}
