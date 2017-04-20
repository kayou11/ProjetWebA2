<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_484f7d852d1c674c6fdd1a3755bd22d2d105e1a25d38acbb4b4e2172140195af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eadcc8abdf7afbde216000a1b8b136420f7eda859a0e4785339ac126d0f07146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadcc8abdf7afbde216000a1b8b136420f7eda859a0e4785339ac126d0f07146->enter($__internal_eadcc8abdf7afbde216000a1b8b136420f7eda859a0e4785339ac126d0f07146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b7e773a068d70e1a2b89e7df00dc32d443c97b1b3a5c6052a27c9c7816d87fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e773a068d70e1a2b89e7df00dc32d443c97b1b3a5c6052a27c9c7816d87fd7->enter($__internal_b7e773a068d70e1a2b89e7df00dc32d443c97b1b3a5c6052a27c9c7816d87fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eadcc8abdf7afbde216000a1b8b136420f7eda859a0e4785339ac126d0f07146->leave($__internal_eadcc8abdf7afbde216000a1b8b136420f7eda859a0e4785339ac126d0f07146_prof);

        
        $__internal_b7e773a068d70e1a2b89e7df00dc32d443c97b1b3a5c6052a27c9c7816d87fd7->leave($__internal_b7e773a068d70e1a2b89e7df00dc32d443c97b1b3a5c6052a27c9c7816d87fd7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c18d80b131809b9c2aa90fb1936dbef1fa639c295ef5935e96c4085d260df8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c18d80b131809b9c2aa90fb1936dbef1fa639c295ef5935e96c4085d260df8f->enter($__internal_5c18d80b131809b9c2aa90fb1936dbef1fa639c295ef5935e96c4085d260df8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b1dcb5de947d745f03c3e1e551240a66b967c9c7411e587b3d299bc8677e24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1dcb5de947d745f03c3e1e551240a66b967c9c7411e587b3d299bc8677e24d->enter($__internal_8b1dcb5de947d745f03c3e1e551240a66b967c9c7411e587b3d299bc8677e24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8b1dcb5de947d745f03c3e1e551240a66b967c9c7411e587b3d299bc8677e24d->leave($__internal_8b1dcb5de947d745f03c3e1e551240a66b967c9c7411e587b3d299bc8677e24d_prof);

        
        $__internal_5c18d80b131809b9c2aa90fb1936dbef1fa639c295ef5935e96c4085d260df8f->leave($__internal_5c18d80b131809b9c2aa90fb1936dbef1fa639c295ef5935e96c4085d260df8f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
