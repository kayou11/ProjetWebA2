<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_07b8dae5dd6666dff70e7c743a777be8950abc3b6a96fc579bc8272ac8979b2b extends Twig_Template
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
        $__internal_fd5e896078e651187dc90f7f9e7c842af898ca6d9738d60ac5191cece47f913a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5e896078e651187dc90f7f9e7c842af898ca6d9738d60ac5191cece47f913a->enter($__internal_fd5e896078e651187dc90f7f9e7c842af898ca6d9738d60ac5191cece47f913a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        $__internal_abed17bdcbc9c18d45bb888f1fe2237ea1ff747e6e870de9844413b83468870f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abed17bdcbc9c18d45bb888f1fe2237ea1ff747e6e870de9844413b83468870f->enter($__internal_abed17bdcbc9c18d45bb888f1fe2237ea1ff747e6e870de9844413b83468870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        // line 11
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "canAccessObject", array(0 => "show", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 11, $this->getSourceContext()); })())), "method") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "show", array())) > 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "hasRoute", array(0 => "show"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 13, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_fd5e896078e651187dc90f7f9e7c842af898ca6d9738d60ac5191cece47f913a->leave($__internal_fd5e896078e651187dc90f7f9e7c842af898ca6d9738d60ac5191cece47f913a_prof);

        
        $__internal_abed17bdcbc9c18d45bb888f1fe2237ea1ff747e6e870de9844413b83468870f->leave($__internal_abed17bdcbc9c18d45bb888f1fe2237ea1ff747e6e870de9844413b83468870f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
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
{% if admin.canAccessObject('show', object) and admin.show|length > 0 and admin.hasRoute('show') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('show', object) }}\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            {{ 'link_action_show'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:show_button.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Button/show_button.html.twig");
    }
}
