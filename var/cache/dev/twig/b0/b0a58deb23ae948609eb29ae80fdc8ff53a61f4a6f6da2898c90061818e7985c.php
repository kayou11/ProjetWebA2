<?php

/* SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_bc5947bdd8eb6d58694d6062204bc889ad6ea1d0993668890d43afbc3ee12d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_mosaic_background' => array($this, 'block_sonata_mosaic_background'),
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_834a9dbb08205c354ee1ef1836910a52c8b077ac1b70d39b78673908dd1e3570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834a9dbb08205c354ee1ef1836910a52c8b077ac1b70d39b78673908dd1e3570->enter($__internal_834a9dbb08205c354ee1ef1836910a52c8b077ac1b70d39b78673908dd1e3570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig"));

        $__internal_e9e575d9cb5a1a5271634b6e12dad9aa8a5a3c5f9d6158d570d039b6261a3c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e575d9cb5a1a5271634b6e12dad9aa8a5a3c5f9d6158d570d039b6261a3c69->enter($__internal_e9e575d9cb5a1a5271634b6e12dad9aa8a5a3c5f9d6158d570d039b6261a3c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig"));

        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "list", array()), "elements", array())) - ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "isXmlHttpRequest", array())) ? ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "list", array()), "has", array(0 => "_action"), "method") + twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), "datagrid", array()), "results", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "getObjectMetadata", array(0 => $context["object"]), "method");
            // line 24
            echo "
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "id", array(0 => $context["object"]), "method"), "html", null, true);
            echo "\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 32
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 34
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 37
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 40
            echo "                            </div>

                            ";
            // line 46
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 47
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 51
            echo "                            </div>
                        </div>

                        ";
            // line 55
            echo "                        ";
            $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter((isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new Twig_Error_Runtime('Variable "export_formats" does not exist.', 55, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 55, $this->getSourceContext()); })()), "getExportFormats", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 55, $this->getSourceContext()); })()), "getExportFormats", array())));
            // line 56
            echo "
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 58
            if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 58, $this->getSourceContext()); })()), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new Twig_Error_Runtime('Variable "batchactions" does not exist.', 58, $this->getSourceContext()); })())) > 0)) || ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 58, $this->getSourceContext()); })()), "hasRoute", array(0 => "export"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 58, $this->getSourceContext()); })()), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new Twig_Error_Runtime('Variable "export_formats" does not exist.', 58, $this->getSourceContext()); })()))))) {
                // line 59
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 59, $this->getSourceContext()); })()), "id", array(0 => $context["object"]), "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 61
                echo "                                &nbsp;
                            ";
            }
            // line 63
            echo "
                            ";
            // line 64
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 73
            echo "                        </div>
                    </div>
                </div>

                ";
            // line 77
            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 4) == 0)) {
                // line 78
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 80
            echo "                ";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 2) == 0)) {
                // line 81
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 83
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div>
    </td>
</tr>
";
        
        $__internal_834a9dbb08205c354ee1ef1836910a52c8b077ac1b70d39b78673908dd1e3570->leave($__internal_834a9dbb08205c354ee1ef1836910a52c8b077ac1b70d39b78673908dd1e3570_prof);

        
        $__internal_e9e575d9cb5a1a5271634b6e12dad9aa8a5a3c5f9d6158d570d039b6261a3c69->leave($__internal_e9e575d9cb5a1a5271634b6e12dad9aa8a5a3c5f9d6158d570d039b6261a3c69_prof);

    }

    // line 34
    public function block_sonata_mosaic_background($context, array $blocks = array())
    {
        $__internal_bfeeefc0b6fe52351b55777555d6b97842f6b1940556e4c0ee5265d4dc2e10ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfeeefc0b6fe52351b55777555d6b97842f6b1940556e4c0ee5265d4dc2e10ab->enter($__internal_bfeeefc0b6fe52351b55777555d6b97842f6b1940556e4c0ee5265d4dc2e10ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        $__internal_66d51d2052b0f24923ea7d5a1d8a12bd07b211348c68bde26e70bd6ec84349b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d51d2052b0f24923ea7d5a1d8a12bd07b211348c68bde26e70bd6ec84349b7->enter($__internal_66d51d2052b0f24923ea7d5a1d8a12bd07b211348c68bde26e70bd6ec84349b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        // line 35
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 35, $this->getSourceContext()); })()), "image", array()), "html", null, true);
        echo "\" alt=\"\" />
                                ";
        
        $__internal_66d51d2052b0f24923ea7d5a1d8a12bd07b211348c68bde26e70bd6ec84349b7->leave($__internal_66d51d2052b0f24923ea7d5a1d8a12bd07b211348c68bde26e70bd6ec84349b7_prof);

        
        $__internal_bfeeefc0b6fe52351b55777555d6b97842f6b1940556e4c0ee5265d4dc2e10ab->leave($__internal_bfeeefc0b6fe52351b55777555d6b97842f6b1940556e4c0ee5265d4dc2e10ab_prof);

    }

    // line 37
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        $__internal_2f8a50eec2713955325be974b70a496b77fdfa0f66acbacce599c776c89d2dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8a50eec2713955325be974b70a496b77fdfa0f66acbacce599c776c89d2dc8->enter($__internal_2f8a50eec2713955325be974b70a496b77fdfa0f66acbacce599c776c89d2dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        $__internal_c3e113254968df00d95628ca5ce142ee4682a36f71f3f35aee947a1ba9188d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e113254968df00d95628ca5ce142ee4682a36f71f3f35aee947a1ba9188d5b->enter($__internal_c3e113254968df00d95628ca5ce142ee4682a36f71f3f35aee947a1ba9188d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 38
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 38, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "</span>
                                ";
        
        $__internal_c3e113254968df00d95628ca5ce142ee4682a36f71f3f35aee947a1ba9188d5b->leave($__internal_c3e113254968df00d95628ca5ce142ee4682a36f71f3f35aee947a1ba9188d5b_prof);

        
        $__internal_2f8a50eec2713955325be974b70a496b77fdfa0f66acbacce599c776c89d2dc8->leave($__internal_2f8a50eec2713955325be974b70a496b77fdfa0f66acbacce599c776c89d2dc8_prof);

    }

    // line 47
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        $__internal_5eb8a0f601030446eb1de08e6c20ca1eff04ab36977de12aeec046fc3ce1586e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb8a0f601030446eb1de08e6c20ca1eff04ab36977de12aeec046fc3ce1586e->enter($__internal_5eb8a0f601030446eb1de08e6c20ca1eff04ab36977de12aeec046fc3ce1586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        $__internal_7eb132de33216056446198a5c34ed990a3ccd04b2477d433c31cbbcb7244fbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb132de33216056446198a5c34ed990a3ccd04b2477d433c31cbbcb7244fbb1->enter($__internal_7eb132de33216056446198a5c34ed990a3ccd04b2477d433c31cbbcb7244fbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 48
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 48, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 48, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 49, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "
                                ";
        
        $__internal_7eb132de33216056446198a5c34ed990a3ccd04b2477d433c31cbbcb7244fbb1->leave($__internal_7eb132de33216056446198a5c34ed990a3ccd04b2477d433c31cbbcb7244fbb1_prof);

        
        $__internal_5eb8a0f601030446eb1de08e6c20ca1eff04ab36977de12aeec046fc3ce1586e->leave($__internal_5eb8a0f601030446eb1de08e6c20ca1eff04ab36977de12aeec046fc3ce1586e_prof);

    }

    // line 64
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        $__internal_acddc9546372dc821f83307d9401f47f3b98f24085c98290d53127269775f769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acddc9546372dc821f83307d9401f47f3b98f24085c98290d53127269775f769->enter($__internal_acddc9546372dc821f83307d9401f47f3b98f24085c98290d53127269775f769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        $__internal_1a86c415296544fd59617dbf5924085a932081fba9fabdd8448392b3d47d4c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a86c415296544fd59617dbf5924085a932081fba9fabdd8448392b3d47d4c9d->enter($__internal_1a86c415296544fd59617dbf5924085a932081fba9fabdd8448392b3d47d4c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 65
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 65, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 65, $this->getSourceContext()); })())), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 65, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method"))) {
            // line 66
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 66, $this->getSourceContext()); })()), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 66, $this->getSourceContext()); })()), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 66, $this->getSourceContext()); })())))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 66, $this->getSourceContext()); })()), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 67
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 67, $this->getSourceContext()); })()), "hasAccess", array(0 => "show", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 67, $this->getSourceContext()); })())), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 67, $this->getSourceContext()); })()), "hasRoute", array(0 => "show"), "method"))) {
            // line 68
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 68, $this->getSourceContext()); })()), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 68, $this->getSourceContext()); })()), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 68, $this->getSourceContext()); })())))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 68, $this->getSourceContext()); })()), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 70
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 70, $this->getSourceContext()); })()), "title", array()), 40), "html", null, true);
            echo "
                                ";
        }
        // line 72
        echo "                            ";
        
        $__internal_1a86c415296544fd59617dbf5924085a932081fba9fabdd8448392b3d47d4c9d->leave($__internal_1a86c415296544fd59617dbf5924085a932081fba9fabdd8448392b3d47d4c9d_prof);

        
        $__internal_acddc9546372dc821f83307d9401f47f3b98f24085c98290d53127269775f769->leave($__internal_acddc9546372dc821f83307d9401f47f3b98f24085c98290d53127269775f769_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 72,  267 => 70,  259 => 68,  257 => 67,  250 => 66,  247 => 65,  238 => 64,  226 => 49,  221 => 48,  212 => 47,  199 => 38,  190 => 37,  177 => 35,  168 => 34,  155 => 84,  141 => 83,  137 => 81,  134 => 80,  130 => 78,  128 => 77,  122 => 73,  120 => 64,  117 => 63,  113 => 61,  107 => 59,  105 => 58,  101 => 56,  98 => 55,  93 => 51,  91 => 47,  88 => 46,  84 => 40,  81 => 37,  79 => 34,  75 => 32,  68 => 25,  65 => 24,  62 => 23,  45 => 22,  40 => 20,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}\">
        <div class=\"row\">
            {% for object in admin.datagrid.results %}
                {% set meta = admin.getObjectMetadata(object) %}

                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"{{ admin.id(object) }}\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            {#
                                This box will be display when the mouse is not on the box
                            #}

                            <div class=\"mosaic-inner-box-default\">
                                {% block sonata_mosaic_background %}
                                    <img src=\"{{ meta.image }}\" alt=\"\" />
                                {% endblock %}
                                {% block sonata_mosaic_default_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                {% endblock %}
                            </div>

                            {#
                                This box will be display when the mouse is on the box
                                You can add more description
                            #}
                            <div class=\"mosaic-inner-box-hover\">
                                {% block sonata_mosaic_hover_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                    {{ meta.description }}
                                {% endblock %}
                            </div>
                        </div>

                        {# NEXT_MAJOR : remove this assignment #}
                        {% set export_formats = export_formats|default(admin.getExportFormats) %}

                        <div class=\"mosaic-inner-text\">
                            {% if (admin.hasRoute('batch') and batchactions|length > 0) or (admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length) %}
                                <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
                            {% else %}
                                &nbsp;
                            {% endif %}

                            {% block sonata_mosaic_description %}
                                {% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
                                    <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid(admin) }) }}\">{{ meta.title|truncate(40) }}</a>
                                {% elseif admin.hasAccess('show', object) and admin.hasRoute('show') %}
                                    <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('show', {'id' : object|sonata_urlsafeid(admin) }) }}\">{{ meta.title|truncate(40) }}</a>
                                {% else %}
                                    {{ meta.title|truncate(40) }}
                                {% endif %}
                            {% endblock %}
                        </div>
                    </div>
                </div>

                {% if loop.index % 4 == 0 %}
                    <div class=\"clearfix hidden-xs\"></div>
                {% endif %}
                {% if loop.index % 2 == 0 %}
                    <div class=\"clearfix visible-xs\"></div>
                {% endif %}
            {% endfor %}
        </div>
    </td>
</tr>
", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_outer_rows_mosaic.html.twig");
    }
}