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
        $__internal_5085a3b225446c05a73d49ebf8a56dbca8b03710003ea646b945f352355f77ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5085a3b225446c05a73d49ebf8a56dbca8b03710003ea646b945f352355f77ab->enter($__internal_5085a3b225446c05a73d49ebf8a56dbca8b03710003ea646b945f352355f77ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_f6298a7843cbb376c20dec4d9dd42a7d88224544539fb15baa8f210ba3d51006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6298a7843cbb376c20dec4d9dd42a7d88224544539fb15baa8f210ba3d51006->enter($__internal_f6298a7843cbb376c20dec4d9dd42a7d88224544539fb15baa8f210ba3d51006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_5085a3b225446c05a73d49ebf8a56dbca8b03710003ea646b945f352355f77ab->leave($__internal_5085a3b225446c05a73d49ebf8a56dbca8b03710003ea646b945f352355f77ab_prof);

        
        $__internal_f6298a7843cbb376c20dec4d9dd42a7d88224544539fb15baa8f210ba3d51006->leave($__internal_f6298a7843cbb376c20dec4d9dd42a7d88224544539fb15baa8f210ba3d51006_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_d911f7ef536b0051a26517a4355f94f0ff327bbfaa12be9f57b99933d927b2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d911f7ef536b0051a26517a4355f94f0ff327bbfaa12be9f57b99933d927b2f6->enter($__internal_d911f7ef536b0051a26517a4355f94f0ff327bbfaa12be9f57b99933d927b2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_2766ce8f572860ca2be505d20db0c4b014fe7149f7410e31f7561e2b0cba0f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2766ce8f572860ca2be505d20db0c4b014fe7149f7410e31f7561e2b0cba0f42->enter($__internal_2766ce8f572860ca2be505d20db0c4b014fe7149f7410e31f7561e2b0cba0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        
        $__internal_2766ce8f572860ca2be505d20db0c4b014fe7149f7410e31f7561e2b0cba0f42->leave($__internal_2766ce8f572860ca2be505d20db0c4b014fe7149f7410e31f7561e2b0cba0f42_prof);

        
        $__internal_d911f7ef536b0051a26517a4355f94f0ff327bbfaa12be9f57b99933d927b2f6->leave($__internal_d911f7ef536b0051a26517a4355f94f0ff327bbfaa12be9f57b99933d927b2f6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5309b07c334e5fb7637b074634485ac37c99097227de8ce2c7cc0d16f525850d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5309b07c334e5fb7637b074634485ac37c99097227de8ce2c7cc0d16f525850d->enter($__internal_5309b07c334e5fb7637b074634485ac37c99097227de8ce2c7cc0d16f525850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_124e66b3eb35e830079fc73d23b14968d9de7408fba628cef6ce24735228fcad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124e66b3eb35e830079fc73d23b14968d9de7408fba628cef6ce24735228fcad->enter($__internal_124e66b3eb35e830079fc73d23b14968d9de7408fba628cef6ce24735228fcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_124e66b3eb35e830079fc73d23b14968d9de7408fba628cef6ce24735228fcad->leave($__internal_124e66b3eb35e830079fc73d23b14968d9de7408fba628cef6ce24735228fcad_prof);

        
        $__internal_5309b07c334e5fb7637b074634485ac37c99097227de8ce2c7cc0d16f525850d->leave($__internal_5309b07c334e5fb7637b074634485ac37c99097227de8ce2c7cc0d16f525850d_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_65fa780d75dde31c7f6ceb454677a834c98ead91e76bd4d9916ee0ff3d5023e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fa780d75dde31c7f6ceb454677a834c98ead91e76bd4d9916ee0ff3d5023e2->enter($__internal_65fa780d75dde31c7f6ceb454677a834c98ead91e76bd4d9916ee0ff3d5023e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_21774e4c80f5c1534176db6742e714ce0c6575797b3f01226240da3e83042bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21774e4c80f5c1534176db6742e714ce0c6575797b3f01226240da3e83042bb5->enter($__internal_21774e4c80f5c1534176db6742e714ce0c6575797b3f01226240da3e83042bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 23, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })());
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_21774e4c80f5c1534176db6742e714ce0c6575797b3f01226240da3e83042bb5->leave($__internal_21774e4c80f5c1534176db6742e714ce0c6575797b3f01226240da3e83042bb5_prof);

        
        $__internal_65fa780d75dde31c7f6ceb454677a834c98ead91e76bd4d9916ee0ff3d5023e2->leave($__internal_65fa780d75dde31c7f6ceb454677a834c98ead91e76bd4d9916ee0ff3d5023e2_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_36f662e25261049fe13eb15b1d791882875e5a1d9a6e654fb0df38f40a4de927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f662e25261049fe13eb15b1d791882875e5a1d9a6e654fb0df38f40a4de927->enter($__internal_36f662e25261049fe13eb15b1d791882875e5a1d9a6e654fb0df38f40a4de927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_bd0715e7aa523f2f0346404c6adc2ac33e56f27f33e070082550de7858b4521f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0715e7aa523f2f0346404c6adc2ac33e56f27f33e070082550de7858b4521f->enter($__internal_bd0715e7aa523f2f0346404c6adc2ac33e56f27f33e070082550de7858b4521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_bd0715e7aa523f2f0346404c6adc2ac33e56f27f33e070082550de7858b4521f->leave($__internal_bd0715e7aa523f2f0346404c6adc2ac33e56f27f33e070082550de7858b4521f_prof);

        
        $__internal_36f662e25261049fe13eb15b1d791882875e5a1d9a6e654fb0df38f40a4de927->leave($__internal_36f662e25261049fe13eb15b1d791882875e5a1d9a6e654fb0df38f40a4de927_prof);

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
