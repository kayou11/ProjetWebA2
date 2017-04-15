<?php

/* @SyliusShop/Product/Show/Tabs/_attributes.html.twig */
class __TwigTemplate_85232be3c7dce58e9d7fff6259a69d5a0205240498036d7a9e8692df6c781d7d extends Twig_Template
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
        $__internal_864cf0369ec6b7badba4e0a065fe4ebc3dba3e2f1d6a56f4fcdad2c3ce4e4299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864cf0369ec6b7badba4e0a065fe4ebc3dba3e2f1d6a56f4fcdad2c3ce4e4299->enter($__internal_864cf0369ec6b7badba4e0a065fe4ebc3dba3e2f1d6a56f4fcdad2c3ce4e4299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_attributes.html.twig"));

        $__internal_9b7105203a801e025a516839cc73dcb8a433bf952eb5aaab1cd18584050f50f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7105203a801e025a516839cc73dcb8a433bf952eb5aaab1cd18584050f50f2->enter($__internal_9b7105203a801e025a516839cc73dcb8a433bf952eb5aaab1cd18584050f50f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_attributes.html.twig"));

        // line 1
        echo "<div class=\"ui bottom attached tab segment\" data-tab=\"attributes\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_attributes", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

    <table id=\"sylius-product-attributes\" class=\"ui definition table\">
        <tbody>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getAttributesByLocale", array(0 => $this->getAttribute($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "request", array()), "locale", array()), 1 => $this->getAttribute($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "request", array()), "defaultLocale", array())), "method"), "attribute.position"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 7
            echo "            <tr>
                <td class=\"sylius-product-attribute-name\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"sylius-product-attribute-value\">
                    ";
            // line 10
            $this->loadTemplate(array(0 => (("SyliusAttributeBundle:Types:" . $this->getAttribute($this->getAttribute($context["attribute"], "attribute", array()), "type", array())) . ".html.twig"), 1 => "SyliusAttributeBundle:Types:default.html.twig"), "@SyliusShop/Product/Show/Tabs/_attributes.html.twig", 10)->display(array_merge($context, array("attribute" => $context["attribute"])));
            // line 11
            echo "                </td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_864cf0369ec6b7badba4e0a065fe4ebc3dba3e2f1d6a56f4fcdad2c3ce4e4299->leave($__internal_864cf0369ec6b7badba4e0a065fe4ebc3dba3e2f1d6a56f4fcdad2c3ce4e4299_prof);

        
        $__internal_9b7105203a801e025a516839cc73dcb8a433bf952eb5aaab1cd18584050f50f2->leave($__internal_9b7105203a801e025a516839cc73dcb8a433bf952eb5aaab1cd18584050f50f2_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  62 => 11,  60 => 10,  55 => 8,  52 => 7,  35 => 6,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui bottom attached tab segment\" data-tab=\"attributes\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_attributes', {'product': product}) }}

    <table id=\"sylius-product-attributes\" class=\"ui definition table\">
        <tbody>
        {% for attribute in product.getAttributesByLocale(configuration.request.locale, configuration.request.defaultLocale)|sort_by('attribute.position') %}
            <tr>
                <td class=\"sylius-product-attribute-name\">{{ attribute.name }}</td>
                <td class=\"sylius-product-attribute-value\">
                    {% include [('SyliusAttributeBundle:Types:'~attribute.attribute.type~'.html.twig'), 'SyliusAttributeBundle:Types:default.html.twig'] with {'attribute': attribute} %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "@SyliusShop/Product/Show/Tabs/_attributes.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_attributes.html.twig");
    }
}
