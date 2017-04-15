<?php

/* SyliusAdminBundle:Customer/Show:_address.html.twig */
class __TwigTemplate_d7160836bdcd9a7130774619b345964c79de3620bf27f237ed8e11c32be6a850 extends Twig_Template
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
        $__internal_383405d7596bcc50ffcad99072d42dfd90fdc04a797f536318ba205a5b93943b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383405d7596bcc50ffcad99072d42dfd90fdc04a797f536318ba205a5b93943b->enter($__internal_383405d7596bcc50ffcad99072d42dfd90fdc04a797f536318ba205a5b93943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_address.html.twig"));

        $__internal_f55fcd52e8f2c851d0d1e583b079a907885ab9e51f818cfc42d3ab1879ad000e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55fcd52e8f2c851d0d1e583b079a907885ab9e51f818cfc42d3ab1879ad000e->enter($__internal_f55fcd52e8f2c851d0d1e583b079a907885ab9e51f818cfc42d3ab1879ad000e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_address.html.twig"));

        // line 1
        echo "<div class=\"eight wide column\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_address", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    <h4 class=\"ui top attached styled header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.default_address"), "html", null, true);
        echo "
    </h4>

    <div class=\"ui attached segment\" id=\"default-address\">
        ";
        // line 9
        if ( !(null === $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "defaultAddress", array()))) {
            // line 10
            echo "            ";
            $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "SyliusAdminBundle:Customer/Show:_address.html.twig", 10)->display(array_merge($context, array("address" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "defaultAddress", array()))));
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.this_customer_does_not_have_a_default_address"), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </div>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_address", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
</div>
";
        
        $__internal_383405d7596bcc50ffcad99072d42dfd90fdc04a797f536318ba205a5b93943b->leave($__internal_383405d7596bcc50ffcad99072d42dfd90fdc04a797f536318ba205a5b93943b_prof);

        
        $__internal_f55fcd52e8f2c851d0d1e583b079a907885ab9e51f818cfc42d3ab1879ad000e->leave($__internal_f55fcd52e8f2c851d0d1e583b079a907885ab9e51f818cfc42d3ab1879ad000e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  55 => 14,  49 => 12,  46 => 11,  43 => 10,  41 => 9,  34 => 5,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"eight wide column\">
    {{ sonata_block_render_event('sylius.admin.customer.show.before_address', {'resource': resource}) }}

    <h4 class=\"ui top attached styled header\">
        {{ 'sylius.ui.default_address'|trans }}
    </h4>

    <div class=\"ui attached segment\" id=\"default-address\">
        {% if customer.defaultAddress is not null %}
            {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': customer.defaultAddress} %}
        {% else %}
            {{ 'sylius.ui.this_customer_does_not_have_a_default_address'|trans }}
        {% endif %}
    </div>

    {{ sonata_block_render_event('sylius.admin.customer.show.after_address', {'resource': resource}) }}
</div>
", "SyliusAdminBundle:Customer/Show:_address.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_address.html.twig");
    }
}
