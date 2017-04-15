<?php

/* SyliusShopBundle:Product/Show:_options.html.twig */
class __TwigTemplate_61a3ab40657d8ff045bbf61f7b47b015174608e78e8dde372bb75ac5856ca2b8 extends Twig_Template
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
        $__internal_05eb893a018b202bd59ec1ac1865888da95ba5a816283382257c39fd72341c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05eb893a018b202bd59ec1ac1865888da95ba5a816283382257c39fd72341c6c->enter($__internal_05eb893a018b202bd59ec1ac1865888da95ba5a816283382257c39fd72341c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_options.html.twig"));

        $__internal_131da0b13b12163fb26a84ccf3a406989ea49b56675ce8f42cafece2d8ee4ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131da0b13b12163fb26a84ccf3a406989ea49b56675ce8f42cafece2d8ee4ec6->enter($__internal_131da0b13b12163fb26a84ccf3a406989ea49b56675ce8f42cafece2d8ee4ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_options.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cartItem", array()), "variant", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option_form"]) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["option_form"], 'row', array("attr" => array("data-option" => $this->getAttribute($this->getAttribute($context["option_form"], "vars", array()), "name", array()))));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_05eb893a018b202bd59ec1ac1865888da95ba5a816283382257c39fd72341c6c->leave($__internal_05eb893a018b202bd59ec1ac1865888da95ba5a816283382257c39fd72341c6c_prof);

        
        $__internal_131da0b13b12163fb26a84ccf3a406989ea49b56675ce8f42cafece2d8ee4ec6->leave($__internal_131da0b13b12163fb26a84ccf3a406989ea49b56675ce8f42cafece2d8ee4ec6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for option_form in form.cartItem.variant %}
    {{ form_row(option_form, { 'attr': { 'data-option': option_form.vars.name } }) }}
{% endfor %}
", "SyliusShopBundle:Product/Show:_options.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_options.html.twig");
    }
}
