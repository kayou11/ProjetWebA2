<?php

/* SyliusShopBundle:Taxon:_breadcrumb.html.twig */
class __TwigTemplate_3e48f5a182fd3e703a9eaee3bd47af95c73a0a71e3726524a1e2992f3b63dc61 extends Twig_Template
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
        $__internal_ea5e6bf609620832073cdd760c53b4066d51241ce132c1226b0f01104ef33ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5e6bf609620832073cdd760c53b4066d51241ce132c1226b0f01104ef33ee2->enter($__internal_ea5e6bf609620832073cdd760c53b4066d51241ce132c1226b0f01104ef33ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_breadcrumb.html.twig"));

        $__internal_bcc0515663e050d470aa5503db3f9b8e7d01110c1e070e572fcbecd8ebd3b522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc0515663e050d470aa5503db3f9b8e7d01110c1e070e572fcbecd8ebd3b522->enter($__internal_bcc0515663e050d470aa5503db3f9b8e7d01110c1e070e572fcbecd8ebd3b522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_breadcrumb.html.twig"));

        // line 1
        $context["parents"] = twig_reverse_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "parents", array()));
        // line 2
        echo "
<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parents"] ?? $this->getContext($context, "parents")));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 7
            echo "        ";
            if ($this->getAttribute($context["parent"], "isRoot", array(), "method")) {
                // line 8
                echo "            <div class=\"section\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "name", array()), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => $this->getAttribute($context["parent"], "slug", array()), "_locale" => $this->getAttribute($this->getAttribute($context["parent"], "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "name", array()), "html", null, true);
                echo "</a>
        ";
            }
            // line 12
            echo "    <div class=\"divider\"> / </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <div class=\"active section\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_ea5e6bf609620832073cdd760c53b4066d51241ce132c1226b0f01104ef33ee2->leave($__internal_ea5e6bf609620832073cdd760c53b4066d51241ce132c1226b0f01104ef33ee2_prof);

        
        $__internal_bcc0515663e050d470aa5503db3f9b8e7d01110c1e070e572fcbecd8ebd3b522->leave($__internal_bcc0515663e050d470aa5503db3f9b8e7d01110c1e070e572fcbecd8ebd3b522_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  59 => 12,  51 => 10,  45 => 8,  42 => 7,  38 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set parents = taxon.parents|reverse %}

<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    {% for parent in parents %}
        {% if parent.isRoot() %}
            <div class=\"section\">{{ parent.name }}</div>
        {% else %}
            <a href=\"{{ path('sylius_shop_product_index', {'slug': parent.slug, '_locale': parent.translation.locale}) }}\" class=\"section\">{{ parent.name }}</a>
        {% endif %}
    <div class=\"divider\"> / </div>
    {% endfor %}
    <div class=\"active section\">{{ taxon.name }}</div>
</div>
", "SyliusShopBundle:Taxon:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_breadcrumb.html.twig");
    }
}
