<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_ea23f39c6f27ab76771ae6a787ab8061ba7593bffc0ea03972a8ad1904468903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3aa60ea18c1180d23c6d7437582cf489b49c88fa5efeebe1168bffb603c33a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3aa60ea18c1180d23c6d7437582cf489b49c88fa5efeebe1168bffb603c33a9->enter($__internal_a3aa60ea18c1180d23c6d7437582cf489b49c88fa5efeebe1168bffb603c33a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_ea6aed3fdc4d4b47a067b97687b1d642481ec7796f9a350c32f7065c04043239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6aed3fdc4d4b47a067b97687b1d642481ec7796f9a350c32f7065c04043239->enter($__internal_ea6aed3fdc4d4b47a067b97687b1d642481ec7796f9a350c32f7065c04043239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 23, $this->getSourceContext()); })()), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_a3aa60ea18c1180d23c6d7437582cf489b49c88fa5efeebe1168bffb603c33a9->leave($__internal_a3aa60ea18c1180d23c6d7437582cf489b49c88fa5efeebe1168bffb603c33a9_prof);

        
        $__internal_ea6aed3fdc4d4b47a067b97687b1d642481ec7796f9a350c32f7065c04043239->leave($__internal_ea6aed3fdc4d4b47a067b97687b1d642481ec7796f9a350c32f7065c04043239_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_dabdfcca79da03edddb221616c548fe171eb0e0a8065a2ec20421b2d149239af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabdfcca79da03edddb221616c548fe171eb0e0a8065a2ec20421b2d149239af->enter($__internal_dabdfcca79da03edddb221616c548fe171eb0e0a8065a2ec20421b2d149239af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_548fb5306788450b959651957707458b27d16ff6d1dad88f7bfd73d98728d9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548fb5306788450b959651957707458b27d16ff6d1dad88f7bfd73d98728d9fe->enter($__internal_548fb5306788450b959651957707458b27d16ff6d1dad88f7bfd73d98728d9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 16, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 16, $this->getSourceContext()); })()), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 18, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_548fb5306788450b959651957707458b27d16ff6d1dad88f7bfd73d98728d9fe->leave($__internal_548fb5306788450b959651957707458b27d16ff6d1dad88f7bfd73d98728d9fe_prof);

        
        $__internal_dabdfcca79da03edddb221616c548fe171eb0e0a8065a2ec20421b2d149239af->leave($__internal_dabdfcca79da03edddb221616c548fe171eb0e0a8065a2ec20421b2d149239af_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_79ea0433dbb75c5b3b3f03510b34f516884e096d5bb0368e13e6cc6f203a3fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ea0433dbb75c5b3b3f03510b34f516884e096d5bb0368e13e6cc6f203a3fe9->enter($__internal_79ea0433dbb75c5b3b3f03510b34f516884e096d5bb0368e13e6cc6f203a3fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4c0c28e8f009a54a31a43de2ace50aafec58f035fa003d59a422fdde88ef8e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0c28e8f009a54a31a43de2ace50aafec58f035fa003d59a422fdde88ef8e39->enter($__internal_4c0c28e8f009a54a31a43de2ace50aafec58f035fa003d59a422fdde88ef8e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        
        $__internal_4c0c28e8f009a54a31a43de2ace50aafec58f035fa003d59a422fdde88ef8e39->leave($__internal_4c0c28e8f009a54a31a43de2ace50aafec58f035fa003d59a422fdde88ef8e39_prof);

        
        $__internal_79ea0433dbb75c5b3b3f03510b34f516884e096d5bb0368e13e6cc6f203a3fe9->leave($__internal_79ea0433dbb75c5b3b3f03510b34f516884e096d5bb0368e13e6cc6f203a3fe9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
