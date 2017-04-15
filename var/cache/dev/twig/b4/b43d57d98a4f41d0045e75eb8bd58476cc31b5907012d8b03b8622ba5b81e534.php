<?php

/* SyliusUiBundle:Modal:_confirmation.html.twig */
class __TwigTemplate_681cf868de220e42c34b1dea3cdbad484fa7db8b139b48e14c1fd023d7a68ffd extends Twig_Template
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
        $__internal_2c2afadd608c8c2c7c6cbb469550567026e0775c77c7ad9b4b2d7c667e299b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2afadd608c8c2c7c6cbb469550567026e0775c77c7ad9b4b2d7c667e299b70->enter($__internal_2c2afadd608c8c2c7c6cbb469550567026e0775c77c7ad9b4b2d7c667e299b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Modal:_confirmation.html.twig"));

        $__internal_e9be4084eeea3a021ade760ae8ccca54722d03a5726d8544ed4e187298b8e675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9be4084eeea3a021ade760ae8ccca54722d03a5726d8544ed4e187298b8e675->enter($__internal_e9be4084eeea3a021ade760ae8ccca54722d03a5726d8544ed4e187298b8e675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Modal:_confirmation.html.twig"));

        // line 1
        echo "<div class=\"ui small basic modal\" id=\"confirmation-modal\">
    <div class=\"ui icon header\">
        <i class=\"warning sign icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.confirm_your_action"), "html", null, true);
        echo "
    </div>
    <div class=\"content\">
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.are_your_sure_you_want_to_perform_this_action"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"actions\">
        <div class=\"ui red basic cancel inverted button\">
            <i class=\"remove icon\"></i>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_label"), "html", null, true);
        echo "
        </div>
        <div class=\"ui green ok inverted button\" id=\"confirmation-button\">
            <i class=\"checkmark icon\"></i>
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.yes_label"), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_2c2afadd608c8c2c7c6cbb469550567026e0775c77c7ad9b4b2d7c667e299b70->leave($__internal_2c2afadd608c8c2c7c6cbb469550567026e0775c77c7ad9b4b2d7c667e299b70_prof);

        
        $__internal_e9be4084eeea3a021ade760ae8ccca54722d03a5726d8544ed4e187298b8e675->leave($__internal_e9be4084eeea3a021ade760ae8ccca54722d03a5726d8544ed4e187298b8e675_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Modal:_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  44 => 12,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui small basic modal\" id=\"confirmation-modal\">
    <div class=\"ui icon header\">
        <i class=\"warning sign icon\"></i>
        {{ 'sylius.ui.confirm_your_action'|trans }}
    </div>
    <div class=\"content\">
        <p>{{ 'sylius.ui.are_your_sure_you_want_to_perform_this_action'|trans }}</p>
    </div>
    <div class=\"actions\">
        <div class=\"ui red basic cancel inverted button\">
            <i class=\"remove icon\"></i>
            {{ 'sylius.ui.no_label'|trans }}
        </div>
        <div class=\"ui green ok inverted button\" id=\"confirmation-button\">
            <i class=\"checkmark icon\"></i>
            {{ 'sylius.ui.yes_label'|trans }}
        </div>
    </div>
</div>
", "SyliusUiBundle:Modal:_confirmation.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Modal/_confirmation.html.twig");
    }
}
