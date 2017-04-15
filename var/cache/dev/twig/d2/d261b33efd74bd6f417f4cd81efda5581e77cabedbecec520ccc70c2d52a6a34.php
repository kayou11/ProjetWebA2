<?php

/* SyliusAdminBundle:Product/Tab:_associations.html.twig */
class __TwigTemplate_d6a7843fbc2924702d6667246e6d0769c83787748ff6cd0bd10f09004ddc11c3 extends Twig_Template
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
        $__internal_cab312200d375518546e18b64d6bf5a90f53b06e5baa2a7f5bad1119e207d2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab312200d375518546e18b64d6bf5a90f53b06e5baa2a7f5bad1119e207d2de->enter($__internal_cab312200d375518546e18b64d6bf5a90f53b06e5baa2a7f5bad1119e207d2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_associations.html.twig"));

        $__internal_75aa12d869b7cb1aaa4c70937f54ea825cc6f7bf9e18572b38db6c38f3ee49cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75aa12d869b7cb1aaa4c70937f54ea825cc6f7bf9e18572b38db6c38f3ee49cf->enter($__internal_75aa12d869b7cb1aaa4c70937f54ea825cc6f7bf9e18572b38db6c38f3ee49cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_associations.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.associations"), "html", null, true);
        echo "</h3>

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "associations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["associationForm"]) {
            // line 5
            echo "        <div class=\"field\">";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["associationForm"], 'label');
            // line 7
            echo "<div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_index");
            echo "\">
                ";
            // line 8
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["associationForm"], 'widget', array("attr" => array("class" => "autocomplete")));
            echo "
                <i class=\"dropdown icon\"></i>
                <div class=\"default text\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.select_products"), "html", null, true);
            echo "</div>
                <div class=\"menu\">
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "associations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                // line 13
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($context["association"], "type", array()), "code", array()) == $this->getAttribute($this->getAttribute($context["associationForm"], "vars", array()), "name", array()))) {
                    // line 14
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["association"], "associatedProducts", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["associatedProduct"]) {
                        // line 15
                        echo "                                <div class=\"item\" data-value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["associatedProduct"], "code", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["associatedProduct"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["associatedProduct"], "name", array()), $this->getAttribute($context["associatedProduct"], "code", array()))) : ($this->getAttribute($context["associatedProduct"], "code", array()))), "html", null, true);
                        echo "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associatedProduct'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                        ";
                }
                // line 18
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </div>
            </div>
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["associationForm"], 'errors');
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . ($context["action"] ?? $this->getContext($context, "action"))) . ".tab_associations"), array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "
</div>
";
        
        $__internal_cab312200d375518546e18b64d6bf5a90f53b06e5baa2a7f5bad1119e207d2de->leave($__internal_cab312200d375518546e18b64d6bf5a90f53b06e5baa2a7f5bad1119e207d2de_prof);

        
        $__internal_75aa12d869b7cb1aaa4c70937f54ea825cc6f7bf9e18572b38db6c38f3ee49cf->leave($__internal_75aa12d869b7cb1aaa4c70937f54ea825cc6f7bf9e18572b38db6c38f3ee49cf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  101 => 24,  92 => 21,  88 => 19,  82 => 18,  79 => 17,  68 => 15,  63 => 14,  60 => 13,  56 => 12,  51 => 10,  46 => 8,  41 => 7,  39 => 6,  37 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.associations'|trans }}</h3>

    {% for associationForm in form.associations %}
        <div class=\"field\">
            {{- form_label(associationForm) -}}
            <div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"{{ path('sylius_admin_ajax_product_index') }}\">
                {{ form_widget(associationForm, {'attr': {'class' : 'autocomplete'}}) }}
                <i class=\"dropdown icon\"></i>
                <div class=\"default text\">{{'sylius.ui.select_products'|trans}}</div>
                <div class=\"menu\">
                    {% for association in product.associations %}
                        {% if association.type.code == associationForm.vars.name %}
                            {% for associatedProduct in association.associatedProducts %}
                                <div class=\"item\" data-value=\"{{ associatedProduct.code }}\">{{ associatedProduct.name|default(associatedProduct.code) }}</div>
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
            {{ form_errors(associationForm) }}
        </div>
    {% endfor %}

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_associations', {'form': form}) }}
</div>
", "SyliusAdminBundle:Product/Tab:_associations.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_associations.html.twig");
    }
}
