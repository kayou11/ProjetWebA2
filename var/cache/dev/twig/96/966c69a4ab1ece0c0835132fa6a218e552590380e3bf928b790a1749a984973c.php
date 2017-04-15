<?php

/* SyliusAdminBundle:Promotion:_form.html.twig */
class __TwigTemplate_b70919eb9ace88eff7e4555f068fa2fd847ecc0728a6b4ca47d8eeb06756515c extends Twig_Template
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
        $__internal_a71b9651ef8dc1ad245fff96d9a25f7abd68a9eaa2d55204624b3e170c03283d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71b9651ef8dc1ad245fff96d9a25f7abd68a9eaa2d55204624b3e170c03283d->enter($__internal_a71b9651ef8dc1ad245fff96d9a25f7abd68a9eaa2d55204624b3e170c03283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion:_form.html.twig"));

        $__internal_e7fe6006c686e81753ba2b56459a4b0c1fdb85c2573768c1b8d161b05415e075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fe6006c686e81753ba2b56459a4b0c1fdb85c2573768c1b8d161b05415e075->enter($__internal_e7fe6006c686e81753ba2b56459a4b0c1fdb85c2573768c1b8d161b05415e075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion:_form.html.twig"));

        // line 1
        echo "<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"ui segment\">
            <div class=\"two fields\">
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usageLimit", array()), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "couponBased", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "exclusive", array()), 'row');
        echo "
            </div>
            <div class=\"column\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "priority", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "channels", array()), 'row');
        echo "
            </div>
        </div>
        <h4 class=\"ui dividing header\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.start_date"), "html", null, true);
        echo " & ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.end_date"), "html", null, true);
        echo "</h4>

        <div class=\"two fields\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startsAt", array()), 'row');
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endsAt", array()), 'row');
        echo "
        </div>
    </div>
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.configuration"), "html", null, true);
        echo "</h4>

    <div class=\"ui two column stackable grid\">
        <div class=\"column\" id=\"rules\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rules", array()), 'row');
        echo "
        </div>
        <div class=\"column\" id=\"actions\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "actions", array()), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_a71b9651ef8dc1ad245fff96d9a25f7abd68a9eaa2d55204624b3e170c03283d->leave($__internal_a71b9651ef8dc1ad245fff96d9a25f7abd68a9eaa2d55204624b3e170c03283d_prof);

        
        $__internal_e7fe6006c686e81753ba2b56459a4b0c1fdb85c2573768c1b8d161b05415e075->leave($__internal_e7fe6006c686e81753ba2b56459a4b0c1fdb85c2573768c1b8d161b05415e075_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  104 => 37,  97 => 33,  89 => 28,  85 => 27,  77 => 24,  71 => 21,  67 => 20,  61 => 17,  57 => 16,  53 => 15,  44 => 9,  39 => 7,  35 => 6,  29 => 3,  25 => 1,);
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
    <div class=\"column\">
        {{ form_errors(form) }}
        <div class=\"ui segment\">
            <div class=\"two fields\">
                {{ form_row(form.code) }}
                {{ form_row(form.name) }}
            </div>
            {{ form_row(form.description) }}
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                {{ form_row(form.usageLimit) }}
                {{ form_row(form.couponBased) }}
                {{ form_row(form.exclusive) }}
            </div>
            <div class=\"column\">
                {{ form_row(form.priority) }}
                {{ form_row(form.channels) }}
            </div>
        </div>
        <h4 class=\"ui dividing header\">{{ 'sylius.ui.start_date'|trans }} & {{ 'sylius.ui.end_date'|trans }}</h4>

        <div class=\"two fields\">
            {{ form_row(form.startsAt) }}
            {{ form_row(form.endsAt) }}
        </div>
    </div>
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.configuration'|trans }}</h4>

    <div class=\"ui two column stackable grid\">
        <div class=\"column\" id=\"rules\">
            {{ form_row(form.rules) }}
        </div>
        <div class=\"column\" id=\"actions\">
            {{ form_row(form.actions) }}
        </div>
    </div>
</div>
", "SyliusAdminBundle:Promotion:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/_form.html.twig");
    }
}
