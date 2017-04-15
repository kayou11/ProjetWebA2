<?php

/* SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig */
class __TwigTemplate_844ebe32fbb04d53d253f646e87368280bec270d8172a69a2c94d7af1dced349 extends Twig_Template
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
        $__internal_1a662575ea4b79814f6804316ebf65a3a68c568682569166c813554be32812dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a662575ea4b79814f6804316ebf65a3a68c568682569166c813554be32812dc->enter($__internal_1a662575ea4b79814f6804316ebf65a3a68c568682569166c813554be32812dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig"));

        $__internal_317327319d89b83e244888278fa13fe47312a0f7510fa6244290a89ae665e86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317327319d89b83e244888278fa13fe47312a0f7510fa6244290a89ae665e86d->enter($__internal_317327319d89b83e244888278fa13fe47312a0f7510fa6244290a89ae665e86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig"));

        // line 1
        echo "<form class=\"sylius-update-product-taxons\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_taxons_update_position");
        echo "\" data-csrf-token=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("update-product-taxon-position"), "html", null, true);
        echo "\">
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_positions"), "html", null, true);
        echo "
    </button>
</form>
";
        
        $__internal_1a662575ea4b79814f6804316ebf65a3a68c568682569166c813554be32812dc->leave($__internal_1a662575ea4b79814f6804316ebf65a3a68c568682569166c813554be32812dc_prof);

        
        $__internal_317327319d89b83e244888278fa13fe47312a0f7510fa6244290a89ae665e86d->leave($__internal_317327319d89b83e244888278fa13fe47312a0f7510fa6244290a89ae665e86d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"sylius-update-product-taxons\" action=\"{{ path('sylius_admin_ajax_product_taxons_update_position') }}\" data-csrf-token=\"{{ csrf_token('update-product-taxon-position') }}\">
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        {{ 'sylius.ui.save_positions'|trans }}
    </button>
</form>
", "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Grid/Action/updatePositions.html.twig");
    }
}
