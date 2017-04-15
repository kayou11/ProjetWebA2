<?php

/* SyliusShopBundle:Login:_register.html.twig */
class __TwigTemplate_6ffcd85ff2c00a4260f23cc92c6065441c3913413c51951f1997d0d491439de8 extends Twig_Template
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
        $__internal_6ff55905f23c6718723a43045b0d38e06a980e90880164bcc4c688f316b525d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff55905f23c6718723a43045b0d38e06a980e90880164bcc4c688f316b525d7->enter($__internal_6ff55905f23c6718723a43045b0d38e06a980e90880164bcc4c688f316b525d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_register.html.twig"));

        $__internal_570962919f10d08eb66dab801fa6da557a31917f80c8f9c95d44114143f5947d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570962919f10d08eb66dab801fa6da557a31917f80c8f9c95d44114143f5947d->enter($__internal_570962919f10d08eb66dab801fa6da557a31917f80c8f9c95d44114143f5947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_register.html.twig"));

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
        
        $__internal_6ff55905f23c6718723a43045b0d38e06a980e90880164bcc4c688f316b525d7->leave($__internal_6ff55905f23c6718723a43045b0d38e06a980e90880164bcc4c688f316b525d7_prof);

        
        $__internal_570962919f10d08eb66dab801fa6da557a31917f80c8f9c95d44114143f5947d->leave($__internal_570962919f10d08eb66dab801fa6da557a31917f80c8f9c95d44114143f5947d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Login:_register.html.twig";
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
", "SyliusShopBundle:Login:_register.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_register.html.twig");
    }
}
