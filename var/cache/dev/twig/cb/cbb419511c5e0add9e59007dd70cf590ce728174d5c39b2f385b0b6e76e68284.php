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
        $__internal_25799b2d5bccd93683c8fb192afc69aed75c1ddfa371bec0a208a731cfd8f498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25799b2d5bccd93683c8fb192afc69aed75c1ddfa371bec0a208a731cfd8f498->enter($__internal_25799b2d5bccd93683c8fb192afc69aed75c1ddfa371bec0a208a731cfd8f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_eec7c86e24ff07299df768e2fc4e2d16a86ab31728f3037815c8c045a6c781e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec7c86e24ff07299df768e2fc4e2d16a86ab31728f3037815c8c045a6c781e9->enter($__internal_eec7c86e24ff07299df768e2fc4e2d16a86ab31728f3037815c8c045a6c781e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25799b2d5bccd93683c8fb192afc69aed75c1ddfa371bec0a208a731cfd8f498->leave($__internal_25799b2d5bccd93683c8fb192afc69aed75c1ddfa371bec0a208a731cfd8f498_prof);

        
        $__internal_eec7c86e24ff07299df768e2fc4e2d16a86ab31728f3037815c8c045a6c781e9->leave($__internal_eec7c86e24ff07299df768e2fc4e2d16a86ab31728f3037815c8c045a6c781e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c147fbca52c9cfb9ec16a65e7a7851ec90f5a4b1cc6630d8c4c486996daac93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c147fbca52c9cfb9ec16a65e7a7851ec90f5a4b1cc6630d8c4c486996daac93f->enter($__internal_c147fbca52c9cfb9ec16a65e7a7851ec90f5a4b1cc6630d8c4c486996daac93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d170f54907afb7292fd42247471836a6fb41e672f974573d5b2fb3e8762c201c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d170f54907afb7292fd42247471836a6fb41e672f974573d5b2fb3e8762c201c->enter($__internal_d170f54907afb7292fd42247471836a6fb41e672f974573d5b2fb3e8762c201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d170f54907afb7292fd42247471836a6fb41e672f974573d5b2fb3e8762c201c->leave($__internal_d170f54907afb7292fd42247471836a6fb41e672f974573d5b2fb3e8762c201c_prof);

        
        $__internal_c147fbca52c9cfb9ec16a65e7a7851ec90f5a4b1cc6630d8c4c486996daac93f->leave($__internal_c147fbca52c9cfb9ec16a65e7a7851ec90f5a4b1cc6630d8c4c486996daac93f_prof);

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
