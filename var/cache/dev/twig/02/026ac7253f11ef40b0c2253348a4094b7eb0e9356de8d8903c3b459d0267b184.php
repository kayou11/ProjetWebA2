<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_51f149a341ff5ebfd3ce19bd8e906862afd5121ef4b7eeee0bd2ce6dcae5f72f extends Twig_Template
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
        $__internal_c8f2d471a349b153003681aabd004292a9bfa17a0fb6a6dd81bae1c2e53bdd37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f2d471a349b153003681aabd004292a9bfa17a0fb6a6dd81bae1c2e53bdd37->enter($__internal_c8f2d471a349b153003681aabd004292a9bfa17a0fb6a6dd81bae1c2e53bdd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:acl_button.html.twig"));

        $__internal_3745a78b5aac5868adf066002287e1baa965eb1ec3e68963c50c40f4d82e7439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3745a78b5aac5868adf066002287e1baa965eb1ec3e68963c50c40f4d82e7439->enter($__internal_3745a78b5aac5868adf066002287e1baa965eb1ec3e68963c50c40f4d82e7439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:acl_button.html.twig"));

        // line 11
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "isAclEnabled", array(), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "canAccessObject", array(0 => "acl", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 11, $this->getSourceContext()); })())), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 13, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_c8f2d471a349b153003681aabd004292a9bfa17a0fb6a6dd81bae1c2e53bdd37->leave($__internal_c8f2d471a349b153003681aabd004292a9bfa17a0fb6a6dd81bae1c2e53bdd37_prof);

        
        $__internal_3745a78b5aac5868adf066002287e1baa965eb1ec3e68963c50c40f4d82e7439->leave($__internal_3745a78b5aac5868adf066002287e1baa965eb1ec3e68963c50c40f4d82e7439_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  30 => 13,  27 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% if admin.isAclEnabled() and admin.canAccessObject('acl', object) and admin.hasRoute('acl') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('acl', object) }}\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:acl_button.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Button/acl_button.html.twig");
    }
}
