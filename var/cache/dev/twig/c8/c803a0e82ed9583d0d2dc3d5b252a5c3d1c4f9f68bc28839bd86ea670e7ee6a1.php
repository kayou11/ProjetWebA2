<?php

/* SyliusAdminBundle:Product:_mainImage.html.twig */
class __TwigTemplate_3a7d612d7c2a0b775385829db91fe487a192a24c1d91a968f85873708ce4ebb8 extends Twig_Template
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
        $__internal_29f2fede49dc9c0a2c1b4bc020defbbbb686e6d9d2f5568bb5ab332134c2f92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f2fede49dc9c0a2c1b4bc020defbbbb686e6d9d2f5568bb5ab332134c2f92c->enter($__internal_29f2fede49dc9c0a2c1b4bc020defbbbb686e6d9d2f5568bb5ab332134c2f92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_mainImage.html.twig"));

        $__internal_7a7dc943f756b9273bfc0075c1635cb5a81f55fb60014559ad5487559ebcacde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7dc943f756b9273bfc0075c1635cb5a81f55fb60014559ad5487559ebcacde->enter($__internal_7a7dc943f756b9273bfc0075c1635cb5a81f55fb60014559ad5487559ebcacde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_mainImage.html.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "imagesByType", array(0 => "thumbnail"), "method"))) {
            // line 2
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "imagesByType", array(0 => "thumbnail"), "method"), "first", array()), "path", array()), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? $this->getContext($context, "filter")), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail")));
        } elseif ($this->getAttribute($this->getAttribute(        // line 3
($context["product"] ?? $this->getContext($context, "product")), "images", array()), "first", array())) {
            // line 4
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "images", array()), "first", array()), "path", array()), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? $this->getContext($context, "filter")), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail")));
        } else {
            // line 6
            echo "    ";
            $context["path"] = "http://placehold.it/50x50";
        }
        // line 8
        echo "
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
        echo "\" alt=\"\" class=\"ui bordered image\" />
";
        
        $__internal_29f2fede49dc9c0a2c1b4bc020defbbbb686e6d9d2f5568bb5ab332134c2f92c->leave($__internal_29f2fede49dc9c0a2c1b4bc020defbbbb686e6d9d2f5568bb5ab332134c2f92c_prof);

        
        $__internal_7a7dc943f756b9273bfc0075c1635cb5a81f55fb60014559ad5487559ebcacde->leave($__internal_7a7dc943f756b9273bfc0075c1635cb5a81f55fb60014559ad5487559ebcacde_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_mainImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  40 => 8,  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.imagesByType('thumbnail') is not empty %}
    {% set path = product.imagesByType('thumbnail').first.path|imagine_filter(filter|default('sylius_admin_product_thumbnail')) %}
{% elseif product.images.first %}
    {% set path = product.images.first.path|imagine_filter(filter|default('sylius_admin_product_thumbnail')) %}
{% else %}
    {% set path = 'http://placehold.it/50x50' %}
{% endif %}

<img src=\"{{ path }}\" alt=\"\" class=\"ui bordered image\" />
", "SyliusAdminBundle:Product:_mainImage.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_mainImage.html.twig");
    }
}
