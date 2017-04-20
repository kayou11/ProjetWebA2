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
        $__internal_3dd96c0ff342422bea96d194666bc754023e8c5fec53b8349829213c5025f7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd96c0ff342422bea96d194666bc754023e8c5fec53b8349829213c5025f7af->enter($__internal_3dd96c0ff342422bea96d194666bc754023e8c5fec53b8349829213c5025f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_721a738655e411cb529f10ecf6ec528cde02306c6d6a80e1a98c97e3f215f5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721a738655e411cb529f10ecf6ec528cde02306c6d6a80e1a98c97e3f215f5fa->enter($__internal_721a738655e411cb529f10ecf6ec528cde02306c6d6a80e1a98c97e3f215f5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_3dd96c0ff342422bea96d194666bc754023e8c5fec53b8349829213c5025f7af->leave($__internal_3dd96c0ff342422bea96d194666bc754023e8c5fec53b8349829213c5025f7af_prof);

        
        $__internal_721a738655e411cb529f10ecf6ec528cde02306c6d6a80e1a98c97e3f215f5fa->leave($__internal_721a738655e411cb529f10ecf6ec528cde02306c6d6a80e1a98c97e3f215f5fa_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_ea400bd429641466edf17899e3aaf3b0340f492191f62b4c461be70bcb8feb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea400bd429641466edf17899e3aaf3b0340f492191f62b4c461be70bcb8feb13->enter($__internal_ea400bd429641466edf17899e3aaf3b0340f492191f62b4c461be70bcb8feb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_392719ef7cb635a8979d214733e11cdc77256f47a6f002c3821dd916028add18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392719ef7cb635a8979d214733e11cdc77256f47a6f002c3821dd916028add18->enter($__internal_392719ef7cb635a8979d214733e11cdc77256f47a6f002c3821dd916028add18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_392719ef7cb635a8979d214733e11cdc77256f47a6f002c3821dd916028add18->leave($__internal_392719ef7cb635a8979d214733e11cdc77256f47a6f002c3821dd916028add18_prof);

        
        $__internal_ea400bd429641466edf17899e3aaf3b0340f492191f62b4c461be70bcb8feb13->leave($__internal_ea400bd429641466edf17899e3aaf3b0340f492191f62b4c461be70bcb8feb13_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_c61356eeebacf7b848c96808291d753c541c65d898db3f0d4c4f4d55c53c30b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61356eeebacf7b848c96808291d753c541c65d898db3f0d4c4f4d55c53c30b1->enter($__internal_c61356eeebacf7b848c96808291d753c541c65d898db3f0d4c4f4d55c53c30b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_674723aad6b01d37a42213a26b8c3e4670d49a2c1f36e59c21676e9e6049c0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674723aad6b01d37a42213a26b8c3e4670d49a2c1f36e59c21676e9e6049c0b0->enter($__internal_674723aad6b01d37a42213a26b8c3e4670d49a2c1f36e59c21676e9e6049c0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        
        $__internal_674723aad6b01d37a42213a26b8c3e4670d49a2c1f36e59c21676e9e6049c0b0->leave($__internal_674723aad6b01d37a42213a26b8c3e4670d49a2c1f36e59c21676e9e6049c0b0_prof);

        
        $__internal_c61356eeebacf7b848c96808291d753c541c65d898db3f0d4c4f4d55c53c30b1->leave($__internal_c61356eeebacf7b848c96808291d753c541c65d898db3f0d4c4f4d55c53c30b1_prof);

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
