<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_f3b50d87bab76776718725a41f898b8d62b8bbd49305a98616451464e82c4e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_history.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e711f6acc4083e961c675a661155a1edce0a3e0e1e2eb9c495c7452f083820e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e711f6acc4083e961c675a661155a1edce0a3e0e1e2eb9c495c7452f083820e->enter($__internal_5e711f6acc4083e961c675a661155a1edce0a3e0e1e2eb9c495c7452f083820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_history.html.twig"));

        $__internal_16608bd7fab1785af97c644b94f291016b8ee713e0766a890e7d7235e009cce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16608bd7fab1785af97c644b94f291016b8ee713e0766a890e7d7235e009cce2->enter($__internal_16608bd7fab1785af97c644b94f291016b8ee713e0766a890e7d7235e009cce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_history.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e711f6acc4083e961c675a661155a1edce0a3e0e1e2eb9c495c7452f083820e->leave($__internal_5e711f6acc4083e961c675a661155a1edce0a3e0e1e2eb9c495c7452f083820e_prof);

        
        $__internal_16608bd7fab1785af97c644b94f291016b8ee713e0766a890e7d7235e009cce2->leave($__internal_16608bd7fab1785af97c644b94f291016b8ee713e0766a890e7d7235e009cce2_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bea91ccd3fdfd08a5d0973ab242ecd5730ba39e9578bd359cacb24ae55b6d17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea91ccd3fdfd08a5d0973ab242ecd5730ba39e9578bd359cacb24ae55b6d17d->enter($__internal_bea91ccd3fdfd08a5d0973ab242ecd5730ba39e9578bd359cacb24ae55b6d17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_ec9e81b62214e1f84850bfd734192d29721a6666ae4750f1898bf80cbd89820a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9e81b62214e1f84850bfd734192d29721a6666ae4750f1898bf80cbd89820a->enter($__internal_ec9e81b62214e1f84850bfd734192d29721a6666ae4750f1898bf80cbd89820a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_history.html.twig", 15)->display($context);
        
        $__internal_ec9e81b62214e1f84850bfd734192d29721a6666ae4750f1898bf80cbd89820a->leave($__internal_ec9e81b62214e1f84850bfd734192d29721a6666ae4750f1898bf80cbd89820a_prof);

        
        $__internal_bea91ccd3fdfd08a5d0973ab242ecd5730ba39e9578bd359cacb24ae55b6d17d->leave($__internal_bea91ccd3fdfd08a5d0973ab242ecd5730ba39e9578bd359cacb24ae55b6d17d_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ae363b4f49a2d91ce5a906500d52eac3707e6d7b92cce4208bd87628fd3e4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae363b4f49a2d91ce5a906500d52eac3707e6d7b92cce4208bd87628fd3e4a0->enter($__internal_0ae363b4f49a2d91ce5a906500d52eac3707e6d7b92cce4208bd87628fd3e4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd96775768375b1da93b4b574392db09c63762e8fb972f5220302a3f0d941e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd96775768375b1da93b4b574392db09c63762e8fb972f5220302a3f0d941e74->enter($__internal_dd96775768375b1da93b4b574392db09c63762e8fb972f5220302a3f0d941e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_compare", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) || array_key_exists("revisions", $context) ? $context["revisions"] : (function () { throw new Twig_Error_Runtime('Variable "revisions" does not exist.', 35, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 36
            echo "                            <tr class=\"";
            if ((((isset($context["currentRevision"]) || array_key_exists("currentRevision", $context) ? $context["currentRevision"] : (function () { throw new Twig_Error_Runtime('Variable "currentRevision" does not exist.', 36, $this->getSourceContext()); })()) != false) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentRevision"]) || array_key_exists("currentRevision", $context) ? $context["currentRevision"] : (function () { throw new Twig_Error_Runtime('Variable "currentRevision" does not exist.', 36, $this->getSourceContext()); })()), "rev", array())))) {
                echo "current-revision";
            }
            echo "\">
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "getTemplate", array(0 => "history_revision_timestamp"), "method"), "SonataAdminBundle:CRUD:base_history.html.twig", 38)->display($context);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_unknown_user", array(), "SonataAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_unknown_user", array(), "SonataAdminBundle"))), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 40, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 40, $this->getSourceContext()); })()), 2 => array("revision" => twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 42
            if ((((isset($context["currentRevision"]) || array_key_exists("currentRevision", $context) ? $context["currentRevision"] : (function () { throw new Twig_Error_Runtime('Variable "currentRevision" does not exist.', 42, $this->getSourceContext()); })()) == false) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentRevision"]) || array_key_exists("currentRevision", $context) ? $context["currentRevision"] : (function () { throw new Twig_Error_Runtime('Variable "currentRevision" does not exist.', 42, $this->getSourceContext()); })()), "rev", array())))) {
                // line 43
                echo "                                        /
                                    ";
            } else {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 45, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "history_compare_revisions", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 45, $this->getSourceContext()); })()), 2 => array("base_revision" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentRevision"]) || array_key_exists("currentRevision", $context) ? $context["currentRevision"] : (function () { throw new Twig_Error_Runtime('Variable "currentRevision" does not exist.', 45, $this->getSourceContext()); })()), "rev", array()), "compare_revision" => twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()))), "method"), "html", null, true);
                echo "\" class=\"revision-compare-link\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_compare_revision", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 47
            echo "                                </td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
";
        
        $__internal_dd96775768375b1da93b4b574392db09c63762e8fb972f5220302a3f0d941e74->leave($__internal_dd96775768375b1da93b4b574392db09c63762e8fb972f5220302a3f0d941e74_prof);

        
        $__internal_0ae363b4f49a2d91ce5a906500d52eac3707e6d7b92cce4208bd87628fd3e4a0->leave($__internal_0ae363b4f49a2d91ce5a906500d52eac3707e6d7b92cce4208bd87628fd3e4a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 50,  162 => 47,  152 => 45,  148 => 43,  146 => 42,  137 => 40,  133 => 39,  129 => 38,  125 => 37,  118 => 36,  101 => 35,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  68 => 19,  59 => 18,  49 => 15,  40 => 14,  19 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block content %}

    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>{{ 'td_revision'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_timestamp'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_username'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_action'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_compare'|trans({}, 'SonataAdminBundle') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for revision in revisions %}
                            <tr class=\"{% if (currentRevision != false and revision.rev == currentRevision.rev) %}current-revision{% endif %}\">
                                <td>{{ revision.rev }}</td>
                                <td>{% include admin.getTemplate('history_revision_timestamp') %}</td>
                                <td>{{ revision.username|default('label_unknown_user'|trans({}, 'SonataAdminBundle')) }}</td>
                                <td><a href=\"{{ admin.generateObjectUrl('history_view_revision', object, {'revision': revision.rev }) }}\" class=\"revision-link\" rel=\"{{ revision.rev }}\">{{ \"label_view_revision\"|trans({}, 'SonataAdminBundle') }}</a></td>
                                <td>
                                    {% if (currentRevision == false or revision.rev == currentRevision.rev) %}
                                        /
                                    {% else %}
                                        <a href=\"{{ admin.generateObjectUrl('history_compare_revisions', object, {'base_revision': currentRevision.rev, 'compare_revision': revision.rev }) }}\" class=\"revision-compare-link\" rel=\"{{ revision.rev }}\">{{ 'label_compare_revision'|trans({}, 'SonataAdminBundle') }}</a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
{% endblock %}
", "SonataAdminBundle:CRUD:base_history.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_history.html.twig");
    }
}
