<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_f4ebc5b850050f1e95bec45f90259a6595f66c4f93e5fb088cbd30b043335415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e3bd7d6e6d3c8bc5335e449a80af8241c4670dcb968dd732844586bcbcdee13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3bd7d6e6d3c8bc5335e449a80af8241c4670dcb968dd732844586bcbcdee13->enter($__internal_0e3bd7d6e6d3c8bc5335e449a80af8241c4670dcb968dd732844586bcbcdee13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $__internal_bb9dc7336e53aaadd75bd860b7e6497b8c7de5f08459aab55842feb1476bf2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9dc7336e53aaadd75bd860b7e6497b8c7de5f08459aab55842feb1476bf2da->enter($__internal_bb9dc7336e53aaadd75bd860b7e6497b8c7de5f08459aab55842feb1476bf2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3bd7d6e6d3c8bc5335e449a80af8241c4670dcb968dd732844586bcbcdee13->leave($__internal_0e3bd7d6e6d3c8bc5335e449a80af8241c4670dcb968dd732844586bcbcdee13_prof);

        
        $__internal_bb9dc7336e53aaadd75bd860b7e6497b8c7de5f08459aab55842feb1476bf2da->leave($__internal_bb9dc7336e53aaadd75bd860b7e6497b8c7de5f08459aab55842feb1476bf2da_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_09e802d612267f48b3e86c2f8ca8b42ef65edf59a8387b70a6b8564a71d40938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e802d612267f48b3e86c2f8ca8b42ef65edf59a8387b70a6b8564a71d40938->enter($__internal_09e802d612267f48b3e86c2f8ca8b42ef65edf59a8387b70a6b8564a71d40938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_a09a2be667d211b4e0f178c708dc50999840b564897dfaa8ad96928519dc8138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09a2be667d211b4e0f178c708dc50999840b564897dfaa8ad96928519dc8138->enter($__internal_a09a2be667d211b4e0f178c708dc50999840b564897dfaa8ad96928519dc8138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 16, $this->getSourceContext()); })()), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 18, $this->getSourceContext()); })()), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 20, $this->getSourceContext()); })()), "text", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 23, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => array("filter" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 25, $this->getSourceContext()); })()), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_a09a2be667d211b4e0f178c708dc50999840b564897dfaa8ad96928519dc8138->leave($__internal_a09a2be667d211b4e0f178c708dc50999840b564897dfaa8ad96928519dc8138_prof);

        
        $__internal_09e802d612267f48b3e86c2f8ca8b42ef65edf59a8387b70a6b8564a71d40938->leave($__internal_09e802d612267f48b3e86c2f8ca8b42ef65edf59a8387b70a6b8564a71d40938_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 25,  67 => 23,  61 => 20,  56 => 18,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <!-- small box -->
    <div class=\"small-box {{ settings.color }}\">
        <div class=\"inner\">
            <h3>{{ pager.count() }}</h3>

            <p>{{ settings.text|trans({}, admin.translationDomain) }}</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa {{ settings.icon }}\"></i>
        </div>
        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"small-box-footer\">
            {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_stats.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Block/block_stats.html.twig");
    }
}
