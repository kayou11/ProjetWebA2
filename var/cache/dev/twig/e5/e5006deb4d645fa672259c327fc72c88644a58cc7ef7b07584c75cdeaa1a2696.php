<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_9efe6fbcac8669d60f7cabc525176de31c36ea6191846a289d20c90d4cd77f0e extends Twig_Template
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
        $__internal_68c06d7cc21a05ed8f6f4f450e6c5370444c0fa58fb8f571138ba135effb4b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c06d7cc21a05ed8f6f4f450e6c5370444c0fa58fb8f571138ba135effb4b13->enter($__internal_68c06d7cc21a05ed8f6f4f450e6c5370444c0fa58fb8f571138ba135effb4b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $__internal_45ae1548f33ce3cd07aeee4f4a2eeb17ce031cf4824aa8de329cff008a3bca20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ae1548f33ce3cd07aeee4f4a2eeb17ce031cf4824aa8de329cff008a3bca20->enter($__internal_45ae1548f33ce3cd07aeee4f4a2eeb17ce031cf4824aa8de329cff008a3bca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c06d7cc21a05ed8f6f4f450e6c5370444c0fa58fb8f571138ba135effb4b13->leave($__internal_68c06d7cc21a05ed8f6f4f450e6c5370444c0fa58fb8f571138ba135effb4b13_prof);

        
        $__internal_45ae1548f33ce3cd07aeee4f4a2eeb17ce031cf4824aa8de329cff008a3bca20->leave($__internal_45ae1548f33ce3cd07aeee4f4a2eeb17ce031cf4824aa8de329cff008a3bca20_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8096a9752581d3ff9bf490eb55396176b91a25db75026889c5f5f24acaccdfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8096a9752581d3ff9bf490eb55396176b91a25db75026889c5f5f24acaccdfe1->enter($__internal_8096a9752581d3ff9bf490eb55396176b91a25db75026889c5f5f24acaccdfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_9f10ec87244e9045e0300c4a213753d45d9d725c46bd93bc67d5009559dd499b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f10ec87244e9045e0300c4a213753d45d9d725c46bd93bc67d5009559dd499b->enter($__internal_9f10ec87244e9045e0300c4a213753d45d9d725c46bd93bc67d5009559dd499b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_9f10ec87244e9045e0300c4a213753d45d9d725c46bd93bc67d5009559dd499b->leave($__internal_9f10ec87244e9045e0300c4a213753d45d9d725c46bd93bc67d5009559dd499b_prof);

        
        $__internal_8096a9752581d3ff9bf490eb55396176b91a25db75026889c5f5f24acaccdfe1->leave($__internal_8096a9752581d3ff9bf490eb55396176b91a25db75026889c5f5f24acaccdfe1_prof);

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
