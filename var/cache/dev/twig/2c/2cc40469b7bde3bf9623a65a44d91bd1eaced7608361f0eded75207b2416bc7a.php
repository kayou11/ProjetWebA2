<?php

/* SyliusAdminBundle:Taxon:_treeWithButtons.html.twig */
class __TwigTemplate_4766fdea3f34aba5c8376f259e369539b6b1fc88a307016b582e3e2b0bfb6bce extends Twig_Template
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
        $__internal_7e2e4e63f389a7f3f96c463ece87c242e1b69c848161d58507d4bd6d87da0ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2e4e63f389a7f3f96c463ece87c242e1b69c848161d58507d4bd6d87da0ffe->enter($__internal_7e2e4e63f389a7f3f96c463ece87c242e1b69c848161d58507d4bd6d87da0ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig"));

        $__internal_9f12bba9b062bd92126216929c39396cbc184e5590e00e0e8dde8abca7acb4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f12bba9b062bd92126216929c39396cbc184e5590e00e0e8dde8abca7acb4be->enter($__internal_9f12bba9b062bd92126216929c39396cbc184e5590e00e0e8dde8abca7acb4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", 1);
        // line 2
        $context["tree"] = $this;
        // line 3
        echo "
";
        // line 36
        echo "
<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui large fluid labeled icon primary button\">
    <i class=\"plus icon\"></i>
    ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
        echo "
</a>

<div class=\"ui segment\">
    <div class=\"ui list sylius-sortable-list\">
        ";
        // line 44
        echo $context["tree"]->getrender(($context["taxons"] ?? $this->getContext($context, "taxons")));
        echo "
    </div>
</div>
";
        
        $__internal_7e2e4e63f389a7f3f96c463ece87c242e1b69c848161d58507d4bd6d87da0ffe->leave($__internal_7e2e4e63f389a7f3f96c463ece87c242e1b69c848161d58507d4bd6d87da0ffe_prof);

        
        $__internal_9f12bba9b062bd92126216929c39396cbc184e5590e00e0e8dde8abca7acb4be->leave($__internal_9f12bba9b062bd92126216929c39396cbc184e5590e00e0e8dde8abca7acb4be_prof);

    }

    // line 4
    public function getrender($__taxons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b938e79b21f6e5275320ed82d5009b34f16fa1199ca87202987f4d2985cf05d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b938e79b21f6e5275320ed82d5009b34f16fa1199ca87202987f4d2985cf05d1->enter($__internal_b938e79b21f6e5275320ed82d5009b34f16fa1199ca87202987f4d2985cf05d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            $__internal_dbb7d4936af9e4b1b1eafdae2168db1a19e50a6a380b554f8cb38d5a69444064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_dbb7d4936af9e4b1b1eafdae2168db1a19e50a6a380b554f8cb38d5a69444064->enter($__internal_dbb7d4936af9e4b1b1eafdae2168db1a19e50a6a380b554f8cb38d5a69444064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            // line 5
            echo "    ";
            $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", 5);
            // line 6
            echo "    ";
            $context["tree"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxons"] ?? $this->getContext($context, "taxons")));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                if (($this->getAttribute($context["taxon"], "id", array()) != null)) {
                    // line 9
                    echo "        <div class=\"item\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["taxon"], "id", array()), "html", null, true);
                    echo "\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_per_taxon_index", array("taxonId" => $this->getAttribute($context["taxon"], "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["taxon"], "name", array()), "html", null, true);
                    echo "
                    </a>
                    <br>
                    <div class=\"ui mini buttons\" style=\"margin-top: 5px;\">
                        ";
                    // line 18
                    echo $context["buttons"]->getcreate($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_create_for_parent", array("id" => $this->getAttribute($context["taxon"], "id", array()))), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add"));
                    echo "
                        ";
                    // line 19
                    echo $context["buttons"]->getedit($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_update", array("id" => $this->getAttribute($context["taxon"], "id", array()))), null, null, false);
                    echo "
                        ";
                    // line 20
                    echo $context["buttons"]->getdelete($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_delete", array("id" => $this->getAttribute($context["taxon"], "id", array()))), null, false, $this->getAttribute($context["taxon"], "id", array()));
                    echo "
                        <a class=\"ui icon button sylius-taxon-move-up\" data-url=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_move", array("id" => $this->getAttribute($context["taxon"], "id", array()))), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["taxon"], "id", array()), "html", null, true);
                    echo "\" data-position=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["taxon"], "position", array()), "html", null, true);
                    echo "\">
                            <i class=\"icon arrow up\"></i>
                        </a>
                        <a class=\"ui icon button sylius-taxon-move-down\" data-url=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_move", array("id" => $this->getAttribute($context["taxon"], "id", array()))), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["taxon"], "id", array()), "html", null, true);
                    echo "\" data-position=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["taxon"], "position", array()), "html", null, true);
                    echo "\">
                            <i class=\"icon arrow down\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"list\">
                    ";
                    // line 30
                    echo $context["tree"]->getrender($this->getAttribute($context["taxon"], "children", array()));
                    echo "
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_dbb7d4936af9e4b1b1eafdae2168db1a19e50a6a380b554f8cb38d5a69444064->leave($__internal_dbb7d4936af9e4b1b1eafdae2168db1a19e50a6a380b554f8cb38d5a69444064_prof);

            
            $__internal_b938e79b21f6e5275320ed82d5009b34f16fa1199ca87202987f4d2985cf05d1->leave($__internal_b938e79b21f6e5275320ed82d5009b34f16fa1199ca87202987f4d2985cf05d1_prof);

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
        return "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 30,  135 => 24,  125 => 21,  121 => 20,  117 => 19,  113 => 18,  106 => 14,  102 => 13,  94 => 9,  89 => 8,  86 => 7,  83 => 6,  80 => 5,  62 => 4,  48 => 44,  40 => 39,  35 => 37,  32 => 36,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import _self as tree %}

{% macro render(taxons) %}
    {% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
    {% import _self as tree %}

    {% for taxon in taxons if taxon.id != null %}
        <div class=\"item\" data-id=\"{{ taxon.id }}\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\">
                        {{ taxon.name }}
                    </a>
                    <br>
                    <div class=\"ui mini buttons\" style=\"margin-top: 5px;\">
                        {{ buttons.create(path('sylius_admin_taxon_create_for_parent', { 'id': taxon.id }), 'sylius.ui.add'|trans) }}
                        {{ buttons.edit(path('sylius_admin_taxon_update', { 'id': taxon.id }), null, null, false) }}
                        {{ buttons.delete(path('sylius_admin_taxon_delete', { 'id': taxon.id }), null, false, taxon.id) }}
                        <a class=\"ui icon button sylius-taxon-move-up\" data-url=\"{{ path('sylius_admin_ajax_taxon_move', { id: taxon.id }) }}\" data-id=\"{{ taxon.id }}\" data-position=\"{{ taxon.position }}\">
                            <i class=\"icon arrow up\"></i>
                        </a>
                        <a class=\"ui icon button sylius-taxon-move-down\" data-url=\"{{ path('sylius_admin_ajax_taxon_move', { id: taxon.id }) }}\" data-id=\"{{ taxon.id }}\" data-position=\"{{ taxon.position }}\">
                            <i class=\"icon arrow down\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"list\">
                    {{ tree.render(taxon.children) }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

<a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui large fluid labeled icon primary button\">
    <i class=\"plus icon\"></i>
    {{ 'sylius.ui.create'|trans }}
</a>

<div class=\"ui segment\">
    <div class=\"ui list sylius-sortable-list\">
        {{ tree.render(taxons) }}
    </div>
</div>
", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithButtons.html.twig");
    }
}
