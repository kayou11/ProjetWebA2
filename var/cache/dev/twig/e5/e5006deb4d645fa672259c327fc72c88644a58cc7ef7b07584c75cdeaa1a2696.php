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
        $__internal_890c1bd2f546aa2236ef99ee9079fba5be5cc718e2adb7b378b3460ee1d8ce1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890c1bd2f546aa2236ef99ee9079fba5be5cc718e2adb7b378b3460ee1d8ce1d->enter($__internal_890c1bd2f546aa2236ef99ee9079fba5be5cc718e2adb7b378b3460ee1d8ce1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $__internal_223b4a0f8adef08453d538cb36d2fdff7ccca5f462a122cfe4a4354c291d6499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223b4a0f8adef08453d538cb36d2fdff7ccca5f462a122cfe4a4354c291d6499->enter($__internal_223b4a0f8adef08453d538cb36d2fdff7ccca5f462a122cfe4a4354c291d6499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_890c1bd2f546aa2236ef99ee9079fba5be5cc718e2adb7b378b3460ee1d8ce1d->leave($__internal_890c1bd2f546aa2236ef99ee9079fba5be5cc718e2adb7b378b3460ee1d8ce1d_prof);

        
        $__internal_223b4a0f8adef08453d538cb36d2fdff7ccca5f462a122cfe4a4354c291d6499->leave($__internal_223b4a0f8adef08453d538cb36d2fdff7ccca5f462a122cfe4a4354c291d6499_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_92e736d263db44883f050c235d94edf88c5e2664fb146861d3ab4341c6736d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e736d263db44883f050c235d94edf88c5e2664fb146861d3ab4341c6736d06->enter($__internal_92e736d263db44883f050c235d94edf88c5e2664fb146861d3ab4341c6736d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_1c4e49ef22f6658a213c507548b8bfaed7afc6dd1265c467b63cea679447dc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4e49ef22f6658a213c507548b8bfaed7afc6dd1265c467b63cea679447dc08->enter($__internal_1c4e49ef22f6658a213c507548b8bfaed7afc6dd1265c467b63cea679447dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_1c4e49ef22f6658a213c507548b8bfaed7afc6dd1265c467b63cea679447dc08->leave($__internal_1c4e49ef22f6658a213c507548b8bfaed7afc6dd1265c467b63cea679447dc08_prof);

        
        $__internal_92e736d263db44883f050c235d94edf88c5e2664fb146861d3ab4341c6736d06->leave($__internal_92e736d263db44883f050c235d94edf88c5e2664fb146861d3ab4341c6736d06_prof);

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
