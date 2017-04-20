<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_3e4222f047f890ebf3dc7bdca6382562e4d2b9d781baa457380f0ed7410a805a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77b5ad52b30d2722687ab15b4e1911e864a39818c5121e516294ffcd1e4560a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b5ad52b30d2722687ab15b4e1911e864a39818c5121e516294ffcd1e4560a9->enter($__internal_77b5ad52b30d2722687ab15b4e1911e864a39818c5121e516294ffcd1e4560a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_a8b5c82dad65b6ddbfadebb248cc5e956e2089437b0a089bcf85f4f1df6c8de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b5c82dad65b6ddbfadebb248cc5e956e2089437b0a089bcf85f4f1df6c8de2->enter($__internal_a8b5c82dad65b6ddbfadebb248cc5e956e2089437b0a089bcf85f4f1df6c8de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new Twig_Error_Runtime('Variable "edit" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 21, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 25, $this->getSourceContext()); })()), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_77b5ad52b30d2722687ab15b4e1911e864a39818c5121e516294ffcd1e4560a9->leave($__internal_77b5ad52b30d2722687ab15b4e1911e864a39818c5121e516294ffcd1e4560a9_prof);

        
        $__internal_a8b5c82dad65b6ddbfadebb248cc5e956e2089437b0a089bcf85f4f1df6c8de2->leave($__internal_a8b5c82dad65b6ddbfadebb248cc5e956e2089437b0a089bcf85f4f1df6c8de2_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_dde2fe8d04f9a06933296b8a4504658aae7157f3340d9b4842d63868717d0a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde2fe8d04f9a06933296b8a4504658aae7157f3340d9b4842d63868717d0a87->enter($__internal_dde2fe8d04f9a06933296b8a4504658aae7157f3340d9b4842d63868717d0a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d95beadbbd6b94840513ec28b6fa48dc243466b6cefed3d46a3c174f9d4db465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95beadbbd6b94840513ec28b6fa48dc243466b6cefed3d46a3c174f9d4db465->enter($__internal_d95beadbbd6b94840513ec28b6fa48dc243466b6cefed3d46a3c174f9d4db465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 15, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_d95beadbbd6b94840513ec28b6fa48dc243466b6cefed3d46a3c174f9d4db465->leave($__internal_d95beadbbd6b94840513ec28b6fa48dc243466b6cefed3d46a3c174f9d4db465_prof);

        
        $__internal_dde2fe8d04f9a06933296b8a4504658aae7157f3340d9b4842d63868717d0a87->leave($__internal_dde2fe8d04f9a06933296b8a4504658aae7157f3340d9b4842d63868717d0a87_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_4b2c56ad001c51f69f58eca73220e32e675eda590551651ef0fd9894ab9aaffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2c56ad001c51f69f58eca73220e32e675eda590551651ef0fd9894ab9aaffa->enter($__internal_4b2c56ad001c51f69f58eca73220e32e675eda590551651ef0fd9894ab9aaffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9a72a7a83f04c52b37f195fa089e2e7a6ade3edd299b6477088eeeca5755608e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a72a7a83f04c52b37f195fa089e2e7a6ade3edd299b6477088eeeca5755608e->enter($__internal_9a72a7a83f04c52b37f195fa089e2e7a6ade3edd299b6477088eeeca5755608e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 23, $this->getSourceContext()); })()), 'widget');
        
        $__internal_9a72a7a83f04c52b37f195fa089e2e7a6ade3edd299b6477088eeeca5755608e->leave($__internal_9a72a7a83f04c52b37f195fa089e2e7a6ade3edd299b6477088eeeca5755608e_prof);

        
        $__internal_4b2c56ad001c51f69f58eca73220e32e675eda590551651ef0fd9894ab9aaffa->leave($__internal_4b2c56ad001c51f69f58eca73220e32e675eda590551651ef0fd9894ab9aaffa_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_7923187474643b58f3ec4b4dda539640bc783a6d0138eeef1794c0537745de06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7923187474643b58f3ec4b4dda539640bc783a6d0138eeef1794c0537745de06->enter($__internal_7923187474643b58f3ec4b4dda539640bc783a6d0138eeef1794c0537745de06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_73bbba07882099f54e2b90c5c3e2b2c04d1817e016c8c363dc06dbce1f4c1b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bbba07882099f54e2b90c5c3e2b2c04d1817e016c8c363dc06dbce1f4c1b3e->enter($__internal_73bbba07882099f54e2b90c5c3e2b2c04d1817e016c8c363dc06dbce1f4c1b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 26, $this->getSourceContext()); })()), "help", array());
        
        $__internal_73bbba07882099f54e2b90c5c3e2b2c04d1817e016c8c363dc06dbce1f4c1b3e->leave($__internal_73bbba07882099f54e2b90c5c3e2b2c04d1817e016c8c363dc06dbce1f4c1b3e_prof);

        
        $__internal_7923187474643b58f3ec4b4dda539640bc783a6d0138eeef1794c0537745de06->leave($__internal_7923187474643b58f3ec4b4dda539640bc783a6d0138eeef1794c0537745de06_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_688ef4f7164fb38156ef13d249ea0830f0c2671b88d4e13459c997e9760523e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688ef4f7164fb38156ef13d249ea0830f0c2671b88d4e13459c997e9760523e6->enter($__internal_688ef4f7164fb38156ef13d249ea0830f0c2671b88d4e13459c997e9760523e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_4176fff51183271525e2c9a3a3190da287e46dd6b32f033e3428b2d763490d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4176fff51183271525e2c9a3a3190da287e46dd6b32f033e3428b2d763490d5b->enter($__internal_4176fff51183271525e2c9a3a3190da287e46dd6b32f033e3428b2d763490d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        
        $__internal_4176fff51183271525e2c9a3a3190da287e46dd6b32f033e3428b2d763490d5b->leave($__internal_4176fff51183271525e2c9a3a3190da287e46dd6b32f033e3428b2d763490d5b_prof);

        
        $__internal_688ef4f7164fb38156ef13d249ea0830f0c2671b88d4e13459c997e9760523e6->leave($__internal_688ef4f7164fb38156ef13d249ea0830f0c2671b88d4e13459c997e9760523e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
