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
        $__internal_500595f2d1598d5d53652889f22b24da2390eb97628d7ffa3da8f78c663fe6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500595f2d1598d5d53652889f22b24da2390eb97628d7ffa3da8f78c663fe6bd->enter($__internal_500595f2d1598d5d53652889f22b24da2390eb97628d7ffa3da8f78c663fe6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_780340e3ac5c7c5c8d12d97d5e4aa8f215e0fe760813bd211a94ff49521b6f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780340e3ac5c7c5c8d12d97d5e4aa8f215e0fe760813bd211a94ff49521b6f2e->enter($__internal_780340e3ac5c7c5c8d12d97d5e4aa8f215e0fe760813bd211a94ff49521b6f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500595f2d1598d5d53652889f22b24da2390eb97628d7ffa3da8f78c663fe6bd->leave($__internal_500595f2d1598d5d53652889f22b24da2390eb97628d7ffa3da8f78c663fe6bd_prof);

        
        $__internal_780340e3ac5c7c5c8d12d97d5e4aa8f215e0fe760813bd211a94ff49521b6f2e->leave($__internal_780340e3ac5c7c5c8d12d97d5e4aa8f215e0fe760813bd211a94ff49521b6f2e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ef33fb86049599de61824888230a554c4fa019f6bc7ac9df211766b02fcde490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef33fb86049599de61824888230a554c4fa019f6bc7ac9df211766b02fcde490->enter($__internal_ef33fb86049599de61824888230a554c4fa019f6bc7ac9df211766b02fcde490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e4438a18e9d5cd235c12c167e1a4798e28e0a11ecd3f350a1e99b32651885f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4438a18e9d5cd235c12c167e1a4798e28e0a11ecd3f350a1e99b32651885f68->enter($__internal_e4438a18e9d5cd235c12c167e1a4798e28e0a11ecd3f350a1e99b32651885f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_e4438a18e9d5cd235c12c167e1a4798e28e0a11ecd3f350a1e99b32651885f68->leave($__internal_e4438a18e9d5cd235c12c167e1a4798e28e0a11ecd3f350a1e99b32651885f68_prof);

        
        $__internal_ef33fb86049599de61824888230a554c4fa019f6bc7ac9df211766b02fcde490->leave($__internal_ef33fb86049599de61824888230a554c4fa019f6bc7ac9df211766b02fcde490_prof);

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
