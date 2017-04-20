<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_1d8d98370a657d228d32af67a0458a81ff6d09afe968f0fbec1ceb5c4970b656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08a9b1b4272273e2a8c96488f93af81b189d969eee29b838837c603240dfa7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a9b1b4272273e2a8c96488f93af81b189d969eee29b838837c603240dfa7e1->enter($__internal_08a9b1b4272273e2a8c96488f93af81b189d969eee29b838837c603240dfa7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:silex_form_div_layout.html.twig"));

        $__internal_bdf8cd87658d23eb0e7696507a71d9b2f0628718f9ff1cedc47e9d5892f0b8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf8cd87658d23eb0e7696507a71d9b2f0628718f9ff1cedc47e9d5892f0b8bf->enter($__internal_bdf8cd87658d23eb0e7696507a71d9b2f0628718f9ff1cedc47e9d5892f0b8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:silex_form_div_layout.html.twig"));

        // line 2
        echo "
";
        // line 7
        echo "
";
        
        $__internal_08a9b1b4272273e2a8c96488f93af81b189d969eee29b838837c603240dfa7e1->leave($__internal_08a9b1b4272273e2a8c96488f93af81b189d969eee29b838837c603240dfa7e1_prof);

        
        $__internal_bdf8cd87658d23eb0e7696507a71d9b2f0628718f9ff1cedc47e9d5892f0b8bf->leave($__internal_bdf8cd87658d23eb0e7696507a71d9b2f0628718f9ff1cedc47e9d5892f0b8bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{#
    This file doesn't seem to be used anymore ; commenting it for now in order not to mess with user's configurations.
    TODO: Remove it and all of its references
#}

{#
{% block choice_widget %}
{% spaceless %}
    {% if expanded %}
        <ul {{ block('widget_container_attributes') }} class=\"inputs-list\">
        {% for child in form %}
            <li>
                {% set form_widget_content %}
                    {{ form_widget(child) }}
                {% endset %}
                {{ form_label(child, null, { 'in_list_checkbox' : true, 'widget' : form_widget_content } ) }}
            </li>
        {% endfor %}
        </ul>
    {% else %}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {% if empty_value is not none %}
            <option value=\"\">{{ empty_value|trans({}, translation_domain) }}</option>
        {% endif %}
        {% if preferred_choices|length > 0 %}
            {% set options = preferred_choices %}
            {{ block('choice_widget_options') }}
            {% if choices|length > 0 and separator is not none %}
                <option disabled=\"disabled\">{{ separator }}</option>
            {% endif %}
        {% endif %}
        {% set options = choices %}
        {{ block('choice_widget_options') }}
    </select>
    {% endif %}
{% endspaceless %}
{% endblock choice_widget %}

{% block form_widget_simple %}
{% spaceless %}
    {% set type = type|default('text') %}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} value=\"{{ value }}\">
{% endspaceless %}
{% endblock form_widget_simple %}

&#123;&#35; Labels &#35;&#125;

{% block form_label %}
{% spaceless %}
    {% if not compound %}
        {% set attr = attr|merge({'for': id}) %}
    {% endif %}
    {% if required %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' required'}) %}
    {% endif %}
    {% if in_list_checkbox is defined and in_list_checkbox and widget is defined %}
        <label{% for attrname,attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
            {{ widget|raw }}
            <span>
                {{ label|trans({}, translation_domain) }}
            </span>
        </label>
    {% else %}
        <label{% for attrname,attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>
    {% endif %}
{% endspaceless %}
{% endblock %}

&#123;&#35; Rows &#35;&#125;

{% block form_row %}
{% spaceless %}
    <div class=\"form-group {{ (0 < form_errors(form)|length)? 'has-error':'' }} \">
        {{ form_label(form, label|default(null)) }}
        <div class=\"col-sm-10 col-md-5\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock form_row %}

&#123;&#35; Misc &#35;&#125;

{% block form_errors %}
{% spaceless %}
    {% if errors|length > 0 %}
        {% if not form.parent  or 'repeated' in form.vars['block_prefixes'] %}
            <div class=\"form-group has-error\">
        {% endif %}
        <span class=\"help-block\">
            {% for error in errors %}
                {% if loop.first %}
                    {{ error.messageTemplate|trans(error.messageParameters, 'validators') }}
                {% endif %}
            {% endfor %}
        </span>
        {% if not form.parent  or 'repeated' in form.vars['block_prefixes'] %}
            </div>
        {% endif %}
    {% endif %}
{% endspaceless %}
{% endblock form_errors %}
#}
", "SonataAdminBundle:Form:silex_form_div_layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Form/silex_form_div_layout.html.twig");
    }
}
