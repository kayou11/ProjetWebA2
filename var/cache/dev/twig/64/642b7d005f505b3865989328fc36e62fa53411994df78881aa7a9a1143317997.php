<?php

/* SyliusAdminBundle:AdminUser:_form.html.twig */
class __TwigTemplate_21bad1cb4bf21e75056d70d868ada4ccfbbcdd3665988f47d17dc0df5c06475d extends Twig_Template
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
        $__internal_28059d73fe41b8e023a6fb59f7d3ecd6328c34004c5b217e7b21fdb0d7232448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28059d73fe41b8e023a6fb59f7d3ecd6328c34004c5b217e7b21fdb0d7232448->enter($__internal_28059d73fe41b8e023a6fb59f7d3ecd6328c34004c5b217e7b21fdb0d7232448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:AdminUser:_form.html.twig"));

        $__internal_e81c30730a385828e6d0c5e8caf6acda1f810ff264a775d73dc5844c714bc75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81c30730a385828e6d0c5e8caf6acda1f810ff264a775d73dc5844c714bc75f->enter($__internal_e81c30730a385828e6d0c5e8caf6acda1f810ff264a775d73dc5844c714bc75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:AdminUser:_form.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.general_info"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui segment\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.additional_information"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.preferences"), "html", null, true);
        echo "</h4>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localeCode", array()), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_28059d73fe41b8e023a6fb59f7d3ecd6328c34004c5b217e7b21fdb0d7232448->leave($__internal_28059d73fe41b8e023a6fb59f7d3ecd6328c34004c5b217e7b21fdb0d7232448_prof);

        
        $__internal_e81c30730a385828e6d0c5e8caf6acda1f810ff264a775d73dc5844c714bc75f->leave($__internal_e81c30730a385828e6d0c5e8caf6acda1f810ff264a775d73dc5844c714bc75f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:AdminUser:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  71 => 21,  67 => 20,  62 => 18,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  34 => 5,  28 => 2,  25 => 1,);
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
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.general_info'|trans }}</h4>
            <div class=\"two fields\">
                {{ form_row(form.username) }}
                {{ form_row(form.email) }}
            </div>
        </div>
        <div class=\"ui segment\">
            {{ form_row(form.plainPassword) }}
            {{ form_row(form.enabled) }}
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.additional_information'|trans }}</h4>
            <div class=\"two fields\">
                {{ form_row(form.firstName) }}
                {{ form_row(form.lastName) }}
            </div>
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.preferences'|trans }}</h4>
            {{ form_row(form.localeCode) }}
        </div>
    </div>
</div>
", "SyliusAdminBundle:AdminUser:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/AdminUser/_form.html.twig");
    }
}
