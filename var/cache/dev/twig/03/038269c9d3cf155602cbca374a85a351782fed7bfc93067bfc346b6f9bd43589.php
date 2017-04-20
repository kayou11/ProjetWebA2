<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_493c06f8c488ba64c4d21503f6d54eafd66612eace1d095e5ec1e8f6a42ee4dc extends Twig_Template
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
        $__internal_9096e6aebf57b715302ed627577fee6bd159cee34d15d11ec93ad526a145c6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9096e6aebf57b715302ed627577fee6bd159cee34d15d11ec93ad526a145c6fd->enter($__internal_9096e6aebf57b715302ed627577fee6bd159cee34d15d11ec93ad526a145c6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_cf06eb6d5264222d95193441c8b5bd6c023b51fe505ccff669c65112440a33ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf06eb6d5264222d95193441c8b5bd6c023b51fe505ccff669c65112440a33ed->enter($__internal_cf06eb6d5264222d95193441c8b5bd6c023b51fe505ccff669c65112440a33ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_9096e6aebf57b715302ed627577fee6bd159cee34d15d11ec93ad526a145c6fd->leave($__internal_9096e6aebf57b715302ed627577fee6bd159cee34d15d11ec93ad526a145c6fd_prof);

        
        $__internal_cf06eb6d5264222d95193441c8b5bd6c023b51fe505ccff669c65112440a33ed->leave($__internal_cf06eb6d5264222d95193441c8b5bd6c023b51fe505ccff669c65112440a33ed_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_236adc4abe239e8b2b7a6101635dd81728a5ed968ad95cb78f112ba58a16cee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236adc4abe239e8b2b7a6101635dd81728a5ed968ad95cb78f112ba58a16cee5->enter($__internal_236adc4abe239e8b2b7a6101635dd81728a5ed968ad95cb78f112ba58a16cee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_dc4beda6aeff71f259b369f9c850bcded0a62fce41efde6c5d0fa206d891c4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4beda6aeff71f259b369f9c850bcded0a62fce41efde6c5d0fa206d891c4b3->enter($__internal_dc4beda6aeff71f259b369f9c850bcded0a62fce41efde6c5d0fa206d891c4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        
        $__internal_dc4beda6aeff71f259b369f9c850bcded0a62fce41efde6c5d0fa206d891c4b3->leave($__internal_dc4beda6aeff71f259b369f9c850bcded0a62fce41efde6c5d0fa206d891c4b3_prof);

        
        $__internal_236adc4abe239e8b2b7a6101635dd81728a5ed968ad95cb78f112ba58a16cee5->leave($__internal_236adc4abe239e8b2b7a6101635dd81728a5ed968ad95cb78f112ba58a16cee5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_54b499a947ed92a37250f537689eb54ee7fcc476c91e059b6964c6e7c6dad31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b499a947ed92a37250f537689eb54ee7fcc476c91e059b6964c6e7c6dad31f->enter($__internal_54b499a947ed92a37250f537689eb54ee7fcc476c91e059b6964c6e7c6dad31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_23a228d745a6ef43868e26ca0495233c9de44157c0ad22a4539493f386358c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a228d745a6ef43868e26ca0495233c9de44157c0ad22a4539493f386358c59->enter($__internal_23a228d745a6ef43868e26ca0495233c9de44157c0ad22a4539493f386358c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_23a228d745a6ef43868e26ca0495233c9de44157c0ad22a4539493f386358c59->leave($__internal_23a228d745a6ef43868e26ca0495233c9de44157c0ad22a4539493f386358c59_prof);

        
        $__internal_54b499a947ed92a37250f537689eb54ee7fcc476c91e059b6964c6e7c6dad31f->leave($__internal_54b499a947ed92a37250f537689eb54ee7fcc476c91e059b6964c6e7c6dad31f_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_1df6d6819eb37a851db80e65f0a6a6ffd117d6067afd0f27294ae78bfaaa7fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df6d6819eb37a851db80e65f0a6a6ffd117d6067afd0f27294ae78bfaaa7fa1->enter($__internal_1df6d6819eb37a851db80e65f0a6a6ffd117d6067afd0f27294ae78bfaaa7fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_26028c2f73c1c351bc557713833a4d6e8d978163acc9c53bf0dce1ba007029c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26028c2f73c1c351bc557713833a4d6e8d978163acc9c53bf0dce1ba007029c6->enter($__internal_26028c2f73c1c351bc557713833a4d6e8d978163acc9c53bf0dce1ba007029c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 23, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })());
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_26028c2f73c1c351bc557713833a4d6e8d978163acc9c53bf0dce1ba007029c6->leave($__internal_26028c2f73c1c351bc557713833a4d6e8d978163acc9c53bf0dce1ba007029c6_prof);

        
        $__internal_1df6d6819eb37a851db80e65f0a6a6ffd117d6067afd0f27294ae78bfaaa7fa1->leave($__internal_1df6d6819eb37a851db80e65f0a6a6ffd117d6067afd0f27294ae78bfaaa7fa1_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_847e72ce57bbdca8f70011880b23f3abeb7d006062ab95d1e0a6ebca66c05263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847e72ce57bbdca8f70011880b23f3abeb7d006062ab95d1e0a6ebca66c05263->enter($__internal_847e72ce57bbdca8f70011880b23f3abeb7d006062ab95d1e0a6ebca66c05263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_68439d0753121c34d3ea4bbf223aabbe0336445339cccadc9cab7ee127c38ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68439d0753121c34d3ea4bbf223aabbe0336445339cccadc9cab7ee127c38ca3->enter($__internal_68439d0753121c34d3ea4bbf223aabbe0336445339cccadc9cab7ee127c38ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_68439d0753121c34d3ea4bbf223aabbe0336445339cccadc9cab7ee127c38ca3->leave($__internal_68439d0753121c34d3ea4bbf223aabbe0336445339cccadc9cab7ee127c38ca3_prof);

        
        $__internal_847e72ce57bbdca8f70011880b23f3abeb7d006062ab95d1e0a6ebca66c05263->leave($__internal_847e72ce57bbdca8f70011880b23f3abeb7d006062ab95d1e0a6ebca66c05263_prof);

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
