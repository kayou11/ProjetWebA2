<?php

/* SyliusShopBundle:Account/Order/Label/State:new.html.twig */
class __TwigTemplate_9680738f9c1410027288ce660557c730b0e12b9f17193d649e9dd0c1fe3affe8 extends Twig_Template
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
        $__internal_0fa581243ed40cce89f79d6ac5f317c8eaa917e90305578c2d6047dc67f8be43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa581243ed40cce89f79d6ac5f317c8eaa917e90305578c2d6047dc67f8be43->enter($__internal_0fa581243ed40cce89f79d6ac5f317c8eaa917e90305578c2d6047dc67f8be43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:new.html.twig"));

        $__internal_616f2f632cd9056a530bcda5c043ecb6179672205dcce1b02ae373d10ccf0339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616f2f632cd9056a530bcda5c043ecb6179672205dcce1b02ae373d10ccf0339->enter($__internal_616f2f632cd9056a530bcda5c043ecb6179672205dcce1b02ae373d10ccf0339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:new.html.twig"));

        // line 1
        echo "<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_0fa581243ed40cce89f79d6ac5f317c8eaa917e90305578c2d6047dc67f8be43->leave($__internal_0fa581243ed40cce89f79d6ac5f317c8eaa917e90305578c2d6047dc67f8be43_prof);

        
        $__internal_616f2f632cd9056a530bcda5c043ecb6179672205dcce1b02ae373d10ccf0339->leave($__internal_616f2f632cd9056a530bcda5c043ecb6179672205dcce1b02ae373d10ccf0339_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Label/State:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    {{ value|trans }}
</span>
", "SyliusShopBundle:Account/Order/Label/State:new.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Label/State/new.html.twig");
    }
}
