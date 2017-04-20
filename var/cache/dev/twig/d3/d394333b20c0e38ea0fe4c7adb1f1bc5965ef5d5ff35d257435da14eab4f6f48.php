<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_8689a0a4a7b0c6eac466202f4f53d8b7610ff837e7d24b09d7f58927a137c6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ad5aae71c25f6c152849edb40cbb784dae85836323d338a773c86714a0a4d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad5aae71c25f6c152849edb40cbb784dae85836323d338a773c86714a0a4d4d->enter($__internal_5ad5aae71c25f6c152849edb40cbb784dae85836323d338a773c86714a0a4d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_e1025a32176341744990e8c29537bf9357723770f0698490aae7519a867e51b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1025a32176341744990e8c29537bf9357723770f0698490aae7519a867e51b5->enter($__internal_e1025a32176341744990e8c29537bf9357723770f0698490aae7519a867e51b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) || array_key_exists("is_diff", $context) ? $context["is_diff"] : (function () { throw new Twig_Error_Runtime('Variable "is_diff" does not exist.', 12, $this->getSourceContext()); })()), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_5ad5aae71c25f6c152849edb40cbb784dae85836323d338a773c86714a0a4d4d->leave($__internal_5ad5aae71c25f6c152849edb40cbb784dae85836323d338a773c86714a0a4d4d_prof);

        
        $__internal_e1025a32176341744990e8c29537bf9357723770f0698490aae7519a867e51b5->leave($__internal_e1025a32176341744990e8c29537bf9357723770f0698490aae7519a867e51b5_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_3e2e9d5e993b02e50b11db4ac5abe2328cf19a1bebdb8bfd9ea78553ddb5d17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2e9d5e993b02e50b11db4ac5abe2328cf19a1bebdb8bfd9ea78553ddb5d17d->enter($__internal_3e2e9d5e993b02e50b11db4ac5abe2328cf19a1bebdb8bfd9ea78553ddb5d17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_5946e08ffb37a95d699a20670e15abd37bdfdd178f263956effffec07c5e5d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5946e08ffb37a95d699a20670e15abd37bdfdd178f263956effffec07c5e5d11->enter($__internal_5946e08ffb37a95d699a20670e15abd37bdfdd178f263956effffec07c5e5d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        
        $__internal_5946e08ffb37a95d699a20670e15abd37bdfdd178f263956effffec07c5e5d11->leave($__internal_5946e08ffb37a95d699a20670e15abd37bdfdd178f263956effffec07c5e5d11_prof);

        
        $__internal_3e2e9d5e993b02e50b11db4ac5abe2328cf19a1bebdb8bfd9ea78553ddb5d17d->leave($__internal_3e2e9d5e993b02e50b11db4ac5abe2328cf19a1bebdb8bfd9ea78553ddb5d17d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ccc762e62f5d63d14d1a51f29f27179264fdc4f6140b3b0ae0ed20accefccb0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc762e62f5d63d14d1a51f29f27179264fdc4f6140b3b0ae0ed20accefccb0a->enter($__internal_ccc762e62f5d63d14d1a51f29f27179264fdc4f6140b3b0ae0ed20accefccb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9ba9b2a4f677042e4474f1dd3cb8e4df692a1e0f8708ae74729f42f1dc4df0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba9b2a4f677042e4474f1dd3cb8e4df692a1e0f8708ae74729f42f1dc4df0a8->enter($__internal_9ba9b2a4f677042e4474f1dd3cb8e4df692a1e0f8708ae74729f42f1dc4df0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new Twig_Error_Runtime('Variable "collapse" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9ba9b2a4f677042e4474f1dd3cb8e4df692a1e0f8708ae74729f42f1dc4df0a8->leave($__internal_9ba9b2a4f677042e4474f1dd3cb8e4df692a1e0f8708ae74729f42f1dc4df0a8_prof);

        
        $__internal_ccc762e62f5d63d14d1a51f29f27179264fdc4f6140b3b0ae0ed20accefccb0a->leave($__internal_ccc762e62f5d63d14d1a51f29f27179264fdc4f6140b3b0ae0ed20accefccb0a_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_e6ec228353075bd5b6fab53568e76a73c0606615683c036a00fa24c8dd31c15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ec228353075bd5b6fab53568e76a73c0606615683c036a00fa24c8dd31c15b->enter($__internal_e6ec228353075bd5b6fab53568e76a73c0606615683c036a00fa24c8dd31c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_b0c3590e5bdbdeb02109f80150b531d2b16c600504aec6d2eb09a48dbd5f706f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c3590e5bdbdeb02109f80150b531d2b16c600504aec6d2eb09a48dbd5f706f->enter($__internal_b0c3590e5bdbdeb02109f80150b531d2b16c600504aec6d2eb09a48dbd5f706f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 23, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })());
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_b0c3590e5bdbdeb02109f80150b531d2b16c600504aec6d2eb09a48dbd5f706f->leave($__internal_b0c3590e5bdbdeb02109f80150b531d2b16c600504aec6d2eb09a48dbd5f706f_prof);

        
        $__internal_e6ec228353075bd5b6fab53568e76a73c0606615683c036a00fa24c8dd31c15b->leave($__internal_e6ec228353075bd5b6fab53568e76a73c0606615683c036a00fa24c8dd31c15b_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_19ebaf732a446df9ed119269341c69719f8af7f141f804e864b4431a1de9f2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ebaf732a446df9ed119269341c69719f8af7f141f804e864b4431a1de9f2e8->enter($__internal_19ebaf732a446df9ed119269341c69719f8af7f141f804e864b4431a1de9f2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_8cc0928dcbf0a95a0f2c2e1b589bd6e5aa74b0a66e4161b3317a3b73b17d665e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc0928dcbf0a95a0f2c2e1b589bd6e5aa74b0a66e4161b3317a3b73b17d665e->enter($__internal_8cc0928dcbf0a95a0f2c2e1b589bd6e5aa74b0a66e4161b3317a3b73b17d665e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) || array_key_exists("value_compare", $context) ? $context["value_compare"] : (function () { throw new Twig_Error_Runtime('Variable "value_compare" does not exist.', 36, $this->getSourceContext()); })());
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_8cc0928dcbf0a95a0f2c2e1b589bd6e5aa74b0a66e4161b3317a3b73b17d665e->leave($__internal_8cc0928dcbf0a95a0f2c2e1b589bd6e5aa74b0a66e4161b3317a3b73b17d665e_prof);

        
        $__internal_19ebaf732a446df9ed119269341c69719f8af7f141f804e864b4431a1de9f2e8->leave($__internal_19ebaf732a446df9ed119269341c69719f8af7f141f804e864b4431a1de9f2e8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
