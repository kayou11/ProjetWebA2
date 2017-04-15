<?php

/* SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig */
class __TwigTemplate_148a40a9c673a237ec3408b597cc121ed5827adf0a348d26f6482293fae97aca extends Twig_Template
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
        $__internal_2f43cac594b3407818a84b88fcb3d2eaf1e6ce580c3e9ede3d17d6c42c9341ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f43cac594b3407818a84b88fcb3d2eaf1e6ce580c3e9ede3d17d6c42c9341ed->enter($__internal_2f43cac594b3407818a84b88fcb3d2eaf1e6ce580c3e9ede3d17d6c42c9341ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig"));

        $__internal_7567ba820a16d0db61828bb68e537e72de3e46cb55adb6b7568f209072897147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7567ba820a16d0db61828bb68e537e72de3e46cb55adb6b7568f209072897147->enter($__internal_7567ba820a16d0db61828bb68e537e72de3e46cb55adb6b7568f209072897147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig"));

        // line 1
        $context["id"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "id"), "method");
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_set_as_default", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "PATCH"));
        echo "
    <input hidden name=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "defaultAddress", array()), "vars", array()), "full_name", array(), "array"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" />
    <button type=\"submit\" class=\"ui labeled icon teal button\">
        <i class=\"save icon\"></i>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.set_as_default"), "html", null, true);
        echo "
    </button>
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_2f43cac594b3407818a84b88fcb3d2eaf1e6ce580c3e9ede3d17d6c42c9341ed->leave($__internal_2f43cac594b3407818a84b88fcb3d2eaf1e6ce580c3e9ede3d17d6c42c9341ed_prof);

        
        $__internal_7567ba820a16d0db61828bb68e537e72de3e46cb55adb6b7568f209072897147->leave($__internal_7567ba820a16d0db61828bb68e537e72de3e46cb55adb6b7568f209072897147_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  41 => 6,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set id = app.request.attributes.get('id') %}

{{ form_start(form, {'action': path('sylius_shop_account_address_book_set_as_default', {'id': id}), 'method': 'PATCH'}) }}
    <input hidden name=\"{{ form.defaultAddress.vars['full_name'] }}\" value=\"{{ id }}\" />
    <button type=\"submit\" class=\"ui labeled icon teal button\">
        <i class=\"save icon\"></i>{{ 'sylius.ui.set_as_default'|trans }}
    </button>
{{ form_row(form._token) }}
{{ form_end(form, {'render_rest': false}) }}
", "SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_defaultAddressForm.html.twig");
    }
}
