<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_786256d3100727ee1942014a73c0fadc7a99f1a9127b8200aef29c5ca753a02f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e119e6754e8468d23de698a3c92a5e5f593073a683a4e95d2a89481eec8fb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e119e6754e8468d23de698a3c92a5e5f593073a683a4e95d2a89481eec8fb50->enter($__internal_4e119e6754e8468d23de698a3c92a5e5f593073a683a4e95d2a89481eec8fb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $__internal_5ff1f0c27d3f559b0db70711f5291c06c37b25c0d0980cada9680347a1c39523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff1f0c27d3f559b0db70711f5291c06c37b25c0d0980cada9680347a1c39523->enter($__internal_5ff1f0c27d3f559b0db70711f5291c06c37b25c0d0980cada9680347a1c39523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e119e6754e8468d23de698a3c92a5e5f593073a683a4e95d2a89481eec8fb50->leave($__internal_4e119e6754e8468d23de698a3c92a5e5f593073a683a4e95d2a89481eec8fb50_prof);

        
        $__internal_5ff1f0c27d3f559b0db70711f5291c06c37b25c0d0980cada9680347a1c39523->leave($__internal_5ff1f0c27d3f559b0db70711f5291c06c37b25c0d0980cada9680347a1c39523_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_475aa129d8e27377fe6ddbda5217dc457d99f230c65d6c39c2ca3cb1d621b470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475aa129d8e27377fe6ddbda5217dc457d99f230c65d6c39c2ca3cb1d621b470->enter($__internal_475aa129d8e27377fe6ddbda5217dc457d99f230c65d6c39c2ca3cb1d621b470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_a6feb61d8d9ff63ba43da678cee96b39e63a9c13fa601d3cf3f9497d98d1965f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6feb61d8d9ff63ba43da678cee96b39e63a9c13fa601d3cf3f9497d98d1965f->enter($__internal_a6feb61d8d9ff63ba43da678cee96b39e63a9c13fa601d3cf3f9497d98d1965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 17, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) || array_key_exists("feeds", $context) ? $context["feeds"] : (function () { throw new Twig_Error_Runtime('Variable "feeds" does not exist.', 21, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_a6feb61d8d9ff63ba43da678cee96b39e63a9c13fa601d3cf3f9497d98d1965f->leave($__internal_a6feb61d8d9ff63ba43da678cee96b39e63a9c13fa601d3cf3f9497d98d1965f_prof);

        
        $__internal_475aa129d8e27377fe6ddbda5217dc457d99f230c65d6c39c2ca3cb1d621b470->leave($__internal_475aa129d8e27377fe6ddbda5217dc457d99f230c65d6c39c2ca3cb1d621b470_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 27,  76 => 24,  72 => 23,  65 => 22,  60 => 21,  53 => 17,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends \"SonataBlockBundle:Block:block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Block/block_rss_dashboard.html.twig");
    }
}
