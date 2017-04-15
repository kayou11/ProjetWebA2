<?php

/* SyliusAdminBundle:Product/Index:_header.html.twig */
class __TwigTemplate_497427ac802127e831ed24044091d681511e908a3aa737bd4650e57db3bde312 extends Twig_Template
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
        $__internal_2aedb5cf6a0b34c83f26a4c3a8968a295257b1324465a04335ec42b563b555fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aedb5cf6a0b34c83f26a4c3a8968a295257b1324465a04335ec42b563b555fc->enter($__internal_2aedb5cf6a0b34c83f26a4c3a8968a295257b1324465a04335ec42b563b555fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_header.html.twig"));

        $__internal_da7876f818a9d27abb8630e8dabccf07d2cdd368516f343f9cf8ed845f5820e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7876f818a9d27abb8630e8dabccf07d2cdd368516f343f9cf8ed845f5820e9->enter($__internal_da7876f818a9d27abb8630e8dabccf07d2cdd368516f343f9cf8ed845f5820e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_header.html.twig"));

        // line 1
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "taxonId"), "method"))) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_taxon_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 3
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "taxonId"), "method"), "template" => "@SyliusAdmin/Product/Index/_taxonHeader.html.twig", "vars" => $this->getAttribute(            // line 5
($context["configuration"] ?? $this->getContext($context, "configuration")), "vars", array()))));
            // line 6
            echo "
";
        } else {
            // line 8
            echo "    <div class=\"column\">
        ";
            // line 9
            $context["header"] = (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), (($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array())))) : ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array()))));
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["headers"] ?? $this->getContext($context, "headers")), "default", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), 1 => (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cube")) : ("cube")), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_your_product_catalog")) : ("sylius.ui.manage_your_product_catalog")))), "method"), "html", null, true);
            echo "

        ";
            // line 12
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.header", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
            echo "

        ";
            // line 14
            $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Product/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Product/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:Product/Index:_header.html.twig", 14)->display($context);
            // line 15
            echo "    </div>
";
        }
        
        $__internal_2aedb5cf6a0b34c83f26a4c3a8968a295257b1324465a04335ec42b563b555fc->leave($__internal_2aedb5cf6a0b34c83f26a4c3a8968a295257b1324465a04335ec42b563b555fc_prof);

        
        $__internal_da7876f818a9d27abb8630e8dabccf07d2cdd368516f343f9cf8ed845f5820e9->leave($__internal_da7876f818a9d27abb8630e8dabccf07d2cdd368516f343f9cf8ed845f5820e9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  52 => 14,  47 => 12,  41 => 10,  39 => 9,  36 => 8,  32 => 6,  30 => 5,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.request.attributes.get('taxonId') is not null %}
    {{ render(url('sylius_admin_partial_taxon_show', {
        'id': app.request.attributes.get('taxonId'),
        'template': '@SyliusAdmin/Product/Index/_taxonHeader.html.twig',
        'vars': configuration.vars
    })) }}
{% else %}
    <div class=\"column\">
        {% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}
        {{ headers.default(header|trans, configuration.vars.icon|default('cube'), configuration.vars.subheader|default('sylius.ui.manage_your_product_catalog')|trans) }}

        {{ sonata_block_render_event('sylius.admin.product.index.header', {'resources': resources}) }}

        {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Product/Index/_breadcrumb.html.twig') %}
    </div>
{% endif %}
", "SyliusAdminBundle:Product/Index:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Index/_header.html.twig");
    }
}
