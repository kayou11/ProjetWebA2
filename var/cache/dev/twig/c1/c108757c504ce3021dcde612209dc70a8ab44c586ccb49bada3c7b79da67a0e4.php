<?php

/* SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig */
class __TwigTemplate_9db20cf911d7f7e08ec2d466556922e537c156b71cefe43eb8488bf1a44ab488 extends Twig_Template
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
        $__internal_07e11e94a2bf0d82dfc507106b44479fdedae3033cbfd71dde037690f37061e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e11e94a2bf0d82dfc507106b44479fdedae3033cbfd71dde037690f37061e2->enter($__internal_07e11e94a2bf0d82dfc507106b44479fdedae3033cbfd71dde037690f37061e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig"));

        $__internal_2c91a08d401dd25ddba4c15119d0bc8711b9b724bd2ce8e153cbc7d0e4e4a0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c91a08d401dd25ddba4c15119d0bc8711b9b724bd2ce8e153cbc7d0e4e4a0e2->enter($__internal_2c91a08d401dd25ddba4c15119d0bc8711b9b724bd2ce8e153cbc7d0e4e4a0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig"));

        // line 1
        echo "<div class=\"ui labeled icon top right floating dropdown button primary link\">
    <i class=\"plus icon\"></i>
    <span class=\"text\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
        echo "</span>
    <div class=\"menu\">
        <div class=\"header\">
            <i class=\"cube icon\"></i>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.type"), "html", null, true);
        echo "
        </div>
        <div class=\"divider\"></div>
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_get_payment_gateways"));
        echo "
    </div>
</div>
";
        
        $__internal_07e11e94a2bf0d82dfc507106b44479fdedae3033cbfd71dde037690f37061e2->leave($__internal_07e11e94a2bf0d82dfc507106b44479fdedae3033cbfd71dde037690f37061e2_prof);

        
        $__internal_2c91a08d401dd25ddba4c15119d0bc8711b9b724bd2ce8e153cbc7d0e4e4a0e2->leave($__internal_2c91a08d401dd25ddba4c15119d0bc8711b9b724bd2ce8e153cbc7d0e4e4a0e2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui labeled icon top right floating dropdown button primary link\">
    <i class=\"plus icon\"></i>
    <span class=\"text\">{{ 'sylius.ui.create'|trans }}</span>
    <div class=\"menu\">
        <div class=\"header\">
            <i class=\"cube icon\"></i>
            {{ 'sylius.ui.type'|trans }}
        </div>
        <div class=\"divider\"></div>
        {{ render(url('sylius_admin_get_payment_gateways')) }}
    </div>
</div>
", "SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PaymentMethod/Grid/Action/create.html.twig");
    }
}
