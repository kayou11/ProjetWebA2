<?php

/* SyliusAdminBundle:Channel:_form.html.twig */
class __TwigTemplate_4525014a3346a105af788989dd0f0043cd8db9265ccc4e7c1769af0ed06047d4 extends Twig_Template
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
        $__internal_c950bfd15354f8723dda64b6034196eb258559cb51308252ea408782c77a98c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c950bfd15354f8723dda64b6034196eb258559cb51308252ea408782c77a98c6->enter($__internal_c950bfd15354f8723dda64b6034196eb258559cb51308252ea408782c77a98c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel:_form.html.twig"));

        $__internal_24664da631e6cae72200d4146257c4009623d712201e5605f4299c703604815b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24664da631e6cae72200d4146257c4009623d712201e5605f4299c703604815b->enter($__internal_24664da631e6cae72200d4146257c4009623d712201e5605f4299c703604815b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"two fields\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'row');
        echo "
            <div class=\"two fields\">
                <div class=\"field\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hostname", array()), 'label');
        echo "
                    <div class=\"ui labeled input\">
                        <div class=\"ui label\">http://</div>
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hostname", array()), 'widget');
        echo "
                    </div>
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hostname", array()), 'errors');
        echo "
                </div>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contactEmail", array()), 'row');
        echo "
            </div>
            <div class=\"two fields\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "color", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "themeName", array()), 'row');
        echo "
            </div>
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "locales", array()), 'row');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "defaultLocale", array()), 'row');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "currencies", array()), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "baseCurrency", array()), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "defaultTaxZone", array()), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taxCalculationStrategy", array()), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "skippingShippingStepAllowed", array()), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "skippingPaymentStepAllowed", array()), 'row');
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "accountVerificationRequired", array()), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_c950bfd15354f8723dda64b6034196eb258559cb51308252ea408782c77a98c6->leave($__internal_c950bfd15354f8723dda64b6034196eb258559cb51308252ea408782c77a98c6_prof);

        
        $__internal_24664da631e6cae72200d4146257c4009623d712201e5605f4299c703604815b->leave($__internal_24664da631e6cae72200d4146257c4009623d712201e5605f4299c703604815b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Channel:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  82 => 25,  78 => 24,  72 => 21,  67 => 19,  62 => 17,  56 => 14,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  32 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            <div class=\"two fields\">
                {{ form_row(form.code) }}
                {{ form_row(form.name) }}
            </div>
            {{ form_row(form.description) }}
            {{ form_row(form.enabled) }}
            <div class=\"two fields\">
                <div class=\"field\">
                    {{ form_label(form.hostname) }}
                    <div class=\"ui labeled input\">
                        <div class=\"ui label\">http://</div>
                        {{ form_widget(form.hostname) }}
                    </div>
                    {{ form_errors(form.hostname) }}
                </div>
                {{ form_row(form.contactEmail) }}
            </div>
            <div class=\"two fields\">
                {{ form_row(form.color) }}
                {{ form_row(form.themeName) }}
            </div>
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_row(form.locales) }}
            {{ form_row(form.defaultLocale) }}
            {{ form_row(form.currencies) }}
            {{ form_row(form.baseCurrency) }}
            {{ form_row(form.defaultTaxZone) }}
            {{ form_row(form.taxCalculationStrategy) }}
            {{ form_row(form.skippingShippingStepAllowed) }}
            {{ form_row(form.skippingPaymentStepAllowed) }}
            {{ form_row(form.accountVerificationRequired) }}
        </div>
    </div>
</div>
", "SyliusAdminBundle:Channel:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Channel/_form.html.twig");
    }
}
