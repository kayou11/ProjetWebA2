<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_b89e69a2aececb9ea2c5f4495c94f0b7689c5fabcf41a432c966ba9588ef86a8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d5446f8bb284ab0fe1b2ad44d845a4b8643cd0751ec915575daec92231ac77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5446f8bb284ab0fe1b2ad44d845a4b8643cd0751ec915575daec92231ac77e->enter($__internal_0d5446f8bb284ab0fe1b2ad44d845a4b8643cd0751ec915575daec92231ac77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_7f2a2f498a0bd8c1b0f799fbf10abc1c77b22cab798028b4f87edd7341d626df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2a2f498a0bd8c1b0f799fbf10abc1c77b22cab798028b4f87edd7341d626df->enter($__internal_7f2a2f498a0bd8c1b0f799fbf10abc1c77b22cab798028b4f87edd7341d626df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5446f8bb284ab0fe1b2ad44d845a4b8643cd0751ec915575daec92231ac77e->leave($__internal_0d5446f8bb284ab0fe1b2ad44d845a4b8643cd0751ec915575daec92231ac77e_prof);

        
        $__internal_7f2a2f498a0bd8c1b0f799fbf10abc1c77b22cab798028b4f87edd7341d626df->leave($__internal_7f2a2f498a0bd8c1b0f799fbf10abc1c77b22cab798028b4f87edd7341d626df_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_24de51137237a9cdeba013de3a3549dd52129b5c41e26bc62fc9d787b6555716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24de51137237a9cdeba013de3a3549dd52129b5c41e26bc62fc9d787b6555716->enter($__internal_24de51137237a9cdeba013de3a3549dd52129b5c41e26bc62fc9d787b6555716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_9c0c454d146f8fd1dae9aa0579c3a0dc290a053fb0022203ef5a548d90033a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0c454d146f8fd1dae9aa0579c3a0dc290a053fb0022203ef5a548d90033a91->enter($__internal_9c0c454d146f8fd1dae9aa0579c3a0dc290a053fb0022203ef5a548d90033a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feeds"] ?? $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute($context["feed"], "description", array());
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
        
        $__internal_9c0c454d146f8fd1dae9aa0579c3a0dc290a053fb0022203ef5a548d90033a91->leave($__internal_9c0c454d146f8fd1dae9aa0579c3a0dc290a053fb0022203ef5a548d90033a91_prof);

        
        $__internal_24de51137237a9cdeba013de3a3549dd52129b5c41e26bc62fc9d787b6555716->leave($__internal_24de51137237a9cdeba013de3a3549dd52129b5c41e26bc62fc9d787b6555716_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "SonataBlockBundle:Block:block_core_rss.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
