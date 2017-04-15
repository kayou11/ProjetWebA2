<?php

/* SyliusShopBundle:Register:_form.html.twig */
class __TwigTemplate_0a0548335d18885c8db6cf317c58433c917383370ac2ef24ea1b395570db033f extends Twig_Template
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
        $__internal_9afaf26b6602a7b2fe97431df2fb9cad667a294f5e9f7c5523ffcdc61d7862cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afaf26b6602a7b2fe97431df2fb9cad667a294f5e9f7c5523ffcdc61d7862cf->enter($__internal_9afaf26b6602a7b2fe97431df2fb9cad667a294f5e9f7c5523ffcdc61d7862cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Register:_form.html.twig"));

        $__internal_e7611d6af09a3792fe34c60eedd61a4a1f7e1954b0fea7413dcd316d0389e39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7611d6af09a3792fe34c60eedd61a4a1f7e1954b0fea7413dcd316d0389e39e->enter($__internal_e7611d6af09a3792fe34c60eedd61a4a1f7e1954b0fea7413dcd316d0389e39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Register:_form.html.twig"));

        // line 1
        echo "<h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.personal_information"), "html", null, true);
        echo "</h4>
<div class=\"two fields\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
</div>
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phoneNumber", array()), 'row');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subscribedToNewsletter", array()), 'row');
        echo "
<h4 class=\"ui dividing header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.account_credentials"), "html", null, true);
        echo "</h4>
";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), "plainPassword", array()), "first", array()), 'row');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), "plainPassword", array()), "second", array()), 'row');
        echo "
";
        
        $__internal_9afaf26b6602a7b2fe97431df2fb9cad667a294f5e9f7c5523ffcdc61d7862cf->leave($__internal_9afaf26b6602a7b2fe97431df2fb9cad667a294f5e9f7c5523ffcdc61d7862cf_prof);

        
        $__internal_e7611d6af09a3792fe34c60eedd61a4a1f7e1954b0fea7413dcd316d0389e39e->leave($__internal_e7611d6af09a3792fe34c60eedd61a4a1f7e1954b0fea7413dcd316d0389e39e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Register:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui dividing header\">{{ 'sylius.ui.personal_information'|trans }}</h4>
<div class=\"two fields\">
    {{ form_row(form.firstName) }}
    {{ form_row(form.lastName) }}
</div>
{{ form_row(form.email) }}
{{ form_row(form.phoneNumber) }}
{{ form_row(form.subscribedToNewsletter) }}
<h4 class=\"ui dividing header\">{{ 'sylius.ui.account_credentials'|trans }}</h4>
{{ form_row(form.user.plainPassword.first) }}
{{ form_row(form.user.plainPassword.second) }}
", "SyliusShopBundle:Register:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Register/_form.html.twig");
    }
}
