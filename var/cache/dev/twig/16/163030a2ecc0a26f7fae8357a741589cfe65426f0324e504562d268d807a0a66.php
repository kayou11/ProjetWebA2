<?php

/* SyliusShopBundle:Taxon:_horizontalMenu.html.twig */
class __TwigTemplate_17e1c07c5f7d7c11b319cfde74948861644e3aaa9cae9fa71d337a9802fafcb0 extends Twig_Template
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
        $__internal_eb7ff7bde77ded8fb67b253921f775b2601bdbbc67b734542a8fb08aafca0358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7ff7bde77ded8fb67b253921f775b2601bdbbc67b734542a8fb08aafca0358->enter($__internal_eb7ff7bde77ded8fb67b253921f775b2601bdbbc67b734542a8fb08aafca0358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_horizontalMenu.html.twig"));

        $__internal_7912c5a0559885bdf638b05e66dabcd3940d686a6a0375899409bed31eee07c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7912c5a0559885bdf638b05e66dabcd3940d686a6a0375899409bed31eee07c8->enter($__internal_7912c5a0559885bdf638b05e66dabcd3940d686a6a0375899409bed31eee07c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_horizontalMenu.html.twig"));

        // line 18
        echo "
";
        // line 19
        $context["macros"] = $this;
        // line 20
        echo "
";
        // line 21
        if ((twig_length_filter($this->env, ($context["taxons"] ?? $this->getContext($context, "taxons"))) > 0)) {
            // line 22
            echo "<div class=\"ui large stackable menu\">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxons"] ?? $this->getContext($context, "taxons")));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 24
                echo "        ";
                echo $context["macros"]->getitem($context["taxon"]);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</div>
";
        }
        
        $__internal_eb7ff7bde77ded8fb67b253921f775b2601bdbbc67b734542a8fb08aafca0358->leave($__internal_eb7ff7bde77ded8fb67b253921f775b2601bdbbc67b734542a8fb08aafca0358_prof);

        
        $__internal_7912c5a0559885bdf638b05e66dabcd3940d686a6a0375899409bed31eee07c8->leave($__internal_7912c5a0559885bdf638b05e66dabcd3940d686a6a0375899409bed31eee07c8_prof);

    }

    // line 1
    public function getitem($__taxon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxon" => $__taxon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_53372eaba51b110524e4650e3ec2c42aab4c440344fa13955c519dc36611390f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_53372eaba51b110524e4650e3ec2c42aab4c440344fa13955c519dc36611390f->enter($__internal_53372eaba51b110524e4650e3ec2c42aab4c440344fa13955c519dc36611390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            $__internal_605b8207f036190d2d8702bd4c866566384fa89d0a853e18acd2158e5c997a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_605b8207f036190d2d8702bd4c866566384fa89d0a853e18acd2158e5c997a45->enter($__internal_605b8207f036190d2d8702bd4c866566384fa89d0a853e18acd2158e5c997a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            // line 2
            echo "    ";
            $context["macros"] = $this;
            // line 3
            echo "
    ";
            // line 4
            if ((twig_length_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "children", array())) > 0)) {
                // line 5
                echo "        <div class=\"ui dropdown item\">
            <span class=\"text\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), "html", null, true);
                echo "</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["childTaxon"]) {
                    // line 10
                    echo "                    ";
                    echo $context["macros"]->getitem($context["childTaxon"]);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childTaxon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            </div>
        </div>
    ";
            } else {
                // line 15
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"item\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), "html", null, true);
                echo "</a>
    ";
            }
            
            $__internal_605b8207f036190d2d8702bd4c866566384fa89d0a853e18acd2158e5c997a45->leave($__internal_605b8207f036190d2d8702bd4c866566384fa89d0a853e18acd2158e5c997a45_prof);

            
            $__internal_53372eaba51b110524e4650e3ec2c42aab4c440344fa13955c519dc36611390f->leave($__internal_53372eaba51b110524e4650e3ec2c42aab4c440344fa13955c519dc36611390f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_horizontalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 15,  111 => 12,  102 => 10,  98 => 9,  92 => 6,  89 => 5,  87 => 4,  84 => 3,  81 => 2,  63 => 1,  51 => 26,  42 => 24,  38 => 23,  35 => 22,  33 => 21,  30 => 20,  28 => 19,  25 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro item(taxon) %}
    {% import _self as macros %}

    {% if taxon.children|length > 0 %}
        <div class=\"ui dropdown item\">
            <span class=\"text\">{{ taxon.name }}</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                {% for childTaxon in taxon.children %}
                    {{ macros.item(childTaxon) }}
                {% endfor %}
            </div>
        </div>
    {% else %}
        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"item\">{{ taxon.name }}</a>
    {% endif %}
{% endmacro %}

{% import _self as macros %}

{% if taxons|length > 0 %}
<div class=\"ui large stackable menu\">
    {% for taxon in taxons %}
        {{ macros.item(taxon) }}
    {% endfor %}
</div>
{% endif %}
", "SyliusShopBundle:Taxon:_horizontalMenu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_horizontalMenu.html.twig");
    }
}
