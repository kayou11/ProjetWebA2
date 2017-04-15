<?php

/* SyliusUiBundle:Form/Buttons:_update.html.twig */
class __TwigTemplate_a6a96577f617b51c4e9584133e3b28aec62a9f96b534ea3edda2848bebd9cc9a extends Twig_Template
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
        $__internal_31c683092f577aedeedc9b2357fb25cbab5186d8c7b5717ad8e6583e24f01983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c683092f577aedeedc9b2357fb25cbab5186d8c7b5717ad8e6583e24f01983->enter($__internal_31c683092f577aedeedc9b2357fb25cbab5186d8c7b5717ad8e6583e24f01983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_update.html.twig"));

        $__internal_36a35a4536a09a077525946f5e4b2e7e25a77beb62635c06330b7282ad7eef22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a35a4536a09a077525946f5e4b2e7e25a77beb62635c06330b7282ad7eef22->enter($__internal_36a35a4536a09a077525946f5e4b2e7e25a77beb62635c06330b7282ad7eef22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_update.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        <div class=\"or\" data-text=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.or"), "html", null, true);
        echo "\"></div>
        ";
        // line 5
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusUiBundle:Form/Buttons:_update.html.twig", 5)->display(array_merge($context, array("path" => (($this->getAttribute(($context["paths"] ?? null), "cancel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paths"] ?? null), "cancel", array()), null)) : (null)))));
        // line 6
        echo "    </div>
</div>
";
        
        $__internal_31c683092f577aedeedc9b2357fb25cbab5186d8c7b5717ad8e6583e24f01983->leave($__internal_31c683092f577aedeedc9b2357fb25cbab5186d8c7b5717ad8e6583e24f01983_prof);

        
        $__internal_36a35a4536a09a077525946f5e4b2e7e25a77beb62635c06330b7282ad7eef22->leave($__internal_36a35a4536a09a077525946f5e4b2e7e25a77beb62635c06330b7282ad7eef22_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form/Buttons:_update.html.twig";
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
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> {{ 'sylius.ui.save_changes'|trans }}</button>
        <div class=\"or\" data-text=\"{{ 'sylius.ui.or'|trans }}\"></div>
        {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
    </div>
</div>
", "SyliusUiBundle:Form/Buttons:_update.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_update.html.twig");
    }
}
