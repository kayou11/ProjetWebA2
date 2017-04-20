<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_d47fd7ea499f854ebb2af367fafa2192c460e9afd64f9b5d1816431c2bbf6e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin_pool"] ?? null), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  73 => 31,  70 => 30,  56 => 20,  53 => 19,  48 => 17,  43 => 16,  38 => 15,  33 => 14,  24 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle::empty_layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
