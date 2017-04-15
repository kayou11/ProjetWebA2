<?php

/* SyliusShopBundle:Email:verification.html.twig */
class __TwigTemplate_37e59116191aa0f2897a25d8cabd268202807d848f9e8ba13e6281bf360562ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b03fff5bbbf664dca9bd196b67c3a3bbea5b5d4cc4aa866c19a3a19314950b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b03fff5bbbf664dca9bd196b67c3a3bbea5b5d4cc4aa866c19a3a19314950b7->enter($__internal_4b03fff5bbbf664dca9bd196b67c3a3bbea5b5d4cc4aa866c19a3a19314950b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:verification.html.twig"));

        $__internal_40aa0858df1450017d0b91234c064540508b31d1f98a7255b8fd301102c1d2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40aa0858df1450017d0b91234c064540508b31d1f98a7255b8fd301102c1d2b6->enter($__internal_40aa0858df1450017d0b91234c064540508b31d1f98a7255b8fd301102c1d2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:verification.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4b03fff5bbbf664dca9bd196b67c3a3bbea5b5d4cc4aa866c19a3a19314950b7->leave($__internal_4b03fff5bbbf664dca9bd196b67c3a3bbea5b5d4cc4aa866c19a3a19314950b7_prof);

        
        $__internal_40aa0858df1450017d0b91234c064540508b31d1f98a7255b8fd301102c1d2b6->leave($__internal_40aa0858df1450017d0b91234c064540508b31d1f98a7255b8fd301102c1d2b6_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c2700b0b082f108265dd85fab4b2b089a16cb4d9fd2521eab1773fdd31040a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2700b0b082f108265dd85fab4b2b089a16cb4d9fd2521eab1773fdd31040a8e->enter($__internal_c2700b0b082f108265dd85fab4b2b089a16cb4d9fd2521eab1773fdd31040a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c32635d6ca64df4d2dd655e0139a3b1c920a56ca0a37e74b899db5231b972bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32635d6ca64df4d2dd655e0139a3b1c920a56ca0a37e74b899db5231b972bb2->enter($__internal_c32635d6ca64df4d2dd655e0139a3b1c920a56ca0a37e74b899db5231b972bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Email address verification
";
        
        $__internal_c32635d6ca64df4d2dd655e0139a3b1c920a56ca0a37e74b899db5231b972bb2->leave($__internal_c32635d6ca64df4d2dd655e0139a3b1c920a56ca0a37e74b899db5231b972bb2_prof);

        
        $__internal_c2700b0b082f108265dd85fab4b2b089a16cb4d9fd2521eab1773fdd31040a8e->leave($__internal_c2700b0b082f108265dd85fab4b2b089a16cb4d9fd2521eab1773fdd31040a8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a557d354a3bb9ef3eb98915f302b755ab083a2c7c175964e7e97862feb3ff279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a557d354a3bb9ef3eb98915f302b755ab083a2c7c175964e7e97862feb3ff279->enter($__internal_a557d354a3bb9ef3eb98915f302b755ab083a2c7c175964e7e97862feb3ff279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a85189cef43538480d8f5763801cc9ba96f46e464b44e8bb1f660dd28da94405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85189cef43538480d8f5763801cc9ba96f46e464b44e8bb1f660dd28da94405->enter($__internal_a85189cef43538480d8f5763801cc9ba96f46e464b44e8bb1f660dd28da94405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context["url"] = (( !(null === $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "hostname", array()))) ? ((("http://" . $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "hostname", array())) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_user_verification", array("token" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "emailVerificationToken", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_user_verification", array("token" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "emailVerificationToken", array())))));
        // line 7
        echo "    ";
        // line 8
        echo "        To verify your email address - please visit ";
        echo ($context["url"] ?? $this->getContext($context, "url"));
        echo "
    ";
        
        $__internal_a85189cef43538480d8f5763801cc9ba96f46e464b44e8bb1f660dd28da94405->leave($__internal_a85189cef43538480d8f5763801cc9ba96f46e464b44e8bb1f660dd28da94405_prof);

        
        $__internal_a557d354a3bb9ef3eb98915f302b755ab083a2c7c175964e7e97862feb3ff279->leave($__internal_a557d354a3bb9ef3eb98915f302b755ab083a2c7c175964e7e97862feb3ff279_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:verification.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  74 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    Email address verification
{% endblock %}

{% block body %}
    {% set url = channel.hostname is not null ? 'http://' ~ channel.hostname ~ path('sylius_shop_user_verification', { 'token': user.emailVerificationToken}) : url('sylius_shop_user_verification', { 'token': user.emailVerificationToken}) %}
    {% autoescape %}
        To verify your email address - please visit {{ url|raw }}
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:verification.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/verification.html.twig");
    }
}
