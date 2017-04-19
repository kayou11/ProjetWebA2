<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_dfd154cbc46ab3fec5d02cb8a271c02d1854b7a1420c5da3be47861cc07dbce4 extends Twig_Template
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
        $__internal_ffb408bf2702e3a3daf16aca4dccd1b53f96672e65d982990cd3744a0f026201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb408bf2702e3a3daf16aca4dccd1b53f96672e65d982990cd3744a0f026201->enter($__internal_ffb408bf2702e3a3daf16aca4dccd1b53f96672e65d982990cd3744a0f026201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        $__internal_8e71d756295486a381d4bcd7c3127acf924ee166c6de26f421fd803260cb9635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e71d756295486a381d4bcd7c3127acf924ee166c6de26f421fd803260cb9635->enter($__internal_8e71d756295486a381d4bcd7c3127acf924ee166c6de26f421fd803260cb9635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "canAccessObject", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->getSourceContext()); })())), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 14, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_ffb408bf2702e3a3daf16aca4dccd1b53f96672e65d982990cd3744a0f026201->leave($__internal_ffb408bf2702e3a3daf16aca4dccd1b53f96672e65d982990cd3744a0f026201_prof);

        
        $__internal_8e71d756295486a381d4bcd7c3127acf924ee166c6de26f421fd803260cb9635->leave($__internal_8e71d756295486a381d4bcd7c3127acf924ee166c6de26f421fd803260cb9635_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
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

{% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:edit_button.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Button/edit_button.html.twig");
    }
}
