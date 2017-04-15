<?php

/* SyliusAdminBundle:Product/Tab:_attributes.html.twig */
class __TwigTemplate_de6bd388d3b7e5ed54af684d6d41ac1fee997d438f38d8ed433da243433c30be extends Twig_Template
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
        $__internal_ae5d316a11e0ba8be2c4976c9575493c15730d81d537af09cfe46d46f608ea08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5d316a11e0ba8be2c4976c9575493c15730d81d537af09cfe46d46f608ea08->enter($__internal_ae5d316a11e0ba8be2c4976c9575493c15730d81d537af09cfe46d46f608ea08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_attributes.html.twig"));

        $__internal_a67acb960a24eea98c2c6e93e80d8e092b97caaeede831b385dfad840ee0f207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67acb960a24eea98c2c6e93e80d8e092b97caaeede831b385dfad840ee0f207->enter($__internal_a67acb960a24eea98c2c6e93e80d8e092b97caaeede831b385dfad840ee0f207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_attributes.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig"));
        // line 2
        echo "
<div class=\"ui tab\" data-tab=\"attributes\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.attributes"), "html", null, true);
        echo "</h3>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_get_product_attributes"));
        echo "
    <div id=\"attributesContainer\" data-count=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attributes", array())), "html", null, true);
        echo "\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attributes", array()), 'widget', array("attr" => array("translations" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()))));
        echo "
    </div>

    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . ($context["action"] ?? $this->getContext($context, "action"))) . ".tab_attributes"), array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "
</div>
";
        
        $__internal_ae5d316a11e0ba8be2c4976c9575493c15730d81d537af09cfe46d46f608ea08->leave($__internal_ae5d316a11e0ba8be2c4976c9575493c15730d81d537af09cfe46d46f608ea08_prof);

        
        $__internal_a67acb960a24eea98c2c6e93e80d8e092b97caaeede831b385dfad840ee0f207->leave($__internal_a67acb960a24eea98c2c6e93e80d8e092b97caaeede831b385dfad840ee0f207_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig' %}

<div class=\"ui tab\" data-tab=\"attributes\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.attributes'|trans }}</h3>
    {{ render(url('sylius_admin_get_product_attributes')) }}
    <div id=\"attributesContainer\" data-count=\"{{ form.attributes|length }}\">
        {{ form_widget(form.attributes, {'attr': {'translations': form.translations} }) }}
    </div>

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_attributes', {'form': form}) }}
</div>
", "SyliusAdminBundle:Product/Tab:_attributes.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_attributes.html.twig");
    }
}
