<?php

/* SyliusAdminBundle:Common:_address.html.twig */
class __TwigTemplate_d09c6b505c4e7e4a178f6ee6e89fe499baa7c200401691de7b61c18d7843dff9 extends Twig_Template
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
        $__internal_05752fee8316bbbfa1511cdc81eaa3d981e43d37e0b03d09f4db3e3b70bf0f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05752fee8316bbbfa1511cdc81eaa3d981e43d37e0b03d09f4db3e3b70bf0f4b->enter($__internal_05752fee8316bbbfa1511cdc81eaa3d981e43d37e0b03d09f4db3e3b70bf0f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common:_address.html.twig"));

        $__internal_2624cf0fc63e6303f73d1eeb06daf6368795827a760fb3cad7ea6f9619af5255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2624cf0fc63e6303f73d1eeb06daf6368795827a760fb3cad7ea6f9619af5255->enter($__internal_2624cf0fc63e6303f73d1eeb06daf6368795827a760fb3cad7ea6f9619af5255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common:_address.html.twig"));

        // line 1
        echo "<address>
    <strong>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "lastName", array()), "html", null, true);
        echo "</strong>
    ";
        // line 3
        if ($this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "company", array())) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "company", array()), "html", null, true);
            echo "<br/>
    ";
        }
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "phoneNumber", array()), "html", null, true);
        echo "<br/>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "street", array()), "html", null, true);
        echo "<br/>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "city", array()), "html", null, true);
        echo "<br/>
    ";
        // line 9
        if ( !twig_test_empty(call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array(($context["address"] ?? $this->getContext($context, "address")))))) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array(($context["address"] ?? $this->getContext($context, "address")))), "html", null, true);
            echo "<br/>
    ";
        }
        // line 12
        echo "    <i class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "countryCode", array())), "html", null, true);
        echo " flag\"></i>
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension')->translateCountryIsoCode($this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "countryCode", array()))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "postcode", array()), "html", null, true);
        echo "
</address>
";
        
        $__internal_05752fee8316bbbfa1511cdc81eaa3d981e43d37e0b03d09f4db3e3b70bf0f4b->leave($__internal_05752fee8316bbbfa1511cdc81eaa3d981e43d37e0b03d09f4db3e3b70bf0f4b_prof);

        
        $__internal_2624cf0fc63e6303f73d1eeb06daf6368795827a760fb3cad7ea6f9619af5255->leave($__internal_2624cf0fc63e6303f73d1eeb06daf6368795827a760fb3cad7ea6f9619af5255_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  63 => 12,  57 => 10,  55 => 9,  51 => 8,  47 => 7,  42 => 6,  36 => 4,  34 => 3,  28 => 2,  25 => 1,);
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
    <strong>{{ address.firstName }} {{ address.lastName }}</strong>
    {% if address.company %}
        {{ address.company }}<br/>
    {% endif %}
    {{ address.phoneNumber }}<br/>
    {{ address.street }}<br/>
    {{ address.city }}<br/>
    {% if address|sylius_province_name is not empty %}
        {{ address|sylius_province_name }}<br/>
    {% endif %}
    <i class=\"{{ address.countryCode|lower }} flag\"></i>
    {{ address.countryCode|sylius_country_name|upper }} {{ address.postcode }}
</address>
", "SyliusAdminBundle:Common:_address.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Common/_address.html.twig");
    }
}
