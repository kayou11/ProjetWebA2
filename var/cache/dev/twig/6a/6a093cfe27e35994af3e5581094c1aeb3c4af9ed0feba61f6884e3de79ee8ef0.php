<?php

/* SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig */
class __TwigTemplate_6c09757d2bb5e4be54ad0db359e76d80a2a3f5ce0900cd41d0903e438f24bd3c extends Twig_Template
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
        $__internal_4e977737f34c5d6c9eaa7dca8f18650520bade57c5f7df2a751dbecb9584116d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e977737f34c5d6c9eaa7dca8f18650520bade57c5f7df2a751dbecb9584116d->enter($__internal_4e977737f34c5d6c9eaa7dca8f18650520bade57c5f7df2a751dbecb9584116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig"));

        $__internal_fe6b4c00c43aff167e25620aef62aa43f65b80bee01b98acf3b8025c40bf3383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6b4c00c43aff167e25620aef62aa43f65b80bee01b98acf3b8025c40bf3383->enter($__internal_fe6b4c00c43aff167e25620aef62aa43f65b80bee01b98acf3b8025c40bf3383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->getdefault($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "fullname", array()), (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cart")) : ("cart")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.process_your_orders")) : ("sylius.ui.process_your_orders"))));
        echo "
";
        
        $__internal_4e977737f34c5d6c9eaa7dca8f18650520bade57c5f7df2a751dbecb9584116d->leave($__internal_4e977737f34c5d6c9eaa7dca8f18650520bade57c5f7df2a751dbecb9584116d_prof);

        
        $__internal_fe6b4c00c43aff167e25620aef62aa43f65b80bee01b98acf3b8025c40bf3383->leave($__internal_fe6b4c00c43aff167e25620aef62aa43f65b80bee01b98acf3b8025c40bf3383_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{{ headers.default(customer.fullname, configuration.vars.icon|default('cart'), configuration.vars.subheader|default('sylius.ui.process_your_orders')|trans) }}
", "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Order/Index/_customerHeader.html.twig");
    }
}
