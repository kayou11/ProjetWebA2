<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_cbdd678180643ee7e35679b37bfbc98774ee883b367f7396babcd50563ec64b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef7434555d1f43ac75b053ee555125c1240bc680d9888874f392a3d627dbb12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7434555d1f43ac75b053ee555125c1240bc680d9888874f392a3d627dbb12f->enter($__internal_ef7434555d1f43ac75b053ee555125c1240bc680d9888874f392a3d627dbb12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_8c0a4ccd8b4a3677272433d1804b6d4cdd28597212096e1bb9ecfdfa931bea6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0a4ccd8b4a3677272433d1804b6d4cdd28597212096e1bb9ecfdfa931bea6c->enter($__internal_8c0a4ccd8b4a3677272433d1804b6d4cdd28597212096e1bb9ecfdfa931bea6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 13, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_ef7434555d1f43ac75b053ee555125c1240bc680d9888874f392a3d627dbb12f->leave($__internal_ef7434555d1f43ac75b053ee555125c1240bc680d9888874f392a3d627dbb12f_prof);

        
        $__internal_8c0a4ccd8b4a3677272433d1804b6d4cdd28597212096e1bb9ecfdfa931bea6c->leave($__internal_8c0a4ccd8b4a3677272433d1804b6d4cdd28597212096e1bb9ecfdfa931bea6c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3ffaf291dafe979505e2783c778993b7a792ff75383b7894fb6d26dfb70fb34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffaf291dafe979505e2783c778993b7a792ff75383b7894fb6d26dfb70fb34b->enter($__internal_3ffaf291dafe979505e2783c778993b7a792ff75383b7894fb6d26dfb70fb34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4a41e7af9ce27cd2d2b85402a522b0c96cca21b5ba475419fb39f46be6418562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a41e7af9ce27cd2d2b85402a522b0c96cca21b5ba475419fb39f46be6418562->enter($__internal_4a41e7af9ce27cd2d2b85402a522b0c96cca21b5ba475419fb39f46be6418562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        
        $__internal_4a41e7af9ce27cd2d2b85402a522b0c96cca21b5ba475419fb39f46be6418562->leave($__internal_4a41e7af9ce27cd2d2b85402a522b0c96cca21b5ba475419fb39f46be6418562_prof);

        
        $__internal_3ffaf291dafe979505e2783c778993b7a792ff75383b7894fb6d26dfb70fb34b->leave($__internal_3ffaf291dafe979505e2783c778993b7a792ff75383b7894fb6d26dfb70fb34b_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_dc004d51e38af39193c83a9374c9acf24894405552b08019283a7124c8f1180d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc004d51e38af39193c83a9374c9acf24894405552b08019283a7124c8f1180d->enter($__internal_dc004d51e38af39193c83a9374c9acf24894405552b08019283a7124c8f1180d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_97ef1813d5e7efb8fc7446b46c4ac73799b581e5b504bac1368b244923c7f970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ef1813d5e7efb8fc7446b46c4ac73799b581e5b504bac1368b244923c7f970->enter($__internal_97ef1813d5e7efb8fc7446b46c4ac73799b581e5b504bac1368b244923c7f970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 19, $this->getSourceContext()); })()), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_97ef1813d5e7efb8fc7446b46c4ac73799b581e5b504bac1368b244923c7f970->leave($__internal_97ef1813d5e7efb8fc7446b46c4ac73799b581e5b504bac1368b244923c7f970_prof);

        
        $__internal_dc004d51e38af39193c83a9374c9acf24894405552b08019283a7124c8f1180d->leave($__internal_dc004d51e38af39193c83a9374c9acf24894405552b08019283a7124c8f1180d_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_7cff4d846ab361fe19824ba774c26d45dff1263e0a141acbf0033d23ea7de70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cff4d846ab361fe19824ba774c26d45dff1263e0a141acbf0033d23ea7de70d->enter($__internal_7cff4d846ab361fe19824ba774c26d45dff1263e0a141acbf0033d23ea7de70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_785bdfd7660e6e7d88ac2c96352ddd2c879598decbe861ca49ceedc2d466a085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785bdfd7660e6e7d88ac2c96352ddd2c879598decbe861ca49ceedc2d466a085->enter($__internal_785bdfd7660e6e7d88ac2c96352ddd2c879598decbe861ca49ceedc2d466a085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'errors');
        
        $__internal_785bdfd7660e6e7d88ac2c96352ddd2c879598decbe861ca49ceedc2d466a085->leave($__internal_785bdfd7660e6e7d88ac2c96352ddd2c879598decbe861ca49ceedc2d466a085_prof);

        
        $__internal_7cff4d846ab361fe19824ba774c26d45dff1263e0a141acbf0033d23ea7de70d->leave($__internal_7cff4d846ab361fe19824ba774c26d45dff1263e0a141acbf0033d23ea7de70d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
