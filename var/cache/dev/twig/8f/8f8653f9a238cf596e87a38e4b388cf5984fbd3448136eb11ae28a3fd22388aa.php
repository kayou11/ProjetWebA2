<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig */
class __TwigTemplate_30bb538940537b9b902c00bd3a6fc9cca1514d99d91fc79373e9dd9dcd90bd93 extends Twig_Template
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
        $__internal_93053b286b3d245a3a9c16333f1f400125be711dd0b66b3bcf9f7484c50b93a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93053b286b3d245a3a9c16333f1f400125be711dd0b66b3bcf9f7484c50b93a3->enter($__internal_93053b286b3d245a3a9c16333f1f400125be711dd0b66b3bcf9f7484c50b93a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig"));

        $__internal_122a153165ebbd84a3f0979f73c269eb62aeafb67b134c155b9891793498deae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122a153165ebbd84a3f0979f73c269eb62aeafb67b134c155b9891793498deae->enter($__internal_122a153165ebbd84a3f0979f73c269eb62aeafb67b134c155b9891793498deae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 12, $this->getSourceContext()); })()), "field_description", array()), "hasassociationadmin", array())) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 13, $this->getSourceContext()); })()), "field_description", array())), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 14, $this->getSourceContext()); })()), "edit", array()) == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 15, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "formfielddescriptions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "children", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "name", array()), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "edit", array()) == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "value", array())), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("code" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 24
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 24, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 25
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "value", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 26
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 26, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 27
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 27, $this->getSourceContext()); })()), "field_description", array()), "options", array()), "link_parameters", array()))));
                    // line 28
                    echo "
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                 // line 29
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 29, $this->getSourceContext()); })()), "field_description", array()), "options", array()), "placeholder", array()))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 31, $this->getSourceContext()); })()), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <div id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 45
            $context["display_btn_list"] = ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 45, $this->getSourceContext()); })()), "edit", array()) == "list") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 45, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 45, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "btn_list" does not exist.', 45, $this->getSourceContext()); })()));
            // line 46
            echo "            ";
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 46, $this->getSourceContext()); })()), "edit", array()) != "admin") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 46, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 46, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 46, $this->getSourceContext()); })()));
            // line 47
            echo "            ";
            if (((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_list" does not exist.', 47, $this->getSourceContext()); })()) || (isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_add" does not exist.', 47, $this->getSourceContext()); })()))) {
                // line 48
                echo "            <div class=\"btn-group\">
                ";
                // line 49
                if ((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_list" does not exist.', 49, $this->getSourceContext()); })())) {
                    // line 50
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 50, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 50, $this->getSourceContext()); })()), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 51
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 51, $this->getSourceContext()); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "btn_list" does not exist.', 53, $this->getSourceContext()); })()), array(), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 53, $this->getSourceContext()); })())), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "btn_list" does not exist.', 56, $this->getSourceContext()); })()), array(), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 56, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 59
                echo "
                ";
                // line 60
                if ((isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_add" does not exist.', 60, $this->getSourceContext()); })())) {
                    // line 61
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 61, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 61, $this->getSourceContext()); })()), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 62
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 62, $this->getSourceContext()); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 64, $this->getSourceContext()); })()), array(), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 64, $this->getSourceContext()); })())), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 67, $this->getSourceContext()); })()), array(), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 67, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 70
                echo "            </div>
            ";
            }
            // line 72
            echo "
            ";
            // line 73
            if (((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 73, $this->getSourceContext()); })()), "edit", array()) == "list") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 73, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 73, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new Twig_Error_Runtime('Variable "btn_delete" does not exist.', 73, $this->getSourceContext()); })()))) {
                // line 74
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 75, $this->getSourceContext()); })()), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new Twig_Error_Runtime('Variable "btn_delete" does not exist.', 77, $this->getSourceContext()); })()), array(), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 77, $this->getSourceContext()); })())), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new Twig_Error_Runtime('Variable "btn_delete" does not exist.', 80, $this->getSourceContext()); })()), array(), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 80, $this->getSourceContext()); })())), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 83
            echo "        </div>

        ";
            // line 85
            $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", 85)->display($context);
            // line 86
            echo "    </div>

    ";
            // line 88
            $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", 88)->display($context);
        }
        
        $__internal_93053b286b3d245a3a9c16333f1f400125be711dd0b66b3bcf9f7484c50b93a3->leave($__internal_93053b286b3d245a3a9c16333f1f400125be711dd0b66b3bcf9f7484c50b93a3_prof);

        
        $__internal_122a153165ebbd84a3f0979f73c269eb62aeafb67b134c155b9891793498deae->leave($__internal_122a153165ebbd84a3f0979f73c269eb62aeafb67b134c155b9891793498deae_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 88,  212 => 86,  210 => 85,  206 => 83,  200 => 80,  194 => 77,  189 => 75,  186 => 74,  184 => 73,  181 => 72,  177 => 70,  171 => 67,  165 => 64,  160 => 62,  155 => 61,  153 => 60,  150 => 59,  144 => 56,  138 => 53,  133 => 51,  128 => 50,  126 => 49,  123 => 48,  120 => 47,  117 => 46,  115 => 45,  111 => 44,  108 => 43,  102 => 40,  97 => 39,  91 => 36,  87 => 34,  81 => 31,  78 => 30,  76 => 29,  73 => 28,  71 => 27,  70 => 26,  69 => 25,  68 => 24,  66 => 23,  64 => 22,  59 => 21,  57 => 20,  52 => 19,  42 => 16,  37 => 15,  35 => 14,  30 => 13,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if not sonata_admin.field_description.hasassociationadmin%}
    {{ value|render_relation_element(sonata_admin.field_description) }}
{% elseif sonata_admin.edit == 'inline' %}
    {% for field_description in sonata_admin.field_description.associationadmin.formfielddescriptions %}
        {{ form_row(form.children[field_description.name]) }}
    {% endfor %}
{% else %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        {% if sonata_admin.edit == 'list' %}
            <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
                {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}
                    {{ render(path('sonata_admin_short_object_information', {
                        'code':     sonata_admin.field_description.associationadmin.code,
                        'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),
                        'uniqid':   sonata_admin.field_description.associationadmin.uniqid,
                        'linkParameters': sonata_admin.field_description.options.link_parameters
                    })) }}
                {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}
                    <span class=\"inner-field-short-description\">
                        {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}
                    </span>
                {% endif %}
            </span>
            <span style=\"display: none\" >
                {{ form_widget(form) }}
            </span>
        {% else %}
            <span id=\"field_widget_{{ id }}\" >
                {{ form_widget(form) }}
            </span>
        {% endif %}

        <div id=\"field_actions_{{ id }}\" class=\"field-actions\">
            {% set display_btn_list = sonata_admin.edit == 'list' and sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}
            {% set display_btn_add = sonata_admin.edit != 'admin' and sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
            {% if display_btn_list or display_btn_add %}
            <div class=\"btn-group\">
                {% if display_btn_list %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
                        onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"{{ btn_list|trans({}, btn_catalogue) }}\"
                        >
                        <i class=\"fa fa-list\"></i>
                        {{ btn_list|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}

                {% if display_btn_add %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </div>
            {% endif %}

            {% if sonata_admin.edit == 'list' and sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}
                <a  href=\"\"
                    onclick=\"return remove_selected_element_{{ id }}(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"{{ btn_delete|trans({}, btn_catalogue) }}\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    {{ btn_delete|trans({}, btn_catalogue) }}
                </a>
            {% endif %}
        </div>

        {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig' %}
    </div>

    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}
{% endif %}
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_to_one.html.twig");
    }
}
