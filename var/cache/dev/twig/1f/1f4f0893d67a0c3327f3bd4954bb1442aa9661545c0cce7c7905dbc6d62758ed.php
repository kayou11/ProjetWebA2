<?php

/* SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig */
class __TwigTemplate_934d46591718b9804994943e8eaa46b84f5fe9ddf9b570301d5a8e25591e0624 extends Twig_Template
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
        $__internal_3566fb28aacea70eec1d411c67a82a04849dbcdcce8bd0dda2b2b9c5d7d2db6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3566fb28aacea70eec1d411c67a82a04849dbcdcce8bd0dda2b2b9c5d7d2db6b->enter($__internal_3566fb28aacea70eec1d411c67a82a04849dbcdcce8bd0dda2b2b9c5d7d2db6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig"));

        $__internal_72743ed4b64ed27d4a7fb8bfe66b7f2562328a10944efcc7b6fbfa0c863a0037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72743ed4b64ed27d4a7fb8bfe66b7f2562328a10944efcc7b6fbfa0c863a0037->enter($__internal_72743ed4b64ed27d4a7fb8bfe66b7f2562328a10944efcc7b6fbfa0c863a0037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig"));

        // line 1
        $context["tree"] = $this;
        // line 2
        echo "
";
        // line 22
        echo "
<div class=\"ui large fluid vertical buttons\">
    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index");
        echo "\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.browse_all_products"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.manage_taxons"), "html", null, true);
        echo "
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        ";
        // line 36
        echo $context["tree"]->getrender(($context["taxons"] ?? $this->getContext($context, "taxons")));
        echo "
    </div>
</div>
";
        
        $__internal_3566fb28aacea70eec1d411c67a82a04849dbcdcce8bd0dda2b2b9c5d7d2db6b->leave($__internal_3566fb28aacea70eec1d411c67a82a04849dbcdcce8bd0dda2b2b9c5d7d2db6b_prof);

        
        $__internal_72743ed4b64ed27d4a7fb8bfe66b7f2562328a10944efcc7b6fbfa0c863a0037->leave($__internal_72743ed4b64ed27d4a7fb8bfe66b7f2562328a10944efcc7b6fbfa0c863a0037_prof);

    }

    // line 3
    public function getrender($__taxons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e11942fc1b7eb8e47d2f5197947dc10d4b57f909ce2778419d4d8d97d653129d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e11942fc1b7eb8e47d2f5197947dc10d4b57f909ce2778419d4d8d97d653129d->enter($__internal_e11942fc1b7eb8e47d2f5197947dc10d4b57f909ce2778419d4d8d97d653129d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            $__internal_086ed00787a803c2521b18cfadb5f7039b5b15d98aa92ff6be2270ed73faed34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_086ed00787a803c2521b18cfadb5f7039b5b15d98aa92ff6be2270ed73faed34->enter($__internal_086ed00787a803c2521b18cfadb5f7039b5b15d98aa92ff6be2270ed73faed34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            // line 4
            echo "    ";
            $context["tree"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxons"] ?? $this->getContext($context, "taxons")));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 7
                echo "        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_per_taxon_index", array("taxonId" => $this->getAttribute($context["taxon"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["taxon"], "name", array()), "html", null, true);
                echo "
                    </a>
                </div>
                <div class=\"list\">
                    ";
                // line 16
                echo $context["tree"]->getrender($this->getAttribute($context["taxon"], "children", array()));
                echo "
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_086ed00787a803c2521b18cfadb5f7039b5b15d98aa92ff6be2270ed73faed34->leave($__internal_086ed00787a803c2521b18cfadb5f7039b5b15d98aa92ff6be2270ed73faed34_prof);

            
            $__internal_e11942fc1b7eb8e47d2f5197947dc10d4b57f909ce2778419d4d8d97d653129d->leave($__internal_e11942fc1b7eb8e47d2f5197947dc10d4b57f909ce2778419d4d8d97d653129d_prof);

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
        return "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 16,  110 => 12,  106 => 11,  100 => 7,  96 => 6,  93 => 5,  90 => 4,  72 => 3,  58 => 36,  49 => 30,  44 => 28,  39 => 26,  34 => 24,  30 => 22,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as tree %}

{% macro render(taxons) %}
    {% import _self as tree %}

    {% for taxon in taxons %}
        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\">
                        {{ taxon.name }}
                    </a>
                </div>
                <div class=\"list\">
                    {{ tree.render(taxon.children) }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

<div class=\"ui large fluid vertical buttons\">
    <a href=\"{{ path('sylius_admin_product_index') }}\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        {{ 'sylius.ui.browse_all_products'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        {{ 'sylius.ui.manage_taxons'|trans }}
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        {{ tree.render(taxons) }}
    </div>
</div>
", "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithoutButtons.html.twig");
    }
}
