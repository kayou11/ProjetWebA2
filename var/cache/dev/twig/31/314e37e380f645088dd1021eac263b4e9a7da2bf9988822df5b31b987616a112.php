<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_4bdcc3b89c1b6ff46721a5e32f9e88a6e9bc20cb453cc52b3b22f1f4fba364c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1b9d3ec70b30cb464ca1c4f5ff7ae68eceb4b4ec606b8640cb3fd6ef8d2b276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b9d3ec70b30cb464ca1c4f5ff7ae68eceb4b4ec606b8640cb3fd6ef8d2b276->enter($__internal_a1b9d3ec70b30cb464ca1c4f5ff7ae68eceb4b4ec606b8640cb3fd6ef8d2b276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_b81b613aee729f7afa4d5e444c35ed55c47fc052c182c4461827755fe54639e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81b613aee729f7afa4d5e444c35ed55c47fc052c182c4461827755fe54639e0->enter($__internal_b81b613aee729f7afa4d5e444c35ed55c47fc052c182c4461827755fe54639e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b9d3ec70b30cb464ca1c4f5ff7ae68eceb4b4ec606b8640cb3fd6ef8d2b276->leave($__internal_a1b9d3ec70b30cb464ca1c4f5ff7ae68eceb4b4ec606b8640cb3fd6ef8d2b276_prof);

        
        $__internal_b81b613aee729f7afa4d5e444c35ed55c47fc052c182c4461827755fe54639e0->leave($__internal_b81b613aee729f7afa4d5e444c35ed55c47fc052c182c4461827755fe54639e0_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8318a14d11360923545d577dd43919ee614ece55d4f4c99e4949051a3dfb3aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8318a14d11360923545d577dd43919ee614ece55d4f4c99e4949051a3dfb3aea->enter($__internal_8318a14d11360923545d577dd43919ee614ece55d4f4c99e4949051a3dfb3aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_97abd207c6cf48a2db5b7cb2e2ebdaa0536ed52b74ca580ff97d8a1fc8c08a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97abd207c6cf48a2db5b7cb2e2ebdaa0536ed52b74ca580ff97d8a1fc8c08a82->enter($__internal_97abd207c6cf48a2db5b7cb2e2ebdaa0536ed52b74ca580ff97d8a1fc8c08a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_97abd207c6cf48a2db5b7cb2e2ebdaa0536ed52b74ca580ff97d8a1fc8c08a82->leave($__internal_97abd207c6cf48a2db5b7cb2e2ebdaa0536ed52b74ca580ff97d8a1fc8c08a82_prof);

        
        $__internal_8318a14d11360923545d577dd43919ee614ece55d4f4c99e4949051a3dfb3aea->leave($__internal_8318a14d11360923545d577dd43919ee614ece55d4f4c99e4949051a3dfb3aea_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_e02b59040fc7bb05434b56b5a1862079ae4ce0e1236109466446460bd942ec6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02b59040fc7bb05434b56b5a1862079ae4ce0e1236109466446460bd942ec6e->enter($__internal_e02b59040fc7bb05434b56b5a1862079ae4ce0e1236109466446460bd942ec6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_1a04c0347a94f90776328e8dcd5a0ed85f635b53b65b18938ee8c8a5bfbd1820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a04c0347a94f90776328e8dcd5a0ed85f635b53b65b18938ee8c8a5bfbd1820->enter($__internal_1a04c0347a94f90776328e8dcd5a0ed85f635b53b65b18938ee8c8a5bfbd1820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_1a04c0347a94f90776328e8dcd5a0ed85f635b53b65b18938ee8c8a5bfbd1820->leave($__internal_1a04c0347a94f90776328e8dcd5a0ed85f635b53b65b18938ee8c8a5bfbd1820_prof);

        
        $__internal_e02b59040fc7bb05434b56b5a1862079ae4ce0e1236109466446460bd942ec6e->leave($__internal_e02b59040fc7bb05434b56b5a1862079ae4ce0e1236109466446460bd942ec6e_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_8df87457c41a2371fb7aebd78860e0fc49112e137a43b8b7da032b377b2e3157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df87457c41a2371fb7aebd78860e0fc49112e137a43b8b7da032b377b2e3157->enter($__internal_8df87457c41a2371fb7aebd78860e0fc49112e137a43b8b7da032b377b2e3157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_7fffcd0b3dcc55adbf54f0dbfbbf789f60f1fc023f49ed99ef761f16eda100b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fffcd0b3dcc55adbf54f0dbfbbf789f60f1fc023f49ed99ef761f16eda100b4->enter($__internal_7fffcd0b3dcc55adbf54f0dbfbbf789f60f1fc023f49ed99ef761f16eda100b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_7fffcd0b3dcc55adbf54f0dbfbbf789f60f1fc023f49ed99ef761f16eda100b4->leave($__internal_7fffcd0b3dcc55adbf54f0dbfbbf789f60f1fc023f49ed99ef761f16eda100b4_prof);

        
        $__internal_8df87457c41a2371fb7aebd78860e0fc49112e137a43b8b7da032b377b2e3157->leave($__internal_8df87457c41a2371fb7aebd78860e0fc49112e137a43b8b7da032b377b2e3157_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_1817a38ccdf4555dae7af451574351e617a88ad0f005cd15f3665b4afa852f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1817a38ccdf4555dae7af451574351e617a88ad0f005cd15f3665b4afa852f32->enter($__internal_1817a38ccdf4555dae7af451574351e617a88ad0f005cd15f3665b4afa852f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_aeb84c79331be88e4bd95db5f8cad4ac127ca33306972da7c337ea706d3148d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb84c79331be88e4bd95db5f8cad4ac127ca33306972da7c337ea706d3148d7->enter($__internal_aeb84c79331be88e4bd95db5f8cad4ac127ca33306972da7c337ea706d3148d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 33, $this->getSourceContext()); })()), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 46, $this->getSourceContext()); })()), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 46, $this->getSourceContext()); })()));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_aeb84c79331be88e4bd95db5f8cad4ac127ca33306972da7c337ea706d3148d7->leave($__internal_aeb84c79331be88e4bd95db5f8cad4ac127ca33306972da7c337ea706d3148d7_prof);

        
        $__internal_1817a38ccdf4555dae7af451574351e617a88ad0f005cd15f3665b4afa852f32->leave($__internal_1817a38ccdf4555dae7af451574351e617a88ad0f005cd15f3665b4afa852f32_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_56d3a798341cdd128f7ce65949e5bdc7fa7e67e77bd3d4dd9a49aa176af0b79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d3a798341cdd128f7ce65949e5bdc7fa7e67e77bd3d4dd9a49aa176af0b79a->enter($__internal_56d3a798341cdd128f7ce65949e5bdc7fa7e67e77bd3d4dd9a49aa176af0b79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_61709f2728d2311c94f7f4ac41c81c5ce707681001e50a64176accb8c2a26672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61709f2728d2311c94f7f4ac41c81c5ce707681001e50a64176accb8c2a26672->enter($__internal_61709f2728d2311c94f7f4ac41c81c5ce707681001e50a64176accb8c2a26672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_61709f2728d2311c94f7f4ac41c81c5ce707681001e50a64176accb8c2a26672->leave($__internal_61709f2728d2311c94f7f4ac41c81c5ce707681001e50a64176accb8c2a26672_prof);

        
        $__internal_56d3a798341cdd128f7ce65949e5bdc7fa7e67e77bd3d4dd9a49aa176af0b79a->leave($__internal_56d3a798341cdd128f7ce65949e5bdc7fa7e67e77bd3d4dd9a49aa176af0b79a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
