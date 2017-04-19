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
        $__internal_2c31a4a242492b0de84e218e0eda465165374b50176b0e966392a2da9ee071d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c31a4a242492b0de84e218e0eda465165374b50176b0e966392a2da9ee071d0->enter($__internal_2c31a4a242492b0de84e218e0eda465165374b50176b0e966392a2da9ee071d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_2d9c14384a5bed2241efceb0c03cb897cad31a6b52556288e64431ac569027e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9c14384a5bed2241efceb0c03cb897cad31a6b52556288e64431ac569027e8->enter($__internal_2d9c14384a5bed2241efceb0c03cb897cad31a6b52556288e64431ac569027e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_2c31a4a242492b0de84e218e0eda465165374b50176b0e966392a2da9ee071d0->leave($__internal_2c31a4a242492b0de84e218e0eda465165374b50176b0e966392a2da9ee071d0_prof);

        
        $__internal_2d9c14384a5bed2241efceb0c03cb897cad31a6b52556288e64431ac569027e8->leave($__internal_2d9c14384a5bed2241efceb0c03cb897cad31a6b52556288e64431ac569027e8_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_fdd539c509a8cdbcfbea34b1c768753979a87f948715e527126cadb0a0af4374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd539c509a8cdbcfbea34b1c768753979a87f948715e527126cadb0a0af4374->enter($__internal_fdd539c509a8cdbcfbea34b1c768753979a87f948715e527126cadb0a0af4374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_376b0be89539ed4efa7eb8727378cd2d82640f2397784ea560aa06c140bd71d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376b0be89539ed4efa7eb8727378cd2d82640f2397784ea560aa06c140bd71d3->enter($__internal_376b0be89539ed4efa7eb8727378cd2d82640f2397784ea560aa06c140bd71d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        
        $__internal_376b0be89539ed4efa7eb8727378cd2d82640f2397784ea560aa06c140bd71d3->leave($__internal_376b0be89539ed4efa7eb8727378cd2d82640f2397784ea560aa06c140bd71d3_prof);

        
        $__internal_fdd539c509a8cdbcfbea34b1c768753979a87f948715e527126cadb0a0af4374->leave($__internal_fdd539c509a8cdbcfbea34b1c768753979a87f948715e527126cadb0a0af4374_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6d5efb8ab14b93f6e4be3810c7e1f285eb4452160491035a94745421cce0497a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5efb8ab14b93f6e4be3810c7e1f285eb4452160491035a94745421cce0497a->enter($__internal_6d5efb8ab14b93f6e4be3810c7e1f285eb4452160491035a94745421cce0497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9e178b89a37ac11254acf200f1a708a738727fd00bac44e9ce39aef1bf014cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e178b89a37ac11254acf200f1a708a738727fd00bac44e9ce39aef1bf014cbb->enter($__internal_9e178b89a37ac11254acf200f1a708a738727fd00bac44e9ce39aef1bf014cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_9e178b89a37ac11254acf200f1a708a738727fd00bac44e9ce39aef1bf014cbb->leave($__internal_9e178b89a37ac11254acf200f1a708a738727fd00bac44e9ce39aef1bf014cbb_prof);

        
        $__internal_6d5efb8ab14b93f6e4be3810c7e1f285eb4452160491035a94745421cce0497a->leave($__internal_6d5efb8ab14b93f6e4be3810c7e1f285eb4452160491035a94745421cce0497a_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_ef28f5ba71fdfba7f39c9055fa3c17d63aaa340825202eee63a834f49acaa536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef28f5ba71fdfba7f39c9055fa3c17d63aaa340825202eee63a834f49acaa536->enter($__internal_ef28f5ba71fdfba7f39c9055fa3c17d63aaa340825202eee63a834f49acaa536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_135a99553e44b79c655d13cfe411039aab39f0a5a6948f194df95170ee548244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135a99553e44b79c655d13cfe411039aab39f0a5a6948f194df95170ee548244->enter($__internal_135a99553e44b79c655d13cfe411039aab39f0a5a6948f194df95170ee548244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 23, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })());
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_135a99553e44b79c655d13cfe411039aab39f0a5a6948f194df95170ee548244->leave($__internal_135a99553e44b79c655d13cfe411039aab39f0a5a6948f194df95170ee548244_prof);

        
        $__internal_ef28f5ba71fdfba7f39c9055fa3c17d63aaa340825202eee63a834f49acaa536->leave($__internal_ef28f5ba71fdfba7f39c9055fa3c17d63aaa340825202eee63a834f49acaa536_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_9f9de619cc94e015d8738a4db41832602bc3501d49858a0103943d3752ea184e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9de619cc94e015d8738a4db41832602bc3501d49858a0103943d3752ea184e->enter($__internal_9f9de619cc94e015d8738a4db41832602bc3501d49858a0103943d3752ea184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_ed50f0265a5cbb683068afcdab3fa44d32d36afae72ea729d7eaf6d37ca906da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed50f0265a5cbb683068afcdab3fa44d32d36afae72ea729d7eaf6d37ca906da->enter($__internal_ed50f0265a5cbb683068afcdab3fa44d32d36afae72ea729d7eaf6d37ca906da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_ed50f0265a5cbb683068afcdab3fa44d32d36afae72ea729d7eaf6d37ca906da->leave($__internal_ed50f0265a5cbb683068afcdab3fa44d32d36afae72ea729d7eaf6d37ca906da_prof);

        
        $__internal_9f9de619cc94e015d8738a4db41832602bc3501d49858a0103943d3752ea184e->leave($__internal_9f9de619cc94e015d8738a4db41832602bc3501d49858a0103943d3752ea184e_prof);

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
