<?php

/* SyliusAdminBundle::_notification.html.twig */
class __TwigTemplate_9e3b7654d4c5cdd84fb976f3c0b6b9e8e323fdae2e1b0f2cd97268507bf26c79 extends Twig_Template
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
        $__internal_f9449f6f195e60325e66f7fc261f407a2ed2fefb3c051984b18b9d86833ccead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9449f6f195e60325e66f7fc261f407a2ed2fefb3c051984b18b9d86833ccead->enter($__internal_f9449f6f195e60325e66f7fc261f407a2ed2fefb3c051984b18b9d86833ccead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_notification.html.twig"));

        $__internal_56f86789768d74e5839edf84027582fdf6eb50bd61062544b0808b5823b11ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f86789768d74e5839edf84027582fdf6eb50bd61062544b0808b5823b11ddf->enter($__internal_56f86789768d74e5839edf84027582fdf6eb50bd61062544b0808b5823b11ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_notification.html.twig"));

        // line 1
        echo "<div class=\"ui floated simple dropdown icon item\" id=\"sylius-version-notification\" data-frequency=\"";
        echo twig_escape_filter($this->env, ($context["frequency"] ?? $this->getContext($context, "frequency")), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_get_version");
        echo "\">
    <i class=\"outline bell icon\"></i>
    <div class=\"menu\">
        <div class=\"ui message\" id=\"no-notifications\">
            <span>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_new_notifications"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ui message\" id=\"notifications\">
            <span>
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.there_is_a_new_version_of_sylius_available"), "html", null, true);
        echo "
                <i class=\"remove link icon\" data-dismiss style=\"margin-left: 1em; margin-right: -0.5em;\"></i>
            </span>
            <br/>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.contact_your_technician_to_upgrade"), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>
";
        
        $__internal_f9449f6f195e60325e66f7fc261f407a2ed2fefb3c051984b18b9d86833ccead->leave($__internal_f9449f6f195e60325e66f7fc261f407a2ed2fefb3c051984b18b9d86833ccead_prof);

        
        $__internal_56f86789768d74e5839edf84027582fdf6eb50bd61062544b0808b5823b11ddf->leave($__internal_56f86789768d74e5839edf84027582fdf6eb50bd61062544b0808b5823b11ddf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  42 => 9,  35 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui floated simple dropdown icon item\" id=\"sylius-version-notification\" data-frequency=\"{{ frequency }}\" data-url=\"{{ path('sylius_admin_ajax_get_version') }}\">
    <i class=\"outline bell icon\"></i>
    <div class=\"menu\">
        <div class=\"ui message\" id=\"no-notifications\">
            <span>{{ 'sylius.ui.no_new_notifications'|trans }}</span>
        </div>
        <div class=\"ui message\" id=\"notifications\">
            <span>
                {{ 'sylius.ui.there_is_a_new_version_of_sylius_available'|trans }}
                <i class=\"remove link icon\" data-dismiss style=\"margin-left: 1em; margin-right: -0.5em;\"></i>
            </span>
            <br/>
            <span>{{ 'sylius.ui.contact_your_technician_to_upgrade'|trans }}</span>
        </div>
    </div>
</div>
", "SyliusAdminBundle::_notification.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/_notification.html.twig");
    }
}
