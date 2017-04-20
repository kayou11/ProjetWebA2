<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4a0e4b2201b584a3cacda0260291876090f887dc72cbcbe4af5d0b4025eaa409 extends Twig_Template
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
        $__internal_8662cf0a82538d26878afca3e97960d04536c262fc9d51a7cde164e6e832e31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8662cf0a82538d26878afca3e97960d04536c262fc9d51a7cde164e6e832e31b->enter($__internal_8662cf0a82538d26878afca3e97960d04536c262fc9d51a7cde164e6e832e31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9300b10f6a0455564114dac51837aadd065b2b8a91cc887261f2ed24bff16c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9300b10f6a0455564114dac51837aadd065b2b8a91cc887261f2ed24bff16c5f->enter($__internal_9300b10f6a0455564114dac51837aadd065b2b8a91cc887261f2ed24bff16c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8662cf0a82538d26878afca3e97960d04536c262fc9d51a7cde164e6e832e31b->leave($__internal_8662cf0a82538d26878afca3e97960d04536c262fc9d51a7cde164e6e832e31b_prof);

        
        $__internal_9300b10f6a0455564114dac51837aadd065b2b8a91cc887261f2ed24bff16c5f->leave($__internal_9300b10f6a0455564114dac51837aadd065b2b8a91cc887261f2ed24bff16c5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
