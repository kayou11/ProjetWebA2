<?php

/* SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig */
class __TwigTemplate_21fc9d26ca5761b5ec7bd0f1e2f707d191f1b8b34111f2c75fb52aff3e5ad26e extends Twig_Template
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
        $__internal_3d12f1df0a67cbaf56b5b654d75306047c89304fc27541585c3ab15cfba9be34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d12f1df0a67cbaf56b5b654d75306047c89304fc27541585c3ab15cfba9be34->enter($__internal_3d12f1df0a67cbaf56b5b654d75306047c89304fc27541585c3ab15cfba9be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig"));

        $__internal_77ad9dfd5c6899cb1fe50dd70d9f5cf656d9326f4e52c1f5ae8a1c96143cb347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ad9dfd5c6899cb1fe50dd70d9f5cf656d9326f4e52c1f5ae8a1c96143cb347->enter($__internal_77ad9dfd5c6899cb1fe50dd70d9f5cf656d9326f4e52c1f5ae8a1c96143cb347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig"));

        // line 1
        echo "<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "</a>
        ";
        // line 9
        if ( !(null === $this->getAttribute(($context["method"] ?? $this->getContext($context, "method")), "description", array()))) {
            // line 10
            echo "            <div class=\"description\">
                <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["method"] ?? $this->getContext($context, "method")), "description", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 14
        echo "    </div>
</div>
";
        
        $__internal_3d12f1df0a67cbaf56b5b654d75306047c89304fc27541585c3ab15cfba9be34->leave($__internal_3d12f1df0a67cbaf56b5b654d75306047c89304fc27541585c3ab15cfba9be34_prof);

        
        $__internal_77ad9dfd5c6899cb1fe50dd70d9f5cf656d9326f4e52c1f5ae8a1c96143cb347->leave($__internal_77ad9dfd5c6899cb1fe50dd70d9f5cf656d9326f4e52c1f5ae8a1c96143cb347_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  46 => 11,  43 => 10,  41 => 9,  37 => 8,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            {{ form_widget(form) }}
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">{{ form_label(form) }}</a>
        {% if method.description is not null %}
            <div class=\"description\">
                <p>{{ method.description }}</p>
            </div>
        {% endif %}
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_choice.html.twig");
    }
}
