<?php

/* @SyliusShop/Login/_register.html.twig */
class __TwigTemplate_caf76ca532deccbc5f13474b9ef1df6d55c09d672962683074bffe64ca6a8678 extends Twig_Template
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
        $__internal_e7a6b338fadbd37dcd49d92bbd2a35421097479c011d61dc9b87677abb65e2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a6b338fadbd37dcd49d92bbd2a35421097479c011d61dc9b87677abb65e2ed->enter($__internal_e7a6b338fadbd37dcd49d92bbd2a35421097479c011d61dc9b87677abb65e2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_register.html.twig"));

        $__internal_7d93d450724952234acf0d4aa37ac12bfa924ba881f6fb0e74cabf14baf60dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d93d450724952234acf0d4aa37ac12bfa924ba881f6fb0e74cabf14baf60dc5->enter($__internal_7d93d450724952234acf0d4aa37ac12bfa924ba881f6fb0e74cabf14baf60dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_register.html.twig"));

        // line 1
        echo "<h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new_customers"), "html", null, true);
        echo "</h4>
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_register");
        echo "\" class=\"ui big green labeled icon fluid button\">
    <i class=\"signup icon\"></i>
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create_an_account"), "html", null, true);
        echo "
</a>
";
        
        $__internal_e7a6b338fadbd37dcd49d92bbd2a35421097479c011d61dc9b87677abb65e2ed->leave($__internal_e7a6b338fadbd37dcd49d92bbd2a35421097479c011d61dc9b87677abb65e2ed_prof);

        
        $__internal_7d93d450724952234acf0d4aa37ac12bfa924ba881f6fb0e74cabf14baf60dc5->leave($__internal_7d93d450724952234acf0d4aa37ac12bfa924ba881f6fb0e74cabf14baf60dc5_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui dividing header\">{{ 'sylius.ui.new_customers'|trans }}</h4>
<a href=\"{{ path('sylius_shop_register') }}\" class=\"ui big green labeled icon fluid button\">
    <i class=\"signup icon\"></i>
    {{ 'sylius.ui.create_an_account'|trans }}
</a>
", "@SyliusShop/Login/_register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_register.html.twig");
    }
}
