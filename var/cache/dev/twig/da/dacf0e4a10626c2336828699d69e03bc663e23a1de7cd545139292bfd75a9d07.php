<?php

/* SyliusAdminBundle:Customer:_info.html.twig */
class __TwigTemplate_b2e7d717c3e7416c78c4976224fc4355bd27e91f5398191052b9b18a9c2d2a4c extends Twig_Template
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
        $__internal_0120627e4bb1f76d61013a3f8e24da6bab1be23f885069290ac17d1d29a33c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0120627e4bb1f76d61013a3f8e24da6bab1be23f885069290ac17d1d29a33c40->enter($__internal_0120627e4bb1f76d61013a3f8e24da6bab1be23f885069290ac17d1d29a33c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:_info.html.twig"));

        $__internal_90191963198d943944c752b4d28ff0f5ed487a48df240cff289998d3598a49b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90191963198d943944c752b4d28ff0f5ed487a48df240cff289998d3598a49b0->enter($__internal_90191963198d943944c752b4d28ff0f5ed487a48df240cff289998d3598a49b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:_info.html.twig"));

        // line 1
        echo "<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_show", array("id" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()))), "html", null, true);
        echo "\" class=\"header sylius-customer-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "fullName", array()), "html", null, true);
        echo "</a>
        <div class=\"meta\">
            <span class=\"date\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "createdAt", array()));
        echo ".</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "\">
            <i class=\"envelope icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "
        </a>
    </div>
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "phoneNumber", array()))) {
            // line 15
            echo "        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "phoneNumber", array()), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute(($context["order"] ?? null), "customerIp", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerIp", array())))) {
            // line 23
            echo "        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerIp", array()), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 30
        echo "</div>
";
        
        $__internal_0120627e4bb1f76d61013a3f8e24da6bab1be23f885069290ac17d1d29a33c40->leave($__internal_0120627e4bb1f76d61013a3f8e24da6bab1be23f885069290ac17d1d29a33c40_prof);

        
        $__internal_90191963198d943944c752b4d28ff0f5ed487a48df240cff289998d3598a49b0->leave($__internal_90191963198d943944c752b4d28ff0f5ed487a48df240cff289998d3598a49b0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  78 => 26,  73 => 23,  70 => 22,  63 => 18,  58 => 15,  56 => 14,  50 => 11,  45 => 9,  36 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"{{ path('sylius_admin_customer_show', {'id': customer.id}) }}\" class=\"header sylius-customer-name\">{{ customer.fullName }}</a>
        <div class=\"meta\">
            <span class=\"date\">{{ 'sylius.ui.customer_since'|trans }} {{ customer.createdAt|format_date }}.</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:{{ customer.email }}\">
            <i class=\"envelope icon\"></i>
            {{ customer.email }}
        </a>
    </div>
    {% if customer.phoneNumber is not empty %}
        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            {{ customer.phoneNumber }}
        </span>
        </div>
    {% endif %}
    {% if order.customerIp is defined and order.customerIp is not empty %}
        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            {{ order.customerIp }}
        </span>
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Customer:_info.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/_info.html.twig");
    }
}
