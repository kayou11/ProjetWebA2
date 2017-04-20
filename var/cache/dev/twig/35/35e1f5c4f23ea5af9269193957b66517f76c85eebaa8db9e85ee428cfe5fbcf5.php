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
        $__internal_473f511096e6001c2bef6132ab11571ba5a90b9022ffaab336810a62e097ed22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473f511096e6001c2bef6132ab11571ba5a90b9022ffaab336810a62e097ed22->enter($__internal_473f511096e6001c2bef6132ab11571ba5a90b9022ffaab336810a62e097ed22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_772250d9e52302e46b426f29585c7f6bded39fb26b910297650659d3d43dcbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772250d9e52302e46b426f29585c7f6bded39fb26b910297650659d3d43dcbad->enter($__internal_772250d9e52302e46b426f29585c7f6bded39fb26b910297650659d3d43dcbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_473f511096e6001c2bef6132ab11571ba5a90b9022ffaab336810a62e097ed22->leave($__internal_473f511096e6001c2bef6132ab11571ba5a90b9022ffaab336810a62e097ed22_prof);

        
        $__internal_772250d9e52302e46b426f29585c7f6bded39fb26b910297650659d3d43dcbad->leave($__internal_772250d9e52302e46b426f29585c7f6bded39fb26b910297650659d3d43dcbad_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_1de6fdd878d266a23bbcb11a68541e54ba792e5f1a465da7d266753b9b5eb0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de6fdd878d266a23bbcb11a68541e54ba792e5f1a465da7d266753b9b5eb0fe->enter($__internal_1de6fdd878d266a23bbcb11a68541e54ba792e5f1a465da7d266753b9b5eb0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d9d962fa912619ce22cb60b42051dc0b71dfb92872dfd73b51d06c99fd6ca587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d962fa912619ce22cb60b42051dc0b71dfb92872dfd73b51d06c99fd6ca587->enter($__internal_d9d962fa912619ce22cb60b42051dc0b71dfb92872dfd73b51d06c99fd6ca587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_d9d962fa912619ce22cb60b42051dc0b71dfb92872dfd73b51d06c99fd6ca587->leave($__internal_d9d962fa912619ce22cb60b42051dc0b71dfb92872dfd73b51d06c99fd6ca587_prof);

        
        $__internal_1de6fdd878d266a23bbcb11a68541e54ba792e5f1a465da7d266753b9b5eb0fe->leave($__internal_1de6fdd878d266a23bbcb11a68541e54ba792e5f1a465da7d266753b9b5eb0fe_prof);

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
            $__internal_3c5cae0bdf4faa9bc91083e95ece871ba9b5bbb9123f72bc90fe141bb9482a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3c5cae0bdf4faa9bc91083e95ece871ba9b5bbb9123f72bc90fe141bb9482a9d->enter($__internal_3c5cae0bdf4faa9bc91083e95ece871ba9b5bbb9123f72bc90fe141bb9482a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_74f38c7ad10d2820bbef90277d5065fcbb67447bcfc127a68ac6c2d9e34d4eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_74f38c7ad10d2820bbef90277d5065fcbb67447bcfc127a68ac6c2d9e34d4eca->enter($__internal_74f38c7ad10d2820bbef90277d5065fcbb67447bcfc127a68ac6c2d9e34d4eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

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
            
            $__internal_74f38c7ad10d2820bbef90277d5065fcbb67447bcfc127a68ac6c2d9e34d4eca->leave($__internal_74f38c7ad10d2820bbef90277d5065fcbb67447bcfc127a68ac6c2d9e34d4eca_prof);

            
            $__internal_3c5cae0bdf4faa9bc91083e95ece871ba9b5bbb9123f72bc90fe141bb9482a9d->leave($__internal_3c5cae0bdf4faa9bc91083e95ece871ba9b5bbb9123f72bc90fe141bb9482a9d_prof);


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
