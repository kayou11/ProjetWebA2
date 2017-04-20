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
        $__internal_084202fe6dbe9be3a98a1b808521b28f838811ea41e8a0fb1cc3aaf9a70d8a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084202fe6dbe9be3a98a1b808521b28f838811ea41e8a0fb1cc3aaf9a70d8a35->enter($__internal_084202fe6dbe9be3a98a1b808521b28f838811ea41e8a0fb1cc3aaf9a70d8a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_e42fab823ea96ffd65c1f4559e08149a4b3ae55fe6058268ec45f1537b18f199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42fab823ea96ffd65c1f4559e08149a4b3ae55fe6058268ec45f1537b18f199->enter($__internal_e42fab823ea96ffd65c1f4559e08149a4b3ae55fe6058268ec45f1537b18f199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084202fe6dbe9be3a98a1b808521b28f838811ea41e8a0fb1cc3aaf9a70d8a35->leave($__internal_084202fe6dbe9be3a98a1b808521b28f838811ea41e8a0fb1cc3aaf9a70d8a35_prof);

        
        $__internal_e42fab823ea96ffd65c1f4559e08149a4b3ae55fe6058268ec45f1537b18f199->leave($__internal_e42fab823ea96ffd65c1f4559e08149a4b3ae55fe6058268ec45f1537b18f199_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_bacd8669ef2f2f4d0c9cfc677966a2148f576b1b5566a4ec7c74ad7d8d41f2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacd8669ef2f2f4d0c9cfc677966a2148f576b1b5566a4ec7c74ad7d8d41f2de->enter($__internal_bacd8669ef2f2f4d0c9cfc677966a2148f576b1b5566a4ec7c74ad7d8d41f2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_97f5fcc4e96e94170361f0753a2aad5ad2608d52159de7a4a8fdc7f3780d7c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f5fcc4e96e94170361f0753a2aad5ad2608d52159de7a4a8fdc7f3780d7c51->enter($__internal_97f5fcc4e96e94170361f0753a2aad5ad2608d52159de7a4a8fdc7f3780d7c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_97f5fcc4e96e94170361f0753a2aad5ad2608d52159de7a4a8fdc7f3780d7c51->leave($__internal_97f5fcc4e96e94170361f0753a2aad5ad2608d52159de7a4a8fdc7f3780d7c51_prof);

        
        $__internal_bacd8669ef2f2f4d0c9cfc677966a2148f576b1b5566a4ec7c74ad7d8d41f2de->leave($__internal_bacd8669ef2f2f4d0c9cfc677966a2148f576b1b5566a4ec7c74ad7d8d41f2de_prof);

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
