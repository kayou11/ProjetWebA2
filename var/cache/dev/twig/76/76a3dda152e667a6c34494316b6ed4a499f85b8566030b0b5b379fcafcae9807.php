<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_feb7484c188dda59a687ecfa1b2335779b459c05e28967723f6fe773cce6b959 extends Twig_Template
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
        // line 11
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 11, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a39c97808ce713e657e58d20f15ae5ef9f8fb07377f68fd1a9227a1ffcdbab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a39c97808ce713e657e58d20f15ae5ef9f8fb07377f68fd1a9227a1ffcdbab9->enter($__internal_3a39c97808ce713e657e58d20f15ae5ef9f8fb07377f68fd1a9227a1ffcdbab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_0af114cc8e9a2ca1ecb5869c7ed229f73c1bc22927af3431e03247bd78ed69a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af114cc8e9a2ca1ecb5869c7ed229f73c1bc22927af3431e03247bd78ed69a5->enter($__internal_0af114cc8e9a2ca1ecb5869c7ed229f73c1bc22927af3431e03247bd78ed69a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a39c97808ce713e657e58d20f15ae5ef9f8fb07377f68fd1a9227a1ffcdbab9->leave($__internal_3a39c97808ce713e657e58d20f15ae5ef9f8fb07377f68fd1a9227a1ffcdbab9_prof);

        
        $__internal_0af114cc8e9a2ca1ecb5869c7ed229f73c1bc22927af3431e03247bd78ed69a5->leave($__internal_0af114cc8e9a2ca1ecb5869c7ed229f73c1bc22927af3431e03247bd78ed69a5_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_7ed23d634c0698939ed99e3111cd5cebbbb13a3f979bd17516be2a64d731abdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed23d634c0698939ed99e3111cd5cebbbb13a3f979bd17516be2a64d731abdd->enter($__internal_7ed23d634c0698939ed99e3111cd5cebbbb13a3f979bd17516be2a64d731abdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_65f9935b7e2964bf8b2c227f698ec4fab0f9cc648172ede3a427eb7cbe901ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f9935b7e2964bf8b2c227f698ec4fab0f9cc648172ede3a427eb7cbe901ade->enter($__internal_65f9935b7e2964bf8b2c227f698ec4fab0f9cc648172ede3a427eb7cbe901ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 14, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) || array_key_exists("feeds", $context) ? $context["feeds"] : (function () { throw new Twig_Error_Runtime('Variable "feeds" does not exist.', 17, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "description", array());
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
        
        $__internal_65f9935b7e2964bf8b2c227f698ec4fab0f9cc648172ede3a427eb7cbe901ade->leave($__internal_65f9935b7e2964bf8b2c227f698ec4fab0f9cc648172ede3a427eb7cbe901ade_prof);

        
        $__internal_7ed23d634c0698939ed99e3111cd5cebbbb13a3f979bd17516be2a64d731abdd->leave($__internal_7ed23d634c0698939ed99e3111cd5cebbbb13a3f979bd17516be2a64d731abdd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  79 => 23,  71 => 20,  63 => 19,  60 => 18,  55 => 17,  48 => 14,  39 => 13,  18 => 11,);
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
    <h3 class=\"sonata-feed-title\">{{ settings.title }}</h3>

    <div class=\"sonata-feeds-container\">
        {% for feed in feeds %}
            <div>
                <strong><a href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a></strong>
                <div>{{ feed.description|raw }}</div>
            </div>
        {% else %}
                No feeds available.
        {% endfor %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_core_rss.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
