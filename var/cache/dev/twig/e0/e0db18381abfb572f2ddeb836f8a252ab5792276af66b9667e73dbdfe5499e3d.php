<?php

/* SyliusShopBundle:Email:verification.html.twig */
class __TwigTemplate_4ccb8008310394f5b8fe89e03f4ac0c6efc92f5c73ae6f80a03f3a4b9a06073c extends Twig_Template
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
        $__internal_e970032bc0d1980ce93538f12e3829f9fbee470a3ce89a71b2b21a981dfe8c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e970032bc0d1980ce93538f12e3829f9fbee470a3ce89a71b2b21a981dfe8c60->enter($__internal_e970032bc0d1980ce93538f12e3829f9fbee470a3ce89a71b2b21a981dfe8c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:verification.html.twig"));

        $__internal_2cfad5205a34000e9f68fc701463fd7f22d7d46ffc8919da3098786783d5ebe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfad5205a34000e9f68fc701463fd7f22d7d46ffc8919da3098786783d5ebe0->enter($__internal_2cfad5205a34000e9f68fc701463fd7f22d7d46ffc8919da3098786783d5ebe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:verification.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e970032bc0d1980ce93538f12e3829f9fbee470a3ce89a71b2b21a981dfe8c60->leave($__internal_e970032bc0d1980ce93538f12e3829f9fbee470a3ce89a71b2b21a981dfe8c60_prof);

        
        $__internal_2cfad5205a34000e9f68fc701463fd7f22d7d46ffc8919da3098786783d5ebe0->leave($__internal_2cfad5205a34000e9f68fc701463fd7f22d7d46ffc8919da3098786783d5ebe0_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ea48dc3da8c66caca0f4203cd39510b4de59a0b91c78189b47eb764c850ed34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea48dc3da8c66caca0f4203cd39510b4de59a0b91c78189b47eb764c850ed34c->enter($__internal_ea48dc3da8c66caca0f4203cd39510b4de59a0b91c78189b47eb764c850ed34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9a72c347af48042a044d8d7350bdb03d0f16f6b3d6cf7c0e9945bbc8b1ea5c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a72c347af48042a044d8d7350bdb03d0f16f6b3d6cf7c0e9945bbc8b1ea5c28->enter($__internal_9a72c347af48042a044d8d7350bdb03d0f16f6b3d6cf7c0e9945bbc8b1ea5c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Email address verification
";
        
        $__internal_9a72c347af48042a044d8d7350bdb03d0f16f6b3d6cf7c0e9945bbc8b1ea5c28->leave($__internal_9a72c347af48042a044d8d7350bdb03d0f16f6b3d6cf7c0e9945bbc8b1ea5c28_prof);

        
        $__internal_ea48dc3da8c66caca0f4203cd39510b4de59a0b91c78189b47eb764c850ed34c->leave($__internal_ea48dc3da8c66caca0f4203cd39510b4de59a0b91c78189b47eb764c850ed34c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e655cc177c2439cecce40fc46fbbc8876e178f6f8b5790728aca45939100e5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e655cc177c2439cecce40fc46fbbc8876e178f6f8b5790728aca45939100e5e4->enter($__internal_e655cc177c2439cecce40fc46fbbc8876e178f6f8b5790728aca45939100e5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ce0291b747d8e2c3de16acb873ed4bb426c503b805ef926cd0e8c490c346d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce0291b747d8e2c3de16acb873ed4bb426c503b805ef926cd0e8c490c346d97->enter($__internal_8ce0291b747d8e2c3de16acb873ed4bb426c503b805ef926cd0e8c490c346d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ce0291b747d8e2c3de16acb873ed4bb426c503b805ef926cd0e8c490c346d97->leave($__internal_8ce0291b747d8e2c3de16acb873ed4bb426c503b805ef926cd0e8c490c346d97_prof);

        
        $__internal_e655cc177c2439cecce40fc46fbbc8876e178f6f8b5790728aca45939100e5e4->leave($__internal_e655cc177c2439cecce40fc46fbbc8876e178f6f8b5790728aca45939100e5e4_prof);

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
", "SyliusShopBundle:Email:verification.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/verification.html.twig");
    }
}
