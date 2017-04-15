<?php

/* @SyliusUi/Modal/_confirmation.html.twig */
class __TwigTemplate_54f6c7dced74f6e39430d9602041affab6d7e226c9151802f025ab69367d9429 extends Twig_Template
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
        $__internal_91cff06eab1ef22f0629031c9454d190d34fb5b1ba99d237c29f5d27f895638b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cff06eab1ef22f0629031c9454d190d34fb5b1ba99d237c29f5d27f895638b->enter($__internal_91cff06eab1ef22f0629031c9454d190d34fb5b1ba99d237c29f5d27f895638b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Modal/_confirmation.html.twig"));

        $__internal_2036123f0b826fed0630788947bc3bd224c76206ccce75545214cbb4e55d878d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2036123f0b826fed0630788947bc3bd224c76206ccce75545214cbb4e55d878d->enter($__internal_2036123f0b826fed0630788947bc3bd224c76206ccce75545214cbb4e55d878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Modal/_confirmation.html.twig"));

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
        
        $__internal_91cff06eab1ef22f0629031c9454d190d34fb5b1ba99d237c29f5d27f895638b->leave($__internal_91cff06eab1ef22f0629031c9454d190d34fb5b1ba99d237c29f5d27f895638b_prof);

        
        $__internal_2036123f0b826fed0630788947bc3bd224c76206ccce75545214cbb4e55d878d->leave($__internal_2036123f0b826fed0630788947bc3bd224c76206ccce75545214cbb4e55d878d_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Modal/_confirmation.html.twig";
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
", "@SyliusUi/Modal/_confirmation.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Modal/_confirmation.html.twig");
    }
}
