<?php

/* SyliusAdminBundle:Customer:_form.html.twig */
class __TwigTemplate_5666250dc42b3ad81b63f94faef766ea273d566edc4a820a7e48fbe66a7a6522 extends Twig_Template
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
        $__internal_b5bfd8eae5e9b3dc856de5e08b1eee28bc720a64dd41d4a1a4ae63add43449f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5bfd8eae5e9b3dc856de5e08b1eee28bc720a64dd41d4a1a4ae63add43449f0->enter($__internal_b5bfd8eae5e9b3dc856de5e08b1eee28bc720a64dd41d4a1a4ae63add43449f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:_form.html.twig"));

        $__internal_a25a168d291384c0f0412f6b9a62ca65c7b9af2ae898e11667cb72df3d807f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25a168d291384c0f0412f6b9a62ca65c7b9af2ae898e11667cb72df3d807f8d->enter($__internal_a25a168d291384c0f0412f6b9a62ca65c7b9af2ae898e11667cb72df3d807f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:_form.html.twig"));

        // line 1
        echo "<div class=\"ui two column stackable grid\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_details"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
            </div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "group", array()), 'row');
        echo "
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.extra_information"), "html", null, true);
        echo "</h4>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", array()), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phoneNumber", array()), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subscribedToNewsletter", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.account_credentials"), "html", null, true);
        echo "</h4>
            ";
        // line 24
        if ((twig_test_empty($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "user", array())) || (null === $this->getAttribute($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "user", array()), "id", array())))) {
            // line 25
            echo "            <div class=\"field\">
                <div class=\"ui toggle checkbox\">
                   ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "createUser", array()), 'row');
            echo "
                </div>
            </div>
            ";
        }
        // line 31
        echo "            ";
        if ($this->getAttribute(($context["form"] ?? null), "user", array(), "any", true, true)) {
            // line 32
            echo "                <div id=\"user-form\" ";
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "user", array(), "any", false, true), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) {
                echo " style=\"display: none\" ";
            }
            echo ">
                    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), "plainPassword", array()), 'row');
            echo "
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), "enabled", array()), 'row');
            echo "
                </div>
            ";
        }
        // line 37
        echo "        </div>
    </div>
</div>
";
        
        $__internal_b5bfd8eae5e9b3dc856de5e08b1eee28bc720a64dd41d4a1a4ae63add43449f0->leave($__internal_b5bfd8eae5e9b3dc856de5e08b1eee28bc720a64dd41d4a1a4ae63add43449f0_prof);

        
        $__internal_a25a168d291384c0f0412f6b9a62ca65c7b9af2ae898e11667cb72df3d807f8d->leave($__internal_a25a168d291384c0f0412f6b9a62ca65c7b9af2ae898e11667cb72df3d807f8d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  113 => 34,  109 => 33,  102 => 32,  99 => 31,  92 => 27,  88 => 25,  86 => 24,  82 => 23,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  52 => 11,  48 => 10,  43 => 8,  39 => 7,  34 => 5,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui two column stackable grid\">
    {{ form_errors(form) }}
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.customer_details'|trans }}</h4>
            <div class=\"two fields\">
                {{ form_row(form.firstName) }}
                {{ form_row(form.lastName) }}
            </div>
            {{ form_row(form.email) }}
            {{ form_row(form.group) }}
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.extra_information'|trans }}</h4>
            {{ form_row(form.gender) }}
            {{ form_row(form.birthday) }}
            {{ form_row(form.phoneNumber) }}
            {{ form_row(form.subscribedToNewsletter) }}
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.account_credentials'|trans }}</h4>
            {% if customer.user is empty or customer.user.id is null %}
            <div class=\"field\">
                <div class=\"ui toggle checkbox\">
                   {{ form_row(form.createUser) }}
                </div>
            </div>
            {% endif %}
            {% if form.user is defined %}
                <div id=\"user-form\" {% if form.user.vars.data.id is not defined %} style=\"display: none\" {% endif %}>
                    {{ form_row(form.user.plainPassword) }}
                    {{ form_row(form.user.enabled) }}
                </div>
            {% endif %}
        </div>
    </div>
</div>
", "SyliusAdminBundle:Customer:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/_form.html.twig");
    }
}
