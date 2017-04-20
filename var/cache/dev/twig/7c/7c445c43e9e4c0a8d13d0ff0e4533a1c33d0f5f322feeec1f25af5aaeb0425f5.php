<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_3cbee7088edf6cdd3e2810df6b4c0a3a832f899434ae12aaaaaa2b76bae80d6f extends Twig_Template
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
        $__internal_6f0f813a0d1f4f31a0e011fae4934d76e3b12316c82c60132db5c5559c95e963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0f813a0d1f4f31a0e011fae4934d76e3b12316c82c60132db5c5559c95e963->enter($__internal_6f0f813a0d1f4f31a0e011fae4934d76e3b12316c82c60132db5c5559c95e963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_9c2ea38ab97774534baa5ff46a6a9864b3365fa23410c61236daf9321d320e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2ea38ab97774534baa5ff46a6a9864b3365fa23410c61236daf9321d320e25->enter($__internal_9c2ea38ab97774534baa5ff46a6a9864b3365fa23410c61236daf9321d320e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0f813a0d1f4f31a0e011fae4934d76e3b12316c82c60132db5c5559c95e963->leave($__internal_6f0f813a0d1f4f31a0e011fae4934d76e3b12316c82c60132db5c5559c95e963_prof);

        
        $__internal_9c2ea38ab97774534baa5ff46a6a9864b3365fa23410c61236daf9321d320e25->leave($__internal_9c2ea38ab97774534baa5ff46a6a9864b3365fa23410c61236daf9321d320e25_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_5fa1aa85d26fecc1782761f93e07bd9bcc3619c0dfd3d01bd4ffda1c6d653813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa1aa85d26fecc1782761f93e07bd9bcc3619c0dfd3d01bd4ffda1c6d653813->enter($__internal_5fa1aa85d26fecc1782761f93e07bd9bcc3619c0dfd3d01bd4ffda1c6d653813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_8a53487079f34974265125353bf86c02e94f7f8189c59a7d9a5b5e5a646d0f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a53487079f34974265125353bf86c02e94f7f8189c59a7d9a5b5e5a646d0f7b->enter($__internal_8a53487079f34974265125353bf86c02e94f7f8189c59a7d9a5b5e5a646d0f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_8a53487079f34974265125353bf86c02e94f7f8189c59a7d9a5b5e5a646d0f7b->leave($__internal_8a53487079f34974265125353bf86c02e94f7f8189c59a7d9a5b5e5a646d0f7b_prof);

        
        $__internal_5fa1aa85d26fecc1782761f93e07bd9bcc3619c0dfd3d01bd4ffda1c6d653813->leave($__internal_5fa1aa85d26fecc1782761f93e07bd9bcc3619c0dfd3d01bd4ffda1c6d653813_prof);

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
