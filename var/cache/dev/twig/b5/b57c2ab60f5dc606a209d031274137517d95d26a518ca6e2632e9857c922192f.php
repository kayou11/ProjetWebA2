<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_bd4a0b7b4d0dddbd72187e81fc6a01d65fd66871bdb31b6c696409b2c39849b2 extends Twig_Template
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
        $__internal_ec16dc60a687168a02b090a90f2cf550c0d8b6e033832aa616350724cd385fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec16dc60a687168a02b090a90f2cf550c0d8b6e033832aa616350724cd385fd0->enter($__internal_ec16dc60a687168a02b090a90f2cf550c0d8b6e033832aa616350724cd385fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        $__internal_5f28ea9fc2d044f291cdbdf919418ebf6344b23094d6ff7996370a8272f87147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f28ea9fc2d044f291cdbdf919418ebf6344b23094d6ff7996370a8272f87147->enter($__internal_5f28ea9fc2d044f291cdbdf919418ebf6344b23094d6ff7996370a8272f87147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "canAccessObject", array(0 => "history", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->getSourceContext()); })())), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 14, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_ec16dc60a687168a02b090a90f2cf550c0d8b6e033832aa616350724cd385fd0->leave($__internal_ec16dc60a687168a02b090a90f2cf550c0d8b6e033832aa616350724cd385fd0_prof);

        
        $__internal_5f28ea9fc2d044f291cdbdf919418ebf6344b23094d6ff7996370a8272f87147->leave($__internal_5f28ea9fc2d044f291cdbdf919418ebf6344b23094d6ff7996370a8272f87147_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.canAccessObject('history', object) and admin.hasRoute('history') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('history', object) }}\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:history_button.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Button/history_button.html.twig");
    }
}
