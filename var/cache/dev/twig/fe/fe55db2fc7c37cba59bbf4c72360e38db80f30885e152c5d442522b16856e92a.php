<?php

/* SyliusAdminBundle:Product/Tab:_taxonomy.html.twig */
class __TwigTemplate_9c605970dd5d012fd0a9d94a69a9513eeaba3a66e1e3f53e2374d1013587415f extends Twig_Template
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
        $__internal_0192025aacca0e4a5550d82c33324beb388adb31f2dc197b34095538209b2797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0192025aacca0e4a5550d82c33324beb388adb31f2dc197b34095538209b2797->enter($__internal_0192025aacca0e4a5550d82c33324beb388adb31f2dc197b34095538209b2797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_taxonomy.html.twig"));

        $__internal_12b3010a2a0ade71348aefde529c2b00f9100b3b5eecf9841a562c6c5e5e9a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b3010a2a0ade71348aefde529c2b00f9100b3b5eecf9841a562c6c5e5e9a38->enter($__internal_12b3010a2a0ade71348aefde529c2b00f9100b3b5eecf9841a562c6c5e5e9a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_taxonomy.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxonomy"), "html", null, true);
        echo "</h3>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mainTaxon", array()), 'row');
        echo "

    <h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.product_taxon"), "html", null, true);
        echo "</h4>
    <div id=\"sylius-product-taxonomy-tree\"
         data-taxon-root-nodes-url=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_root_nodes");
        echo "\"
         data-taxon-leafs-url=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_leafs");
        echo "\"
    >
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "productTaxons", array()), 'widget');
        echo "
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
    </div>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . ($context["action"] ?? $this->getContext($context, "action"))) . ".tab_taxonomy"), array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "
</div>
";
        
        $__internal_0192025aacca0e4a5550d82c33324beb388adb31f2dc197b34095538209b2797->leave($__internal_0192025aacca0e4a5550d82c33324beb388adb31f2dc197b34095538209b2797_prof);

        
        $__internal_12b3010a2a0ade71348aefde529c2b00f9100b3b5eecf9841a562c6c5e5e9a38->leave($__internal_12b3010a2a0ade71348aefde529c2b00f9100b3b5eecf9841a562c6c5e5e9a38_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  51 => 10,  46 => 8,  42 => 7,  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.taxonomy'|trans }}</h3>
    {{ form_row(form.mainTaxon) }}

    <h4>{{ 'sylius.ui.product_taxon'|trans }}</h4>
    <div id=\"sylius-product-taxonomy-tree\"
         data-taxon-root-nodes-url=\"{{ path('sylius_admin_ajax_taxon_root_nodes') }}\"
         data-taxon-leafs-url=\"{{ path('sylius_admin_ajax_taxon_leafs') }}\"
    >
        {{ form_widget(form.productTaxons) }}
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_taxonomy', {'form': form}) }}
</div>
", "SyliusAdminBundle:Product/Tab:_taxonomy.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_taxonomy.html.twig");
    }
}
