<?php

/* @SyliusShop/Product/Show/_images.html.twig */
class __TwigTemplate_ccc99f6141efdadcf9ecf096acb8e6fe6dc17cd4e49a8f03862ae12a6dfb8ae0 extends Twig_Template
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
        $__internal_1cf2b81f0e9965efe23aa395f5cd9ab8772c2a179f882ff211da9e89ef23383a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf2b81f0e9965efe23aa395f5cd9ab8772c2a179f882ff211da9e89ef23383a->enter($__internal_1cf2b81f0e9965efe23aa395f5cd9ab8772c2a179f882ff211da9e89ef23383a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_images.html.twig"));

        $__internal_e832767868981994c875d85e87d95cb7e6287f3a96624a94ae178838f29d8930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e832767868981994c875d85e87d95cb7e6287f3a96624a94ae178838f29d8930->enter($__internal_e832767868981994c875d85e87d95cb7e6287f3a96624a94ae178838f29d8930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_images.html.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "imagesByType", array(0 => "main"), "method"))) {
            // line 2
            echo "    ";
            $context["source_path"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "imagesByType", array(0 => "main"), "method"), "first", array()), "path", array());
            // line 3
            echo "    ";
            $context["original_path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(($context["source_path"] ?? $this->getContext($context, "source_path")), "sylius_shop_product_original");
            // line 4
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(($context["source_path"] ?? $this->getContext($context, "source_path")), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? $this->getContext($context, "filter")), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } elseif ($this->getAttribute($this->getAttribute(        // line 5
($context["product"] ?? $this->getContext($context, "product")), "images", array()), "first", array())) {
            // line 6
            echo "    ";
            $context["source_path"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "images", array()), "first", array()), "path", array());
            // line 7
            echo "    ";
            $context["original_path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(($context["source_path"] ?? $this->getContext($context, "source_path")), "sylius_shop_product_original");
            // line 8
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(($context["source_path"] ?? $this->getContext($context, "source_path")), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? $this->getContext($context, "filter")), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } else {
            // line 10
            echo "    ";
            $context["original_path"] = "http://placehold.it/400x300";
            // line 11
            echo "    ";
            $context["path"] = ($context["original_path"] ?? $this->getContext($context, "original_path"));
        }
        // line 13
        echo "
<div data-product-image=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
        echo "\" data-product-link=\"";
        echo twig_escape_filter($this->env, ($context["original_path"] ?? $this->getContext($context, "original_path")), "html", null, true);
        echo "\"></div>
<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["original_path"] ?? $this->getContext($context, "original_path")), "html", null, true);
        echo "\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
        echo "\" id=\"main-image\" alt=\"\" />
</a>
";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "images", array())) > 1)) {
            // line 19
            echo "<div class=\"ui divider\"></div>

";
            // line 21
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_thumbnails", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
            echo "

<div class=\"ui small images\">
    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "images", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 25
                echo "    ";
                $context["path"] = (( !(null === $this->getAttribute($context["image"], "path", array()))) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "path", array()), "sylius_shop_product_small_thumbnail")) : ("http://placehold.it/200x200"));
                // line 26
                echo "    <div class=\"ui image\">
    ";
                // line 27
                if (($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "isConfigurable", array(), "method") && (twig_length_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array())) > 0))) {
                    // line 28
                    echo "        ";
                    $this->loadTemplate("@SyliusShop/Product/Show/_imageVariants.html.twig", "@SyliusShop/Product/Show/_images.html.twig", 28)->display($context);
                    // line 29
                    echo "    ";
                }
                // line 30
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "path", array()), "sylius_shop_product_original"), "html", null, true);
                echo "\" data-lightbox=\"sylius-product-image\">
            <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\" data-large-thumbnail=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "path", array()), "sylius_shop_product_large_thumbnail"), "html", null, true);
                echo "\" />
        </a>
    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "</div>
";
        }
        
        $__internal_1cf2b81f0e9965efe23aa395f5cd9ab8772c2a179f882ff211da9e89ef23383a->leave($__internal_1cf2b81f0e9965efe23aa395f5cd9ab8772c2a179f882ff211da9e89ef23383a_prof);

        
        $__internal_e832767868981994c875d85e87d95cb7e6287f3a96624a94ae178838f29d8930->leave($__internal_e832767868981994c875d85e87d95cb7e6287f3a96624a94ae178838f29d8930_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 35,  121 => 31,  116 => 30,  113 => 29,  110 => 28,  108 => 27,  105 => 26,  102 => 25,  85 => 24,  79 => 21,  75 => 19,  73 => 18,  68 => 16,  64 => 15,  58 => 14,  55 => 13,  51 => 11,  48 => 10,  44 => 8,  41 => 7,  38 => 6,  36 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.imagesByType('main') is not empty %}
    {% set source_path = product.imagesByType('main').first.path %}
    {% set original_path = source_path|imagine_filter('sylius_shop_product_original') %}
    {% set path = source_path|imagine_filter(filter|default('sylius_shop_product_large_thumbnail')) %}
{% elseif product.images.first %}
    {% set source_path = product.images.first.path %}
    {% set original_path = source_path|imagine_filter('sylius_shop_product_original') %}
    {% set path = source_path|imagine_filter(filter|default('sylius_shop_product_large_thumbnail')) %}
{% else %}
    {% set original_path = 'http://placehold.it/400x300' %}
    {% set path = original_path %}
{% endif %}

<div data-product-image=\"{{ path }}\" data-product-link=\"{{ original_path }}\"></div>
<a href=\"{{ original_path }}\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
    <img src=\"{{ path }}\" id=\"main-image\" alt=\"\" />
</a>
{% if product.images|length > 1 %}
<div class=\"ui divider\"></div>

{{ sonata_block_render_event('sylius.shop.product.show.before_thumbnails', {'product': product}) }}

<div class=\"ui small images\">
    {% for image in product.images %}
    {% set path = image.path is not null ? image.path|imagine_filter('sylius_shop_product_small_thumbnail') : 'http://placehold.it/200x200' %}
    <div class=\"ui image\">
    {% if product.isConfigurable() and product.variants|length > 0 %}
        {% include '@SyliusShop/Product/Show/_imageVariants.html.twig' %}
    {% endif %}
        <a href=\"{{ image.path|imagine_filter('sylius_shop_product_original') }}\" data-lightbox=\"sylius-product-image\">
            <img src=\"{{ path }}\" data-large-thumbnail=\"{{ image.path|imagine_filter('sylius_shop_product_large_thumbnail') }}\" />
        </a>
    </div>
    {% endfor %}
</div>
{% endif %}
", "@SyliusShop/Product/Show/_images.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_images.html.twig");
    }
}
