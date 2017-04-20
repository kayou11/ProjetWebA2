<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_e292e68f1754e2f2bf4edd1c6d2477d6953ad5faaeb15c10d8027fa218b9303d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5819eb4df020a0ef760164964ee837376d3cab486b52d1d8edb9259965293f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5819eb4df020a0ef760164964ee837376d3cab486b52d1d8edb9259965293f92->enter($__internal_5819eb4df020a0ef760164964ee837376d3cab486b52d1d8edb9259965293f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_07264cb35eb048a7de892fcd368b5f1048a78a135f74512cead9f2549f05b4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07264cb35eb048a7de892fcd368b5f1048a78a135f74512cead9f2549f05b4f5->enter($__internal_07264cb35eb048a7de892fcd368b5f1048a78a135f74512cead9f2549f05b4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5819eb4df020a0ef760164964ee837376d3cab486b52d1d8edb9259965293f92->leave($__internal_5819eb4df020a0ef760164964ee837376d3cab486b52d1d8edb9259965293f92_prof);

        
        $__internal_07264cb35eb048a7de892fcd368b5f1048a78a135f74512cead9f2549f05b4f5->leave($__internal_07264cb35eb048a7de892fcd368b5f1048a78a135f74512cead9f2549f05b4f5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b1d73eb8d4fd9632a2fd2a5b04a31b96c181209e66f24a3b3e3d564fb893d46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d73eb8d4fd9632a2fd2a5b04a31b96c181209e66f24a3b3e3d564fb893d46b->enter($__internal_b1d73eb8d4fd9632a2fd2a5b04a31b96c181209e66f24a3b3e3d564fb893d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_375f7af3a638a180a042881404b7c1cabcd05d5edd930a535f69801516f0c3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375f7af3a638a180a042881404b7c1cabcd05d5edd930a535f69801516f0c3fa->enter($__internal_375f7af3a638a180a042881404b7c1cabcd05d5edd930a535f69801516f0c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 16, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_375f7af3a638a180a042881404b7c1cabcd05d5edd930a535f69801516f0c3fa->leave($__internal_375f7af3a638a180a042881404b7c1cabcd05d5edd930a535f69801516f0c3fa_prof);

        
        $__internal_b1d73eb8d4fd9632a2fd2a5b04a31b96c181209e66f24a3b3e3d564fb893d46b->leave($__internal_b1d73eb8d4fd9632a2fd2a5b04a31b96c181209e66f24a3b3e3d564fb893d46b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
