<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_ec1fe4142f7126b7e7e63ae300cbafb686b3e8b8c504e0e2ab8d2940a9936ac7 extends Twig_Template
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
        // line 22
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12dd54b69b5f76512afa2e9f257c9ca76772e4fd290635235e64fba56cd96565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dd54b69b5f76512afa2e9f257c9ca76772e4fd290635235e64fba56cd96565->enter($__internal_12dd54b69b5f76512afa2e9f257c9ca76772e4fd290635235e64fba56cd96565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_4a717469dc53524d5c8149b0518a4484e3e7d1654927b74c9194cde818646942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a717469dc53524d5c8149b0518a4484e3e7d1654927b74c9194cde818646942->enter($__internal_4a717469dc53524d5c8149b0518a4484e3e7d1654927b74c9194cde818646942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12dd54b69b5f76512afa2e9f257c9ca76772e4fd290635235e64fba56cd96565->leave($__internal_12dd54b69b5f76512afa2e9f257c9ca76772e4fd290635235e64fba56cd96565_prof);

        
        $__internal_4a717469dc53524d5c8149b0518a4484e3e7d1654927b74c9194cde818646942->leave($__internal_4a717469dc53524d5c8149b0518a4484e3e7d1654927b74c9194cde818646942_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_f13cadf6a912292ebd2439ff838c0f85428aa8b8126d7f1682d71b82c1eced0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13cadf6a912292ebd2439ff838c0f85428aa8b8126d7f1682d71b82c1eced0a->enter($__internal_f13cadf6a912292ebd2439ff838c0f85428aa8b8126d7f1682d71b82c1eced0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b276c696685518190e1d61a091c8446a09b1d1173249eb0d1fd26f936a912096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b276c696685518190e1d61a091c8446a09b1d1173249eb0d1fd26f936a912096->enter($__internal_b276c696685518190e1d61a091c8446a09b1d1173249eb0d1fd26f936a912096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_b276c696685518190e1d61a091c8446a09b1d1173249eb0d1fd26f936a912096->leave($__internal_b276c696685518190e1d61a091c8446a09b1d1173249eb0d1fd26f936a912096_prof);

        
        $__internal_f13cadf6a912292ebd2439ff838c0f85428aa8b8126d7f1682d71b82c1eced0a->leave($__internal_f13cadf6a912292ebd2439ff838c0f85428aa8b8126d7f1682d71b82c1eced0a_prof);

    }

    // line 12
    public function macro_render_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_00305e0d62ff1f0329bcc79bc9eb74f20a94c2e823e5c961a0c809eb85c99515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_00305e0d62ff1f0329bcc79bc9eb74f20a94c2e823e5c961a0c809eb85c99515->enter($__internal_00305e0d62ff1f0329bcc79bc9eb74f20a94c2e823e5c961a0c809eb85c99515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_feb31a35cf2bb8493ed03aca4bca987d118771505db623bc58aa3ddc31f93e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_feb31a35cf2bb8493ed03aca4bca987d118771505db623bc58aa3ddc31f93e1e->enter($__internal_feb31a35cf2bb8493ed03aca4bca987d118771505db623bc58aa3ddc31f93e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["list"]->macro_render_array($context["val"]);
                    echo "}]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_feb31a35cf2bb8493ed03aca4bca987d118771505db623bc58aa3ddc31f93e1e->leave($__internal_feb31a35cf2bb8493ed03aca4bca987d118771505db623bc58aa3ddc31f93e1e_prof);

            
            $__internal_00305e0d62ff1f0329bcc79bc9eb74f20a94c2e823e5c961a0c809eb85c99515->leave($__internal_00305e0d62ff1f0329bcc79bc9eb74f20a94c2e823e5c961a0c809eb85c99515_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  98 => 17,  90 => 15,  87 => 14,  82 => 13,  64 => 12,  51 => 25,  42 => 24,  32 => 22,  30 => 11,  18 => 22,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% import _self as list %}
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ list.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
