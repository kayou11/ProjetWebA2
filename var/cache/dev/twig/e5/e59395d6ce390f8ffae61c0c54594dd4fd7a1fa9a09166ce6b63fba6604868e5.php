<?php

/* SyliusAdminBundle:Taxon:_form.html.twig */
class __TwigTemplate_87c67be29263beb27f243e2c251662e5f065dbaada33a3c746920719206bbfa2 extends Twig_Template
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
        $__internal_d8043bba3d0db9290ede3ab879770b57e785bd6db59797bffd8dfb33c706634f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8043bba3d0db9290ede3ab879770b57e785bd6db59797bffd8dfb33c706634f->enter($__internal_d8043bba3d0db9290ede3ab879770b57e785bd6db59797bffd8dfb33c706634f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_form.html.twig"));

        $__internal_a3062ef8a142a547303635977d7eb83ce2e0c3be1e01fc487bd84aa6bcde9401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3062ef8a142a547303635977d7eb83ce2e0c3be1e01fc487bd84aa6bcde9401->enter($__internal_a3062ef8a142a547303635977d7eb83ce2e0c3be1e01fc487bd84aa6bcde9401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_form.html.twig"));

        // line 1
        $context["__internal_1c3d0f7c3b25f61e6dcf831bf3ead58dc07a9d62d21ab4de338d4d979774ac29"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:Taxon:_form.html.twig", 1);
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
        if (($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "id", array()) != null)) {
            // line 8
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), 'row');
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), 'widget', array("attr" => array("style" => "display: none;")));
            echo "
        ";
        }
        // line 12
        echo "    </div>
</div>
";
        // line 14
        echo $context["__internal_1c3d0f7c3b25f61e6dcf831bf3ead58dc07a9d62d21ab4de338d4d979774ac29"]->gettranslationFormWithSlug($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()), "@SyliusAdmin/Taxon/_slugField.html.twig", ($context["taxon"] ?? $this->getContext($context, "taxon")));
        echo "

";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Taxon/_media.html.twig", "SyliusAdminBundle:Taxon:_form.html.twig", 16)->display($context);
        
        $__internal_d8043bba3d0db9290ede3ab879770b57e785bd6db59797bffd8dfb33c706634f->leave($__internal_d8043bba3d0db9290ede3ab879770b57e785bd6db59797bffd8dfb33c706634f_prof);

        
        $__internal_a3062ef8a142a547303635977d7eb83ce2e0c3be1e01fc487bd84aa6bcde9401->leave($__internal_a3062ef8a142a547303635977d7eb83ce2e0c3be1e01fc487bd84aa6bcde9401_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  54 => 12,  48 => 10,  42 => 8,  40 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationFormWithSlug %}

<div class=\"ui segment\">
    {{ form_errors(form) }}
    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {% if taxon.id != null %}
            {{ form_row(form.parent) }}
        {% else %}
            {{ form_widget(form.parent, {'attr': {'style': 'display: none;'}}) }}
        {% endif %}
    </div>
</div>
{{ translationFormWithSlug(form.translations, '@SyliusAdmin/Taxon/_slugField.html.twig', taxon) }}

{% include '@SyliusAdmin/Taxon/_media.html.twig' %}
", "SyliusAdminBundle:Taxon:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_form.html.twig");
    }
}
