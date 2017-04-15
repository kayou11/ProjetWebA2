<?php

/* SyliusShopBundle:Contact:request.html.twig */
class __TwigTemplate_457c60aee106ffcbb473ac89d250a2fde35224a58d1e6a98405fdaf6d1dba12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Contact:request.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eadf5bc2d44a9820724d7dde7e7ec00ba60249e4cbbb8dabb77fa335560d039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eadf5bc2d44a9820724d7dde7e7ec00ba60249e4cbbb8dabb77fa335560d039->enter($__internal_2eadf5bc2d44a9820724d7dde7e7ec00ba60249e4cbbb8dabb77fa335560d039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Contact:request.html.twig"));

        $__internal_a246beac0991842b34eef2a9533bbfd04766034d4f35c3c5c3ca73b76cc28979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a246beac0991842b34eef2a9533bbfd04766034d4f35c3c5c3ca73b76cc28979->enter($__internal_a246beac0991842b34eef2a9533bbfd04766034d4f35c3c5c3ca73b76cc28979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Contact:request.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eadf5bc2d44a9820724d7dde7e7ec00ba60249e4cbbb8dabb77fa335560d039->leave($__internal_2eadf5bc2d44a9820724d7dde7e7ec00ba60249e4cbbb8dabb77fa335560d039_prof);

        
        $__internal_a246beac0991842b34eef2a9533bbfd04766034d4f35c3c5c3ca73b76cc28979->leave($__internal_a246beac0991842b34eef2a9533bbfd04766034d4f35c3c5c3ca73b76cc28979_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8bedbaa9245932d8ad8e908793481797f81624cc3ce68a8ef83b8bc8f019e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bedbaa9245932d8ad8e908793481797f81624cc3ce68a8ef83b8bc8f019e44->enter($__internal_a8bedbaa9245932d8ad8e908793481797f81624cc3ce68a8ef83b8bc8f019e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dbce16da984e60f520ee90bcfdd50c5b2e6a707d4c7708d8a41b430e39635e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbce16da984e60f520ee90bcfdd50c5b2e6a707d4c7708d8a41b430e39635e53->enter($__internal_dbce16da984e60f520ee90bcfdd50c5b2e6a707d4c7708d8a41b430e39635e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column centered grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular mail icon\"></i>
                <div class=\"content\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.contact_us"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.use_the_contact_form_below_to_send_us_a_message"), "html", null, true);
        echo "</div>

                    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.contact.request.after_content_header"));
        echo "
                </div>
            </h1>
            <div class=\"ui segment\">
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_contact_request"), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'row');
        echo "

                ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.contact.request.form", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                <button type=\"submit\" class=\"ui fluid large primary submit button\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.send"), "html", null, true);
        echo "</button>
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_dbce16da984e60f520ee90bcfdd50c5b2e6a707d4c7708d8a41b430e39635e53->leave($__internal_dbce16da984e60f520ee90bcfdd50c5b2e6a707d4c7708d8a41b430e39635e53_prof);

        
        $__internal_a8bedbaa9245932d8ad8e908793481797f81624cc3ce68a8ef83b8bc8f019e44->leave($__internal_a8bedbaa9245932d8ad8e908793481797f81624cc3ce68a8ef83b8bc8f019e44_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Contact:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  98 => 26,  94 => 25,  89 => 23,  84 => 21,  80 => 20,  76 => 19,  69 => 15,  64 => 13,  60 => 12,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column centered grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular mail icon\"></i>
                <div class=\"content\">
                    {{ 'sylius.ui.contact_us'|trans }}
                    <div class=\"sub header\">{{ 'sylius.ui.use_the_contact_form_below_to_send_us_a_message'|trans }}</div>

                    {{ sonata_block_render_event('sylius.shop.contact.request.after_content_header') }}
                </div>
            </h1>
            <div class=\"ui segment\">
                {{ form_start(form, {'action': path('sylius_shop_contact_request'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
                {{ form_row(form.email) }}
                {{ form_row(form.message) }}

                {{ sonata_block_render_event('sylius.shop.contact.request.form', {'form': form}) }}

                {{ form_row(form._token) }}
                <button type=\"submit\" class=\"ui fluid large primary submit button\">{{ 'sylius.ui.send'|trans }}</button>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Contact:request.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Contact/request.html.twig");
    }
}
