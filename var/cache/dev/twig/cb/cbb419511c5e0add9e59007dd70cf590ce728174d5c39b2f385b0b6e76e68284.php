<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_202dee41f4da2cd2f1af3d4b917e0a6da880b023a7d84c90e072d4cc0cfa7124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_767cf2d2320370180e145a80d7147ba06f4bab0efe1bf3740576392d96f9af57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767cf2d2320370180e145a80d7147ba06f4bab0efe1bf3740576392d96f9af57->enter($__internal_767cf2d2320370180e145a80d7147ba06f4bab0efe1bf3740576392d96f9af57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_a4c41aae0f388792339b99dbdc2a535df4e81927268123c0ebe2f20d747e10f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c41aae0f388792339b99dbdc2a535df4e81927268123c0ebe2f20d747e10f6->enter($__internal_a4c41aae0f388792339b99dbdc2a535df4e81927268123c0ebe2f20d747e10f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767cf2d2320370180e145a80d7147ba06f4bab0efe1bf3740576392d96f9af57->leave($__internal_767cf2d2320370180e145a80d7147ba06f4bab0efe1bf3740576392d96f9af57_prof);

        
        $__internal_a4c41aae0f388792339b99dbdc2a535df4e81927268123c0ebe2f20d747e10f6->leave($__internal_a4c41aae0f388792339b99dbdc2a535df4e81927268123c0ebe2f20d747e10f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_018d39a6f71b118d7b0b7f1fd0f921f93468e860ebb2a406fd356147f5fbd2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018d39a6f71b118d7b0b7f1fd0f921f93468e860ebb2a406fd356147f5fbd2e6->enter($__internal_018d39a6f71b118d7b0b7f1fd0f921f93468e860ebb2a406fd356147f5fbd2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f789cd86fdccf29183f37d80089d2f72fb776d15415228e5fbf8ff71bd2d2e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f789cd86fdccf29183f37d80089d2f72fb776d15415228e5fbf8ff71bd2d2e5f->enter($__internal_f789cd86fdccf29183f37d80089d2f72fb776d15415228e5fbf8ff71bd2d2e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f789cd86fdccf29183f37d80089d2f72fb776d15415228e5fbf8ff71bd2d2e5f->leave($__internal_f789cd86fdccf29183f37d80089d2f72fb776d15415228e5fbf8ff71bd2d2e5f_prof);

        
        $__internal_018d39a6f71b118d7b0b7f1fd0f921f93468e860ebb2a406fd356147f5fbd2e6->leave($__internal_018d39a6f71b118d7b0b7f1fd0f921f93468e860ebb2a406fd356147f5fbd2e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
