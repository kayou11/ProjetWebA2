<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_224edc3eebe9160244e293a049b627a582d39eb65b0175808ed683d69c16a4bc extends Twig_Template
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
        $__internal_68c2756965ca8faea13eff690f3c40a958148fbea1d0783b024b80a1623a40b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c2756965ca8faea13eff690f3c40a958148fbea1d0783b024b80a1623a40b5->enter($__internal_68c2756965ca8faea13eff690f3c40a958148fbea1d0783b024b80a1623a40b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig"));

        $__internal_9e99cc93ffb83a1a1da3c566a30b95eb9ac88f0345ea919eb657736ffa0aaf9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e99cc93ffb83a1a1da3c566a30b95eb9ac88f0345ea919eb657736ffa0aaf9e->enter($__internal_9e99cc93ffb83a1a1da3c566a30b95eb9ac88f0345ea919eb657736ffa0aaf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig"));

        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 26, $this->getSourceContext()); })());
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_append_form_element", (array("code" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 36
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 36, $this->getSourceContext()); })()), "admin", array()), "root", array()), "code", array()), "elementId" =>         // line 37
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 37, $this->getSourceContext()); })()), "objectId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 38
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 38, $this->getSourceContext()); })()), "admin", array()), "root", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 38, $this->getSourceContext()); })()), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 39
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 39, $this->getSourceContext()); })()), "admin", array()), "root", array()), "uniqid", array()), "subclass" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 40
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) + twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 41
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 41, $this->getSourceContext()); })()), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 50, $this->getSourceContext()); })());
        echo "').replaceWith(html); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 52
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 52, $this->getSourceContext()); })());
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 58
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 58, $this->getSourceContext()); })());
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 59
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })());
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 66
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 66, $this->getSourceContext()); })());
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 70
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 70, $this->getSourceContext()); })());
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 75
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 75, $this->getSourceContext()); })());
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 75, $this->getSourceContext()); })());
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 79
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 79, $this->getSourceContext()); })());
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
        
        $__internal_68c2756965ca8faea13eff690f3c40a958148fbea1d0783b024b80a1623a40b5->leave($__internal_68c2756965ca8faea13eff690f3c40a958148fbea1d0783b024b80a1623a40b5_prof);

        
        $__internal_9e99cc93ffb83a1a1da3c566a30b95eb9ac88f0345ea919eb657736ffa0aaf9e->leave($__internal_9e99cc93ffb83a1a1da3c566a30b95eb9ac88f0345ea919eb657736ffa0aaf9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 79,  113 => 75,  105 => 70,  98 => 66,  88 => 59,  84 => 58,  75 => 52,  70 => 50,  58 => 41,  57 => 40,  56 => 39,  55 => 38,  54 => 37,  53 => 36,  52 => 35,  40 => 26,  32 => 20,  29 => 18,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


{#

This code manage the one-to-many association field popup

#}

{% autoescape false %}

<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_{{ id }} = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '{{ path('sonata_admin_append_form_element', {
                'code':      sonata_admin.admin.root.code,
                'elementId': id,
                'objectId':  sonata_admin.admin.root.id(sonata_admin.admin.root.subject),
                'uniqid':    sonata_admin.admin.root.uniqid,
                'subclass': app.request.query.get('subclass'),
            } + sonata_admin.field_description.getOption('link_parameters', {})) }}',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_{{ id }}').replaceWith(html); // replace the html

                Admin.shared_setup(jQuery('#field_container_{{ id }}'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-{{ id }}').trigger('sonata.add_element');
                jQuery('#field_container_{{ id }}').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_{{ id }} = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_{{ id }}(link) {

        link.onclick = null;

        // initialize component
        field_widget_{{ id }} = jQuery(\"#field_widget_{{ id }}\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_{{ id }})
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

{% endautoescape %}
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_association_script.html.twig");
    }
}
