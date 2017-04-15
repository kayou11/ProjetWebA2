<?php

/* SyliusShopBundle:Common:_address.html.twig */
class __TwigTemplate_086a26653af930fca638e6f68f66140b4d39a1b5d83685215e5c4bbde80fead2 extends Twig_Template
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
        $__internal_608b26a9cbd8379248251f95f8b28a0e060d1d6b144bf94855fa229884610dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608b26a9cbd8379248251f95f8b28a0e060d1d6b144bf94855fa229884610dda->enter($__internal_608b26a9cbd8379248251f95f8b28a0e060d1d6b144bf94855fa229884610dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common:_address.html.twig"));

        $__internal_97ca4284a057d6cfa61532025e057e84c40fc75b39b356f51e73d83f107789d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ca4284a057d6cfa61532025e057e84c40fc75b39b356f51e73d83f107789d7->enter($__internal_97ca4284a057d6cfa61532025e057e84c40fc75b39b356f51e73d83f107789d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common:_address.html.twig"));

        // line 1
        echo "<address>
    ";
        // line 2
        if ( !(null === $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "company", array()))) {
            // line 3
            echo "        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "company", array()), "html", null, true);
            echo "</strong><br>
    ";
        }
        // line 5
        echo "    <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "lastName", array()), "html", null, true);
        echo "</strong><br>
    ";
        // line 6
        if ( !(null === $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "phoneNumber", array()))) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "phoneNumber", array()), "html", null, true);
            echo "<br/>
    ";
        }
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "street", array()), "html", null, true);
        echo "<br/>
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "city", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "postcode", array()), "html", null, true);
        echo "<br/>
    ";
        // line 11
        if ( !twig_test_empty(call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array(($context["address"] ?? $this->getContext($context, "address")))))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array(($context["address"] ?? $this->getContext($context, "address")))), "html", null, true);
            echo "<br/>
    ";
        }
        // line 14
        echo "    <i class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "countryCode", array())), "html", null, true);
        echo " flag\"></i>
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension')->translateCountryIsoCode($this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "countryCode", array()))), "html", null, true);
        echo "
</address>
";
        
        $__internal_608b26a9cbd8379248251f95f8b28a0e060d1d6b144bf94855fa229884610dda->leave($__internal_608b26a9cbd8379248251f95f8b28a0e060d1d6b144bf94855fa229884610dda_prof);

        
        $__internal_97ca4284a057d6cfa61532025e057e84c40fc75b39b356f51e73d83f107789d7->leave($__internal_97ca4284a057d6cfa61532025e057e84c40fc75b39b356f51e73d83f107789d7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  70 => 14,  64 => 12,  62 => 11,  56 => 10,  51 => 9,  45 => 7,  43 => 6,  36 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<address>
    {% if address.company is not null %}
        <strong>{{ address.company }}</strong><br>
    {% endif %}
    <strong>{{ address.firstName }} {{ address.lastName }}</strong><br>
    {% if address.phoneNumber is not null %}
        {{ address.phoneNumber }}<br/>
    {% endif %}
    {{ address.street }}<br/>
    {{ address.city }}, {{ address.postcode }}<br/>
    {% if address|sylius_province_name is not empty %}
        {{ address|sylius_province_name }}<br/>
    {% endif %}
    <i class=\"{{ address.countryCode|lower }} flag\"></i>
    {{ address.countryCode|sylius_country_name|upper }}
</address>
", "SyliusShopBundle:Common:_address.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/_address.html.twig");
    }
}
