<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ecc6441ba417b6c0f02f6d653616fe512447d75b26dede6a77c3bc97d769b5c0 extends Twig_Template
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
        $__internal_2ae3f7a4ae3c06703a2d3172e10eba56aa250e58bcb042a8f4b2a6c17804c64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae3f7a4ae3c06703a2d3172e10eba56aa250e58bcb042a8f4b2a6c17804c64f->enter($__internal_2ae3f7a4ae3c06703a2d3172e10eba56aa250e58bcb042a8f4b2a6c17804c64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b8824c33deb0b5d3babfda2674e1c07d0f1c4f9b8882db3eb541ca4c3e12005f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8824c33deb0b5d3babfda2674e1c07d0f1c4f9b8882db3eb541ca4c3e12005f->enter($__internal_b8824c33deb0b5d3babfda2674e1c07d0f1c4f9b8882db3eb541ca4c3e12005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2ae3f7a4ae3c06703a2d3172e10eba56aa250e58bcb042a8f4b2a6c17804c64f->leave($__internal_2ae3f7a4ae3c06703a2d3172e10eba56aa250e58bcb042a8f4b2a6c17804c64f_prof);

        
        $__internal_b8824c33deb0b5d3babfda2674e1c07d0f1c4f9b8882db3eb541ca4c3e12005f->leave($__internal_b8824c33deb0b5d3babfda2674e1c07d0f1c4f9b8882db3eb541ca4c3e12005f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/button_attributes.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
