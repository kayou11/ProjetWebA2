<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_ac45562f4bf022258ca4b38a9b5dead00a17109fe133c3a4373cb40910171d29 extends Twig_Template
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
        $__internal_9dc889b633809e9784aa2d086cf2b217315b8b536b3e37e6b93d46c4e1671924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc889b633809e9784aa2d086cf2b217315b8b536b3e37e6b93d46c4e1671924->enter($__internal_9dc889b633809e9784aa2d086cf2b217315b8b536b3e37e6b93d46c4e1671924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_links.html.twig"));

        $__internal_e542f73914bc8ddbbab4e26283f9eb130620c167247192c7b1e8c17732e6d0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e542f73914bc8ddbbab4e26283f9eb130620c167247192c7b1e8c17732e6d0bf->enter($__internal_e542f73914bc8ddbbab4e26283f9eb130620c167247192c7b1e8c17732e6d0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_links.html.twig"));

        // line 11
        echo "
<div class=\"text-center\">
    <ul class=\"pagination\">
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()) > 2)) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "datagrid", array()), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "previouspage", array()))) {
            // line 19
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 19, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 19, $this->getSourceContext()); })()), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 19, $this->getSourceContext()); })()), "datagrid", array()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 19, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "previouspage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
        ";
        }
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "getLinks", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 23, $this->getSourceContext()); })()), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "            ";
            if (($context["page"] == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 24, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()))) {
                // line 25
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "datagrid", array()), 1 => $context["page"]), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 27
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "datagrid", array()), 1 => $context["page"]), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        ";
        // line 31
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nextpage", array()))) {
            // line 32
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 32, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 32, $this->getSourceContext()); })()), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 32, $this->getSourceContext()); })()), "datagrid", array()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 32, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nextpage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 35, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 35, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 35, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 35, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nextpage", array())))) {
            // line 36
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "datagrid", array()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
        ";
        }
        // line 38
        echo "    </ul>
</div>
";
        
        $__internal_9dc889b633809e9784aa2d086cf2b217315b8b536b3e37e6b93d46c4e1671924->leave($__internal_9dc889b633809e9784aa2d086cf2b217315b8b536b3e37e6b93d46c4e1671924_prof);

        
        $__internal_e542f73914bc8ddbbab4e26283f9eb130620c167247192c7b1e8c17732e6d0bf->leave($__internal_e542f73914bc8ddbbab4e26283f9eb130620c167247192c7b1e8c17732e6d0bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  104 => 36,  102 => 35,  99 => 34,  91 => 32,  89 => 31,  86 => 30,  80 => 29,  72 => 27,  64 => 25,  61 => 24,  56 => 23,  53 => 21,  45 => 19,  43 => 18,  40 => 17,  32 => 15,  30 => 14,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"text-center\">
    <ul class=\"pagination\">
        {% if admin.datagrid.pager.page > 2  %}
            <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, 1)) }}\" title=\"{{ 'link_first_pager'|trans({}, 'SonataAdminBundle') }}\">&laquo;</a></li>
        {% endif %}

        {% if admin.datagrid.pager.page != admin.datagrid.pager.previouspage %}
            <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.previouspage)) }}\" title=\"{{ 'link_previous_pager'|trans({}, 'SonataAdminBundle') }}\">&lsaquo;</a></li>
        {% endif %}

        {# Set the number of pages to display in the pager #}
        {% for page in admin.datagrid.pager.getLinks(admin_pool.getOption('pager_links')) %}
            {% if page == admin.datagrid.pager.page %}
                <li class=\"active\"><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, page)) }}\">{{ page }}</a></li>
            {% else %}
                <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, page)) }}\">{{ page }}</a></li>
            {% endif %}
        {% endfor %}

        {% if admin.datagrid.pager.page != admin.datagrid.pager.nextpage %}
            <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.nextpage)) }}\" title=\"{{ 'link_next_pager'|trans({}, 'SonataAdminBundle') }}\">&rsaquo;</a></li>
        {% endif %}

        {% if admin.datagrid.pager.page != admin.datagrid.pager.lastpage and admin.datagrid.pager.lastpage != admin.datagrid.pager.nextpage %}
            <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.lastpage)) }}\" title=\"{{ 'link_last_pager'|trans({}, 'SonataAdminBundle') }}\">&raquo;</a></li>
        {% endif %}
    </ul>
</div>
", "SonataAdminBundle:Pager:base_links.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_links.html.twig");
    }
}
