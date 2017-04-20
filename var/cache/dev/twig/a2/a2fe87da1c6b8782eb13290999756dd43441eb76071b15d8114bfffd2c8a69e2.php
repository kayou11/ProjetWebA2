<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_195beb20c0e01ca53ab129a29d8347405c1916d23b24077f6467cd4c2192c2de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f77b715f8734d443aa4b7c290cc976ea8bb83f17e3c6d264ba7e92c19b59e17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77b715f8734d443aa4b7c290cc976ea8bb83f17e3c6d264ba7e92c19b59e17e->enter($__internal_f77b715f8734d443aa4b7c290cc976ea8bb83f17e3c6d264ba7e92c19b59e17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_5e6662bcc14c90fe6f32a29765dc67146cc364b44c6d38bc96df1c0dcf2a08d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6662bcc14c90fe6f32a29765dc67146cc364b44c6d38bc96df1c0dcf2a08d9->enter($__internal_5e6662bcc14c90fe6f32a29765dc67146cc364b44c6d38bc96df1c0dcf2a08d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77b715f8734d443aa4b7c290cc976ea8bb83f17e3c6d264ba7e92c19b59e17e->leave($__internal_f77b715f8734d443aa4b7c290cc976ea8bb83f17e3c6d264ba7e92c19b59e17e_prof);

        
        $__internal_5e6662bcc14c90fe6f32a29765dc67146cc364b44c6d38bc96df1c0dcf2a08d9->leave($__internal_5e6662bcc14c90fe6f32a29765dc67146cc364b44c6d38bc96df1c0dcf2a08d9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7f73c0a1f359a319d178bafecea4fe1383e5e4f94ebda480307b481dc3e123c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f73c0a1f359a319d178bafecea4fe1383e5e4f94ebda480307b481dc3e123c8->enter($__internal_7f73c0a1f359a319d178bafecea4fe1383e5e4f94ebda480307b481dc3e123c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f7fa8f4be6e6e18ac6d25a8cedbe4c79e9dbcd49cb3c83efb436d9ecb7f47fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fa8f4be6e6e18ac6d25a8cedbe4c79e9dbcd49cb3c83efb436d9ecb7f47fc5->enter($__internal_f7fa8f4be6e6e18ac6d25a8cedbe4c79e9dbcd49cb3c83efb436d9ecb7f47fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f7fa8f4be6e6e18ac6d25a8cedbe4c79e9dbcd49cb3c83efb436d9ecb7f47fc5->leave($__internal_f7fa8f4be6e6e18ac6d25a8cedbe4c79e9dbcd49cb3c83efb436d9ecb7f47fc5_prof);

        
        $__internal_7f73c0a1f359a319d178bafecea4fe1383e5e4f94ebda480307b481dc3e123c8->leave($__internal_7f73c0a1f359a319d178bafecea4fe1383e5e4f94ebda480307b481dc3e123c8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
