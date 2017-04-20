<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_884eb31974ec38a272f58763ddde665afeb0d404f2f823dc30b0ee66f82abf60 extends Twig_Template
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
        $__internal_47bfa7693206e16b2f870eb417710bab6fbe2f24df5f6617e5c44f8b4c9b1f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bfa7693206e16b2f870eb417710bab6fbe2f24df5f6617e5c44f8b4c9b1f11->enter($__internal_47bfa7693206e16b2f870eb417710bab6fbe2f24df5f6617e5c44f8b4c9b1f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b5dbe189f93977d6c705a6dc27e2296c1507326cdafcbd48845580f371eb4250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dbe189f93977d6c705a6dc27e2296c1507326cdafcbd48845580f371eb4250->enter($__internal_b5dbe189f93977d6c705a6dc27e2296c1507326cdafcbd48845580f371eb4250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_47bfa7693206e16b2f870eb417710bab6fbe2f24df5f6617e5c44f8b4c9b1f11->leave($__internal_47bfa7693206e16b2f870eb417710bab6fbe2f24df5f6617e5c44f8b4c9b1f11_prof);

        
        $__internal_b5dbe189f93977d6c705a6dc27e2296c1507326cdafcbd48845580f371eb4250->leave($__internal_b5dbe189f93977d6c705a6dc27e2296c1507326cdafcbd48845580f371eb4250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
