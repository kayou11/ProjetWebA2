<?php

/* SyliusUiBundle:Form/Buttons:_create.html.twig */
class __TwigTemplate_854a42010f76a1aaa7e0401127934a412e81b9a8bbd4d3e098a1c4a793cd32b6 extends Twig_Template
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
        $__internal_b1ebf6e284f0f3c84257f5d812c27ae2d5bc218ac27425113ca27c16d8f32cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ebf6e284f0f3c84257f5d812c27ae2d5bc218ac27425113ca27c16d8f32cf7->enter($__internal_b1ebf6e284f0f3c84257f5d812c27ae2d5bc218ac27425113ca27c16d8f32cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_create.html.twig"));

        $__internal_db0cae61f9f3274b627928f6621043fde57df214630917477054a1177d800855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0cae61f9f3274b627928f6621043fde57df214630917477054a1177d800855->enter($__internal_db0cae61f9f3274b627928f6621043fde57df214630917477054a1177d800855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_create.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
        echo "</button>
        <div class=\"or\" data-text=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.or"), "html", null, true);
        echo "\"></div>
        ";
        // line 5
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusUiBundle:Form/Buttons:_create.html.twig", 5)->display(array_merge($context, array("path" => (($this->getAttribute(($context["paths"] ?? null), "cancel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paths"] ?? null), "cancel", array()), null)) : (null)))));
        // line 6
        echo "    </div>
</div>
";
        
        $__internal_b1ebf6e284f0f3c84257f5d812c27ae2d5bc218ac27425113ca27c16d8f32cf7->leave($__internal_b1ebf6e284f0f3c84257f5d812c27ae2d5bc218ac27425113ca27c16d8f32cf7_prof);

        
        $__internal_db0cae61f9f3274b627928f6621043fde57df214630917477054a1177d800855->leave($__internal_db0cae61f9f3274b627928f6621043fde57df214630917477054a1177d800855_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form/Buttons:_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>{{- 'sylius.ui.create'|trans -}}</button>
        <div class=\"or\" data-text=\"{{ 'sylius.ui.or'|trans }}\"></div>
        {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
    </div>
</div>
", "SyliusUiBundle:Form/Buttons:_create.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_create.html.twig");
    }
}
