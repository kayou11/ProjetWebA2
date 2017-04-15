<?php

/* SyliusShopBundle:Common/Form:_login.html.twig */
class __TwigTemplate_7e4c103bb4f6f555b509601ce88aec776ba2e5af7f6f6b6325e2b5babc56aa99 extends Twig_Template
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
        $__internal_34304d17f3d2acdcb69fac1f0c283f8fc41a27f3425cc392719f244722be4060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34304d17f3d2acdcb69fac1f0c283f8fc41a27f3425cc392719f244722be4060->enter($__internal_34304d17f3d2acdcb69fac1f0c283f8fc41a27f3425cc392719f244722be4060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_login.html.twig"));

        $__internal_afb1da5b2dd8fe1032be064d934d369dba414d069698ff1b0a86a3d89878f917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb1da5b2dd8fe1032be064d934d369dba414d069698ff1b0a86a3d89878f917->enter($__internal_afb1da5b2dd8fe1032be064d934d369dba414d069698ff1b0a86a3d89878f917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_login.html.twig"));

        // line 1
        echo "<div class=\"one field\" id=\"sylius-api-login\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_ajax_user_check_action"))));
        echo "

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.password"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" data-url=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login_check");
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sign_in"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"ui red fluid top pointing basic label hidden sylius-validation-error\" id=\"sylius-api-validation-error\">
    </div>
</div>
";
        
        $__internal_34304d17f3d2acdcb69fac1f0c283f8fc41a27f3425cc392719f244722be4060->leave($__internal_34304d17f3d2acdcb69fac1f0c283f8fc41a27f3425cc392719f244722be4060_prof);

        
        $__internal_afb1da5b2dd8fe1032be064d934d369dba414d069698ff1b0a86a3d89878f917->leave($__internal_afb1da5b2dd8fe1032be064d934d369dba414d069698ff1b0a86a3d89878f917_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Form:_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  42 => 7,  38 => 6,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"one field\" id=\"sylius-api-login\">
    {{ form_errors(form.email) }}
    {{ form_row(form.email, {'attr': {'data-url': path('sylius_shop_ajax_user_check_action')}}) }}

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"{{ 'sylius.ui.password'|trans }}\">
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" data-url=\"{{ path('sylius_shop_login_check') }}\">
            {{ 'sylius.ui.sign_in'|trans }}
        </a>
    </div>
    <div class=\"ui red fluid top pointing basic label hidden sylius-validation-error\" id=\"sylius-api-validation-error\">
    </div>
</div>
", "SyliusShopBundle:Common/Form:_login.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Form/_login.html.twig");
    }
}
