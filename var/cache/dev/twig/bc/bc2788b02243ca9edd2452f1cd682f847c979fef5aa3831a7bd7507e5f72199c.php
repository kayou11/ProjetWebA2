<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_b3f334b4b17166b533f613530d17fe709b116d447f082b6982eb85c01e00d7b2 extends Twig_Template
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
        $__internal_abf1611b0e418c0b4112521910216677debb1cde08b202f994404cb4d855c011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf1611b0e418c0b4112521910216677debb1cde08b202f994404cb4d855c011->enter($__internal_abf1611b0e418c0b4112521910216677debb1cde08b202f994404cb4d855c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        $__internal_00cda7a4cf2cb33680278f64b966496c8d4840d880052cc52ed74ff2cdba9b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00cda7a4cf2cb33680278f64b966496c8d4840d880052cc52ed74ff2cdba9b25->enter($__internal_00cda7a4cf2cb33680278f64b966496c8d4840d880052cc52ed74ff2cdba9b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasAccess", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasRoute", array(0 => "create"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "subClasses", array()))) {
                // line 14
                echo "        <li>
            <a class=\"sonata-action-element\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
            </a>
        </li>
    ";
            } else {
                // line 21
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 21, $this->getSourceContext()); })()), "subclasses", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 22
                    echo "            <li>
                <a class=\"sonata-action-element\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "translationdomain", array())), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "    ";
            }
        }
        
        $__internal_abf1611b0e418c0b4112521910216677debb1cde08b202f994404cb4d855c011->leave($__internal_abf1611b0e418c0b4112521910216677debb1cde08b202f994404cb4d855c011_prof);

        
        $__internal_00cda7a4cf2cb33680278f64b966496c8d4840d880052cc52ed74ff2cdba9b25->leave($__internal_00cda7a4cf2cb33680278f64b966496c8d4840d880052cc52ed74ff2cdba9b25_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  61 => 25,  56 => 23,  53 => 22,  48 => 21,  41 => 17,  36 => 15,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('create') and admin.hasRoute('create') %}
    {% if admin.subClasses is empty %}
        <li>
            <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create') }}\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }}
            </a>
        </li>
    {% else %}
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }} {{ subclass|trans({}, admin.translationdomain) }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
{% endif %}
", "SonataAdminBundle:Button:create_button.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Button/create_button.html.twig");
    }
}
