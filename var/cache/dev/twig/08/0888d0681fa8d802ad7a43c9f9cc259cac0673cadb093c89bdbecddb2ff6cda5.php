<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_6c129dffad7e385cd1219c5d2f27b838e2fe27fca82f6fa9b5cb033cf7084b86 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4701a871e2434a0180610b96cb242ceb22815a53cc36b7fea58adbea09478c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4701a871e2434a0180610b96cb242ceb22815a53cc36b7fea58adbea09478c1b->enter($__internal_4701a871e2434a0180610b96cb242ceb22815a53cc36b7fea58adbea09478c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_9aa098a9d1f027498f22c8145657f8fd564726046fb9c69ad15920287143cffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa098a9d1f027498f22c8145657f8fd564726046fb9c69ad15920287143cffa->enter($__internal_9aa098a9d1f027498f22c8145657f8fd564726046fb9c69ad15920287143cffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4701a871e2434a0180610b96cb242ceb22815a53cc36b7fea58adbea09478c1b->leave($__internal_4701a871e2434a0180610b96cb242ceb22815a53cc36b7fea58adbea09478c1b_prof);

        
        $__internal_9aa098a9d1f027498f22c8145657f8fd564726046fb9c69ad15920287143cffa->leave($__internal_9aa098a9d1f027498f22c8145657f8fd564726046fb9c69ad15920287143cffa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3044301b1fbb2bd4786464f41c81239ebcf7d08d026d78eae505ff55551e8091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3044301b1fbb2bd4786464f41c81239ebcf7d08d026d78eae505ff55551e8091->enter($__internal_3044301b1fbb2bd4786464f41c81239ebcf7d08d026d78eae505ff55551e8091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_174e02cf2e0c0f3cd7a410a1cb2783c5382a0d9e112b7fb54166b37d24c82691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174e02cf2e0c0f3cd7a410a1cb2783c5382a0d9e112b7fb54166b37d24c82691->enter($__internal_174e02cf2e0c0f3cd7a410a1cb2783c5382a0d9e112b7fb54166b37d24c82691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), $context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_174e02cf2e0c0f3cd7a410a1cb2783c5382a0d9e112b7fb54166b37d24c82691->leave($__internal_174e02cf2e0c0f3cd7a410a1cb2783c5382a0d9e112b7fb54166b37d24c82691_prof);

        
        $__internal_3044301b1fbb2bd4786464f41c81239ebcf7d08d026d78eae505ff55551e8091->leave($__internal_3044301b1fbb2bd4786464f41c81239ebcf7d08d026d78eae505ff55551e8091_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
