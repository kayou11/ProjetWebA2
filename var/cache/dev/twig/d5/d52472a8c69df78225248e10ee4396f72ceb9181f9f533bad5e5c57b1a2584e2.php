<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7ba14e44b8493878231a2417bacaf9b9aad8e3a27d8648f5877cd6f496f0dea extends Twig_Template
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
        $__internal_93f93b6f16b9b1176a64041112a089aa3431f7059be3c720327493f7f14c44ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f93b6f16b9b1176a64041112a089aa3431f7059be3c720327493f7f14c44ad->enter($__internal_93f93b6f16b9b1176a64041112a089aa3431f7059be3c720327493f7f14c44ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e3f7fd1ffa26347aec24b09e355152cc1e452a4637ce7b6fcba1bae2e5f28daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f7fd1ffa26347aec24b09e355152cc1e452a4637ce7b6fcba1bae2e5f28daf->enter($__internal_e3f7fd1ffa26347aec24b09e355152cc1e452a4637ce7b6fcba1bae2e5f28daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_93f93b6f16b9b1176a64041112a089aa3431f7059be3c720327493f7f14c44ad->leave($__internal_93f93b6f16b9b1176a64041112a089aa3431f7059be3c720327493f7f14c44ad_prof);

        
        $__internal_e3f7fd1ffa26347aec24b09e355152cc1e452a4637ce7b6fcba1bae2e5f28daf->leave($__internal_e3f7fd1ffa26347aec24b09e355152cc1e452a4637ce7b6fcba1bae2e5f28daf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
