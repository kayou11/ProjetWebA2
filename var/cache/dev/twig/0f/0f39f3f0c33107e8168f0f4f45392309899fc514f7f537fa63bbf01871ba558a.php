<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_65502d720b0e54fdf9e0589eb588110f559679fcb3b2815d957a58685ba25e3f extends Twig_Template
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
        $__internal_c538985dfc1ed5098988001a41bf92fb2c3cb244726b554bbf46b118698d3223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c538985dfc1ed5098988001a41bf92fb2c3cb244726b554bbf46b118698d3223->enter($__internal_c538985dfc1ed5098988001a41bf92fb2c3cb244726b554bbf46b118698d3223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_149064952d9b6b3ff614ca9f7601fb0db934ca17890a71a8fa9fe07ec7c0f97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149064952d9b6b3ff614ca9f7601fb0db934ca17890a71a8fa9fe07ec7c0f97c->enter($__internal_149064952d9b6b3ff614ca9f7601fb0db934ca17890a71a8fa9fe07ec7c0f97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c538985dfc1ed5098988001a41bf92fb2c3cb244726b554bbf46b118698d3223->leave($__internal_c538985dfc1ed5098988001a41bf92fb2c3cb244726b554bbf46b118698d3223_prof);

        
        $__internal_149064952d9b6b3ff614ca9f7601fb0db934ca17890a71a8fa9fe07ec7c0f97c->leave($__internal_149064952d9b6b3ff614ca9f7601fb0db934ca17890a71a8fa9fe07ec7c0f97c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b0dfcee49ac3e83e6902445b368de6f74924df20ea192f15822dafecde6e0c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dfcee49ac3e83e6902445b368de6f74924df20ea192f15822dafecde6e0c34->enter($__internal_b0dfcee49ac3e83e6902445b368de6f74924df20ea192f15822dafecde6e0c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_06b4d46c71a7eedf67d4f5136dd6686b31d464f516512feda26c5f3025f41223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b4d46c71a7eedf67d4f5136dd6686b31d464f516512feda26c5f3025f41223->enter($__internal_06b4d46c71a7eedf67d4f5136dd6686b31d464f516512feda26c5f3025f41223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_06b4d46c71a7eedf67d4f5136dd6686b31d464f516512feda26c5f3025f41223->leave($__internal_06b4d46c71a7eedf67d4f5136dd6686b31d464f516512feda26c5f3025f41223_prof);

        
        $__internal_b0dfcee49ac3e83e6902445b368de6f74924df20ea192f15822dafecde6e0c34->leave($__internal_b0dfcee49ac3e83e6902445b368de6f74924df20ea192f15822dafecde6e0c34_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_e1663c5bb3f0335958613bc166d92ad9ae5e360a4724b4ca15451a7fec301af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1663c5bb3f0335958613bc166d92ad9ae5e360a4724b4ca15451a7fec301af1->enter($__internal_e1663c5bb3f0335958613bc166d92ad9ae5e360a4724b4ca15451a7fec301af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_7769fa19f0686eafbe99a804d1288733577e1c1e7a02309067eb86a266ff56da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7769fa19f0686eafbe99a804d1288733577e1c1e7a02309067eb86a266ff56da->enter($__internal_7769fa19f0686eafbe99a804d1288733577e1c1e7a02309067eb86a266ff56da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_7769fa19f0686eafbe99a804d1288733577e1c1e7a02309067eb86a266ff56da->leave($__internal_7769fa19f0686eafbe99a804d1288733577e1c1e7a02309067eb86a266ff56da_prof);

        
        $__internal_e1663c5bb3f0335958613bc166d92ad9ae5e360a4724b4ca15451a7fec301af1->leave($__internal_e1663c5bb3f0335958613bc166d92ad9ae5e360a4724b4ca15451a7fec301af1_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_08e0556044dc577fe2d7df51cb7ed85644fb7d05886932dbddae914b72a2003c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e0556044dc577fe2d7df51cb7ed85644fb7d05886932dbddae914b72a2003c->enter($__internal_08e0556044dc577fe2d7df51cb7ed85644fb7d05886932dbddae914b72a2003c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_99a88ee086da9b4a343a69693fa1653f378ace00189beb3a9d84c8e64bc21dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a88ee086da9b4a343a69693fa1653f378ace00189beb3a9d84c8e64bc21dca->enter($__internal_99a88ee086da9b4a343a69693fa1653f378ace00189beb3a9d84c8e64bc21dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

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
        
        $__internal_99a88ee086da9b4a343a69693fa1653f378ace00189beb3a9d84c8e64bc21dca->leave($__internal_99a88ee086da9b4a343a69693fa1653f378ace00189beb3a9d84c8e64bc21dca_prof);

        
        $__internal_08e0556044dc577fe2d7df51cb7ed85644fb7d05886932dbddae914b72a2003c->leave($__internal_08e0556044dc577fe2d7df51cb7ed85644fb7d05886932dbddae914b72a2003c_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_49b041b4b23da98e0172d00c84683a11e432eb658132260d69abd3c7cb4ce79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b041b4b23da98e0172d00c84683a11e432eb658132260d69abd3c7cb4ce79e->enter($__internal_49b041b4b23da98e0172d00c84683a11e432eb658132260d69abd3c7cb4ce79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_7907943c2c6a0b4a2736005f193e4664b2fc55a9033178657fca87a9b763fbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7907943c2c6a0b4a2736005f193e4664b2fc55a9033178657fca87a9b763fbf3->enter($__internal_7907943c2c6a0b4a2736005f193e4664b2fc55a9033178657fca87a9b763fbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

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
        
        $__internal_7907943c2c6a0b4a2736005f193e4664b2fc55a9033178657fca87a9b763fbf3->leave($__internal_7907943c2c6a0b4a2736005f193e4664b2fc55a9033178657fca87a9b763fbf3_prof);

        
        $__internal_49b041b4b23da98e0172d00c84683a11e432eb658132260d69abd3c7cb4ce79e->leave($__internal_49b041b4b23da98e0172d00c84683a11e432eb658132260d69abd3c7cb4ce79e_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_69959e615539ed0b0089d415ab0529f5b8e4c9d08679f176ec88110a507557f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69959e615539ed0b0089d415ab0529f5b8e4c9d08679f176ec88110a507557f2->enter($__internal_69959e615539ed0b0089d415ab0529f5b8e4c9d08679f176ec88110a507557f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_eaeb34e2ce231e4cdd6977ce4641675f1b4119d23af23a4f87d89262b5f84937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaeb34e2ce231e4cdd6977ce4641675f1b4119d23af23a4f87d89262b5f84937->enter($__internal_eaeb34e2ce231e4cdd6977ce4641675f1b4119d23af23a4f87d89262b5f84937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_eaeb34e2ce231e4cdd6977ce4641675f1b4119d23af23a4f87d89262b5f84937->leave($__internal_eaeb34e2ce231e4cdd6977ce4641675f1b4119d23af23a4f87d89262b5f84937_prof);

        
        $__internal_69959e615539ed0b0089d415ab0529f5b8e4c9d08679f176ec88110a507557f2->leave($__internal_69959e615539ed0b0089d415ab0529f5b8e4c9d08679f176ec88110a507557f2_prof);

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
