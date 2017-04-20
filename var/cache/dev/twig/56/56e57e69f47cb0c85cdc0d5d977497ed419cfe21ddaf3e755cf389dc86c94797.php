<?php

/* SonataAdminBundle:CRUD:base_acl_macro.html.twig */
class __TwigTemplate_479dc61dd4cc659cb1eea51dd5baed0c05bf2ee430aa905994e4de3145c1348f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_014acff5ffee64b21ccb925f6f4f06c9a75a5cd02b0419d3282ba8df7d9b661c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014acff5ffee64b21ccb925f6f4f06c9a75a5cd02b0419d3282ba8df7d9b661c->enter($__internal_014acff5ffee64b21ccb925f6f4f06c9a75a5cd02b0419d3282ba8df7d9b661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl_macro.html.twig"));

        $__internal_7c4d02b1e4e7b3555165e4579ad7bbfeb641c82a91b656487cb77ccca7b9c5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4d02b1e4e7b3555165e4579ad7bbfeb641c82a91b656487cb77ccca7b9c5e5->enter($__internal_7c4d02b1e4e7b3555165e4579ad7bbfeb641c82a91b656487cb77ccca7b9c5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl_macro.html.twig"));

        // line 11
        echo "
";
        
        $__internal_014acff5ffee64b21ccb925f6f4f06c9a75a5cd02b0419d3282ba8df7d9b661c->leave($__internal_014acff5ffee64b21ccb925f6f4f06c9a75a5cd02b0419d3282ba8df7d9b661c_prof);

        
        $__internal_7c4d02b1e4e7b3555165e4579ad7bbfeb641c82a91b656487cb77ccca7b9c5e5->leave($__internal_7c4d02b1e4e7b3555165e4579ad7bbfeb641c82a91b656487cb77ccca7b9c5e5_prof);

    }

    // line 12
    public function macro_render_form($__form__ = null, $__permissions__ = null, $__td_type__ = null, $__admin__ = null, $__admin_pool__ = null, $__object__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "permissions" => $__permissions__,
            "td_type" => $__td_type__,
            "admin" => $__admin__,
            "admin_pool" => $__admin_pool__,
            "object" => $__object__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9f6e35e116ec43a9ddd5f1a60411bb00b72dbbc9d9f0766d3e77f7ca49d67824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9f6e35e116ec43a9ddd5f1a60411bb00b72dbbc9d9f0766d3e77f7ca49d67824->enter($__internal_9f6e35e116ec43a9ddd5f1a60411bb00b72dbbc9d9f0766d3e77f7ca49d67824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_form"));

            $__internal_074fd815da766a74624cadc04d88384dbe92992281060599952c0751789ae1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_074fd815da766a74624cadc04d88384dbe92992281060599952c0751789ae1f6->enter($__internal_074fd815da766a74624cadc04d88384dbe92992281060599952c0751789ae1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_form"));

            // line 13
            echo "    <form class=\"form-horizontal\"
          action=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "generateUrl", array(0 => "acl", 1 => array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 14, $this->getSourceContext()); })())), "method"), "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "uniqid", array()), "subclass" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\"
          ";
            // line 15
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "          method=\"POST\"
            ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 17, $this->getSourceContext()); })()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "            >

        ";
            // line 20
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

        <div class=\"box box-success\">
            <div class=\"body table-responsive no-padding\">
                <table class=\"table\">
                    <colgroup>
                        <col style=\"width: 100%;\"/>
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 27, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 28
                echo "                            <col/>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </colgroup>

                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "vars", array()), "name", array()) != "_token")) {
                    // line 33
                    echo "                        ";
                    if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()) == 0) || ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()) % 10) == 0))) {
                        // line 34
                        echo "                            <tr>
                                <th>";
                        // line 35
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["td_type"]) || array_key_exists("td_type", $context) ? $context["td_type"] : (function () { throw new Twig_Error_Runtime('Variable "td_type" does not exist.', 35, $this->getSourceContext()); })()), array(), "SonataAdminBundle"), "html", null, true);
                        echo "</th>
                                ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 36, $this->getSourceContext()); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                            // line 37
                            echo "                                    <th class=\"text-right\">";
                            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
                            echo "</th>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                            </tr>
                        ";
                    }
                    // line 41
                    echo "
                        <tr>
                            <td>
                                ";
                    // line 44
                    $context["typeChild"] = ((twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "role", array(), "array", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "role", array(), "array")) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "user", array(), "array")));
                    // line 45
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["typeChild"]) || array_key_exists("typeChild", $context) ? $context["typeChild"] : (function () { throw new Twig_Error_Runtime('Variable "typeChild" does not exist.', 45, $this->getSourceContext()); })()), "vars", array()), "value", array()), "html", null, true);
                    echo "
                                ";
                    // line 46
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["typeChild"]) || array_key_exists("typeChild", $context) ? $context["typeChild"] : (function () { throw new Twig_Error_Runtime('Variable "typeChild" does not exist.', 46, $this->getSourceContext()); })()), 'widget');
                    echo "
                            </td>
                            ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 48, $this->getSourceContext()); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                        // line 49
                        echo "                                <td class=\"text-right\">";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], $context["permission"], array(), "array"), 'widget', array("label" => false));
                        echo "</td>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </table>
            </div>
        </div>

        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), "_token", array()), 'row');
            echo "

        <div class=\"well well-small form-actions\">
            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        </div>
    </form>
";
            
            $__internal_074fd815da766a74624cadc04d88384dbe92992281060599952c0751789ae1f6->leave($__internal_074fd815da766a74624cadc04d88384dbe92992281060599952c0751789ae1f6_prof);

            
            $__internal_9f6e35e116ec43a9ddd5f1a60411bb00b72dbbc9d9f0766d3e77f7ca49d67824->leave($__internal_9f6e35e116ec43a9ddd5f1a60411bb00b72dbbc9d9f0766d3e77f7ca49d67824_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 60,  191 => 57,  185 => 53,  174 => 51,  165 => 49,  161 => 48,  156 => 46,  151 => 45,  149 => 44,  144 => 41,  140 => 39,  131 => 37,  127 => 36,  123 => 35,  120 => 34,  117 => 33,  106 => 32,  102 => 30,  95 => 28,  91 => 27,  81 => 20,  77 => 18,  73 => 17,  70 => 16,  66 => 15,  62 => 14,  59 => 13,  36 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% macro render_form(form, permissions, td_type, admin, admin_pool, object) %}
    <form class=\"form-horizontal\"
          action=\"{{ admin.generateUrl('acl', {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}\"
          {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
          method=\"POST\"
            {% if not admin_pool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
            >

        {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

        <div class=\"box box-success\">
            <div class=\"body table-responsive no-padding\">
                <table class=\"table\">
                    <colgroup>
                        <col style=\"width: 100%;\"/>
                        {% for permission in permissions %}
                            <col/>
                        {% endfor %}
                    </colgroup>

                    {% for child in form.children if child.vars.name != '_token' %}
                        {% if loop.index0 == 0 or loop.index0 % 10 == 0 %}
                            <tr>
                                <th>{{ td_type|trans({}, 'SonataAdminBundle') }}</th>
                                {% for permission in permissions %}
                                    <th class=\"text-right\">{{ permission }}</th>
                                {% endfor %}
                            </tr>
                        {% endif %}

                        <tr>
                            <td>
                                {% set typeChild = child['role'] is defined ? child['role'] : child['user'] %}
                                {{ typeChild.vars.value }}
                                {{ form_widget(typeChild) }}
                            </td>
                            {% for permission in permissions %}
                                <td class=\"text-right\">{{ form_widget(child[permission], { label: false }) }}</td>
                            {% endfor %}
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>

        {{ form_row(form._token) }}

        <div class=\"well well-small form-actions\">
            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"{{ 'btn_update_acl'|trans({}, 'SonataAdminBundle') }}\">
        </div>
    </form>
{% endmacro %}
", "SonataAdminBundle:CRUD:base_acl_macro.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl_macro.html.twig");
    }
}
