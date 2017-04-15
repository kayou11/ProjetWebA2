<?php

/* SyliusAdminBundle::_security.html.twig */
class __TwigTemplate_a467cb3f440cf829ff35786c2fa67bddee3882cee802ff1fb7ce04cfde3bf6d7 extends Twig_Template
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
        $__internal_58b61585ecd053660957b399747b6eb6e884d52f9e9cf2f327dcef9c1f7b51ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b61585ecd053660957b399747b6eb6e884d52f9e9cf2f327dcef9c1f7b51ba->enter($__internal_58b61585ecd053660957b399747b6eb6e884d52f9e9cf2f327dcef9c1f7b51ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_security.html.twig"));

        $__internal_408d3608b3d6dad0f31cd3b0ac1cb958d41d16e70dcc61f4c8c655e31a8848ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408d3608b3d6dad0f31cd3b0ac1cb958d41d16e70dcc61f4c8c655e31a8848ef->enter($__internal_408d3608b3d6dad0f31cd3b0ac1cb958d41d16e70dcc61f4c8c655e31a8848ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_security.html.twig"));

        // line 1
        echo "<div class=\"ui floated simple dropdown item\">
    ";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "firstName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "firstName", array()), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "
    <i class=\"dropdown icon\"></i>
    <div class=\"menu\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_admin_user_update", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"item\">
            <i class=\"user icon\"></i>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "
        </a>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_logout");
        echo "\" id=\"sylius-logout-button\" class=\"item\">
            <i class=\"sign out icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.logout"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        
        $__internal_58b61585ecd053660957b399747b6eb6e884d52f9e9cf2f327dcef9c1f7b51ba->leave($__internal_58b61585ecd053660957b399747b6eb6e884d52f9e9cf2f327dcef9c1f7b51ba_prof);

        
        $__internal_408d3608b3d6dad0f31cd3b0ac1cb958d41d16e70dcc61f4c8c655e31a8848ef->leave($__internal_408d3608b3d6dad0f31cd3b0ac1cb958d41d16e70dcc61f4c8c655e31a8848ef_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  39 => 7,  34 => 5,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui floated simple dropdown item\">
    {{ app.user.firstName|default(app.user.email) }}
    <i class=\"dropdown icon\"></i>
    <div class=\"menu\">
        <a href=\"{{ path('sylius_admin_admin_user_update', {'id': app.user.id}) }}\" class=\"item\">
            <i class=\"user icon\"></i>
            {{ 'sylius.ui.my_account'|trans }}
        </a>
        <a href=\"{{ path('sylius_admin_logout') }}\" id=\"sylius-logout-button\" class=\"item\">
            <i class=\"sign out icon\"></i>
            {{ 'sylius.ui.logout'|trans }}
        </a>
    </div>
</div>
", "SyliusAdminBundle::_security.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/_security.html.twig");
    }
}
