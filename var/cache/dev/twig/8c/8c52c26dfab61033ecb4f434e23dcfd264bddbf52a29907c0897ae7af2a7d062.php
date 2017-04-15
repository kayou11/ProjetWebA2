<?php

/* @SyliusShop/Product/Show/_tabs.html.twig */
class __TwigTemplate_d46c1107e3734c9a287133dc6695458aae725ef23179e8f60adc6c0ecb656ac6 extends Twig_Template
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
        $__internal_a713de27c9cc13a28a6ecb10b286ea269ccacfa43b4fd266ff92bb28add25d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a713de27c9cc13a28a6ecb10b286ea269ccacfa43b4fd266ff92bb28add25d29->enter($__internal_a713de27c9cc13a28a6ecb10b286ea269ccacfa43b4fd266ff92bb28add25d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_tabs.html.twig"));

        $__internal_cae94cb356998df2532ab1075888dcdb8d1c5484c5cf055d01e5f63899b2303a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae94cb356998df2532ab1075888dcdb8d1c5484c5cf055d01e5f63899b2303a->enter($__internal_cae94cb356998df2532ab1075888dcdb8d1c5484c5cf055d01e5f63899b2303a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_tabs.html.twig"));

        // line 1
        echo "<div class=\"ui top attached large tabular menu\">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_menu.html.twig", "@SyliusShop/Product/Show/_tabs.html.twig", 2)->display($context);
        // line 3
        echo "</div>

";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_content.html.twig", "@SyliusShop/Product/Show/_tabs.html.twig", 5)->display($context);
        
        $__internal_a713de27c9cc13a28a6ecb10b286ea269ccacfa43b4fd266ff92bb28add25d29->leave($__internal_a713de27c9cc13a28a6ecb10b286ea269ccacfa43b4fd266ff92bb28add25d29_prof);

        
        $__internal_cae94cb356998df2532ab1075888dcdb8d1c5484c5cf055d01e5f63899b2303a->leave($__internal_cae94cb356998df2532ab1075888dcdb8d1c5484c5cf055d01e5f63899b2303a_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui top attached large tabular menu\">
    {% include '@SyliusShop/Product/Show/Tabs/_menu.html.twig' %}
</div>

{% include '@SyliusShop/Product/Show/Tabs/_content.html.twig' %}
", "@SyliusShop/Product/Show/_tabs.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_tabs.html.twig");
    }
}
