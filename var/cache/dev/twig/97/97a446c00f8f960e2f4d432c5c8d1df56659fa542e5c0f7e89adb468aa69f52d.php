<?php

/* SyliusAdminBundle:ProductOption:_form.html.twig */
class __TwigTemplate_36d49fa23fe7c34a61faa39e4d2060d0b4fd4881228752ccc86a492c3d5fb09a extends Twig_Template
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
        $__internal_5bb42119ef9982615610898bb9e2976d94d7e45f3fdac5e4bc27117a29e5141c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb42119ef9982615610898bb9e2976d94d7e45f3fdac5e4bc27117a29e5141c->enter($__internal_5bb42119ef9982615610898bb9e2976d94d7e45f3fdac5e4bc27117a29e5141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductOption:_form.html.twig"));

        $__internal_642a0ed8e129f722a952fe4f449df8022dfa760081ea0b17423293b6d94b7df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642a0ed8e129f722a952fe4f449df8022dfa760081ea0b17423293b6d94b7df3->enter($__internal_642a0ed8e129f722a952fe4f449df8022dfa760081ea0b17423293b6d94b7df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductOption:_form.html.twig"));

        // line 1
        $context["__internal_875e08ebaa6b541e560644e87832a28c4db1dd34a54af953f5291944105a72a9"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductOption:_form.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"two fields\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "position", array()), 'row');
        echo "
    </div>
    ";
        // line 9
        echo $context["__internal_875e08ebaa6b541e560644e87832a28c4db1dd34a54af953f5291944105a72a9"]->gettranslationForm($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()));
        echo "
</div>
<h4 class=\"ui dividing header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.values"), "html", null, true);
        echo "</h4>
";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "values", array()), 'row');
        echo "
";
        
        $__internal_5bb42119ef9982615610898bb9e2976d94d7e45f3fdac5e4bc27117a29e5141c->leave($__internal_5bb42119ef9982615610898bb9e2976d94d7e45f3fdac5e4bc27117a29e5141c_prof);

        
        $__internal_642a0ed8e129f722a952fe4f449df8022dfa760081ea0b17423293b6d94b7df3->leave($__internal_642a0ed8e129f722a952fe4f449df8022dfa760081ea0b17423293b6d94b7df3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductOption:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  50 => 11,  45 => 9,  40 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui segment\">
    {{ form_errors(form) }}
    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.position) }}
    </div>
    {{ translationForm(form.translations) }}
</div>
<h4 class=\"ui dividing header\">{{ 'sylius.ui.values'|trans }}</h4>
{{ form_row(form.values) }}
", "SyliusAdminBundle:ProductOption:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductOption/_form.html.twig");
    }
}
