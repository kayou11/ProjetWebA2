<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_ab67d92657e0d881b90984e6d8ad4895a48994bed065bc055c02c2ae7ae23600 extends Twig_Template
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
        $__internal_06dbff0b09e8a6d18025da0e04e63be16a6f2f93da83303cb2070dc02e6a72ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dbff0b09e8a6d18025da0e04e63be16a6f2f93da83303cb2070dc02e6a72ad->enter($__internal_06dbff0b09e8a6d18025da0e04e63be16a6f2f93da83303cb2070dc02e6a72ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $__internal_017f07ecf527adf1d15c0a1b16994f205abf617d0eb9bbd272c0a7f151f72b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017f07ecf527adf1d15c0a1b16994f205abf617d0eb9bbd272c0a7f151f72b00->enter($__internal_017f07ecf527adf1d15c0a1b16994f205abf617d0eb9bbd272c0a7f151f72b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06dbff0b09e8a6d18025da0e04e63be16a6f2f93da83303cb2070dc02e6a72ad->leave($__internal_06dbff0b09e8a6d18025da0e04e63be16a6f2f93da83303cb2070dc02e6a72ad_prof);

        
        $__internal_017f07ecf527adf1d15c0a1b16994f205abf617d0eb9bbd272c0a7f151f72b00->leave($__internal_017f07ecf527adf1d15c0a1b16994f205abf617d0eb9bbd272c0a7f151f72b00_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4e1fe2c94d2750fab76b4bc35c4d6565afe6668e325a81d5d68b4490d2ebe46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1fe2c94d2750fab76b4bc35c4d6565afe6668e325a81d5d68b4490d2ebe46b->enter($__internal_4e1fe2c94d2750fab76b4bc35c4d6565afe6668e325a81d5d68b4490d2ebe46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_0606c39b229da13bcdbd781e2c6157a2098fa467b2311c58f3414a9594b00e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0606c39b229da13bcdbd781e2c6157a2098fa467b2311c58f3414a9594b00e25->enter($__internal_0606c39b229da13bcdbd781e2c6157a2098fa467b2311c58f3414a9594b00e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_0606c39b229da13bcdbd781e2c6157a2098fa467b2311c58f3414a9594b00e25->leave($__internal_0606c39b229da13bcdbd781e2c6157a2098fa467b2311c58f3414a9594b00e25_prof);

        
        $__internal_4e1fe2c94d2750fab76b4bc35c4d6565afe6668e325a81d5d68b4490d2ebe46b->leave($__internal_4e1fe2c94d2750fab76b4bc35c4d6565afe6668e325a81d5d68b4490d2ebe46b_prof);

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
