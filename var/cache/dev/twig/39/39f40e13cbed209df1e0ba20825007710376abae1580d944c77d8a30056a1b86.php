<?php

/* SyliusShopBundle:Email:userRegistration.html.twig */
class __TwigTemplate_4a301669ec126aa57d794bff659d68109fb52660908cebb0a0e33129a335de1e extends Twig_Template
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
        $__internal_6f63e28ce837da3d8cf9bcaa9eb647b79ee125a28a89dd98ef111e825d23cc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f63e28ce837da3d8cf9bcaa9eb647b79ee125a28a89dd98ef111e825d23cc72->enter($__internal_6f63e28ce837da3d8cf9bcaa9eb647b79ee125a28a89dd98ef111e825d23cc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:userRegistration.html.twig"));

        $__internal_a76f5e10b5ce848525161253774986783fce407da0a7627f01bd43dfa439d9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76f5e10b5ce848525161253774986783fce407da0a7627f01bd43dfa439d9e7->enter($__internal_a76f5e10b5ce848525161253774986783fce407da0a7627f01bd43dfa439d9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:userRegistration.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f63e28ce837da3d8cf9bcaa9eb647b79ee125a28a89dd98ef111e825d23cc72->leave($__internal_6f63e28ce837da3d8cf9bcaa9eb647b79ee125a28a89dd98ef111e825d23cc72_prof);

        
        $__internal_a76f5e10b5ce848525161253774986783fce407da0a7627f01bd43dfa439d9e7->leave($__internal_a76f5e10b5ce848525161253774986783fce407da0a7627f01bd43dfa439d9e7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_383f16d89a718c5e97ec6e75bb6d72e76c66ef05ff2d88ff7c54061700ae724c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383f16d89a718c5e97ec6e75bb6d72e76c66ef05ff2d88ff7c54061700ae724c->enter($__internal_383f16d89a718c5e97ec6e75bb6d72e76c66ef05ff2d88ff7c54061700ae724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_161985fc69a28f4f4b08d4f6a4d110596f94be87c1413349f763819e2b52de29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161985fc69a28f4f4b08d4f6a4d110596f94be87c1413349f763819e2b52de29->enter($__internal_161985fc69a28f4f4b08d4f6a4d110596f94be87c1413349f763819e2b52de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    User registration
";
        
        $__internal_161985fc69a28f4f4b08d4f6a4d110596f94be87c1413349f763819e2b52de29->leave($__internal_161985fc69a28f4f4b08d4f6a4d110596f94be87c1413349f763819e2b52de29_prof);

        
        $__internal_383f16d89a718c5e97ec6e75bb6d72e76c66ef05ff2d88ff7c54061700ae724c->leave($__internal_383f16d89a718c5e97ec6e75bb6d72e76c66ef05ff2d88ff7c54061700ae724c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d51bf4fe569067e824f2e7ef0f2d62a6b81ba0fc5679991e76eb333249d1633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d51bf4fe569067e824f2e7ef0f2d62a6b81ba0fc5679991e76eb333249d1633->enter($__internal_4d51bf4fe569067e824f2e7ef0f2d62a6b81ba0fc5679991e76eb333249d1633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35883ebf3a0ca7709de5f3535a2d567f20c1ecabddaea80dcb51af402f83222b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35883ebf3a0ca7709de5f3535a2d567f20c1ecabddaea80dcb51af402f83222b->enter($__internal_35883ebf3a0ca7709de5f3535a2d567f20c1ecabddaea80dcb51af402f83222b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "        Welcome to our store!
        <br/><br/>
        You have just been registered.
        <br/>
        Thank you ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo ".
    ";
        
        $__internal_35883ebf3a0ca7709de5f3535a2d567f20c1ecabddaea80dcb51af402f83222b->leave($__internal_35883ebf3a0ca7709de5f3535a2d567f20c1ecabddaea80dcb51af402f83222b_prof);

        
        $__internal_4d51bf4fe569067e824f2e7ef0f2d62a6b81ba0fc5679991e76eb333249d1633->leave($__internal_4d51bf4fe569067e824f2e7ef0f2d62a6b81ba0fc5679991e76eb333249d1633_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:userRegistration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  73 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
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
    User registration
{% endblock %}

{% block body %}
    {% autoescape %}
        Welcome to our store!
        <br/><br/>
        You have just been registered.
        <br/>
        Thank you {{ user.username }}.
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:userRegistration.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/userRegistration.html.twig");
    }
}
