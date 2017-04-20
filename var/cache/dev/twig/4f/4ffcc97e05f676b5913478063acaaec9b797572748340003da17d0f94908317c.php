<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_f523f1bb8b72c887e375533f7a7a72da20a3d492ad0112fb850f215d6e72bf7a extends Twig_Template
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
        $__internal_87e52055c4637128a3e142ec296d54fa1b9c4f3e54d5457356ef637c82dec0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e52055c4637128a3e142ec296d54fa1b9c4f3e54d5457356ef637c82dec0cc->enter($__internal_87e52055c4637128a3e142ec296d54fa1b9c4f3e54d5457356ef637c82dec0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        $__internal_7f0cdd90bb065a29f429be16b48ffe31837ff6e8b5e25a17ff22cddb8e5163d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0cdd90bb065a29f429be16b48ffe31837ff6e8b5e25a17ff22cddb8e5163d4->enter($__internal_7f0cdd90bb065a29f429be16b48ffe31837ff6e8b5e25a17ff22cddb8e5163d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

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
        
        $__internal_87e52055c4637128a3e142ec296d54fa1b9c4f3e54d5457356ef637c82dec0cc->leave($__internal_87e52055c4637128a3e142ec296d54fa1b9c4f3e54d5457356ef637c82dec0cc_prof);

        
        $__internal_7f0cdd90bb065a29f429be16b48ffe31837ff6e8b5e25a17ff22cddb8e5163d4->leave($__internal_7f0cdd90bb065a29f429be16b48ffe31837ff6e8b5e25a17ff22cddb8e5163d4_prof);

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
