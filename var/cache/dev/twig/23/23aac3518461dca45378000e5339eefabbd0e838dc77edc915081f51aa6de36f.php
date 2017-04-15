<?php

/* SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig */
class __TwigTemplate_bf899783e031ba253ebf17bd5d408af59e470d7ae69c17b362de174dcad5c63f extends Twig_Template
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
        $__internal_91f34ddaad431a7ebc8376fa523b29c956ba33b462f1f3ae7d5f3f539a2217f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f34ddaad431a7ebc8376fa523b29c956ba33b462f1f3ae7d5f3f539a2217f4->enter($__internal_91f34ddaad431a7ebc8376fa523b29c956ba33b462f1f3ae7d5f3f539a2217f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig"));

        $__internal_c77e88fdb1ee29e69ab0bfbabe7e2a317560aee004517ac54edec047c4006729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77e88fdb1ee29e69ab0bfbabe7e2a317560aee004517ac54edec047c4006729->enter($__internal_c77e88fdb1ee29e69ab0bfbabe7e2a317560aee004517ac54edec047c4006729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_get_attribute_types"));
        echo "
    </div>
</div>
";
        
        $__internal_91f34ddaad431a7ebc8376fa523b29c956ba33b462f1f3ae7d5f3f539a2217f4->leave($__internal_91f34ddaad431a7ebc8376fa523b29c956ba33b462f1f3ae7d5f3f539a2217f4_prof);

        
        $__internal_c77e88fdb1ee29e69ab0bfbabe7e2a317560aee004517ac54edec047c4006729->leave($__internal_c77e88fdb1ee29e69ab0bfbabe7e2a317560aee004517ac54edec047c4006729_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig";
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
        {{ render(url('sylius_admin_get_attribute_types')) }}
    </div>
</div>
", "SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductAttribute/Grid/Action/create.html.twig");
    }
}
