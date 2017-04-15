<?php

/* @SyliusShop/Login/_header.html.twig */
class __TwigTemplate_eaa151e50842a75bfb5de189eaa0cd26693ccc882e86238bc770392741871b07 extends Twig_Template
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
        $__internal_d621958bc12b2b412b68f054d281f2697b668b5d76568bddf4b9afffdf5595f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d621958bc12b2b412b68f054d281f2697b668b5d76568bddf4b9afffdf5595f6->enter($__internal_d621958bc12b2b412b68f054d281f2697b668b5d76568bddf4b9afffdf5595f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_header.html.twig"));

        $__internal_27e404eeae68a820ebb6cba72fd5a88d3ffad23633a68f0173b31362aa24df5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e404eeae68a820ebb6cba72fd5a88d3ffad23633a68f0173b31362aa24df5c->enter($__internal_27e404eeae68a820ebb6cba72fd5a88d3ffad23633a68f0173b31362aa24df5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_header.html.twig"));

        // line 1
        echo "<h1 class=\"ui header\">
    <i class=\"circular user icon\"></i>
    <div class=\"content\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_login"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.access_your_store_account_or_create_a_new_one"), "html", null, true);
        echo "</div>
    </div>
</h1>

";
        
        $__internal_d621958bc12b2b412b68f054d281f2697b668b5d76568bddf4b9afffdf5595f6->leave($__internal_d621958bc12b2b412b68f054d281f2697b668b5d76568bddf4b9afffdf5595f6_prof);

        
        $__internal_27e404eeae68a820ebb6cba72fd5a88d3ffad23633a68f0173b31362aa24df5c->leave($__internal_27e404eeae68a820ebb6cba72fd5a88d3ffad23633a68f0173b31362aa24df5c_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"ui header\">
    <i class=\"circular user icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.customer_login'|trans }}
        <div class=\"sub header\">{{ 'sylius.ui.access_your_store_account_or_create_a_new_one'|trans }}</div>
    </div>
</h1>

", "@SyliusShop/Login/_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_header.html.twig");
    }
}
