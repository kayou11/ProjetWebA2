<?php

/* SyliusAdminBundle:ProductAttribute:_form.html.twig */
class __TwigTemplate_0ab0fb31c5be26e5adee30aadf943a3eb774ee00a784b45c107087e321fed38b extends Twig_Template
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
        $__internal_780a17e7496dd783dccfe83a5af58853f8390f5d8289080187265f8cb58ef964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780a17e7496dd783dccfe83a5af58853f8390f5d8289080187265f8cb58ef964->enter($__internal_780a17e7496dd783dccfe83a5af58853f8390f5d8289080187265f8cb58ef964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute:_form.html.twig"));

        $__internal_d5afd1f628faeab6a2a7431112214b31b861e8b5c613997ea1978f8a5f2bf3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5afd1f628faeab6a2a7431112214b31b861e8b5c613997ea1978f8a5f2bf3f6->enter($__internal_d5afd1f628faeab6a2a7431112214b31b861e8b5c613997ea1978f8a5f2bf3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute:_form.html.twig"));

        // line 1
        $context["__internal_12b88f7a8c9760d6358a68cda801a6dea1f9b02eb2ed870dbc1daaa2d4027133"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductAttribute:_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"ui segment\">
    <div class=\"three fields\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "position", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row');
        echo "
    </div>
</div>
";
        // line 12
        if ($this->getAttribute(($context["form"] ?? null), "configuration", array(), "any", true, true)) {
            // line 13
            echo "<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.configuration"), "html", null, true);
            echo "</h4>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "configuration", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 16
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "</div>
";
        }
        // line 20
        echo $context["__internal_12b88f7a8c9760d6358a68cda801a6dea1f9b02eb2ed870dbc1daaa2d4027133"]->gettranslationForm($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()));
        echo "
";
        
        $__internal_780a17e7496dd783dccfe83a5af58853f8390f5d8289080187265f8cb58ef964->leave($__internal_780a17e7496dd783dccfe83a5af58853f8390f5d8289080187265f8cb58ef964_prof);

        
        $__internal_d5afd1f628faeab6a2a7431112214b31b861e8b5c613997ea1978f8a5f2bf3f6->leave($__internal_d5afd1f628faeab6a2a7431112214b31b861e8b5c613997ea1978f8a5f2bf3f6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAttribute:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  73 => 18,  64 => 16,  60 => 15,  56 => 14,  53 => 13,  51 => 12,  45 => 9,  41 => 8,  37 => 7,  30 => 3,  27 => 2,  25 => 1,);
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

{{ form_errors(form) }}

<div class=\"ui segment\">
    <div class=\"three fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.position) }}
        {{ form_row(form.type) }}
    </div>
</div>
{% if form.configuration is defined %}
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.configuration'|trans }}</h4>
    {% for field in form.configuration %}
        {{ form_row(field) }}
    {% endfor %}
</div>
{% endif %}
{{ translationForm(form.translations) }}
", "SyliusAdminBundle:ProductAttribute:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductAttribute/_form.html.twig");
    }
}
