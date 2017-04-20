<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b7d57d9652fd84cc71f97dbabc790607c8c4d373583aca2747939596178a16fb extends Twig_Template
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
        $__internal_09f95ce38113e9035245b5a049e7e26781158a4e09132e8e9744b15c4f4403c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f95ce38113e9035245b5a049e7e26781158a4e09132e8e9744b15c4f4403c9->enter($__internal_09f95ce38113e9035245b5a049e7e26781158a4e09132e8e9744b15c4f4403c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fa761d64c4b9154507fb4e070cb3a00e462a65c328b83aeac82ebd5b8be260c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa761d64c4b9154507fb4e070cb3a00e462a65c328b83aeac82ebd5b8be260c1->enter($__internal_fa761d64c4b9154507fb4e070cb3a00e462a65c328b83aeac82ebd5b8be260c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_09f95ce38113e9035245b5a049e7e26781158a4e09132e8e9744b15c4f4403c9->leave($__internal_09f95ce38113e9035245b5a049e7e26781158a4e09132e8e9744b15c4f4403c9_prof);

        
        $__internal_fa761d64c4b9154507fb4e070cb3a00e462a65c328b83aeac82ebd5b8be260c1->leave($__internal_fa761d64c4b9154507fb4e070cb3a00e462a65c328b83aeac82ebd5b8be260c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
