<?php

/* @SyliusShop/Account/layout.html.twig */
class __TwigTemplate_e1f9e82182ee4b9fc5638cba23444e0f1bfff8113b96ee0289b654c24a2188d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Account/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82d155af6f251ed7c0f4a017be2ae63a2893c4eac594e1ed83547d1c7811701c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d155af6f251ed7c0f4a017be2ae63a2893c4eac594e1ed83547d1c7811701c->enter($__internal_82d155af6f251ed7c0f4a017be2ae63a2893c4eac594e1ed83547d1c7811701c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/layout.html.twig"));

        $__internal_f7fd8ee83c69656df515fac64185239a524d801abf60c5bf4fb96160de635d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fd8ee83c69656df515fac64185239a524d801abf60c5bf4fb96160de635d13->enter($__internal_f7fd8ee83c69656df515fac64185239a524d801abf60c5bf4fb96160de635d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d155af6f251ed7c0f4a017be2ae63a2893c4eac594e1ed83547d1c7811701c->leave($__internal_82d155af6f251ed7c0f4a017be2ae63a2893c4eac594e1ed83547d1c7811701c_prof);

        
        $__internal_f7fd8ee83c69656df515fac64185239a524d801abf60c5bf4fb96160de635d13->leave($__internal_f7fd8ee83c69656df515fac64185239a524d801abf60c5bf4fb96160de635d13_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_59d8711f9bf0c04eed8967eea0b0b45363adc383db7c50d2b166a16e0cc4ba0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d8711f9bf0c04eed8967eea0b0b45363adc383db7c50d2b166a16e0cc4ba0e->enter($__internal_59d8711f9bf0c04eed8967eea0b0b45363adc383db7c50d2b166a16e0cc4ba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_77508b0ebb4676315bfe32736c098dae74f8bc8ac23914f1f7b7ba0b47ec8651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77508b0ebb4676315bfe32736c098dae74f8bc8ac23914f1f7b7ba0b47ec8651->enter($__internal_77508b0ebb4676315bfe32736c098dae74f8bc8ac23914f1f7b7ba0b47ec8651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 6
        echo "
    <div class=\"ui stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.before_menu"));
        echo "

            ";
        // line 11
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sylius.shop.account", array("template" => "@SyliusUi/Menu/simple.html.twig"));
        echo "

            ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.after_menu"));
        echo "
        </div>
        <div class=\"twelve wide column\">
            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.before_subcontent"));
        echo "

            ";
        // line 18
        $this->displayBlock('subcontent', $context, $blocks);
        // line 20
        echo "
            ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.after_subcontent"));
        echo "
        </div>
    </div>
";
        
        $__internal_77508b0ebb4676315bfe32736c098dae74f8bc8ac23914f1f7b7ba0b47ec8651->leave($__internal_77508b0ebb4676315bfe32736c098dae74f8bc8ac23914f1f7b7ba0b47ec8651_prof);

        
        $__internal_59d8711f9bf0c04eed8967eea0b0b45363adc383db7c50d2b166a16e0cc4ba0e->leave($__internal_59d8711f9bf0c04eed8967eea0b0b45363adc383db7c50d2b166a16e0cc4ba0e_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4e7e83bc6a747aead44e2856ad2b0a54c51a1545484220feb10f078b6d5685a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7e83bc6a747aead44e2856ad2b0a54c51a1545484220feb10f078b6d5685a0->enter($__internal_4e7e83bc6a747aead44e2856ad2b0a54c51a1545484220feb10f078b6d5685a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_9b5f1009d9bec1c86fbc89e2f98a9252b15d5ac822c032d4a803786987954657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5f1009d9bec1c86fbc89e2f98a9252b15d5ac822c032d4a803786987954657->enter($__internal_9b5f1009d9bec1c86fbc89e2f98a9252b15d5ac822c032d4a803786987954657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    ";
        
        $__internal_9b5f1009d9bec1c86fbc89e2f98a9252b15d5ac822c032d4a803786987954657->leave($__internal_9b5f1009d9bec1c86fbc89e2f98a9252b15d5ac822c032d4a803786987954657_prof);

        
        $__internal_4e7e83bc6a747aead44e2856ad2b0a54c51a1545484220feb10f078b6d5685a0->leave($__internal_4e7e83bc6a747aead44e2856ad2b0a54c51a1545484220feb10f078b6d5685a0_prof);

    }

    // line 18
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_370eae1779715c9626f3a34702fe44972c3958138a97a34ad7839f2dffb79ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370eae1779715c9626f3a34702fe44972c3958138a97a34ad7839f2dffb79ec6->enter($__internal_370eae1779715c9626f3a34702fe44972c3958138a97a34ad7839f2dffb79ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_2cc79e36e36676f6dc1fc0c95e8e6e675774e6f53d840f3575b974b2da74b0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc79e36e36676f6dc1fc0c95e8e6e675774e6f53d840f3575b974b2da74b0ab->enter($__internal_2cc79e36e36676f6dc1fc0c95e8e6e675774e6f53d840f3575b974b2da74b0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 19
        echo "            ";
        
        $__internal_2cc79e36e36676f6dc1fc0c95e8e6e675774e6f53d840f3575b974b2da74b0ab->leave($__internal_2cc79e36e36676f6dc1fc0c95e8e6e675774e6f53d840f3575b974b2da74b0ab_prof);

        
        $__internal_370eae1779715c9626f3a34702fe44972c3958138a97a34ad7839f2dffb79ec6->leave($__internal_370eae1779715c9626f3a34702fe44972c3958138a97a34ad7839f2dffb79ec6_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 19,  118 => 18,  108 => 5,  99 => 4,  85 => 21,  82 => 20,  80 => 18,  75 => 16,  69 => 13,  64 => 11,  59 => 9,  54 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    {% block breadcrumb %}
    {% endblock %}

    <div class=\"ui stackable grid\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.shop.account.layout.before_menu') }}

            {{ knp_menu_render('sylius.shop.account', {'template': '@SyliusUi/Menu/simple.html.twig'}) }}

            {{ sonata_block_render_event('sylius.shop.account.layout.after_menu') }}
        </div>
        <div class=\"twelve wide column\">
            {{ sonata_block_render_event('sylius.shop.account.layout.before_subcontent') }}

            {% block subcontent %}
            {% endblock %}

            {{ sonata_block_render_event('sylius.shop.account.layout.after_subcontent') }}
        </div>
    </div>
{% endblock %}
", "@SyliusShop/Account/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/layout.html.twig");
    }
}
