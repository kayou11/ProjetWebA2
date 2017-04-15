<?php

/* SyliusAdminBundle:Customer/Show:_header.html.twig */
class __TwigTemplate_28242e9e57d2272b0f6e8e07e9551c2a22cb8fec1be5fcd748e246a590623895 extends Twig_Template
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
        $__internal_24152ba02b0b8df25c709afd77f4a97d88de921ec14c6994c92dfae6742cc099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24152ba02b0b8df25c709afd77f4a97d88de921ec14c6994c92dfae6742cc099->enter($__internal_24152ba02b0b8df25c709afd77f4a97d88de921ec14c6994c92dfae6742cc099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_header.html.twig"));

        $__internal_5c3c6914d14f9f56cb5a2dd75d5e842076dd8d9076ee326d387e95f8101374a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3c6914d14f9f56cb5a2dd75d5e842076dd8d9076ee326d387e95f8101374a6->enter($__internal_5c3c6914d14f9f56cb5a2dd75d5e842076dd8d9076ee326d387e95f8101374a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_header.html.twig"));

        // line 1
        echo "<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            ";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["customer"] ?? null), "fullName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["customer"] ?? null), "fullName", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest_customer"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "
                    </div>
                    ";
        // line 11
        if ((null === $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "user", array()))) {
            // line 12
            echo "                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest"), "html", null, true);
            echo "
                            </span>
                        </div>
                    ";
        }
        // line 18
        echo "                </div>
            </div>
        </div>
    </h1>
</div>
";
        
        $__internal_24152ba02b0b8df25c709afd77f4a97d88de921ec14c6994c92dfae6742cc099->leave($__internal_24152ba02b0b8df25c709afd77f4a97d88de921ec14c6994c92dfae6742cc099_prof);

        
        $__internal_5c3c6914d14f9f56cb5a2dd75d5e842076dd8d9076ee326d387e95f8101374a6->leave($__internal_5c3c6914d14f9f56cb5a2dd75d5e842076dd8d9076ee326d387e95f8101374a6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  49 => 14,  45 => 12,  43 => 11,  38 => 9,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            {{ customer.fullName|default('sylius.ui.guest_customer'|trans) }}
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        {{ customer.email }}
                    </div>
                    {% if customer.user is null %}
                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> {{ 'sylius.ui.guest'|trans }}
                            </span>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </h1>
</div>
", "SyliusAdminBundle:Customer/Show:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_header.html.twig");
    }
}
