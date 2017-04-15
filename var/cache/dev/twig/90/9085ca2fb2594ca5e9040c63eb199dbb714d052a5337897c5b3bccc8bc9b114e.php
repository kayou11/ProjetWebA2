<?php

/* SyliusUiBundle:Grid/Field:yesNo.html.twig */
class __TwigTemplate_cf344b2346cc62508eb3bcaf94417c730020c4ab092a2258509b4e8b022d1764 extends Twig_Template
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
        $__internal_32a4aba71b328000076791705873d7867bbaddbc2d1c7743d630e278f090b426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a4aba71b328000076791705873d7867bbaddbc2d1c7743d630e278f090b426->enter($__internal_32a4aba71b328000076791705873d7867bbaddbc2d1c7743d630e278f090b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:yesNo.html.twig"));

        $__internal_b32ed64ccb11205f588579a14970bd9494d4e1e0f92c1293222dce801966e53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32ed64ccb11205f588579a14970bd9494d4e1e0f92c1293222dce801966e53d->enter($__internal_b32ed64ccb11205f588579a14970bd9494d4e1e0f92c1293222dce801966e53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:yesNo.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusUiBundle:Grid/Field:yesNo.html.twig", 1);
        // line 2
        echo $context["label"]->getyesNo(($context["data"] ?? $this->getContext($context, "data")));
        echo "
";
        
        $__internal_32a4aba71b328000076791705873d7867bbaddbc2d1c7743d630e278f090b426->leave($__internal_32a4aba71b328000076791705873d7867bbaddbc2d1c7743d630e278f090b426_prof);

        
        $__internal_b32ed64ccb11205f588579a14970bd9494d4e1e0f92c1293222dce801966e53d->leave($__internal_b32ed64ccb11205f588579a14970bd9494d4e1e0f92c1293222dce801966e53d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:yesNo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}
{{ label.yesNo(data) }}
", "SyliusUiBundle:Grid/Field:yesNo.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/yesNo.html.twig");
    }
}
