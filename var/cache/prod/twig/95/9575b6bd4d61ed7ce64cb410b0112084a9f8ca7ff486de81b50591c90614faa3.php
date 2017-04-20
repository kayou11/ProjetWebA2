<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5191473abdb35d148a365e5b65113a7ba78ef072991a82e9349ddeab52f0a597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'img_logo_path' => array($this, 'block_img_logo_path'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'img_footer_path' => array($this, 'block_img_footer_path'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inscrivez-vous !";
    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
";
    }

    // line 9
    public function block_img_logo_path($context, array $blocks = array())
    {
        echo "../../public/img/";
    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 12)->display($context);
    }

    // line 15
    public function block_img_footer_path($context, array $blocks = array())
    {
        echo "../../public/img/";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  55 => 12,  52 => 11,  46 => 9,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
